<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Demo Pseudo-Element</title>
  @vite(['resources/css/pseudo-element.css'], 'build')
</head>

<body>
  <div class='container'>
    <h1>
      Website demo Pseudo-Element
    </h1>
    <hr>
    <span>First Line</span>
    <p class="first-line">
      Đây là một website được viết ra để demo Pseudo-Element
      lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
    </p>
    <hr>
    <span>First Letter</span>
    <p class="first-letter">
      Đây là một website được viết ra để demo Pseudo-Element
      lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
    </p>

    <hr>
    <span>Before</span>
    <p class="before">
      Đây là một website được viết ra để demo Pseudo-Element
      lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
    </p>

    <hr>
    <span>After</span>
    <p class="after">
      Đây là một website được viết ra để demo Pseudo-Element
      lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
      Nulla facilisi. Nulla facilisi. Nulla facilisi. Nulla facilisi.
    </p>
    <hr>
    <span>Maker</span>
    <ul>
      <li>Cam</li>
      <li>Quýt</li>
      <li>Xoài</li>
    </ul>
  </div>

  <script src="script.js"></script>
</body>

</html>