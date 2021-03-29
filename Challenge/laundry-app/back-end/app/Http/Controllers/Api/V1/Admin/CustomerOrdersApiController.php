<?php

namespace App\Http\Controllers\API\V1\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class CustomerOrdersApiController extends Controller {
    
    public function __construct() {
        $this->middleware( 'jwt.auth' );
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user            = auth()->user();
        $customer_orders = Order::where( 'customer_id', '==', $user->id )->get();
        
        return apiResponse( $customer_orders );
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
        $user = auth()->user();
        
        $customer_order = Order::where( 'customer_id', $user->id )->where( 'id', $id )->get()->first();
        
        if($customer_order === null){
            return apiResponse(null, false, array(
                'Id not available in the database'
            ));
        }else {
            return apiResponse( $customer_order );
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
    
    
    public function selectCustomerOrders( $customer_id ) {
        $customer_orders = Order::with( 'customer' )->where( 'customer_id', $customer_id )->get()->all();
        
        return apiResponse( $customer_orders );
    }
}
