<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Display</title>
    @vite(['resources/css/display.css'], 'build')
</head>

<body>
    <div class="container">

        <p class="display-inline">Display inline</p>
        <p class="display-inline">Display inline</p>
        <hr>
        <p class="display-block">Display block</p>
        <hr>
        <p class="display-inline-block">Display inline-block</p>   <p class="display-inline-block">Display inline-block</p>
        <hr>
        <p class="display-none">Display none</p>
        <div class="d-flex align-items-center justify-content-center">
            <p>Display flex - center</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Display flex - between 1</p>
            <p>Display flex - between 2</p>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <p>Display flex - end</p>
        </div>
        <hr>
        <div class="d-flex justify-content-start">
            <p>Display flex - start</p>
        </div>
        <hr>
        <div class="d-flex justify-content-arround">
            <p>Display flex - arround 1</p>
            <p>Display flex - arround 2</p>
            <p>Display flex - arround 3</p>
        </div>
        <hr>
        <p>Display inline flex</p>
        <br>
        <div class="container--inline-flex">
            <div class="flex-child"></div>
            <div class="flex-child"></div>
            <div class="flex-child"></div>
        </div>

        <p>Display inline-grid </p>
        <br>
        <div class="d-flex inline-grid-container">
            <div class="grid-item">Grid Item 1</div>
            <div class="grid-item">Grid Item 2</div>
            <div class="grid-item">Grid Item 3</div>
        </div>
    </div>
</body>

</html>
