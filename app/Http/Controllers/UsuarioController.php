<?php

namespace App\Http\Controllers;

use App\Mail\SendingMail;
use App\Models\Usuario;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;


class UsuarioController extends Controller
{
    public function store(Request $request): Application|Factory|View
    {
        $nuevoCliente = new Usuario();
        $nuevoCliente->nombre = $request->nombre;
        $nuevoCliente->correo = $request->email;
        $nuevoCliente->password = $request->password;
        $nuevoCliente->save();

        Mail::to($request->email)->send(new SendingMail());
        return view('validacion');
    }

    public function comprobar(Request $request)
    {
        $nombre = $request->input('email');
        $pass = $request->input('contraseña');

        $resultado = DB::table('usuarios')
            ->where('correo', $nombre)
            ->where('password', $pass)
            ->get();

        if (empty($resultado[0])) {
            return redirect()->route('view.login')->with('error', 'Usuario o contraseña incorrecta');
        } else {
            foreach ($resultado as $result) {
                $name = $result->nombre;
            }
            session_start();
            $_SESSION['usuario']=$name;
            return view('principal')->with('usuario',$name);
        }
    }

    public function usuario()
    {
        session_start();
        $usuario = DB::table('usuarios')
            ->where('nombre',$_SESSION['usuario'])
            ->get();
        foreach ($usuario as $user){
            $usuario = $user->nombre;
        }

        return view('principal')->with('usuario',$usuario);
    }

    public function codigo(Request $request)
    {
        session_start();
        if ($_SESSION['codigo']==$request->codigo){
            return redirect()->route('view.login');
        }else{
            return redirect()->route('view.validacion')->with('error', 'El código introducido es incorrecto!');
        }
    }

}
