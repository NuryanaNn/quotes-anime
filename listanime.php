<?php
    include 'function.php';
    $curl = curl("https://katanime.vercel.app/api/getlistanime");

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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body >
    <header>
        <nav>
            <div class="logo"><h1><a href="index.php">ANIME QUOTES</a></h1></div>

            <ul class="sci">
                <a href="listanime.php" class="category">List anime</a>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </nav>
    </header>

    <section class="listanime">
        <div class="animeListTitle">
            <h3>Find Your Anime Quotes</h3>
        </div>

        <div class="contentAnimeList">
        <?php $i = 1; ?>
    <?php foreach($row as $listed){?>
            <div class="card">
                <div class="images">
                    <img src="logo.png" alt="">
                </div>
                <div class="teksAnime">
                    <h3><?=$listed["anime"]?></h3>
                </div>
                <a href="quotes.php?anime=<?=$listed["anime"]?>&page=1" class="view"><i class="fas fa-comment"></i> See Quotes <span><?=$listed["totalKata"]?></span></a>
            </div>
            <?php $i++;?>
        <?php } ?>
        </div>
    </section>
</body>
</html>