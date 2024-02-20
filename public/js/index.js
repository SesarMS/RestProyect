//Ajusta el tamaño del textArea
function autoajustarTamañoTextarea() {
    var $textarea = $('#respuesta');
    $textarea.height(0);
    $textarea.height($textarea.prop('scrollHeight') + 5);

}

//Carga las categorías en un selector
function cargarCategoriasSelector(selector) {
    $.ajax({
        url: 'controller/CategoriaController.php?op=GetAll',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $(selector).empty();
            data.forEach(function(categoria) {
                $(selector).append($('<option>', {
                    value: categoria.CAT_ID,
                    text: categoria.CAT_NOM
                }));
            });
        },
        error: function (error) {
            console.error('Error al cargar categorías:', error);
            $('#respuesta').text('Error al cargar categorías.');
        }
    });
}

$(document).ready(function() {
    cargarCategoriasSelector('#selectorCategorias1');
    cargarCategoriasSelector('#selectorCategorias2');
    cargarCategoriasSelector('#selectorCategorias3');
});
