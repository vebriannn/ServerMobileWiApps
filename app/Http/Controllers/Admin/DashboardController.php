<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();

        $news = News::where('user_id', $user->id)->get();
        $totaldata = News::where('user_id', $user->id)->count();
        return view('admin.dashboard', compact('news', 'totaldata'));
    }

    public function create() {
        return view('admin.crud.tambah');
    }

    public function store(Request $requests) {

        $data = $requests->except('_token', '_method');

        $requests->validate([
            'jenis_wisata' => 'required|max:255',
            'title' => 'required',
            'tag' => 'required',
            'short_deskripsi' => 'required',
            'long_deskripsi' => 'required',
            'location' => 'required',
            'harga' => 'required',
            'ranting' => 'required',
            'url_images' => 'required|mimes:jpg,jpeg,png'
        ]);

        $images =  $requests->url_images;

        $getNameImages = $images->getClientOriginalName();
        $newNameImages = Str::random(10).$getNameImages;
        $data['user_id'] = Auth::user()->id;

        // store images
        $images->storeAs('public/images_wisata', $newNameImages);
        $data['url_images'] = $newNameImages;

        News::create($data);

        return redirect()->route('admin.dashboard')->with(['success' => 'Data Berhasil Ditambah']);

    }

    public function edit(string $id) {
        $news = News::where('id', $id)->get();
        return view('admin.crud.edit', compact('news'));
    }

    public function updated(Request $requests, string $id) {
        $data = $requests->except('_token', '_method');

        $requests->validate([
            'jenis_wisata' => 'required|max:255',
            'title' => 'required',
            'tag' => 'required',
            'short_deskripsi' => 'required',
            'long_deskripsi' => 'required',
            'location' => 'required',
            'harga' => 'required',
            'ranting' => 'required',
        ]);

        $news = News::where('id', $id)->first();

        $images =  $requests->url_images;
        if($images) {
            $getNameImages = $images->getClientOriginalName();
            $newNameImages = Str::random(10).$getNameImages;
            $images->storeAs('public/images_wisata', $newNameImages);
            $data['url_images'] = $newNameImages;

            Storage::disk('public')->delete('images_wisata/'.$news->url_images);
        }

        $news->update($data);

        return redirect()->route('admin.dashboard')->with(['success' => 'Data Berhasil Ditambah']);
    }

    public function destroy(string $id) {
        $news = News::where('id', $id)->first();

        Storage::disk('public')->delete('images_wisata/'.$news->url_images);
        $news->delete();

        return redirect()->route('admin.dashboard')->with(['success' => 'Data Berhasil Di Delete']);
    }

}
