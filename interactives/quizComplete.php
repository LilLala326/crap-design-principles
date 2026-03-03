<?php
    $pageTitle = "Quiz Complete!";
    $basePath = '../';
    include '../assets/inc/header.inc.php';
    $questionsCorrect = 0;
    $answerKey = ['a', 'd', 'c', 'a', 'c', 'b','a', 'd'];
    $counter = 0;
    foreach($_POST as $answer){
        if($answer == $answerKey[$counter]){
            $questionsCorrect++;
        }
        $counter++;   
    }
    
    ?>

<main>
    <h1> Quiz Complete!</h1>

    <p>You got a: <?php echo $questionsCorrect ?>/8</p> 

    <?php 
    // cut content
        if(!empty($_POST[0])){
            if($_POST[0] != $answerKey[0]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[0] . " was the correct answer because...";
            }
        }
        if(!empty($_POST[1])){
            if($_POST[1] != $answerKey[1]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[1] . " was the correct answer because...";
            }}
        
        if(!empty($_POST[2])){
            if($_POST[2] != $answerKey[2]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[2] . " was the correct answer because...";
            }}

        if(!empty($_POST[3])){
            if($_POST[3] != $answerKey[3]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[3] . " was the correct answer because...";
            }}

        if(!empty($_POST[4])){
            if($_POST[4] != $answerKey[4]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[4] . " was the correct answer because...";
            }}

        if(!empty($_POST[5])){
            if($_POST[5] != $answerKey[5]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[5] . " was the correct answer because...";
            }}

        if(!empty($_POST[6])){
            if($_POST[6] != $answerKey[6]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[6] . " was the correct answer because...";
            }}

        if(!empty($_POST[7])){
            if($_POST[7] != $answerKey[7]){
                include ('../assets/inc/quiz1.inc.php');
                echo $answerKey[7] . " was the correct answer because...";
            }}
        
    ?>

    <p>Want to try again? Click here: <a href = "../interactives/quiz.php">Try Again</a></p>

</main>

<?php
    include '../assets/inc/footer.inc.php';
?>