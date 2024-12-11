<!--INDIAN MAP-->
<?php include "text.php" ?>

<html>

<head>
    <title style="font-size: 40%">indian map</title>
    <style></style>
</head>

<body style="
      background-image: url(https://images.nationalgeographic.org/image/upload/t_edhub_resource_key_image/v1638892233/EducationHub/photos/crops-growing-in-thailand.jpg);
      background-size: cover;
      height: 100vh;
    ">
    <div>
        <button onclick="myfunction()" style="width:4%;height:7%"><img
                src="https://cdn-icons-png.flaticon.com/512/25/25694.png" style="width:100%;height:100%"></button>
    </div>
    <h1 style="
        font-size: 40px;
        color: darkgreen;
        margin-top: -5%;
        margin-left: 35%;
      ">
        INDIAN MAP
    </h1>

    <div style="margin-right: 290px">
        <img src="indiamap.jpg" alt="Workplace" usemap="#workmap" style="margin-top: 1%; margin-left: 29%" />
        <map name="workmap">
            <area shape="poly"
                coords="211,491,226,485,247,473,271,460,267,448,261,440,253,428,240,421,236,408,223,412,209,409,199,421,193,438,192,456,191,477,193,491"
                href="telangana.php" onclick="telangana()" />
            <area shape="poly"
                coords="176,600,189,588,202,574,218,564,236,557,244,557,238,572,234,592,237,607,230,616,220,627,214,636,205,640,198,655,189,659,187,649,186,629"
                href="tamil.php" onclick="tamil()" />
            <area shape="poly"
                coords="135,576,145,587,148,597,152,608,157,621,160,636,167,653,174,656,176,645,179,628,171,621,170,608,163,597,153,584,144,577,139,580,150,596,152,606"
                href="kerala.php" onclick="kerala()" />
            <area shape="poly"
                coords="168,508,170,525,174,536,186,544,198,548,206,556,192,561,186,571,185,580,173,580,163,583,151,571,141,565,135,556,128,535,124,518,122,503,128,488,131,479,142,473,157,465,172,459,184,445,182,462,182,473,179,484,177,495,172,507,169,515"
                href="karnataka.php" onclick="karnataka()" />
            <area shape="poly"
                coords="245,509,244,521,242,538,229,546,213,546,201,533,192,530,179,519,185,500,210,496,232,484,252,475,275,465,287,451,298,445,316,429,328,429,325,440,302,458,292,468,281,480,268,490,252,496,245,510"
                href="andhra.php" onclick="andhra()" />
            <area shape="circle" coords="113,503,5" title="Circle" href="goa.php" onclick="goa()" />
            <area shape="poly"
                coords="117,470,125,465,140,465,148,457,157,453,168,447,176,439,185,435,193,432,194,416,201,410,207,401,220,399,229,408,239,404,246,412,251,404,248,394,252,387,251,373,244,367,230,365,215,368,201,369,185,365,176,373,154,371,145,372,132,368,122,372,115,387,105,395,95,402,94,418,97,431,100,449,99,469,103,483"
                onclick="maharastra()" href="maharastra.php" />
            <area shape="poly"
                coords="109,34,115,20,130,17,146,11,159,15,176,31,168,24,181,33,185,39,194,44,197,47,205,47,212,47,221,42,240,47,245,45,248,56,243,66,237,70,235,80,222,83,225,98,235,114,231,117,226,122,221,113,214,115,206,108,177,98,169,103,163,101,162,108,161,117,156,117,146,113,139,109,130,102,126,101,123,93,130,89,121,86,124,68,132,59,135,66,132,53,123,48,117,41,108,41,108,32"
                title="kasmir" onclick="kasmir()" href="kashmir.php" />
            <area shape="poly"
                coords="163,107,167,107,173,105,179,103,198,110,201,111,203,115,213,118,216,123,219,129,218,137,220,145,217,146,212,146,211,147,202,148,199,157,194,160,189,158,183,155,181,148,178,144,174,143,171,142,167,168,110"
                title="himachel pradesh" onclick="himachal()" href="himachal.php" />
            <area shape="poly"
                coords="160,123,164,130,152,126,144,128,139,134,141,141,139,150,133,153,128,159,127,169,134,173,141,172,148,176,156,176,164,175,170,170,176,162,177,152,174,146,168,141"
                title="punjab" onclick="punjab()" href="punjab.php" />

            <area shape="poly"
                coords="202,153,211,149,220,149,226,145,202,162,204,172,204,180,213,177,218,183,224,188,232,194,240,198,233,151,242,154,249,161,257,165,256,173,252,179,247,189"
                title="uttarakand" onclick="uttarakand()" href="uttarakhand.php" />

            <area shape="poly"
                coords="139,186,141,178,150,182,161,181,171,176,179,167,183,159,190,165,189,174,185,182,185,190,184,197,190,213,185,218,176,213,166,219,153,192,158,200,161,208"
                title="haryana" onclick="haryana()" href="haryana.php" />

            <area shape="poly"
                coords="125,173,118,173,114,179,112,186,106,192,100,197,95,204,87,211,81,218,74,219,66,220,59,222,56,215,50,219,44,225,39,231,38,238,46,243,48,253,48,261,55,262,59,271,61,280,65,288,75,289,86,290,95,293,105,297,111,307,116,314,121,322,129,325,134,318,136,311,134,304,136,295,138,287,149,284,155,293,133,174,137,182,142,188,150,194,154,201,158,210,163,225,160,218,170,221,179,221,187,229,190,238,197,247,188,253,179,260,173,267,171,275,178,283,178,291,173,299,164,300,157,305"
                title="rajesthan" onclick="rajesthan()" href="rajesthan.php" />

            <area shape="poly"
                coords="197,169,192,178,190,187,193,196,196,211,197,219,195,229,199,238,207,242,217,242,223,247,229,254,228,262,223,268,216,276,209,285,210,295,216,300,224,280,233,284,240,278,249,277,256,280,265,281,276,284,285,288,295,291,302,300,306,309,201,183,211,183,218,191,225,199,238,201,245,203,255,207,265,212,277,219,287,225,270,220,300,228,293,230,308,236,319,236,323,245,320,253,324,262,321,269,314,276,307,286,313,293,312,303"
                title="uttar pradesh" onclick="uttarpradesh()" href="uttarapra.php" />

            <area shape="poly"
                coords="214,273,220,265,218,255,208,250,194,257,201,253,185,264,177,271,183,277,193,279,184,288,188,295,182,299,174,311,166,309,159,317,150,312,150,303,151,296,143,295,140,302,140,316,137,325,133,333,128,341,126,349,132,359,143,360,154,359,165,365,177,360,187,357,195,357,223,287,207,282,203,289,203,297,206,307,213,302,226,297,231,288,241,301,241,286,251,288,260,289,274,289,284,293,295,297,295,306,282,311,204,359,211,362,225,359,232,356,243,358,254,360,262,350,271,340,277,331,281,321,219,355"
                title="madhya pradesh" onclick="madhya()" href="madhya.php" />

            <area shape="poly"
                coords="3,302,10,302,16,297,23,298,31,300,38,299,47,297,56,301,64,296,73,293,80,291,87,297,97,300,99,317,100,309,108,316,113,323,122,331,9,314,16,321,26,325,37,325,48,320,51,329,45,334,37,340,31,342,21,339,114,344,116,337,118,351,111,361,106,367,106,375,101,381,23,349,29,354,36,360,42,367,50,372,57,369,71,369,64,364,76,359,75,349,83,339,92,342,92,351,88,367,96,358,96,371"
                title="gujarat" onclick="gujarat()" href="gujarat.php" />

            <area shape="poly"
                coords="280,318,289,316,296,317,304,312,312,311,314,323,321,318,324,325,328,333,291,325,286,336,281,341,273,348,265,355,261,362,261,370,260,379,258,390,258,400,262,409,258,419,254,428,263,436,270,444,274,436,279,431,285,424,285,414,281,400,290,394,291,387,297,375,307,368,313,358,313,348,322,343"
                title="chethisgadh" onclick="chethisgadh()" href="chathisgadh.php" />

            <area shape="poly"
                coords="320,235,329,236,335,243,346,243,356,249,373,251,366,251,387,252,398,255,404,262,400,271,330,249,329,260,337,265,332,273,322,279,316,286,321,293,332,296,341,296,350,294,360,288,367,288,377,294,384,282,389,275"
                title="bihar" onclick="bihar()" href="bihar.php" />

            <area shape="poly"
                coords="396,285,398,292,393,301,380,306,367,315,367,326,373,337,359,346,340,341,352,337,317,300,326,301,336,302,353,300,345,302,361,293,370,300,381,294,324,314,331,322,336,332"
                title="jarkhandh" onclick="jarkhandh()" href="jarkhandh.php" />

            <area shape="poly"
                coords="280,439,290,431,294,420,292,406,303,400,297,386,305,382,314,370,319,359,327,347,338,347,350,350,362,355,373,345,383,347,392,360,385,366,385,374,302,434,310,427,320,419,331,424,337,410,344,415,350,409,363,399,376,398,381,390,388,381"
                title="odisha" onclick="odisha()" href="odisha.php" />

            <area shape="poly"
                coords="397,347,391,339,383,336,376,328,367,319,375,319,384,312,394,311,404,300,403,281,407,270,411,252,411,241,425,238,438,244,435,253,423,249,420,268,412,284,425,274,418,300,422,310,423,322,426,334,428,346,417,355,403,354,426,358"
                title="west bengal" onclick="westbengal()" href="westbengal.php" />

            <area shape="poly" coords="405,235,408,218,418,215,420,223,417,232" title="sikkim" onclick="sikkim()"
                href="sikkim.php" />

            <area shape="poly"
                coords="489,237,502,236,517,230,525,219,535,213,553,210,547,225,531,235,524,251,512,263,512,272,505,283,494,290,483,242,470,238,458,241,444,243,442,253,450,253,464,255,476,252,493,257,498,272"
                title="assom" onclick="assom()" href="assom.php" />

            <area shape="poly"
                coords="485,231,476,218,487,218,496,211,500,205,507,195,517,193,526,184,534,178,544,182,552,175,563,178,565,195,575,196,577,211,562,221,561,212,495,231,508,233,514,229,523,219,533,215,543,209,556,205"
                title="arunachel pradesh" onclick="arunachal()" href="arunachal.php" />

            <area shape="poly" coords="525,251,532,240,544,231,551,241,548,253,517,264,537,260" title="nagaland"
                onclick="nagaland()" href="nagaland.php" />

            <area shape="poly" coords="515,273,520,265,531,263,539,274,536,290,524,294,514,297,512,286" title="manipur"
                onclick="manipur()" href="manipur.php" />

            <area shape="poly" coords="486,292,476,299,475,309,482,318,490,308,499,294" title="thripura"
                onclick="thripura()" href="thripura.php" />

            <area shape="poly" coords="501,296,498,311,500,322,507,334,515,319,520,304,513,296" title="mizoram"
                onclick="mizoram()" href="mizoram.php" />

            <area shape="poly" coords="444,273,446,260,459,260,471,260,481,255,492,260,497,270,480,271,470,272,456,275"
                title="meghalaya" onclick="meghalaya()" href="meghalaya.php" />
        </map>
    </div>

    <center><button onclick="myfunc()"
            style="width:10%;height:10%;background-color:yellow;color:black;font-size:100%">DELHI</button>
    </center>

    <script>
        function telangana() {
            alert("You clicked the telangana");
        }
        function kerala() {
            alert("you have clicked the kerala");
        }
        function karnataka() {
            alert("you have clicked the karnataka");
        }
        function andhra() {
            alert("you have clicked the andhra pradesh");
        }
        function goa() {
            alert("you have clicked the goa");
        }
        function maharastra() {
            alert("you have clicked the maharastra");
        }
        function tamil() {
            alert("you have clicked the tamil nadu");
        }
        function kasmir() {
            alert("you have clicked the kashmir");
        }
        function himachal() {
            alert("you have clicked the himachal pradesh");
        }
        function punjab() {
            alert("you have clicked the punjab");
        }
        function uttarakand() {
            alert("you have clicked the uttarakand");
        }
        function haryana() {
            alert("you have clicked the haryana");
        }
        function rajesthan() {
            alert("you have clicked the rajasthan");
        }
        function uttarpradesh() {
            alert("you have clicked the uttar pradesh");
        }
        function madhya() {
            alert("you have clicked the madhya pradesh");
        }
        function gujarat() {
            alert("you have clicked the gujarat");
        }
        function chethisgadh() {
            alert("you have clicked the chethisgadh");
        }
        function bihar() {
            alert("you have clicked the bihar");
        }
        function jarkhandh() {
            alert("you have clicked the jarkhandh");
        }
        function odisha() {
            alert("you have clicked the odisha");
        }
        function westbengal() {
            alert("you have clicked the west bengal");
        }
        function sikkim() {
            alert("you have clicked the sikkim");
        }
        function assom() {
            alert("you have clicked the assom");
        }
        function arunachal() {
            alert("you have clicked the arunachal pradesh");
        }

        function nagaland() {
            alert("you have clicked the nagaland");
        }
        function manipur() {
            alert("you have clicked the manipur");
        }
        function thripura() {
            alert("you have clicked the thripura");
        }
        function mizoram() {
            alert("you have clicked the mizoram");
        }
        function meghalaya() {
            alert("you have clicked the meghalaya");
        }
    </script>
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
        function myfunc() {
            location.replace("delhi.php")
        }
    </script>
</body>

</html>