<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cody Miller - Projects</title>
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
        <h2>Projects</h2>
        <h3>SKS - Warehouse Management &amp; Logistics</h3>
        <h4>Upgrading the company from PHP 5.4 to 8.2 (the most recent PHP version at the time)</h4>
        Our legacy OS Commerce platform contained over 14,000 files of custom code developed by various team members over 20 years. I successfully migrated this codebase to the new PHP version using a combination of one-time scripts, find-and-replace operations, and advanced regex patterns.</p>
        <h4>Taking the order process paperless</h4>
        <p>We used to have printed pick lists that listed for a given order its products and locations to find said products. We had an automated picking system where users could scan the printed picklist with a smartphone to start the picking process. During this project, I updated the order flow such that orders could be assigned via a portal directly to users. After assigned they would queue up on their smartphone. The pickers could then start picking these orders. Behind the scenes, we were building virtual carts. This would enable us to know how full a cart was and if another assigned order would be able to fit on it. It also enabled us to display the virtual cart to the picker so they can build their physical cart to match. This update to the picking process and the assignment portal enabled us to go fully paperless!</p>
        <h4>Auto freight quoting and pallet building process</h4>
        <p>Developed and maintained an automated freight quoting system that seamlessly integrated with our workflow. The system can organize products and quantities into pallets, and then fetch quotes from five different logistics platforms' APIs. It automatically selects the best option based on cost or speed, and once an order is placed, it handles booking, BOL printing, and pickup scheduling through the respective APIs. This automation streamlined our entire freight process.</p>
        <h4>Reworking Cartonization</h4>
        <p> I revamped our box-packing algorithm to be more sophisticated than the previous volume-based approach. Using product and box dimensional data (including weights), I created a high-performance cartonization system that processes over 50 unique products in under one second. The algorithm optimizes for minimal box count while ensuring each package stays under the 50-pound threshold to avoid excess charges.</p>
        <h3>CapitalLan - Badge Site</h3>
        <p>This site served three main purposes. First, CapitalLan wanted us to develop an API that would interface with their existing website and provide endpoints for custom-built ESP32 PCBs we created as NFC readers. Second, we needed to give users a way to track and view their badges and event attendance. Lastly, we wanted to give event hosts and vendors badge scan reporting and event management tools. The ESP devices were distributed to vendors with tables at in-person events. When badges and NFC scanners were registered in the system, we could track users visiting different booths during events, log which events they attended, and record their achievements.</p>
        <h3>Chore Tracking App</h3>
        <p>I developed this app while I was learning Laravel and wanted to create a full-scale project that included features like login, session management, a database, and a dashboard. Both my wife and I are career-oriented individuals, and we found it challenging to keep track of when certain chores were last completed or to know which chores should be prioritized next. I got sidetracked exploring some of the fun features of Laravel and this ended up only getting about 90% completed. I plan to return to this project with renewed focus!</p>
        <h3>Discord Bot</h3>
        <p>I created this bot for fun! A friend casually suggested that it would be great to have a Discord bot that could interface with ChatGPT. At the time, I was also playing Dungeons & Dragons, so I wanted the bot to be capable of rolling dice. In short, I developed a Discord chatbot that allows users to prompt ChatGPT and roll dice using '!' commands.</p>
        <a href="./">"Back to the overview please!"</a>
    </section>
    <footer>
        <p>&copy; <?= date("Y"); ?> Cody Miller. All rights reserved.</p>
    </footer>
</div>
<script src="js/main.js"></script>
</body>
</html>