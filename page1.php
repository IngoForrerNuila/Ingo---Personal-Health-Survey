<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PERSONAL HEALTH SURVEY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>


</head>

<body>

    <?php include "header2.php"; ?>
    <?php
    session_destroy();
    ?>



    <div id="mainquestions" heigth="auto" width="auto">
        <div id="question1con" class="col-sm-12">
            <p id="question1"> How healthy are you physically? </p>

            <form action="page2.php" method="post" onsubmit="return validateQuestion('range-slider');">
                <p id="validation-warning" class="warning"></p>

                <div class="row flex-nowrap">
                    <div class="col" style="text-align: left;">
                        <p>Not Healthy</p>
                    </div>
                    <div class="col" style="text-align: center;">
                        <p>Regular</p>
                    </div>
                    <div class="col" style="text-align: right;">
                        <p>Super Healthy</p>
                    </div>
                </div>

                <input type="range" name="range-slider" min="1" max="5" value="1" id="range-slider" onchange="sliderChanged();">
                <input type="hidden" name="lastPageID" value="page1">
                <input type="hidden" name="range-slider-changed" id="range-slider-changed">

                <p class="spacer"></p>
                <button type="submit" class="btn btn-primary">Next</button>

            </form>
        </div>



        <div id="question1" class="col-sm-12">
            <img id="imgpage1" src="images/imgpag1.jpg" class="img-responsive">
        </div>

    </div>





    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>