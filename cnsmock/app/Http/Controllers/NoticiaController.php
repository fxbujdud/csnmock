<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Return the last ten notes created
     *
     * @return \Illuminate\Http\Response
     */
    public function getLastTenNotes() {
        $lasttennotices = Noticia::orderBy('created_at', 'desc')->take(10)->get();
        return view('home', ['notes' => $lasttennotices]);
    }

    public function moreNotes() {
        return view('search');
    }
}
