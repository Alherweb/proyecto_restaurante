$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecutaproducto.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
	$(".modificar").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
		var precio=$(this).parent('td').parent('tr').find('.precio').val();
                var categoria=$(this).parent('td').parent('tr').find('.categoria').val();
		$.post('./ejecutaproducto.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Descripcion:descripcion,
			Precio:precio,
                        Categoria:categoria
		},function(e){
			alert(e);
		});
	});
        $(".eliminarusuario").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecutausuario.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
	$(".modificarusuario").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var apellido=$(this).parent('td').parent('tr').find('.apellido').val();
		var usuario=$(this).parent('td').parent('tr').find('.usuario').val();
                var password=$(this).parent('td').parent('tr').find('.password').val();
		$.post('./ejecutausuario.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Apellido:apellido,
			Usuario:usuario,
                        Password:password
		},function(e){
			alert(e);
		});
	});
});