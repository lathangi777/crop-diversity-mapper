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
        <a class="weatherwidget-io" href="https://forecast7.com/en/22d9987d85/west-bengal/" data-label_1="WEST BENGAL"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">WEST BENGAL WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/22d9987d85/west-bengal/" data-label_1="WEST BENGAL"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">WEST BENGAL WEATHER</a>
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
            West Bengal, a state in eastern India, experiences a tropical
            wet-and-dry climate. This climate type is often referred to as a
            tropical savanna climate or a tropical monsoon climate. It is
            characterized by distinct wet and dry seasons, with a significant amount
            of rainfall during the monsoon season and drier conditions during the
            rest of the year. Key features of West Bengal's climate include:
        </p>

        <p>
        <h3>Monsoon Season:</h3><br> West Bengal experiences a pronounced monsoon season,
        which typically lasts from June to September. During this period, the
        state receives heavy rainfall due to the southwest monsoon winds. The
        monsoon rains are essential for agriculture in the region.
        </p>

        <p>
        <h3>Wet Season:</h3><br> The wet season coincides with the monsoon season and is
        characterized by high humidity and abundant rainfall. This period is
        crucial for the growth of crops and the replenishment of water sources.
        </p>

        <p>
        <h3>Dry Season:</h3><br>season in West Bengal usually extends from October
        to May. During this time, the weather is relatively drier, and humidity
        levels drop. The temperatures can be quite warm during the dry season.
        </p>

        <p>
        <h3>Variation: </h3><br>While the coastal areas of West Bengal, such as Kolkata
        (Calcutta), have a more pronounced wet-and-dry climate, the northern
        regions, including the Darjeeling hills, experience a subtropical
        highland climate due to their higher elevation. The Himalayan foothills
        in the north also receive snowfall in the winter months.
        </p>

        <p>
            Overall, West Bengal's climate is influenced by its proximity to the Bay
            of Bengal, the Himalayan foothills to the north, and the seasonal
            monsoon winds, resulting in a climate that supports agriculture and
            diverse ecosystems in the state.
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
            location.replace("westbengal.php")
        }
    </script>
</body>

</html>