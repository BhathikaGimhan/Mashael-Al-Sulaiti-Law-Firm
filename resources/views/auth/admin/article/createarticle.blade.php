@extends('layouts.adminlayout.main')

@section('title', 'Mashael Alsulaiti Law Firm | Create Article ')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Create Article</h1>
        <div class="">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-dark"><i class="ai-arrow-left me-2"></i>Go Back</a>
        </div>
    </div>
    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="/manage/articles" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="article_title">Article Title</label>
                            <input type="text" class="form-control @error('article_title') is-invalid @enderror"
                                id="article_title" name="article_title" placeholder="Enter article title">
                            @error('article_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="@error('article_category_id') is-invalid @enderror">
                                <label for="article_category_id">Category</label>
                                <select class="form-select js-choice  " id="article_category_id" name="article_category_id">
                                    <option value="" disabled selected>Select article category</option>
                                    @foreach ($articleCategories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('article_category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->article_category_name }}</option>
                                    @endforeach
                                </select>
                                @error('article_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lang_type">{{ __('Language') }}</label>
                            <select id="lang_type" class="form-control @error('lang_type') is-invalid @enderror"
                                name="lang_type" required>
                                <option value="en">{{ __('English') }}</option>
                                <option value="fr">{{ __('French') }}</option>
                                <option value="ar">{{ __('Arabic') }}</option>
                            </select>
                            @error('lang_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="my-3">
                    <div id="holder" class="my-3" style="max-height:120px;"></div>
                    <div class="form-group">
                        <label for="featured_image_public_path">Featured Image:</label>
                        <div class="input-group mt-2">
                            <span class="input-group-btn">
                                <a id="image-uploader" name="featured_image_public_path" data-input="thumbnail"
                                    data-preview="holder" class="btn btn-primary">
                                    <i class="far fa-image"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail"
                                class="form-control @error('featured_image_public_path') is-invalid @enderror"
                                type="text" name="featured_image_public_path">
                            @error('featured_image_public_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="article_description">{{ __('Article Description') }}</label>
                    <textarea id="article_description" class="form-control @error('article_description') is-invalid @enderror"
                        name="article_description" required autocomplete="article_description">{{ old('article_description') }}</textarea>
                    @error('article_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="article_content">Article Content</label>
                    <textarea class="form-control @error('article_content') is-invalid @enderror" id="article_content"
                        name="article_content" placeholder="Enter article_content">{{ old('article_content') }}</textarea>
                    @error('article_content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="div">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-success mt-2 mb-2 mb-sm-0" type="submit">Submit Article</button>
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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('article_content', options);
    </script>
@endsection
