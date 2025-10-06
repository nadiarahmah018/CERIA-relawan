<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CERIA Relawan</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
</head>
<body>
    <header class="site-header">
        <nav class="site-nav">
            <div class="container nav-inner">
                <a class="brand" href="index.php">CERIA</a>
                <ul class="nav-list">
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#aktivitas">Aktivitas</a></li>
                    <li><a href="#daftar">Daftar</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="hero">
            <img class="hero-img" src="ceria.jpg" alt="Selamat Datang di CERIA" />
            <div class="hero-overlay">
                <div class="container">
                    <h1 class="hero-title">CERIA</h1>
                    <p class="hero-subtitle">Ciptakan Energi Relawan, Inspirasi, dan Aksi</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="hero" class="container">
            <div class="card card-featured hero-card">
                <div class="hero-grid">
                    <div class="hero-content">
                        <h2>Bergabunglah Menjadi Relawan CERIA!</h2>
                        <p>
                            CERIA — Ciptakan Energi Relawan, Inspirasi, dan Aksi. <br />
                            Yuk, jadi bagian dari gerakan penuh semangat ini! <br />
                            Relawan bukan sekadar membantu, tapi juga belajar, berbagi, dan tumbuh bersama.<br />
                            Jadilah inspirasi dan wujudkan aksi nyata yang membawa perubahan.
                        </p>
                        <div class="actions">
                            <a href="#daftar" class="btn btn-primary">Daftar Sekarang</a>
                            <a href="#aktivitas" class="btn btn-accent btn-outline">Lihat Aktivitas</a>
                        </div>
                    </div>
                    <div class="hero-media"></div>
                </div>
            </div>
        </section>

        <section id="tentang" class="container">
            <h2>Tentang Kami</h2>
            <p>
                CERIA — Ciptakan Energi Relawan, Inspirasi, dan Aksi. <br /><br />
                CERIA adalah wadah yang hadir untuk mengajak setiap individu yang berdomisili di Samarinda, Kalimantan Timur untuk berkontribusi nyata dalam kegiatan sosial dan kemanusiaan.<br />
                Kami percaya bahwa perubahan besar selalu dimulai dari langkah kecil yang dilakukan bersama-sama. <br />
                Melalui platform ini, kami memfasilitasi pendaftaran relawan untuk berbagai program dan kegiatan yang bermanfaat bagi masyarakat. <br />
                Harapannya, setiap relawan yang bergabung akan menemukan ruang untuk belajar, berbagi, dan memberikan inspirasi,<br />
                sekaligus menciptakan aksi nyata demi masa depan yang lebih baik.
            </p>
        </section>

        <section id="aktivitas" class="container">
            <h2>Aktivitas Sosial</h2>
            <div class="grid-activities">
                <article class="card">
                    <h3>Donor Darah</h3>
                    <p>Kegiatan donor darah rutin untuk membantu ketersediaan darah di rumah sakit.</p>
                    <p>
                        Lokasi: PMI Samarinda, Jl. Ir. H. Juanda No.5<br />
                        Waktu: 10 Oktober 2025, 09:00 - 13:00<br />
                        Kuota: 50 relawan<br />
                        Status: Dibuka
                    </p>
                </article>

                <article class="card">
                    <h3>Bakti Sosial</h3>
                    <p>Pemberian bantuan kepada masyarakat yang membutuhkan di daerah terpencil.</p>
                    <p>
                        Lokasi: Kampung Loa Janan Ilir, Samarinda<br />
                        Waktu: 15 Oktober 2025, 08:00 - 16:00<br />
                        Kuota: 25 Relawan<br />
                        Status: Dibuka
                    </p>
                </article>

                <article class="card">
                    <h3>Edukasi Anak</h3>
                    <p>Program belajar mengajar untuk anak-anak kurang mampu agar mendapatkan kesempatan pendidikan yang lebih baik.</p>
                    <p>
                        Lokasi: SDN 010 Samarinda Ulu <br />
                        Waktu: 20 Oktober 2025, 07:30 - 12:00<br />
                        Kuota: 20 relawan<br />
                        Status: Dibuka
                    </p>
                </article>

                <article class="card">
                    <h3>Peduli Lingkungan</h3>
                    <p>Aksi bersih-bersih lingkungan, penanaman pohon, dan kampanye go green untuk menjaga kelestarian alam.</p>
                    <p>
                        Lokasi: Taman Samarendah, Samarinda <br />
                        Waktu: 25 Oktober 2025, 08:00 - 11:00<br />
                        Kuota: 45 Relawan<br />
                        Status: Dibuka
                    </p>
                </article>

                <article class="card">
                    <h3>Dukungan Acara Sosial</h3>
                    <p>Relawan membantu menyukseskan acara sosial seperti festival budaya, kegiatan olahraga, dan penggalangan dana.</p>
                    <p>
                        Lokasi: Stadion Segiri, Samarinda<br />
                        Waktu: 30 Oktober 2025, 15:00 - 21:00<br />
                        Kuota: 27 Relawan<br />
                        Status: Dibuka
                    </p>
                </article>
            </div>
        </section>

        <section id="daftar" class="container">
            <h2>Formulir Pendaftaran Relawan</h2>
            <form class="card form-modern" action="#" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required placeholder="Nama lengkap" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="email@domain.com" />
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon" required placeholder="+62 812..." />
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required />
                </div>

                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender" required>
                        <option value="">-- Pilih --</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea id="alamat" name="alamat" rows="3" placeholder="Alamat tempat tinggal" required></textarea>
                </div>

                <div class="form-group">
                    <label for="aktivitas">Pilih Aktivitas</label>
                    <select id="aktivitas" name="aktivitas" required>
                        <option value="">-- Pilih Aktivitas --</option>
                        <option value="donor">Donor Darah</option>
                        <option value="bakti">Bakti Sosial</option>
                        <option value="edukasi">Edukasi Anak</option>
                        <option value="lingkungan">Peduli Lingkungan</option>
                        <option value="acara">Dukungan Acara Sosial</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pengalaman">Pengalaman Relawan</label>
                    <textarea id="pengalaman" name="pengalaman" rows="3" placeholder="Tuliskan pengalaman relawan sebelumnya (jika ada)"></textarea>
                </div>

                <div class="form-group">
                    <label for="harapan">Harapan dan Motivasi</label>
                    <textarea id="harapan" name="harapan" rows="3" placeholder="Tuliskan harapan dan motivasi Anda menjadi relawan"></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="setuju" name="setuju" required />
                    <label for="setuju">Saya menyetujui syarat & ketentuan yang berlaku</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </form>
        </section>

        <section id="kontak" class="container">
            <h2>Kontak Kami</h2>
            <p>Email: ceriarelawan@gmail.com</p>
            <p>Telepon: +62 888-8888-8880</p>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 CERIA Relawan. Semua Hak Dilindungi.</p>
            <p>Referensi desain: <a href="https://www.indorelawan.org/" target="_blank" rel="noopener">Indorelawan</a></p>
        </div>
    </footer>
</body>
</html>