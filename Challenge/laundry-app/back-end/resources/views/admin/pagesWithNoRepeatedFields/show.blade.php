@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pagesWithNoRepeatedFiedl.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.history') }}
                        </th>
                        <td>
                            {!! $pagesWithNoRepeatedFiedl->history !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.short_history') }}
                        </th>
                        <td>
                            {!! $pagesWithNoRepeatedFiedl->short_history !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_title') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->about_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.about_subtitle') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->about_subtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.footer_description') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->footer_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_facebook') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->social_media_facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_twitter') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->social_media_twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_instagram') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->social_media_instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedFiedl.fields.social_media_youtube') }}
                        </th>
                        <td>
                            {{ $pagesWithNoRepeatedFiedl->social_media_youtube }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection