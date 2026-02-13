<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio | Rintan Nur Wardani</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
        }
        .hero {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 100px 0;
        }
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #ffffff;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            margin: auto;
        }
        section {
            padding: 80px 0;
        }
    </style>
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Rintan NW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- HERO --}}
<section class="hero text-center">
    <div class="container">
        <div class="avatar mb-4">RN</div>
        <h1 class="fw-bold">Rintan Nur Wardani</h1>
        <p class="lead">
            Mahasiswa Teknik Informatika yang tertarik pada UI/UX dan pengembangan aplikasi
        </p>
        <p>Jember · :contentReference[oaicite:0]{index=0}</p>
    </div>
</section>

{{-- ABOUT --}}
<section id="about">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="fw-bold mb-4">About Me</h2>
                <p>
                    Saya adalah mahasiswa Program Studi Teknik Informatika, Jurusan Teknologi Informasi,
                    Politeknik Negeri Jember angkatan 2024. Saya memiliki ketertarikan pada bidang UI/UX
                    Design dan pengembangan aplikasi dengan fokus pada pengalaman pengguna yang efektif
                    dan mudah digunakan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- SKILLS --}}
<section id="skills" class="bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Skills</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text">Wireframe, Prototype, Usability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROJECTS --}}
<section id="projects">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Projects</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">R Collection – Aplikasi Kasir</h5>
                        <p class="card-text">
                            Berperan sebagai <strong>UI/UX Designer</strong> dalam perancangan antarmuka
                            aplikasi kasir desktop. Proyek ini menerapkan metode Design Thinking dan
                            diuji menggunakan usability testing.
                        </p>
                        <p class="mb-0"><strong>Tools:</strong> Figma, Design Thinking, Usability Testing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT --}}
<section id="contact" class="bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Contact</h2>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <p>Email: <a href="mailto:nurwardanirintan@gmail.com">nurwardanirintan@gmail.com</a></p>
                <p>GitHub: <a href="https://github.com/Rintan22" target="_blank">github.com/Rintan22</a></p>
            </div>
        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer class="bg-primary text-white text-center py-3">
    <small>© {{ date('Y') }} Rintan Nur Wardani</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
