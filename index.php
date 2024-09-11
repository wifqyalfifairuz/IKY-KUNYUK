<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK NEGERI 6 KOTA TANGERANG SELATAN</title>
    <meta charset="UTF-8">
    <meta name="description" contents="My PHP Website">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">SMK Negeri 6 Kota Tangerang Selatan</h1>
        <h3 class="desc">CERDAS UNGGUL BERKARAKTER</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include 'home.php';
                    break;
                case 'about':
                    include 'about.php';
                    break;
                case 'contact':
                    include 'contact.php';
                    break;
            }
        }
        ?>
    </div>
</body>
</html>