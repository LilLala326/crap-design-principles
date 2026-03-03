<?php
    $pageTitle = "Quiz";
    $basePath = '../';
    include '../assets/inc/header.inc.php';
    $currentQuestion = 1;
?>

<main class="quizContainer">

    <h1>Interactive Activity: Quiz your skills! </h1>

    <p>Test your skill! Below, read through different questions to test the skills you've learned from reading about C.R.A.P.</p>


        <?php
        //include('../assets/inc/quiz' . $currentQuestion . '.inc.php'); 
        ?>

        <!-- <button onclick = "nextPage()">Next Question</button> -->

        <form name = "quiz" method = "POST" action = "../interactives/quizComplete.php">
            
            <?php include('../assets/inc/quizquestions/quiz1.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz2.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz3.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz4.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz5.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz6.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz7.inc.php'); ?>

            <?php include('../assets/inc/quizquestions/quiz8.inc.php'); ?>

            <input type="submit" value="Submit">

        </form>


</main>

<?php
    include '../assets/inc/footer.inc.php'; 
?>


