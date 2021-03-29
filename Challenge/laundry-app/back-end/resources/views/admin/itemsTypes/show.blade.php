@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.itemsType.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.itemsType.fields.title') }}
                        </th>
                        <td>
                            {{ $itemsType->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.itemsType.fields.price') }}
                        </th>
                        <td>
                            ${{ $itemsType->price }}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            {{ trans('cruds.itemsType.fields.image') }}
                        </th>
                        <td>
                            @if($itemsType->image)
                                <a href="{{ $itemsType->image->getUrl() }}" target="_blank">
                                    <img src="{{ $itemsType->image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
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
