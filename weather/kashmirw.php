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
        <a class="weatherwidget-io" href="https://forecast7.com/en/31d6376d40/kashmir/" data-label_1="KASHMIR"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">KASHMIR WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/31d6376d40/kashmir/" data-label_1="KASHMIR"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">KASHMIR WEATHER</a>
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
        <p style="font-weight: 3px;font-style: italic;">
            Kashmir, a region located in the northern part of the Indian subcontinent,
            experiences a temperate climate with four distinct seasons: spring,
            summer, autumn, and winter. The climate in Kashmir can be categorized as
            follows:
        <p>
        <h3>Spring (March to May):</h3><br> Spring in Kashmir is characterized by
        pleasant and gradually warming weather. The snow begins to melt, and the
        valley becomes lush and green with blooming flowers, particularly in April
        and May.</p>
        <p>
        <h3>Summer (June to August): </h3><br>Summer in Kashmir is mild and
        comfortable, making it a popular tourist season. Daytime temperatures
        range from 20°C to 30°C (68°F to 86°F), and the weather is generally
        sunny. The region's beautiful lakes and gardens are in full bloom during
        this time.</p>
        <p>
        <h3>Autumn (September to November):</h3><br> Autumn in Kashmir is marked by
        cool and crisp weather. The foliage changes color, with the landscape
        turning shades of red, orange, and gold. September and October are
        especially picturesque in the region. </p>
        <p>
        <h3>Winter (December to February):</h3><br>
        Winter in Kashmir is cold and snowy. Temperatures can drop significantly,
        and heavy snowfall occurs, particularly in December and January. The
        region is known for its stunning snow-covered landscapes, making it a
        popular destination for winter sports enthusiasts.</p>
        <p> Kashmir's climate is
            influenced by its geography, being surrounded by the Himalayan mountains,
            which protect it from the extreme climatic conditions of the surrounding
            regions. However, it's important to note that the political situation in
            the region can impact travel and tourism, so it's advisable to check for
            any travel advisories or updates before planning a trip to Kashmir.</p>
        </p>
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
            location.replace("kashmir.php")
        }
    </script>
</body>

</html>