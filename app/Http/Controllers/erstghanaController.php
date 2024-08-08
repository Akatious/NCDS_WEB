<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class erstghanaController extends Controller
{
      public function erstghana(){
        return view('website.layouts.erstghana');
    }
}