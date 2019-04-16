<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        //return 'youssef imzoughene , age : '.(2019 - 1993);
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function progLanguages()
    {
        return view('pages.proglanguages');
    }
}
