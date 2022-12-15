@extends('layouts.app_admin')

@push('css') 

@endpush


@section('content')
<div clsas="row">
    <div class="col-md-12">

        <a href="/home" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a><br/><br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Peringatan Dini</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/admin/peringatandini/update" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$data->judul}}">
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="form-control" name="isi" rows="4">{{$data->isi}}</textarea>
                    
                </div>
                {{-- <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div> --}}
                <div class="form-group">
                    <label></label>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> UPDATE</button>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush