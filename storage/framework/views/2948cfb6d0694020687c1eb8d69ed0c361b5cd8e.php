<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-5.2.2-dist/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('/css/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script type="text/javascript" src=   "<?php echo e(asset('/js/jquery-3.6.1.min.js')); ?>"></script>
        <script type="text/javascript">

            $(document).ready(function(){
            
            $("#submit").click(function(){
                var nama = $("#nama").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var ttl = $("#ttl").val();
                var kelamin = document.querySelector('input[name="kelamin"]:checked').value;
                var pendidikan = $("#pendidikan").val();

                if(document.getElementById("html").checked == true){
                    var html=1;
                } else var html=0;

                if(document.getElementById("CSS").checked == true){
                    var CSS=1;
                } else var CSS=0;

                if(document.getElementById("js").checked == true){
                    var js=1;
                } else var js=0;

                if(document.getElementById("PHP").checked == true){
                    var PHP=1;
                } else var PHP=0;

                $.ajax({
                    type: 'POST',
                    url: "/backcoding",
                    data: {
                        nama:nama,
                        phone:phone,
                        email:email,
                        ttl:ttl,
                        kelamin:kelamin,
                        html:html,
                        CSS:CSS,
                        js:js,
                        PHP:PHP,
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
        <div class="table table-hover container-fluid text-white">
            <h1 class="title">FORM PENDAFTARAN</h1>
            <div class="container" style="text-align: left; margin-left: 20%;">
                    <table>
                        <tr>
                            <td><b>Nama:</b></td>
                            <td><input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" class="form-control-sm" style="width: 390px;"></td>
                        </tr>
                        <tr>
                            <td><b>Nomor Telepon:</b></td>
                            <td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" class="form-control-sm" style="width: 390px;"></td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td><input type="email" id="email" name="email" class="form-control-sm" style="width: 390px;"></td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Lahir:</b></td>
                            <td><input type="date" id="ttl" name="ttl"></td>
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin:</b></td>
                            <td><input type="radio" id="kelamin" name="kelamin" value="Laki-laki" class="form-check-input">
                                <label for="cowok" class="form-check-label"><b>Laki-laki</b></label>
                                <input type="radio" id="kelamin" name="kelamin" value="Perempuan" class="form-check-input">
                                <label for="cewek" class="form-check-label"><b>Perempuan</b></label>
                            </td>
                        </tr>
                        <tr><td><b>Les yang ingin diikuti:</b></td>
                            <td><input type="checkbox" id="html" name="html" value="html" class="form-check-input">
                                <label for="html" class="form-check-label"><b>html</b></label>
                                <input type="checkbox" id="CSS" name="CSS" value="CSS" class="form-check-input">
                                <label for="CSS" class="form-check-label"><b>CSS</b></label>
                                <input type="checkbox" id="js" name="js" value="javascript" class="form-check-input">
                                <label for="javascript" class="form-check-label"><b>JavaScript</b></label>
                                <input type="checkbox" id="PHP" name="PHP" value="PHP" class="form-check-input">
                                <label for="PHP" class="form-check-label"><b>PHP</b></label>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Level:</b></td>
                            <td><select name="pendidikan" id="pendidikan" style="width: 300px;" class="form-select">
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advance">Advance</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Upload CV:</b></td>
                            <td><input type="file"></td>
                        </tr>
                        <tr>
                            <td valign="top"><b>Komentar dan Saran:</b></td>
                            <td><textarea id="komentar" name="komentar" rows="4" cols="50"></textarea></td>
                        </tr>
                    </table>
                    <button type="button" id="submit" name="kirim" class="btn btn-success btn-lg" style="font-size: 15px; width: 150px; margin-left: 400px; margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#myModal1" onclick="backcoding()">Kirim Query</button>
                
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
</html><?php /**PATH C:\xampp\htdocs\ProjectWeb\resources\views/register.blade.php ENDPATH**/ ?>