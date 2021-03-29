@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.orderItem.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.order') }}
                        </th>
                        <td>
                            {{ $orderItem->order->details ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.item_type') }}
                        </th>
                        <td>
                            {{ $orderItem->item_type->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.details') }}
                        </th>
                        <td>
                            {!! $orderItem->details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderItem.fields.status') }}
                        </th>
                        <td>
                            {{ App\OrderItem::STATUS_SELECT[$orderItem->status] }}
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