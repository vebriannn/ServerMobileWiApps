<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use App\Models\News;
use App\Http\Resources\NewsResource;

class ApiNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        // return response()->json($news);
        return NewsResource::collection($news);
    }

    public function search(Request $requests)
    {
        $query = $requests->query('query');
        if ($query) {
            // Menggunakan Eloquent model untuk mencari berita berdasarkan query
            $news = News::where('title', 'like', "%$query%")->get();
            return NewsResource::collection($news);
        } else {
            return response()->json(['error' => 'Query harus ada parameter!!!'], 400);
        }
    }
}
