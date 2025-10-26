<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old_email = $_SESSION['old_email'] ?? '';
$old_username = $_SESSION['old_username'] ?? '';

// Hapus session setelah digunakan
unset($_SESSION['errors']);
unset($_SESSION['old_email']);
unset($_SESSION['old_username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CerdasMax LMS</title>
    <style>
        /* Variabel Warna dari desain yang diberikan */
        :root {
            --primary-orange: #d68617ff;
            --gradient-start: #ffaa00; 
            --gradient-end: #ff7f00;   
            --light-bg: #f5f5f5;
            --white: #ffffff;
            --dark-text: #1d2144;
            --light-purple: #f1ecff; 
            --google-blue: #4285f4;
            --google-red: #ea4335;
            --google-green: #34a853;
            --google-yellow: #fbbc05;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* Reset dan Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--light-bg); 
            overflow: hidden;

        }

        /* Kontainer Utama */
        .register-container {
            display: flex;
            width: 100%;
            max-width: 1600px; /* Ukuran yang cukup besar sesuai desain */
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 730px; 
        }

        /* Kolom Kiri - Form */
        .register-form-area {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo img {
            height: 130px; /* Sesuaikan tinggi logo */
            position: absolute;
            top: 10px;
            left: 60px;
        }

        .form-content {
            width: 100%;
            max-width: 380px; /* Batasi lebar form */
            text-align: left;
        }

        h2.register-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 50px;
            text-align: center;
        }

        .form-question {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 25px;
        }
        
        /* Input Field Styling */
        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 15px 15px 15px 50px; /* Ruang untuk ikon */
            border: none;
            border-radius: 10px;
            background-color: var(--light-purple);
            font-size: 16px;
            color: var(--dark-text);
            outline: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .input-field:focus {
            background-color: #e5e0fb;
            box-shadow: 0 0 0 2px var(--primary-orange);
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 18px;
            transform: translateY(-50%);
            color: var(--primary-orange);
            font-size: 18px;
        }

        /* Tombol Utama (Login/Register) */
       /* Tombol Utama (Login/Register) */
.btn-primary {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    background-image: linear-gradient(to right, var(--gradient-start), var(--gradient-end)); 
    color: var(--white);
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: background-size 0.3s, transform 0.2s, box-shadow 0.3s; /* Tambahkan box-shadow untuk efek hover */
    margin-top: 10px;
    background-size: 200% auto;
    box-shadow: 0 4px 10px rgba(255, 127, 0, 0.4);
}

.btn-primary:hover {
    background-position: right center; 
    transform: translateY(-2px); /* Lebih tinggi sedikit saat hover */
    box-shadow: 0 6px 15px rgba(255, 127, 0, 0.6); /* Shadow lebih kuat */
}

        .btn-primary:hover {
            background-color: #e09930;
            transform: translateY(-1px);
        }
        
        /* Separator "Login with Others" */
        .separator {
            text-align: center;
            margin: 30px 0;
            font-size: 14px;
            color: #a0a0a0;
            position: relative;
        }

        .separator::before,
        .separator::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%; /* Panjang garis */
            height: 1px;
            background-color: #e0e0e0;
        }

        .separator::before {
            left: 0;
        }

        .separator::after {
            right: 0;
        }
        
        /* Tombol Google */
        .btn-google {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: box-shadow 0.3s;
            text-decoration: none;
            color: var(--dark-text);
            font-weight: 500;
        }

        .btn-google img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        
        .btn-google:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Kolom Kanan - Visual Promosi */
.register-visual-area {
    flex: 1;
    background-image: url('foto/back-orange.png'); /* Ganti dengan path gambar Anda */
    background-size: cover; /* Agar gambar menutupi seluruh area */
    background-position: center; /* Menjaga gambar tetap terpusat */
    border-radius: 0 20px 20px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 40px;
    position: relative;
}


     .visual-card {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    max-width: 300px;
    margin-top: 0; /* Pastikan tidak ada margin top yang berlebihan */
    
    position: static; /* Biarkan dia mengikuti aliran flexbox */
    top: auto;
    right: auto;
}

/* Update for Visual Text and Flash Icon Positioning */
.visual-card {
    background: rgba(255, 255, 255, 0.2);
    /* backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px); */
    border-radius: 15px;
    padding: 20px;
    text-align: left;
    min-width: 350px;
    position: absolute;
    height: 400px;
    top: 50%; /* Centering the card vertically */
    left: 50%; /* Centering the card horizontally */
    transform: translate(-50%, -50%); /* Exact centering of the card */
}

.visual-text {
    font-size: 28px;
    font-weight: 700;
    color: var(--white);
    line-height: 1.3;
    margin-bottom: 20px; /* Spacing between the text and flash icon */
}

.flash-icon {
    width: 50px;
    height: 50px;
    background-color: var(--white);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    color: var(--primary-orange);
    box-shadow: 0 0 15px var(--white);
    margin-top: 50px; /* Small space between the icon and the text */
    margin-left: -40px;
}

/* Adjusting the image position to be below the text and icon */
/* Kode LAMA yang bermasalah */
.visual-image {
    position: absolute;
    left: 50%; /* Center image horizontally */
    transform: translateX(-25%); /* Center the image */
    width: 80%; /* Resize image to fit better */
    max-width: 400px; /* Maximum width constraint */
}

.visual-image img {
    min-width: 100%;
    height: 400px; /* Tinggi yang memaksa penskalaan */
    object-fit: contain;
    display: block;
    margin: 0 auto; /* Center the image */
}
        /* Responsif (Opsional, tapi disarankan) */
        @media (max-width: 900px) {
            .register-visual-area {
                display: none; /* Sembunyikan kolom visual pada layar kecil */
            }
            .register-form-area {
                flex: none;
                width: 100%;
                padding: 40px 20px;
            }
            .register-container {
                border-radius: 10px;
                min-height: auto;
            }
            .logo img {
                position: static;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <div class="register-form-area">
            
            <a href="#" class="logo">
                <img src="logo/logo.jpg" alt="CerdasMax Logo">
            </a>

            <div class="form-content">
                <h2 class="register-title">REGISTER</h2>

                <p class="form-question">How to I get started lorem ipsum dolor at?</p>
                <?php if (!empty($errors)): ?>
                    <?php foreach ($errors as $error): ?>
                        <div class="error"><?php echo $error; ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <form action="process_register.php" method="POST">
                    
                    <div class="input-group">
                        <span class="input-icon">📧</span> 
                        <input type="email" id="email" name="email" class="input-field" placeholder="Email" value="<?php echo htmlspecialchars($old_email); ?>" required>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">👤</span> 
                        <input type="text" id="username" name="username" class="input-field" placeholder="Username" value="<?php echo htmlspecialchars($old_username); ?>" required>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">🔒</span> 
                        <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">🔒</span> 
                        <input type="password" id="confirm-password" name="confirm-password" class="input-field" placeholder="Confirm Password" required>
                    </div>

                    <button type="submit" class="btn-primary">
                        Register </button>
                </form>

                <div class="separator">Login with Others</div>
                
                <a href="#" class="btn-google">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google">Login with google
                </a>
            </div>
        </div>

        <div class="register-visual-area">
            <div class="visual-card">
                <p class="visual-text">Very good<br>works are<br>waiting for<br>you Login<br>Now!!!</p>
                <div class="flash-icon">⚡</div>
            </div>

            <div class="visual-image">
                <img src="foto/woman-on-tablet.png" alt="Woman using tablet">
            </div>
            
        </div>
    </div>

</body>
</html>
