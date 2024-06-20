

<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/presensi">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card w-50">
                    <div class="card-body text-center">
                        <h4>Selamat datang, <?php echo e(session('nama_pengguna')); ?></h4>
                        <p><?php echo e(session('nama_jabatan')); ?></p>
                        <button id="presensiButton" class="btn btn-primary" onclick="togglePresensi()">Presensi
                            Masuk</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        function togglePresensi() {
            const button = document.getElementById('presensiButton');
            if (button.innerText === 'Presensi Masuk') {
                button.innerText = 'Presensi Pulang';
            } else {
                button.innerText = 'Presensi Masuk';
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kuliah\Semester6\Tugas Akhir\sipika\resources\views/presensi.blade.php ENDPATH**/ ?>