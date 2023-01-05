<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script>
    <script src="brain.js"></script>
    <title>Home</title>
</head>

<body>
    <div id="article">
        <div style="text-align: center;" class="mt-4 p-5 center text-white rounded">
            <h1>Kelompok 11</h1>
            <p>Kami menyediakan berbagai macam buku bacaan</p>
        </div><br>

        <div style="display: flex; gap: 25px; text-align: center;">
            <div class="card mx-auto bg-primary p-2" style="width: 200px; color: #000;">
                <img class="card-img-top" width="150" height="150" src="<?php echo e(asset('storage/hp.png')); ?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Smartphone</h4>
                    <p class="card-text">Lorem ipsum...</p>
                    <a href="#" class="btn btn-dark">See more</a>
                </div>
            </div>
            
            <div class="card mx-auto bg-primary p-2" style="width: 200px; color: #000;">
                <img class="card-img-top" width="150" height="150" src="<?php echo e(asset('storage/tab.png')); ?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Tablet</h4>
                    <p class="card-text">Lorem ipsum...</p>
                    <a href="#" class="btn btn-dark">See more</a>
                </div>
            </div>
            
            <div class="card mx-auto bg-primary p-2" style="width: 200px; color: #000;">
                <img class="card-img-top" width="150" height="150" src="<?php echo e(asset('storage/laptop.png')); ?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Laptop</h4>
                    <p class="card-text">Lorem ipsum...</p>
                    <a href="#" class="btn btn-dark">See more</a>
                </div>
            </div>
        </div><br>
    
        <div id="Galeri" style="text-align: center;">
            <h3><b>Youtube Channel</b></h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PlDXAMuv5tE" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <br>
            <button type="button" id="anime">Buka/Tutup</button>
            <figure id="foto">
                <figcaption><b style="color: aliceblue;">Galeri Foto</b></figcaption>
                <img width="300" height="400" src="<?php echo e(asset('storage/GD-9.jpg')); ?>" class="rounded-3">
                <img width="300" height="400" src="<?php echo e(asset('storage/GD-6.jpg')); ?>" class="rounded-3">
                <img width="300" height="400" src="<?php echo e(asset('storage/GD-5.jpg')); ?>" class="rounded-3">
            </figure>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjectWeb\resources\views/konten.blade.php ENDPATH**/ ?>