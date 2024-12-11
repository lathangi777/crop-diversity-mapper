<?php include "text.php" ?>
<html>

<head>
    <title>Telangana weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/18d1179d02/telangana/" data-label_1="TELANGANA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">TELANGANA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/18d1179d02/telangana/" data-label_1="TELANGANA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">TELANGANA WEATHER</a>
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
            Telangana, a state located in southern India, experiences a tropical wet
            and dry climate. This type of climate is also known as a tropical
            savanna climate. Here are some characteristics of the climate in
            Telangana:
        </p>
        <p>
        <h3>Hot Summers:</h3><br> Summers in Telangana are hot and dry. Temperatures can
        often soar above 40°C (104°F) during the peak of the summer season,
        which usually lasts from March to June.
        </p>

        <p>
        <h3>Monsoon Rains:</h3><br> Telangana receives most of its rainfall during the
        monsoon season, which typically occurs from June to September. The
        southwestern monsoon winds bring moisture to the region, leading to
        moderate to heavy rainfall.
        </p>

        <p>
        <h3>Winters: </h3><br>Winters are relatively mild and dry, with temperatures ranging
        from around 10°C to 22°C (50°F to 72°F). The winter season generally
        lasts from November to February.
        </p>

        <p>
        <h3>Variation in Rainfall:</h3><br> The distribution of rainfall is not uniform
        across Telangana. Some areas in the state receive more rainfall than
        others, leading to variations in vegetation and agriculture.
        </p>

        <p>
        <h3>Droughts:</h3><br>the variability in rainfall, Telangana can sometimes
        experience drought conditions, particularly during dry spells when
        monsoon rains are inadequate.
        </p>

        <p>
        <h3>Agriculture: </h3><br>Despite the challenges posed by the climate, Telangana has
        a significant agricultural sector. The monsoon rains are crucial for the
        cultivation of crops such as rice, cotton, and maize.
        </p>

        <p>
            It's important to note that while Telangana as a whole experiences a
            tropical wet and dry climate, there can be microclimatic variations
            within the state, especially in terms of temperature and rainfall, based
            on local geographical factors.
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
            location.replace("telangana.php")
        }
    </script>
</body>

</html>