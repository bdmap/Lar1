<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // о нас
    public function index() {
        return view('index');
    }
    
    // где нас найти?
    public function where() {
        return view('where');
    }
    
    // корзина
    public function basket() {
        return view('basket');
    }
    
    // заказы
    public function orders() {
        return view('orders');
    }
    
    // изменение товара
    public function changeProductPage(Request $request, $id) {
        return view('changeProduct');
    }
}