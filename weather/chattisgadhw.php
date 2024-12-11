<?php include "text.php" ?>
<html>

<head>
    <title>chattisgarh weather</title>
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/21d2881d87/chhattisgarh/" data-label_1="CHHATTISGARH"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">CHHATTISGARH WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/21d2881d87/chhattisgarh/" data-label_1="CHHATTISGARH"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">CHHATTISGARH WEATHER</a>
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
            Chhattisgarh is a state located in central India. The climate in
            Chhattisgarh is classified as tropical, with distinct wet and dry seasons.
            Here's an overview of the climate in Chhattisgarh:
        </p>
        <p>
        <h3>Summer (March to June):</h3><br>
        During the summer months, Chhattisgarh experiences high temperatures and
        can be quite hot. Temperatures often exceed 40°C (104°F) in many parts of
        the state. It is a dry and arid period with low humidity.
        </p>
        <p>
        <h3>
            Monsoon (June to
            September):
        </h3><br> The monsoon season in Chhattisgarh brings relief from the
        scorching heat. This is when the state receives the majority of its annual
        rainfall. The monsoon rains are important for agriculture in the region.
        </p>
        <p>
        <h3>Post-Monsoon (October to November):</h3><br> After the monsoon season, Chhattisgarh
        experiences a transition period with moderate temperatures and decreasing
        humidity. The weather is generally pleasant during this time.
        </p>Winter
        <p>
        <h3>(December to February):</h3><br> Winters in Chhattisgarh are relatively mild and
        dry. Temperatures can drop, especially during the night, but they rarely
        fall below freezing. Daytime temperatures are usually comfortable, ranging
        from 10°C to 25°C (50°F to 77°F). The climate in Chhattisgarh varies
        slightly across different regions of the state due to its diverse
        topography.
        </p> The southern parts of Chhattisgarh, which are closer to the
        Bastar Plateau, tend to have a more tropical and humid climate compared to
        the northern and western parts of the state. Keep in mind that specific
        weather conditions can vary from year to year, so it's a good idea to
        check local weather forecasts for up-to-date information if you plan to
        visit or live in Chhattisgarh.
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
            location.replace("chattisgadh.php")
        }
    </script>
</body>

</html>