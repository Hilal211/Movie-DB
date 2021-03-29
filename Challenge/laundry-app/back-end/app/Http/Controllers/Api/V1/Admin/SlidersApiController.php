<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Slider;

/**
 * @group Slider management
 *
 * APIs for managing users
 */
class SlidersApiController extends Controller {
    /**
     * Fetch the list of all sliders
     *
     * This api route return all the sliders in the database.
     *
     */
    public function index() {
        $sliders = Slider::all();
    
        return apiResponse( $sliders );
    }
    
    /**
     * Store a new sliders inside the database
     *
     * @bodyParam title string required The slider title.
     * @bodyParam image file required The slider image.
     * @bodyParam sub_title string The slider subtitle.
     *
     */
    public function store( StoreSliderRequest $request ) {
        return apiResponse( Slider::create( $request->all() ) );
    }
    
    /**
     * Update an existing slider inside the database
     *
     * @bodyParam title string required The slider title.
     * @bodyParam image file The slider image.
     * @bodyParam sub_title string The slider subtitle.
     *
     * [PUT/PATCH]/api/v1/sliders/2
     */
    public function update( UpdateSliderRequest $request, $id ) {
        $slider = Slider::find( $id );
        
        if ( $slider === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            $slider->update( $request->all() );
            return apiResponse( $slider );
        }
//        return $slider->update( $request->all() );
    }
    
    /**
     * List the details of 1 slider by providing the slider id <br/>
     */
    public function show( $id ) {
        $slider = Slider::find( $id );
        
        if ( $slider === null ) {
            return apiResponse( null, false, array(
                'Id not found in  the database'
            ) );
        } else {
            return apiResponse( $slider );
        }
    }
    
    /**
     * Completely delete slider by providing 1 slider id per time
     *  /api/v1/sliders/{slider} where slider is an integer
     */
    public function destroy( $id ) {
        $slider = Slider::find( $id );
        
        if ( $slider === null ) {
            return apiResponse( null, false, array(
                'Id not found in  the database'
            ) );
        } else {
            return apiResponse( null, $slider->delete());
        }
    }
}
