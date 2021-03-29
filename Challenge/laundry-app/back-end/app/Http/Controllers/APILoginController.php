<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

/**
 * @group Authentication management
 *
 * APIs for managing Authentication
 */
class APILoginController extends Controller {
    //
    
    /**
     * Authentication Login
     *
     * @bodyParam email string requited The user email field.
     * @bodyParam password string required The user password field.
     *
     */
    //Please add this method
    public function login() {
        // get email and password from request
        $credentials = request( [ 'email', 'password' ] );

        // try to auth and get the token using api authentication
        if ( ! $token = auth( 'api' )->attempt( $credentials ) ) {
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json( [ 'error' => 'Unauthorized' ], 401 );
        }
        $user      = auth()->user();
        $user_data = User::with( 'roles' )->find( $user->id );
        
        return response()->json( [
            'token'   => $token,
            'type'    => 'bearer', // you can ommit this
            'expires' => auth( 'api' )->factory()->getTTL() * 120, // time to expiration
            'user'    => $user_data
        
        ] );
    }
    
    /**
     * Authentication Logout
     *
     */
    public function logout() {
        Auth::guard('api')->logout();
        
        return response()->json([
            'status'  => 'success',
            'message' => 'logout'
        ], 200);
    }
    
    protected function respondWithToken($token) {
        $user      = auth()->user();
        $user_data = User::with( 'roles' )->find( $user->id );
        
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => Auth::guard( 'api' )->factory()->getTTL() * 60,
            'user'         => $user_data
        ]);
    }
    
    /**
     * Authentication Token refresh
     */
    public function refresh() {
        return $this->respondWithToken(Auth::guard('api')->refresh());
    }
    
}
