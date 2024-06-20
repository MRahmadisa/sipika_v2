
<?php $__env->startSection('content'); ?>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Data Tabel Pengguna Pimpinan</title>
    </head>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pengguna Pimpinan</h3>
                </div>

                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Pengguna Pimpinan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Data Pengguna Pimpinan</span>
                    <a href="<?php echo e(route('inputdatapenggunapimpinan')); ?>" class="btn btn-primary btn-sm mb-3">
                        <i class="bi bi-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>ID Pengguna</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Nama Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kuliah\Tugas Akhir\sipika\resources\views/datapenggunapimpinan.blade.php ENDPATH**/ ?>