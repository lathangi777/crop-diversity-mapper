<?php include "text.php" ?>
<html>

<head>
    <title>Uttarkhand weather</title>
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
<p style="background-color: rgb(248, 248, 219)">
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/30d0779d02/uttarakhand/" data-label_1="UTTARAKHAND"
        data-label_2="WEATHER" data-mode="Current" data-theme="dark">UTTARAKHAND WEATHER</a>
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

            PAST DATA OF WEATHER
        </h1>
    </center>
</div>
<div style="margin-top: 2%"></div>
<a class="weatherwidget-io" href="https://forecast7.com/en/30d0779d02/uttarakhand/" data-label_1="UTTARAKHAND"
    data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">UTTARAKHAND WEATHER</a>
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
    <p style="font-weight: 3px;font-style: italic;"></p>
    <p>
        Uttarakhand, a state in northern India, experiences a diverse range of
        climates due to its varying topography and altitude. The climate in
        Uttarakhand can generally be categorized into the following two major
        regions:
    </p>
    <p>
    <h3>Himalayan Region (Mountain Climate):</h3><br> This region covers the higher
    elevations of Uttarakhand, including places like Mussoorie, Nainital, Auli,
    and the surrounding Himalayan ranges. The climate in this region varies with
    altitude:
    </p>
    <p>
    <h3>Alpine Climate (Higher Altitudes):</h3><br> At very high altitudes, such as
    in the upper Himalayan areas, the climate is alpine and experiences cold
    temperatures throughout the year. Winters are extremely cold with heavy
    snowfall, while summers are cool.
    </p>
    <p>
    <h3>Sub-Alpine Climate (Lower Altitudes):</h3><br> At
    slightly lower altitudes, you'll find a sub-alpine climate with colder
    winters and milder summers. Snowfall is common during winter, making it a
    popular destination for snow sports.
    </p>
    <p>
    <h3>
        Terai and Bhabar Region (Plains
        Climate):
    </h3><br> The southern part of Uttarakhand, which includes areas like
    Haridwar and Udham Singh Nagar, lies in the foothills of the Himalayas and
    has a more typical plain or tropical climate. This region experiences:
    </p>
    <p>
    <h3>Tropical Climate: </h3><br>The Terai and Bhabar regions have a hot and humid tropical
    climate during the summer months, with temperatures often exceeding 30°C
    (86°F) or more. The monsoon season during the summer brings heavy rainfall.
    Mild Winter: Winters in this region are relatively mild compared to the
    mountainous areas, with cooler temperatures but not as cold as in the
    mountains.
    </p> Uttarakhand's climate can vary significantly depending on the
    specific location and elevation within the state. It's known for its scenic
    beauty and attracts tourists throughout the year, offering opportunities for
    both winter and summer activities due to its diverse climatic zones.
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
        location.replace("uttarakhand.php")
    }
</script>
</body>

</html>