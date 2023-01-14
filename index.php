    <?php include("header.php") ?>

    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <section class="slideshow">
                <img src="images/slide.jpeg" alt="Team Work">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>MIS. NURUL ISLAM KM. 5</h3>
                        <h1>BANJARMASIN</h1>
                    </div>

                    <h3>Untuk memperoleh informasi selengkapnya saya persilahkan untuk menelusuri lebih lanjut website resmi <a href="https://mini5bjm.web.id/">MIS. NURUL ISLAM KM.5 BANJARMASIN</a>.</h3>
                </div>
            </section>
        </li>

    </ul>


    <div id="sambutan" class="sambutan">
        <h1>"Madrasah Hebat Madrasah Bermartabat"</h1>
        Membentuk manusia yang memiliki ciri-ciri sebagai berikut :
        <ul align="left">
            <li>Beriman dan bertaqwa.</li>
            <li>Berakhlakul karimah</li>
            <li>Sehat jasmani dan rohani</li>
            <li>Cerdas, berpengetahuan, dan terampil</li>
            <li>Berkepribadian dan mandiri</li>
        </ul>
    </div>


    <div class="kepsek">
        <div class="container">
            <img src="images/kepala.jpg" alt="Kepala MIS. NURUL ISLAM KM.5 BANJARMASIN">

            <div class="visiMisi">

                <div class="visi">
                    <h5>Our Vision</h5>
                    <h3>Terwujudnya pendidikan dan pengajaran yang Islami, berkualitas, berdaya saing, populer, dan berakar di masyarakat.</h3>
                </div>

                <div class="misi">
                    <h5>Our Mission</h5>
                    <ul>
                        <li>Menyelenggarakan pendidikan melalui bimbingan, pengajaran, dan pelatihan yang terpadu antara dunia dan akhirat.</li>
                        <li>Menyelenggarakan pendidikan yang bermutu, berilmu, cerdas, dan mandiri.</li>
                        <li>Menyelenggarakan pendidikan yang menekankan kepada ibadah, akhlakul karimah dan ilmu pengetahuan teknologi.</li>
                        <li>Menyelenggarakan pendidikan yang hasilnya memberikan kepuasan kepada masyarakat.</li>
                        <li>Menyelenggarakan pendidikan dengan manajemen modern dan dapat dipertanggung jawabkan kepada publik</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>


    <div id="kurikulum" class="kurikulum">
        <div class="container">
            <h2>Kurikulum</h2>

            <div class="boxKurikulum">
                <?php
                    $result = mysqli_query($conn, "SELECT kurikulum FROM sekolah");
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    echo $row["kurikulum"];
                ?>
            </div>

            <div class="boxKurikulum">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h4>PELAJARAN</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 m-auto">
                            <ul class="list-group">
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM pelajaran");
                                while($row = mysqli_fetch_array($result)):
                            ?>
                                <li class="list-group-item">
                                    <?=$row["nama_pelajaran"]?>
                                    <?php
                                        if(!empty(json_decode($row["sub_pelajaran"], true)[0])){
                                            $sub_pelajaran = json_decode($row["sub_pelajaran"]) ?? null;
                                            echo "<ul>";
                                            foreach($sub_pelajaran as $key=>$val){
                                                echo "<li>";
                                                echo $val;
                                                echo "</li>";
                                            }
                                            echo "</ul>";
                                        }
                                    ?>
                                </li>
                            <?php endwhile ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="galeri" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2>Galeri Foto</h2>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" id="galeri-search" class="form-control" placeholder="Cari">
                </div>
            </div>
        </div>

        <div class="artikelHome" id="galeriData">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM galeri");
            ?>
            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>
                <a class="perArtikelHome">
                    <img src="<?=$row["img"]?>" alt="Galeri Foto <?=$row["id"]+1?>">
                    <h3><?=$row["title"]?></h3>
                    <p>
                        <?=$row["body"]?>
                    </p>
                </a>
            <?php endwhile ?>

        </div>
    </div>

    <div id="artikel" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2>Artikel Kegiatan</h2>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" id="artikel-search" class="form-control" placeholder="Cari">
                </div>
            </div>
        </div>

        <div class="artikelHome" id="artikelData">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM artikel");
            ?>
            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>
                <a class="perArtikelHome">
                    <img src="<?=$row["img"]?>" alt="Galeri Foto <?=$row["id"]+1?>">
                    <h3><?=$row["title"]?></h3>
                    <p>
                        <?=$row["body"]?>
                    </p>
                </a>
            <?php endwhile ?>

        </div>
    </div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div id="joinus" class="join">
                <div class="row">
                    <div class="col">
                        <a href="daftar.php">
                            <button class="joinus">Pendaftaran Siswa/Siswi</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include("footer.php") ?>

    <script src="js/script.js"></script>
</body>

</html>