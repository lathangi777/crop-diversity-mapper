<!--ASSAM WEATHER-->
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
        <a class="weatherwidget-io" href="https://forecast7.com/en/26d2092d94/assam/" data-label_1="ASSAM"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">ASSAM WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/26d2092d94/assam/" data-label_1="ASSAM"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">ASSAM WEATHER</a>
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
            Assam, a state in northeastern India, experiences a subtropical climate
            with a significant monsoon season. The climate in Assam can be classified
            as follows:
        </p>
        <p>
        <h3>Tropical Monsoon Climate (Am):</h3><br> The majority of Assam falls
        under the Am climate classification, as per the Köppen climate
        classification system. This climate is characterized by distinct wet and
        dry seasons.
        </p>
        <p>
        <h3>Summer (March to June): </h3><br>During the summer months, Assam
        experiences high temperatures and humidity. Daytime temperatures can often
        exceed 30°C (86°F) or even higher.
        </p>
        <p>
        <h3>Monsoon (June to September):</h3><br> The
        monsoon season is the most significant climatic feature of Assam. Heavy
        rainfall occurs during this period, with the southwest monsoon bringing
        substantial amounts of precipitation. The state receives a substantial
        portion of its annual rainfall during the monsoon, leading to lush green
        landscapes and flooding in some areas.
        </p>
        <p>
        <h3>Post-Monsoon (October to November):</h3><br>
        After the monsoon season, the weather becomes more pleasant. Temperatures
        begin to drop, and humidity levels decrease.
        </p>
        <p>
        <h3>
            Winter (December to
            February):
        </h3><br> The winter season in Assam is relatively mild compared to many
        other parts of India. However, temperatures can drop, especially in the
        early morning and evening. Frost is rare in most parts of the state.
        </p>
        <p>
            It's
            important to note that Assam's climate can vary across different regions
            of the state due to its diverse topography, which includes plains, hills,
            and valleys. The Brahmaputra River and the surrounding areas are
            particularly influenced by the monsoon. Assam's climate is conducive to
            agriculture, and the state is known for its tea plantations, rice
            cultivation, and a variety of other crops. Additionally, the state's
            abundant rainfall supports a rich biodiversity, making it a region of
            ecological significance.
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
            location.replace("assom.php")
        }
    </script>
</body>

</html>