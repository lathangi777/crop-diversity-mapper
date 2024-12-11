<!--HOME PAGE-->
<?php include "text.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,
        initial-scale=1.0" />
    <title>CropAtlas</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#" id="navbar__logo">CROPATLAS</a>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="contact.php" class="button">Contact</a>
                </li>
                <li class="navbar__item">
                    <a href="indiamap.php" class="button">Map</a>
                </li>


                <li id="google_translate_element" style="float: center">language</li>
            </ul>
        </div>
    </nav>
    <div class="img">
        <center>
            <div style="
            font-weight: 20%;
            font-size: 50px;
            margin-top: 10%;
            background-color: #69ea49;
            text-decoration: none;
            border-radius: 4%;
            color: black;
            background-image: linear-gradient(to top,#e7d915 0%,#33be10 100%);
          ">
                <a href="icons.html" style="text-decoration: none; color: black;">TEST YOUR SOIL</a>
            </div>
        </center>
    </div>
    <script src="app.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>
</body>

</html>