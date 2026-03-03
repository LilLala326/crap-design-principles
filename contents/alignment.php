<?php
    $pageTitle = 'Alignment';
    $basePath = '../';
    include '../assets/inc/header.inc.php';
?>

    <main>
        <h1>Alignment</h1>
        <div class="two-columns-container">
            <div class="flex-basis-130">
                <section class="light-background">
                    <h2>What is Alignment?</h2>
                    <p>
                        Alignment refers to how visual elements are organized along imaginary lines to promote a
                        balanced and cohesive layout. One common method is to align text along a line to create a
                        clear hierarchy. This creates a strong flow for readers to follow, promoting readability and
                        the user experience overall.
                    </p>
                </section>
                <section>
                    <h2>Why is Alignment Important?</h2>
                    <p>
                        A well aligned website is an intuitive website. Without proper alignment, websites become
                        visually unappealing and the users will be confused. A large part of design is to make the user
                        experience as smooth as possible and one of the most important elements of that is to make your
                        design intuitive. Users should instinctively know where to look for the next piece of information,
                        never having to second guess the flow of information.
                    </p>
                </section>
                <section>
                    <h2>Applying Alignment</h2>
                    <ul>
                        <li>
                            <h3>Left-Alignment</h3>
                            <ul class="restore-ul-default">
                                <li>
                                    <p>
                                        Most of the western world reads from left to right, so left-alignment creates a natural reading pattern.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Strong reading lines assist in holding audience attention
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>Center-alignment</h3>
                            <ul class="restore-ul-default">
                                <li>
                                    <p>
                                        Center alignments should only be used for titles or headings.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Center alignment text will not create any strong reading lines, as the
                                        start of text elements in this format will not be aligned.
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>Right-alignment</h3>
                            <ul class="restore-ul-default">
                                <li>
                                    <p>
                                        Right alignment texts are not as common, as the western world reads from left to right, which means
                                        a strong reading line indicating the start of the next line is necessary. 
                                        Right alignment may be used to display budgets or notes.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        May be used for stylistic purposes rather than readability.
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
            <div id="align-image-container" class="space-between align-center">
                <img class="width-80" src="../assets/images/goodAlignmentShapes.png"
                    alt="Shapes aligned with each other, creating a sense of order">
                <img class="width-80" src="../assets/images/badAlignmentShapes.png"
                    alt="Shapes misaligned with each other, creating a sense of disharmony">
            </div>
        </div>
    </main>
<?php
    include '../assets/inc/footer.inc.php';
?>