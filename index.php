<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE -->
    <script id="item-template" type="text/x-handlebars-template">
    <li class='list-item' data-id={{id}}>
          <span class=item-name>{{nome-bevanda}}</span>
          <span class='item-manufacturer'>{{marca}}</span>
          <span class='item-price' >{{prezzo}}</span>
          <span class='item-exp-date' > {{data_di_scadenza}}</span>
        </li>
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <title>Inventario</title>
  </head>
  <body>
    <div class="container">
    <h1>INVENTARIO</h1>

    <div class="items-container">
      <ul id='list'>
        
      </ul>
    </div>
    
    
    
    </div>
  </body>
</html>