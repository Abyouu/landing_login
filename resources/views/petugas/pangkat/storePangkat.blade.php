@extends('petugas.dashboard')

@section('storePangkatForm')
    <div class="container shadow pt-2 mt-2" style="width: 800px">
        <form class="row g-3 d-flex" action="/petugas/storePangkat" method="POST">
            @csrf
            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Pangkat Pegawai</h5>
            </div>
            <div class="col-md-6">
                <label for="inpNip" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="inpNip">
            </div>
            <div class="col-md-4">
                <label for="inpTMT" class="form-label">TMT</label>
                <input type="date" name="TMT" class="form-control" id="inpTMT">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="324...">
            </div>
            <div class="col-md-6">
                <label for="pangkat" class="form-label">Pangkat</label>
                <input type="text" name="pangkat" id="pangkat" class="form-control">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="golongan">Golongan</label>
                <input type="text" name="golongan" class="form-control" id="golongan" placeholder="324...">
            </div>
            <div class="col-md-2">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="text" name="tingkat" id="tingkat" class="form-control">
            </div>
            <div class="col-12 pb-4">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
@endsection