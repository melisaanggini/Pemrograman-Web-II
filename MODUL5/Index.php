<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: row;
            width: 80%;
            max-width: 1000px;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .img {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img img {
            width: 100%;
            height: auto;
        }

        .login-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-container h2 {
            margin: 0 0 20px;
            font-weight: 600;
            color: #333;
        }

        .goals-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .goals-container a {
            display: block;
            text-decoration: none;
            padding: 10px;
            text-align: center;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .goals-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="intro.jpeg" alt="">
        </div>
        <div class="login-container">
            <form action="" method="POST">
                <h2>Selamat Datang di Portal Perpustakaan</h2>
                <div class="goals-container">
                    <a href="Buku.php">Buku</a>
                    <a href="Member.php">Member</a>
                    <a href="Peminjaman.php">Peminjaman</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>