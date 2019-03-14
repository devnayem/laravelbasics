<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
  public function contactus() {
    return view("contactus");
  }

  public function aboutus() {
    return view("aboutus");
  }
}
