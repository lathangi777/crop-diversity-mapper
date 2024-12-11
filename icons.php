<!--TEST YOUR SOIL-->
<?php include "text.php" ?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        ::-webkit-scrollbar {
            width: 9px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #5f5f5f;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #3e3d3d;
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgb(255, 255, 255);
        }

        body {
            margin: 0;
            padding: 0;
            background: #262626;
        }

        ul {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        ul li {
            list-style: none;
            margin: 0 15px;
        }

        ul li a {
            position: relative;
            display: block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 60px;
            background: #171515;
            border-radius: 50%;
            font-size: 30px;
            color: #666;
            transition: 0.5s;
        }

        ul li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #d35400;
            transition: 0.5s;
            transform: scale(0.9);
            z-index: -1;
        }

        ul li a:hover:before {
            transform: scale(1.2);
            box-shadow: 0 0 15px #d35400;
            filter: blur(3px);
        }

        ul li a:hover {
            color: #ffa502;
            box-shadow: 0 0 15px #d35400;
            text-shadow: 0 0 15px #d35400;
        }

        ul1 li a {
            padding-top: 3%;
            position: relative;
            display: block;
            width: 250px;
            height: 80px;
            text-align: center;
            background: #171515;
            border-radius: 50%;
            font-size: 30px;
            color: #666;
            transition: 0.5s;
        }

        ul1 li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #d35400;
            transition: 0.5s;
            transform: scale(0.9);
            z-index: -1;
        }

        ul1 li a:hover:before {
            transform: scale(1.2);
            box-shadow: 0 0 15px #d35400;
            filter: blur(3px);
        }

        ul2 li a {
            padding-top: 1%;
            position: relative;
            display: block;
            width: 70px;
            height: 30px;
            text-align: center;
            background: #171515;
            border-radius: 50%;
            font-size: 20px;
            color: #666;
            transition: 0.5s;
        }

        ul2 li a:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #d35400;
            transition: 0.5s;
            transform: scale(0.9);
            z-index: -1;
        }

        ul2 li a:hover:before {
            transform: scale(1.2);
            box-shadow: 0 0 15px #d35400;
            filter: blur(3px);
        }
    </style>
</head>

<body>
    <div>

        <ul2>
            <li>
                <a href="index.php" style="
                      text-decoration: none;
                      color: #ffa502;
                      box-shadow: 0 0 15px #d35400;
                      text-shadow: 4 5 25px #d35400;
                    ">HOME</a>
            </li>
        </ul2>
        <ul1>
            <center>
                <p style="margin-top: 5%">
                    <li>
                        <a href="#" style="
                  text-decoration: none;
                  color: #ffa502;
                  box-shadow: 0 0 15px #d35400;
                  text-shadow: 4 5 25px #d35400;
                ">PH SCALE</a>
                    </li>
                </p>
            </center>
        </ul1>

        <div class="container" style="margin-top:20%;">
            <ul>
                <li>
                    <a href="ph1.php" style="text-decoration: none">1</a>
                </li>
                <li>
                    <a href="ph2.php" style="text-decoration: none">2</a>
                </li>
                <li>
                    <a href="ph3.php" style="text-decoration: none">3</a>
                </li>
                <li>
                    <a href="ph4.php" style="text-decoration: none">4</a>
                </li>
                <li>
                    <a href="ph5.php" style="text-decoration: none">5</a>
                </li>
                <li>
                    <a href="ph6.php" style="text-decoration: none">6</a>
                </li>
                <li>
                    <a href="ph7.php" style="text-decoration: none">7</a>
                </li>
                <li>
                    <a href="ph8.php" style="text-decoration: none">8</a>
                </li>
                <li>
                    <a href="ph9.php" style="text-decoration: none">9</a>
                </li>
                <li>
                    <a href="ph10.php" style="text-decoration: none">10</a>
                </li>
                <li>
                    <a href="ph11.php" style="text-decoration: none">11</a>
                </li>
                <li>
                    <a href="ph12.php" style="text-decoration: none">12</a>
                </li>
                <li>
                    <a href="ph13.php" style="text-decoration: none">13</a>
                </li>
                <li>
                    <a href="ph14.php" style="text-decoration: none">14</a>
                </li>
            </ul>
        </div>
    </div>
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