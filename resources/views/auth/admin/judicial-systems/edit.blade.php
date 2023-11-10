@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Update Judicial Systems')
@section('content')
<div class="d-flex justify-content-between">
    <h1>Edit Judicial Systems</h1>
    <div class="">
        <a href="{{ route('admin.judicial-systems.index') }}" class="btn btn-dark"><i class="ai-arrow-left"></i>Go
            Back</a>
    </div>
</div>
<section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <form action="{{ route('admin.judicial-systems.update', $judicialSystem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $judicialSystem->title }}" placeholder="Enter title">
                @error('slug')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter description">{{old('description') ?? $judicialSystem->description}}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="content">Content</label>
                <textarea rows="5" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Enter content">{{old('content') ?? $judicialSystem->content}}</textarea>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="my-3">
                <div id="holder" class="my-3" style="width:120px;"><img src="{{ $judicialSystem->image }}" alt="Featured Image"></div>
                <div class="form-group">
                    <label class="fw-bold opacity-75 mb-1" for="image">Featured Image:</label>
                    <div class="input-group mt-2">
                        <span class="input-group-btn">
                            <a id="image-uploader" name="image" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="far fa-image"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control @error('image') is-invalid @enderror" type="text" name="image" value="{{ old('image') ?? $judicialSystem->image }}">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="div">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-success mt-2 mb-2 mb-sm-0" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection
@section('footer_scripts')
<script>
    var route_prefix = "/filemanager";

    {!!\File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}

    $('#image-uploader').filemanager('image', {
        prefix: route_prefix
    });
    $('#file-uploader').filemanager('file', {
        prefix: route_prefix
    });
</script>
@endsection