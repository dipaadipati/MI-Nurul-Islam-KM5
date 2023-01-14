<?php
include('../koneksi.php');
if(isset($_GET['id']) && isset($_POST['judul'])){
    $title = $_POST['judul'];
    $img = $_POST['img'];
    $setImg = "";
    if(!empty($img)){
        $setImg = ", img = '$img'";
    }
    $body = $_POST['body'];
    $query = mysqli_query($conn, "UPDATE artikel SET title = '$title' $setImg, body = '$body' WHERE id = " . @$_GET['id']);
    header("Location: artikel.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Artikel - Edit</h1>
          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id = " . @$_GET['id']);
            $data = mysqli_fetch_array($query);
          ?>
          <div class="row">
        
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" method="POST">

            <div class="mb-3">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" name="judul" id="judul" value="<?=$data['title']?>" required>
            </div>

            <div class="mb-3">
              <label for="img">Gambar</label>
              <div class="bg-light text-center">
                  <img id="tampilanImg" width="400px" height="300px" src="<?=$data['img']?>">
                  <input type="file" class="form-control bg-light" id="img">
                  <input type="hidden" name="img" id="img_">
              </div>
            </div>
            
            <div class="mb-3">
              <label for="body">Isi</label>
              <input type="text" class="form-control" name="body" id="body" value="<?=$data['body']?>" required>
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

      $('#img').change(async function(event){
          const file = event.target.files[0];
          const base64 = await convertBase64(file);
          $('#tampilanImg').attr("src", base64);
          $('#img_').val(base64); 
      })
	</script>
</body>
</html>