@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.service.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.title') }}
                        </th>
                        <td>
                            {{ $service->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.image') }}
                        </th>
                        <td>
                            @if($service->image)
                                <a href="{{ $service->image->getUrl() }}" target="_blank">
                                    <img src="{{ $service->image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service.fields.description') }}
                        </th>
                        <td>
                            {{ $service->description }}
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