<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team TWO - <?php echo $pageTitle; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="<?php echo $basePath; ?>assets/images/logo.svg">
    <!-- Inknut Antiqua -->
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Inder -->
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">

    <link href="<?php echo $basePath; ?>assets/css/fonts.css" rel="stylesheet">
    <link href="<?php echo $basePath; ?>assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $basePath; ?>assets/css/layout.css" rel="stylesheet">
    <link href="<?php echo $basePath; ?>assets/css/nav.css" rel="stylesheet">
    <link href="<?php echo $basePath; ?>assets/css/form.css" rel="stylesheet">


    <script src="<?php echo $basePath; ?>assets/js/script.js" defer></script>
    <script src="<?php echo $basePath; ?>assets/js/validations.js" defer></script>
</head>

<body>
    <div>
        <header>
            <a href="<?php echo $basePath; ?>index.php">
                <img src="<?php echo $basePath; ?>assets/images/logo.svg" alt="TeamTWO Logo" id="logo">
            </a>
            <nav id="desktop-nav">
                <ul>
                    <li class="dropdown-btn">
                        <a href="<?php echo $basePath; ?>index.php">C.R.A.P.</a>
                        <ul class="dropdown-cont">
                            <li><a href="<?php echo $basePath; ?>contents/contrast.php">Contrast</a></li>
                            <li><a href="<?php echo $basePath; ?>contents/repetition.php">Repetition</a></li>
                            <li><a href="<?php echo $basePath; ?>contents/alignment.php">Alignment</a></li>
                            <li><a href="<?php echo $basePath; ?>contents/proximity.php">Proximity</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $basePath; ?>contents/accessibility.php">Accessibility</a></li>
                    <li><a href="<?php echo $basePath; ?>interactives/quiz.php">Quiz</a></li>
                </ul>
            </nav>
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>
        <!-- Hamburger -->
        <?php include_once $basePath . "assets/inc/hamburger.inc.php"; ?>