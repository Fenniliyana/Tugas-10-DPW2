<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

  function showhome()
  {
    return view('client.home');
  }
  function showabout()
  {
    return view('client.about');
  }
  function showproduct()
  {
    return view('client.product');
  }
  function showtestimonial()
  {
    return view('client.testimonial');
  }
  function showwhy()
  {
    return view('client.why');
  }
}