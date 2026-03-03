<?php
    $pageTitle = 'Proximity';
    $basePath = '../';
    include '../assets/inc/header.inc.php';
?>

    <main>
        <h1>Proximity</h1>
        <div class="two-columns-container">
            <div>
                <section class="light-background">
                    <h2>What is Proximity?</h2>
                    <p>
                        Proximity refers to how elements are organized. The fundamental principle behind proximity is to
                        place related content close together.
                        Conversely, this principle can also be applied through separating placing elements further apart for
                        emphasis, which is known as negative space.
                        This seemingly simple concept can even overcome visual similarities such as color and shape.
                    </p>
                </section>

                <section>
                    <h2>Applying Proximity</h2>
                    <ul>
                        <li>
                            <h3>Group related content together</h3>
                            <ul class="restore-ul-default">
                                <li>Place Headings above their paragraph</li>
                                <li>Place list items of the same context together</li>
                                <li>Place texts with their corresponding captions</li>
                            </ul>
                        </li>
                        <li>
                            <h3>Establish emphasis through negative space</h3>
                            <ul class="restore-ul-default">
                                <li>Separating elements from other can create focus</li>
                            </ul>
                        </li>
                    </ul>
                </section>

            </div>
            <div class="space-between">
                <section>
                    <h2>Why is Proximity important?</h2>
                    <p>
                        When used correctly, proximity can communicate information to the audience without any additional input
                        from the author. 
                    </p>
                    <p>
                        An element's surroundings provide context to its role within a design. One such example can be
                        seen through the use of negative space: If an element is separated from all others, it provides a focus upon the element, 
                        which then creates a sense of emphasis. Likewise, if the audience can infer that if an element is surrounded by others, the 
                        element's content must be relevent with its surroundings.
                    </p>
                </section>
            
                <div id="proximity-image-container" class="space-between">
                    <img id="good-proximity" src="../assets/images/goodProximityShapes.png"
                        alt="Related shapes grouped with each other, creating a sense of organization">
                    <img id="bad-proximity" src="../assets/images/badProximityShapes.png" alt="Shapes are mixed up, creating a sense of disorder">
                </div>
            </div>
        </div>
    </main>

<?php
    include '../assets/inc/footer.inc.php';
?>