<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        //return 'youssef imzoughene , age : '.(2019 - 1993);
        //return view('pages.index');
        $name = "khadija ouchrih";
        return view('pages.index',compact('name'));
    }

    public function about()
    {
        $name = 'soukaina fouaji';
        return view('pages.about')->with('name',$name);
    }

    public function progLanguages()
    {
        $girlFriends = [
            'soka'=>'sokaina fouaji',
            'khad'=>'Khadija ouchrih',
            'ibno'=>'soukaina ibnou kady',
            'fat'=>'fatime hiyashu'
        ];
        return view('pages.proglanguages',compact('girlFriends'));
    }
}
