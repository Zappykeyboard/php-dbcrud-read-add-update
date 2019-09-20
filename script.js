function init() {
  console.log("Hello World");
  getInventory();
  $(document).on('click', '.add-item', addToInventory);
}

$(document).ready(init);

//ottengo l'inventario
function getInventory(){

  $.ajax({
    url: 'inventario.php',
    method:'GET',
    success:function(data){
      console.log(data);
      $('#list').html("");
      printInventory(data);
    } ,
    error: function(err){
      console.log(err);
      
    }
  })
}

//mostro l'inventario a schermo
function printInventory(data){

  var source = $('#item-template').html();
  var template = Handlebars.compile(source);
  var html;

  for (var i = 0; i<data.length; i++){
    var el = data[i];
 
    html = template(el);
    $('#list').append(html);
  }

}


function addToInventory() {
  var name = $('.new-name').val();
  var manufacturer = $('.new-manufacturer').val();
  var price = Number($('.new-price').val());
  var date = $('.new-exp-date').val();
  console.log(date)

  if(name && manufacturer && price && date){

    var theData = {
      name: name,
      manufacturer: manufacturer,
      price: price,
      expiration: date
    }
    console.log(theData);

    $.ajax({
      url: 'inventario-new.php',
      method:'GET',
      data:theData,
      success:function(data){
        console.log(data);
        getInventory();
      } ,
      error: function(err){
        console.log(err);
        
      }
    })

  }
}