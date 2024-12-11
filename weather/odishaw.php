<?php include "text.php" ?>
<html>

<head>
    <title>Odisha weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/20d9585d10/odisha/" data-label_1="ODISHA"
            data-label_2="WEATHER" data-mode="Current" data-theme="original">ODISHA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/20d9585d10/odisha/" data-label_1="ODISHA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="original">ODISHA WEATHER</a>
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
            Odisha, a state in India, experiences a tropical climate. The climate of
            Odisha is characterized by high temperatures, high humidity, and
            distinct wet and dry seasons. Here are some key features of Odisha's
            climate:
        </p>

        <p>
        <h3>Summer (March to June):</h3><br> During the summer months, Odisha experiences hot
        and humid weather. Temperatures can soar, especially in the interior
        regions, with daytime temperatures often exceeding 40°C (104°F).
        </p>

        <p>
        <h3>Monsoon (June to September):</h3><br> The southwest monsoon brings heavy rainfall
        to Odisha, especially along the coastal areas. This is the wettest
        season in the state, with the majority of the annual rainfall occurring
        during this period. The monsoon season is crucial for agriculture in
        Odisha.
        </p>

        <p>
        <h3>Post-Monsoon (October to December): </h3><br>After the monsoon season, the
        weather begins to cool down, and humidity levels decrease. This period
        is generally pleasant, with lower temperatures and less rainfall.
        </p>

        <p>
        <h3>Winter (December to February):</h3><br> Winters in Odisha are characterized by
        mild to cool temperatures, especially in the evenings and early
        mornings. Coastal areas tend to have milder winters compared to the
        interior regions. Winter is the best time for tourism in Odisha due to
        the comfortable weather conditions.
        </p>

        <p>
        <h3>Cyclones: </h3><br>Odisha is prone to cyclones, especially during the monsoon
        season and post-monsoon period. Cyclones can bring heavy rainfall,
        strong winds, and storm surges to the coastal areas, leading to
        significant weather-related challenges.
        </p>

        It's important to note that the climate can vary within the state, with
        coastal areas experiencing milder temperatures and higher humidity
        compared to the interior regions. Additionally, specific local variations
        in climate can occur due to factors such as elevation and proximity to
        bodies of water. Please keep in mind that climate conditions can change
        over time due to natural variations and global climate trends, so it's
        advisable to consult updated climate information if you plan to visit or
        have specific climate-related concerns about Odisha
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
            location.replace("odisha.php")
        }
    </script>
</body>

</html>