<?php
include('../koneksi.php');
if(isset($_GET['id']) && isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kk = $_POST['kk'];
    $ijz = $_POST['ijz'];
    $ktp = $_POST['ktp'];
    $terima = $_POST['terima'] ? "ya" : "tidak";
    $setKK = "";
    if(!empty($kk)){
        $setKK = ", kk = '$kk'";
    }
    $setIjz = "";
    if(!empty($ijz)){
        $setIjz = ", ijz = '$ijz'";
    }
    $setKTP = "";
    if(!empty($ktp)){
        $setKTP = ", ktp = '$ktp'";
    }
    $query = mysqli_query($conn, "UPDATE murid SET nama = '$nama', jk = '$jk', alamat = '$alamat', nohp = '$nohp' $setKK $setIjz $setKTP, terima = '$terima' WHERE id = " . @$_GET['id']);
    header("Location: murid.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Murid - Edit</h1>
          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM murid WHERE id = " . @$_GET['id']);
            $data = mysqli_fetch_array($query);
            $is_male = $data['jk'] == "Laki-laki" ? true : false;
            $acc = $data['terima'] == "ya" ? true : false;
          ?>
          <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate="" method="POST">

            <div class="mb-3">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?=$data['nama']?>" required>
            </div>

            <div class="my-2">
                <label for="jk" class="mr-3">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" <?=$is_male ? "checked" : ""?>>
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan" <?=$is_male ? "" : "checked"?>>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            
            <div class="mb-3">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamat" id="alamat" rows="2" required><?=$data['alamat']?></textarea>
            </div>
            
            <div class="mb-3">
              <label for="nohp">Nomor HP Orang Tua</label>
              <input type="number" class="form-control" name="nohp" id="nohp" value="<?=$data['nohp']?>" required>
            </div>
            
            <div class="mb-3">
              <label for="kk">Kartu Keluarga</label>
              <div class="bg-light text-center">
                  <img id="tampilanKK" width="400px" height="300px" src="<?=$data['kk']?>" alt="">
                  <input type="file" class="form-control bg-light" id="kk">
                  <input type="hidden" name="kk" id="kk_">
              </div>
            </div>
            
            <div class="mb-3">
              <label for="ijz">Ijazah TK</label>
              <div class="bg-light text-center">
                  <img id="tampilanIjz" width="400px" height="300px" src="<?=$data['ijz']?>" alt="">
                  <input type="file" class="form-control bg-light" id="ijz">
                  <input type="hidden" name="ijz" id="ijz_">
              </div>
            </div>
            
            <div class="mb-3">
              <label for="kto">KTP Orang Tua</label>
              <div class="bg-light text-center">
                  <img id="tampilanKTP" width="400px" height="300px" src="<?=$data['ktp']?>" alt="">
                  <input type="file" class="form-control bg-light" id="ktp">
                  <input type="hidden" name="ktp" id="ktp_">
              </div>
            </div>
            
            <div class="my-4 ml-4">
              <input class="form-check-input p-4" type="checkbox" name="terima" id="defaultCheck1" <?=$acc ? "checked" : ""?>>
              <label class="form-check-label h4" for="defaultCheck1">
                Siswa/i diterima sebagai murid sekolah MI Nurul Islam
              </label>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Edit</button>
          </form>
        </div>
      </div>
        </main>
      </div>
    </div>
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
            $('#tampilanKK').attr("src", base64); 
            $('#kk_').val(base64); 
        })

        $('#ijz').change(async function(event){
            const file = event.target.files[0];
            const base64 = await convertBase64(file);
            $('#tampilanIjz').attr("src", base64); 
            $('#ijz_').val(base64); 
        })

        $('#ktp').change(async function(event){
            const file = event.target.files[0];
            const base64 = await convertBase64(file);
            $('#tampilanKTP').attr("src", base64); 
            $('#ktp_').val(base64); 
        })
    </script>
</body>
</html>