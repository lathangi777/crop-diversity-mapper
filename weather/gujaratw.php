<?php include "text.php" ?>
<html>

<head>
    <title>Bihar weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/22d2671d19/gujarat/" data-label_1="GUJARAT"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">GUJARAT WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/22d2671d19/gujarat/" data-label_1="GUJARAT"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">GUJARAT WEATHER</a>
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
            Gujarat, a state in western India, experiences a tropical wet and dry
            climate, also known as a tropical savanna climate. Here are some key
            characteristics of the climate in Gujarat:
        </p>
        <p>
        <h3>Hot Summers:</h3><br> Summers in Gujarat
        are hot and dry, with temperatures often soaring above 40°C (104°F) in
        many parts of the state. The hottest months are typically April to June.
        </p>
        <p>
        <h3>Monsoon Season: </h3><br>Gujarat experiences a monsoon season from June to
        September. During this period, the state receives a significant amount of
        rainfall, which is essential for agriculture. The southwest monsoon brings
        moisture-laden winds from the Arabian Sea, leading to heavy rains.
        </p>
        <p>
        <h3>
            Mild
            Winters:
        </h3><br> Winters in Gujarat are generally mild and pleasant, with
        temperatures ranging from 12°C to 25°C (54°F to 77°F). The winter months
        are from November to February.
        </p>
        <p>
        <h3>Variation by Region:</h3><br> While the above
        characteristics generally apply to the state as a whole, it's important to
        note that Gujarat is diverse in terms of its geography and climate.
        Coastal areas may experience more moderate temperatures due to the
        influence of the Arabian Sea, while the eastern parts of the state may
        have a more semi-arid climate. <p>
        <h3>Arid Regions:</h3><br> Some parts of Gujarat,
        particularly in the northwest, have an arid or desert climate. These areas
        receive very little rainfall and are characterized by extreme aridity and
        high temperatures.
        </p>
        </p>
        <p>
        <h3>Cyclones:</h3><br> Gujarat is susceptible to tropical cyclones,
        especially along its coastline. These cyclones can bring heavy rainfall,
        strong winds, and flooding to the region during the monsoon season.
        </p>
        Overall, Gujarat's climate is influenced by its proximity to the Arabian
        Sea, the seasonal monsoon winds, and its geographical diversity, resulting
        in a mix of hot, dry, and wet conditions depending on the time of year and
        location within the state.
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
            location.replace("gujarat.php")
        }
    </script>
</body>

</html>