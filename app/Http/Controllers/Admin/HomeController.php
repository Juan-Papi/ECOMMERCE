<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Component;

class HomeController extends Controller
{
    public function index(){
        return view('livewire.home-component');
    }
}
