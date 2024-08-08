<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ersafricaController extends Controller
{
      public function ersafrica(){
        return view('website.layouts.ersafrica');
    }
}