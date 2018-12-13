$(document).ready(function(){
  $('#search').focus()/*al iniciar le de el foco*/

  
  /*keyup.. cuando se levante una tecla ejecuateremos una funcion
  */
  $('#search').on('keyup', function(){
    var search = $('#search').val()
    $.ajax({
      type: 'POST',
      url: 'php/search.php',
      data: {'search': search}
    })
    .done(function(resultado){
      $('#result').html(resultado)
    })
    .fail(function(){
      alert('Hubo un error :(')
    })
  })
})