<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Throwable;

class Handler extends ExceptionHandler
{
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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        /*
         * 1xx: Informational	    Communicates transfer protocol-level information.
         * 2xx: Success	            Indicates that the client’s request was accepted successfully.
         * 3xx: Redirection	        Indicates that the client must take some additional action in order to complete their request.
         * 4xx: Client Error	    This category of error status codes points the finger at clients.
         * 5xx: Server Error	    The server takes responsibility for these error status codes.
         *
         * https://restfulapi.net/http-status-codes/
         *
         * 200 (OK)
         * 201 (Created)
         * 202 (Accepted)
         * 204 (No Content)
         *
         * 301 (Moved Permanently)
         * 302 (Found)
         * 303 (See Other)
         * 304 (Not Modified)
         * 307 (Temporary Redirect)
         *
         * 400 (Bad Request)
         * 401 (Unauthorized)
         * 403 (Forbidden)
         * 404 (Not Found)
         * 405 (Method Not Allowed)
         * 406 (Not Acceptable)
         * 412 (Precondition Failed)
         * 415 (Unsupported Media Type)
         * 422 (Unprocessable Entity)
         *
         * 500 (Internal Server Error)
         * 501 (Not Implemented)
         */

        if ($exception instanceof AuthenticationException) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated.',
                'data' => [],
            ], 403);
        }

        return parent::render($request, $exception);
    }
}
