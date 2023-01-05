<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>
    <title>Home</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#anime").click(function(){
                $("#foto").slideToggle(1000);;
            });
            
            $("#card1").mouseenter(function(){
                $("#card1").animate({opacity: '1'}, "fast");
            });

            $("#card1").mouseleave(function(){
                $("#card1").animate({opacity: '0.75'}, "fast");
            });
            $("#card2").mouseenter(function(){
                $("#card2").animate({opacity: '1'}, "fast");
            });

            $("#card2").mouseleave(function(){
                $("#card2").animate({opacity: '0.75'}, "fast");
            });
            $("#card3").mouseenter(function(){
                $("#card3").animate({opacity: '1'}, "fast");
            });

            $("#card3").mouseleave(function(){
                $("#card3").animate({opacity: '0.75'}, "fast");
            });
            $("#card4").mouseenter(function(){
                $("#card4").animate({opacity: '1'}, "fast");
            });

            $("#card4").mouseleave(function(){
                $("#card4").animate({opacity: '0.75'}, "fast");
            });
        });
    </script>
</head>

<body>
    <div id="article">
        <div style="text-align: center;" class="mt-5 p-5 center text-white rounded">
            <h1>Kelompok 11</h1>
            <p>Kami menyediakan berbagai macam buku bacaan</p>
        </div><br>

        <div class="container-lg">
            <div class="row" style="text-align: center;">
                    <div id="card1" class="card mx-auto bg-primary p-2 col-3" style="width: 200px; color: #000; opacity: 0.75;">
                        <div class="card-body">
                            <h4 class="card-title">Book List</h4>
                            <p class="card-text">Daftar buku yang tersedia</p>
                            <a href="#" onclick="lihatpustaka()" class="btn btn-dark">See more</a>
                        </div>
                    </div>
                    
                    <div id="card2" class="card mx-auto bg-primary p-2 col-3" style="width: 200px; color: #000; opacity: 0.75;">
                        <div class="card-body">
                            <h4 class="card-title">About Us</h4>
                            <p class="card-text">Sejarah dan tujuan kami</p>
                            <a href="#" onclick="about();" class="btn btn-dark">See more</a>
                        </div>
                    </div>
                    
                    <div id="card3" class="card mx-auto bg-primary p-2 col-3" style="width: 200px; color: #000; opacity: 0.75;">
                        <div class="card-body">
                            <h4 class="card-title">Tambah</h4>
                            <p class="card-text">Tambahkan buku anda</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalInsert" class="btn btn-dark">See more</a>
                        </div>
                    </div>

                    <div id="card4" class="card mx-auto bg-primary p-2 col-3" style="width: 200px; color: #000; opacity: 0.75;">
                        <div class="card-body">
                            <h4 class="card-title">Daftar</h4>
                            <p class="card-text">Mari jadi bagian dari kami</p>
                            <a href="#" onclick="register();" class="btn btn-dark">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    
        <div id="Galeri" style="text-align: center; color: white;">
            <br>    
            <h3><b>Youtube Channel</b></h3>
            <iframe class="container-lg" height="400px" src="https://www.youtube.com/embed/PlDXAMuv5tE" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <br><br>
            <button type="button" id="anime" class="btn btn-primary">Galeri Foto</button>
            <figure id="foto">
                <figcaption><br><h3 style="color: aliceblue;">Cover buku</h3></figcaption><br>
                <img width="300" height="400" src="{{ asset('storage/Bakemonogatari_Manga_1.jpg') }}" class="rounded-3">
                <img width="300" height="400" src="{{ asset('storage/Bakemonogatari_Manga_2.jpg') }}" class="rounded-3">
                <img width="300" height="400" src="{{ asset('storage/Bakemonogatari_Manga_5.jpg') }}" class="rounded-3">
            </figure>
        </div>
    </div>
</body>
</html>