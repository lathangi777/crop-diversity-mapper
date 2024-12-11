<?php include "text.php" ?>
<html>

<head>
    <title>Tamilnadu weather</title>
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
        <p style="float:left;">
            <button onclick="myfunction()">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                    height="40" style="background-color: white" />
            </button>
            <button onclick="myfunction1()">
                <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg" alt="W3Schools.com"
                    width="30" height="40" style="background-color: white" />
            </button>
        </p>
        <h1 style="color: black">CURRENT DATA OF WEATHER</h1>
    </center>
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/11d1378d66/tamil-nadu/" data-label_1="TAMIL NADU"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">TAMIL NADU WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/11d1378d66/tamil-nadu/" data-label_1="TAMIL NADU"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">TAMIL NADU WEATHER</a>
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
            Tamil Nadu, a state located in the southern part of India, experiences a
            tropical climate. The climate of Tamil Nadu can be broadly categorized
            into two main seasons:
        </p>

        <p>
        <h3>Summer (March to June): </h3><br>During the summer months, Tamil Nadu experiences
        hot and dry weather. Temperatures can often soar above 40°C (104°F) in
        many parts of the state. This period can be quite uncomfortable due to
        the high temperatures and low humidity.
        </p>

        <p>
        <h3>Monsoon (June to September): </h3><br>The southwest monsoon brings rainfall to
        Tamil Nadu, primarily between June and September. The state receives the
        majority of its annual rainfall during this season, especially in
        regions along the western and southwestern coasts, such as the Western
        Ghats. The eastern parts of Tamil Nadu, including Chennai, receive less
        rainfall during the southwest monsoon.
        </p>

        <p>
        <h3>Post-Monsoon/Winter (October to February):</h3><br> After the monsoon season,
        Tamil Nadu experiences a post-monsoon season, which gradually
        transitions into winter. Winter in Tamil Nadu is characterized by milder
        and more pleasant temperatures compared to the scorching summer.
        However, it can still be relatively warm compared to some other regions
        during their winter months.
        </p>

        <p>
        <h3>Northeast Monsoon (October to December): </h3><br>Tamil Nadu experiences a
        significant rainfall season during the northeast monsoon, primarily in
        the form of heavy rainfall and thunderstorms. This monsoon season is
        crucial for replenishing water reservoirs in the state and is vital for
        agriculture.
        </p>
        <p>
            It's important to note that Tamil Nadu's climate can vary within the
            state due to its diverse topography, including coastal regions, plains,
            and the Western Ghats. Coastal areas tend to be more humid, while inland
            regions can experience drier conditions.
        </p>

        <p>
            Overall, Tamil Nadu's climate is influenced by its location in southern
            India and the seasonal monsoons, making it a tropical climate with
            distinct wet and dry periods throughout the year.
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
            location.replace("tamil.php")
        }
    </script>
</body>

</html>