<?php
$LAFecha=date("Y")."-".date("m")."-".date("j");

require_once "controlador/conexion.php";
mysql_query('SET CHARACTER SET utf8');
require_once("inc/init.php");
require_once("inc/config.ui.php");
$page_title = "Cambiar contraseña";
$page_css[] = "your_style.css";
include("inc/header.php");
$page_nav["Administradores"]["sub"]["Cambiar contraseña"]["active"] = true;
include("inc/nav.php");
if(!empty($_POST))
{
	if($_POST["pass1"] != "" && $_POST["pass2"] != "" && $_POST["pass3"] != "" && $_POST["pass3"] == $_POST["pass2"])
	{
		$Doc=$_SESSION["Documento"];
		$Pass=sha1($_POST["pass1"]);
		$nepa=sha1($_POST["pass3"]);

		$query="SELECT * from Administradores where Documento='$Doc' and Contrasena = '$Pass'";
		$result=mysql_query($query);
		$count=0;
		while($raw = mysql_fetch_array($result))
		{
			$count++;
		}
		if($count==1)
		{
			$query="UPDATE Administradores set Contrasena='$nepa' where Documento='$Doc'";
			$result=mysql_query($query);
			echo "<script>window.alert('Contrasena cambiada')</script>";
		}
		else
		{
			echo "<script>window.alert('Contrasena actual incorrecta')</script>";
		}
	}
	else
	{
		echo "<script>window.alert('Campos vacios o las contrasenas no coinciden')</script>";
	}
}

if(!isset($_SESSION['Logueado'])) 
{
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>
	<?php
}
else
{
	?>
	<div id="main" role="main">
		<?php
		$breadcrumbs["Administradores "] = "";
		include("inc/ribbon.php");
		?>
		<div id="content">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-file-o"></i> Administradores<span>>
						Cambiar contraseña </span></h1>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-12">


						<div class="well well-sm">

							<div class="row">

								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="well well-light well-sm no-margin no-padding">

										<div class="row">

											<div class="col-sm-12">
												<div id="myCarousel" class="carousel fade profile-carousel">
													<div class="air air-bottom-right padding-10">

													</div>
													<div class="air air-top-left padding-10">

													</div>

													<div class="carousel-inner">
														<center><div style="text-align:center;width:400px;padding:1em 0;"><center><h2 class="txt-color-white font-md"><?php echo '<strong>Fecha de sistema: '.$LAFecha;?></strong></h2></center></div><BR></center>
													</div>
												</div>
											</div>

											<div class="col-sm-12">

												<div class="row">

													<div class="col-sm-3 profile-pic">
														<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png">

													</div>
													<div class="col-sm-6">
														<h1><span class="semi-bold">Cambiar contraseña</span>
															<br>
															<small>Proto International Group</small></h1>
															<form method="POST" action="pass.php" >

																<br>
																<p class="font-lg">
																	<i></i>
																</p>
																<p>		

																</p>
																<br>
																<input type="password" name="pass1" id="pass1" class='form-control ' placeholder="Actual"></input><br>
																<br><p>		

															</p><br>

															<input type="password" name="pass2" id="pass2" class='form-control' placeholder="Nueva"></input><br>

															<br><p>		
															
														</p><br>

														<input type="password" name="pass3" id="pass3" class='form-control' placeholder="Repita Nueva"></input><br>

														<br>


														<center><input type="submit" value="Cambiar contraseña" class="btn txt-color-white bg-color-pinkDark btn-lg"></center>
													</form>

													<br>
													<br>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>


					</div>

				</div>

			</div>
		</div>
	</div>
	


	<?php
	include("inc/footer.php");
	?>

	<?php 

	include("inc/scripts.php"); 
	?>

	<script>

		$(document).ready(function() {
		})

	</script>

	<?php 
}
include("inc/google-analytics.php"); 
?>