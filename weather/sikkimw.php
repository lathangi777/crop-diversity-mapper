<?php include "text.php" ?>
<html>

<head>
    <title>Goa weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/27d5388d51/sikkim/" data-label_1="SIKKIM"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">SIKKIM WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/27d5388d51/sikkim/" data-label_1="SIKKIM"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">SIKKIM WEATHER</a>
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
        <p>Sikkim, a state in northeastern India, experiences a diverse range of climates due to its varying altitudes
            and topography. The climate in Sikkim can be broadly categorized into several zones based on altitude:</p>

        <p>
        <h3>Tropical Climate: </h3><br>In the southern part of Sikkim, at lower altitudes (approximately up to 1,200
        meters above sea level), there is a subtropical or tropical climate. Here, the temperatures are relatively
        higher, and the region receives more rainfall. This area is characterized by hot and humid summers and milder
        winters.</p>

        <p>
        <h3>Temperate Climate:</h3><br> In the middle altitudes (between 1,200 meters and 2,400 meters), Sikkim
        experiences a temperate climate. This region enjoys a moderate climate with warm summers and cool winters. It's
        also known for its lush greenery and is suitable for agriculture.</p>

        <p>
        <h3>Subalpine and Alpine Climate:</h3><br> As you move to higher altitudes (above 2,400 meters), Sikkim enters
        the subalpine and alpine zones. In these areas, the climate becomes progressively colder. Winters are cold and
        snowy, and the region experiences sub-zero temperatures. The higher reaches of Sikkim have an alpine climate
        with snow cover for a significant part of the year.</p>

        <p>
        <h3>Rainfall: </h3><br>Sikkim receives a substantial amount of rainfall, particularly during the monsoon season
        (June to September). The heavy rainfall contributes to the region's lush forests and is vital for its ecosystem.
        </p>

        <p>
        <h3>Microclimates:</h3><br> Sikkim's diverse topography, including the presence of mountains and valleys, can
        create microclimates within the state. These microclimates may exhibit variations in temperature, precipitation,
        and weather patterns.</p>

        It's important to note that Sikkim's climate can vary significantly from one part of the state to another due to
        its geography and elevation. The region's climate diversity is one of its unique features, making it a popular
        destination for tourists and a suitable location for a variety of flora and fauna.
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
            location.replace("sikkim.php")
        }
    </script>
</body>

</html>