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
    {{ infoproductos }}
  </div>

  <script>
    var app = new Vue({
      el: '#app',
      data() {
        return{
           infoproductos: null
        }
      },
      munted(){
        axios
        .get('https://api.coindesk.com/v1/bpi/currentprice.json')
        .then(response => (this.infoproductos = response))
      }
    })
  </script>
</body>
</html>


