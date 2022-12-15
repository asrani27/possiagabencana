@extends('layouts.app_admin')

@push('css') 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<style>
    #mapid { height: 350px; }

    .btn-app {
        color:#2e3134;
    }
</style>
@endpush


@section('content')
<div clsas="row">
    <div class="col-md-12">

        <h5 class="mb-2"><i class="fas fa-database"></i> Selamat Datang {{Auth::user()->name}}</h5>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Menu Kelola Web</h3>
            </div>
            <div class="card-body">
              <a href="/admin/beranda" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-home"></i> beranda
              </a>
              <a href="/admin/profil" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-user"></i> Profil
              </a>
              <a href="/admin/berita" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-newspaper"></i> Berita
              </a>
              <a href="/admin/edukasi" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-book-open"></i> Edukasi
              </a>
              <a href="/admin/peringatandini" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-exclamation-triangle"></i> Peringatan Dini
              </a>
              <a href="/admin/petabencana" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-map"></i> Peta Bencana
              </a>
              <a href="/admin/kontak" class="btn btn-app" style="color: #2e3134">
                <i class="fas fa-phone"></i> Kontak
              </a>
              
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection

@push('js')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>


<script>
    var map = L.map('mapid').setView([-3.320363756863717, 114.6000705394259], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

    banjir = {!!json_encode(petaBanjir())!!}
   
   var banjirIcon = L.icon({
       iconUrl: '/marker/marker-icon-blue.png',
   });
   
   for (var i = 0; i < banjir.length; i++) { 
    var PopUp = '<strong>KECAMATAN : '+banjir[i].nama_kecamatan+'</strong><br/>\
        <strong>KELURAHAN : '+banjir[i].nama_kelurahan+'</strong><br/>\
        <strong>LOKASI : '+banjir[i].lokasi+'</strong><br/>\
        <strong>TINGGI AIR : '+banjir[i].tinggi_air+' cm</strong><br/>\
        <img src="/storage/'+banjir[i].file+'" width=100>';
   L.marker([banjir[i].lat, banjir[i].long],{icon:banjirIcon}).addTo(map).bindPopup(PopUp);
   }
</script>
@endpush