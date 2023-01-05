<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <table>
        <tr>    
    <td><input type="text" id="idBuku" class="form-control form-control" style="width: 300px;" required placeholder="cari id buku"></td>
    <td><button type="button" id="cari" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
    <td><button type="button" id="lihat" class="btn btn-success btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
        </tr>
    </table>
<table border="1" class="table table-hover container-fluid text-white">
    <tr>
        <th>idBuku</th>
        <th>namaBuku</th>
        <th>namaPengarang</th>
        <th>kategori</th>
        <th>qty</th>
        <th>cover</th>
    </tr>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($b->idBuku); ?></td>
        <td><?php echo e($b->namaBuku); ?></td>
        <td><?php echo e($b->namaPengarang); ?></td>
        <td><?php echo e($b->kategori); ?></td>
        <td><?php echo e($b->qty); ?></td>
        <td><image src="<?php echo e(Storage::url($b->image)); ?>" width="150" height="200"></td>
        <td><td>
            <a href="/show/<?php echo e($b->idBuku); ?>"><button type="button" class="btn btn-success btn">Edit</button></a>
            <a href="/hapus/<?php echo e($b->idBuku); ?>"><button type="button" class="btn btn-danger btn">Hapus</button></a>    
        </td></td>    

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjectWeb\resources\views/index.blade.php ENDPATH**/ ?>