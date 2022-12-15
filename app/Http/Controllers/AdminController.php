<?php

namespace App\Http\Controllers;

use App\Pberanda;
use App\Pberita;
use App\Pedukasi;
use App\Pkontak;
use App\Pperingatandini;
use App\Pprofil;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda()
    {
        $data = Pberanda::first();
        return view('admin.new.beranda', compact('data'));
    }

    public function berandaUpdate(Request $req)
    {
        Pberanda::first()->update($req->all());
        toastr()->success('Berhasil Di Update');
        return back();
    }
    public function profil()
    {
        $data = Pprofil::first();
        return view('admin.new.profil', compact('data'));
    }
    public function profilUpdate(Request $req)
    {
        Pprofil::first()->update($req->all());
        toastr()->success('Berhasil Di Update');
        return back();
    }
    public function berita()
    {
        $data = Pberita::get();
        return view('admin.new.berita', compact('data'));
    }
    public function edukasi()
    {
        $data = Pedukasi::first();
        return view('admin.new.edukasi', compact('data'));
    }

    public function edukasiUpdate(Request $req)
    {
        Pedukasi::first()->update($req->all());
        toastr()->success('Berhasil Di Update');
        return back();
    }
    public function peringatandini()
    {
        $data = Pperingatandini::first();
        return view('admin.new.peringatandini', compact('data'));
    }

    public function peringatandiniUpdate(Request $req)
    {
        Pperingatandini::first()->update($req->all());
        toastr()->success('Berhasil Di Update');
        return back();
    }
    public function petabencana()
    {
        return view('admin.new.petabencana');
    }

    public function kontak()
    {
        $data = Pkontak::first();
        return view('admin.new.kontak', compact('data'));
    }

    public function kontakUpdate(Request $req)
    {
        Pkontak::first()->update($req->all());
        toastr()->success('Berhasil Di Update');
        return back();
    }
}
