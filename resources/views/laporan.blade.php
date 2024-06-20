@extends('template')
@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laporan Presensi Pegawai</title>

        <link rel="stylesheet" href="theme/assets/extensions/flatpickr/flatpickr.css" />

        <link rel="stylesheet" href="theme/assets/compiled/css/app.css" />
        <link rel="stylesheet" href="theme/assets/compiled/css/app-dark.css" />
    </head>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Laporan Presensi Pegawai</h3>
                </div>

                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Laporan Presensi
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0">Pilih Tanggal Mulai Sampai Tanggal Akhir</p>
                        <input type="date" class="form-control flatpickr-range mt-2" placeholder="Pilih Tanggal.." />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Cetak
                    </button>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>ID Presensi</th>
                                    <th>Nama Pegawai</th>
                                    <th>Presensi Masuk</th>
                                    <th>Presensi Pulang</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection
