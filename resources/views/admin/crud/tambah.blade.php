@extends('admin.crud.layouts.base')

@section('title', 'Tambah Data')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.create.store') }}">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenis_wisata">Jenis Wisata</label>
                            <select class="form-control" id="jenis_wisata" name="jenis_wisata">
                                <option value="pantai" selected>Pantai</option>
                                <option value="pegunungan">Pegunungan</option>
                            </select>
                            @error('jenis_wisata')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Example: Pantai Menganti" value="{{ old('title') }}">
                            @error('title')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" id="tag" name="tag"
                                placeholder="Example: Jetski, Kapal" value="{{ old('tag') }}">
                            @error('tag')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="short_deskripsi">Short Deskripsi</label>
                            <input type="text" class="form-control" id="short_deskripsi" name="short_deskripsi"
                                placeholder="Example: Pantai Ini Merupakan..." value="{{ old('short_deskripsi') }}">
                            @error('short_deskripsi')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="long_deskripsi">Long Deskripsi</label>
                            <input type="text" class="form-control" id="long_deskripsi" name="long_deskripsi"
                                placeholder="Example: Pantai Ini Merupakan..." value="{{ old('long_deskripsi') }}">
                            @error('long_deskripsi')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Example: Pantai Ini Berada Di Kebumen..." value="{{ old('location') }}">
                            @error('location')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga"
                                placeholder="Example: 10,000" value="{{ old('harga') }}">
                            @error('harga')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ranting">Ranting</label>
                            <input type="text" class="form-control" id="ranting" name="ranting"
                                placeholder="Example: 4,6" value="{{ old('ranting') }}">
                            @error('ranting')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url_images">Images</label>
                            <input type="file" id="url_images" class="form-control" name="url_images">
                            @error('url_images')
                                <div class="bg-gradient-danger pt-1 pb-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#release-date').datetimepicker({
            format: 'YYYY-MM-DD'
        })
    </script>
    <script>
        $('#release-date2').datetimepicker({
            format: 'YYYY-MM-DD'
        })
    </script>
@endsection
