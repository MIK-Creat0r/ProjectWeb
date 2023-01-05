<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.2.2-dist/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        
        $("#submit").click(function(){
            var nama = $("#nama").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var ttl = $("#ttl").val();
            var kelamin = document.querySelector('input[name="kelamin"]:checked').value;
            var pendidikan = $("#pendidikan").val();

            if(document.getElementById("edukasi").checked == true){
                var edukasi=1;
            } else var edukasi=0;

            if(document.getElementById("majalah").checked == true){
                var majalah=1;
            } else var majalah=0;

            if(document.getElementById("resep").checked == true){
                var resep=1;
            } else var resep=0;

            if(document.getElementById("manga").checked == true){
                var manga=1;
            } else var manga=0;

            $.ajax({
                type: 'POST',
                url: "{{ asset('storage/backendcoding.php') }}",
                data: {
                    nama:nama,
                    phone:phone,
                    email:email,
                    ttl:ttl,
                    kelamin:kelamin,
                    edukasi:edukasi,
                    majalah:majalah,
                    resep:resep,
                    manga:manga,
                    pendidikan:pendidikan
                },
            success: function(hasil){
                $('#hasil').html(hasil);
            }
            });
        });
        });
    </script>
    <title>Daftar Coding</title>
</head>

<body>
    <div class="container-lg text-white mt-5 p-5 min-vh-100">
        <h1 class="title" style="text-align: center;">FORM PENDAFTARAN</h1>
        <div style="text-align: left; margin-top: 30px;">
            <table class="table table-borderless table-hover container-lg text-white">
                <tr>
                    <td><b>Nama:</b></td>
                    <td><input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" class="form-control w-75"></td>
                </tr>
                <tr>
                    <td><b>Nomor Telepon:</b></td>
                    <td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" class="form-control  w-75"></td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td><input type="email" id="email" name="email" class="form-control  w-75"></td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir:</b></td>
                    <td><input type="date" id="ttl" name="ttl"></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin:</b></td>
                    <td><input type="radio" id="kelamin" name="kelamin" value="Laki-laki" class="form-check-input">
                        <label for="cowok" class="form-check-label"><b>Laki-laki</b></label><br>
                        <input type="radio" id="kelamin" name="kelamin" value="Perempuan" class="form-check-input">
                        <label for="cewek" class="form-check-label"><b>Perempuan</b></label>
                    </td>
                </tr>
                <tr><td><b>Minat:</b></td>
                    <td><input type="checkbox" id="edukasi" name="edukasi" value="edukasi" class="form-check-input">
                        <label for="edukasi" class="form-check-label"><b>Edukasi</b></label>
                        <input type="checkbox" id="majalah" name="majalah" value="majalah" class="form-check-input">
                        <label for="majalah" class="form-check-label"><b>Majalah</b></label><br>
                        <input type="checkbox" id="resep" name="resep" value="resep" class="form-check-input">
                        <label for="resep" class="form-check-label"><b>Resep</b></label>
                        <input type="checkbox" id="manga" name="manga" value="manga" class="form-check-input">
                        <label for="manga" class="form-check-label"><b>Manga</b></label>
                    </td>
                </tr>
                <tr>
                    <td><b>Level:</b></td>
                    <td><select name="pendidikan" id="pendidikan" class="form-select  w-75">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advance">Advance</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><b>Komentar dan Saran:</b></td>
                    <td><textarea class="w-75" id="komentar" name="komentar" rows="4"></textarea></td>
                </tr>
            </table>
            <button type="button" id="submit" name="kirim" class="btn btn-success btn-lg" style="font-size: 15px; width: 150px; margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#myModal1">Kirim Query</button>
            
            <!-- The Modal -->
            <div class="modal fade" id="myModal1">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="color: black;">
                            <h1>Data Pemesanan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div id="hasil" >
                            
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer" style="color: black;">
                            <p>Terimakasih, data anda akan kami submit ke Database</P>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>