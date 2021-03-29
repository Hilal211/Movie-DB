@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pagesWithNoRepeatedFiedl.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.pages-with-no-repeated-fields.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('history') ? 'has-error' : '' }}">
                <label for="history">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.history') }}</label>
                <textarea id="history" name="history" class="form-control ckeditor">{{ old('history', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->history : '') }}</textarea>
                @if($errors->has('history'))
                    <em class="invalid-feedback">
                        {{ $errors->first('history') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.history_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('short_history') ? 'has-error' : '' }}">
                <label for="short_history">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.short_history') }}</label>
                <textarea id="short_history" name="short_history" class="form-control ">{{ old('short_history', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->short_history : '') }}</textarea>
                @if($errors->has('short_history'))
                    <em class="invalid-feedback">
                        {{ $errors->first('short_history') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.short_history_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('about_title') ? 'has-error' : '' }}">
                <label for="about_title">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_title') }}</label>
                <input type="text" id="about_title" name="about_title" class="form-control" value="{{ old('about_title', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->about_title : '') }}">
                @if($errors->has('about_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('about_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('about_subtitle') ? 'has-error' : '' }}">
                <label for="about_subtitle">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_subtitle') }}</label>
                <input type="text" id="about_subtitle" name="about_subtitle" class="form-control" value="{{ old('about_subtitle', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->about_subtitle : '') }}">
                @if($errors->has('about_subtitle'))
                    <em class="invalid-feedback">
                        {{ $errors->first('about_subtitle') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_subtitle_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('footer_description') ? 'has-error' : '' }}">
                <label for="footer_description">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.footer_description') }}</label>
                <input type="text" id="footer_description" name="footer_description" class="form-control" value="{{ old('footer_description', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->footer_description : '') }}">
                @if($errors->has('footer_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('footer_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.footer_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('social_media_facebook') ? 'has-error' : '' }}">
                <label for="social_media_facebook">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_facebook') }}</label>
                <input type="text" id="social_media_facebook" name="social_media_facebook" class="form-control" value="{{ old('social_media_facebook', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->social_media_facebook : '') }}">
                @if($errors->has('social_media_facebook'))
                    <em class="invalid-feedback">
                        {{ $errors->first('social_media_facebook') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_facebook_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('social_media_twitter') ? 'has-error' : '' }}">
                <label for="social_media_twitter">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_twitter') }}</label>
                <input type="text" id="social_media_twitter" name="social_media_twitter" class="form-control" value="{{ old('social_media_twitter', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->social_media_twitter : '') }}">
                @if($errors->has('social_media_twitter'))
                    <em class="invalid-feedback">
                        {{ $errors->first('social_media_twitter') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_twitter_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('social_media_instagram') ? 'has-error' : '' }}">
                <label for="social_media_instagram">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_instagram') }}</label>
                <input type="text" id="social_media_instagram" name="social_media_instagram" class="form-control" value="{{ old('social_media_instagram', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->social_media_instagram : '') }}">
                @if($errors->has('social_media_instagram'))
                    <em class="invalid-feedback">
                        {{ $errors->first('social_media_instagram') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_instagram_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('social_media_youtube') ? 'has-error' : '' }}">
                <label for="social_media_youtube">{{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_youtube') }}</label>
                <input type="text" id="social_media_youtube" name="social_media_youtube" class="form-control" value="{{ old('social_media_youtube', isset($pagesWithNoRepeatedFiedl) ? $pagesWithNoRepeatedFiedl->social_media_youtube : '') }}">
                @if($errors->has('social_media_youtube'))
                    <em class="invalid-feedback">
                        {{ $errors->first('social_media_youtube') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_youtube_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
