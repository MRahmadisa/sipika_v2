
<?php $__env->startSection('content'); ?>
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Data Pengguna Admin</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_pegawai">Nama Pegawai</label>
                                                <input type="hidden" id="id_pengguna" class="form-control"
                                                    name="id_pengguna" />
                                                <input type="nama_pegawai" id="nama_pegawai" class="form-control"
                                                    name="nama_pegawai" placeholder="Masukkan Nama Pegawai" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" class="form-control" name="username"
                                                    placeholder="Masukkan Username" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="text" id="password" class="form-control" name="password"
                                                    placeholder="Masukkan Password" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <input type="text" class="form-control" id="role"
                                                    readonly="readonly" value="Admin" />
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
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kuliah\Semester6\Tugas Akhir\sipika\resources\views/inputdatapenggunaadmin.blade.php ENDPATH**/ ?>