@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.orders.update", [$order->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                <label for="details">{{ trans('cruds.order.fields.details') }}</label>
                <textarea id="details" name="details" class="form-control ">{{ old('details', isset($order) ? $order->details : '') }}</textarea>
                @if($errors->has('details'))
                    <em class="invalid-feedback">
                        {{ $errors->first('details') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.details_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('priority') ? 'has-error' : '' }}">
                <label for="priority">{{ trans('cruds.order.fields.priority') }}</label>
                <input name="priority" type="hidden" value="0">
                <input value="1" type="checkbox" id="priority" name="priority" {{ (isset($order) && $order->priority) || old('priority', 0) === 1 ? 'checked' : '' }}>
                @if($errors->has('priority'))
                    <em class="invalid-feedback">
                        {{ $errors->first('priority') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.priority_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('customer_id') ? 'has-error' : '' }}">
                <label for="customer">{{ trans('cruds.order.fields.customer') }}*</label>
                <select name="customer_id" id="customer" class="form-control select2" required>
                    @foreach($customers as $id => $customer)
                        <option value="{{ $id }}" {{ (isset($order) && $order->customer ? $order->customer->id : old('customer_id')) == $id ? 'selected' : '' }}>{{ $customer }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('customer_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('order_status') ? 'has-error' : '' }}">
                <label for="order_status">{{ trans('cruds.order.fields.order_status') }}</label>
                <select id="order_status" name="order_status" class="form-control">
                    <option value="" disabled {{ old('order_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Order::ORDER_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('order_status', $order->order_status) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('order_status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('order_status') }}
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