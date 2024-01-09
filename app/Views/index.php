<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnCourse</a></div>
        <div class="menu">
            <ul>
                <li><a href="#courses">Kursus</a></li>
                <li><a href="#tutors">Mentor</a></li>
                <li><a href="#partners">Mitra</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>      
    </nav>
    <div class="wrapper">
        <!--untuk home-->
        <section id="home">
        <img src="img/web.jpg" class="ukuran-gambar">
            <div class="kolom">
                <p class="deskripsi">Ayo Belajar Programming</p>
                <h2>Kemudahan belajar programming dimanapun dan kapanpun!!!</h2>
                <p>Mulailah dengan kelas online kami.</p>
                <p><a href="/home" class="tbl-red">Coba Sekarang</a></p>
            </div>
        </section>

        <!--untuk courses-->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Kamu mungkin mencari ini</p>
                <h2>Kursus Online</h2>
                <p>Mari mulai belajar programming bersama kami,dengan materi-materi mengenai dasar-dasar HTML,CSS,dan JavaScript serta materi mengenai pengelolaan server dan database.Dengan ini kamu akan mendapatkan kemampuan untuk membuat website sendiri.</p>
            </div>
            <img src="img/web1.jpg">
        </section>

        <!--untuk tutors-->
        <section id="tutors">
        <div class="tengah">
            <div class="kolom">
                <h2>Mentor</h2>
                <p>Kami memiliki mentor-mentor yang berpengalaman dibidangnya,yang dapat membimbing anda dalam pengembangan website dan pengelolaan server dan database.Dengan ini memungkinkan anda dapat mendapatkan ilmu yang berkualitas.</p>
            </div>
            <div class="tutor-list">
                <div class="kartu-tutor">
                    <img src="img/man1.jpg"/>
                    <p>Bruno Alves</p>
                </div>
                <div class="kartu-tutor">
                    <img src="img/man2.jpg"/>
                    <p>Jacob Scott</p>
                </div>
                    <div class="kartu-tutor">
                    <img src="img/man3.jpg"/>
                    <p>Rick Grimss</p>
                </div>
            </div>
        </section>

        <!--untuk partners-->
        <section  id="partners">
            <div class="tengah">
                <div class="kolom">
                    <h2>Mitra</h2>
                    <p>Kami juga memiliki beberapa partner untuk mengembangkan kerjasama di bidang ini, yang tujuannya adalah untuk memberikan kesempatan kepada calon programmer profesional untuk lebih mengembangkan karirnya.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th/id/OIP.87HaO-BM2TGzVu9gITtcgAHaHa?w=184&h=184&c=7&r=0&o=5&dpr=1.5&pid=1.7"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th/id/OIP.MvqfuczInQ97MDtqcJhdZQHaHa?w=174&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th/id/OIP.AnW64KUpNT7rFRUll8PyDQHaHA?w=209&h=198&c=7&r=0&o=5&dpr=1.5&pid=1.7"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://th.bing.com/th/id/OIP.61X2w36bg0jkJHllQc2fxAHaHa?w=183&h=183&c=7&r=0&o=5&dpr=1.5&pid=1.7"/>
                </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Tentang</h3>
                    <p>Kursus Online Programming</p>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <p>whatsapp (0822 9111 9765)</p>
                    <p>Jl.Buah Batu</p>
                </div>
                <div class="footer-section">
                    <h3>Media Sosial</h3>
                    <p><b>Instagram</b>@anotherwrld.doc</p>
                </div>
            </div>
        </div>
        </div>
        <div id="copyright">
            <div class="wrapper">
                &copy; 2023. <b>AnotherWrld.</b> All Rigths Reserved
            </div>
    </div>

    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>
</html>