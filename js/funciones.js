



function agregardatos(id_curso,boleta,tipo_usuario,nombre,apaterno,amaterno,telefono,correo,usuario,clave){
	cadena="id_curso=" + id_curso +
			"&boleta=" + boleta +
			"&tipo_usuario=" + tipo_usuario  +
			"&nombre=" + nombre +
			"&apaterno=" + apaterno + 
			"&amaterno=" + amaterno +
			"&telefono=" +  telefono +
			"&correo=" + correo +
			"&usuario=" + usuario +
			"&clave=" + clave;

	
	$.ajax({
		type:"POST",
		url:"agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function agregaform(datos){

	d=datos.split('||');
	$('#id_usuario').val(d[0]);
	$('#carrerau').val(d[1]);
	$('#materiau').val(d[2]);
	$('#unidadu').val(d[3]);
	$('#preguntau').val(d[4]);
	$('#ans1u').val(d[5]);
	$('#ans2u').val(d[6]);
	$('#ans3u').val(d[7]);
	$('#ans4u').val(d[8]);
	$('#true_ansu').val(d[9]);	

}

function actualizaDatos(){

		que_id=$('#que_id').val();
	carrera=$('#carrerau').val();
	materia=$('#materiau').val();
	unidad=$('#unidadu').val();
	pregunta=$('#preguntau').val();
	ans1=$('#ans1u').val();
	ans2=$('#ans2u').val();
	ans3=$('#ans3u').val();
	ans4=$('#ans4u').val();
	true_ans=$('#true_ansu').val();	


cadena=	"que_id=" + que_id +
			"&carrera=" + carrera +
			"&materia=" + materia +
			"&unidad=" + unidad +
			"&pregunta=" + pregunta + 
			"&ans1=" + ans1 +
			"&ans2=" +  ans2 +
			"&ans3=" + ans3 +
			"&ans4=" + ans4 +
			"&true_ans=" + true_ans;

$.ajax({
		type:"POST",
		url:"./actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('catalogo.php');
				alertify.success("Actualizado con éxtio :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo(que_id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(que_id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(que_id){

	cadena="que_id=" + que_id;

		$.ajax({
			type:"POST",
			url:"./eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').reload('./catalogo.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}