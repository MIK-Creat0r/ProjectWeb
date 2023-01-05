<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.2.2-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src=   "{{ asset('/js/jquery-3.6.1.min.js') }}"></script>
    <title>Edit</title>
</head>
<body style="background-image: url({{ asset('storage/BG.jpg') }});padding: 8px; text-align: center;">
    <form action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table class="table table-hover container-fluid text-white">
        <tr>
            @foreach($books as $a)
            <td>Id Buku : {{ $a->idBuku}} </td><td><input type="hidden" name="idBuku" value="{{ $a->idBuku }}"></td>
            
            </tr>
            <tr>
                <td>Judul :</td><td><input type="text" id="namaBuku" name="namaBuku"  class="form-control" value="{{ $a->namaBuku }}"></td>
            </tr>
            <tr>
                <td>Nama Pengarang :</td><td><input type="text" id="namaPengarang" name="namaPengarang"  class="form-control" value="{{ $a->namaPengarang }}"></td>
            </tr>
            <tr>
                <td>Qty :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control" value="{{ $a->qty }}"></td>
            </tr>
            
            <tr>
                <td>Jenis Buku :</td>
                <td>
                    <select name="kategori" id="kategori" style="width: 200px;" class="form-select form-select-lg" value="{{ $a->kategori }}">
                        <option value="Manga">Manga</option>
                        <option value="LN">LightNovel</option>
                        <option value="Novel">Novel</option>                        
                        
                    </select>
                </td>
            </tr>          

            
        </table>

        <image src="{{ Storage::url($a->image) }} " width="150" height="200">

     </br>
        

        <input type="submit" class="btn btn-danger" value="Edit">
    </form>
    @endforeach
</body>
</html>
