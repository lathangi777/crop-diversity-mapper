<!--text.php-->
<html>

<head>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=uwgavKPS"></script>
</head>

<body>
    <script>
        function getSelectionText() {
            var text = "";
            if (window.getSelection) {
                text = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "control") {
                text = document.selection.createRange().text;
            }
            return text;
        }
        $(document).ready(function () {
            $(document).mouseup(function (e) {
                setTimeout(function () {
                    responsiveVoice.cancel();
                    responsiveVoice.speak(getSelectionText());
                }, 1);
            });
        });
    </script>
</body>

</html>