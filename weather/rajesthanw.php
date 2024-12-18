<?php include "text.php" ?>
<html>

<head>
    <title>Rajasthan weather</title>
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
            </p>CURRENT DATA OF WEATHER
        </h1>
    </center>
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/27d0274d22/rajasthan/" data-label_1="RAJASTHAN"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">RAJASTHAN WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/27d0274d22/rajasthan/" data-label_1="RAJASTHAN"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">RAJASTHAN WEATHER</a>
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
            Rajasthan, a state in northern India, is known for its arid and desert
            climate. The type of climate experienced by Rajasthan is primarily
            classified as a "hot desert climate" or "arid climate." Here are some key
            characteristics of Rajasthan's climate:
        </p>
        <p>
        <h3>Hot Summers: </h3><br>Rajasthan experiences
        extremely hot summers, with temperatures often exceeding 40°C (104°F) or
        even higher in some regions. The summer season typically lasts from April
        to June. Low Rainfall: Rajasthan is one of the driest regions in India,
        with low annual rainfall. The state's arid climate results in a scarcity
        of water resources, and droughts are not uncommon.
        </p>
        <p>
        <h3>Cold Winters: </h3><br>The
        winters in Rajasthan are generally cold, especially in the northern and
        western parts of the state. Nighttime temperatures can drop significantly
        during the winter months, and frost is not uncommon in some areas.
        </p>
        <p>
        <h3>Variation in Temperature:</h3><br> Rajasthan experiences a wide variation in
        temperature between day and night, especially in the desert regions.
        Daytime temperatures can be scorching, while nights can be considerably
        cooler.
        </p>
        <p>
        <h3>Monsoon Season: </h3><br>The southwestern part of Rajasthan, including
        cities like Udaipur and Mount Abu, may receive some rainfall during the
        monsoon season (July to September). However, the rainfall is generally
        inadequate to alleviate the overall arid conditions.
        </p>
        <p>
        <h3>Sand Dunes:</h3><br> Rajasthan
        is famous for its vast stretches of sand dunes, particularly in the Thar
        Desert region. These sand dunes are characteristic of the desert landscape
        and climate.
        </p>
        <p>
        <h3>Extreme Climate:</h3><br> Rajasthan's climate is characterized by
        extreme temperatures and can be challenging for agriculture and human
        habitation. Water conservation and management are critical in this region
        due to the arid conditions.
        </p> Despite its harsh climate, Rajasthan is known
        for its rich cultural heritage, historical significance, and vibrant
        traditions. The climate has played a significant role in shaping the
        lifestyle, architecture, and economy of the state.
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
            location.replace("rajesthan.php")
        }
    </script>
</body>

</html>