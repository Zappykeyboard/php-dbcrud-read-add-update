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
          <span class=item-name>Nome: {{nome_bevanda}}</span>
          <span class='item-manufacturer'>Produttore: {{marca}}</span>
          <span class='item-price' >Prezzo: {{prezzo}}€ </span>
          <span class='item-exp-date'>Scadenza: {{data_di_scadenza}}</span>
          <button class='update-item'>Modifica...</button>
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
      <div class="new-item-cont">
        <input type="text" name="" class="new-name" placeholder='Nome bevanda'>
        <input type="text" name="" class="new-manufacturer" placeholder='Nome marca'>
        <input type="text" name="" class="new-price" placeholder='prezzo'>
        <input type="date" name="" class="new-exp-date">
        <button class='add-item'>Aggiungi prodotto</button>
      </div>


      <div class="items-container">
      
        <ul id='list'>
          
        </ul>
      </div>
      
    
    
    </div>
  </body>
</html>