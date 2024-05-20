<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Flexbox</title>
    @vite(['resources/css/flexbox.css'], 'build')
</head>

<body>
    <div class="container">
        <p>Display Flex</p>
        <div class="box">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
        </div>


        <p>Flex Direction Colum</p>
        <div class="box1">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
        </div>


        <p>Flex Direction Row</p>
        <div class="box2">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
        </div>

        <p>Flex Row Reverse</p>
        <div class="box3">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
        </div>


        <p>Flex Wrap</p>
        <div class="box4">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
            <div class="box-item">3</div>
            <div class="box-item">4</div>
            <div class="box-item">5</div>
            <div class="box-item">6</div>
        </div>

        <p>Flex Wrap Reverse</p>
        <div class="box5">
            <div class="box-item">1</div>
            <div class="box-item">2</div>
            <div class="box-item">3</div>
            <div class="box-item">3</div>
            <div class="box-item">4</div>
            <div class="box-item">5</div>
            <div class="box-item">6</div>
        </div>
    </div>
</body>

</html>
