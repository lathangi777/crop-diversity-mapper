<?php include "text.php" ?>
<html>

<head>
    <title>Himachal weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/31d1077d17/himachal-pradesh/"
            data-label_1="HIMACHAL PRADESH" data-label_2="WEATHER" data-mode="Current" data-theme="dark">HIMACHAL
            PRADESH WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/31d1077d17/himachal-pradesh/"
        data-label_1="HIMACHAL PRADESH" data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">HIMACHAL PRADESH
        WEATHER</a>
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
        <p style="font-weight: 3px;font-style: italic;"></p>
        <p>
            Himachal Pradesh, a northern state in India, experiences a variety of
            climates due to its diverse topography and elevation. The climate in
            Himachal Pradesh can generally be categorized into four major seasons:
        </p>
        <p>
        <h3>Summer (March to June): </h3><br>During this season, most of Himachal Pradesh
        experiences a pleasant and temperate climate. The temperatures are
        relatively mild, making it a popular destination for summer tourism. In
        the lower regions, such as places like Dharamshala and Shimla,
        temperatures range from 15°C to 30°C (59°F to 86°F). The higher regions
        may have even cooler temperatures.
        </p>
        <p>
        <h3>Monsoon (July to September): </h3><br>Himachal Pradesh receives monsoon rains
        during these months, which help nourish its lush green landscapes. The
        southern and eastern parts of the state receive the heaviest rainfall. The
        monsoon season can bring heavy rainfall, landslides, and occasional
        flooding in some areas.
        </p>
        <p>
        <h3>Autumn (October to November): </h3><br>After the monsoon season, Himachal Pradesh
        experiences a beautiful autumn with clear skies and pleasant temperatures.
        This is a great time for trekking and outdoor activities as the weather is
        crisp and the landscapes are still green.
        </p>
        <p>
        <h3>Winter (December to February): </h3><br>Winters in Himachal Pradesh are
        characterized by cold temperatures and, in the higher regions, heavy
        snowfall. Popular hill stations like Shimla, Manali, and Kullu experience
        chilly weather, with temperatures often dropping below freezing. Snowfall
        in the higher reaches of the state makes it a popular destination for
        winter sports enthusiasts.
        </p>
        <p>
            The specific climate experienced in Himachal Pradesh can vary
            significantly depending on the region's elevation. The state's diverse
            geography includes high mountain ranges like the Himalayas, valleys, and
            plateaus, each contributing to different microclimates. As a result, you
            can find a range of climates within the state, from alpine to temperate to
            sub-tropical. It's important to check the weather conditions for the
            specific area you plan to visit in Himachal Pradesh, especially during the
            monsoon and winter seasons, as conditions can vary widely from one region
            to another.
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
            location.replace("himachal.php")
        }
    </script>
</body>

</html>