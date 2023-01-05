<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-5.2.2-dist/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('/css/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/js/jquery-3.6.1.min.js')); ?>"></script>
    <link rel="icon" href="<?php echo e(asset('storage/icon.png')); ?>" type="image/x-icon">
    <script type="text/javascript"> 
        function lihatpustaka(){
            $.ajax({
                type:"GET",
                url:"/tabel"
                }).done(function(data){
                $('#tabel').html(data);
            });
        }
        function caripustaka(){
            var idBuku = document.getElementById("idBuku").value;
            $.ajax({
                type:"GET",
                url:"/cari/"+idBuku
                }).done(function(data){
                $('#tabel').html(data);
                alert("Data ditemukan!");
            });
        }
        function konten(){
            $.ajax({
                type:"GET",
                url:"/konten"
                }).done(function(data){
                $('#tabel').html(data);
            });
        }
        function about(){
            $.ajax({
                type:"GET",
                url:"/about"
                }).done(function(data){
                $('#tabel').html(data);
            });
        }
        function register(){
            $.ajax({
                type:"GET",
                url:"/register"
            }).done(function(data){
                $('#tabel').html(data);
            });
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 8rem;
            overflow-x: hidden;
        }
  
        html::-webkit-scrollbar {
            width: 5px;
        }
  
        html::-webkit-scrollbar-track {
            background: #000;
        }
  
        html::-webkit-scrollbar-thumb {
            background: #e62e2e;
            border-radius: 5rem;
        }
    </style>
    <title>Anime Book</title>
</head>

<body onload="konten()">
    <header style="position: fixed; top: 0; z-index: 10; width: 100%;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">Kel-11</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="konten();">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="lihat" href="#" onclick="lihatpustaka()">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="about();">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ModalInsert">Pendaftaran Buku</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropstart">
                <button type="button" class="btn" data-bs-toggle="dropdown">
                    <img src="<?php echo e(asset('storage/logo.png')); ?>" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Login</a></li>
                    <li><a class="dropdown-item" href="#" onclick="register();">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </header>

    <div id="tabel" style="background-image: url(<?php echo e(asset('storage/BG.jpg')); ?>); background-size: cover; background-position: center; padding: 8px;">
      
    </div>
    
    <div id="footer" class="container-fluid p-1 text-white" style="text-align: center; background-color: #212529;">
        <h3 style="margin-top: 8px;">Terimakasih sudah berkunjung</h3>
    </div>

    <!-- Modal daftar -->
    <div class="modal fade" id="ModalInsert">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                <?php echo e(csrf_field()); ?>


                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Pendaftaran Buku Baru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>Id Buku :</td><td><input type="text" id="idBuku" name="idBuku" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Judul :</td><td><input type="text" id="namaBuku" name="namaBuku"  class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Penulis :</td><td><input type="text" id="namaPengarang" name="namaPengarang"  class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Qty :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Jenis Buku :</td>
                            <td>
                                <select name="kategori" id="kategori" style="width: 200px;" class="form-select form-select">
                                    <option value="Manga">Manga</option>
                                    <option value="LN">LightNovel</option>
                                    <option value="Novel">Novel</option>                        
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Upload Cover :</td> <td><input type="file" name="file"></td>
                        </tr>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                      <input type="submit" class="btn btn-danger" value="submit" id="submit">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjectWeb\ProjectWeb\resources\views/home.blade.php ENDPATH**/ ?>