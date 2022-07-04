<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (\Exception $e) {
            if ($e->getPrevious() instanceof \Illuminate\Session\TokenMismatchException) {
                // return $request->expectsJson()
                //     ? response()->json(['message' => 'A new message...'], 419)
                //     : redirect()->guest(route('login'));

                //return $request->expectsJson() ? response()->json(['message' =>'Your new message ...', 419) : redirect()->guest(route('login'));

                //session()->flash('msg', '¡SU SESIÓN HA EXPIRADO, POR FAVOR INGRESE DE NUEVO!');
                $msg = '¡SU SESIÓN HA EXPIRADO, POR FAVOR INGRESE DE NUEVO!';
                // $e->s
                // dd($e, $e->getMessage());

                return redirect()->route('/'); //->with(['msg' => '¡SU SESIÓN HA EXPIRADO, POR FAVOR INGRESE DE NUEVO!']); //->withErrors(['msg' => '¡SU SESIÓN HA EXPIRADO, POR FAVOR INGRESE DE NUEVO!']);
            };
        });

        // $this->renderable(function (\TokenMismatchException $e, $request) {
        //     return $request->expectsJson()
        //         ? response()->json(['message' => 'A new message...'], 419)
        //         : redirect()->guest(route('login'));
        // }); 

        // $this->renderable(function (\Exception $e) {
        //     if ($e->getPrevious() instanceof \Illuminate\Session\TokenMismatchException) {

        //         //return $request->expectsJson() ? response()->json(['message' =>'Your new message ...', 419) : redirect()->guest(route('login'));

        //         // session()->flash('msg', '¡SU SESIÓN HA EXPIRADO, POR FAVOR INGRESE DE NUEVO!');
        //         // $e->s
        //         // dd($e, $e->getMessage());
        //         // return redirect()->route('login');
        //     };
        // });
    }
}
