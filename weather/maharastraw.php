<?php include "text.php" ?>
<html>

<head>
    <title>Goa weather</title>
    <style>
        ::-webkit-scrollbar {
            width: 9px;

        }

        ::-webkit-scrollbar-thumb {
            background-color: #5f5f5f;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #b21f1f;
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/19d7575d71/maharashtra/" data-label_1="MAHARASHTRA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">MAHARASHTRA WEATHER</a>
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
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/19d7575d71/maharashtra/" data-label_1="MAHARASHTRA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">MAHARASHTRA WEATHER</a>
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
            Maharashtra, a state in western India, experiences a diverse climate due
            to its vast geographical area and varying topography. The climate of
            Maharashtra can be broadly categorized into three main seasons:
        </p>

        <p>
        <h3>Summer (March to June):</h3><br> During the summer months, Maharashtra
        experiences hot and dry weather. Temperatures can soar, especially in
        regions like Vidarbha and Marathwada. Daytime temperatures often exceed
        40°C (104°F) in many parts of the state. The coastal areas, including
        Mumbai, tend to be somewhat milder due to the influence of the Arabian
        Sea.
        </p>

        <p>
        <h3>Monsoon (June to September):</h3><br> The monsoon season brings heavy rainfall to
        most parts of Maharashtra. The Western Ghats on the western side of the
        state receive abundant rainfall, making them lush and green. The eastern
        regions, such as Vidarbha, receive comparatively less rainfall. Monsoons
        are a vital source of water for agriculture in the state.
        </p>

        <p>
        <h3>Post-Monsoon and Winter (October to February):</h3><br> After the monsoon season,
        Maharashtra experiences a post-monsoon period characterized by clear
        skies and gradually decreasing temperatures. Winters in Maharashtra are
        generally mild and dry, with cooler temperatures, particularly in the
        hilly regions. Daytime temperatures in the winter months typically range
        from 12°C to 30°C (54°F to 86°F), depending on the location.
        </p>

        <p>
            It's important to note that within Maharashtra, there can be local
            variations in climate and weather patterns due to the state's vast size
            and diverse landscapes, including the Western Ghats, the Deccan Plateau,
            and the coastal areas along the Arabian Sea. These regional differences
            can result in variations in temperature, rainfall, and humidity. For the
            most accurate and up-to-date information on the climate and weather
            conditions in specific cities or regions within Maharashtra, it's
            recommended to consult a reliable weather forecasting service or a local
            meteorological agency.
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
            location.replace("maharastra.php")
        }
    </script>
    <script>
        function myfunction() {
            location.replace("index.php")
        }
    </script>
    <script>
        function myfunction1() {
            location.replace("maharastra.php")
        }
    </script>
</body>

</html>