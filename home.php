<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PERSONAL HEALTH SURVEY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<?php
session_start();
session_destroy();
?>

<body>

    <?php include "header.php"; ?>

    <div id="main" heigth="auto" width="auto">

        <p id="slogan">Because your health is first, participate in this Survey</p>

        <p id="slogan">The human body is complex and we must treat it with love so that it responds
            with strength and intensity. For this we must then know what our body needs.</p>

        <a href="page1.php">
            <button type="button" class="btn btn-primary">START SURVEY</button>

        </a>

        <div id="sportcon" class="col-sm-12">

            <div id="sportdiv1" class="col-sm-6">
                <img id="bkg1" src="images/bkg1.jpg" class="img-responsive">
            </div>

            <div id="sportdiv2" class="col-sm-6">

                <p id="text">
                    <br>
                    <br>
                <h1>Why Are Sports Important?</h1>

                Did you know that three out of every four American families that have a school-aged
                child in the home are involved in at least one sport? Sports definitely play a role
                in a majority of our children’s lives.
                <br>
                <br>
                And sports are so much more than a physical activity for children. They can play an
                important role in overall growth and development. Our team at AFC Urgent Care Hixson wants
                to share some insight about the important role sports have for our children, as well as how
                you can keep them safe this sports season!
                <br>
                <br>
                Sports are beneficial for both a child’s mental and physical well-being. Not only can sports
                help to strengthen bones and tone muscles, but they can also help children improve their
                academic performance and teach them the value of teamwork.</p>

            </div>

        </div>



        <div id="healthcon" class="col-sm-12">

            <div id="healthdiv1" class="col-sm-6">
                <img id="health" src="images/health.jpg" class="img-responsive">

            </div>

            <div id="healthdiv2" class="col-sm-6">
                <br>
                <br>
                <h1>Why Our Health is Important?</h1>
                <p id="text2">
                    Why living a healthy lifestyle is so important and How can we improve our health and well-being?
                    Good health is central to human happiness and well-being that contributes significantly to prosperity
                    and wealth and even economic progress, as healthy populations are more productive, save more and live longer.
                    For a healthy life cycle, you need a healthy and balanced diet, good hygiene habits, staying in a proper
                    shelter and getting enough sleep.
                    <br>
                    <br>
                    In addition, you will have to participate in physical activities, weight management, and stress management activities.

                </p>
            </div>


        </div>

        <?php include "footer.php"; ?>

</body>

</html>