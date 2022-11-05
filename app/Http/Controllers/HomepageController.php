<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function mainpage(){
        return view('welcome');
    }

    public function sambutan(){
        return view('sambutan.sambutan');
    }

    public function sejarah(){
        return view('sejarah.sejarah');
    }

    public function profile(){
        return view('profile_sekolah.profile_sekolah');
    }

    public function galeri(){
        return view('galeri.galeri');
    }

    public function ekstrakulikuler(){
        return view('ekstra.ekstra');
    }

    public function contact(){
        return view('contact.contact');
    }
}
