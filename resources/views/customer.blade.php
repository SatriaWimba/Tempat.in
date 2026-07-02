<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Tempat.in</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#f4f7fb;
            overflow-x:hidden;
            color:#1e293b;
        }

        /* BACKGROUND */
        body::before{
            content:'';
            position:fixed;
            top:-200px;
            left:-200px;
            width:500px;
            height:500px;
            background:rgba(79,172,254,0.15);
            border-radius:50%;
            z-index:-1;
        }

        body::after{
            content:'';
            position:fixed;
            bottom:-250px;
            right:-250px;
            width:600px;
            height:600px;
            background:rgba(0,242,254,0.12);
            border-radius:50%;
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
            position:sticky;
            top:0;
            z-index:1000;
        }

        .logo{
            font-size:30px;
            font-weight:700;
            color:white;
        }

        .nav-menu{
            display:flex;
            gap:25px;
        }

        .nav-link{
            color:white;
            text-decoration:none;
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
            bottom:-8px;
            left:0;
            width:100%;
            height:3px;
            background:#22c55e;
            border-radius:10px;
        }

        /* CONTAINER */
        .container{
            max-width:1200px;
            margin:auto;
            padding:50px 20px;
        }

        .badge{
            background:#dcfce7;
            color:#16a34a;
            display:inline-block;
            padding:8px 18px;
            border-radius:50px;
            font-size:14px;
            font-weight:600;
            margin-bottom:20px;
        }

        .title{
            text-align:center;
            margin-bottom:10px;
            font-size:55px;
            font-weight:700;
            background:linear-gradient(90deg,#2563eb,#22c55e);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .subtitle{
            text-align:center;
            color:#64748b;
            margin-bottom:50px;
            font-size:18px;
        }

        /* GRID */
        .dashboard-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:25px;
        }

        /* CARD */
        .card{
            background:white;
            border-radius:28px;
            padding:35px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card-header{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:25px;
        }

        .icon{
            width:70px;
            height:70px;
            border-radius:20px;
            background:#eff6ff;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:30px;
        }

        .card-title{
            font-size:28px;
            font-weight:700;
        }

        .big-number{
            font-size:65px;
            font-weight:700;
            color:#2563eb;
        }

        .max-text{
            color:#94a3b8;
            font-size:50px;
        }

        /* PROGRESS */
        .progress-container{
            width:100%;
            height:14px;
            background:#e2e8f0;
            border-radius:20px;
            margin-top:25px;
            overflow:hidden;
        }

        .progress-bar{
            height:100%;
            width:0%;
            border-radius:20px;
            transition:0.5s;
            background:linear-gradient(90deg,#22c55e,#16a34a);
        }

        .info-row{
            display:flex;
            justify-content:space-between;
            margin-top:30px;
            flex-wrap:wrap;
            gap:15px;
        }

        .info-box{
            background:#f8fafc;
            padding:15px 20px;
            border-radius:18px;
            flex:1;
            min-width:140px;
        }

        .info-box h4{
            font-size:14px;
            color:#64748b;
            margin-bottom:8px;
        }

        .info-box p{
            font-size:24px;
            font-weight:700;
        }

        /* STATUS */
        .status-text{
            font-size:50px;
            font-weight:700;
            margin-top:10px;
        }

        .status-desc{
            margin-top:10px;
            color:#64748b;
            font-size:16px;
        }

        .live-box{
            margin-top:30px;
            background:#f0fdf4;
            border:2px solid #bbf7d0;
            padding:18px;
            border-radius:18px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
            gap:10px;
        }

        .live{
            background:#22c55e;
            color:white;
            padding:6px 14px;
            border-radius:30px;
            font-size:13px;
            font-weight:600;
        }

        /* FULL WIDTH */
        .full-card{
            margin-top:25px;
        }

        .capacity-line{
            width:100%;
            height:12px;
            background:linear-gradient(
                to right,
                #22c55e 0%,
                #22c55e 50%,
                #facc15 50%,
                #facc15 80%,
                #ef4444 80%,
                #ef4444 100%
            );
            border-radius:20px;
            margin-top:35px;
            position:relative;
        }

        .pointer{
            position:absolute;
            top:-12px;
            width:20px;
            height:35px;
            background:#22c55e;
            border-radius:10px;
            transition:0.5s;
        }

        .labels{
            display:flex;
            justify-content:space-between;
            margin-top:15px;
            color:#64748b;
            font-size:14px;
        }

        /* FOOTER */
        .footer{
            margin-top:35px;
            display:flex;
            justify-content:space-between;
            flex-wrap:wrap;
            gap:20px;
            color:#64748b;
        }

        .footer-box{
            background:white;
            padding:20px;
            border-radius:20px;
            box-shadow:0 10px 20px rgba(0,0,0,0.05);
            flex:1;
        }

        /* RESPONSIVE */
        @media(max-width:900px){

            .dashboard-grid{
                grid-template-columns:1fr;
            }

            .title{
                font-size:40px;
            }

            .navbar{
                padding:20px;
            }

        }

        @media(max-width:600px){

            .title{
                font-size:34px;
            }

            .subtitle{
                font-size:15px;
            }

            .big-number{
                font-size:45px;
            }

            .max-text{
                font-size:35px;
            }

            .status-text{
                font-size:38px;
            }

            .nav-menu{
                gap:15px;
            }

            .logo{
                font-size:24px;
            }

        }

    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

    <div class="logo">
        📍 Tempat.in
    </div>

    <div class="nav-menu">
        <a href="/" class="nav-link">Home</a>
        <a href="/monitoring" class="nav-link active">Monitoring</a>
    </div>

</div>

<!-- CONTENT -->
<div class="container">

    <div style="text-align:center;">
        <div class="badge">
            ● LIVE MONITORING
        </div>
    </div>

    <h1 class="title">
        Monitoring Tempat
    </h1>

    <p class="subtitle">
        Informasi real-time penggunaan tempat
    </p>

    <!-- GRID -->
    <div class="dashboard-grid">

        <!-- CARD PENGUNJUNG -->
        <div class="card">

            <div class="card-header">

                <div class="icon">
                    👥
                </div>

                <div>
                    <h3>Pengunjung Saat Ini</h3>
                </div>

            </div>

            <div>
                <span class="big-number" id="jumlah">0</span>
                <span class="max-text">/50</span>
            </div>

            <div class="progress-container">
                <div class="progress-bar" id="progressBar"></div>
            </div>

            <div class="info-row">

                <div class="info-box">
                    <h4>Maks Pengunjung</h4>
                    <p>50 Orang</p>
                </div>

                <div class="info-box">
                    <h4>Sisa Kapasitas</h4>
                    <p id="sisa">50</p>
                </div>

            </div>

        </div>

        <!-- STATUS -->
        <div class="card">

            <div class="card-header">

                <div class="icon" id="statusIcon">
                    ✅
                </div>

                <div>
                    <h3>Status</h3>
                </div>

            </div>

            <div class="status-text" id="status">
                Aman
            </div>

            <div class="status-desc" id="statusDesc">
                Kondisi masih dalam batas normal
            </div>

            <div class="live-box">

                <div>
                    <strong>Sistem berjalan normal</strong>
                    <br>
                    <small id="jam">Loading...</small>
                </div>

                <div class="live">
                    Live
                </div>

            </div>

        </div>

    </div>

    <!-- FULL WIDTH -->
    <div class="card full-card">

        <h2>📊 Informasi Kapasitas</h2>

        <div class="capacity-line">
            <div class="pointer" id="pointer"></div>
        </div>

        <div class="labels">
            <span>0% Tersedia</span>
            <span>70% Hampir Penuh</span>
            <span>100% Penuh</span>
        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">

        <div class="footer-box">
            <strong>🛡 Sistem Monitoring Tempat</strong>
            <br>
            <small>Data diperbarui secara realtime</small>
        </div>

        <div class="footer-box">
            <strong>🕒 Waktu Sekarang</strong>
            <br>
            <small id="clock"></small>
        </div>

    </div>

</div>

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
    appId: "1:272968364979:web:83ab633dc5c960c01e11c6",
    measurementId: "G-P911FLV3HP"

};

firebase.initializeApp(firebaseConfig);

const db = firebase.database();

const maxPengunjung = 50;

// REALTIME FIREBASE
db.ref("monitoring/pengunjung_dalam").on("value", (snapshot) => {

    const data = snapshot.val() || 0;

    // JUMLAH
    document.getElementById("jumlah").innerText = data;

    // SISA
    document.getElementById("sisa").innerText = (maxPengunjung - data) + " Orang";

    // PERSENTASE
    const persen = (data / maxPengunjung) * 100;

    // PROGRESS
    const progressBar = document.getElementById("progressBar");
    progressBar.style.width = persen + "%";

    // POINTER
    document.getElementById("pointer").style.left = `calc(${persen}% - 10px)`;

    // STATUS
    let status = "Tersedia";
    let color = "#16a34a";
    let desc = "Kondisi masih dalam batas normal";
    let icon = "✅";

    if(data >= 40){

        status = "Penuh";
        color = "#ef4444";
        desc = "Kapasitas tempat sudah penuh";
        icon = "⛔";

        progressBar.style.background = "#ef4444";

    }
    else if(data >= 25){

        status = "Hampir Penuh";
        color = "#f59e0b";
        desc = "Kapasitas mulai meningkat";
        icon = "⚠";

        progressBar.style.background = "#f59e0b";

    }
    else{

        progressBar.style.background = "#22c55e";

    }

    document.getElementById("status").innerText = status;
    document.getElementById("status").style.color = color;

    document.getElementById("statusDesc").innerText = desc;

    document.getElementById("statusIcon").innerText = icon;

});

// JAM
function updateClock(){

    const now = new Date();

    const time = now.toLocaleTimeString('id-ID');

    const date = now.toLocaleDateString('id-ID');

    document.getElementById("clock").innerHTML = `${date} ${time}`;

    document.getElementById("jam").innerHTML = `Terakhir diperbarui: ${time}`;

}

setInterval(updateClock,1000);

updateClock();

</script>

</body>
</html>