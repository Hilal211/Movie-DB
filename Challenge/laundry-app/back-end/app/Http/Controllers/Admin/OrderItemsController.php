<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderItemRequest;
use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\ItemsType;
use App\Order;
use App\OrderItem;

class OrderItemsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('order_item_access'), 403);

        $orderItems = OrderItem::all();

        return view('admin.orderItems.index', compact('orderItems'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('order_item_create'), 403);

        $orders = Order::all()->pluck('details', 'id')->prepend(trans('global.pleaseSelect'), '');

        $item_types = ItemsType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orderItems.create', compact('orders', 'item_types'));
    }

    public function store(StoreOrderItemRequest $request)
    {
        abort_unless(\Gate::allows('order_item_create'), 403);

        $orderItem = OrderItem::create($request->all());

        return redirect()->route('admin.order-items.index');
    }

    public function edit(OrderItem $orderItem)
    {
        abort_unless(\Gate::allows('order_item_edit'), 403);

        $orders = Order::all()->pluck('details', 'id')->prepend(trans('global.pleaseSelect'), '');

        $item_types = ItemsType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $orderItem->load('order', 'item_type');

        return view('admin.orderItems.edit', compact('orders', 'item_types', 'orderItem'));
    }

    public function update(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        abort_unless(\Gate::allows('order_item_edit'), 403);

        $orderItem->update($request->all());

        return redirect()->route('admin.order-items.index');
    }

    public function show(OrderItem $orderItem)
    {
        abort_unless(\Gate::allows('order_item_show'), 403);

        $orderItem->load('order', 'item_type');

        return view('admin.orderItems.show', compact('orderItem'));
    }

    public function destroy(OrderItem $orderItem)
    {
        abort_unless(\Gate::allows('order_item_delete'), 403);

        $orderItem->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderItemRequest $request)
    {
        OrderItem::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
