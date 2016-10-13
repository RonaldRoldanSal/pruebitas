<?php
?>
<div class="form-group">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-log-12">
        <h3><span class="glyphicon glyphicon-cog"></span> Mantenimiento de Usuarios:</h3>
    </div>
</div>
</div>
				
<!--MODAL REGISTRAR USUARIOS-->
<div class="modal fade bs-example-modal-lg" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"> <!--MODAL REGISTRAR USUARIOS-->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--ROW USUARIOS-->
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
			      <div class="panel-heading"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Registro de Nuevo Usuario</div>
              <div class="panel-body">

                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
                <div class="alert bg-success" role="alert" style="display:none" id="correcto">
                  <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>Participante Registrado <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
			          <form class="form-horizontal" action="../controller/usuarios/controller_registrar_usuario1.php" method="POST">
                <fieldset>
					       <!-- tipo de usuario input-->
					       <div class="form-group">
                  <label class="col-md-3 control-label" for="">Tipo de Usuario:</label>
                  <div class="col-md-4">
                    <select class="form-control" id="optionuser" name="optionuser" >
                      <option value="">Seleccione...</option>
                      <option value="1">Administrador</option>
                      <option value="2">Participante</option>
                      <option value="3">Ponente</option>
                      <option value="4">Organizador</option>
                    </select>   
                  </div>
					       </div>

                  <!-- nombre usuario input-->
					       <div class="form-group">
                    <label class="col-md-3 control-label" for="">Nombre de Usuario:</label>
                    <div class="col-md-4">
						          <input id="nombre_user" name="nombre_user" type="text" placeholder="Ingrese Nombre de Usuario" class="form-control">
                    </div>
					       </div>

                  <!-- contraseña input-->
					       <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Contraseña:</label>
                    <div class="col-md-4">
						          <input id="contra_user" name="contra_user" type="text" placeholder="Ingrese Contraseña" class="form-control">
                    </div>
					       </div>

                  <!-- email input-->
					      <div class="form-group">
                  <label class="col-md-3 control-label" for="name">E-Mail:</label>
                  <div class="col-md-4">
						        <input id="email_user" name="email_user" type="text" placeholder="Ingrese E-Mail"  class="form-control">
                  </div>
					     </div>

					       <!-- estado input-->
					     <div class="form-group">
                  <label class="col-md-3 control-label" for="">Estado:</label>
                  <div class="col-md-4">
                    <select class="form-control" id="optionestado" name="optionestado">
                      <option value="">Seleccione...</option>
                      <option value="Activo">Activo</option>
                      <option value="Inactivo">Inactivo</option>
                    </select>   
                  </div>
					     </div>

					     <!-- AGREGAR USUARIO-->
					     <div class="form-group">
                  <div class="col-md-12 widget-right">
						        <div class="text-center">
                      <button type="button" id="agregar_usuario" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
						        </div>
                  </div>
					     </div>
              </fieldset>
			       </form>
                                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
            </div>
          </div>
        </div>
	    </div>
    </div><!--/.row--> <!--ROW PARTICIPANTES-->
  </div>
</div>
</div>  <!--MODAL REGISTRAR PARTICIPANTES-->

<div class="row"> <!--BUSCAR USUARIOS-->
  <div class="col-lg-12">
    <div class="panel panel-default">	
      <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Usuarios</div>
        <div class="panel-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
          <a target="_blank" href="_reportes/reporte_usuarios.php" class="btn btn-danger">Exportar a PDF</a>
          <form class="form-horizontal">
            <fieldset>
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name"><i class="fa fa-search" aria-hidden="true"></i> Buscar Usuarios:</label>
                <div class="col-md-4">
                  <input id="buscarusuarios" name="name" onkeyup="lista_usuarios(this.value,'1');" type="text" placeholder="Ingrese Nombre o Email" class="form-control">
                </div>
              </div><br>
			        <div class="cargartodo">
                <div id="lista"></div> 
			             <div id="paginador" class="text-center"></div>
			          </div>
            </fieldset>
		      </form>     
        </div>
	   </div>
  </div>
</div><!--/.row-->	

<!--MODAL MODIFICAR USUARIOS-->
<div class="modal fade grande" id="myModal_modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-cogs"></span> Modificar Usuarios</h4>
		  </div><br>

		  <!--OTRO FORMULARIO-->
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Código:</label> 
            <div class="col-md-5">
              <input id="id_user2" name="" type="text" class="form-control" disabled>
              <input id="id_tipouser2" name="" type="text" class="form-control oculto " disabled>
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Descripción usuario</label> 
            <div class="col-md-5">
              <input id="id_nomtipo" name="" type="text" class="form-control " disabled>
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Nombre Usuario:</label> 
            <div class="col-md-5">
              <input id="nombre2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Contraseña:</label> 
            <div class="col-md-5">
              <input id="clave2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Email:</label> 
            <div class="col-md-5">
              <input id="email2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Estado:</label> 
            <div class="col-md-5">
              <input id="estado2" name="" type="text" class="form-control">
            </div>
          </div>
        </fieldset>
      </form>

		  <!--FIN DE FORMULARIO  data-dismiss="modal"-->
		  <br>
      <div class="text-center">
        <button type="button" name="modificar" id="ModificarUsuario" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
      </div>

      <div class="modal-footer">
		    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Cerrar</button>
		  </div>
		</div>
	</div>
</div>
<!--MODAL MODIFICAR USUARIO-->

<!--MODAL ELIMINAR CLIENTES-->
  
      <div class="modal fade" id="myModal_eliminar" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Eliminar Cliente</h4>
            </div>
            <div class="modal-body">
              <p>Estas seguro de eliminar?</p>
              <input type="text" id="id_usuarioe" class="oculto">
              <p id="nombreuser"></p>
            </div>
            <div class="modal-footer">
              <div class="text-center">
              <button type="button" id="eliminarusuario" data-dismiss="modal" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
          </div>
        </div>
      </div>

              
<script>
  $(document).ready(function(){
    //onload="lista_usuario('','1')"
    lista_usuarios('','1');
     $(".oculto").hide();
  });

  $(function(){
    /*toUpperCase =  letras en mayuscula a la base de datos*/
    $("#ModificarUsuario").click(function(event){
      var id_user2 = $("#id_user2").val();
      var id_tipouser2 = $("#id_tipouser2").val();
      var nombre2 = $("#nombre2").val(); // julio ya esta!
      var clave2 = $("#clave2").val();
      var email2 = $("#email2").val();
      var estado2 = $("#estado2").val(); 

      

      var parametros={ ///aca le mandas 4 datos  espera

        id_user2: id_user2,    // julio asi queda?
        id_tipouser2:id_tipouser2,
        nombre2:nombre2,
        clave2: clave2,
        email2 : email2,
        estado2: estado2   
      }

      $.ajax({
        url:'../controller/usuarios/Controller_modificar_usuario.php',
        type:'POST',
        data:parametros,
        }).done(function() {
          console.log( "Datos agregados" );
          $('#myModal_modificar').modal('hide');
          lista_usuarios('','1');
        //$('#mensaje').addClass('bien').html('Datos agregados correctamente').show(200).delay(2500).hide(200);
        //$("#correcto").show(200).delay(2500).hide(200); //esto es un ensaje
        });

        
    });
  });


  ///ageegar usuario

    $(function(){
    /*toUpperCase =  letras en mayuscula a la base de datos*/
    $("#agregar_usuario").click(function(event){
     
     /*
      var optionuser = '1';
      var nombre_user = 'ruiz';
      var contra_user = 'dias'; // julio ya esta!
      var email_user = 'ruiz@gmail.com';
      var optionestado = 'activo';
*/

      
      var optionuser = $("#optionuser").val();
      var nombre_user = $("#nombre_user").val();
      var contra_user = $("#contra_user").val(); // julio ya esta!
      var email_user = $("#email_user").val();
      var optionestado = $("#optionestado").val();;

//alert("datps"+optionuser+nombre_user+contra_user+email_user+optionestado);

      var parametros1={ ///aca le mandas 4 datos  espera

        optionuser: optionuser, 
        nombre_user:nombre_user,
        contra_user:contra_user,
        email_user : email_user,
        optionestado: optionestado
      }

      $.ajax({
        url:'../controller/usuarios/controller_registrar_usuario1.php',
        type:'POST',
        data:parametros1,
        }).done(function() {

         
        });
        $('#modalagregar').modal('hide');
        lista_usuarios('','1');
        
    });
  });


  $(function(){

$("#eliminarusuario").click(function(event){

  var id_usuarioe = $("#id_usuarioe").val();

  $.ajax({
            url:'../controller/usuarios/controller_eliminar_usuario.php',
            type:'POST',
            data:'id_usuarioe='+id_usuarioe,
            });

      lista_usuarios('','1');
    });

  });


</script>

<style type="text/css">
    .grande{
        width: 100%;
    }
</style>



