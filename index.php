<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cody Miller - Resume</title>
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
<div class="toggle-container">
    <input type="checkbox" id="darkModeToggle" class="toggle-checkbox">
    <label for="darkModeToggle" class="toggle-label">
        <span class="toggle-icon toggle-icon-sun">☀️</span>
        <span class="toggle-icon toggle-icon-moon">🌙</span>
        <span class="toggle-switch"></span>
    </label>
</div>
<div class="container">
    <header>
        <h1>Cody Miller</h1>
        <p class="title">Web Developer</p>
        <p>Email: <a href="mailto:cody.miller102+site@gmail.com">cody.miller102@gmail.com</a></p>
        <p>GitHub: <a href="https://github.com/Cody-Miller">github.com/Cody-Miller</a></p>
    </header>
    <section id="about">
        <h2>About Me</h2>
        <p>I'm a Senior Web Developer with 10 years of professional experience. The majority of my career has been spent
            at SKS Bottling & Packaging, where I've served as a full-time developer. I'm passionate about programming
            and regularly pursue side projects that capture my interest.</p>
        <p>I also serve on the board of CapitalLan, a non-profit organization that coordinates local LAN events. In this
            role, I contribute both as an event volunteer and backend developer, helping to maintain and improve the
            organization's technical infrastructure.</p>
        <a href="./projects.php">“Tell me more about some of these projects!”</a>
        <p>My hobbies are camping, biking, journaling, boardgames, and playing video games. My wife and I both love the
            outdoors as much as we love staying in on a winter night to play some games!</p>
    </section>
    <section id="experience">
        <h2>Experience</h2>
        <div class="experience-item">
            <h3>Senior Web Developer, SKS Bottle & Packaging, Inc.</h3>
            <p class="date">July 2014 - Present</p>
            <p>Maintained and created new functionality on a custom warehouse management a logistics platform.</p>
            <p>Key Technical Achievements:</p>
            <ul>
                <li>Updated 1400+ file code repository from PHP 5.4 to PHP 8.2.</li>
                <li>Developed and implemented paperless order processing system.</li>
                <li>Designed automated freight quoting tools with pallet-building capabilities.</li>
                <li>Rewrote and optimized boxing algorithm for improved performance and reliability.</li>
                <li>Created purchase order forecasting and generation system.</li>
                <li>Implemented comprehensive warehouse inventory management and allocation system.</li>
            </ul>
        </div>
        <div class="experience-item">
            <h3>Web Services Internship, St. Peter’s Health Partners.</h3>
            <p class="date">Feb 2013 - July 2013</p>
            <p>Facilitated the development of a system used for maintaining incident reports, providing user management
                and reporting functionality to the administrators. Team member in the development of an organizational
                wide replacement of new user, security and permissions request processes. This process made use of a
                variety of ColdFusion functions, jQuery plugins and AJAX calls.</p>
        </div>
        <?php //Add more job experiences as needed ?>
    </section>
    <section id="education">
        <h2>Education</h2>
        <div class="education-item">
            <h3>Bachelor of Arts in Computer Science</h3>
            <div>University at Albany, State University of New York</div>
            <div>Minor: Informatics</div>
            <p class="date">May 2016</p>
        </div>
        <div class="education-item">
            <h3>Associate in Computer Information Systems</h3>
            <div>Hudson Valley Community College</div>
            <div>GPA: 3.4</div>
            <div>Awarded a certificate of excellence in recognition of Scholastic Achievement and Personal Enrichment.
            </div>
            <p class="date">May 2013</p>
        </div>
        <?php //Add more education entries as needed ?>
    </section>
    <section id="skills">
        <h2>Programming</h2>
        <ul class="skills-list">
            <li>PHP (5.x, 7.x, 8.x)</li>
            <li>Laravel</li>
            <li>JavaScript</li>
            <li>jQuery</li>
            <li>Alpine.js</li>
            <li>CakePHP Migrations</li>
        </ul>
        <h2>Frontend</h2>
        <ul class="skills-list">
            <li>HTML/CSS</li>
            <li>Vite</li>
            <li>Bootstrap</li>
            <li>Tailwind CSS</li>
        </ul>
        <h2>Backend &amp; Database</h2>
        <ul class="skills-list">
            <li>MySQL - queries/subqueries/routines/events/functions</li>
            <li>MariaDB</li>
            <li>Redis</li>
            <li>SQS</li>
            <li>MQTT</li>
            <li>RESTful API Integration</li>
            <li>RESTful API Creation</li>
        </ul>
        <h2>DevOps &amp; Tools</h2>
        <ul class="skills-list">
            <li>Linux/Unix Terminal</li>
            <li>Git, GitHub</li>
            <li>Docker</li>
            <li>Oracle Cloud Infrastructure (where this is hosted ☺)</li>
            <li>Apache</li>
        </ul>
        <h2>Development Environments</h2>
        <ul class="skills-list">
            <li>PHPStorm</li>
            <li>Sublime Text</li>
            <li>Windows (7, 10, 11)</li>
            <li>OSX</li>
            <li>Linux (Red Hat, Ubuntu, Mint, Raspberry Pi OS)</li>
            <li>Android</li>
        </ul>
        <?php //Add more skills as needed ?>
    </section>
    <footer>
        <p>&copy; <?= date("Y"); ?> Cody Miller. All rights reserved.</p>
    </footer>
</div>
<script src="js/main.js"></script>
</body>
</html>