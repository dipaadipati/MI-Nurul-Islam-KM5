<?php
include("header.php");
$result = mysqli_query($conn, "SELECT kurikulum FROM sekolah");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$kurikulum = $row["kurikulum"];

if(isset($_POST["kurikulum"])){
  $kurikulum = $_POST["kurikulum"];
  $result = mysqli_query($conn, "UPDATE sekolah SET kurikulum = '$kurikulum'");
  
}
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <form method="post">
            <div class="d-flex">
              <div class="row">
                <div class="col">
                  <label for="kurikulum">Kurikulum</label>
                </div>
                <div class="col">
                  <textarea name="kurikulum" id="kurikulum" cols="80" rows="3"><?=$kurikulum?></textarea>
                </div>
                <div class="col">
                  <input type="submit" class="btn btn-success" value="Simpan">
                </div>
              </div>
            </div>
          </form>
        </main>
      </div>
    </div>
</body>
</html>