<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sikkim crops</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,
                    rgb(16, 37, 16),
                    rgb(165, 196, 115));
            margin: 0;
            padding: 0;
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

        </h1>
        <h1>Major Crops In Sikkim</h1>
    </header>
    <div class="container">
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Rice is a staple crop in the Northeastern states of India, and it
                plays a vital role in the region's food security and economy.<br />
                Varities:<br />
                The Northeastern states cultivate a wide range of rice varieties,
                including both traditional and modern high-yielding varieties. Some
                popular varieties grown in the region include Bora, Joha, Sali, and
                various indigenous varieties.<br />
                Cultivation Seasons:<br />

                Rice is grown in both Kharif (monsoon) and Rabi (winter) seasons,
                depending on the specific region and altitude. In the Kharif season,
                rice is usually sown in June and harvested in October. In the Rabi
                season, rice cultivation takes place from November to February<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnxuOLA4PGpwI2ApqEqf4ZQwADVry1M9b7mw&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Fruits(Lychee and Litchi)</h2>
            <p class="crop-description">
                Lychee (Litchi) is a popular fruit grown in the Northeastern states of
                India, and it is known for its sweet and fragrant taste.
                <b>Varieties:</b><br />
                The Northeastern states cultivate various lychee varieties, including
                Litchi chinensis, Rose Scented, and Shahi.<br />
                <b>Cultivation Seasons:</b><br />

                Lychee trees bloom during the spring season, usually from March to
                April. The fruits mature and are ready for harvest in the summer
                months, typically from May to June.
            </p>
        </div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx01TenKodVgSBNpiCPV7nYlBCfMdOFXokpQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Spices</h2>
            <p class="crop-description">
                The Northeastern states of India, with their unique agro-climatic
                conditions and biodiversity, are known for the cultivation of various
                spices, including cardamom, ginger, and turmeric.<br />
                Cardamom:<br />

                Varieties:<br />
                The Northeastern states cultivate two main types of cardamom: Green
                Cardamom (Elettaria cardamomum) and Black Cardamom (Amomum subulatum).
                <br />
                Cultivation:<br />
                Cardamom is primarily grown in hilly regions with cool and humid
                climates, making it suitable for the Northeast's terrain.
                <br />Cultural Significance:<br />
                Cardamom is used in various culinary preparations and is especially
                important in local cusion<br />
                Ginger:<br />

                Varieties: <br />The region cultivates ginger (Zingiber officinale),
                which is a versatile and widely used spice.<br />
                Cultivation:<br />
                Ginger thrives in the Northeast's subtropical and tropical climates
                and is typically grown in well-drained, loamy soils.<br />
                Utilization:<br />
                Ginger is used fresh and dried, and it adds flavor to a wide range of
                dishes and beverages. It also has medicinal properties.<br />
                Turmeric:<br />
                Varieties:<br />
                Turmeric (Curcuma longa) is another spice extensively cultivated in
                the Northeast.<br />
                Cultivation:<br />
                Turmeric prefers warm and humid conditions and is grown in fertile,
                well-drained soils<br />
                Utilization:<br />
                Turmeric is used both fresh and dried and is a key ingredient in
                Indian curries and as a natural dye.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYpdZEqSkMtFCol2HO0ePPEQP78PsHkJnBqQ&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Bamboo</h2>
            <p class="crop-description">
                Bamboo is a versatile and important crop in the Northeastern states of
                India. It has a wide range of applications and plays a significant
                role in the region's culture and economy<br />
                Varieties:<br />

                The Northeastern states are home to various bamboo species, including
                Bambusa tulda, Bambusa balcooa, and Dendrocalamus strictus. Each
                bamboo species has unique characteristics and applications.<br />
                Cultivation Practices:<br />

                Bamboo is propagated through seeds, rhizome cuttings, or culm
                cuttings. It is typically planted in well-drained, fertile soils and
                requires regular watering. Bamboo groves are often managed on
                community or private lands<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKvelRq3Y6xXrVSlRMvKI08nvo0A1FPAA6fA&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Horticulture(Oranges,Pineapple,Bananas)</h2>
            <p class="crop-description">
                Horticulture crops like oranges, pineapples, and bananas thrive in the
                Northeastern states of India due to the region's favorable
                agro-climatic conditions. <br />
                Oranges:<br />

                Varieties: <br />The Northeastern states cultivate various varieties
                of oranges, including Nagpur, Kinnow, and Khasi papeda oranges.<br />
                Cultivation:<br />
                Oranges are typically grown in the hilly terrains and valleys of the
                Northeastern states.<br />
                Cultural Significance:<br />
                Oranges are an important fruit in the region, used in traditional
                festivals and culinary preparations.<br />
                Pineapples:<br />

                Varieties:<br />
                The region is known for its Khasi and Mizo pineapples, which are known
                for their sweet and aromatic flavor.<br />
                Cultivation:<br />
                Pineapples are grown in well-drained, acidic soils, often on slopes
                and hillside gardens.<br />
                Utilization:<br />
                Pineapples are consumed fresh and are used in the production of
                juices, jams, and canned products.<br />
                Bananas:<br />

                Varieties: The Northeastern states cultivate various banana varieties,
                including the robusta and cavendish types.<br />
                Cultivation: Bananas are grown in a range of agro-climatic conditions,
                from the plains to hilly areas.<br />
                Utilization: Bananas are a popular fruit in the region and are
                consumed fresh or used in desserts and snacks.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdPxbcpbImGq-j070jNPHIYm7ZWJ1uX2c8-A&usqp=CAU"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rubber</h2>
            <p class="crop-description">
                Rubber cultivation is an important agricultural activity in the
                Northeastern states of India, particularly in states like Tripura and
                Mizoram.
                <br />
                Rubber Varieties:<br />
                The primary rubber variety cultivated in the Northeastern states is
                the Hevea brasiliensis or the para rubber tree.<br />
                Cultivation Practices:<br />

                Rubber trees are propagated from seeds or through vegetative methods
                like budding and grafting. The trees are planted in rows, and regular
                spacing is maintained to facilitate tapping and care. Rubber trees
                require regular care, including pruning, weeding, and pest control.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://assets.sentinelassam.com/h-upload/2021/02/01/1600x960_194824-tea-garden-1.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Tea</h2>
            <p class="crop-description">
                Tea cultivation in the Northeastern states of India, particularly in
                Assam and parts of Arunachal Pradesh, Meghalaya, and Tripura, is a
                significant industry.<br />
                Varieties of Tea:<br />

                The Northeast is known for cultivating various types of tea, including
                black, green, and white tea. Assam tea is particularly renowned for
                its robust flavor and strong character.<br />
                Cultivation Practices:<br />

                Tea is propagated through seeds or clonal methods. It is typically
                grown in well-drained, acidic soils. Pruning and regular maintenance
                are essential for tea plantations.<br />
            </p>
        </div>
        <!-- Add more crop cards as needed -->
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
            location.replace("sikkim.php")
        }
    </script>
</body>

</html>