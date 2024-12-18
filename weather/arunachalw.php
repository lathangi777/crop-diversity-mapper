<?php include "text.php" ?>
<html>

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
        <a class="weatherwidget-io" href="https://forecast7.com/en/28d2294d73/arunachal-pradesh/"
            data-label_1="ARUNACHAL PRADESH" data-label_2="WEATHER" data-mode="Current" data-theme="dark">ARUNACHAL
            PRADESH WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/28d2294d73/arunachal-pradesh/"
        data-label_1="ARUNACHAL PRADESH" data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">ARUNACHAL PRADESH
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

    <i>
        <p style="font-weight: 3px; font-style: italic"></p>

        <p>
            Arunachal Pradesh, a state in northeastern India, experiences a diverse
            range of climates due to its varied topography and altitudes. The
            climate in Arunachal Pradesh can be categorized into several climatic
            zones:
        </p>

        <p>
            Tropical Monsoon Climate (Arunachal Pradesh Lowlands): The southern and
            western parts of Arunachal Pradesh, including places like Itanagar and
            Naharlagun, have a tropical monsoon climate. This means they have
            relatively high temperatures year-round with distinct wet and dry
            seasons. Summers (May to September) are hot and humid with heavy
            rainfall, while winters (October to April) are cooler and drier.
        </p>

        <p>
            Temperate Climate (Arunachal Pradesh Himalayas): As you move northwards
            into the Himalayan region of Arunachal Pradesh, the climate becomes more
            temperate. Places like Tawang and Bomdila experience colder winters with
            the possibility of snowfall. Summers are milder compared to the
            lowlands.
        </p>

        <p>
            Alpine and Tundra Climate (Higher Elevations): At the highest elevations
            in the state, particularly in areas like Sela Pass, you'll find an
            alpine and tundra climate. Here, winters are very cold with heavy
            snowfall, and the summers are short and cool.
        </p>

        <p>
            Rainfall: Arunachal Pradesh receives heavy rainfall during the monsoon
            season, which typically occurs from June to September. The amount of
            rainfall varies across the state, with the southern regions receiving
            more precipitation compared to the northern parts.
        </p>

        <p>
            Humidity: Due to its proximity to the Bay of Bengal, many areas in
            Arunachal Pradesh experience high humidity levels during the monsoon
            season.
        </p>

        <p>
            Biodiversity: Arunachal Pradesh's climate diversity contributes to its
            rich biodiversity. The state is home to a wide range of flora and fauna,
            including tropical rainforest species in the lowlands and alpine species
            in the higher elevations.
        </p>

        <p>
            It's important to note that Arunachal Pradesh's climate can vary
            significantly depending on the specific location and altitude within the
            state. The diverse geography of the region results in a wide range of
            microclimates and weather patterns.
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
            location.replace("arunachal.php")
        }
    </script>
</body>

</html>