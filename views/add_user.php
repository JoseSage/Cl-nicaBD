<?php 
include_once('head.php');
include_once('navbar.php');
?>
<script>
$(document).ready(function(){
  
});


</script>
 <!-- edit Section -->
<section id="page_add" class="page_add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 <h2>Añadir un nuevo usuario</h2>
		<hr>
		
		<?php if (isset($msg)){ ?>
		<div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
	<?php } ?>
		<form role="form" action="index.php?controller=users&add" method="POST">

  					
		<div class="form-group">
    		<label for="username">Nombre de usuario</label>
	    		<input type="text" class="form-control" name ="username" id="username" placeholder="Digite el nombre de usuario" required value="">
  		</div>
  		<div class="form-group">
    		<label for="password">Contraseña</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="Digite la contraseña" required value="">
  		</div>

<div class="form-group">
    		<label for="password">Confirmar contraseña</label>
			<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Repita la contraseña" required value="">
  		</div>

  					<div class="form-group">
    						<label for="email">Correo</label>
    						<input type="email"  required 	class="form-control" name="email" id="email" placeholder="Digite el correo"
value="">
  					</div>
  					<div class="form-group">
    						<label for="type">Tipo</label>
    						<input type="text" class="form-control" maxlength="15" size="15" name="type" id="type" placeholder="Digite el tipo de usuario"
value="">
  					</div>
  					
  					<button type="submit" class="btn btn-primary" id="submit">Aceptar</button>
  					<a href="index.php?controller=users"><button type="button" class="btn btn-success">Regresar</button></a>
				</form>
                </div>
            </div>
        </div>
</section>
<br/>
<?php 
include_once('footer.php');
?>
