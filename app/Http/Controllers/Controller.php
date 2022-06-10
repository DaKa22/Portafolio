<?php

namespace App\Http\Controllers;

use App\Mail\email_mailable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function email(Request $request)
    {
        if ($request['subject']==null || $request['name']==null || $request['email']==null || $request['message']==null) {
            return response('Error al enviar email',500);
        }else {
            Mail::to('davidbermeoquimbaya22dbqq@gmail.com')->send( new email_mailable($request) );
            return 'Se Envio con exito';
        }
    }
}
