<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Editar'; ?>
<?php require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php $id=$_GET['id']; ?>
<!-- Pablo -->
<?php $promocion=buscar_promocion($id); ?>
<?php $imagen=$promocion['img']; ?>
<?php $ruta = '/EducAr/public/img/promo/'; ?>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <!-- Pablo -->
						<form name="sentMessage" id="uploadForm" action="../Functions/modificar_promocion.php" method="post" enctype="multipart/form-data">
                          	<div class="control-group form-group">
								<div class="controls">
									<!-- Pablo -->
									<input type="hidden" class="form-control" value="<?php echo $promocion['id']; ?>" name="id" >
									<p class="help-block"></p>
								</div>
                          	</div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <!-- Pablo -->
									<label>Nombre:</label>
									<input type="text" class="form-control" value="<?php echo $promocion['nombre']; ?>" name="nombre" required data-validation-required-message="Ingrese Nombre de la Promoción.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <!-- Pablo -->
									<label>Detalle:</label>
                                    <textarea rows="6" cols="100" class="form-control" name="detalle" required data-validation-required-message="Ingrese detalle de la Promoción." maxlength="999" style="resize:none"><?php echo $promocion['detalle']; ?></textarea>
									
                                </div>
                            </div>
							<!-- Pablo -->
							<div class="control-group form-group">
                                <div class="controls">
                                    <label for="imagen">Imagen:</label>
									<input type="file" name="imagen" size="20" accept="image/*" required><br>
                                </div>
								<div>
									<image src="<?php echo $ruta.$promocion['img'] ; ?>" height="50%" width="50%"><br>
								</div>
                            </div>
								
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
							<a href="promociones.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
							<button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
