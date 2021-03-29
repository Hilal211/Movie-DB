<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Permission;

/**
 * @group Permission management
 *
 * APIs for managing permission
 */
class PermissionsApiController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth');
    }
    
    public function index()
    {
        $permissions = Permission::all();
    
        return apiResponse( $permissions );
    }

    public function store(StorePermissionRequest $request)
    {
        return apiResponse( Permission::create( $request->all() ) );
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $update = $permission->update( $request->all() );
    
        return apiResponse( $permission, $update );
    }
    
    public function show( $id ) {
        $permission = Permission::find( $id );
        
        if ( $permission === null ) {
            return apiResponse( null, false, array(
                'Id not found in  the database'
            ) );
        } else {
            return apiResponse( null, $permission->delete() );
        }
        
    }
    
    public function destroy( $id )
    {
        $permission = Permission::find( $id );
    
        if ( $permission === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            return apiResponse( null, $permission->delete() );
        }
    }
}
