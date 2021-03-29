@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.orderItem.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.order-items.update", [$orderItem->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('order_id') ? 'has-error' : '' }}">
                <label for="order">{{ trans('cruds.orderItem.fields.order') }}*</label>
                <select name="order_id" id="order" class="form-control select2" required>
                    @foreach($orders as $id => $order)
                        <option value="{{ $id }}" {{ (isset($orderItem) && $orderItem->order ? $orderItem->order->id : old('order_id')) == $id ? 'selected' : '' }}>{{ $order }}</option>
                    @endforeach
                </select>
                @if($errors->has('order_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('order_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('item_type_id') ? 'has-error' : '' }}">
                <label for="item_type">{{ trans('cruds.orderItem.fields.item_type') }}*</label>
                <select name="item_type_id" id="item_type" class="form-control select2" required>
                    @foreach($item_types as $id => $item_type)
                        <option value="{{ $id }}" {{ (isset($orderItem) && $orderItem->item_type ? $orderItem->item_type->id : old('item_type_id')) == $id ? 'selected' : '' }}>{{ $item_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('item_type_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('item_type_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                <label for="details">{{ trans('cruds.orderItem.fields.details') }}</label>
                <textarea id="details" name="details" class="form-control ">{{ old('details', isset($orderItem) ? $orderItem->details : '') }}</textarea>
                @if($errors->has('details'))
                    <em class="invalid-feedback">
                        {{ $errors->first('details') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.orderItem.fields.details_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('cruds.orderItem.fields.status') }}</label>
                <select id="status" name="status" class="form-control">
                    <option value="" disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\OrderItem::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $orderItem->status) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection