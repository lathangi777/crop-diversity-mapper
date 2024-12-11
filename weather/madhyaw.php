<?php include "text.php" ?>
<html>

<head>
    <title>Madhyapradesh weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/22d9778d66/madhya-pradesh/"
            data-label_1="MADHYA PRADESH" data-label_2="WEATHER" data-mode="Current" data-theme="dark">MADHYA PRADESH
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
        <center>
            <h1 style="color: black">

                CURRENT DATA OF WEATHER
            </h1>
        </center>
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/22d9778d66/madhya-pradesh/" data-label_1="MADHYA PRADESH"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">MADHYA PRADESH WEATHER</a>
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
            Madhya Pradesh, a state in central India, experiences a predominantly
            subtropical climate. However, it is a large state with diverse
            topography, so there can be some variations in climate across different
            regions. Here are the main characteristics of Madhya Pradesh's climate:
        </p>

        <p>
        <h3>Subtropical Climate: </h3><br>Most of Madhya Pradesh falls under the influence of
        a subtropical climate. This means that it generally has hot summers and
        cool to cold winters.
        </p>

        <p>
        <h3>Summer (March to June): </h3><br>Summers in Madhya Pradesh are typically hot and
        dry. Daytime temperatures can often exceed 40°C (104°F) in many parts of
        the state. The heat can be intense, especially in May and June.
        </p>

        <p>
        <h3>Monsoon (July to September): </h3><br>Madhya Pradesh experiences a monsoon season
        from July to September. During this period, the state receives a
        significant amount of rainfall. The southwestern monsoon winds bring
        moisture from the Arabian Sea, leading to heavy rains. The eastern and
        southern parts of the state tend to receive more rainfall than the
        western and northern regions.
        </p>

        <p>
        <h3>Post-Monsoon (October to November): </h3><br>After the monsoon season, the state
        enters a transitional period. The weather becomes more comfortable with
        decreasing humidity and cooler temperatures. This is a pleasant time to
        visit as it marks the beginning of the festive season.
        </p>

        <p>
        <h3>Winter (December to February): </h3><br>Winters in Madhya Pradesh are generally
        cool to cold. Nighttime temperatures can drop considerably, especially
        in the northern and central parts of the state. Daytime temperatures are
        milder compared to the summer months.
        </p>

        <p>
        <h3>Regional Variations:</h3><br> Madhya Pradesh's climate can vary due to its
        diverse geography. The northern parts, which include the Vindhya and
        Satpura ranges, can be cooler in the winter, while the southern and
        eastern regions may experience more rainfall.
        </p>
        <p>
            It's important to note that Madhya Pradesh is a large state, and climate
            conditions can vary from one part to another. Local factors, such as
            elevation and proximity to water bodies, can also influence climate
            variations within the state. For precise and up-to-date climate
            information for specific cities or regions within Madhya Pradesh, it's
            advisable to refer to local weather reports or climate data sources.
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
            location.replace("madhya.php")
        }
    </script>
</body>

</html>