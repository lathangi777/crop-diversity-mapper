<?php include "text.php" ?>
<html>

<head>
    <title>Mizoram weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/23d1692d94/mizoram/" data-label_1="MIZORAM"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">MIZORAM WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/23d1692d94/mizoram/" data-label_1="MIZORAM"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">MIZORAM WEATHER</a>
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
            Mizoram, a state in northeastern India, experiences a subtropical
            highland climate, often characterized by moderate to heavy rainfall
            during the monsoon season and relatively cooler temperatures compared to
            many other parts of India. Here are some key characteristics of
            Mizoram's climate:
        </p>

        <p>
        <h3>Summer (March to May):</h3><br> Summers in Mizoram are generally warm, with
        temperatures ranging from 20°C to 29°C (68°F to 84°F). However, it is
        not excessively hot compared to many other parts of India. Rainfall is
        relatively low during this season.
        </p>

        <p>
        <h3>Monsoon (June to September):</h3><br> The monsoon season is the most significant
        in Mizoram. During this period, the state receives heavy rainfall due to
        the southwest monsoon winds. Rainfall is abundant, and humidity levels
        are high. This is the primary source of water for agriculture in the
        region.
        </p>

        <p>
        <h3>Post-Monsoon (October to November):</h3><br> After the monsoon season, the
        rainfall gradually decreases, and the weather becomes more pleasant.
        Temperatures start to drop, and the landscape becomes lush and green.
        </p>

        <p>
        <h3>Winter (December to February):</h3><br> Winters in Mizoram are relatively cool
        and dry. Temperatures can drop to around 11°C to 21°C (52°F to 70°F),
        especially in the higher elevations. This is the best time for tourism
        and outdoor activities in the state.
        </p>

        <p>
            Overall, Mizoram's climate is influenced by its hilly terrain and its
            location in the northeastern part of India. The state's climate is
            conducive to agriculture, and it is known for its lush green landscapes
            and biodiversity, making it a unique and attractive region in India.
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
            location.replace("mizoram.php")
        }
    </script>
</body>

</html>