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
        <h1 style="color: black">
            CURRENT DATA OF WEATHER</h1>
    </center>
    <div style="margin-top: 2%">
        <a class="weatherwidget-io" href="https://forecast7.com/en/15d9179d74/andhra-pradesh/"
            data-label_1="ANDHRA PRADESH" data-label_2="WEATHER" data-mode="Current" data-theme="dark">ANDHRA PRADESH
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
            <h1 style="color: black">PAST DATA OF WEATHER</h1>
        </center>
    </div>
    <div style="margin-top: 2%"></div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/15d9179d74/andhra-pradesh/" data-label_1="ANDHRA PRADESH"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">ANDHRA PRADESH WEATHER</a>
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
            Andhra Pradesh, a state in southern India, experiences a tropical
            climate. The climate of Andhra Pradesh is characterized by high
            temperatures throughout the year, with distinct wet and dry seasons:
        </p>

        <p>
        <h3>Summer (March to June):</h3><br> During this period, Andhra Pradesh experiences
        hot and dry weather. Temperatures can soar, particularly in the inland
        areas, often exceeding 40°C (104°F) in many places. Coastal areas tend
        to be somewhat cooler due to the influence of the sea.
        </p>

        <p>
        <h3>Monsoon Season (June to September):</h3><br> The southwest monsoon brings
        rainfall to Andhra Pradesh during these months. Coastal areas and the
        eastern parts of the state receive more rainfall compared to the drier
        western areas. This rainfall is crucial for agriculture in the region.
        </p>

        <p>
        <h3>Post-Monsoon Season (October to November): </h3><br>After the monsoon season,
        there is a transition period with decreasing rainfall. Temperatures
        begin to moderate during this time.
        </p>

        <p>
        <h3>Winter (December to February): </h3><br>The winter season in Andhra Pradesh is
        relatively mild. Daytime temperatures are generally comfortable, and
        nights can be cooler, especially in the inland regions. Frost and
        freezing temperatures are rare in most parts of the state.
        </p>

        <p>
            Andhra Pradesh's climate varies from region to region due to its diverse
            geography, with coastal areas experiencing a more maritime influence,
            while the interior regions have a more continental climate. The state's
            climate plays a significant role in shaping its agriculture and economy,
            with the monsoon season being of particular importance for crop
            cultivation.
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
            location.replace("andhra.php")
        }
    </script>
</body>

</html>