<?php include "text.php" ?>
<html>

<head>
    <title>Manipur weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/24d6693d91/manipur/" data-label_1="MANIPUR"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">MANIPUR WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/24d6693d91/manipur/" data-label_1="MANIPUR"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">MANIPUR WEATHER</a>
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


        <p>Manipur, a state in northeastern India, experiences a humid subtropical climate, also known as a
            monsoon-influenced climate. Here are some key characteristics of Manipur's climate:</p>

        <p>
        <h3>Seasonal Variation: </h3><br>Manipur's climate exhibits distinct seasons, including summer, monsoon, autumn,
        and winter.</p>

        <p>
        <h3>Summer (March to June): </h3><br>Summers in Manipur are generally warm and may be accompanied by occasional
        rainfall. Temperatures can range from moderately warm to hot during this season.</p>

        <p>
        <h3>Monsoon (June to September):</h3><br> The monsoon season brings heavy rainfall to Manipur. The southwest
        monsoon, which originates from the Bay of Bengal, brings significant precipitation to the region. The state's
        landscape becomes lush and green during this period.</p>

        <p>
        <h3>Autumn (October to November):</h3><br> After the monsoon season, Manipur experiences a relatively drier and
        more pleasant period. The weather is usually mild, and the skies are often clear. This is considered one of the
        best times to visit the state.</p>
        <p>

        <h3>Winter (December to February):</h3><br> Winters in Manipur are characterized by cool to cold temperatures.
        While snowfall is rare, temperatures can drop significantly, especially at higher elevations. It's advisable to
        carry warm clothing if visiting during this season.
        </p>

        <p>
        <h3>Humidity:</h3><br> Manipur's climate tends to be humid, especially during the monsoon season. Humidity
        levels can be high, contributing to the lush vegetation.</p>

        <p>
        <h3>Scenic Beauty:</h3><br> The diverse climate and terrain in Manipur contribute to its scenic beauty. The
        state is known for its picturesque landscapes, including hills, valleys, and lakes.</p>

        <p>
            It's important to note that Manipur's climate can vary within the state due to differences in elevation and
            topography. The capital city, Imphal, is situated in a valley and has a climate that may differ from the
            surrounding hill areas.

            Overall, Manipur's climate is influenced by its location in northeastern India and its proximity to the Bay
            of Bengal, which results in distinct seasonal changes and significant rainfall during the monsoon season.
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
            location.replace("manipur.php")
        }
    </script>
</body>

</html>