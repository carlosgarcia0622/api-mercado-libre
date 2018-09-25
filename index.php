<html>
<head>
<title>Api mercado libre para busqueda de productos</title>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<?php echo '<p>Hola Mundo '.$_GET["nombre"].'</p>';?>
<?php echo '<p>Hola Mundo 2 '.$_GET["apellido"].'</p>';?>
<div id="app">
    {{ message }}
  </div>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello Vue!'
      }
    })
  </script>
</body>
</html>
