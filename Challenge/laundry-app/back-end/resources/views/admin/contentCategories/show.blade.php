@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contentCategory.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contentCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $contentCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentCategory.fields.slug') }}
                        </th>
                        <td>
                            {{ $contentCategory->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Back
            </a>
        </div>
    </div>
</div>
@endsection