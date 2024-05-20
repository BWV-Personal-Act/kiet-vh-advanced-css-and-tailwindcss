<!doctype html>
<html lang="en">

<head>
    <title>CSS Selector Demo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    @vite(['resources/css/css-selector.css'], 'build')
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h3>1. Element selector</h3>
        <div class="container-fluid">
            <h1>Heading</h1>

            <p>Đoạn một</p>

            <p class="center">Đoạn hai</p>

            <p id="para3">Đoạn ba</p>

            <p class="center">Đoạn bốn</p>
        </div>

        <hr>
        <div class="container">
            <div class="paragraph-container">
                <p id="hola-id" class="hola-class">Hola world</p>
                <p class="hello-class">Hello world</p>
                <p class="hello-class again-class">Hello again world</p>
            </div>
            <p class="outside-class">I'm outside</p>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
