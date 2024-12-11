<!-- CONTACT PAGE-->
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="about-section">
        <h1>CONTACT US </h1>
        <p>Here u can contact with us .</p>
        <p>
            By given in the website you can contact us for further classifications.you can contact us by mails.
        </p>
    </div>

    <h2 style="text-align: center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>lakshmi narayana</h2>
                    <p class="title">Head of the program</p>
                    <p>The program is intilized by the head of the department.</p>
                    <p>narayana@example.com</p>
                    <p><button class="button" onclick="myc()">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>chandini,bindhu</h2>
                    <p class="title">Art Director</p>
                    <p>If there issues related to the server contact them.</p>
                    <p>chandini@example.com</p>
                    <p><button class="button" onclick="myc1()">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>kalyani,kavitha</h2>
                    <p class="title">Designer</p>
                    <p>If you have any issues regarding to the design to the webpage contact them.</p>
                    <p>kavitha@example.com</p>
                    <p><button class="button" onclick="myc2()">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myc() {
            location.replace("https://mail.google.com")
        }
        function myc1() {
            location.replace("https://mail.google.com")
        }
        function myc2() {
            location.replace("https://mail.google.com")
        }
    </script>
</body>

</html>