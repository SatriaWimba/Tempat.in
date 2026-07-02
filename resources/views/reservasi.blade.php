<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Tempat.in</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        :root{
            --nav:#0f172a;
            --nav2:#1e3a5f;
            --bg:#f4f7fb;
            --card:#ffffff;
            --text:#1e293b;
            --muted:#64748b;
            --green:#22c55e;
            --blue:#2563eb;
            --blue2:#22c55e;
            --line:#e2e8f0;
            --soft:#eff6ff;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:var(--bg);
            color:var(--text);
            overflow-x:hidden;
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

        /* NAVBAR */
        .navbar{
            width:100%;
            background:linear-gradient(90deg,var(--nav),var(--nav2));
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
            text-decoration:none;
        }

        .nav-menu{
            display:flex;
            align-items:center;
            gap:25px;
            flex-wrap:wrap;
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

        .nav-link.active::after{
            content:'';
            position:absolute;
            width:100%;
            height:3px;
            background:var(--green);
            bottom:-8px;
            left:0;
            border-radius:20px;
        }

        .login-btn{
            background:linear-gradient(90deg,var(--blue),var(--blue2));
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
            padding:140px 20px 40px;
            text-align:center;
        }

        .hero-badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:9px 16px;
            border-radius:999px;
            background:#dcfce7;
            color:#16a34a;
            font-size:13px;
            font-weight:700;
            margin-bottom:18px;
        }

        .hero h1{
            font-size:56px;
            line-height:1.1;
            margin-bottom:18px;
        }

        .gradient-text{
            background:linear-gradient(90deg,var(--blue),var(--blue2));
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .hero p{
            color:var(--muted);
            font-size:18px;
            line-height:1.8;
            max-width:800px;
            margin:0 auto;
        }

        /* CONTENT */
        .container{
            max-width:1400px;
            margin:auto;
            padding:0 20px 40px;
        }

        .grid{
            display:grid;
            grid-template-columns: 420px 1fr;
            gap:24px;
            align-items:start;
        }

        .card{
            background:var(--card);
            border-radius:28px;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
            padding:28px;
        }

        .section-title{
            font-size:26px;
            font-weight:700;
            margin-bottom:18px;
        }

        .sub-text{
            color:var(--muted);
            font-size:14px;
            margin-bottom:18px;
        }

        /* FORM */
        .input-group{
            margin-bottom:15px;
        }

        .input-group label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
            color:#334155;
            font-size:14px;
        }

        .input-group input,
        .input-group textarea{
            width:100%;
            padding:14px 16px;
            border:1px solid var(--line);
            border-radius:16px;
            outline:none;
            font-family:'Poppins',sans-serif;
            font-size:15px;
            background:#f8fafc;
            transition:0.3s;
        }

        .input-group input:focus,
        .input-group textarea:focus{
            border-color:#60a5fa;
            background:white;
            box-shadow:0 0 0 4px rgba(37,99,235,0.08);
        }

        .input-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
        }

        .btn-primary{
            width:100%;
            padding:15px 18px;
            border:none;
            border-radius:16px;
            cursor:pointer;
            font-weight:700;
            color:white;
            background:linear-gradient(90deg,var(--blue),var(--blue2));
            transition:0.3s;
            font-size:15px;
        }

        .btn-primary:hover{
            transform:translateY(-3px);
        }

        .btn-secondary{
            width:100%;
            padding:15px 18px;
            border:none;
            border-radius:16px;
            cursor:pointer;
            font-weight:700;
            color:#334155;
            background:#e2e8f0;
            transition:0.3s;
            font-size:15px;
            margin-top:10px;
        }

        .btn-secondary:hover{
            transform:translateY(-3px);
        }

        .notif{
            margin-top:14px;
            color:#16a34a;
            font-size:14px;
            font-weight:600;
            text-align:center;
            min-height:20px;
        }

        /* CART */
        .cart-box{
            margin-top:22px;
            border-top:1px solid var(--line);
            padding-top:18px;
        }

        .cart-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:14px;
            gap:10px;
            flex-wrap:wrap;
        }

        .cart-header h3{
            font-size:18px;
        }

        .cart-count{
            padding:7px 12px;
            border-radius:999px;
            background:#eff6ff;
            color:#2563eb;
            font-size:13px;
            font-weight:700;
        }

        .cart-list{
            display:flex;
            flex-direction:column;
            gap:12px;
        }

        .cart-item{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:12px;
            border:1px solid var(--line);
            border-radius:18px;
            padding:12px 14px;
            background:#f8fafc;
        }

        .cart-item-info{
            flex:1;
            min-width:0;
        }

        .cart-item-name{
            font-weight:700;
            font-size:15px;
            margin-bottom:4px;
        }

        .cart-item-price{
            color:var(--green);
            font-weight:700;
            font-size:14px;
        }

        .qty-box{
            display:flex;
            align-items:center;
            gap:8px;
        }

        .qty-btn{
            width:30px;
            height:30px;
            border:none;
            border-radius:50%;
            cursor:pointer;
            font-weight:700;
            background:#e2e8f0;
            color:#334155;
        }

        .qty-value{
            min-width:22px;
            text-align:center;
            font-weight:700;
        }

        .total-box{
            margin-top:16px;
            padding:16px;
            border-radius:18px;
            background:#f0fdf4;
            border:1px solid #bbf7d0;
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:10px;
        }

        .total-box strong{
            font-size:18px;
        }

        .total-box span{
            color:var(--green);
            font-size:20px;
            font-weight:800;
        }

        /* MENU */
        .menu-panel{
            display:flex;
            flex-direction:column;
            gap:18px;
        }

        .tabs{
            display:flex;
            gap:12px;
            flex-wrap:wrap;
            margin-bottom:4px;
        }

        .tab{
            border:none;
            cursor:pointer;
            padding:11px 18px;
            border-radius:999px;
            font-weight:600;
            font-size:15px;
            transition:0.3s;
            background:#e2e8f0;
            color:#475569;
        }

        .tab.active{
            background:linear-gradient(90deg,var(--blue),var(--blue2));
            color:white;
            box-shadow:0 10px 20px rgba(37,99,235,0.15);
        }

        .section{
            display:none;
        }

        .section.active{
            display:block;
        }

        .kategori{
            margin-bottom:34px;
        }

        .kategori-title{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:16px;
        }

        .kategori-icon{
            width:60px;
            height:60px;
            border-radius:18px;
            background:var(--soft);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
        }

        .kategori h2{
            font-size:34px;
        }

        .menu-list{
            display:flex;
            flex-direction:column;
            gap:14px;
        }

        .menu-card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
            transition:0.3s;
            display:flex;
            align-items:center;
            padding:14px;
            gap:16px;
        }

        .menu-card:hover{
            transform:translateY(-4px);
        }

        .menu-card img{
            width:86px;
            height:86px;
            object-fit:cover;
            border-radius:16px;
            flex-shrink:0;
        }

        .menu-body{
            flex:1;
            min-width:0;
        }

        .menu-name{
            font-size:18px;
            font-weight:700;
            margin-bottom:6px;
            color:#1e293b;
            line-height:1.25;
        }

        .menu-price{
            font-size:16px;
            color:var(--green);
            font-weight:700;
            margin-bottom:10px;
        }

        .menu-actions{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
        }

        .menu-btn{
            border:none;
            border-radius:12px;
            cursor:pointer;
            font-weight:700;
            padding:10px 14px;
            transition:0.3s;
            font-size:13px;
        }

        .btn-add{
            background:linear-gradient(90deg,var(--blue),var(--blue2));
            color:white;
        }

        .btn-remove{
            background:#e2e8f0;
            color:#334155;
        }

        .menu-btn:hover{
            transform:translateY(-2px);
        }

        .empty{
            text-align:center;
            padding:30px 12px;
            color:var(--muted);
            font-weight:600;
            display:none;
        }

        /* FOOTER */
        .footer{
            padding:30px 20px 60px;
            text-align:center;
            color:var(--muted);
        }

        /* RESPONSIVE */
        @media(max-width:1100px){
            .grid{
                grid-template-columns:1fr;
            }

            .hero h1{
                font-size:44px;
            }
        }

        @media(max-width:700px){
            .navbar{
                justify-content:center;
                padding:20px;
            }

            .logo{
                font-size:22px;
            }

            .nav-menu{
                justify-content:center;
                gap:15px;
            }

            .hero{
                padding-top:130px;
            }

            .hero h1{
                font-size:36px;
            }

            .hero p{
                font-size:16px;
            }

            .card{
                padding:20px;
                border-radius:22px;
            }

            .section-title{
                font-size:22px;
            }

            .input-grid{
                grid-template-columns:1fr;
            }

            .menu-card{
                align-items:flex-start;
            }

            .menu-card img{
                width:72px;
                height:72px;
            }

            .menu-name{
                font-size:15px;
            }

            .menu-price{
                font-size:14px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <a href="/" class="logo">📍 Tempat.in</a>

    <div class="nav-menu">
        <a href="/" class="nav-link">Home</a>
        <a href="/reservasi" class="nav-link active">Reservasi</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-badge">● RESERVASI & PESAN MENU</div>
    <h1>
        Reservasi Cafe
        <span class="gradient-text">Tempat.in</span>
    </h1>
    <p>
        Customer dapat mengisi data reservasi sekaligus memilih menu yang ingin dipesan.
        Semua data akan tersimpan ke Firebase dan dapat digunakan untuk kebutuhan laporan.
    </p>
</section>

<div class="container">
    <div class="grid">
        <!-- FORM RESERVASI -->
        <div class="card">
            <div class="section-title">Form Reservasi</div>
            <div class="sub-text">Isi data reservasi terlebih dahulu, lalu pilih menu yang ingin dipesan.</div>

            <div class="input-group">
                <label>Nama</label>
                <input type="text" id="nama" placeholder="Masukkan nama">
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label>No HP</label>
                    <input type="text" id="hp" placeholder="Masukkan nomor HP">
                </div>

                <div class="input-group">
                    <label>Jumlah Orang</label>
                    <input type="number" id="jumlahOrang" placeholder="Contoh: 4" min="1">
                </div>
            </div>

            <div class="input-grid">
                <div class="input-group">
                    <label>Tanggal</label>
                    <input type="date" id="tanggal">
                </div>

                <div class="input-group">
                    <label>Jam</label>
                    <input type="time" id="jam">
                </div>
            </div>

            <div class="input-group">
                <label>Catatan</label>
                <textarea id="catatan" rows="4" placeholder="Contoh: dekat jendela, mohon siapkan kursi tambahan"></textarea>
            </div>

            <button class="btn-primary" onclick="bukaModalBayar()">
                Bayar 50% — Pilih Metode Pembayaran
            </button>

            <button class="btn-secondary" onclick="resetForm()">
                Reset
            </button>

            <div class="notif" id="notif"></div>

            <div class="cart-box">
                <div class="cart-header">
                    <h3>Pesanan Dipilih</h3>
                    <span class="cart-count" id="cartCount">0 item</span>
                </div>

                <div class="cart-list" id="cartList">
                </div>

                <div class="total-box">
                    <strong>Total Pesanan</strong>
                    <span id="totalHarga">Rp0</span>
                </div>
            </div>
        </div>

        <!-- MENU -->
        <div class="menu-panel">
            <div class="card">
                <div class="section-title">Menu Cafe</div>
                <div class="sub-text">Klik tambah pada menu yang diinginkan untuk masuk ke pesanan reservasi.</div>

                <div class="tabs">
                    <button class="tab active" data-target="makanan">Makanan</button>
                    <button class="tab" data-target="snack">Snack</button>
                    <button class="tab" data-target="minuman">Minuman</button>
                </div>

                <!-- MAKANAN -->
                <div class="section active" id="makanan">
                    <div class="kategori">
                        <div class="kategori-title">
                            <div class="kategori-icon">🍛</div>
                            <h2>Makanan</h2>
                        </div>

                        <div class="menu-list">

                            <div class="menu-card" data-id="sweet-honey-karage" data-name="Sweet Honey Karage" data-price="29000">
                                <img src="{{ asset('images/honeykarage.jpg') }}" alt="Sweet Honey Karage">
                                <div class="menu-body">
                                    <div class="menu-name">Sweet Honey Karage</div>
                                    <div class="menu-price">Rp29.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('sweet-honey-karage','Sweet Honey Karage',29000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('sweet-honey-karage')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="chicken-teriyaki" data-name="Chicken Teriyaki" data-price="31000">
                                <img src="{{ asset('images/chiken teriyaki.jpg') }}" alt="Chicken Teriyaki">
                                <div class="menu-body">
                                    <div class="menu-name">Chicken Teriyaki</div>
                                    <div class="menu-price">Rp31.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('chicken-teriyaki','Chicken Teriyaki',31000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('chicken-teriyaki')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="ayam-geprek" data-name="Ayam Geprek" data-price="20000">
                                <img src="{{ asset('images/ayamgeprek.jpg') }}" alt="Ayam Geprek">
                                <div class="menu-body">
                                    <div class="menu-name">Ayam Geprek</div>
                                    <div class="menu-price">Rp20.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('ayam-geprek','Ayam Geprek',20000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('ayam-geprek')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="salted-egg-karage" data-name="Salted Egg Karage" data-price="25000">
                                <img src="{{ asset('images/saltedegg.jpg') }}" alt="Salted Egg Karage">
                                <div class="menu-body">
                                    <div class="menu-name">Salted Egg Karage</div>
                                    <div class="menu-price">Rp25.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('salted-egg-karage','Salted Egg Karage',25000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('salted-egg-karage')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="blackpaper-karage" data-name="Blackpaper Karage" data-price="26000">
                                <img src="{{ asset('images/ayam.jpg') }}" alt="Blackpaper Karage">
                                <div class="menu-body">
                                    <div class="menu-name">Blackpaper Karage</div>
                                    <div class="menu-price">Rp26.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('blackpaper-karage','Blackpaper Karage',26000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('blackpaper-karage')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="mie-goreng" data-name="Mie Goreng" data-price="12000">
                                <img src="{{ asset('images/miegoreng.jpg') }}" alt="Mie Goreng">
                                <div class="menu-body">
                                    <div class="menu-name">Mie Goreng</div>
                                    <div class="menu-price">Rp12.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('mie-goreng','Mie Goreng',12000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('mie-goreng')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="mie-kuah" data-name="Mie Kuah" data-price="29000">
                                <img src="{{ asset('images/miekuah.jpg') }}" alt="Mie Kuah">
                                <div class="menu-body">
                                    <div class="menu-name">Mie Kuah</div>
                                    <div class="menu-price">Rp29.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('mie-kuah','Mie Kuah',29000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('mie-kuah')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="nasi-goreng-ikan-asin" data-name="Nasi Goreng Ikan Asin" data-price="31000">
                                <img src="{{ asset('images/ikanasin.jpg') }}" alt="Nasi Goreng Ikan Asin">
                                <div class="menu-body">
                                    <div class="menu-name">Nasi Goreng Ikan Asin</div>
                                    <div class="menu-price">Rp31.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('nasi-goreng-ikan-asin','Nasi Goreng Ikan Asin',31000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('nasi-goreng-ikan-asin')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="nasi-goreng-jawa" data-name="Nasi Goreng Jawa" data-price="29000">
                                <img src="{{ asset('images/jawa.jpg') }}" alt="Nasi Goreng Jawa">
                                <div class="menu-body">
                                    <div class="menu-name">Nasi Goreng Jawa</div>
                                    <div class="menu-price">Rp29.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('nasi-goreng-jawa','Nasi Goreng Jawa',29000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('nasi-goreng-jawa')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="nasi-goreng-merah" data-name="Nasi Goreng Merah" data-price="29000">
                                <img src="{{ asset('images/merah.jpg') }}" alt="Nasi Goreng Merah">
                                <div class="menu-body">
                                    <div class="menu-name">Nasi Goreng Merah</div>
                                    <div class="menu-price">Rp29.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('nasi-goreng-merah','Nasi Goreng Merah',29000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('nasi-goreng-merah')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- SNACK -->
                <div class="section" id="snack">
                    <div class="kategori">
                        <div class="kategori-title">
                            <div class="kategori-icon">🍟</div>
                            <h2>Snack</h2>
                        </div>

                        <div class="menu-list">

                            <div class="menu-card" data-id="beef-burger" data-name="Beef Burger" data-price="30000">
                                <img src="{{ asset('images/burger.jpg') }}" alt="Beef Burger">
                                <div class="menu-body">
                                    <div class="menu-name">Beef Burger</div>
                                    <div class="menu-price">Rp30.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('beef-burger','Beef Burger',30000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('beef-burger')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="spaghetti-carbonara" data-name="Spaghetti Carbonara" data-price="28000">
                                <img src="{{ asset('images/spaghetti.jpg') }}" alt="Spaghetti Carbonara">
                                <div class="menu-body">
                                    <div class="menu-name">Spaghetti Carbonara</div>
                                    <div class="menu-price">Rp28.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('spaghetti-carbonara','Spaghetti Carbonara',28000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('spaghetti-carbonara')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="french-fries" data-name="French Fries" data-price="15000">
                                <img src="{{ asset('images/kentang.jpg') }}" alt="French Fries">
                                <div class="menu-body">
                                    <div class="menu-name">French Fries</div>
                                    <div class="menu-price">Rp15.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('french-fries','French Fries',15000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('french-fries')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="pizza" data-name="Pizza" data-price="35000">
                                <img src="{{ asset('images/pizza.jpg') }}" alt="Pizza">
                                <div class="menu-body">
                                    <div class="menu-name">Pizza</div>
                                    <div class="menu-price">Rp35.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('pizza','Pizza',35000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('pizza')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="mix-platter" data-name="Mix Platter" data-price="22000">
                                <img src="{{ asset('images/mix.jpg') }}" alt="Mix Platter">
                                <div class="menu-body">
                                    <div class="menu-name">Mix Platter</div>
                                    <div class="menu-price">Rp22.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('mix-platter','Mix Platter',22000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('mix-platter')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- MINUMAN -->
                <div class="section" id="minuman">
                    <div class="kategori">
                        <div class="kategori-title">
                            <div class="kategori-icon">☕</div>
                            <h2>Minuman</h2>
                        </div>

                        <div class="menu-list">

                            <div class="menu-card" data-id="americano" data-name="Americano" data-price="18000">
                                <img src="{{ asset('images/americano.jpg') }}" alt="Americano">
                                <div class="menu-body">
                                    <div class="menu-name">Americano</div>
                                    <div class="menu-price">Rp18.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('americano','Americano',18000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('americano')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="caffe-latte" data-name="Caffe Latte" data-price="25000">
                                <img src="{{ asset('images/cafelatte.jpg') }}" alt="Caffe Latte">
                                <div class="menu-body">
                                    <div class="menu-name">Caffe Latte</div>
                                    <div class="menu-price">Rp25.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('caffe-latte','Caffe Latte',25000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('caffe-latte')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="matcha-latte" data-name="Matcha Latte" data-price="20000">
                                <img src="{{ asset('images/matcha.jpg') }}" alt="Matcha Latte">
                                <div class="menu-body">
                                    <div class="menu-name">Matcha Latte</div>
                                    <div class="menu-price">Rp20.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('matcha-latte','Matcha Latte',20000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('matcha-latte')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="brown-sugar" data-name="Brown Sugar" data-price="23000">
                                <img src="{{ asset('images/brownsugar.jpg') }}" alt="Brown Sugar">
                                <div class="menu-body">
                                    <div class="menu-name">Brown Sugar</div>
                                    <div class="menu-price">Rp23.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('brown-sugar','Brown Sugar',23000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('brown-sugar')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="cookies-n-cream" data-name="Cookies n Cream" data-price="19000">
                                <img src="{{ asset('images/cookies.jpg') }}" alt="Cookies n Cream">
                                <div class="menu-body">
                                    <div class="menu-name">Cookies n Cream</div>
                                    <div class="menu-price">Rp19.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('cookies-n-cream','Cookies n Cream',19000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('cookies-n-cream')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="ice-dark-chocolate" data-name="Ice Dark Chocolate" data-price="26000">
                                <img src="{{ asset('images/darkchoco.jpg') }}" alt="Ice Dark Chocolate">
                                <div class="menu-body">
                                    <div class="menu-name">Ice Dark Chocolate</div>
                                    <div class="menu-price">Rp26.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('ice-dark-chocolate','Ice Dark Chocolate',26000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('ice-dark-chocolate')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="ice-red-velvet" data-name="Ice Red Velvet" data-price="22000">
                                <img src="{{ asset('images/redvelvet.jpg') }}" alt="Ice Red Velvet">
                                <div class="menu-body">
                                    <div class="menu-name">Ice Red Velvet</div>
                                    <div class="menu-price">Rp22.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('ice-red-velvet','Ice Red Velvet',22000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('ice-red-velvet')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="strawberry-tea" data-name="Strawberry Tea" data-price="17000">
                                <img src="{{ asset('images/strawberry.jpg') }}" alt="Strawberry Tea">
                                <div class="menu-body">
                                    <div class="menu-name">Strawberry Tea</div>
                                    <div class="menu-price">Rp17.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('strawberry-tea','Strawberry Tea',17000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('strawberry-tea')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="ice-lemon-tea" data-name="Ice Lemon Tea" data-price="15000">
                                <img src="{{ asset('images/lemontea.jpg') }}" alt="Ice Lemon Tea">
                                <div class="menu-body">
                                    <div class="menu-name">Ice Lemon Tea</div>
                                    <div class="menu-price">Rp15.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('ice-lemon-tea','Ice Lemon Tea',15000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('ice-lemon-tea')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-card" data-id="thai-tea" data-name="Thai Tea" data-price="21000">
                                <img src="{{ asset('images/thaitea.jpg') }}" alt="Thai Tea">
                                <div class="menu-body">
                                    <div class="menu-name">Thai Tea</div>
                                    <div class="menu-price">Rp21.000</div>
                                    <div class="menu-actions">
                                        <button class="menu-btn btn-add" onclick="tambahMenu('thai-tea','Thai Tea',21000)">Tambah</button>
                                        <button class="menu-btn btn-remove" onclick="kurangiMenu('thai-tea')">Kurangi</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- EMPTY STATE -->
        <div class="empty" id="noMenuFound" style="display:none;">Menu tidak ditemukan.</div>
    </div>
</div>

<footer class="footer">
    © 2026 Tempat.in — Smart Reservation System
</footer>

<!-- ===================== MODAL BAYAR ===================== -->
<div id="modalOverlay" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.55); z-index:9999; align-items:center; justify-content:center; padding:20px;">
    <div style="background:#fff; border-radius:28px; padding:28px; max-width:420px; width:100%; max-height:90vh; overflow-y:auto; box-shadow:0 20px 60px rgba(0,0,0,0.2);">

        <!-- Header -->
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
            <div style="font-size:20px; font-weight:700;">Bayar DP Reservasi</div>
            <button onclick="tutupModal()" style="background:#e2e8f0; border:none; border-radius:50%; width:34px; height:34px; cursor:pointer; font-size:18px; font-weight:700;">×</button>
        </div>

        <div style="font-size:13px; color:#64748b; margin-bottom:16px;">
            Pilih metode pembayaran DP <strong>50%</strong> untuk konfirmasi reservasi.
        </div>

        <!-- PILIHAN METODE PEMBAYARAN -->
        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:10px; margin-bottom:20px;">

            <button onclick="pilihMetode('qris')" id="btn-qris"
                style="padding:14px 8px; border:2px solid #e2e8f0; border-radius:16px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:13px; color:#475569; transition:0.3s; display:flex; flex-direction:column; align-items:center; gap:6px;">
                <span style="font-size:24px;">📷</span>
                QRIS
            </button>

            <button onclick="pilihMetode('va')" id="btn-va"
                style="padding:14px 8px; border:2px solid #e2e8f0; border-radius:16px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:11px; color:#475569; transition:0.3s; display:flex; flex-direction:column; align-items:center; gap:6px;">
                <span style="font-size:24px;">🏦</span>
                Transfer Bank
            </button>

            <button onclick="pilihMetode('dana')" id="btn-dana"
                style="padding:14px 8px; border:2px solid #e2e8f0; border-radius:16px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:13px; color:#475569; transition:0.3s; display:flex; flex-direction:column; align-items:center; gap:6px;">
                <span style="font-size:24px;">💳</span>
                DANA
            </button>

        </div>

        <!-- ===== KONTEN QRIS ===== -->
        <div id="konten-qris" style="display:none;">
            <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px;">
                <span style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:700; padding:5px 12px; border-radius:999px;">📱 QRIS</span>
                <span style="background:#f0fdf4; color:#16a34a; font-size:12px; font-weight:700; padding:5px 12px; border-radius:999px;">Semua Bank & E-Wallet</span>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:20px; padding:16px; text-align:center; margin-bottom:16px;">
                <img
                    src="{{ asset('images/qris.png') }}"
                    alt="QRIS Tempat.in"
                    style="width:220px; height:220px; object-fit:contain; display:block; margin:0 auto;"
                >
                <div style="margin-top:10px; font-size:12px; color:#94a3b8;">Tempat.in — Cafe Reservation</div>
            </div>
        </div>

        <!-- ===== KONTEN VIRTUAL ACCOUNT ===== -->
        <div id="konten-va" style="display:none;">
            <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px;">
                <span style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:700; padding:5px 12px; border-radius:999px;">🏦 Transfer Bank</span>
                <span style="font-size:12px; color:#94a3b8;">Pilih bank tujuan transfer</span>
            </div>

            <!-- Pilihan Bank -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px; margin-bottom:14px;">
                <button onclick="pilihBank('BCA')" id="btn-BCA"
                    style="padding:12px; border:2px solid #e2e8f0; border-radius:12px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:14px; color:#475569; transition:0.3s;">
                    🔵 BCA
                </button>
                <button onclick="pilihBank('BNI')" id="btn-BNI"
                    style="padding:12px; border:2px solid #e2e8f0; border-radius:12px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:14px; color:#475569; transition:0.3s;">
                    🟠 BNI
                </button>
                <button onclick="pilihBank('BRI')" id="btn-BRI"
                    style="padding:12px; border:2px solid #e2e8f0; border-radius:12px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:14px; color:#475569; transition:0.3s;">
                    🔵 BRI
                </button>
                <button onclick="pilihBank('Mandiri')" id="btn-Mandiri"
                    style="padding:12px; border:2px solid #e2e8f0; border-radius:12px; background:#f8fafc; cursor:pointer; font-weight:700; font-size:14px; color:#475569; transition:0.3s;">
                    🟡 Mandiri
                </button>
            </div>

            <!-- Info Nomor VA -->
            <div id="info-va" style="display:none; background:#f0f9ff; border:1px solid #bae6fd; border-radius:16px; padding:16px; margin-bottom:14px;">
                <div style="font-size:13px; color:#0369a1; margin-bottom:10px; font-weight:600;">
                    Nomor Rekening <span id="label-bank-va"></span>
                </div>
                <div style="display:flex; align-items:center; justify-content:space-between; gap:10px;">
                    <div style="font-size:20px; font-weight:800; letter-spacing:2px; color:#1e293b;" id="nomor-va-display"></div>
                    <button onclick="salinNomorVA()" style="padding:8px 14px; background:#2563eb; color:white; border:none; border-radius:10px; font-weight:700; font-size:13px; cursor:pointer; white-space:nowrap;">Salin</button>
                </div>
                <div style="font-size:12px; color:#64748b; margin-top:8px;">Atas nama: <strong>Tempat.in Cafe</strong></div>
            </div>
        </div>

        <!-- ===== KONTEN DANA ===== -->
        <div id="konten-dana" style="display:none;">
            <div style="display:flex; align-items:center; gap:8px; margin-bottom:14px;">
                <span style="background:#fef9c3; color:#854d0e; font-size:12px; font-weight:700; padding:5px 12px; border-radius:999px;">💳 DANA</span>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:16px; padding:20px; margin-bottom:14px; text-align:center;">
                <div style="font-size:13px; color:#64748b; margin-bottom:6px;">Transfer DANA ke nomor berikut:</div>
                <div style="font-size:26px; font-weight:800; letter-spacing:3px; color:#1e293b; margin:10px 0;" id="nomor-dana-display">0895-2844-0757</div>
                <div style="font-size:13px; color:#64748b; margin-bottom:14px;">Atas nama: <strong>Tempat.in Cafe</strong></div>
                <button onclick="salinNomorDana()" style="padding:10px 24px; background:#16a34a; color:white; border:none; border-radius:12px; font-weight:700; font-size:13px; cursor:pointer;">
                    Salin Nomor
                </button>
            </div>
            <div style="background:#fefce8; border:1px solid #fde047; border-radius:12px; padding:12px 14px; font-size:13px; color:#854d0e; margin-bottom:4px;">
                ⚠️ Pastikan nama penerima benar sebelum transfer.
            </div>
        </div>

        <!-- RINCIAN PEMBAYARAN -->
        <div style="background:#f8fafc; border-radius:16px; padding:16px; margin-top:16px; margin-bottom:16px;">
            <div style="display:flex; justify-content:space-between; padding:7px 0; border-bottom:1px solid #e2e8f0; font-size:14px;">
                <span style="color:#64748b;">Total Pesanan</span>
                <span id="modalTotal" style="font-weight:600;">Rp0</span>
            </div>
            <div style="display:flex; justify-content:space-between; padding:7px 0; border-bottom:1px solid #e2e8f0; font-size:14px;">
                <span style="color:#64748b;">DP yang dibayar sekarang (50%)</span>
                <span id="modalDP" style="font-weight:700; color:#16a34a; font-size:16px;">Rp0</span>
            </div>
            <div style="display:flex; justify-content:space-between; padding:7px 0; font-size:13px;">
                <span style="color:#94a3b8;">Sisa pelunasan (di tempat)</span>
                <span id="modalSisa" style="color:#94a3b8;">Rp0</span>
            </div>
        </div>

        <div style="background:#fefce8; border:1px solid #fde047; border-radius:12px; padding:12px 14px; font-size:13px; color:#854d0e; margin-bottom:16px;">
            ⏳ Setelah membayar, klik tombol di bawah untuk mengirim konfirmasi ke WhatsApp admin.
        </div>

        <button
            onclick="konfirmasiPembayaran()"
            style="width:100%; padding:16px; border:none; border-radius:16px; cursor:pointer; font-weight:700; color:white; background:linear-gradient(90deg,#16a34a,#22c55e); font-size:15px; margin-bottom:10px;"
        >
            ✅ Sudah Bayar — Kirim ke WhatsApp
        </button>

        <button
            onclick="tutupModal()"
            style="width:100%; padding:13px; border:none; border-radius:16px; cursor:pointer; font-weight:600; color:#64748b; background:#e2e8f0; font-size:14px;"
        >
            Batal
        </button>

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
        appId: "1:272968364979:web:83ab633dc5c960c01e11c6"
    };

    firebase.initializeApp(firebaseConfig);
    const db = firebase.database();

    /* ---- TABS ---- */
    const tabs = document.querySelectorAll('.tab');
    const sections = document.querySelectorAll('.section');
    const allMenuCards = document.querySelectorAll('.menu-card');
    const noMenuFound = document.getElementById('noMenuFound');

    let selectedItems = {};
    let dataReservasiTemp = null;

    /* ---- DATA REKENING ---- */
    const nomorVA = {
        'BCA':     '4390724344',
        'BNI':     '9876543210',
        'BRI':     '1122334455',
        'Mandiri': '1440024070770'
    };
    const nomorDana = '0895-2844-0757';

    let metodePembayaran = '';
    let bankDipilih = '';

    /* ---- TABS MENU ---- */
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.target;
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            sections.forEach(section => {
                section.classList.remove('active');
                if(section.id === target) section.classList.add('active');
            });
            filterMenu();
        });
    });

    function filterMenu(){
        const activeTab = document.querySelector('.tab.active').dataset.target;
        let visibleCount = 0;
        allMenuCards.forEach(card => {
            const matchTab = card.closest('.section')?.id === activeTab;
            card.style.display = matchTab ? 'flex' : 'none';
            if(matchTab) visibleCount++;
        });
        noMenuFound.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    /* ---- CART ---- */
    function tambahMenu(id, name, price){
        if(!selectedItems[id]){
            selectedItems[id] = { id, name, price, qty: 0 };
        }
        selectedItems[id].qty += 1;
        renderCart();
    }

    function kurangiMenu(id){
        if(!selectedItems[id]) return;
        selectedItems[id].qty -= 1;
        if(selectedItems[id].qty <= 0) delete selectedItems[id];
        renderCart();
    }

    function renderCart(){
        const cartList = document.getElementById('cartList');
        const cartCount = document.getElementById('cartCount');
        const totalHarga = document.getElementById('totalHarga');

        cartList.innerHTML = '';
        let totalItem = 0;
        let total = 0;
        const items = Object.values(selectedItems);

        if(items.length === 0){
            cartList.innerHTML = '<div class="empty" style="display:block;">Belum ada menu yang dipilih.</div>';
            cartCount.innerText = '0 item';
            totalHarga.innerText = 'Rp0';
            return;
        }

        items.forEach(item => {
            totalItem += item.qty;
            total += item.qty * item.price;
            const row = document.createElement('div');
            row.className = 'cart-item';
            row.innerHTML = `
                <div class="cart-item-info">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-price">Rp${formatRupiah(item.price)} x ${item.qty}</div>
                </div>
                <div class="qty-box">
                    <button class="qty-btn" type="button" onclick="kurangiMenu('${item.id}')">-</button>
                    <div class="qty-value">${item.qty}</div>
                    <button class="qty-btn" type="button" onclick="tambahMenu('${item.id}','${item.name}',${item.price})">+</button>
                </div>
            `;
            cartList.appendChild(row);
        });

        cartCount.innerText = `${totalItem} item`;
        totalHarga.innerText = `Rp${formatRupiah(total)}`;
    }

    function formatRupiah(angka){
        return Number(angka).toLocaleString('id-ID');
    }

    function resetForm(){
        document.getElementById('nama').value = '';
        document.getElementById('hp').value = '';
        document.getElementById('jumlahOrang').value = '';
        document.getElementById('tanggal').value = '';
        document.getElementById('jam').value = '';
        document.getElementById('catatan').value = '';
        document.getElementById('notif').innerText = '';
        selectedItems = {};
        renderCart();
    }

    /* ---- MODAL ---- */
    function bukaModalBayar(){
        const nama = document.getElementById('nama').value.trim();
        const hp = document.getElementById('hp').value.trim();
        const jumlahOrang = document.getElementById('jumlahOrang').value.trim();
        const tanggal = document.getElementById('tanggal').value;
        const jam = document.getElementById('jam').value;
        const catatan = document.getElementById('catatan').value.trim();

        if(!nama || !hp || !jumlahOrang || !tanggal || !jam){
            alert('Isi semua data reservasi terlebih dahulu!');
            return;
        }

        /* ---- VALIDASI WINDOW 1 JAM SEBELUM RESERVASI ---- */
const sekarang = new Date();
const waktuReservasi = new Date(tanggal + 'T' + jam);
const selisihMenit = (waktuReservasi - sekarang) / 1000 / 60;

if (selisihMenit <= 0) {
    alert('Waktu reservasi sudah lewat! Silakan pilih tanggal/jam yang akan datang.');
    return;
}

if (selisihMenit > 60) {
    alert(
        'Pemesanan hanya bisa dilakukan dalam 1 jam sebelum waktu reservasi!\n\n' +
        'Contoh: Reservasi jam 16:00 → bisa pesan mulai jam 15:00 s/d 15:59\n\n' +
        'Silakan kembali di waktu yang tepat.'
    );
    return;
}

        const items = Object.values(selectedItems);
        const totalPesanan = items.reduce((sum, item) => sum + (item.qty * item.price), 0);
        const dp = Math.round(totalPesanan * 0.5);
        const sisa = totalPesanan - dp;

        dataReservasiTemp = { nama, hp, jumlahOrang, tanggal, jam, catatan, items, totalPesanan, dp, sisa };

        document.getElementById('modalTotal').innerText = 'Rp' + formatRupiah(totalPesanan);
        document.getElementById('modalDP').innerText = 'Rp' + formatRupiah(dp);
        document.getElementById('modalSisa').innerText = 'Rp' + formatRupiah(sisa);

        /* Reset state metode setiap kali buka modal */
        metodePembayaran = '';
        bankDipilih = '';
        resetTampilanMetode();

        const overlay = document.getElementById('modalOverlay');
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function tutupModal(){
        document.getElementById('modalOverlay').style.display = 'none';
        document.body.style.overflow = '';
    }

    function resetTampilanMetode(){
        ['qris','va','dana'].forEach(m => {
            const btn = document.getElementById('btn-' + m);
            btn.style.border = '2px solid #e2e8f0';
            btn.style.background = '#f8fafc';
            btn.style.color = '#475569';
        });
        ['konten-qris','konten-va','konten-dana'].forEach(id => {
            document.getElementById(id).style.display = 'none';
        });
        document.getElementById('info-va').style.display = 'none';
        ['BCA','BNI','BRI','Mandiri'].forEach(bank => {
            const b = document.getElementById('btn-' + bank);
            b.style.border = '2px solid #e2e8f0';
            b.style.background = '#f8fafc';
            b.style.color = '#475569';
        });
    }

    function pilihMetode(metode){
        metodePembayaran = metode;
        bankDipilih = '';

        resetTampilanMetode();

        /* Aktifkan tombol yang dipilih */
        const aktif = document.getElementById('btn-' + metode);
        aktif.style.border = '2px solid #2563eb';
        aktif.style.background = '#eff6ff';
        aktif.style.color = '#2563eb';

        /* Tampilkan konten yang sesuai */
        document.getElementById('konten-' + metode).style.display = 'block';

        /* Set nomor DANA */
        if(metode === 'dana'){
            document.getElementById('nomor-dana-display').innerText = nomorDana;
        }
    }

    function pilihBank(bank){
        bankDipilih = bank;

        ['BCA','BNI','BRI','Mandiri'].forEach(b => {
            const btn = document.getElementById('btn-' + b);
            btn.style.border = '2px solid #e2e8f0';
            btn.style.background = '#f8fafc';
            btn.style.color = '#475569';
        });

        const aktif = document.getElementById('btn-' + bank);
        aktif.style.border = '2px solid #2563eb';
        aktif.style.background = '#eff6ff';
        aktif.style.color = '#2563eb';

        document.getElementById('info-va').style.display = 'block';
        document.getElementById('label-bank-va').innerText = bank;
        document.getElementById('nomor-va-display').innerText = nomorVA[bank];
    }

    function salinNomorVA(){
        const nomor = document.getElementById('nomor-va-display').innerText;
        navigator.clipboard.writeText(nomor).then(() => alert('Nomor rekening ' + bankDipilih + ' berhasil disalin!'));
    }

    function salinNomorDana(){
        navigator.clipboard.writeText(nomorDana).then(() => alert('Nomor DANA berhasil disalin!'));
    }

    /* ---- KONFIRMASI PEMBAYARAN ---- */
    function konfirmasiPembayaran() {

    // ── 1. CEK DATA FORM ──────────────────────────────────────
    if (!dataReservasiTemp) return;

    if (!metodePembayaran) {
        alert('Pilih metode pembayaran terlebih dahulu!');
        return;
    }

    if (metodePembayaran === 'va' && !bankDipilih) {
        alert('Pilih bank tujuan transfer terlebih dahulu!');
        return;
    }

    const d = dataReservasiTemp;

    const infoMetode =
        metodePembayaran === 'va'
            ? `Transfer Bank ${bankDipilih} (${nomorVA[bankDipilih]})`
            : metodePembayaran === 'dana'
            ? `DANA (${nomorDana})`
            : 'QRIS';

    // ── 2. CEK KAPASITAS FIREBASE ─────────────────────────────
    db.ref("monitoring/pengunjung_dalam").once("value")
        .then((snapshot) => {

            const pengunjungSaatIni = snapshot.val() || 0;
            const jumlahReservasi   = parseInt(d.jumlahOrang);
            const KAPASITAS_MAKSIMAL = 50; // sesuaikan dengan kapasitas cafemu

            if ((pengunjungSaatIni + jumlahReservasi) > KAPASITAS_MAKSIMAL) {
                alert(
                    'Reservasi gagal!\n\n' +
                    'Pengunjung saat ini : ' + pengunjungSaatIni + ' orang\n' +
                    'Jumlah reservasi    : ' + jumlahReservasi   + ' orang\n' +
                    'Sisa kapasitas      : ' + (KAPASITAS_MAKSIMAL - pengunjungSaatIni) + ' orang'
                );
                return; // ← stop di sini kalau penuh
            }

            // ── 3. SIMPAN RESERVASI ───────────────────────────
            db.ref("reservasi").push({
                nama              : d.nama,
                hp                : d.hp,
                jumlah_orang      : d.jumlahOrang,
                tanggal           : d.tanggal,
                jam               : d.jam,
                catatan           : d.catatan,
                items             : d.items,
                total_pesanan     : d.totalPesanan,
                dp_dibayar        : d.dp,
                sisa_pelunasan    : d.sisa,
                metode_pembayaran : infoMetode,
                status_pembayaran : 'DP_LUNAS',
                waktu_input       : new Date().toLocaleString()
            });

            // ── 4. UPDATE MONITORING & GRAFIK ─────────────────
            const jumlah   = parseInt(d.jumlahOrang);
            const now      = new Date();
            const jamUpdate = now.toTimeString().substring(0, 8);
            const jamGrafik = d.jam.substring(0, 5);

            db.ref("monitoring/pengunjung_masuk").transaction(val => (val || 0) + jumlah);
            db.ref("monitoring/pengunjung_dalam").transaction(val => (val || 0) + jumlah);
            db.ref("monitoring/total_hari_ini").transaction(val  => (val || 0) + jumlah);
            db.ref("monitoring/waktu_update").set(jamUpdate);
            db.ref("grafik/" + jamGrafik).transaction(val => (val || 0) + jumlah);

            // ── 5. KIRIM WHATSAPP ─────────────────────────────
            const pesan = `
Halo Tempat.in 👋

Saya ingin konfirmasi reservasi cafe.

*DATA RESERVASI*
Nama: ${d.nama}
No HP: ${d.hp}
Jumlah Orang: ${d.jumlahOrang}
Tanggal: ${d.tanggal}
Jam: ${d.jam}
Catatan: ${d.catatan || "-"}

*PESANAN*
${d.items.map(item => `- ${item.name} x ${item.qty} = Rp${formatRupiah(item.qty * item.price)}`).join('\n')}

*RINCIAN PEMBAYARAN*
Total Pesanan          : Rp${formatRupiah(d.totalPesanan)}
DP 50%   : Rp${formatRupiah(d.dp)}
Sisa Pelunasan (di tempat) : Rp${formatRupiah(d.sisa)}
Metode Pembayaran      : ${infoMetode}


            `.trim();

            const nomorAdmin = "89528440757";
            window.open(`https://wa.me/${nomorAdmin}?text=${encodeURIComponent(pesan)}`, '_blank');

            // ── 6. TUTUP MODAL & RESET ────────────────────────
            tutupModal();
            document.getElementById('notif').innerText = '✅ Reservasi & pembayaran berhasil dikonfirmasi!';
            resetForm();
            dataReservasiTemp  = null;
            metodePembayaran   = '';
            bankDipilih        = '';
        })
        .catch((error) => {
            console.error(error);
            alert('Terjadi kesalahan saat mengecek kapasitas.');
        });
}

    /* ---- TUTUP MODAL KLIK LUAR ---- */
    document.getElementById('modalOverlay').addEventListener('click', function(e){
        if(e.target === this) tutupModal();
    });

    renderCart();
</script>

</body>
</html>