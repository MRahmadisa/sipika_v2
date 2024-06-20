@extends('template')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Input Data Jabatan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_jabatan">Nama Jabatan</label>
                                                <input type="hidden" id="id_jabatan" class="form-control"
                                                    name="id_jabatan" />
                                                <input type="nama_jabatan" id="nama_jabatan" class="form-control"
                                                    name="nama_jabatan" placeholder="Masukkan Nama Jabatan" />
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Simpan
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                            <button type="reset" class="btn btn-light-danger me-1 mb-1">
                                                Batal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
