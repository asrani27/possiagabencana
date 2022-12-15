@extends('layouts.app_admin')

@push('css') 

@endpush


@section('content')
<div clsas="row">
    <div class="col-md-12">

        <a href="/home" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a><br/><br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Beranda Web</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/admin/beranda/update">
                    @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul1" value="{{$data->judul1}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="judul2" value="{{$data->judul2}}">
                </div>
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