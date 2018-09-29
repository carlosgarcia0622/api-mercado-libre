<html>
  <head>
    <title>Api mercado libre para busqueda de productos</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        th, td {
             padding: 15px;
        }


        </style>
  </head>


  <body>
    <div id="app">
      <h2>Buscar productos Mercado libre</h2>
      
      <input type="text" v-model="productQuery" placeholder="Buscar">
      <button v-on:click="search">Buscar</button>
      <h3></h3>      
      
      <table style="width:100%">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="result in results">
            <td>{{result.title}}</td>
            <td>{{result.price}} $</td>
            <td><img :src=  'result.thumbnail'/></td>
          </tr>
                 
          
        </tbody>
      </table>
    
    
    </div>
  </body>

  <script>
    new Vue({
      el: '#app',
      data: {
        productQuery: '',
        results: []
    
    },
     methods: {
      search(){ axios({method: "Get", url:"https://api.mercadolibre.com/sites/MLU/search?q="+this.productQuery})
        .then(response => (this.results = response.data.results))

      }
  
    }
  
  })
  </script>
</html>


