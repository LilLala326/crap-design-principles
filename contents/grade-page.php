<?php
$pageTitle = 'Grade Page';
$basePath = '../';
include '../assets/inc/header.inc.php';
?>

<main>
    <section id="gradePage-section1">
        <h1>Grade Page</h1>

        <p>This website was developed to satisfy all requirements of the Web Development Final Project, focusing on the
            application of the C.R.A.P. design principles and fundamental Web Accessibility standards.</p>
        <p>Our implementation follows the structure and aesthetic presented in the Design Document, incorporation the
            follow essential fixes and compliance points:</p>
    </section>

    <section>
        <h2>Project Overview and Design Compliance</h2>
        <ul>
            <li><strong>Full Site Content: </strong>All content pages (home, 4 C.R.A.P. principles, Accessibility,
                Bibliography, Interactions) have been fully developed and finalized.
            </li>
            <br>
            <li><strong>Wireframe Compliance: </strong>The website closely follows the initial wireframes and design
                document layout on both desktop and mobile devices.</li>
            <br>
            <li><strong>Contrast Correction: </strong>The low contrast issue noted in the design document comment has
                been resolved by adjusting the color palette.</li>
        </ul>
    </section>

    <section>
        <h2>Essential Requirements (Course Concepts & Modularity)</h2>
        <ul>
            <li><strong>Modularity (PHP Includes): </strong>The site uses three PHP includes files and a global
                $basePath variable to ensure zero repeated code for navigation, structure, and asset linking across the
                pages.</li><br>
            <li><strong>Content Structure: </strong>Each page utilized semantic HTML5 tags to properly structure the
                document flow and enhance accessibility.</li><br>
            <li>
                <stong>C.R.A.P. and Accessibility Pages: </stong>Four dedicated pages define and illustrate the C.R.A.P.
                principles, plus a separate page that explains the importance of web accessibility and provides
                actionable implementation tips.
            </li>
        </ul>
    </section>

    <section>
        <h2>Image Sourcing and Intellectual Property</h2>
        <ul>
            <li><strong>All C.R.A.P. Demonstration Images: </strong>The images used on the Contrast, Repetition,
                Alignment, Proximity, and Accessibility pages were custom designed to illustrate specific concepts.</li>
            <br>
            <li><strong>Index Page Image: </strong>This is the only external image used on the site, sourced from <a
                    href="bellaandduke.com">BellaAndDuke.com</a>. Full citation is provided on the Bibliography Page.
            </li>
        </ul>
    </section>

    <section>
        <h2>Desired Requirements & Bonus (Interactive & Dynamic Features)</h2>
        <ul>
            <li><strong>Interactive Component: </strong>A short quiz is available for users to test their knowledge on
                the C.R.A.P. principles and accessibility concepts learned throughout the website. Upon submission,
                users are immediately told their score and they have the option to re-take the quiz at any time. A blank
                or partially finished submittion is not allowed, and users will be notified if they have areas left
                blank.</li><br>
            <li><strong>Responsive Navigation: </strong>For smaller screens, a responsive hamburger menu is implemented
                using JavaScript to enhance mobile usability while maintaining a clean design. This nav bar does not
                immediately appear but instead uses a CSS transition to slide in smoothly from the right.</li><br>
            <li><strong>Navigation Hover Effect: </strong>Tranitional ease-in-out background colors are used for all
                header and footer navigation links, utilizing DHTML5 features.</li>
        </ul>
    </section>

</main>

<?php
include '../assets/inc/footer.inc.php';
?>