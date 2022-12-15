<?php

namespace App\Http\Controllers;

use App\Dapur;
use App\Banjir;
use App\DataJson;
use App\Kecamatan;
use App\Pberanda;
use App\Pengungsian;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $json = DataJson::orderBy('tanggal', 'ASC')->get();
        // $data['tanggal'] = $json->pluck('tanggal');
        // $data['banjir'] = $json->map(function ($item) {
        //     return count(json_decode($item->json_banjir));
        // });
        // $data['dapur'] = $json->map(function ($item) {
        //     return count(json_decode($item->json_dapur));
        // });
        // $data['pengungsian'] = $json->map(function ($item) {
        //     return count(json_decode($item->json_pengungsian));
        // });
        // $data['pengungsi'] = $json->map(function ($item) {
        //     return collect(json_decode($item->json_rekap))->sum('terdampak_jiwa');
        // });
        // $data['pengungsiluar'] = $json->map(function ($item) {
        //     return collect(json_decode($item->json_rekapluar))->sum('jumlah');
        // });
        $data = Pberanda::first();
        return view('new.home', compact('data'));
    }

    public function vtronbanjir()
    {
        return view('vtron_posisibanjir');
    }
    public function vtronrekap()
    {
        return view('vtron_rekap');
    }
    public function vtronrekapluar()
    {
        return view('vtron_rekapluar');
    }


    public function dapurUmum()
    {
        $json = DataJson::orderBy('tanggal', 'ASC')->get();
        $data['tanggal'] = $json->pluck('tanggal');
        $data['banjir'] = $json->map(function ($item) {
            return count(json_decode($item->json_banjir));
        });
        $data['dapur'] = $json->map(function ($item) {
            return count(json_decode($item->json_dapur));
        });
        $data['pengungsian'] = $json->map(function ($item) {
            return count(json_decode($item->json_pengungsian));
        });
        $data['pengungsi'] = $json->map(function ($item) {
            return collect(json_decode($item->json_rekap))->sum('terdampak_jiwa');
        });
        $data['pengungsiluar'] = $json->map(function ($item) {
            return collect(json_decode($item->json_rekapluar))->sum('jumlah');
        });
        return view('dapur', compact('data'));
    }

    public function pengungsian()
    {
        $json = DataJson::orderBy('tanggal', 'ASC')->get();
        $data['tanggal'] = $json->pluck('tanggal');
        $data['banjir'] = $json->map(function ($item) {
            return count(json_decode($item->json_banjir));
        });
        $data['dapur'] = $json->map(function ($item) {
            return count(json_decode($item->json_dapur));
        });
        $data['pengungsian'] = $json->map(function ($item) {
            return count(json_decode($item->json_pengungsian));
        });
        $data['pengungsi'] = $json->map(function ($item) {
            return collect(json_decode($item->json_rekap))->sum('terdampak_jiwa');
        });
        $data['pengungsiluar'] = $json->map(function ($item) {
            return collect(json_decode($item->json_rekapluar))->sum('jumlah');
        });
        return view('pengungsian', compact('data'));
    }

    public function dapurAdmin()
    {
        return view('admin.dapur');
    }
    public function pengungsianAdmin()
    {
        return view('admin.pengungsian');
    }

    public function home()
    {
        return view('admin.new.home');
    }
}
