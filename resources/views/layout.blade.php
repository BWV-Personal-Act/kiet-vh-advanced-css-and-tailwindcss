<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Grid</title>
    @vite(['resources/css/layout.css'], 'build')
</head>

<body>
    <div class="grid-container">
        <div class="header">
            <h1>Header</h1>
        </div>
        <div class="sidebar">
            <h2>Sidebar</h2>
        </div>
        <div class="main">
            <h2>Main Content</h2>
        </div>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
</body>

</html>
