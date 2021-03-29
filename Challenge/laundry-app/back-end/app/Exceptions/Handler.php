<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler {
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];
    
    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
    
    /**
     * Report or log an exception.
     *
     * @param Exception $exception
     *
     * @return void
     */
    public function report( Exception $exception ) {
        parent::report( $exception );
    }
    
    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Exception $exception
     *
     * @return Response
     */
    public function render( $request, Exception $exception ) {
    
        // PLEASE ADD THIS LINES
        if ( $exception instanceof UnauthorizedHttpException ) {
            $preException = $exception->getPrevious();
            if ( $preException instanceof TokenExpiredException ) {
                return response()->json( [ 'error' => 'TOKEN_EXPIRED' ] );
            } else if ( $preException instanceof TokenInvalidException ) {
                return response()->json( [ 'error' => 'TOKEN_INVALID' ] );
            } else if ( $preException instanceof TokenBlacklistedException ) {
                return response()->json( [ 'error' => 'TOKEN_BLACKLISTED' ] );
            }
        }
        if ( $exception->getMessage() === 'Token not provided' ) {
            return response()->json( [ 'error' => 'Token not provided' ] );
        }
        if ( $exception instanceof AuthorizationException ) {
            return response()->json( [ 'error' => $exception->getMessage() ], 403 );
        }
        if (($request->isMethod('put') && $exception instanceof MethodNotAllowedHttpException) || ($request->isMethod('put') && $exception instanceof NotFoundHttpException)) {
            return response()->json([
                'message' => 'API Not Found',
                'success' => false
            ], 500
            );
        }
        
        if($exception instanceof  ValidationException){
            return response()->json([
                'success'  => false,
                'data'     => null,
                'messages' => [
                    $exception->getMessage()
                ]
            ], 200
            );
        }
//        dd(get_class($exception));
        return parent::render( $request, $exception );
    }
}
