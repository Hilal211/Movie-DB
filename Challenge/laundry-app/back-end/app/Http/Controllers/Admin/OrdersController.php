<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('order_access'), 403);

        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('order_create'), 403);

        $customers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orders.create', compact('customers'));
    }

    public function store(StoreOrderRequest $request)
    {
        abort_unless(\Gate::allows('order_create'), 403);

        $order = Order::create($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function edit(Order $order)
    {
        abort_unless(\Gate::allows('order_edit'), 403);

        $customers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $order->load('customer');

        return view('admin.orders.edit', compact('customers', 'order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        abort_unless(\Gate::allows('order_edit'), 403);

        $order->update($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        abort_unless(\Gate::allows('order_show'), 403);

        $order->load('customer');

        return view('admin.orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        abort_unless(\Gate::allows('order_delete'), 403);

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
