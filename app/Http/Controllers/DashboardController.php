<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //Index segun el rol al momento de hacer el login, redirige a una pagina distinta dependiendo del rol del usuario
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

    //Redireccion para registrar nuevo user desde el admin
    public function register(){
        return view('auth.register');
    }
    //Redireccion para registrar rutas desde el admin
    public function rutas(){
        return view('admin.rutasDash');
    }
    //Redireccion para registrar rutas desde el admin
    public function clientes(){
        return view('admin.clienteDash');
    }
    //Redireccion para registrar categorias de productos desde el admin
    public function catProductos(){
        return view('admin.catProductosDash');
    }
    //Redireccion para registrar productos desde el admin
    public function productos(){
        return view('admin.productosDash');
    }
    //Redireccion para registrar Proveedores desde el admin
    public function proveedores(){
        return view('admin.proveedoresDash');
    }
    //Redireccion para registrar pedidos desde el admin
    public function pedidos(){
        return view('admin.pedidosDash');
    }
}