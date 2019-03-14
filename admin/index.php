<?php
session_start();


require_once "controlador/conexion.php";

require_once("inc/init.php");
require_once("inc/config.ui.php");

$page_title = "Login";
$page_css[] = "your_style.css";
$no_main_header = true;
$page_html_prop = array("id"=>"extr-page", "class"=>"animated fadeInDown");

if(!isset($_SESSION['Logueado'])) 
{
	if(!isset($_POST['login'])){
		if(!empty($_POST))
		{
			$user =($_POST['user']);
			$pass = sha1($_POST['pass']);
		}
		$query = mysql_query('SELECT * FROM Administradores WHERE Documento="'.mysql_real_escape_string($user).'" AND Contrasena="'.mysql_real_escape_string($pass).'"');

		$arrayquery = mysql_fetch_array($query);
		$_SESSION= $arrayquery;
		if($arrayquery == true)
		{
			$_SESSION['Logueado']= 'Si';
			$_SESSION['Documento']= $user;
			$Documento=$user;
			if (null==$Documento ) {
				?>
				<script type="text/javascript">
					window.location="index.php";
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					window.location="admin.php";
				</script>
				<?php
			}
		}
		else
		{	   	
			if (!empty($_POST)) {
				echo'<script type="text/javascript">alert("Usuario y/o contraseña incorrectos");</script>';
			}

		}
	}
include("inc/header.php");
?>
<header id="header">
	<div id="logo-group">
		<span id="logo"> <img src="<?php echo ASSETS_URL; ?>/img/logo.png" alt="Proto International Group"> </span>
	</div>
</a> </span>

</header>

<div id="main" role="main">

	<div id="content" class="container">

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="well no-padding">
					<form action="" name="login" method="post" id="login-form" class="smart-form client-form">
						<header>
							Iniciar Sesión
						</header>

						<fieldset>
							
							<section>
								<label class="label">Documento</label>
								<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="text" value="" name="user">
									<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i>Por favor ingrese su documento</b></label>
								</section>

								<section>
									<label class="label">Contraseña</label>
									<label class="input"> <i class="icon-append fa fa-lock"></i>
										<input type="password" value="" name="pass">
										<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i>Por favor ingrese su contraseña</b> </label>
										<div class="note">
											<!--<a href="<?php echo APP_URL; ?>/forgotpassword.php">Forgot password?</a>-->
										</div>
									</section>

								</fieldset>
								<footer>
									<input type="submit"  value= "Iniciar Sesión" class="btn btn-primary">


								</footer>
							</form>

						</div>

					</div>
				</div>
			</div>

		</div>


		<?php 
	}else {
		?>
		<script type="text/javascript">
			window.location="admin.php";
		</script>
		<?php
	}
	include("inc/scripts.php"); 
	?>

	<script type="text/javascript">
		runAllForms();

		$(function() {
			$("#login-form").validate({
				rules : {
					email : {
						required : true
					},
					password : {
						required : true
					}
				},

				messages : {
					email : {
						required : 'Por favor ingrese su documento',
					},
					password : {
						required : 'Por favor ingrese su contraseña',
					}
				},

				errorPlacement : function(error, element) {
					error.insertAfter(element.parent());
				}
			});
		});
	</script>

	<?php 
	include("inc/google-analytics.php"); 
	?>