<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Mockery\Matcher\HasKey;

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

    public function login()
    {
        return view('auth.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function validaLogin(Request $request)
    {
        try {

            $CPF = $request->input('cpf');
            $Password =  $request->input('password');

//
              $user = User::where('cpf', $CPF)->first();
            if($user){
                return view('home');
            }else{
                return "erro";
            }
        //            $Password = $request->input('password');

//            if (Auth::attempt(['cpf' => $CPF])) {
//
//                $user = $this->user->find(Auth::user()->id);
//
////                Flash::success('Seja Bem Vindo! '.Auth::user()->name);
//                return Redirect::route('home');
//            }
//            else
//            {
//                return "erro";
////                Flash::warning('Login ou Senha inválidos');
////                return Redirect::to('/');
//            }


        } catch (\Exception $e) {
            return $e->getMessage();
//            Flash::error('Ops, houve um erro ao executar a ação.');
//            Logger::exception('Usuários Autenticação', $e);
            return redirect()->back();
        }

    }

    public function logout()
    {
        Auth::logout();
        if (!Auth::check()) {
            Auth::logout();
        }

        Auth::logout();

        return redirect('/');

    }
}
