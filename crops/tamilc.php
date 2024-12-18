<?php include "text.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamilnadu crops</title>
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
            </p>Major Crops In Tamilnadu
        </h1>
    </header>
    <div>
        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkt57OXX88zUAwjey7m3NgemnRKq3V5WEqqtstc4F7&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Rice</h2>
            <p class="crop-description">
                Paddy, commonly referred to as rice, is one of the major staple crops
                in the state of Tamil Nadu<br />
                Varieties of Rice:<br />

                Tamil Nadu cultivates a wide range of rice varieties to suit its
                diverse agro-climatic conditions. Common varieties include Samba,
                Ponni, Kuruvai, ADT-38, and CO-43.<br />
                Growing Regions:<br />

                Rice paddies are spread across Tamil Nadu, with specific districts and
                regions specializing in rice cultivation. Prominent rice-growing
                regions include the Cauvery Delta, Thanjavur, and Tiruchirapalli.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIZRv65byCBRdTgbsy9rKfXgqjXa9WlOZM0uSMTozn&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Sugarcane</h2>
            <p class="crop-description">
                Sugarcane cultivation is an important agricultural activity in the
                state of Tamil Nadu<br />
                Varieties of Sugarcane:<br />

                Tamil Nadu cultivates several varieties of sugarcane, including CO
                86032, Co 86049, and Co 11015. These varieties are selected based on
                their suitability to the region's agro-climatic conditions<br />
                Growing Regions:<br />

                Sugarcane is grown in various regions of Tamil Nadu, with prominent
                cultivation areas in districts like Coimbatore, Tiruchirapalli, and
                Thanjavur. The Cauvery Delta is a significant sugarcane-producing
                region.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/Cotton_09.21.12_Industries/hero_small/74bop80spn_133837741.jpg"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Cotton</h2>
            <p class="crop-description">
                Varieties of Cotton:<br />

                Tamil Nadu cultivates several cotton varieties, including MCU-5,
                LRA-5166, and Suyodhini. These varieties are selected based on their
                suitability to the region's agro-climatic conditions.<br />
                Growing Regions:<br />

                Cotton is grown in various regions of Tamil Nadu, with prominent
                cultivation areas in districts like Coimbatore, Erode, and Dindigul.
                The Western and Southern districts are known for cotton production.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvYuIsOSjL7cRSiD0Skcu51q8fT4UTDCnHngwXIMfq&s"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Groundnut</h2>
            <p class="crop-description">
                Groundnut, commonly known as peanut, is a significant oilseed crop
                grown in the state of Tamil Nadu<br />
                Varieties of Groundnut:<br />

                Tamil Nadu cultivates various groundnut varieties, including TMV 2,
                TMV 7, K6, Kadiri 6, and TMV 10. These varieties are chosen based on
                their suitability for the region's agro-climatic conditions.<br />
                Growing Regions:<br />

                Groundnut is cultivated in various districts of Tamil Nadu, with
                significant production in districts like Madurai, Ramanathapuram, and
                Sivaganga. Coastal regions like Nagapattinam also contribute to
                groundnut cultivation.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQSEhUTExMWFhUXGiMcGhgYGiAfHhsiIiAgIyMfISQhISkiIh4nIx4eIzIoJiosLy8wISA0OTQuOCkuLywBCgoKDg0OHBAQHDAmIScuNjYxLzEuLjYuMDAwMDAvLjYwMC4uMC4uLjAwLi4uLi4uLi4uLi4uLi4uLi4uLi4uLv/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQADBgIHAf/EAEAQAAIBAgUCBQIEBgECBQMFAAECEQMhAAQFEjFBUQYTImFxgZEUIzKhQlKxwdHw4SRiBxUWcvEzktJTY4KDov/EABoBAAMBAQEBAAAAAAAAAAAAAAECAwQABQb/xAAuEQACAgEEAQMCBQUBAQAAAAAAAQIRIQMSMUFREyJhcfAEgaHB0TJCkbHx4QX/2gAMAwEAAhEDEQA/AN/l/MldqIFQwxBu1rwItcg3+MLM1lK9ZaxU+WQ1lDQ6jqZFgTcgXB68450OgQlSotVkZ3P65JXb6YIJ9ifgi+B/D2YK0KtZW82pVZt0vYshZJHRVMWA6RjwerPTrwHPpdKiqKlKoWqQCRLwJuZPH6ibYDq5fLHPUaNFBNNSzItthgbS0ccn5kYKya1MzlqVRSXdE5LbPUP1AR7iL2tzzhplyfIDAKoblpuJtJkXPycGsAugEQ2cNI1KgCBSKQshYyd26JsADtmJvGLWyKmu/ngVN8NTDAELttERFiQZ5vipM0Af1MAKg3VztG4fwkTaGMJYR+2CtSRXBpeYS1RTeJ29jYQL8T79sFPs4y2o6cXzTLsC02pwqkAzzJG33PXi2MJmtJqUqjUxVDQYkCR8XPPTHqWj1IavXeowFNAJcAAQCT0HpmPtjzfK5lqj1HqABqjFx0EliTHuJ4xWDq2gxVvImp6QUNQB2B6xb6nHOSQZapdpFURuPcd/v/XDHUM5trWR2XYA7IJCkEwPeATMcWwqqKM24JkUkJjoWI5+IxpbclngEUoccl2t5XzWpU7Au9m7WOCstV2MqVJ2qI39YHE98La+XqNURKZkoA47gcAk4K1Gs207qZDDkz6fn64VrCQ6km26AMm4qVqtR4uYuJsLfTDvSM9TWmaakbkEFSOPf3k4QZXT2CtVLQGuJFo7/wB8dZHT3CMxSdxmTEntA6f84dpPsRWugDV6gqVQu4QWF/8A4xolhEBUAKP5TFveO2PmR0ekF3ektHzB7e2LKGUEkVDCW7Hdc29hx0vjpaiqjoQe6/JZX1itQTdSXzB1Yg+meJ74s0FS4FRzuMk7upnmcHZpw9No7EYx61cxReqtN4kSYE2ibHoYxFaanF1grOXpyV5DfFmaV6ypSJAghz0PUD5F/wDRhtkKC01W20Ra0/U/OMlkmNaEFiDJY9Bh/U1F0UDYGC2LkxA9wOR34xRqkoCQatyLdfzLKuynIJEsOw9sCeHqOZ2DYVRBwTyffHL5khWqXdzMBRPwLWCgYK0bVqe1QzbCB179owGqjSQyrfdkyVJ0zTeeQzkDb7L7YI/FU6FWlVqQ0VFbbyYBuY9v7YV6pVOZrb1kIo8tRxu7z7f4wVksuiVKQhfS4NgOl+T9cdOK258AUn0enaVki9fMM7mpQZU2buIkkr3lbWPQjthnq2pU6dNqd18yytEBmiI/oJNsfaGYqL6UpwCJ3uPSeLrBmb/scDjRTmaxq5l1dKS7UpBSFk/xG5n/AHtjxqTdPmit3l8FLrTRCXbyVZArU2JChhaw4IPEjkc4Jo6y2ZR/JTaQdu9/08fwdW7dMJvFOc/DlKPmMaRX1JMsF3czBbbAKkza3vgmtmjT82nR2eTRQFWUbjJkx/KOhkzycI4zivkek1YMaWWeq61NzVF9Ippu2n0yJ4DWPWw+k4NGoVzQPlqi1dpTa82Ycbo+Z9wRg/J5TdTWoCqqPUYuTa5Zj9+mLdNWl5xrKVYvSXawMysm88Xkfv74aMlW6XIjrhHGl5fy6CITvVUADCLgDrxivTKhC06XlyNpKtIAVQRCn6EAfGAjmqNbOVaQJnbO2+1iJ3kfwkzE/XF65FqNbzwzsNoRkm20G20dwTPe5vjlFJvzyF32UajkDSegT66vmFlqFbTyVMcAqD9sM82C2zcqmlPqPY8ixtFue8YF8U6kq+UgpPVfzAQFO3aYMEm0c8XtOKhqDJTZs5AFyAg3KB24BJggcYE5OsfQKTdNhlbWsujFTUW3YA/2xMJG1CkDak/2H+cTELfj9R/TiP8ATcw7UQ9RUC7j5iwVIvcQRcgc8Y7q5lcoqeRRFRXMLTTaCbG4JMRA6nAetZxzXFL8tKdX0htxJDQZkQJke/T3wXovh5KS0neqXanMECFIM2gz07HHqJNsxY5ZXpJzIoneUoqxlAo3MgYk7T/D9pxMrlN1FsvmKiVFpPYrK2gMu65giePYHFuZzRqFjuRcvIV9ykEiSG5IiTAuOJwt1mlSdq1PKCmXqJDhRInqbfxR++O65CF6cFzCNU3WRmSmQTBCt6SRMGSAftGD9Ao1RSc1LVGN1YCAYHUTI+/XC2hk8rTrUpne6+lS7bSyQdxWYDCeY/tjrWMwjpVJrtTWjN6ZMsY/S1pPYAcyD2w0bA84Mn4sy9epSo1moCnTplt0NNyYUx1Wbg+4MDGM16vFKDdiwAHWeRj1r8Sub081cwpSht3ekncVXgx0uJj2GPG1BFSm9c+lTcARfvjRpPFsN4aD/wAcKSrvVkta3Hfjk/XFGSqPXao1JPRIubSYv9SI5wx1LM0TSaWDTwL/AL9sB6NqP5W00nYBiVZQsEd4J/eMNFva2lkZ5kl0WZDURSzFQVAFDqqgniVmR+/9cNM8abITuUiO84VadUWvnKSVKQFNVMBolj0npA5i+NHqOj0GuKaAjiFA/wDjEtWSjJWU03aaRiTVVqSepiFYBhBvHMWuMaJTKg2vfA+mZJdtSkp/Q7Dnpz/Q/wBcD6wlRQlKk4DNz3CgXP8ATFrt0heI2xX+MfznVBuBgkcXHJnpbFmoLVqKUCqeLT9e2KqOVfK1FYsCpIViR0PX74052ASSIg+qw2jDyltqicVutMzOj1nr1VoQE53kmYAubd+BzjS1/DE03FKQ7D9TNzHE+xxmct4iCVi1KkrA23NZmi88f88Yd0PEFfNzANJF5I5PsPjv0x2r6lppUhdPZxdmey2QajUZXZReGPMHi3zjRigjLtgspEERhfmdIVkIRTJvMmZ73N8fNAo5uuv5YherNa49up+2OnX9TYYrb7R3pLqpKCABZQBwIwlYq9eq6xZonsFAB+5nGg0vwrVq1Ca1W5/SEJUNbqeZ+uJp/wD4eOua8vzttErvkRuif0dpnr2xLTcFJyspOWEmhHlNIarXRKRmo5llP6QsXY9ot8zjYVvBtXLgV/ORhS/MYFInbcjk9vnDmv4cp5ANm6RclV/MBO6VmSR2IubWMH6F1s6+byzDLLIqAgVHsvyBy3biPfE9XVk+DopDXLaoK6b6dJySJAaAJ7EgmB9MIfD+dKZRqtSsWrMLsxHpKyDSvb0mfmeuOcpn8wR+Ho0NrJArNvEoCOVkRJ5BOBtZyGX/ACqChsu5deFgMBczbabA84wNNLK/MpBLgJ0n17czXRqjMiqGIW02JuQAskcdMEvmmpsUpZVgpmxKqu7uYNp+MFeIAIpUQQBVYU9wN9p5twCRbBFfT1/LCuyikbHcTaIIO6ZMdTJ/fEHSvcPuvIgoZhKYRa5CCnTPmeqEkmRYn1GJvB5jHb+JaSj0M1OiVEEpDMTxtEbhPTjmcca5lPxtQpSZmRYDkbQOfUJjkgR8/GG9dg1IrTQTEQbQw6deCMctsVbC84EmnZF8rWpUIVi7HaSSPKpmWKsbliALERcfXB2qVqtRPyo2I27cSTvCyIAEW+SeMX5LNM1WtWekTVWmICywDCZAt1tHXA+UqVDlTsO92UgkASpPJKlhweYk826Y6TcnuVXZyxydZ7TM3tp7VoCDuKmZUjiCoMnmcWU3LVPzKYFOmAQ0giW6/ERB+etsMzqNZETdSFVzClg23cf5oggdzHvgLMsYrUY3v5QIAUwSS0SeAJ6E9OuGlscfaJFyvIZ+NpfzpiYNymRo7F2pTKxbcL/WeuJgeivLF9VeAfTsjTqb6lMwXMAkEwBaRu6Hm1jj5oOTYU3VyCyVnE8g3kG/FiBHSDgCtW/GVhsL0qdGdxBhiSP0wJgXmT2wTrOaqUMk7BVUpG0seQCORAgnjnr9Mb1VcGd3wD5vKU9+wk1y7kPSkEE/q3EE2jtxfDPLIrnbRTyiogkoBEfwx/vt3wFmsh5ZOaeod8CTSERFrLcHnrzPYYp0VKWd3uMxVYsiioqsUUNF7AAgiIIn5wJRsN4GdGhTWkHYr5rQGYAXaeBN4mbYpTT6K1XqVG3PVFi0SoUAQI/rz+2OqFQkVqG5NyEAGBIBAMkcTgDSNKpUFKZjZUZTCJHQi0D+Yifj98NF0BoRapWzeYyLCkKPkgkuFJ3+WpmB/CZiT7SLnHnWpZffsQ8O6ifaf8Y9omh+FqUHpmh+W5NOQHK3uCp9U8W62x5VUfLtlMvSWiKeYUgGoRwRcy268xxA+mNOnJJIHqVaZVmKQKsCBEQR07Yo0mt+WA0SpgyQCYMYtzudEhEG53sLQBzcnjof3wFlNNoKXNaoSwI4/TB7/Jm2GbW3IZaqjLGS41vOO4EhVaBBgzzJP1sPnH3UXqsABVaCwBk9z9xfAuRoBlq1adREVSVCkfrAuCR/vOHWm5NqtJX3ozMkqokbTYgkySSIwJSjHn/R0daMlnkGyummkbNc/wAXf59sUZKqoq12rMBUHoA4tzb5tg7L6vSFqhClTFyOh6d8TTqG/e7rIqMTx/Dwv7AYVTeXI0VF0oAfiN1CU95A3MoHsJBJOLdQzFFkCiogMAQDck2GKM/kPLrrYsCsLN9kXtPcY7zeUplGLwAByRf784pSkkxN0k2L6Hh5kYs1QKAfSAL/APH74LRmplae0bWJ9Q5k9x9O+GGQ3vRWo9NlEcsLH39pxRqYIQFFM7gRfsQePpg3KToT2RVo4zWfCKZBYgekD/Yvx1xpNATyqKJUUqT6j8m5uPfAemaVXqrTqrl12Bw22obvtMwBEAE9SbxjZUdQp1XOXp5ciqPUwqLASTyTwRM8TOM2tcltKKSTsVfjKakAPL9AJke/thPW/HHPUgjKCFMNcrtJEyLGbC2HuWytPKNVfMgBS8+YohJMAA9jbr3F8cfjnqZinWo0WagAQatuDFxJEj4wkI7eAye4da7SzbZZ0Q02YoVK7SsyIsSSPoY+Rg/QtRpNSpqrL6VCxxEAAiPaIw2RBA9xhRm6Qq1zSVVZVX1ExAJmw6gxH3GD8Exd/wCoqAz1VNyg7FWSY3EFiQOhjcB98U67mfxTrlqADPZnebU1nqR1PAGCNJ0ejk22EAu5JDsLkTxftb+uLc3nsvlMxcohzAjoBuX+5DftgNJjp1wB+JNNnyVUsjCorANJWxtJ6CYvbF+cyRrNTrN5k0qhJpTyOOOD/MDhhnNRoIpUtvJEqgM9P6YxFTP16lPaXYbWHUqbcif1ERaJi+Mc9JwpReCsJWsmtoZe7mjZKigliCpm8EAgHgmZjpglKdJVYoQLGIYtf4m9+mPmR1agaR9QG2wHBk8KJ6mQAPjA+iZUUxBUK5JLe8sTM9ZkYXXhGKQI2zjw7nwMvNQnzGckypXcSYAUGJsAB8fXAP8A6d8zNTUQ+TV3O2142vztO03Dcz3m9xhrqyF2VVq7YuyxJ5G0+1wfm/bA+oas1NDSRSazekGPTJv1P6okgDrgqSwHOaDKmRX8RuBPpQBBvMKbz9SI598UaTnAtXMKwZoqSGsSfQo2/Qgx84HiogR95R3O0jbZupncDJ98VadSANRXcABjJUMWbreLX6wMSU84DtxkZGozElFqEEn9L2mbxfvOJikf/t02CfwiSP26YmDuR2xi7RfDn4WsarVK1SuSGfaWKuvEMO9jHwIxoPEC0q1NRWg0nZFU8glyAG+k2++Pun1ak5kBQ/G2pugMY/TxYLa4tc9ZwDrlajRo0qqiBuUJTH6RN5IFhHJP+cehmjL/AHBWr5egv5bEpTp0yYVioAiJgGCRBv0+uB9Fr0jp9BqbsFTaNyhgfSw3SRyDBk9b4Zvl0ar+dSRgywvpBiLtM9Db7fao0yKa5dqRRSIncNsdADMyfcDrjqwLZRnskuZdPLMUmQhqyGJv+mRckGTPQ++O9MK0iaFMNVUW3s247jJO4m5Ate/MdMB1aLuq5GiDSVY/NgMrAQxAHuZB44bAdMZgV8yqMoVKabG8sgFoMkMTDHgEiwsPnrbOYBqVfOZHM5nOFGzNFKSrMqu0TJAi8AySYNit7Wxni3U1z1WnWJWnu2rtUz1/UxgXv9hjR+OPF1SnlRlfKHmVk3PUDgqUPXvLccREwe2J0pAhpqaBZyS5kRxe08Ac40ZikzPN2fc3lqa5hUJqOoB28wDxuntg/UdGRh5dEmmGuzGdrQPexN7YPrVcq6nzCFaDO4xFuO/OF1TWGfL+WKbs4IVHC+kAGxY9DGM8ZzlTV/sCkkfTpXm0GVaIUIdhIiTB9RFuY+MTVHpLRVcuVVgeloAFyY73GPujZ2sjV91ZBMOBFrzJ5txOFem1j5NZ7GXYmbE7jzxxim2XfCa/UCa6LgGdKLmmhBG3aASSTeSept2GGGnJVJIpHaq2Kv39vaOuFy6VVoNTs5IEqg4nr1tYjBeq0GQK9UmHQr+WT+rmDxwJx02m6i1n74HhJxeDgA1nO+tsZGIWw2/MnntgY0w9MipXPpJIBsrQbRPIMfvjrMZiq1GmjKoR4HSQJgEiLHGh1Wi6qKcK5MKGNtpAkEQINhgvUcWlfJ2+TyzTHVqWYRKFCPNqLwVI8sWkkHtNgeuJmfB606foMEDk3n5xlNP1OrTZM1sViqtwxG7gEm3FifmMbiguYzdMfiCtKm4kqhMwRwWPfrtj5wm6SeMM0QkpLIdpmtZdcvSJdAWQEKDJ44gXJ+MCaDqO7O5jdTemNieWXUjcBukifdh+2BNEp5fT6xyx2rv9aOxEsONs/wDbb6Ee+CvEjioaVFX2M9QAOpG4AXYj/wDiGH1wbyPtAvG+q0/KqUnYbWBB9ptOH+Uq0ay+VSI9AAKjhRwDboYwJqGg5dqTgAnuvJYxEsTc8/4wP4P0d8jTbbTlnPRpgdBeOJPGOb6YOsDbP08zSoN5TKzAW3L2688+xxhfAvi5KAalWYs7OSG5L7r/AP3STb4xrE8RNma1TLUqZULarUYRtkfpA5k9+g+mAc3oWXyNRMyqBQPy2gW9RADQOoMCR0JwXSwGOeTnxd52YFF9vlop9RB9a7oA6QPfnnB+neHVoAsHas7AS1SCTA4FgAOsYs1fUKaUajTvmmwCCJJA/bCvK+NAmWLvSdmAsAAZPvfieuJNuxldHekZMVq5rrS2U9rIx4O4EdPoQcd+KdMplFdam0qygk9QSAfrfGi0Jg1CmwIbcoYt7tcn6k4S19Ey9XN1SVD2G4H1Q3sDZbQTEXJwdqpWcpZHdDLJtFILaOkQP+cZDxrnKlCpTQVFJHr9XN5WCR0gkzzhll89mFzNXKqUVECsrkEvDA25ixBv8Y6OjBd/4gnMUqhli6gsk9RH8I7ASMDUSaprJ0Pa7ZMtmaVGh5jFQ4pgMCT6yvBB6zP74S5rUi9Qll3CJG3hf+T/AGx8/wDMay1ny+Wo0BTUlRWCiCPaBdvieDjnU9Kq5fK1WUq0AsQBt9z1M4zejNrgqmk8sI8PGo4ZnUubwWckgXgCZ/rhpplF3QPuAm9lxxpUq7fp2kA2NxA6/PIwh07Vs0q1DTqUyoLMgK22lvQJ3XJDL0GNGn+Hg80CUpN4PQstmgqhTTBIF7j/ABiYzGm+dUpI7PS3MJMIYv8AJxMaPb8f4RHYvuxpQoV32AuiU2WWSO44DSD84HZWD5ihSX+EDcyMyAlbBTwIFyB3GMVofi9PMTzzUcK/oZ2ACgiLgfUzfG88P6k9U1mQU0oipCm5J9KktNhBn+uJSg1yK7R1QFNaTZl1VHXcAxA3C+0AH/uP3tgbVq2ZriKabSihlNSRuabwsXgCLwJbAvh7JOzVqHm76VCqGSoQCdxO/b2gGbjvh5WzNVjQbYilmIhiT0JJtHRePfAXgDwxbq2kpUYmrmG2LS3BFYKqkGd1uenM9cJvHBqVMjSda6bECu60wR5lo2g7ja/HXC7xhoZpN5igsyglmdiF2nsOl+g6YyNXMCjUDI3mMSZE+niNwHA9sPHDpckpyKNOyVJmYVAytuB2FtsqIiItz9sXahl69SotWWg3p7Y3N/bbjh9MZ3L1SfNsFQcX4+bc4MppXy9akDDAUyAqTKkDm/QXw05Z5z4/3RKiplpioy5hw7bQRaL9efp++GWi59vLqUaK0nppwxJ5a8W7TycTNU/JRqgh2qAQYF4sFH1PHc4p03KBbEmlWqepgWABI7R6TiOHHP2/oclkH07LFcpUFR18ws8rEwZt7npAwDQpipUVaxhlG9TG3cwIs3SB26nH3IZSuc1Wfdu2NIPCEnvzeD0wXSYV97VW8srKhQbW5Yk8zHGKu4yb5v8ASzqtBiajmq9VKtJaYRFZZJPqJN7xz0GEniLMVnrAqOBt2CQA1rSeScE6bTb8IDlg6kH9XIJn1EA+2LdOzdSHoWaoVLCqSACT/F3LDtgJKMrSWMf9+7OtsJ1fUWXLvvoXKwLiAT8YXU81VaghNewIng82/wDuHvjhaears1J6iDY0m0ztgzhnS0ny9z1lRiV3i1oFo55x22OnH5uzuQIhULUjVPlbASvuSfSW7RDR740mieL1o0jRqq7UgIRx1HSxhrGwPURjL5bVqQolEQ7ndvTEzPAxo/B/h+ajDOIzAU18sMpCtzJvzELb9uMO1zuQ2m3uwazQcsmbjN1UE7dtFGg7V7/LH7ADCnO+HDUzi1KcUWp8+Wu4EGwhbCTJ+nfDrUcomXolqB27bx/Da/HQfGFXhXV66NVr5qiyJUClWMWAmxHI5m4wi8o1j2pXOUIbMMGQC5AvPci/vxjnUfE4NBqtGm7oFJ3hbcdAbt9MKs/rYzNWiq0nekXBqMFJULN5MRFvtONHrWYXydysCq8ngRHTpEYTsL6tCLI+GnWp+L/FP57qNwgeWYAAHE27zf8AbC3VvEWbq5kZf8OYpnc8erd2vYAXkTc2xq/C9MNlaTB9wKgg9gbhbfyi30wXq9IUqVSqBNQLCzFyTAE9pOHsCdM898Rvmqz0xSoMoQyxY7QRBBX35/bDTw5o4zFMs24XK7AYAgxeP94wfqmXzFanR3qKSbxvKm/BA5HUkDrzh5pOijL7mpFvV6iGMgmPuJ9sBpyGtJCqnpVXLIlKnUKUY22/UO3q7dJ54vhJ4Ny1V6tZxmfyVcqNsbmjkljM3kWue+GGseLi9c5IUmVuHkXMiYUXkHvit83+FzVJKdGpUSqm5ggjaVIEmYEEET8DvjqzSBmg7VcquVqNnF3OrgeYSSTbgiT04j4xTT8WrmGWjTV1Vlks0DfzCLe27q3QcXNjEzn4ovl9hpIpG8OsM4N4HI2HibzcYp8RaOFpPmMufKq01JBABBAFxHfse+Al7rO6yNmWjRprUquEVCYkhVg9Og29B7AYyer6zU1FKtLKBRSHpao1t/sojj3OHOkaQxpq2Zbzq3JLwQk9FHC/SJwgyjmjmszSSNoC1GA/7rWAHEgffGmbaVoEIqTyV6n4gRMo+zaK5UKQP1SBBmL+nif84Y6BlkNCi4WN6UyIiPSN0C3Uz9RhXldQSjXrUyqjzPzGJgFgFgiT2sfr84vyGvNlqcCjUqIAWVEIZlkzttyATYjpbCRaQ9NGazf4sVKgpo+zzHjbx+o8e2Jg/JapWKA7CJJMdpJPbEwa+ECn5Mjpucoux3kqq3JC7mYzYAcAdyf7421Px+lXM0alVClKmDuCydxiASOw5HOPMMrqL0i7Knpe0lZxfTdmAqEegGL2n2tjTPSTBFxnls900zxPSzWYqCjW2p5Q2yACzS0m97AgR/jGT1PxD5VdUSvaj+klt4LSZ7mItFiZ+/n2RLfmPxsuSCf4rAD98UZhyFBiJ/T0+2I+hkX07i2mbDN61Xz5ZXckljCKNibR9z9ycc5WjTlkqgIAoIAMBzNzPtbCTSc81So07lcIDAH6mBHQe3OGelZ81ajNWpSqygAUlgeSYMe1p+84jqQlbMVtPJbkMma7b6NYBkqEUoHYXJ6tJt3wt1ivVWsCXZqsQAosQebcnFDZgDNIcuHSkGHmFUIAPW0Y0AylU1fxSlXXYVRTzsnmRYG3bAl7JJy8fn9DuSmhk1cUqybiyEOwJgSLspHTHz8VQ1CrEEJSUk3uzEwAI4FucUHNLUeg9VSlAsQwLxu6cD+Ge+Kcxl8vSzqbRCsGACdT04/3jC7a83Tr4DY10vIMrVqVKrFOmwt+o7iJPPMW++F1HMlaNRXol0Ukb4Hq2mCeeO9sW6flAKtY06z0eLWX+G7eod+vzhUmoO6JTAYI0hiDJMXsOxN74pC7bXwBscaRrVKlQOXB3NTLGUUkHdwf/aJwZnNFVFpuak01Mb5CkzH12zGB6aUaNEtRpOGMAwp9RAnaTwe8YCzDM2XqNAFJxZS0lBaZHU82xJpOW6OL8/IeMBL5RRmHaixq2DVGDmATYC/U/wBvfHWW9SipmdxRv0sxnYDEdLX7YFqf9CoNJlrb4DAG3E7rdB/vUYKQ1Ey93V6SwWhbkAzGDqJr7yGijL6PTbLO2+RuYlhbaAY3e1ox7ciJ5ajlQoAm9gMeE6pmyap2IfLZF9M2k2lwPvHaMejeC6mYq0moNUU0qcKKwHrP/aAbSBHqPcWm+D7uW+eimlV0JPNrVdQbKqC+XRwzEdEMGDNube4Bxrtd1Cmnl+ZAploM8G4Ef8HtgjT9KpZR6jCQHgszEm4m5J45+MUeJ82HVaNEBqjn0gGI7seygXJ7Y5vpGjstzGaczSQDd0gQAD/jGD8T+DtRNNylUPTncaKu3HNgQAfjG40vSmyio/mNXBEOf7qOYHaZj7YK13xDTyuXOYY7ibIixLseFXv3PYA4EG4yxlnPgo8Naa2XoIlNlYRPsCbmPaf64XtquZbONRzKIKFO48sE7pHpJk8CSIA5GPvhPxCPKQV0aixsEcEEnsv8w+PrGLcrXq1M1UrmkoozsUE+shRza1zJF+Ix3wA+694mo+S2Wy7edmbbKagmCGBljwFEdT7CcMNG1XMbP+ooBTH8DAg/eDjIJrFCjqtZdwQ1aaAMR+lhu9J7SCDja1KrLl3O8MwUmY9jhpugqKoxeg5inm9Ur1iQWUQhHHvHeIAn5x6FXyi7SxMR+3vjzvRatGntDWYWBHM4c+HMxmKo/OrvP8pUIQOlgoJ+uFTDKPg68QU2rZugKFYU2poWcxO5WIhYkT+knm31wdqNHMxTVyhobwapUENAuLSfTujdfiffC3OaeuVzlOqqu3nKQ6KC20rHqAvCwYPa2L/GGts9MZLLgmtWESQRsXqb9SJHtz2w0VcgdKg3xBqaZWg1ZhLNBCnqxsoHv/S5x57kVqUcz+IrFW8w3PAVoMDni5An2xp6/humcuPPLu4gh2LEq/Sx4PA++MnQz34ukEpruZxBXm/X6dZxSbdD6aQF4uzAbMhqTSV6j+n9seg6Hn8vTYBqtNd1MbmYgeoTuniJkEE84o0fw3VSglOp5aEWkEsTz7AT98FnwfQYhmLFhwRA/t/XHJ9UC45tjWnpxUAU6IZB+lvMFx05xMU0/DqgALIA4sn/AOGPmHqPgS/k8DrZtGDkiDt2oq8L7n4GPtTOA+WgEhYCqOp9/nF1WkqKwC2U7ZAkT88Yo0OutNqj+ncRtXcP0g3LieDaB8nGpMbVTi0ih6zKzbhO8zC8Wm37nDMV2qqtRwoUmKagfpC9vkxPU/thVq+cD1AKaFVUQvc+5+cX6LVrbttMeoAkWkjub4Mk6E05rft6QdT1X8NVDxJ2kEdYwypazV2Go1EQ5LqAbwT/AMYRDKrJLMWY8nnBWUzK0nFOrO2LWMr/AMHGbU0oSzVjy0k5uU8IP0vWKr06pCIEDFrmDfpwZwYuSq1MqKqO5DySqtAXoQvUgYXaXSIredE5QubN1HcjoJvh5qufqZcomWdCKqmVNtvePbGbVVT2wSv+OvqYngETL0sp5RvWRvSskSCbzxx7fvix6bHMjyqO07JLmBBHJtwIMfXHOuaXSFBGpGCoVg0nk8/JwI+Z8qtR3Zq0lSbdueO4GBH395z94FOPEWZ8wpTrBZEH0A7isweI6T84J/8AK6bVqPkViiNPF/4f9H9sUakrB1fLy5KnzHIkhSYm/J62nr3w01DKUadBBSKK+9RTZY3Em7E8zYkH6Yfcowil2GzivSrLUNFQhhAyuRJ9rfb74py2nIlNazM52HfVEnb7z0sZ+YxTq9KoKivTdnqBPX0CqSYX/wBxicRtP/6ZqlWrtEb/ACw3pBn9McsZ6TjkqS+TuQyqlOu5FKooJpkMYBETxfrHUYD1BqC5ULRJiVDkGQB89ybWwamUanSpVCtNohyAYsRwDBmOf/jCsZVdpXcRUFQSp/SCb9v0wevtienzzhAySmBTaotGGQrcvIlouQCJiIue2NN4O1lssMvSVldKhEqeZdo59rG44nCnUMqN6+cQRthYkKb3Jgz2iMarwvpNOjlXzLKFdlOw3kJ0PsTbi8R3wNXXio39sto6blLAw8R6y8hGpmnTZgr1CR6ATBPzfrxixMluzDPl0AFJAiOLCYjb7iOfpjOZbK5zUIRyCqwW3CxmwJjk2mPbHoGi5daFBKDsoKDbMxPuL4VNtZND9rqildfhlyvlN+IKbjI9AA/i3cMJtAvPMc4yHhjwwuVz488CpvVtlSLbplpHRiJI+uNJrGbp087QM2FNwzRYbiu0E8Anaf8ATir/AMQdRFPJl6JmqxHlFeVIIJb4AB55464opO6BVIc6xl0FCo28E0xvVjwpW4/oQfk4s0bVaGZorUR0ZSOhFvY9RjzrStKz+oZfdmKhCuJXebnsdggAH/RjeeG8lTNGmvlKDTXYxjhlsfpaZ7XwXSdHNYsVafk8vWzteogSpcDzIBggAEA/Tpg7N6HTNVgSSGUDZNpvyP8AThV40zTZeqXoAq4pyGEbJEmCDYmPrj7oWjvUUVq1eq9V7khtqg9gFgWwn1GFPhHQgmoVhULlaR/Lm4Pe/UiQPqecek5ulSCl2A9KmW7Dmxwn0vJKN9I7QyN6Ly3ee8yecKUzJq5qvlqlZzTUrtBACkx6lDAXg8if6Ybdixa3PkF8AZ+tVNX8QT5xPLWhegHTbzx74YeKiqrl6hIFZKnpAIkiDI+OD9Mfdd06n52TRTtl2LAGNyqpkGOfUUMexwX/AOnsuPUaaGpJ2uFEif7e3GDF5C6uwfxBmFoZStWCln2MFa5/hLfAE9R1wDpmXRBRqUkClFAkgWG24Bi4+vXAeZrPnVaiGalRRmRjC/mbTEr2W3M37YI091oxli26FlCeoFiPpI+hGKTkugxtHWe8XIgqTDFTtdoqSvsFCmB1s3a/YfSNbau5ZQ4LADdt22BItvd/5ZPpHvhfqunKtWvTUejyKZAUDmSIPsQI/wAYYeGq6haC91Ikd90x9m/rgp2PSrBmNT8VV0rVEasqFWI2hRYAwOe4g/XEwm8e6A75+uyxBKn/APws/vj7iiUPJHe/Alo5eoctvq1Ds3ein/Mep+gxXn8uaQpOwUFjIX27kf7xgfL5l6pREUl+FE272m2LsllfOFV6jTUWDtPUdT9MachuMklHJxp+WNQ1XElKdOWPQE2E9xOKq7tRYQCCRcAxIOO8tV8lnWSEeJgm4Bkjsfr746zNV8zVasoAANh0HbDEkpJ12EVM3WSkEVBTM7mMnc3a3AAHtgjwtqdNGqfiBJeIdiT/APOFvnVX3iTJs7G5v/Y4s2XVQu2wEk9QOZ6cYnOKlFxYZQ3vk0Dh3arQoJFGATv9Mgm4A94x9qPlqmZRXRqYAM9Ib+EfHOAcrm3dZqMy1WICTYQevvOGC6eKOaHmt5zMCo3C0jsP6YwOoun4fF/mZmrO8npLCWDhk3yoYkkRzF8cZqqrZhaT0gpUE7jcSRbkm/J+2L8pp5pttqsadNnmUaNv/b9T1H98Ca4tGmV2EsrP+YB+raOJNzJtwTOBB7nzfg54GdarJVEUNVSJgwoEdSOsdIwJVqUaS1Wr01SqWLekTE/pAOKNLp00zDbKhWFUqrWBveZMxgXy6dXNuazFqVyrMbOYgnt0x0YJfSr+Qt2zvS8+aOXesHVnYg7WM7ibADrx+wOCNKNJKYNdWFV2JIInm429ADjrKZHJ7agaAQxCMwgkR6Sv2xzVz6ZvyqNUFeFY7TwvWe5gYdyTuk/kVWEaLmWYVMu1ZUQNE9NvYN2HcY5yS7A9OGcuWCu9gb2aZva+DNRyNOggDEBIhDyZBtGDM5QpslMuzbAwE7YmQReFE83NzjO9SN4WH8FoaUpKwTTKqGkQ0sxMAxIJmJnGu8QZc0qOXCyw3QwBsbWMcWg4z1VjSUbFDIoge3tHXnDPw/lnzNOkajmRJiPSsWgDq3veL4w62Ll1f7G7Rk5POKDtG1NqTkbdoMTBG4x26HBGfzqVc1RqesU9xRiUIAtMEniSF4+MCahkPJq06ztNNTcRBk2H0vjjOaq/m+RRRSKlijAxJ68GP6Y7S1nSjFYKy003uN6cjTZdpUFT++Mbq9OitGq9WrJpsyLJ7EgD6cYoy+l6jRDE5qKZP6VvsHtuUn98WN4SoNtrhmd19UsfS3cxxPvzjfavKM6jXY/07V6TU1aQo2ix9JX5B4jCxq65rMlaFRwlNBPl1IWoWJuYuYAAm3J7YJTNZZqBq2ARGJ4uI4wH4M8P0qNCnUpGHKiSOvscBROZfq3g+nWUqtWqAOV8xiCfeSTOOcrm2yzCjsaoyoCpsOSQJ9/Tg7U9Zqo/k06QdtoZm3bQoMwOCZJH9cJcy+YFdc1VVFpBQrqsyBP6iTyBN7C0nDPIFfYLrFLNJUWo1YUxXqbWKCCJEqobkCxE8kxhxU06l5DUDyF5iPeR/wB3WccZmnT1QbZ/6ek9ypje49xwqz0uT7C+f8W5N220co9W/pYFiQRHQmWMccnBcbo5O8Beg+HUNOhUrZmoao9a+qyT7G/ET0wz8S52tQVaCwWrHYjzG0kckc8SRHXtirQslm0y6U2anuAABI3G3cWuB74T+Nkr0KuVzD/moCwOxSIaxmJPQH98VUbeQcDzyxQpbFAlIBA6cSfthGmUWuxzlRmAUlKahoEAwzGOZI7xAGOtGc6m1SZ8oEAiSCx52zaABE4H8U1XpgZSkhYsTsIj0gRz064H91DrgHyegVzVevTcilUG2GhiRz1ItMx8nFPgOlmGNUADy0c7XbuDfbtgtBn2uRPTDWvrNdadDJin5dV1HrJBVQBBK3ub2kCJBvxjVaZkFo00pIFCItzP+2xRX2K3XBldQ8K+ZUZ2zbAmJhI6DEw9zPibJU2KPXRWFiJ4xMNYp4joeQY1FKRK3LHgW5+nP0x1W3Ud7oZBO1jHc8g9LSPgnH3J5pRT2g7e+ORNUFFMU0O5pPJ4AHc402HaqwBZtgUQKdzEm0cdr9ScMfDma8rejrIZSCOvyPcYHzWVG5KZIQxu+O31OOtN041HIX1WuzSNo/mkH+uCuBGm5t8nFTMvRKsLeYpDDncJ/wA4+0cxTP62MRwBJnBVHTFZiFUsVklp6DqZ6YDzBWBNmYxPSLz9Z2/vgYZVxlBNushC5xppmpTkLJMkyZ6/QYYZzPs70Cjl2VpVQBIPHPWcLEqNVLvMlRLSQLDqAYkW6DF60WUI6skubXuCt59u0++Iy01d+CE9KO24s0GdBzdH8xwkKSEiLgnnubHn/GKPDtPcKVasQwEwu3giILRz1wNTZ6hVzsA/+md19vqJk/Un784Mr5c5dyv4mzgmQogE8ge0Ht1xlr2uCf8A55M/Lss1SlTzzDyTC0xG4j9TdfgY7yGmnMs4qDYcubKIgta/x0j5wuoUHpBUpT5hEqV4YTeen/OHlXI7KTVQXVwQXBa73hhY/PviMpbPanjryv8Ao+x1bAytTM7agemhp1CNoE3UkSfn24wXp2k1GpO5pGoxJ9NMggHaRtI/VMkHtGD9F0qnWrAUw1IKvmVIEbl6CTyZ69PrjQ5vQauX2vl6vlhmBqiAbEjc3qm4HX2xKWtXtiV09C/6jN6Dp6PVoJV37qZ9W9W9J22kkQL3+2NprlSjSokEbpsFAkm/YduZ6RhoNHo7W2jaTcsDcmP1E9T84w/hrU5yxShR8x1JFSrAVSSTeeSSL2EYhOU2t3X8/PRp0tOLwujrWNMWqw8uqFDcwenW3eMNNFoZeinoYxM7QSxHSYEm/wBscaDoBoMWdVOYqsTYytNeYHbiTHWB0GCtMpeQXo1GDOztUlViZ5gX4/vjNru41eF47LQjFPBRlc3WzOZHlUWFCnO41Ikv0i5sB3vxxgzPg06tKpBENtYdbj9wOfphpkz5MHaVVj269/rhJq2rK2cVFV2CLJZVZlBJNiQCNwEffDQjuUZRxXQu920aZsyi0mqMfSO39AO+PP8AUPGH4VjQpUWNWoZp7wAqByYJAJJjtb5wX4iq1a9WnSy6VQwBfcpKA8AzcWvEnvbFGb0o06TlqSpWjdLPva15B68dDjYtfiTWBY6aXIZpHgVPIVKjOZgkByJPxxgd83UyFX8PSYFY9O68Dphno/jSm9BIUtWNjSXlT3n+X/jGf8VOKdWnXcgNUb1r2UR/QWxbctyTYtSdpjjwzla9F6taoC4q3Y8tabx2vxhhruppVpnL0oL1lZRPAEXY+wH+OuGVLVaZjaQRHI/364868Qa+E1LzqK76SUwlWBI5JPzFh9PbFVG3aJheZovp+UKUayVAGlgLMJuQLkT7GMMPDecy7UadYPFUrD7iQVHUHt17XjF+nZqjVoedTI3GTO0TcmLRIHBi3XGcFOrmmShVphnaSC20QLmRHqED5xSP6jJUaXM+O8qlRaNIGs5gqFHp+/HvPGBPGebzVbLkrTUAXCgySTbtA7R74zeteDMxlqq5pXV0TkKsFbRcTdfeceg6Rm0zFJXSCI2tebi31mMUaWKYmMmd/wDD9iuVVjMlST7ST+94+mPhylStmqtQtK0gEAEQx5a56CQvFyDi/J5Mo+ZpyQi1NyjgwwBMHsSScEaCiUXOXVfS48xCb8N6gT1gkR/xiSi3O2PupC2vl3fNTWCyyEUSBZIiY/7uPoPkYsTMVKmcGXzFQDLbJA43t/Kx6jqB1n2OGWs5cilu27qiGRB4IMmCb3jbHYx74mfoAbaiGzlWH2Jn2gE39yOuA5OwrKLP/TlH/wDQpn/+pP7YmFeqa/UpVWpkXWAb+wx9xWyefB41mKIeoWpA7BwTaf8Ab45ypIeCSi8H/e+G+bzCFwJIpL7CSB+0n7DA1XLy5Zl27rqnYHj6xjY5BWi0155PtNaQD703uf0uan6fkR6p45GJQ1BKSuisYeC1u38PJt1xKempvbzG2qiyR1JPAHviw5dAhZyqAAwOp7DC30UjDbclS/UBqamxBVZ2HkD+L59sX5FTmHG+Fp0lJMDgf3JMDEyeT9CPAJckKoufmBf2+mKvOKu4AsYBExcYbjghl1KT5Z1qGXZUUkBd59PeB+/b7jF2k7BSqhlmpI2tPA7RgilV3+a1VYqQuyOAoHEdo/fAbrcsJ3RxgPwPGGd5euYKrE+hj6hx9j0vh3pVaga0h9p2Wbm/uTP7d8Z1s2hosgUlyQQew6jDfKsrrSanSLkE7rWjaR15aTMYhqQJa1b7iarK6hsekzev9ShYEqOS1h3Aw5rBcxtq0kV0BIYmbm1h8e+E/gzwu9aa3nKiNHpWCw6XJsp5tBxoMlmqNBatFXG2kxhiZmb89SDIx4f4qMVK4cmn8Pua9x1peUqlvOA8sQV2RJccXuIEi0Sbfdg+o1Myroi7CvpLG4mOgsevWPrgHRqmYO5WChQSVNywBMwRxN55sMDZzU6+VqVd9PzEb1hkBtAAIIAN7A4zRuUtqr4NLh2y/I5bbTNF6lQqgCsu6zC/1gi0TiaPkgBWSjCJIgKOD1t2iP3wVn8pSpo1R3/OYDd6jAjgAcWnkjBXh7Jq+UR1MVGWWcCCT7g9OwPSMc1Npu+QOcUgXO661KogdPUolnsFIFjA53GbDj3ti3/yx670s21gp3hCIaIImZsYMxhnpeloyF68VXk3ZRYA8ARbjF1LPpTpVd7iKbGZIkCAQO8wQAOTbFIp7fyIuaT9qAdb1NK9E0UDNv8ASdoIK37xzgWpqC5NadKqoBIhAsGYsI6yZFu/fFFTJVlLtQqQ7nftcAoOIHQiYvB6nEpZXMV8ylesiJ5fCBt8nuDA7z9MCE01dj7EsdDPIZGqK1TMBAgdFBQmSdu4zawJmPoMGZOilZyahlhwJsAfbvbr2xxqXiOnShLmo3Cx19zwBbAZPl5fehAqbZ3EcsSOfmcFzVpXgntlJXVEzfhWhRqefSXa7SOT1E2Ex0vgfV6xWizghWUAcTcmIHz/AM4Xa1m8wop1t+4ltuwwqixMiB7e5wHqr1Sv5wT80gIqnj08yegjkd8I16mopXj+CyUoxzkG1nw04UlK1VSeQXMGepiL4mmZOhQpJSrEU3iTY+uf4uvOGGQ1SoIo5obWiVYeoMvv97++Cs7qv4emagrURTA4b1E+ykEfbHswknhcEarLE+qZak6krZVu1WCoQCDY9ZvfgfsaNM0erlPLzL1GebsD/CrXiwmw5vfAxXMZ/LGtm6sI/wD9OkvpT2IFyfuYONvnNKNalQKk7TBP/tiQLGwi3vbF9qWEI5ZQUmd83aEAamVJZubRxbrJFu09r+c6N+LpZ+rlKDAUnYsZE7F/mH9ge4+cPtKz5oZh6D1B6EUc7d26Apkz3iZsFvOD/CuXDZnM1FsDUCX5hRx8SZ+mOi3WQNJZRNVyRoJ5oDsxgMxYmQGAAI4n1E2HTAWsOqUkrEmUcEbf1QbGI6QZ+mO//FDVXoKiUSoIO5l7i4sOJJJP0wt0HMvWpA1su+xhzwxFrxY9fnkjCvDs5OzT0c1R2s5qoC4kEsAD7m+Mro2v5cVETzN5QFfQGO8AQLkQqWBgGCf3T+L9IpjM0EY7aTzPe0faQZxqMv4Ty0/kHa6ATBNwbiQZ5vfBaSVs6LLc3mkqOzslPcxkyqzj5jPZ7wXmXqM1jJteLdB9BAx9wNy8/wCzqZgfJcvu5WmQWmAJ7e5wxXUSpaqae53MIzWVCfb2H9MBZ7TTRYoagNpBW4PzjirkF8vecwGYGyAdO5JMg82243UI5yj1lnOcoMs1VctL7Sx6kiZjmLHBea03ytin11XAMcxPA+fbCwCo7BApkX+15+2GFRqlPbVCwTO3d/F0kDt+30xzOjKrfRznkWgzJuJqbR+g+lWPN+4HbC+nSaNw9KzE+/YdSb4vqIApMcifri1tOZEWTcqGHwb460kCOnKcshGYyVcOKjuWcgSHNyCLfTHKVhTaXpE+02+4xKWpzHmST3H+DgrP5lVoXpN67K7GB7wO+JXJvKNVacIXF0Kchki7Ox/QnqJ+TYffGhyOSqSmwQzcL7dzhFk60A+k7SQfmMegeEsx59ZmYbWtAgwB0H9fnEfxWo4wbqwaUEoV55NV4WytLyfL8li4tUMAbm63m47YT53S285qFCn5awGO/wDh+ItHGNfpdXyt5ZTzNu2A85TqVKpqi3p27ItHue834++PD1Zem7fL6Y+jJttLg5ybuNzMsLzu6Hobcxg3S8g1dRXZmUsDtSBAHSR1mJ5xXo2eqZqiNlLZt9JL8Eix2xyPe18W5XUnyoFPMAXJ2leNs+8XEj74jHTUHcjpyk7S5JQQUqdXdBqrzxMHj4Ef3wVR0haSmHfceTuPPsOP2OAspoFLOVDm6qtLDaih2UBATE7SNxMkmZHA6SbM5k6lN1pLV/LKyN/qZYtAMiR8zjQtKGmt3KJbm3SeRLp+Vz3m1VpVd1PeCXqgENYSFEWMQDEDFXiFaaOiGhNb9anncQQZJIveOcafL5tMrT2uXIEnfEzJJvHHPYCIx5/qXi8ZjNpVNJ0y6rtR2HqJJF9ovBsIx0Y+qrj0UjJ7so2umVKjJ5lWmaYbhSR/UdL9Y4wo13xLRosqhrkkSoLCf5bdeftgjUdf86hUWkjllMSRAvfrePpizQ/DlKgu5vU/Lu9ySeY7CeAP3xDbpw9zu/AU7uyzUdIpOhqVGiqVAV5jYb7Y7nc3HXjBdXQ5pq2+ozIJu1mjuBacZfxbqjmpTyuWTfV2yxJsgJsf/cOfaRh3qeq1qWQrMQPNWmTKcDuftJ+L4qtPCUnzwBueHEqqZ8MUbZNMGBaTJHJHbFdfNU1zSbFJBSW2gsFEkCwnbwbDCvwtUrMqOacCZIngd47jthsmeojM1KaECQGeBHqPU/QD7YzP2XGrrx+5WsiJdT86q1VZWnTdqe0iDB2k25H6bdecWeI/DdGtROxF4lSojkSDivPZb8RmqjUnZUUBKm2CGabcg/pBuf8AGNFpT7qMPeojMptfmfpM49fRtJPhEZ+DMadpW/I5JjJNF2Rxc2Zthi/pizW98MtC8SbKn4WHbySZEEg0+lwDDCABPPfnCHM6g9LN/hqTEec9hyJJ2/T+afYj3GtyVKnl0JCiRdzcuZPpEc7m4A6WHbG228kmujL6+1NqxzWYVqCtCKeoA44gg9Y+MX+DvE+VoCovngKtQuWcEM6kH9PUnd+xx34lFXOn8JtQQytUKz+UOQpPDP1t/wAmqj4Ay7KF9QdRO4MTfoT0+kRzgKly2B2W6hpdXN1znWUFZVadOoYVUHDN/wBxPT3HbGoy2Vc/qYbQL7RtAi9ySeOn1wpo69/027a8gAELBvMEiZ/cYIzWeavQPlsAoFwJJbpDGxg9eJv0x1WroBlNU0f8fXNR6zrTVopAAAkWEiRJkieO3bGk0pDkxD1S/pmGALQPdQP3xj8r4tYU9q5dGIsp3EgfFgY9uMW0dezVSAwpopkQoG/3AY3HzimxtUykdO8m9/8AVWWtFWnxNyf8YmPM10wgfoA+YP8AbEwPRD6fyZxV3o1TgLAY9JMxbnpjo00JBU7YAmRuk9TyOe2PmJjUlkhOb2fmfaqMis6tKkAEkmT2+ntgTMI7QztHbrAxMTBlh4F0nujk+MT+gx/n7dcNskhq7FJghCPsCcTEwkui34fmQmq0m3kAi9/jBe1qapUf8xQ1kYkqe9pxMTDCeX9QuhnEZ/MZQ17UxYew7bR842HgrxCgqOKy+upJVgLWExHSBOJiYyfidNS02maoycoqzZ5Os1Sn5oYwxlV7D3xxldSes9SkoCFVu3PNrYmJj5lL1NSW7rgqlUXQZoWoDLBcs63E7SvBEz9DfEzOfFevtamVFIT6tp3TYxBMD5vxiYmLasntf32TjFXu7PmW1JsvWSkoBpOrMq8FSCCYPa5tHQYR+IEzOYzKVqaBmoXC74EEyQSeSY7dBiYmBDVl7fp/I+yK93ZomrqybzMFZIOPIm0ytRzCICHEbkHBAM97SI74mJhv/nzcXKK4GaPSM86ZemHiUIAYDm3X5wRp+YXyEq1Czl2Kop9ifoBAn/YxMTAnBOCf3wSXP5i5k8muMztAVrMBeLEjm5wzz2ZFSi6UyNzgoSQYXcL9pxMTCRzGMnyUkA0c2uTC0WO6qwO0Ac278Af7fCato7oxzFQI71WjjgRwJ6AD2x9xMPFuNV/cs/5BMYaFl1Sn6FgO5IHQEmJNx6ZvGB9SQ08zuUn9MkSRPA5H+nExMevp5iiLEuiVGrZ78S6KqKH2wSTu43Em/Egdu2NR4p1JaFBKyqPNeoPLBFixXlvYR+3xiYmNSyQXJdpunfh6IZiXY+tiY3Enn2kn7fGKPG9d6OUcUwPMIBBn9IPX3N4HY36YmJhFz+ZzF/hPQ/yKdQ1H3vcgGAAR0+Lc4M1zRajqFOYc0Zl6dl3COrKJ+lxiYmAm7D2Dan4OpplWrZYEPTBJQkQQBJE9DAtBifuMz4cylauqvvRSeF2ljFrkkjp0GJiYtKTSVeQ6cnZsG12jQ/Kam25QAYNuOlsfMTExL1JDbUf/2Q== "
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name"></h2>
            <p class="crop-description">
                Pulses, a category of leguminous crops that includes lentils,
                chickpeas, and pigeon peas, are an important component of agriculture
                in the state of Tamil Nadu<br />
                Varieties of Pulses:<br />

                Tamil Nadu cultivates various pulses, including red gram (toor dal),
                black gram (urad dal), green gram (moong dal), and chickpeas (chana).
                Different varieties are grown based on local preferences and
                agro-climatic conditions<br />
                Growing Regions:<br />

                Pulses are cultivated in various districts of Tamil Nadu, with
                significant production in regions like Madurai, Tirunelveli, and
                Dindigul. The Western Ghats region is also conducive to pulses
                cultivation.<br />
            </p>
        </div>

        <div class="crop-card">
            <img src="data:image/jpeg;base64,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"
                alt="Crop 2" class="crop-image" />
            <h2 class="crop-name">Millets</h2>
            <p class="crop-description">
                Millets, a group of small-seeded, drought-resistant grains, are an
                essential part of agriculture <br />
                Types of Millets Cultivated:<br />

                Tamil Nadu cultivates a variety of millets, including pearl millet
                (bajra), finger millet (ragi), foxtail millet, little millet, and kodo
                millet. Each type has its own unique nutritional profile and uses<br />
                Growing Regions:<br />

                Millets are grown throughout Tamil Nadu, with significant production
                in districts like Salem, Dharmapuri, and Krishnagiri. These regions
                have dryland farming practices that are suitable for millet
                cultivation.<br />
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
            location.replace("tamil.php")
        }
    </script>
</body>

</html>