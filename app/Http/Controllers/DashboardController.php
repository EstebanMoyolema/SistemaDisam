<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //Index segun el rol al momento de hacer el login
    public function index(){
        if(Auth::user()->hasRole('superadministrator')){
            return view('superAdminDash');
        }elseif(Auth::user()->hasRole('administrator')){
            return view('adminDash');
        }elseif(Auth::user()->hasRole('user')){
            return view('userDash');
        }elseif(Auth::user()->hasRole('bodega')){
            return view('bodegaDash');
        }elseif(Auth::user()->hasRole('distribuidor')){
            return view('distribuidorDash');
        }
    }

    //
    public function register(){
        return view('auth.register');
    }
}