function init() {
  console.log("Hello World");
  getInventory();
}

$(document).ready(init);

//ottengo l'inventario
function getInventory(){

  $.ajax({
    url: 'inventario.php',
    method:'GET',
    success:function(data){
      console.log(data);
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
    $('.container').append(html);
  }

}