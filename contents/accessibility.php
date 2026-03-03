<?php
    $pageTitle = 'Accessibility';
    $basePath = '../';
    include '../assets/inc/header.inc.php';
?>

    <main>
        <h1>Accessibility</h1>

        <div class="two-columns-container">
            <div class="flex-basis-130">
                <section class="light-background">
                    <h2>What is Accessibility?</h2>
                    <p>
                        Accessibility in design means making sure that all users, no matter their physical or cognitive
                        abilities, can easily navigate, understand, and interact with a website or product.
                        It ensures that digital spaces are usable by everyone, including people who use assistive technologies
                        such as screen readers, have vision impairments, or rely on alternative input devices.
                        Simplified, accessibility removes barriers so that everyone has an equal opportunity to engage with the
                        content.
                    </p>
                </section>
                <section>
                    <h2>Why is accessibility important?</h2>
                    <p>
                        Accessibility is important because it promotes inclusivity and ensures that no one is excluded from
                        accessing information or services due to a disability or limitation.
                        It also improves overall usability. Designs that are accessible often end up being easier and more
                        pleasant for everyone to use, not just those with disabilities.
                        For example, captions on videos help not only people who are deaf or hard of hearing, but also users in
                        noisy environments or who prefer to watch without sound. Beyond ethics and usability, accessibility is
                        also a legal requirement in many regions, such as under the Americans with Disabilities ACT (ADA) or the Web
                        Content Accessibility Guidelines (WCAG)
                    </p>
                </section>
            </div>
            <div>
                <div id="access-alignment-container" class="space-between">
                    <img id="bad-alignment" src="../assets/images/badAlignmentText.png" alt="An example of poorly aligned texts">
                    <img id="good-alignment" src="../assets/images/goodAlignmentText.png" alt="An example of well aligned texts that improve readibility">
                </div>
                <img id="access-contrast-img" src="../assets/images/goodBadContrast.png" alt="Example of good color contrast and bad coolor contrast">
            </div>
        </div>
        <section>
            <h2>Applying Accessibility</h2>
            <ul>
                <li>
                    <h3>Screen Readers</h3>
                    <p>
                        Use descriptive alternative text for images so that screen readers can describe visual elements to
                        userswho are blind or visually impaired. Make sure to avoid vague descriptions.
                    </p>
                </li>
                <li>
                    <h3>Semantic Tags</h3>
                    <p>
                        Helps assistive technologies understand the layout and purpose of each section of your page.
                    </p>
                </li>
                <li>
                    <h3>Color Contrast</h3>
                    <p>
                        Making sure text and background colors have enough contrast so that content is readable to users
                        with low vision or color blindness.
                        Tools like contrast checkers can help ensure your design meets WCAG standards.
                    </p>
                </li>
                <li>
                    <h3>Media Queries</h3>
                    <p>
                        Use responsive design through CSS media queries to make sure the website adjusts properly on
                        different devices and screen sizes. 
                    </p>
                </li>
            </ul>
        </section>

    </main>

<?php
   include '../assets/inc/footer.inc.php';
?>