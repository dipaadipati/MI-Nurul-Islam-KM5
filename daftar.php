<?php
session_start();
include("koneksi.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kk = $_POST['kk'];
    $ijz = $_POST['ijz'];
    $ktp = $_POST['ktp'];

    $query = mysqli_query($conn, "INSERT INTO murid (nama, jk, alamat, nohp, kk, ijz, ktp) VALUES ('$nama', '$jk', '$alamat', '$nohp', '$kk', '$ijz', '$ktp')");
    if($query){
        header("Location: index.php"); 
    }
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

        <title>MIS. NURUL ISLAM KM. 5</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <script src="js/jquery.min.js"></script>
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST">
            <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Pendaftaran Siswa</h1>
            
            <table class="w-100 text-center">
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Nama</p></td>
                        <td><input type="text" class="form-control" name="nama" required></td>
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Jenis Kelamin</p></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" checked>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </td>
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Alamat</p></td>
                        <td><textarea class="form-control" style="resize: none;" name="alamat" rows="2" required></textarea></td>
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Nomor HP Orang Tua</p></td>
                        <td><input type="number" class="form-control" name="nohp" required></td>
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Kartu Keluarga</p></td>
                        <td><input type="file" class="form-control" id="kk" required></td>
                        <input type="hidden" name="kk" id="kk_">
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">Ijazah TK</p></td>
                        <td><input type="file" class="form-control" id="ijz" required></td>
                        <input type="hidden" name="ijz" id="ijz_">
                </tr>
                <tr>
                        <td><p class="mt-3 mr-3 font-weight-bold">KTP Orang Tua</p></td>
                        <td><input type="file" class="form-control" id="ktp" required></td>
                        <input type="hidden" name="ktp" id="ktp_">
                </tr>
            </table>

            <button class="btn btn-lg btn-primary btn-block my-4" name="daftar" type="submit">Daftar</button>
            <p class="mt-5 mb-3 text-muted">© 2022 By : <span>M. Adipati Rezkya (19041094)</span></p>
        </form>

        <script>
            const convertBase64 = (file) => {
                return new Promise((resolve, reject) => {
                    const fileReader = new FileReader();
                    fileReader.readAsDataURL(file);

                    fileReader.onload = () => {
                        resolve(fileReader.result);
                    };

                    fileReader.onerror = (error) => {
                        reject(error);
                    };
                });
            };

            $('#kk').change(async function(event){
                const file = event.target.files[0];
                const base64 = await convertBase64(file);
                $('#kk_').val(base64); 
            })

            $('#ijz').change(async function(event){
                const file = event.target.files[0];
                const base64 = await convertBase64(file);
                $('#ijz_').val(base64); 
            })

            $('#ktp').change(async function(event){
                const file = event.target.files[0];
                const base64 = await convertBase64(file);
                $('#ktp_').val(base64); 
            })
        </script>
    </body>
</html>