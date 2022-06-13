<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <style>
img {
    max-width: 100%;
    height: auto;
}
</style>
    <title>UTS Kelompok 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="index.php">Ournime</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#berita">Berita</a></li>
                    <li><a href="#paraanggota">Tentang Kami</a></li>
                    <li><a href="anggotakelompok.html">Anggota Kelompok</a></li>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
	<h2 style ="font-size:25px; text-align:center;"> Hello, <?php echo $user_data['user_name']; ?></h2>
    <div class="wrapper">
        <section id="berita">
            <img src="https://s7.favim.com/orig/150913/anime-boy-anime-couple-anime-girl-chibi-Favim.com-3287967.jpg"/>
            <div class="kolom">
                <p class="deskripsi">Berita terbaru</p>
                <h2>Rekomendasi film anime pada awal tahun 2022</h2>
                <p>Daftar rekomendasi anime dengan rating tertinggi 2022 di bawah ini mungkin memuat anime kesayangan Anda.</p>
                <p><a href="rekomendasi-film-anime-pada-awal-tahun-2022.html" class="tombol-kuning">Selengkapnya</a></p>
            </div>
        </section>


            <div class="kolom">
                <p class="deskripsi">Berita terpopuler</p>
                <h2>Terkuak alasan Attack on Titan menjadi anime terbaik di tahun ini!</h2>
                <p>Siapa yang tidak mengenal anime ini? pasti semua wibu di muka bumi mengetahuinya.</p>
                <p><a href="terkuak-alasan-Attack-on-Titan-menjadi-anime-terbaik-di-tahun-ini.html" class="tombol-ungu">Selengkapnya</a></p>
            </div>
            <img src="https://www.teahub.io/photos/full/12-124274_attack-on-titan-2-cover-uhd-4k-wallpaper.jpg"/>

 
        <section id="paraanggota">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Tentang Kami</p>
                    <p>Blog ini dibuat dengan harap dapat memberikan informasi mengenai film-film anime bagi para pecinta anime. Kalian para wibu pasti akan sangat tertarik dengan informasi yang kami berikan. Website ini juga dibuat untuk melengkapi UTS yang diberikan.</p>
                </div>

                <div class="anggota">
                    <div class="foto-anggota">
                        <img src="https://pbs.twimg.com/profile_images/1512453151005495296/8O9iSpXZ_400x400.jpg"/>
                        <p>Chandra Nasution</p>
                    </div>
                    <div class="foto-anggota">
                        <img src="https://pbs.twimg.com/profile_images/1519711161008107520/ajTZ0S3B_400x400.jpg"/>
                        <p>Yedika Manopo</p>
                    </div>
                    <div class="foto-anggota">
                        <img src="https://pbs.twimg.com/profile_images/1427657431094415363/Am6IoKGP_400x400.jpg"/>
                        <p>Stefanie Mojambo</p>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>