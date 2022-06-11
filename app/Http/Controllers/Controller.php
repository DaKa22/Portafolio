<?php

namespace App\Http\Controllers;

use App\Mail\email_mailable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function email(Request $request)
    {
        $clave= config('services.recaptcha.secret');
        $token= $request['token'];
        $action= $request['action'];
        $respuesta=Http::post('https://www.google.com/recaptcha/api/siteverify?'.http_build_query(['secret'=>$clave,'response'=>$token]));
        if ($respuesta['success'] == 1 && $respuesta['score'] >= 0.5) {
            if ($request['subject']==null || $request['name']==null || $request['email']==null || $request['message']==null) {
                return response('Error al enviar email',500);
            }else {
                Mail::to('davidbermeoquimbaya22dbqq@gmail.com')->send( new email_mailable($request) );
                return 'Se Envio con exito';
            }
        }else{
            return response('Eres un Robot',500);
        }


    }
}
