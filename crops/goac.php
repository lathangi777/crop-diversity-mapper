<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Goa crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
        }

        header {
            background-image: linear-gradient(to top, #5430d6 0%, #c5434d 100%);
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 100px;
            background-image: linear-gradient(to top, #ee6a2d 0%, #e0949a 100%);
            box-shadow: 0 0 20px rgba(80, 5, 87, 0.1);
            border-radius: 10px;
        }

        .crop-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px;
            padding: 20px;
            background-color: rgb(92, 122, 151);
            box-shadow: 0 0 0 3px black;
            border: 1px solid #000000;
            border-radius: 50px;
            transition: transform 0.2s ease-in-out;
        }

        .crop-card:hover {
            transform: scale(1.08);
        }

        .crop-image {
            max-width: 25%;
            height: 25%;
            border-radius: 5px;
            margin-bottom: 7px;
        }

        .crop-name {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .crop-description {
            text-align: auto;
        }

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

<body>
    <header>
        <h1>
            <p style="float:left;">
                <button onclick="myfunction()">
                    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="W3Schools.com" width="30"
                        height="40" style="background-color: white" />
                </button>
                <button onclick="myfunction1()">
                    <img src="https://thumb.ac-illust.com/ef/ef76a36c7a4f85f140bf3566836df260_t.jpeg"
                        alt="W3Schools.com" width="30" height="40" style="background-color: white" />
                </button>
            </p> Major Crops In Goa
        </h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://images.moneycontrol.com/static-mcnews/2022/08/sreehari-devadas-WDI95CIPW00-unsplash.jpg?impolicy=website&width=1600&height=900"
                alt="Crop" class="crop-image" />
            <h2 class="crop-name">Paddy</h2>
            <p class="crop-description">
                Rice is one of the primary staple crops grown in the state of Goa<br />
                Varieties of Rice:<br />

                Goa cultivates a variety of rice varieties to meet local consumption
                needs. Common varieties include Jyoti, Jaya, Vandana, and
                Indrayani.<br />
                Agro-climatic Conditions:<br />

                Goa has a tropical monsoon climate with distinct wet and dry seasons.
                The state receives abundant rainfall during the monsoon, which is
                crucial for rice cultivation.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT43VzKmZw85dc_GZXLjsKt5iQompGg3RYpWg&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Coconut</h2>
            <p class="crop-description">
                Coconut cultivation is a prominent agricultural activity in the state
                of Goa<br />
                Varieties of Coconut:<br />

                In Goa, the most commonly cultivated coconut variety is the Tall
                coconut (Cocos nucifera). The Tall variety is well-suited to the
                region's coastal climate.<br />
                Growing Regions:<br />

                Coconut groves are a common sight throughout Goa, especially in the
                coastal areas. The state's Salcete and Bardez regions are known for
                their extensive coconut plantations.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9BRSa_UhIsmR_jA8kzgV63gEcm_4LNEuB1Q&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cashew</h2>
            <p class="crop-description">
                Cashew cultivation is a significant agricultural activity in the state
                of Goa<br />
                Varieties of Cashew:<br />

                Goa primarily cultivates the cashew variety known as "Goan Cashew" or
                "Goa Cashew." This variety is known for its premium quality nuts.<br />
                Growing Regions:<br />

                Cocoa cultivation is concentrated in certain districts of Kerala,
                including Thrissur, Kozhikode, and Idukki. These regions provide
                favorable agro-climatic conditions for cocoa growth.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="data:image/jpeg;base64,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"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">BeetleLeaves</h2>
            <p class="crop-description">
                Betel leaves, also known as "paan" in India, are an integral part of
                Indian culture and are commonly consumed in Goa as well.<br />
                Cultivation of Betel Leaves:<br />

                Betel leaves are cultivated primarily in home gardens and small farms
                across Goa. These vines are typically grown alongside other crops or
                on trellises and vertical supports.<br />
                Varieties:<br />

                Several varieties of betel leaves are cultivated in Goa, including
                Kapoori, Banarasi, and Sanchi. Each variety has its own distinct
                flavor and aroma.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="data:image/jpeg;base64,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 "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Fruits</h2>
            <p class="crop-description">
                Mango:<br />

                Goa produces a wide range of mango varieties, including Alphonso
                (Hapus), Mankurad, and Musarad. Mangoes are a popular seasonal
                delight, and Goa celebrates a Mango Festival every year.<br />
                Cashew Apple:<br />

                Cashew trees not only produce cashew nuts but also cashew apples. The
                cashew apple is used to make cashew feni, a local alcoholic beverage,
                and can also be consumed fresh.<br />
                Coconut:<br />

                Coconut palms are abundant in Goa, and coconuts are used for their
                water, flesh, and oil. Coconut products are essential ingredients in
                Goan cuisine.<br />
                Banana:<br />

                Various banana varieties, including Poovan, Red Banana, and Nendran,
                are grown in Goa. Bananas are consumed fresh and used in local
                dishes.<br />
                Pineapple:<br />

                Pineapple cultivation is prevalent in Goa, especially in the Ponda
                region. The state is known for its sweet and juicy pineapples.<br />
                Papaya:<br />

                Papaya is widely grown in Goa and is used in salads, juices, and
                desserts.<br />
                Guava:<br />

                Guava orchards are found in various parts of Goa, and the fruit is
                known for its sweet and slightly tangy taste<br />
                Jackfruit<br />

                Jackfruit trees are common in Goa, and the fruit is used both in
                savory and sweet dishes<br />
                Kokum:<br />

                Kokum, a small, sour fruit, is used to make a popular Goan drink
                called kokum sherbet. It is also used as a souring agent in Goan
                cuisine.<br />
            </p>
        </div>
    </div>
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
            location.replace("goa.php")
        }
    </script>
</body>

</html>