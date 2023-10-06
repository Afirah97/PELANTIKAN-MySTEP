<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pelantikan MySTEP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Format Permohonan Pelantikan Personel MySTEP (PMS) Tahun 2023</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo e(route('mysteps.create')); ?>"> Tambah Pelantikan Baru</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="280px">Nama</th>
                    <th width="280px">Alamat</th>
                    <th width="120px">Gelaran Tugas</th>
                    <th>Kadar Upah (Bulanan)</th>
                    <th width="120px">Tarikh Kuatkuasa Kontrak</th>
                    <th width="125px">Tarikh Tamat Kontrak</th>
                    <th width="120px">Tempoh Kontrak (Bulan)</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mysteps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mystep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($mystep->nama); ?></td>
                        <td><?php echo e($mystep->alamat); ?></td>
                        <td><?php echo e($mystep->gred); ?></td>
                        <td><?php echo e($mystep->gaji); ?></td>
                        <td><?php echo e($mystep->tarikh_masuk); ?></td>
                        <td><?php echo e($mystep->tarikh_tamat); ?></td>
                        <td><?php echo e($mystep->tempoh); ?></td>
                        <td>
                            <form action="<?php echo e(route('mysteps.destroy',$mystep->id)); ?>" method="Post">
                                <a class="btn btn-primary" href="<?php echo e(route('mysteps.edit',$mystep->id)); ?>">Kemaskini</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Padam</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $mysteps->links(); ?>

    </div>
</body>
</html><?php /**PATH C:\laragon\www\pelantikan-MySTEP\resources\views/mystep/index.blade.php ENDPATH**/ ?>