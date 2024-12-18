<?php include "text.php" ?>
<html>

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
        <a class="weatherwidget-io" href="https://forecast7.com/en/10d8576d27/kerala/" data-label_1="KERALA"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">KERALA WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/10d8576d27/kerala/" data-label_1="KERALA"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">KERALA WEATHER</a>
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
            Kerala, a state located in the southwestern part of India, experiences a
            tropical wet and dry climate, also known as a tropical monsoon climate.
            This climate type is characterized by distinct wet and dry seasons, with
            heavy rainfall during the monsoon season and drier conditions during the
            rest of the year. Here are some key features of Kerala's climate:
        </p>

        <p>
        <h3>Monsoon Season: </h3><br>Kerala experiences two monsoon seasons: the Southwest
        Monsoon (June to September) and the Northeast Monsoon (October to
        November). The Southwest Monsoon, in particular, brings heavy rainfall
        and is the primary rainy season in Kerala.
        </p>

        <p>
        <h3>High Humidity:</h3><br> Due to its coastal location and the influence of the
        Arabian Sea, Kerala has high humidity levels throughout the year,
        especially during the monsoon seasons.
        </p>

        <p>
        <h3>Moderate Temperature:</h3><br> Kerala generally has a moderate temperature range.
        The coastal areas have milder temperatures compared to the interior
        regions. The temperature remains fairly consistent throughout the year,
        with relatively warm temperatures.
        </p>
        <p>
        <h3>Lush Greenery: </h3><br>The consistent rainfall and high humidity contribute to
        the lush greenery and tropical vegetation that Kerala is known for. It
        is often referred to as "God's Own Country" due to its natural beauty.
        </p>

        <p>
        <h3>Cyclone Risk:</h3><br> Kerala is also susceptible to tropical cyclones,
        especially during the monsoon seasons. These cyclones can bring heavy
        rainfall, strong winds, and flooding.
        </p>
        <p>
        <h3>Tourism:</h3><br> Kerala's pleasant climate and natural beauty make it a popular
        tourist destination, attracting visitors throughout the year.
        </p>

        <p>
            Please note that while Kerala generally experiences a tropical wet and
            dry climate, there can be regional variations within the state, and
            microclimates can exist in different parts of Kerala due to variations
            in elevation and proximity to the coast.
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
            location.replace("kerala.php")
        }
    </script>
</body>

</html>