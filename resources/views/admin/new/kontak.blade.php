@extends('layouts.app_admin')

@push('css') 

@endpush


@section('content')
<div clsas="row">
    <div class="col-md-12">

        <a href="/home" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a><br/><br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kontak</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/admin/kontak/update">
                    @csrf
                <div class="form-group">
                    <label>Telp</label>
                    <input type="text" class="form-control" name="telp" value="{{$data->telp}}">
                </div>
                <div class="form-group">
                    <label>IG</label>
                    <input type="text" class="form-control" name="ig" value="{{$data->ig}}">
                </div>
                <div class="form-group">
                    <label>youtube</label>
                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                </div>
                <div class="form-group">
                    <label>facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
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