
// Ajustar automáticamente la altura del textarea según su contenido
function autoajustarTamañoTextarea() {
    var $textarea = $('#respuesta');
    $textarea.height(0);
    $textarea.height($textarea.prop('scrollHeight') + 5);

}

function cargarCategoriasSelector(){
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetAll',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            
            // Limpiar el selector antes de agregar las nuevas opciones
            $('#selectorCategorias').empty();
            $('#selectorCategorias2').empty();
            
            // Iterar sobre las categorías y agregarlas al selector
            data.forEach(function(categoria) {
                $('#selectorCategorias').append($('<option>', {
                    value: categoria.CAT_ID,
                    text: categoria.CAT_NOM
                }));
            });
            data.forEach(function(categoria) {
                $('#selectorCategorias2').append($('<option>', {
                    value: categoria.CAT_ID,
                    text: categoria.CAT_NOM
                }));
            });

            // Llamar a la función para ajustar el tamaño del textarea
            autoajustarTamañoTextarea();
        },
        error: function (error) {
            console.error('Error al cargar categorías:', error);
            $('#respuesta').text('Error al cargar categorías.');
        }
    });
}
$(document).ready(function() {
    cargarCategoriasSelector();
});
