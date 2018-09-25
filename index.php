<html>
<head>
<title>Api mercado libre para busqueda de productos</title>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<?php echo '<p>Hola Mundo '.$_GET["nombre"].'</p>';?>
<?php echo '<p>Hola Mundo 2 '.$_GET["apellido"].'</p>';?>
<?php echo $ curl -X GET 'https://api.mercadolibre.com/users/226384143/items/search?sku=abcd1234&status=active&access_token=$ACCESS_TOKEN';?>
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
