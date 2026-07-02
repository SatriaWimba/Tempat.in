<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Owner - Tempat.in</title>

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
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f4f7fb;
    overflow:hidden;
    position:relative;
}

/* BACKGROUND */
body::before{
    content:'';
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(79,172,254,0.15);
    border-radius:50%;
    top:-180px;
    left:-180px;
}

body::after{
    content:'';
    position:absolute;
    width:600px;
    height:600px;
    background:rgba(34,197,94,0.12);
    border-radius:50%;
    bottom:-250px;
    right:-250px;
}

/* LOGIN BOX */
.login-wrapper{
    width:100%;
    max-width:430px;
    padding:20px;
    position:relative;
    z-index:2;
}

.login-box{
    background:white;
    padding:45px;
    border-radius:35px;
    box-shadow:0 20px 50px rgba(0,0,0,0.08);
    backdrop-filter:blur(10px);
}

/* HEADER */
.login-header{
    text-align:center;
    margin-bottom:35px;
}

.logo{
    width:80px;
    height:80px;
    background:linear-gradient(135deg,#2563eb,#22c55e);
    border-radius:25px;
    margin:auto;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:35px;
    color:white;
    margin-bottom:20px;
    box-shadow:0 10px 25px rgba(37,99,235,0.25);
}

.login-header h2{
    font-size:34px;
    color:#0f172a;
    margin-bottom:10px;
}

.login-header p{
    color:#64748b;
    font-size:15px;
}

/* INPUT */
.input-group{
    margin-bottom:22px;
}

.input-group label{
    display:block;
    margin-bottom:10px;
    color:#334155;
    font-weight:500;
}

.input-group input{
    width:100%;
    padding:16px 18px;
    border:2px solid #e2e8f0;
    border-radius:16px;
    font-size:15px;
    outline:none;
    transition:0.3s;
    background:#f8fafc;
}

.input-group input:focus{
    border-color:#2563eb;
    background:white;
    box-shadow:0 0 0 4px rgba(37,99,235,0.10);
}

/* BUTTON */
.btn{
    width:100%;
    padding:16px;
    border:none;
    border-radius:18px;
    background:linear-gradient(90deg,#2563eb,#22c55e);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
    margin-top:10px;
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(37,99,235,0.20);
}

/* ERROR */
.error{
    color:#ef4444;
    font-size:14px;
    text-align:center;
    margin-top:18px;
    min-height:20px;
}

/* BACK */
.back{
    text-align:center;
    margin-top:25px;
}

.back a{
    text-decoration:none;
    color:#64748b;
    transition:0.3s;
    font-size:14px;
}

.back a:hover{
    color:#2563eb;
}

/* RESPONSIVE */
@media(max-width:500px){

    .login-box{
        padding:35px 25px;
        border-radius:25px;
    }

    .login-header h2{
        font-size:28px;
    }

}

/* POPUP NOTIFICATION */
.notif-popup{
    position:fixed;
    top:20px;
    right:20px;
    min-width:320px;
    max-width:400px;
    padding:15px 20px;
    border-radius:15px;
    color:white;
    font-weight:600;
    z-index:9999;

    transform:translateX(500px);
    transition:all .4s ease;

    box-shadow:0 10px 30px rgba(0,0,0,.2);
}

.notif-popup.show{
    transform:translateX(0);
}

.notif-success{
    background:#22c55e;
}

.notif-error{
    background:#ef4444;
}

</style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-box">

        <!-- HEADER -->
        <div class="login-header">

            <div class="logo">
                🔐
            </div>

            <h2>
                Login Owner
            </h2>

            <p>
                Silahkan login untuk mengakses dashboard owner Tempat.in
            </p>

        </div>

        <!-- EMAIL -->
        <div class="input-group">

            <label>
                Email
            </label>

            <input type="email"
                   id="email"
                   placeholder="Masukkan email">

        </div>

        <!-- PASSWORD -->
        <div class="input-group">

            <label>
                Password
            </label>

            <input type="password"
                   id="password"
                   placeholder="Masukkan password">

        </div>

        <!-- BUTTON -->
        <button class="btn"
                onclick="login()">

            Login Dashboard

        </button>

        <!-- ERROR -->
        <div class="error"
             id="errorMsg">

        </div>

        <!-- BACK -->
        <div class="back">

            <a href="/">
                ← Kembali ke Home
            </a>

        </div>

    </div>

</div>

<div id="notifPopup" class="notif-popup">
    <span id="notifText"></span>
</div>

<!-- FIREBASE -->
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>

<script>

const firebaseConfig = {

    apiKey: "AIzaSyA7p_GiDW-iG_cumBfbFNrqsfdE_tNevCg",

    authDomain:
    "tempatin-114d7.firebaseapp.com",

    databaseURL:
    "https://tempatin-114d7-default-rtdb.firebaseio.com",

    projectId:
    "tempatin-114d7",

    storageBucket:
    "tempatin-114d7.firebasestorage.app",

    messagingSenderId:
    "272968364979",

    appId:
    "1:272968364979:web:83ab633dc5c960c01e11c6",

    measurementId:
    "G-P911FLV3HP"

};

firebase.initializeApp(firebaseConfig);

function showNotif(message, type='success'){

    const notif =
        document.getElementById('notifPopup');

    const text =
        document.getElementById('notifText');

    text.innerHTML = message;

    notif.className = 'notif-popup';

    if(type === 'success'){
        notif.classList.add('notif-success');
    }else{
        notif.classList.add('notif-error');
    }

    notif.classList.add('show');

    setTimeout(() => {
        notif.classList.remove('show');
    },3000);
}

// LOGIN
function login(){

    const email =
        document.getElementById("email").value.trim();

    const password =
        document.getElementById("password").value.trim();

    if(email === '' || password === ''){

        showNotif(
            '❌ Email dan password wajib diisi',
            'error'
        );

        return;
    }

    firebase.auth()
    .signInWithEmailAndPassword(
        email,
        password
    )

    .then(() => {

        showNotif(
            '✅ Login berhasil',
            'success'
        );

        setTimeout(() => {

            window.location.href =
            "/dashboard";

        },1000);

    })

    .catch((error) => {

        console.log(error);

        let pesan =
            '❌ Email atau password salah';

        if(error.code === 'auth/user-not-found'){
            pesan =
            '❌ Email tidak terdaftar';
        }

        if(error.code === 'auth/wrong-password'){
            pesan =
            '❌ Password salah';
        }

        if(error.code === 'auth/invalid-email'){
            pesan =
            '❌ Format email tidak valid';
        }

        showNotif(
            pesan,
            'error'
        );

    });

}

</script>

</body>
</html>