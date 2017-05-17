<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;

class BooksalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('booksalon');   
    }
    public function login()
    {
        return View::make('booklogin');   
    }
    public function addArc()
    {
        return View::make('bookaddarc');   
    }
    
}
