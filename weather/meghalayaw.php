<?php include "text.php" ?>
<html>

<head>
    <title>Meghalaya weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/25d4791d37/meghalaya/" data-label_1="MEGHALAYA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">MEGHALAYA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/25d4791d37/meghalaya/" data-label_1="MEGHALAYA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">MEGHALAYA WEATHER</a>
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
            Meghalaya, a state in northeastern India, experiences a subtropical
            climate, which is characterized by distinct seasons. Here's a brief
            overview of the climate in Meghalaya:
        </p>

        <p>
        <h3>Summer (March to June): </h3><br>The summer season in Meghalaya is relatively
        warm and can be quite humid. Temperatures during this period typically
        range from 15°C to 25°C (59°F to 77°F) in the higher elevations, while
        the lower areas can experience higher temperatures.
        </p>

        <p>
        <h3>Monsoon (June to September):</h3><br> Meghalaya receives heavy rainfall during
        the monsoon season, and it is known as one of the wettest places on
        Earth. The southwest monsoon brings intense rainfall to the state,
        creating lush green landscapes and numerous waterfalls. The annual
        rainfall can exceed 2,000 cm (800 inches) in some areas, with July and
        August being the wettest months.
        </p>

        <p>
        <h3>Post-Monsoon (October to November):</h3><br> After the monsoon season, the state
        experiences a post-monsoon period with gradually decreasing rainfall.
        This period is relatively cooler and more comfortable.
        </p>

        <p>
        <h3>Winter (December to February):</h3><br> Winter in Meghalaya is characterized by
        cool and dry weather. Temperatures during this season can drop to around
        4°C to 15°C (39°F to 59°F) in the higher altitudes, while the lower
        areas are milder. The clear skies and pleasant temperatures make it a
        popular time for tourists to visit.
        </p>

        <p>
            The heavy monsoon rains in Meghalaya contribute to its lush greenery,
            abundant forests, and the formation of some of the world's longest and
            deepest caves. The state's unique climate and geography contribute to
            its rich biodiversity and make it a popular destination for nature
            enthusiasts and travelers.
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
            location.replace("meghalaya.php")
        }
    </script>
</body>

</html>