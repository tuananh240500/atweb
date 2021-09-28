<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ('application/json' == $request->header('Content-Type'))
        {
            $response = ['error' => 'You are not login or Token is expired!'];
            
            throw new HttpResponseException(response()->json($response, 401));
        }
        
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
