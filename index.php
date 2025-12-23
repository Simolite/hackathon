<?php 
    $devs = [
        ["Arrach Mohammed ","https://arrachmohammed.dev"],
        ["Aissa Zahoum","/aissaZahoum/index.html"],
        ["Markhi Mohammed","/mohamedMarkhi/index.html"],
        ["Junior Lopes","/JuniorLopes/index.html"],
        ["Davyes Canoranco","/DavyesCanoranco/index.html"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrach-Markhi-Zahoum-junior</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .portfolio {
            grid-template-columns: repeat(<?php echo ceil(count($devs)/2); ?>, 1fr);
        }
    </style>
</head>
<body>
    <header>
        <h1>Hackathon</h1>
    </header>
    <div id="particles-js"></div>
    <div class="portfolio">
        <?php
            foreach ($devs as $dev) {
                echo "<a href='".$dev[1]."'>
                        <div class='dev'>
                            <h2>".$dev[0]."</h2>
                        </div>
                    </a>";
            };
        ?>
    </div>
    <script src="particles.js"></script>
    <script src="script.js"></script>
</body>
</html>