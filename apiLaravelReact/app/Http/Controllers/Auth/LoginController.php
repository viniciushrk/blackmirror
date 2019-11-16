<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/cargo';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function validaLogin(Request $request)
    {
        try {

            $remember = $request->input(('remember') == '1');
            $UserName = $request->input('cpf');
            $Password = $request->input('password');

            if (Auth::attempt(['cpf' => $UserName , 'password' => $Password,'active' => 1],$remember)) {

                $user = $this->user->find(Auth::user()->id);



                Logger::Info('Usuário logado', "O usuário {$user->nome} logou.");

                Flash::success('Seja Bem Vindo! '.Auth::user()->nome);

                return Redirect::route('home');
            }
            else
            {
                Flash::warning('Login ou Senha inválidos');
                return Redirect::to('/');
            }


        } catch (\Exception $e) {
            return $e->getMessage();
            Flash::error('Ops, houve um erro ao executar a ação.');
            Logger::exception('Usuários Autenticação', $e);
            return redirect()->back();
        }

    }
}
