<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Selectors Exercise</title>
    <link rel="stylesheet" href="styles.css">
    @vite(['resources/css/demo.css'], 'build')
</head>
<body>
    <h1>Heading One</h1>
    <div class="content">
        <p>Paragraph inside content</p>
    </div>
    <div class="main-content">
        <p>Child Paragraph in Main Content</p>
        <p class="highlight">Highlighted Paragraph in Main Content</p>
    </div>
    <p id="unique-paragraph">Unique Paragraph</p>
    <p class="highlight">Another highlighted paragraph</p>
    <button class="active">Active Button</button>
    <div id="reference">Reference Element</div>
    <p class="highlight">Sibling Highlighted Paragraph</p>
    <p class="header">Header</p>
    <p class="footer">Footer</p>
    <p class="sidebar">Sidebar</p>
</body>
</html>
