<?php 
    $pageTitle = 'Contrast';
    $basePath = '../';
    include '../assets/inc/header.inc.php';

?>
    <main class="relative">
        <h1>Contrast</h1>
        <div class="two-columns-container">
            <div>
                <section class="light-background">
                    <h2>What is Contrast?</h2>
                    <p>
                        Contrast takes advantage of the clashing of shapes and colors to both draw in an audience and
                        create an appealing visual layout. This is mainly achieved through the use of foreground and
                        backgrounds, colors, images, shapes, fonts and font sizes. Contrast is a balance between
                        making an element stand out while keeping the design thematically consistent.
                    </p>
                </section>
                
                <section>
                    <h2>Applying Contrast</h2>
                    <ul id="applying-contrast">
                        <li>
                            <h3>Fonts</h3>
                            <p>
                                Use a mix of fonts across your page. It's recommended you use Serif fonts such as Merriweather or
                                Times New Roman for things like titles and headers, while using Sans-Serif fonts, 
                                such as Ariel and Roboto in your body texts.
                            </p>
                        </li>
                        <li>
                            <h3>Color</h3>
                            <p>
                                Make sure your color palate is diverse. Having colors that pop is a very important aspect of
                                contrast.
                            </p>
                        </li>
                        <li>
                            <h3>Shapes</h3>
                            <p>
                                Shapes can really help things like texts or images pop! Using them as borders to
                                highlight them or push them off of the background can create a nice effect to draw
                                attention.
                            </p>
                        </li>
                    </ul>
                </section>
            </div>

            <div>
                <section>
                    <h2>Why is Contrast important?</h2>
                    <p>
                        Contrast is important due to how people naturally perceive things, and how that impacts their decision making. 
                        Contrast is an indispensable tool in many areas, such as retention, grouping, and accessibility.
                    </p>
                    <p>
                        A page of plain text is both overwhelming and boring, but applying contrast to specific elements can add 
                        variability, which helps hold the audience's attention. Another common way contrast is applied is by drawing 
                        attention to headings, sectioning walls of text into much more digestible formats.
                    </p>
                </section>

                <div id="contrast-image-container">
                    <img id = "good-bad-contrast-img" src="../assets/images/goodBadContrast.png" alt="Two rectangles, one with black text over bright green representing good contrast and one with red text over red background to represent bad contrast">
                    <img id="contrast-shapes" src="../assets/images/contrastShapes.png" alt="4 shapes with differing colors">
                </div>
            </div>
        </div>
    </main>

<?php
    include '../assets/inc/footer.inc.php';
?>