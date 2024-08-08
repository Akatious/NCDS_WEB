<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cdsvisitController extends Controller
{
      public function cdsvisit(){
        return view('website.layouts.cdsvisit');
    }
}