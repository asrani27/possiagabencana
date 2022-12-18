@extends('layouts.app_admin')

@push('css') 
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

@endpush

@section('content')
<a href="/admin/berita/add" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>&nbsp; Tambah Data</a> <br /><br />
<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title m-0"> <i class="fas fa-server"></i> Berita </h5>
      </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr class="bg-gradient-primary">
                <th class="text-center">No</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Judul</th>
                <th class="text-center"></th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    <tr style="font-size:11px; font-family:Arial, Helvetica, sans-serif">
                        <td>{{$no++}}</td>
                        <td><img src="/storage/foto/compress/{{$item->foto}}" width="100px"></td>
                        <td>{{$item->judul}}</td>
                        <td>
                          <a href="/admin/berita/edit/{{$item->id}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit Data"><i class="fas fa-edit"></i></a>
                          <a href="/admin/berita/delete/{{$item->id}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                        </td>
                        {{-- <td>{{$item->kelurahan->nama}}</td>
                        <td>{{$item->kelurahan->kecamatan->nama}}</td>
                        <td>
                            <a href="/admin/lokasi/edit/{{$item->id}}" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="/admin/lokasi/delete/{{$item->id}}" class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                        </td> --}}
                    </tr>
                @endforeach
            
            </tbody>
            
            </table>
        </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
@endsection

@push('js')
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush