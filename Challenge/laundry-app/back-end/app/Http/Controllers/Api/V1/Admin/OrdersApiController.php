<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Order;

/**
 * @group Orders management
 *
 * APIs for managing orders
 */
class OrdersApiController extends Controller {
    public function __construct() {
        $this->middleware( 'jwt.auth' );
    }
    
    /**
     * Fetch the list of all orders
     *
     * This api route return all the orders in the database.
     *
     */
    public function index() {
        $orders = Order::all();
        
        return apiResponse( $orders );
    }
    
    /**
     * Store a new order inside the database
     *
     * @bodyParam customer_id integer required The customer Id, it should be a customer id.
     * @bodyParam details string The order details.
     * @bodyParam priority boolean The order priority, true to indicate that the order has a priority.
     * @bodyParam order_status string The order status, should be one of the following pending, processing, done.
     *
     */
    public function store( StoreOrderRequest $request ) {
        return apiResponse( Order::create( $request->all() ) );
    }
    
    /**
     * Update am existing order inside the database
     *
     * @bodyParam customer_id integer required The customer Id, it should be an order id.
     * @bodyParam details string The order details.
     * @bodyParam priority boolean The order priority, true to indicate that the order has a priority.
     * @bodyParam order_status string The order status, should be one of the following pending, processing, done.
     *
     */
    public function update( UpdateOrderRequest $request, Order $order ) {
        return apiResponse( $order->update( $request->all() ) );
    }
    
    /**
     * List the details of 1 order by Order id <br/>
     *  /api/v1/orders/{order} where order is an integer
     */
    public function show( $id ) {
        $order = Order::find( $id );
        if ( $order === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            return apiResponse( $order );
        }
    }
    
    /**
     * Completely delete an order by providing the order id
     *  /api/v1/orders/{order} where order is an integer
     */
    public function destroy( $id ) {
        $order = Order::find( $id );
        
        if ( $order === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            return apiResponse( null, $order->delete() );
        }
    }
}
