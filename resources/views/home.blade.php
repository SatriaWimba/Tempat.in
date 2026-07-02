<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Tempat.in</title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f4f7fb;
    color:#1e293b;
    overflow-x:hidden;
}

/* BACKGROUND */
body::before{
    content:'';
    position:fixed;
    width:500px;
    height:500px;
    background:rgba(79,172,254,0.12);
    border-radius:50%;
    top:-200px;
    left:-200px;
    z-index:-1;
}

body::after{
    content:'';
    position:fixed;
    width:600px;
    height:600px;
    background:rgba(34,197,94,0.10);
    border-radius:50%;
    bottom:-250px;
    right:-250px;
    z-index:-1;
}

/* NAVBAR */
.navbar{
    width:100%;
    background:linear-gradient(90deg,#0f172a,#1e3a5f);
    padding:20px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    left:0;
    z-index:1000;
    flex-wrap:wrap;
    gap:20px;
}

.logo{
    font-size:28px;
    color:white;
    font-weight:700;
}

.nav-menu{
    display:flex;
    align-items:center;
    gap:25px;
    flex-wrap:wrap;
}

.right-menu{
    display:flex;
    align-items:center;
    gap:20px;
}

.nav-link{
    text-decoration:none;
    color:white;
    font-weight:500;
    transition:0.3s;
    position:relative;
}

.nav-link:hover{
    color:#38bdf8;
}

.active::after{
    content:'';
    position:absolute;
    width:100%;
    height:3px;
    background:#22c55e;
    bottom:-8px;
    left:0;
    border-radius:20px;
}

.login-btn{
    background:linear-gradient(90deg,#2563eb,#22c55e);
    padding:12px 22px;
    border-radius:14px;
    color:white;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.login-btn:hover{
    transform:translateY(-3px);
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:150px 20px 80px;
}

.hero-container{
    max-width:900px;
    width:100%;
    margin:auto;
    text-align:center;
}

.hero-text{
    display:flex;
    flex-direction:column;
    align-items:center;
}

.live-badge{
    background:#dcfce7;
    color:#16a34a;
    padding:10px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
    margin-bottom:25px;
}

.hero-text h1{
    font-size:65px;
    line-height:1.2;
    margin-bottom:20px;
    font-weight:700;
}

.gradient-text{
    background:linear-gradient(90deg,#2563eb,#22c55e);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero-text p{
    color:#64748b;
    font-size:18px;
    line-height:1.8;
    margin-bottom:35px;
    max-width:700px;
}

.hero-buttons{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
    justify-content:center;
}

.btn-primary{
    background:linear-gradient(90deg,#2563eb,#22c55e);
    color:white;
    padding:15px 28px;
    border-radius:16px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
    box-shadow:0 10px 25px rgba(37,99,235,0.2);
}

.btn-primary:hover{
    transform:translateY(-5px);
}

.btn-secondary{
    background:white;
    color:#1e293b;
    padding:15px 28px;
    border-radius:16px;
    text-decoration:none;
    font-weight:600;
    border:1px solid #dbeafe;
    transition:0.3s;
}

.btn-secondary:hover{
    transform:translateY(-5px);
}

/* FEATURES */
.features{
    padding:80px 20px;
}

.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title h2{
    font-size:45px;
    margin-bottom:15px;
}

.section-title p{
    color:#64748b;
}

.feature-grid{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.feature-card{
    background:white;
    padding:35px;
    border-radius:28px;
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
    transition:0.3s;
}

.feature-card:hover{
    transform:translateY(-8px);
}

.feature-icon{
    width:70px;
    height:70px;
    border-radius:20px;
    background:#eff6ff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    margin-bottom:25px;
}

.feature-card h3{
    margin-bottom:15px;
    font-size:24px;
}

.feature-card p{
    color:#64748b;
    line-height:1.7;
}

/* MODAL */
.modal{
    display:none;
    position:fixed;
    z-index:2000;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(15,23,42,0.7);
    backdrop-filter:blur(5px);
}

.modal-content{
    background:white;
    width:90%;
    max-width:420px;
    margin:80px auto;
    padding:35px;
    border-radius:30px;
    animation:fadeIn 0.3s ease;
}

@keyframes fadeIn{
    from{
        transform:translateY(-20px);
        opacity:0;
    }
    to{
        transform:translateY(0);
        opacity:1;
    }
}

.modal-content h3{
    margin-bottom:20px;
    font-size:28px;
}

input,
textarea{
    width:100%;
    padding:14px;
    margin-bottom:15px;
    border-radius:14px;
    border:1px solid #cbd5e1;
    font-family:'Poppins',sans-serif;
}

textarea{
    resize:none;
    height:120px;
}

.modal-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:14px;
    margin-top:10px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

.send-btn{
    background:linear-gradient(90deg,#2563eb,#22c55e);
    color:white;
}

.close-btn{
    background:#e2e8f0;
}

.modal-btn:hover{
    transform:translateY(-3px);
}

.notif{
    margin-top:15px;
    color:#16a34a;
    font-size:14px;
    text-align:center;
}

/* FOOTER */
.footer{
    padding:40px 20px;
    text-align:center;
    color:#64748b;
}

/* RESPONSIVE */
@media(max-width:1000px){

    .navbar{
        justify-content:center;
    }

}

@media(max-width:700px){

    .hero-text h1{
        font-size:42px;
    }

    .section-title h2{
        font-size:34px;
    }

    .nav-menu{
        justify-content:center;
        gap:15px;
    }

    .right-menu{
        justify-content:center;
    }

    .logo{
        font-size:22px;
    }

}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">

    <div class="logo">
        📍 Tempat.in
    </div>

    <div class="nav-menu">

        <a href="/" class="nav-link active">
            Home
        </a>

        <a href="/monitoring" class="nav-link">
            Monitoring
        </a>

        <a href="/menu" class="nav-link">
            Menu
        </a>

        <a href="/reservasi"
           class="nav-link">
            Reservasi
        </a>

        <a href="https://maps.google.com/?q=-7.9468681089655835,112.61613433074798"
           target="_blank"
           class="nav-link">
            Lokasi Kafe
        </a>

    </div>

    <div class="right-menu">

        <a href="#"
           onclick="openForm()"
           class="nav-link">
            Kritik & Saran
        </a>

        <a href="/login"
           class="login-btn">
            Login
        </a>

    </div>

</nav>

<!-- HERO -->
<section class="hero">

    <div class="hero-container">

        <div class="hero-text">

            <div class="live-badge">
                ● SMART CAFE MONITORING
            </div>

            <h1>
                Monitoring Pengunjung
                <span class="gradient-text">
                    Secara Realtime
                </span>
            </h1>

            <p>
                Tempat.in membantu customer mengetahui kondisi cafe secara realtime,
                mulai dari jumlah pengunjung,
                kapasitas tempat,
                hingga status kepadatan ruangan.
            </p>

        </div>

    </div>

</section>

<!-- FITUR -->
<section class="features">

    <div class="section-title">

        <h2>Fitur Utama</h2>

        <p>
            Sistem monitoring modern untuk customer dan owner cafe
        </p>

    </div>

    <div class="feature-grid">

        <div class="feature-card">

            <div class="feature-icon">
                📊
            </div>

            <h3>Realtime Monitoring</h3>

            <p>
                Data jumlah pengunjung diperbarui secara realtime menggunakan Firebase.
            </p>

        </div>

        <div class="feature-card">

            <div class="feature-icon">
                📱
            </div>

            <h3>Responsive Design</h3>

            <p>
                Tampilan modern yang dapat digunakan pada desktop maupun smartphone.
            </p>

        </div>

        <div class="feature-card">

            <div class="feature-icon">
                🔐
            </div>

            <h3>Owner Dashboard</h3>

            <p>
                Dashboard khusus owner untuk monitoring kondisi tempat secara langsung.
            </p>

        </div>

    </div>

</section>

<!-- MODAL KRITIK -->
<div class="modal" id="formBox">

    <div class="modal-content">

        <h3>Kritik & Saran</h3>

        <input type="text"
               id="nama"
               placeholder="Nama">

        <textarea id="pesan"
                  placeholder="Tulis kritik atau saran..."></textarea>

        <button class="modal-btn send-btn"
                onclick="kirimData()">
            Kirim
        </button>

        <button class="modal-btn close-btn"
                onclick="closeForm()">
            Tutup
        </button>

        <p class="notif" id="notif"></p>

    </div>

</div>

<!-- FOOTER -->
<footer class="footer">

    © 2026 Tempat.in — Smart Monitoring System

</footer>

<!-- FIREBASE -->
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

<script>

const firebaseConfig = {

    apiKey: "AIzaSyA7p_GiDW-iG_cumBfbFNrqsfdE_tNevCg",
    authDomain: "tempatin-114d7.firebaseapp.com",
    databaseURL: "https://tempatin-114d7-default-rtdb.firebaseio.com",
    projectId: "tempatin-114d7",
    storageBucket: "tempatin-114d7.firebasestorage.app",
    messagingSenderId: "272968364979",
    appId: "1:272968364979:web:83ab633dc5c960c01e11c6"

};

firebase.initializeApp(firebaseConfig);

const db = firebase.database();

/* KRITIK SARAN */
function openForm(){

    document.getElementById("formBox")
            .style.display = "block";

}

function closeForm(){

    document.getElementById("formBox")
            .style.display = "none";

}

function kirimData(){

    const nama =
        document.getElementById("nama").value;

    const pesan =
        document.getElementById("pesan").value;

    if(nama === "" || pesan === ""){

        alert("Isi semua field!");
        return;

    }

    db.ref("kritik_saran").push({

        nama:nama,
        pesan:pesan,
        waktu:new Date().toLocaleString()

    });

    document.getElementById("notif")
            .innerText =
            "Terima kasih atas masukannya!";

}

</script>

</body>
</html>