<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <div class="container-lg mt-5 p-5 min-vh-100" style="color: white;">
        <h1 style="text-align: center;">Book List</h1>
        <table style="margin: 30px 0px;">
            <tr>    
                <td><input type="text" id="idBuku" class="form-control w-70" required placeholder="cari id buku"></td>
                <td><button type="button" id="cari" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
                <td><button type="button" id="lihat" class="btn btn-success btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
            </tr>
        </table>
        <div class="table-responsive">
            <table border="1" class="table table-hover table-dark container-fluid text-white">
                <tr class="table-primary" style="text-align: center;">
                    <th>id Buku</th>
                    <th>Nama Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Kategori</th>
                    <th>Qty</th>
                    <th>Cover</th>
                    <th>Opsi</th>
                </tr>
                @foreach($books as $b)
                <tr valign="middle">
                    <td>{{ $b->idBuku }}</td>
                    <td>{{ $b->namaBuku }}</td>
                    <td style="text-align: center;">{{ $b->namaPengarang }}</td>
                    <td style="text-align: center;">{{ $b->kategori }}</td>
                    <td style="text-align: center;">{{ $b->qty }}</td>
                    <td><image src="{{ Storage::url($b->image) }}" width="150" height="200"></td>
                    <td>
                        <a href="/show/{{ $b->idBuku }}"><button type="button" class="btn btn-success btn">Edit</button></a>
                        <a href="/hapus/{{ $b->idBuku }}"><button type="button" class="btn btn-danger btn">Hapus</button></a>    
                    </td>   
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>