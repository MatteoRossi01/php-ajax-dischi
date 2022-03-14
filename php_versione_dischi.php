<?php

    include __DIR__. '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="root">

        <!-- Header -->
        <div class="container-header">

            <a class="" href="#">
                <img class="logo" src="img/Spotify_App_Logo.svg.png" alt="Logo Spotify">
            </a>

        </div>
        <!-- Header -->

        <!-- Main -->
        <main>

            <div class="container-main">

                <?php

                    foreach($database as $discs){
                
                        echo "<div class='vinyl-card'>";
                            
                            echo "<img src='" . $discs['poster'] . "' alt=''>";
                            
                            echo "<div class='card-text text-center'>";

                                echo "<span class='title-vinyl text-uppercase'>" . $discs['title'] . "</span>";
                                echo "<div class='text-gray'>";
                                    echo "<span>" . $discs['author'] . "</span>";
                                    echo "<span>" . $discs['year'] . "</span>";
                                echo "</div>";

                            echo "</div>"; 
                            
                        echo "</div>";

                    }

                ?>

            </div>

        </main>
        <!-- Main -->

    </div>
</body>
</html>