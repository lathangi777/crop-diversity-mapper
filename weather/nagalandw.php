<?php include "text.php" ?>
<html>

<head>
    <title>Nagaland weather</title>
    <style>
        ::-webkit-scrollbar {
            width: 9px;

        }

        ::-webkit-scrollbar-thumb {
            background-color: #d04379;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #490249;
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/26d1694d56/nagaland/" data-label_1="NAGALAND"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">NAGALAND WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/26d1694d56/nagaland/" data-label_1="NAGALAND"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">NAGALAND WEATHER</a>
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
            Nagaland, a state in northeastern India, experiences a subtropical
            highland climate in its higher elevations and a humid subtropical
            climate in its lower elevations. The climate can vary depending on the
            altitude and geographical location within the state. Here are some key
            characteristics of the climate in Nagaland:
        </p>

        <p>
        <h3>Subtropical Highland Climate:</h3><br> In the higher elevations of Nagaland,
        particularly in areas such as the Naga Hills, the climate is
        characterized by cooler temperatures. Summers are relatively mild, and
        winters can be quite chilly, with temperatures dropping to near freezing
        or even below freezing at times. Snowfall is not uncommon in the highest
        elevations during the winter months.
        </p>

        <p>
        <h3>Humid Subtropical Climate: </h3><br>In the lower elevations and valleys of
        Nagaland, such as the capital city of Kohima, the climate is humid
        subtropical. This means that summers can be warm to moderately hot, and
        winters are relatively cool. Rainfall is moderate to heavy, with a
        significant monsoon season during the summer months.
        </p>

        <p>
        <h3>Monsoon Season:</h3><br> Like many regions in India, Nagaland experiences a
        distinct monsoon season. The southwest monsoon, which typically occurs
        from June to September, brings heavy rainfall to the state. This
        rainfall is crucial for agriculture and supports lush vegetation.
        </p>

        <p>
        <h3>Variable Rainfall:</h3><br> The amount of rainfall can vary across different
        parts of Nagaland. Some areas may receive more rainfall than others,
        leading to variations in vegetation and agricultural practices.
        </p>

        <p>
        <h3>Diverse Microclimates:</h3><br> Nagaland's diverse topography, with its hills,
        valleys, and plains, contributes to the existence of microclimates
        within the state. This diversity in climate and topography also impacts
        the types of crops that can be grown in different regions.
        </p>

        <p>
            It's important to note that while these are general characteristics of
            Nagaland's climate, there can be local variations and yearly
            fluctuations in weather patterns. For more specific and up-to-date
            climate information for Nagaland, it's advisable to refer to local
            meteorological agencies or climate data sources.
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
            location.replace("nagaland.php")
        }
    </script>
</body>

</html>