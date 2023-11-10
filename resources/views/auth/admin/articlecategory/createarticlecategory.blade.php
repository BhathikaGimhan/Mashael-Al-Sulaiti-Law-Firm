@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | All Article Categories')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Create Article Categories</h1>
        <div class="">
            <a href="{{ route('admin.article-categories.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go
                Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="/manage/article-categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="article_category">Category Name</label>
                    <input type="text" class="form-control @error('article_category_name') is-invalid @enderror"
                        id="article_category_name" name="article_category_name" placeholder="Enter category name">
                    @error('article_category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="my-3">
                    <div id="holder" class="my-3" style="max-height:120px;"></div>
                    <div class="form-group">
                        <label class="fw-bold opacity-75 mb-1" for="article_category_image">Featured Image:</label>
                        <div class="input-group mt-2">
                            <span class="input-group-btn">
                                <a id="image-uploader" name="article_category_image" data-input="thumbnail"
                                    data-preview="holder" class="btn btn-primary">
                                    <i class="far fa-image"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control @error('article_category_image') is-invalid @enderror"
                                type="text" name="article_category_image">
                            @error('article_category_image')
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
                            <button class="btn btn-success mt-2 mb-2 mb-sm-0" type="submit">Submit Category</button>
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

        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}

        $('#image-uploader').filemanager('image', {
            prefix: route_prefix
        });
        $('#file-uploader').filemanager('file', {
            prefix: route_prefix
        });
    </script>
@endsection
