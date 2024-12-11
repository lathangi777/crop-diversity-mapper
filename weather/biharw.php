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
        <a class="weatherwidget-io" href="https://forecast7.com/en/25d1085d31/bihar/" data-label_1="BIHAR"
            data-label_2="WEATHER" data-mode="Current" data-theme="dark">BIHAR WEATHER</a>
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
    <a class="weatherwidget-io" href="https://forecast7.com/en/25d1085d31/bihar/" data-label_1="BIHAR"
        data-label_2="WEATHER" data-mode="Forecast" data-theme="dark">BIHAR WEATHER</a>
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
            Bihar, a state in eastern India, experiences a subtropical climate
            characterized by hot summers, a monsoon season, and relatively cool
            winters. Here are the key features of Bihar's climate:
        </p>
        <p>
        <h3>
            Summer (March to
            June):
        </h3><br> Summers in Bihar are hot and dry, with temperatures often exceeding
        40°C (104°F) in the peak months of May and June. This period can be quite
        uncomfortable due to the high temperatures and dry conditions.
        </p>
        <p>
        <h3>
            Monsoon
            (June to September):
        </h3><br>Bihar receives the majority of its annual rainfall
        during the monsoon season. The monsoon begins in June and lasts until
        September. During this time, the state experiences heavy rainfall, which
        can sometimes lead to flooding, especially in low-lying areas. The monsoon
        is crucial for agriculture in the region.
        </p>
        <p>
        <h3>
            Post-Monsoon (October to
            November):
        </h3><br> After the monsoon season, Bihar starts to transition into the
        post-monsoon period. Temperatures gradually start to decrease, and the
        weather becomes more comfortable. This is a favorable time for outdoor
        activities.
        </p>
        <p>
        <h3>Winter (December to February):</h3><br> Winters in Bihar are relatively
        cool and dry, with temperatures ranging from 5°C to 20°C (41°F to 68°F).
        While it's not as cold as some northern states of India, residents may
        still experience chilly nights and mornings during this season.
        </p> Spring
        <p>
        <h3>(February to March):</h3>
        <hr> Spring is a short transitional season between winter
        and summer. During this time, the weather becomes warmer, and flowers and
        trees begin to bloom.
        </p> Overall, Bihar's climate can be described as
        subtropical, with distinct seasons including hot summers, a monsoon season
        with heavy rainfall, a brief post-monsoon period, and cool winters. These
        climatic conditions play a significant role in shaping the state's
        agriculture, economy, and daily life.
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
            location.replace("bihar.php")
        }
    </script>
</body>

</html>