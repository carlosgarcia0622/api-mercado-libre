<html>
<head>
<title>Api mercado libre para busqueda de productos</title>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

<form action="" method="get">
  <label for="Buscar"></label>
  <input type="text" name="txtbuscar">
  <button tupe="submit" name="btnbuscar">Buscar</button>
</form>


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


