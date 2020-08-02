<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class NotImplementedException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('This method is not yet implemented.');
    }


    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            'success' => false,
            'message' => 'Not Implemented.',
            'data' => [],
        ], 501);
    }

}
