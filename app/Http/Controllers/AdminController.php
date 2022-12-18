<?php

namespace App\Http\Controllers;

use App\Pberita;
use App\Pkontak;
use App\Pprofil;
use App\Pberanda;
use App\Pedukasi;
use App\Pperingatandini;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        return view('admin.new.berita.index', compact('data'));
    }

    public function deleteBerita($id)
    {
        Pberita::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
    public function addBerita()
    {
        return view('admin.new.berita.create');
    }

    public function editBerita($id)
    {
        $data = Pberita::find($id);
        return view('admin.new.berita.edit', compact('data'));
    }
    public function storeBerita(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foto'  => 'mimes:jpg,png,jpeg,bmp|max:10240',
        ]);

        if ($validator->fails()) {
            $request->flash();
            toastr()->error('File harus Gambar dan Maks 10MB');
            return back();
        }

        if ($request->foto == null) {
            $filename = null;
        } else {
            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;

            $image = $request->file('foto');

            $realPath = public_path('storage') . '/foto/real';
            $compressPath = public_path('storage');

            $img = Image::make($image->path());
            $img->resize(1000, 1000, function ($const) {
                $const->aspectRatio();
            })->save($compressPath . '/' . $filename);

            Storage::disk('public')->move($filename, '/foto/compress/' . $filename);
            $image->move($realPath, $filename);
        }


        $attr = $request->all();
        $attr['foto'] = $filename;
        //dd($attr);
        Pberita::create($attr);

        toastr()->success('Sukses Di Simpan');
        return redirect('/admin/berita');
    }
    public function updateBerita(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foto'  => 'mimes:jpg,png,jpeg,bmp|max:10240',
        ]);

        if ($validator->fails()) {
            $request->flash();
            toastr()->error('File harus Gambar dan Maks 10MB');
            return back();
        }

        if ($request->foto == null) {
            $filename = Pberita::find($id)->foto;
        } else {

            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;

            $image = $request->file('foto');

            $realPath = public_path('storage') . '/foto/real';
            $compressPath = public_path('storage');

            $img = Image::make($image->path());
            $img->resize(1000, 1000, function ($const) {
                $const->aspectRatio();
            })->save($compressPath . '/' . $filename);

            Storage::disk('public')->move($filename, '/foto/compress/' . $filename);
            $image->move($realPath, $filename);
        }

        $attr = $request->all();
        $attr['foto'] = $filename;

        Pberita::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/admin/berita');
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
