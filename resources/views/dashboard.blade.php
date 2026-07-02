<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Owner - Tempat.in</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

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
    overflow-x:hidden;
    color:#1e293b;
}

body::before{
    content:'';
    position:fixed;
    width:500px;
    height:500px;
    background:rgba(79,172,254,0.10);
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

.container{
    display:flex;
    min-height:100vh;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    background:linear-gradient(180deg,#0f172a,#1e3a5f);
    padding:30px 20px;
    color:white;
    position:fixed;
    height:100vh;
}

.logo{
    font-size:30px;
    font-weight:700;
    margin-bottom:40px;
}

.sidebar-menu{
    display:flex;
    flex-direction:column;
    gap:15px;
}

.sidebar a{
    text-decoration:none;
    color:white;
    padding:15px 18px;
    border-radius:16px;
    transition:0.3s;
    font-weight:500;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.08);
    transform:translateX(5px);
}

.sidebar a.active{
    background:linear-gradient(90deg,#2563eb,#22c55e);
}

/* MAIN */
.main{
    flex:1;
    margin-left:260px;
    padding:40px;
}

/* HEADER */
.topbar{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:40px;
    flex-wrap:wrap;
    gap:20px;
}

.title h1{
    font-size:40px;
    margin-bottom:10px;
}

.title p{
    color:#64748b;
}

/* BUTTON + DATETIME */
.action-buttons{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
    align-items:flex-start;
}

.btn{
    border:none;
    padding:14px 22px;
    border-radius:14px;
    cursor:pointer;
    font-weight:600;
    color:white;
    transition:0.3s;
}

.btn:hover{
    transform:translateY(-3px);
}

.export{
    background:linear-gradient(90deg,#2563eb,#22c55e);
}

.reset{
    background:linear-gradient(90deg,#ef4444,#dc2626);
}

/* REALTIME CLOCK */
.realtime-clock{
    margin-top:12px;
    background:white;
    border-radius:16px;
    padding:10px 16px;
    box-shadow:0 4px 15px rgba(0,0,0,0.07);
    display:inline-flex;
    align-items:center;
    gap:14px;
    width:auto;
}

.clock-time{
    font-size:22px;
    font-weight:700;
    color:#2563eb;
    letter-spacing:1px;
    white-space:nowrap;
}

.clock-date{
    font-size:13px;
    color:#64748b;
    font-weight:500;
    white-space:nowrap;
    border-left:2px solid #e2e8f0;
    padding-left:14px;
}

/* CARDS */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    margin-bottom:35px;
}

.card{
    background:white;
    border-radius:28px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.05);
    position:relative;
    overflow:hidden;
}

.card::before{
    content:'';
    position:absolute;
    width:120px;
    height:120px;
    background:rgba(37,99,235,0.08);
    border-radius:50%;
    top:-40px;
    right:-40px;
}

.card h3{
    color:#64748b;
    margin-bottom:15px;
    font-size:18px;
}

.card h1{
    font-size:55px;
    color:#2563eb;
}

.green{
    color:#22c55e !important;
}

.red{
    color:#ef4444 !important;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:1fr;
    gap:25px;
}

.box{
    background:white;
    border-radius:30px;
    padding:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.05);
}

.box h3{
    margin-bottom:25px;
    color:#334155;
}

canvas{
    width:100% !important;
    height:320px !important;
}

/* RESPONSIVE */
@media(max-width:900px){
    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }
    .main{
        margin-left:0;
    }
    .container{
        flex-direction:column;
    }
}

@media(max-width:600px){
    .main{
        padding:20px;
    }
    .title h1{
        font-size:30px;
    }
    .card h1{
        font-size:40px;
    }
    .realtime-clock{
        text-align:left;
        min-width:unset;
        width:100%;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            📍 Tempat.in
        </div>

        <div class="sidebar-menu">

            <a href="/dashboard" class="active">
               📊 Dashboard
            </a>

            <a href="/monitoring">
               👥 Monitoring
            </a>

            <a href="/menu">
               📖 Menu
            </a>

            <a href="/">
               🏠 Home
            </a>

        </div>

    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- HEADER -->
        <div class="topbar">

            <div class="title">
                <h1>Dashboard Owner</h1>
                <p>Monitoring realtime pengunjung cafe Tempat.in</p>
            </div>

            <div style="display:flex; flex-direction:column; align-items:flex-end; gap:0;">

                <!-- TOMBOL -->
                <div class="action-buttons">

                    <button onclick="exportData()" class="btn export">
                        📥 Export Data
                    </button>

                    <button onclick="resetData()" class="btn reset">
                        🗑 Reset Data
                    </button>

                </div>

                <!-- JAM & TANGGAL REALTIME -->
                <div class="realtime-clock">
                    <div class="clock-time" id="clockTime">00:00:00</div>
                    <div class="clock-date" id="clockDate">-</div>
                </div>

            </div>

        </div>

        <!-- CARDS -->
        <div class="cards">

            <div class="card">
                <h3>👥 Pengunjung Saat Ini</h3>
                <h1 id="realtime">0</h1>
            </div>

            <div class="card">
                <h3>📊 Total Hari Ini</h3>
                <h1 id="total" class="green">0</h1>
            </div>

            <div class="card">
                <h3>🔥 Jam Sibuk</h3>
                <h1 id="jam" class="red">-</h1>
            </div>

        </div>

        <!-- CHART -->
        <div class="grid">

            <div class="box">
                <h3>Grafik Pengunjung</h3>
                <canvas id="chart"></canvas>
            </div>

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
};

firebase.initializeApp(firebaseConfig);
const db = firebase.database();

// ===============================
// JAM & TANGGAL REALTIME
// ===============================
const hariList = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
const bulanList = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

function updateClock(){
    const now = new Date();

    const jam   = now.getHours().toString().padStart(2,'0');
    const menit = now.getMinutes().toString().padStart(2,'0');
    const detik = now.getSeconds().toString().padStart(2,'0');

    const hari   = hariList[now.getDay()];
    const tgl    = now.getDate();
    const bulan  = bulanList[now.getMonth()];
    const tahun  = now.getFullYear();

    document.getElementById('clockTime').innerText = jam + ':' + menit + ':' + detik;
    document.getElementById('clockDate').innerText = hari + ', ' + tgl + ' ' + bulan + ' ' + tahun;
}

updateClock();
setInterval(updateClock, 1000);

// ===============================
// REALTIME - Pengunjung Saat Ini
// ===============================
db.ref("monitoring/pengunjung_dalam").on("value", snap => {
    document.getElementById("realtime").innerText = snap.val() || 0;
});

// ===============================
// CHART LINE
// ===============================
const chart = new Chart(document.getElementById('chart'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Pengunjung',
            data: [],
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37,99,235,0.15)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1,
                    callback: function(value){
                        if(Number.isInteger(value)) return value;
                    }
                }
            }
        }
    }
});

// ===============================
// TOTAL HARI INI
// ===============================
db.ref("monitoring").on("value", snap => {
    if (!snap.exists()) return;
    const data = snap.val();
    document.getElementById("total").innerText = data.total_hari_ini || 0;
});

// ===============================
// RIWAYAT - untuk grafik & jam sibuk
// ===============================
db.ref("reservasi").on("value", snap => {
    let jamMap = {};

    if (!snap.exists()) {
        chart.data.labels = [];
        chart.data.datasets[0].data = [];
        chart.update();
        document.getElementById("jam").innerText = "-";
        return;
    }

    snap.forEach(child => {
        const item = child.val();
        if (!item || !item.jam) return;
        const jamKey = item.jam.substring(0, 5);
        jamMap[jamKey] = (jamMap[jamKey] || 0) + parseInt(item.jumlah_orang || 0);
    });

    const sortedJam = Object.keys(jamMap).sort();
    chart.data.labels = sortedJam;
    chart.data.datasets[0].data = sortedJam.map(j => jamMap[j]);
    chart.update();

    let jamPadat = "-";
    let max = 0;
    for (let j in jamMap) {
        if (jamMap[j] > max) {
            max = jamMap[j];
            jamPadat = j;
        }
    }
    document.getElementById("jam").innerText = jamPadat !== "-" ? jamPadat : "-";
});

// ===============================
// EXPORT DATA
// ===============================
function exportData(){

    Promise.all([
        db.ref("monitoring").once("value"),
        db.ref("riwayat").once("value"),
        db.ref("reservasi").once("value")
    ])
    .then(([monitoringSnap, riwayatSnap, reservasiSnap]) => {

        const mon = monitoringSnap.val() || {};

        // SHEET 1 : MONITORING
        let monitoringData = [];
        monitoringData.push([
            "No", "Tanggal", "Waktu", "Jumlah Pengunjung", "Jam Sibuk", "Total Pengunjung Hari Ini"
        ]);

        let jamMap = {};
        if(riwayatSnap.exists()){
            riwayatSnap.forEach(child => {
                const item = child.val();
                if(item && item.waktu && item.masuk > 0){
                    let jam = item.waktu.split(":")[0];
                    jamMap[jam] = Math.max(jamMap[jam] || 0, item.masuk);
                }
            });
        }

        let jamSibuk = "-";
        let maxVal = 0;
        for(let j in jamMap){
            if(jamMap[j] > maxVal){
                maxVal = jamMap[j];
                jamSibuk = j + ":00";
            }
        }

        monitoringData.push([
            1,
            mon.tanggal          || "-",
            mon.waktu_update     || "-",
            mon.pengunjung_dalam || 0,
            jamSibuk,
            mon.total_hari_ini   || 0
        ]);

        // SHEET 2 : RESERVASI
        let reservasiData = [];
        reservasiData.push([
            "No", "Nama", "HP", "Jumlah Orang", "Tanggal", "Jam",
            "Total Pesanan", "DP Dibayar", "Sisa Pelunasan", "Status Pembayaran"
        ]);

        let noReservasi = 1;
        reservasiSnap.forEach(child => {
            const r = child.val();
            reservasiData.push([
                noReservasi++,
                r.nama || "-",
                r.hp || "-",
                r.jumlah_orang || "-",
                r.tanggal || "-",
                r.jam || "-",
                r.total_pesanan || 0,
                r.dp_dibayar || 0,
                r.sisa_pelunasan || 0,
                r.status_pembayaran || "-"
            ]);
        });

        // SHEET 3 : DETAIL MENU
        let detailMenuData = [];
        detailMenuData.push([
            "Nama Customer", "Tanggal", "Jam", "Menu", "Qty", "Harga"
        ]);

        reservasiSnap.forEach(child => {
            const r = child.val();
            if(r.items){
                Object.values(r.items).forEach(menu => {
                    detailMenuData.push([
                        r.nama || "-",
                        r.tanggal || "-",
                        r.jam || "-",
                        menu.name || "-",
                        menu.qty || 0,
                        menu.price || 0
                    ]);
                });
            }
        });

        const workbook        = XLSX.utils.book_new();
        const monitoringSheet = XLSX.utils.aoa_to_sheet(monitoringData);
        const reservasiSheet  = XLSX.utils.aoa_to_sheet(reservasiData);
        const detailMenuSheet = XLSX.utils.aoa_to_sheet(detailMenuData);

        XLSX.utils.book_append_sheet(workbook, monitoringSheet, "Monitoring");
        XLSX.utils.book_append_sheet(workbook, reservasiSheet,  "Reservasi");
        XLSX.utils.book_append_sheet(workbook, detailMenuSheet, "Detail Menu");

        const today = new Date().toISOString().split("T")[0];
        XLSX.writeFile(workbook, "Laporan_Tempatin_" + today + ".xlsx");

    })
    .catch(error => {
        console.error(error);
        alert("Export gagal : " + error.message);
    });

}

// ===============================
// RESET DATA
// ===============================
function resetData(){

    if(!confirm("Yakin ingin menghapus seluruh data monitoring dan reservasi?")){
        return;
    }

    Promise.all([
        db.ref("riwayat").remove(),
        db.ref("monitoring").set({
            pengunjung_dalam: 0,
            pengunjung_masuk: 0,
            pengunjung_keluar: 0,
            total_hari_ini: 0,
            waktu_update: "-",
            tanggal: new Date().toISOString().split("T")[0]
        }),
        db.ref("reservasi").remove()
    ])
    .then(() => {
        document.getElementById("realtime").innerText = 0;
        document.getElementById("total").innerText    = 0;
        document.getElementById("jam").innerText      = "-";

        chart.data.labels = [];
        chart.data.datasets[0].data = [];
        chart.update();

        alert("Data monitoring dan reservasi berhasil direset!");
    })
    .catch((error) => {
        console.error(error);
        alert("Reset gagal : " + error.message);
    });

}

</script>

</body>
</html>