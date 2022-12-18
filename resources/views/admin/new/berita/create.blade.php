@extends('layouts.app_admin')

@push('css') 

@endpush


@section('content')
<div clsas="row">
    <div class="col-md-12">

        <a href="/admin/berita" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a><br/><br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah Berita</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/admin/berita/add" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Isi</label>

                    <textarea id="summernote" name="isi" class="form-control"></textarea>

                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" value="">
                </div>
                <div class="form-group">
                    <label></label>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> SIMPAN</button>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection

@push('js')

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
});
</script>
@endpush