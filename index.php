<?php
    include 'function.php';
    $curl = curl("https://katanime.vercel.app/api/getrandom");

    // mengubah JSON menjadi array
    $data = json_decode($curl, TRUE);
    
    foreach($data as $row);
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="ace">
    <header>
        <nav>
            <div class="logo"><h1>ANIME QUOTES</h1></div>

            <ul class="sci">
                <a href="listanime.php" class="category">List anime</a>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </nav>
    </header>

    <section class="anime">
        <div class="quotesTitle">
            <h3>Random Anime Quotes</h3>
        </div>

        

        <div class="randomQuotes">
            <?php $i = 1; ?>
            <?php foreach($row as $random){?>
            <div class="card">
                <img src="kutip.png" alt="">
                <div class="randomText">
                    <div class="quotes">
                        <p>"<?=$random["indo"]?>"</p>
                    </div>
                    <div class="animeCharacter">
                        <div class="film">
                            <h3><?=$random["anime"]?></h3>
                        </div>
                        <div class="character">
                            <h3><?=$random["character"]?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;?>
            <?php } ?>
        </div>
    </section>


    <script src="script.js"></script>
    
</body>
</html>