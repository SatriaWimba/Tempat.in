<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Tempat.in</title>

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
            color:#1e293b;
            overflow-x:hidden;
        }

        /* BACKGROUND */
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
            gap:15px;
        }

        .logo{
            font-size:28px;
            color:white;
            font-weight:700;
        }

        .nav-menu{
            display:flex;
            gap:25px;
            align-items:center;
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

        /* hanya untuk link navbar, bukan semua elemen active */
        .nav-link.active::after{
            content:'';
            position:absolute;
            width:100%;
            height:3px;
            background:#22c55e;
            bottom:-8px;
            left:0;
            border-radius:20px;
        }

        /* HEADER */
        .header{
            padding-top:150px;
            padding-bottom:25px;
            text-align:center;
        }

        .header h1{
            font-size:60px;
            margin-bottom:20px;
        }

        .gradient-text{
            background:linear-gradient(90deg,#2563eb,#22c55e);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .header p{
            color:#64748b;
            font-size:18px;
            max-width:700px;
            margin:auto;
            line-height:1.8;
            padding:0 20px;
        }

        /* CONTAINER */
        .container{
            width:100%;
            max-width:1300px;
            margin:auto;
            padding:20px;
        }

        /* SEARCH */
        .search-wrap{
            margin-bottom:18px;
        }

        .search-group{
            position:relative;
        }

        .search-icon{
            position:absolute;
            left:16px;
            top:50%;
            transform:translateY(-50%);
            color:#94a3b8;
            font-size:18px;
            pointer-events:none;
        }

        .search-box{
            width:100%;
            border:none;
            outline:none;
            padding:16px 20px 16px 48px;
            border-radius:14px;
            background:white;
            box-shadow:0 10px 30px rgba(0,0,0,0.05);
            font-size:15px;
            color:#1e293b;
        }

        .search-box::placeholder{
            color:#94a3b8;
        }

        /* TABS */
        .tabs{
            display:flex;
            gap:12px;
            flex-wrap:wrap;
            margin-bottom:24px;
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
            background:linear-gradient(90deg,#2563eb,#22c55e);
            color:white;
            box-shadow:0 10px 20px rgba(37,99,235,0.15);
        }

        /* CATEGORY */
        .kategori{
            margin-bottom:40px;
        }

        .kategori-title{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:18px;
        }

        .kategori-icon{
            width:60px;
            height:60px;
            border-radius:18px;
            background:#eff6ff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
        }

        .kategori h2{
            font-size:38px;
        }

        /* SECTION */
        .section{
            display:none;
        }

        .section.active{
            display:block;
        }

        /* LIST */
        .menu-list{
            display:flex;
            flex-direction:column;
            gap:14px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
            transition:0.3s;
            display:flex;
            align-items:center;
            padding:14px;
            gap:16px;
            border:none !important;
            outline:none !important;
            position:relative;
        }

        .card:hover{
            transform:translateY(-4px);
        }

        .card img{
            width:86px;
            height:86px;
            object-fit:cover;
            border-radius:16px;
            flex-shrink:0;
            border:none !important;
            outline:none !important;
        }

        .card-body{
            flex:1;
            min-width:0;
            text-align:left;
        }

        .nama{
            font-size:18px;
            font-weight:700;
            margin-bottom:6px;
            color:#1e293b;
            line-height:1.25;
        }

        .harga{
            font-size:16px;
            color:#22c55e;
            font-weight:700;
        }

        /* EMPTY */
        .no-data{
            text-align:center;
            padding:40px 20px;
            color:#64748b;
            font-weight:600;
            display:none;
        }

        /* FOOTER */
        .footer{
            padding:40px 20px 100px;
            text-align:center;
            color:#64748b;
        }

        /* RESPONSIVE */
        @media(max-width:700px){

            .navbar{
                justify-content:center;
                gap:15px;
                padding:20px;
            }

            .logo{
                font-size:22px;
            }

            .nav-menu{
                justify-content:center;
                gap:15px;
            }

            .header h1{
                font-size:40px;
            }

            .kategori h2{
                font-size:30px;
            }

            .card{
                align-items:flex-start;
            }

            .card img{
                width:72px;
                height:72px;
            }

            .nama{
                font-size:15px;
            }

            .harga{
                font-size:14px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="logo">
        📍 Tempat.in
    </div>

    <div class="nav-menu">
        <a href="/" class="nav-link">
            Home
        </a>

        <a href="/menu" class="nav-link active">
            Menu
        </a>
    </div>
</nav>

<section class="header">
    <h1>
        Menu
        <span class="gradient-text">
            Tempat.in
        </span>
    </h1>

    <p>
        Nikmati berbagai pilihan makanan dan minuman favorit dengan tampilan digital menu modern.
    </p>
</section>

<div class="container">

    <div class="search-wrap">
        <div class="search-group">
            <span class="search-icon">⌕</span>
            <input type="text" class="search-box" id="searchInput" placeholder="Cari menu...">
        </div>
    </div>

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

                <div class="card" data-name="sweet honey karage" data-category="makanan">
                    <img src="{{ asset('images/honeykarage.jpg') }}" alt="Sweet Honey Karage">
                    <div class="card-body">
                        <div class="nama">Sweet Honey Karage</div>
                        <div class="harga">Rp29.000</div>
                    </div>
                </div>

                <div class="card" data-name="chicken teriyaki" data-category="makanan">
                    <img src="{{ asset('images/chiken teriyaki.jpg') }}" alt="Chicken Teriyaki">
                    <div class="card-body">
                        <div class="nama">Chicken Teriyaki</div>
                        <div class="harga">Rp31.000</div>
                    </div>
                </div>

                <div class="card" data-name="ayam geprek" data-category="makanan">
                    <img src="{{ asset('images/ayamgeprek.jpg') }}" alt="Ayam Geprek">
                    <div class="card-body">
                        <div class="nama">Ayam Geprek</div>
                        <div class="harga">Rp20.000</div>
                    </div>
                </div>

                <div class="card" data-name="salted egg karage" data-category="makanan">
                    <img src="{{ asset('images/saltedegg.jpg') }}" alt="Salted Egg Karage">
                    <div class="card-body">
                        <div class="nama">Salted Egg Karage</div>
                        <div class="harga">Rp25.000</div>
                    </div>
                </div>

                <div class="card" data-name="blackpaper karage" data-category="makanan">
                    <img src="{{ asset('images/ayam.jpg') }}" alt="Blackpaper Karage">
                    <div class="card-body">
                        <div class="nama">Blackpaper Karage</div>
                        <div class="harga">Rp26.000</div>
                    </div>
                </div>

                <div class="card" data-name="mie goreng" data-category="makanan">
                    <img src="{{ asset('images/miegoreng.jpg') }}" alt="Mie Goreng">
                    <div class="card-body">
                        <div class="nama">Mie Goreng</div>
                        <div class="harga">Rp12.000</div>
                    </div>
                </div>

                <div class="card" data-name="mie kuah" data-category="makanan">
                    <img src="{{ asset('images/miekuah.jpg') }}" alt="Mie Kuah">
                    <div class="card-body">
                        <div class="nama">Mie Kuah</div>
                        <div class="harga">Rp29.000</div>
                    </div>
                </div>

                <div class="card" data-name="nasi goreng ikan asin" data-category="makanan">
                    <img src="{{ asset('images/ikanasin.jpg') }}" alt="Nasi Goreng Ikan Asin">
                    <div class="card-body">
                        <div class="nama">Nasi Goreng Ikan Asin</div>
                        <div class="harga">Rp31.000</div>
                    </div>
                </div>

                <div class="card" data-name="nasi goreng jawa" data-category="makanan">
                    <img src="{{ asset('images/jawa.jpg') }}" alt="Nasi Goreng Jawa">
                    <div class="card-body">
                        <div class="nama">Nasi Goreng Jawa</div>
                        <div class="harga">Rp29.000</div>
                    </div>
                </div>

                <div class="card" data-name="nasi goreng merah" data-category="makanan">
                    <img src="{{ asset('images/merah.jpg') }}" alt="Nasi Goreng Merah">
                    <div class="card-body">
                        <div class="nama">Nasi Goreng Merah</div>
                        <div class="harga">Rp29.000</div>
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

                <div class="card" data-name="beef burger" data-category="snack">
                    <img src="{{ asset('images/burger.jpg') }}" alt="Beef Burger">
                    <div class="card-body">
                        <div class="nama">Beef Burger</div>
                        <div class="harga">Rp30.000</div>
                    </div>
                </div>

                <div class="card" data-name="spaghetti carbonara" data-category="snack">
                    <img src="{{ asset('images/spaghetti.jpg') }}" alt="Spaghetti Carbonara">
                    <div class="card-body">
                        <div class="nama">Spaghetti Carbonara</div>
                        <div class="harga">Rp28.000</div>
                    </div>
                </div>

                <div class="card" data-name="french fries" data-category="snack">
                    <img src="{{ asset('images/kentang.jpg') }}" alt="French Fries">
                    <div class="card-body">
                        <div class="nama">French Fries</div>
                        <div class="harga">Rp15.000</div>
                    </div>
                </div>

                <div class="card" data-name="pizza" data-category="snack">
                    <img src="{{ asset('images/pizza.jpg') }}" alt="Pizza">
                    <div class="card-body">
                        <div class="nama">Pizza</div>
                        <div class="harga">Rp35.000</div>
                    </div>
                </div>

                <div class="card" data-name="mix platter" data-category="snack">
                    <img src="{{ asset('images/mix.jpg') }}" alt="Mix Platter">
                    <div class="card-body">
                        <div class="nama">Mix Platter</div>
                        <div class="harga">Rp22.000</div>
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

                <div class="card" data-name="americano" data-category="minuman">
                    <img src="{{ asset('images/americano.jpg') }}" alt="Americano">
                    <div class="card-body">
                        <div class="nama">Americano</div>
                        <div class="harga">Rp18.000</div>
                    </div>
                </div>

                <div class="card" data-name="caffe latte" data-category="minuman">
                    <img src="{{ asset('images/cafelatte.jpg') }}" alt="Caffe Latte">
                    <div class="card-body">
                        <div class="nama">Caffe Latte</div>
                        <div class="harga">Rp25.000</div>
                    </div>
                </div>

                <div class="card" data-name="matcha latte" data-category="minuman">
                    <img src="{{ asset('images/matcha.jpg') }}" alt="Matcha Latte">
                    <div class="card-body">
                        <div class="nama">Matcha Latte</div>
                        <div class="harga">Rp20.000</div>
                    </div>
                </div>

                <div class="card" data-name="brown sugar" data-category="minuman">
                    <img src="{{ asset('images/brownsugar.jpg') }}" alt="Brown Sugar">
                    <div class="card-body">
                        <div class="nama">Brown Sugar</div>
                        <div class="harga">Rp23.000</div>
                    </div>
                </div>

                <div class="card" data-name="cookies n cream" data-category="minuman">
                    <img src="{{ asset('images/cookies.jpg') }}" alt="Cookies n Cream">
                    <div class="card-body">
                        <div class="nama">Cookies n Cream</div>
                        <div class="harga">Rp19.000</div>
                    </div>
                </div>

                <div class="card" data-name="ice dark chocolate" data-category="minuman">
                    <img src="{{ asset('images/darkchoco.jpg') }}" alt="Ice Dark Chocolate">
                    <div class="card-body">
                        <div class="nama">Ice Dark Chocolate</div>
                        <div class="harga">Rp26.000</div>
                    </div>
                </div>

                <div class="card" data-name="ice red velvet" data-category="minuman">
                    <img src="{{ asset('images/redvelvet.jpg') }}" alt="Ice Red Velvet">
                    <div class="card-body">
                        <div class="nama">Ice Red Velvet</div>
                        <div class="harga">Rp22.000</div>
                    </div>
                </div>

                <div class="card" data-name="strawberry tea" data-category="minuman">
                    <img src="{{ asset('images/strawberry.jpg') }}" alt="Strawberry Tea">
                    <div class="card-body">
                        <div class="nama">Strawberry Tea</div>
                        <div class="harga">Rp17.000</div>
                    </div>
                </div>

                <div class="card" data-name="ice lemon tea" data-category="minuman">
                    <img src="{{ asset('images/lemontea.jpg') }}" alt="Ice Lemon Tea">
                    <div class="card-body">
                        <div class="nama">Ice Lemon Tea</div>
                        <div class="harga">Rp15.000</div>
                    </div>
                </div>

                <div class="card" data-name="thai tea" data-category="minuman">
                    <img src="{{ asset('images/thaitea.jpg') }}" alt="Thai Tea">
                    <div class="card-body">
                        <div class="nama">Thai Tea</div>
                        <div class="harga">Rp21.000</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="no-data" id="noData">Menu tidak ditemukan.</div>

</div>

<footer class="footer">
    © 2026 Tempat.in — Digital Menu Cafe
</footer>

<script>
    const tabs = document.querySelectorAll('.tab');
    const sections = document.querySelectorAll('.section');
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const noData = document.getElementById('noData');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.target;

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            sections.forEach(section => {
                section.classList.remove('active');
                if (section.id === target) {
                    section.classList.add('active');
                }
            });

            filterCards();
        });
    });

    searchInput.addEventListener('input', filterCards);

    function filterCards() {
        const query = searchInput.value.toLowerCase().trim();
        const activeTab = document.querySelector('.tab.active').dataset.target;
        let visibleCount = 0;

        cards.forEach(card => {
            const name = (card.dataset.name || '').toLowerCase();
            const category = card.dataset.category || '';
            const matchTab = category === activeTab;
            const matchSearch = name.includes(query);

            if (matchTab && matchSearch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noData.style.display = visibleCount === 0 ? 'block' : 'none';
    }
</script>

</body>
</html>