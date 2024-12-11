<?php include "text.php" ?>
<html>

<head>
    <title>JHARKHAND weather</title>
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
    </style>
</head>

<body style="background-color: rgb(248, 248, 219)">
    <center>
        <h1 style="color: black">
            <p style="float:left;">
                <button onclick="myfunction()">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                        height="40" style="background-color: white" />
                </button>
                <button onclick="myfunction1()">
                    <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                        alt="W3Schools.com" width="30" height="40" style="background-color: white" />
                </button>
            </p>
            CURRENT DATA OF WEATHER
        </h1>
    </center>
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/23d6185d28/jharkhand/" data-label_1="JHARKHAND"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">JHARKHAND WEATHER</a>
        <script>
            !(function (d, s, id) {
                var js,
                    fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://weatherwidget.io/js/widget.min.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            })(document, "script", "weatherwidget-io-js");
        </script>
        <center>
            <h1 style="color: black">PAST DATA OF WEATHER</h1>
        </center>
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/23d6185d28/jharkhand/" data-label_1="JHARKHAND"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">JHARKHAND WEATHER</a>
    <script>
        !(function (d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "https://weatherwidget.io/js/widget.min.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        })(document, "script", "weatherwidget-io-js");
    </script>

    <i>
        <p style="font-weight: 3px; font-style: italic"></p>
        <p>
            Jharkhand, a state in eastern India, experiences a
            subtropical climate. The climate in Jharkhand can be characterized as
            follows:
        </p>
        <p>
        <h3>Hot Summer: </h3><br>The summer season in Jharkhand, which typically lasts
        from March to June, is hot and dry. During this time, temperatures can
        often rise above 40°C (104°F).
        </p>
        <p>
        <h3>Monsoon Season: </h3><br>Jharkhand receives most of
        its rainfall during the monsoon season, which typically spans from June to
        September. The state experiences heavy rainfall during this period, which
        is essential for agriculture.
        </p>
        <p>
        <h3>Post-Monsoon Season:</h3><br> After the monsoon
        season, from October to November, the state experiences a post-monsoon
        season with somewhat cooler temperatures.
        </p>
        <p>
        <h3>Winter Season: </h3><br>The winter season
        in Jharkhand, from December to February, is relatively cool and dry.
        Temperatures can drop significantly during this time, particularly in the
        northern and hilly regions of the state.
        </p>The climate of Jharkhand can vary
        somewhat from one region to another due to its diverse topography, with
        some areas being more hilly and forested, while others are relatively
        flat. These climatic conditions play a significant role in shaping the
        state's vegetation, agriculture, and overall lifestyle of its residents.
    </i>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: "en" },
                "google_translate_element"
            );
        }
    </script>
    <script>
        function myfunction() {
            location.replace("index.php")
        }
    </script>
    <script>
        function myfunction1() {
            location.replace("jarkhandh.php")
        }
    </script>
</body>

</html>