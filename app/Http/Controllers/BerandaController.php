<?php

namespace App\Http\Controllers;

use App\Pberita;
use App\Pkontak;
use App\Pprofil;
use App\Pedukasi;
use App\Pperingatandini;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function profil()
    {
        $data = Pprofil::first();
        return view('new.profil', compact('data'));
    }
    public function berita()
    {
        $data = Pberita::get();
        return view('new.berita', compact('data'));
    }
    public function edukasi()
    {
        $data = Pedukasi::first();
        return view('new.edukasi', compact('data'));
    }

    public function peringatandini()
    {
        $data = Pperingatandini::first();
        return view('new.peringatan', compact('data'));
    }

    public function petabencana()
    {
        return view('new.petabencana');
    }

    public function kontak()
    {
        $data = Pkontak::first();
        return view('new.kontak', compact('data'));
    }
}
