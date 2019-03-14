<?php

require_once("inc/init.php");
require_once("inc/config.ui.php");

$page_title = "Foto de perfil";
$page_css[] = "your_style.css";
include("inc/header.php");
$page_nav["Extras"]["sub"]["Foto de perfil"]["active"] = true;
include("inc/nav.php");
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
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>
				<ol class="breadcrumb">
					<li>Home</li><li>Extras</li><li>Foto de perfil</li>
				</ol>

			</div>
			<div id="content">

<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-pencil-square-o fa-fw "></i> 
				Extras
			<span>> 
				Foto de perfil
			</span>
		</h1>
	</div>
	
<section id="widget-grid" class="">
	<div class="row">

		<article class="col-sm-12">
			<div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-0" data-widget-editbutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
					<h2>Foto de perfil </h2>

				</header>
				<div>

					<div class="jarviswidget-editbox">

					</div>
					<div class="widget-body">

						<form action="upload.php" class="dropzone" id="mydropzone"></form>

					</div>

				</div>

			</div>

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- row -->

	<div class="row">

		<style>
			.s2 {
				color: #D14;
			}

			.c1 {
				color: #998;
				font-style: italic;
			}

			.mi {
				color: #099;
			}
		</style>

		<div class="col-sm-12 col-md-12">
			
</section>
<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>
		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo ASSETS_URL; ?>/js/plugin/dropzone/dropzone.min.js"></script>

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {

			Dropzone.autoDiscover = false;
			$("#mydropzone").dropzone({
				addRemoveLinks : true,
				//maxFilesize: 0.,
				dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Arrastre la foto <span class="font-xs">a subir</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O haga click aquí)</h4></span>',
				dictResponseError: 'Error subiendo foto'
			});
		
		})

		</script>

<?php 
}
	//include footer
	include("inc/google-analytics.php"); 
?>