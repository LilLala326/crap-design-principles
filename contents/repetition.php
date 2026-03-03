<?php
    $pageTitle = 'Repetition';
    $basePath = '../';
    include '../assets/inc/header.inc.php';
?>
    <main>

        <h1>Repetition</h1>

        <div class="two-columns-container">
            <div>
                <section class="light-background">
                    <h2>What is Repetition?</h2>
                    <p>
                        Repetition is the use of some or similar design elements throughout a project to promote consistency.
                        This can include the use of fonts, colors, shapes, spacing, and layouts. When used correctly, repetition 
                        ties different parts of a design together into one cohesive whole.
                    </p>
                </section>
                <div class="space-around align-center">
                    <img id="repetition-shapes" src="../assets/images/repetitionShapes.png" alt="Shapes using similar design elements (spacing, color, size), creating a sense of consistency">
                    <img id="bad-repetition" src="../assets/images/badRepetitionsShapes.png" alt="Shapes using different design elements (spacing, color, size), creating a sense of inconsistency">
                </div>
            </div>
            <div>
                <section>
                    <h2>Why is Repetition important?</h2>
                    <p>
                        Repetition extends its importance beyond just aesthetic appeal. It establishes a visual rhythm and
                        consistency, allowing the overall design to be intentional and thought out, rather than a random 
                        collection of elements.
                    </p>
                    <p>
                        Repetition also creates brand recognition and familiarity: When a specific color palette, logo,
                        or font style is consistently uses across all of a company's communications (website, social
                        media, advertisements, physical products), it becomes a signature look that people associate with that
                        brand. This consistent visual identity helps build trust and recognition with the audience.
                    </p>
                </section>
            </div>
        </div>

        <!-- This is not part of the two-columns-container because it needs to stretch across the page -->
        <section>
            <h2>Applying Repetition</h2>
            <ul>
                <div class="two-columns-container">
                    <div>
                        <li>
                            <h3>Colors</h3>
                            <p>
                                Maintain a consistent color palette. For instance, use the same shade of blue for all
                                primary action buttons or the same accent color for all headings.
                            </p> 
                        </li>

                        <li>
                            <h3>Typography</h3>
                            <p>
                                Use a limited and consistent set of fonts. This includes using the same font family,
                                size, and weight, for similar types of content, such as headings or body text.
                            </p>    
                        </li>
                        <li>
                            <h3>Visual Elements</h3>
                            <p>
                                Repeat specific visual components like icons, shapes, or lines. For example, using
                                a particular type of rounded corner on all buttons and images can create a cohesive feel for your design.
                            </p>
                        </li>
                    </div>
                    <div>
                        <li>
                            <h3>Layout and Structure</h3>
                            <p>
                                Apply the same layout structure to similar pages or sections. This is common
                                in e-commerce sites, where all product pages follow the same template.
                            </p>    
                        </li>

                        <li>
                            <h3>Spatial Relationships</h3>
                            <p>
                                Maintain consistent spacing and margins between elements. This can be assimple
                                as ensuring the same amount of space is between an image and its caption.
                            </p>
                        </li>
                    </div>
                </div>
            </ul>
        </section>
    </main>

<?php
    include '../assets/inc/footer.inc.php';
?>