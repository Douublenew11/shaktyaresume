<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<Style>
  /* Default styling */
body {
    background: #34353b;
}

.about {
    color: white;
}

/* Media queries for responsive design */
@media only screen and (max-width: 768px) {
    /* Update navigation menu for smaller screens */
    nav ul {
        flex-direction: column;
        text-align: center;
    }

    nav ul li {
        margin: 10px 0;
    }

    .landing .intro h3 {
        font-size: 1.5rem;
    }

    .portfolio .portfolio-cards {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .experience .exp {
        flex-direction: column;
    }
}

@media only screen and (max-width: 600px) {
    /* Update header font size for smaller screens */
    .landing .intro h3 {
        font-size: 1.2rem;
    }

    .landing .intro button {
        font-size: 0.8rem;
    }

    /* Update portfolio cards for smaller screens */
    .portfolio .portfolio-cards {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
}

</Style>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about-loc">About</a></li>
                <li><a href="#my social media and portofolio-loc">Social Media and Portofolio</a></li>
                <li><a href="#contact-loc">Contact</a></li>
                <li><a href="#skills-loc">Skills</a></li>
                <li><a href="#experience-loc">Experience</a></li>
            </ul>
            <!-- <div class="search">
                <input type="text" placeholder="search">
                <i class="ri-search-line"></i>
            </div> -->
        </nav>
        <div class="landing">
            <div class="intro">
                <h3>I'M <Span>Shaktya Daffa Al Ghifari</Span><br>Mahasiswa Maosem University<br>Teknik Informatika</h3>
                <button> <a class="nav-link" href="https://wa.me/628987173576">Contact Me</a></button>
            </div>
        </div>
    </header>
    <section class="about" id="about-loc">
    <div class="card" style="background-color: grey;">
                    <div class="card-header">
                        <h5 class="card-title mb-0 text-center" style="color: black; font-size: 30px"></h5>
                    
        <h1 style="color: #fec86a;">About me</h1>
        <div class="description">
            <!-- <div class="line"></div> -->
            <p style="color: black;">Halo! Nama saya adalah Shaktya Dafffa Al Ghifari. Saya berusia 18 tahun yang berasal dari Bandung, namun saat ini saya tinggal diKomplek Taman Cileunyi blok 2F2 no 19. Saya adalah seorang Mahasiswa dan saya bekerja sebagai freelance Designer yang juga memiliki minat dan hobi yang beragam di luar pekerjaan saya.</p>
        </div>
        </div>
    </section>
    <section class="skills" id="skills-loc">
        <h1>My Skills</h1>
        <div class="cards">
            <div class="skill-card">
                <img src="asset/figma-seeklogo.svg" alt="">
                <h2>Figma</h2>
            </div>
            <div class="skill-card">
                <img src="asset/ps.svg" alt="">
                <h2>Adobe Photoshop</h2>
            </div>
            <div class="skill-card">
                <img src="asset/xd.svg" alt="">
                <h2>Adobe XD</h2>
            </div>
            <div class="skill-card">
                <img src="asset/px.svg" alt="">
                <h2>Pixellab</h2>
            </div>
        </div>
    </section>
    <section class="portfolio" id="my social media and portofolio-loc">
        <h1>My Social Media and Portfolio</h1>
        <div class="portfolio-cards">
            <div class="portfolio-card">
                <img src="asset/images/youtube.jpg" alt="">
                <div class="overlay">
                    <h3>My Youtube</h3>
                    <button> <a class="nav-link" href="https://youtu.be/2T03gvYajzE?si=AJCGUwqNpVEj0BtR">See More</a></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="asset/images/ig.jpg" alt="">
                <div class="overlay">
                    <h3>My Instagram</h3>
                    <button> <a class="nav-link" href="https://www.instagram.com/asf.creative?igsh=YWMxa3NoejQ5Z2Zp">See More</a></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="asset/images/tiktok.jpg" alt="">
                <div class="overlay">
                    <h3>My Tiktok</h3>  
                    <button> <a class="nav-link" href="https://www.tiktok.com/@ewokksss?_t=8klsOBkh3WJ&_r=1">See More</a></button>
                </div>
        </div>
    </section>
    <section class="experience" id="experience-loc">
        <div class="darker-div"></div>
        <h1>Experience</h1>
        <div class="lighter-div">
            <div class="exp">
                <h2>Editor Akun Sepak Bola</h2>
                <div class="exp-desc">
                    <h3>Sibolga, Sumatra Utara</h3>
                    <p>Di tahun 2018-2020 saya bekerja sebagai Designer atau Editor di sebuah akun SepakBola, saya bekerja di sana sudah 2 tahunan.</p>
                </div>
            </div>
            <div class="exp">
                <h2>Freelance Designer Web dan Poster</h2>
                <div class="exp-desc">
                    <h3>Bandung, Jawa Barat</h3>
                    <p>Di tahun 2020-sampai sekarang saya bekerja sebagai freelance designer, sebelum nya di tahun 2020-2022 saya masih bekerja sebagai freelance designer poster dll. Dan di 2023-2024 saya berlalih pekerjaan menjadi freelance designer web.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 mt-2">
    <div class="container">
        <h1 style="color: white; text-align:center">Daftar Komentar</h1>
        <?php
        // Lakukan koneksi ke database atau impor file koneksi jika diperlukan
        require "koneksi.php";

        // Ambil data komentar dari database, diurutkan berdasarkan tanggal terbaru
        $komentar_query = "SELECT * FROM komentar ORDER BY tanggal DESC";
        $result = mysqli_query($koneksi, $komentar_query);

        // Pastikan query berhasil
        if($result && mysqli_num_rows($result) > 0) {
            // Tampilkan komentar
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="color : black">Email: <?php echo $row['email']; ?></h5>
                        <p style="color : black" class="card-text">Komentar: <?php echo $row['komentar']; ?></p>
                        <p style="color : black" class="card-text">Tanggal: <?php echo $row['tanggal']; ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>Tidak ada komentar.</p>";
        }

        // Tutup koneksi ke database jika tidak lagi digunakan
        mysqli_close($koneksi);
        ?>
    </div>
</section>


<section id="form-komentar" class="py-3 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-12">
                <div class="card" style="color: transparent;">
                    <div class="card-header">
                        <h5 class="card-title mb-0 text-center" style="color: black; font-size: 30px">Form Komentar</h5>
                    </div>
                    <div class="card-body" style="color: transparent;">
                        <form id="comment-form" action="simpan_komentar.php" method="POST">
                            <div class="mb-3">
                                <input type="email" placeholder="Masukkan Email" class="form-control" id="email" name="email" style="font-size: 20px" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Masukkan Saran dan Pesan Anda" id="saran" name="komentar" rows="3" style="font-size: 20px" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 20px">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-me" id="contact-loc">
        <h1>Contact Me</h1>
        <div class="contact">
            <div class="contact-card">
                <i class="ri-message-3-line"></i>
                <p>shaktyadaffaalghifari@gmail.com</p>
            </div>
            <div class="contact-card">
                <i class="ri-phone-line"></i>
                <p>+62 898-7173-576</p>
            </div>
            <div class="contact-card">
                <i class="ri-map-pin-3-line"></i>
                <p>Bandung, Indonesia</p>
            </div>
        </div>
    </section>
    

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>