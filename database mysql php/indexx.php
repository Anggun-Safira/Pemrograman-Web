<?php
//koneksi
 $conn = mysqli_connect("localhost", "root", "", "edukasi");
 $conn2 = mysqli_connect("localhost", "root","", "hobby");
 $conn3 = mysqli_connect("localhost", "root","","sosmed");
//ambil data
$result = mysqli_query($conn, "SELECT * FROM pendidikan");
$result2 = mysqli_query($conn2, "SELECT * FROM kegemaran");
$result3 = mysqli_query($conn3, "SELECT * FROM sosmed");
?>
<html>
<head>
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" type="text/css" href="indexx.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
    <?php
    $nama = "Anggun Safira Kusmindasari";
    $hp = "085606507236";
    $email = "anggunsafirak99@gmail.com";
    $ig = "anggunsafira.k";
    $line = "anggunsfr";
    $github = "Anggun-Safira";
    $ttl = "Tuban, 23 Juli 1999";
    $kelamin = "Perempuan";
    $alamat = "Kebonsari Gg 1 No.777 RT 02/RW 06";
    $agama = "Islam";
    $kewarganegaraan = "Indonesia";
    $informasi = "Mahasiswa Informatika 2018";
    $musik = "Mendengarkan Musik";
    $pensil = "Menulis Cerita";
    $video = "Mengedit Video";
    $kamera = "Fotografi";
    $sd = "2006-2012";
    $smp = "2012-2015";
    $sma = "2015-2018";
    $kuliah = "2018-..."
    ?>
    <div class="container">
        <div class="kiri">
            <img class="foto" src="diriku.png" />
                <div class="nama">
                <p><?php echo $nama ?></p>
                <p>Curriculum Vitae</p>
            </div>
            <div class="informasi">
                <p>Informasi Umum</p>
                <table>
                    <tr>
                        <td><i class="fa fa-briefcase fa-fw large"></i></td>
                        <td><?php echo $informasi ?></td>
                    </tr>

                </table>
            </div>
            <div class="kemampuan">
                <p>Kemampuan</p>
                <br>
                    <tr>
                        <td><i class="fab fa-html5 fa-fw large"></i></td>
                        <td>HTML</td>
                        <div class="load">
                            <div class="progress" style="width:83%">83%</div>
                        </div>
                    </tr>
                    <tr>
                        <td><i class="fab fa-css3-alt fa-fw large"></i></td>
                        <td>CSS</td>
                        <div class="load2">
                            <div class="progress2" style="width:67%">67%</div>
                        </div>
                    <tr><i class="fab fa-php fa-fw large"></i></tr>
                        <td>PHP</td>
                        <div class="load3">
                            <div class="progress3" style="width:58%">58%</div>
                        </div>
            </div>
            <div class="medsos">
                <p>Media Sosial</p>
                <table>
                    <?php $i = 1; ?>
                    <?php while( $row = mysqli_fetch_array($result3)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="">edit</a> |
                            <a href="">delete</a>
                        </td>
                        <td><?= $row["Nama"]; ?></td>
                        <td><?= $row["Social_Media"]; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                </table>
            </div>
            <div class="hobi">
                <p>Hobi</p>
                <table>
                    <?php $i = 1; ?>
                    <?php while( $row = mysqli_fetch_array($result2)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="">edit</a> |
                            <a href="">delete</a>
                        </td>
                         <td><?= $row["Hobi"]; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <div class="kanan">
            <div class="data">
                <p>Profile</p>
                <table>
                    <tr>
                        <td><i class="fa fa-calendar fa-fw large"></i> Tempat,tanggal lahir</td>
                        <td>:   <?php echo $ttl ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-home fa-fw large"></i> Alamat</td>
                        <td>:   <?php echo $alamat ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-venus-mars fa-fw large"></i> Kelamin</td>
                        <td>:   <?php echo $kelamin ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-mosque fa-fw"></i> Agama</td>
                        <td>:   <?php echo $agama ?></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-globe-asia fa-fw"></i> Kewarganegaraan</td>
                        <td>:   <?php echo $kewarganegaraan ?></td>
                    </tr>
                </table>
            </div>
            <div class="data">
                <p>Pendidikan</p>
                <table border="1" cellpadding="10" cellpadding="0">
                    <tr>
                        <th>No.</th>
                        <th>Aksi</th>
                        <th>Nama Sekolah</th>
                        <th>Tahun</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php while( $row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="">edit</a> |
                            <a href="">delete</a>
                        </td>
                        <td><?= $row["Nama_sekolah"]; ?></td>
                        <td><?= $row["Tahun"]; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                </table>
            </div>
            <div class="data">
                <p>Tentang Saya</p>
                <table>
                    <tr>
                        <td>Anak pertama dari 2 bersaudara, yang lahir di Kota Tuban yang masih berusi 20 tahun. Masih berkuliah semester 5 di jurusan Teknik Informatika. Insyaallah fresh graduate tepat waktu (4 tahun). Berniat menjadi seorang pengusaha setelah lulus nanti dan memperkerjakan orang-orang pada usaha kecil-kecilan saya. Pernah mengikuti beberapa kali lomba menulis cerpen dan puisi se-Indonesia dan masuk 50 besar namun belum pernah menang. Karya hampir dibukukan namun kalah dan belum rejeki.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>