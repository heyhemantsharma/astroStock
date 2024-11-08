<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro Stock Prediction</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Astro Stock Prediction</h1>
    <form action="" method="GET">
        <label for="sign">Select Your Zodiac Sign:</label>
        <select name="sign" id="sign" required>
            <option value="">--Select--</option>
            <option value="Aries">Aries</option>
            <option value="Taurus">Taurus</option>
            <option value="Gemini">Gemini</option>
            <option value="Cancer">Cancer</option>
            <option value="Leo">Leo</option>
            <option value="Libra">Libra</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Sagittarius">Sagittarius</option>
            <option value="Capricorn">Capricorn</option>
            <option value="Pisces">Pisces</option>
            <!-- Add all zodiac signs -->
        </select>
        <!-- <button type="submit">Get Prediction</button> -->
    </form>

    <div id="showPrediction">
        <h3><span id="zodiacSign"></span> : <span id="prediction"></span></h3>
    </div>


    <script>
        $(document).ready(function () {
            $("#showPrediction").hide();
            $("#sign").on("change", function () {
                var select = $(this).val();
                // console.log(select);
                $.ajax({
                    url: "./findPrediction.php",
                    type: "POST",
                    data: { select: select },
                    success: function (response) {
                        if (response !== "") {
                            var prediction = JSON.parse(response);
                            $("#zodiacSign").html(select);
                            $("#prediction").html(prediction["prediction"]);
                            $("#showPrediction").show();
                            // console.log(prediction["prediction"]);
                        }

                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>
</body>

</html>