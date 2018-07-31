<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YourBestOptionController extends Controller
{
    public function index()
    {
      return view('academia.your_best_option');
    }
}
