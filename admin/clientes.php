<?php
session_start();
require_once("inc/init.php");
require_once("inc/config.ui.php");
$page_title = "Clientes";
$page_css[] = "your_style.css";
include("inc/header.php");
$page_nav["Clientes"]["sub"]["Consultar"]["active"] = true;
include("inc/nav.php");
include_once "controlador/conexion.php";
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
		$breadcrumbs["Clientes"] = "";
		include("inc/ribbon.php");
		?>
		<div id="content">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark">
						<i class="fa-fw fa fa-home"></i> 
						Clientes
						<span>>  
							Consultar
						</span>
					</h1>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				</div>
			</div>
			<section id="widget-grid" class="">
				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table id="jqgrid"></table>
						<div id="pjqgrid"></div>
						<br>
					</article>
				</div>
			</section>
		</div>
	</div>
	<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-den="true">
		<form name="" action="clientes.php" method="GET" id="">

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Buscar</h4>
					</div>
					<div class="modal-body"> 
						<div class="well well-sm well-primary">            
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="category">Buscar</label>
										<input type="text" class="form-control" name="buscar" id="buscar" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">                    
										<label for="category"> En</label>
										<select name='en' id="en" class="form-control">
											<option value="Nombres">Nombres</option><option value="Apellidos">Apellidos</option><option value="Telefono">Telefono</option><option value="Email">Email</option>
										</select>
									</div>
								</div>              
							</div>  
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancelar
							</button>
							<input type="submit" class="btn btn-primary"  value="Buscar""> 

						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<?php
	include("inc/footer.php");
}
?>
<?php 
include("inc/scripts.php"); 
?>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jqgrid/jquery.jqGrid.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jqgrid/grid.locale-en.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		jQuery("#jqgrid").jqGrid({
			<?php
			if(!$_GET['buscar'])
			{
				echo 'url:"Data/data_clientes.php",';
			}else
			{
				echo 'url:"Busqueda/busqueda_clientes.php?buscar='.$_GET[buscar].'&en='.$_GET[en].'",';
			}
			?>
			datatype : "json",
			height : 'auto',
			colNames : ['Acciones', 'id', 'Nombres', 'Apellidos','Telefono', 'Email', 'Contraseña'],
			colModel : [
			{ name : 'act', index:'act', sortable:false }, 
			{ name : 'id', index : 'id',editable : false ,hidden: true ,  align : "center",editable: false}, 
			{ name : 'Nombres', index : 'Nombres',  align : "center",editable : true }, 
			{ name : 'Apellidos', index : 'Apellidos', align : "center", editable : true }, 
			{ name : 'Telefono', index : 'Telefono', align : "center", editable : true }, 
			{ name : 'Email', index : 'Email', align : "center", editable : true }, 
			{ name : 'Contrasena', index : 'Contrasena', align : "center", editable : true,hidden:true }
			],
			rowNum : 15,
			rowList : [15, 30, 45],
			pager : '#pjqgrid',
			sortname : '',
			toolbarfilter: true,
			viewrecords : true,
			sortorder : "asc",
			gridComplete: function(){
				var ids = jQuery("#jqgrid").jqGrid('getDataIDs');
				for(var i=0;i < ids.length;i++){
					var cl = ids[i];
					var n= $("#jqgrid").getCell(ids[i],"Nombres");
					be = "<button class='btn btn-xs btn-default' data-original-title='Editar' onclick=\"jQuery('#jqgrid').editRow('"+cl+"');\"><i class='fa fa-pencil'></i></button>"; 
					se = "<button class='btn btn-xs btn-default' data-original-title='Guardar' onclick=\"jQuery('#jqgrid').saveRow('"+cl+"');\"><i class='fa fa-save'></i></button>";
					ca = "<button class='btn btn-xs btn-default' data-original-title='Cancelar' onclick=\"jQuery('#jqgrid').restoreRow('"+cl+"');\"><i class='fa fa-times'></i></button>";
					jQuery("#jqgrid").jqGrid('setRowData',ids[i],{act:be+se+ca});
				}	
			},
			editurl : "Edit/edit_clientes.php",
			caption : "Clientes",
			
			multiselect : false,
			autowidth : true,
			multiboxonly: true 


		});
		jQuery("#jqgrid").jqGrid('navGrid', "#pjqgrid", {
			edit : false,
			add : true,
			del : true,
			search : false,
			refresh: true,
		});
		jQuery("#jqgrid").navButtonAdd('#pjqgrid',{
			caption: "",
			buttonicon: "ui-icon-search",
			title: "Buscar",
			onClickButton: function(){ 		   	 	    	
				$("#search").modal();
			}, 
			position:"last"
		});
		jQuery("#jqgrid").jqGrid('inlineNav', "#pjqgrid",{
		add:false,	
		save:false,
		cancel:false,
		edit:false,
		search:false,
		});
		$('.navtable .ui-pg-button').tooltip({
			container : 'body',
			
		});
		


		jQuery("#m1").click(function() {
			var s;
			s = jQuery("#jqgrid").jqGrid('getGridParam', 'selarrrow');
			alert(s);
		});
		jQuery("#m1s").click(function() {
			jQuery("#jqgrid").jqGrid('setSelection', "13");
		});
		//$("#jqgrid").jqGrid("navGrid", "#pager",{add: false, edit: false, del: false, search: false, refresh: false});
		$(".ui-jqgrid").removeClass("ui-widget ui-widget-content");
		$(".ui-jqgrid-view").children().removeClass("ui-widget-header ui-state-default");
		$(".ui-jqgrid-labels, .ui-search-toolbar").children().removeClass("ui-state-default ui-th-column ui-th-ltr");
		$(".ui-jqgrid-pager").removeClass("ui-state-default");
		$(".ui-jqgrid").removeClass("ui-widget-content");

		    // add classes
		    $(".ui-jqgrid-htable").addClass("table table-bordered table-hover");
		    $(".ui-jqgrid-btable").addClass("table table-bordered table-striped");


		    $(".ui-pg-div").removeClass().addClass("btn btn-sm btn-primary");
		    $(".ui-icon.ui-icon-plus").removeClass().addClass("fa fa-plus");
		    $(".ui-icon.ui-icon-pencil").removeClass().addClass("fa fa-pencil");
		    $(".ui-icon.ui-icon-trash").removeClass().addClass("fa fa-trash-o");
		    $(".ui-icon.ui-icon-search").removeClass().addClass("fa fa-search");
		    $(".ui-icon.ui-icon-refresh").removeClass().addClass("fa fa-refresh");
		    $(".ui-icon.ui-icon-disk").removeClass().addClass("fa fa-save").parent(".btn-primary").removeClass("btn-primary").addClass("btn-success");
		    $(".ui-icon.ui-icon-cancel").removeClass().addClass("fa fa-times").parent(".btn-primary").removeClass("btn-primary").addClass("btn-danger");

		    $( ".ui-icon.ui-icon-seek-prev" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-prev").removeClass().addClass("fa fa-backward");

		    $( ".ui-icon.ui-icon-seek-first" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-first").removeClass().addClass("fa fa-fast-backward");		  	

		    $( ".ui-icon.ui-icon-seek-next" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-next").removeClass().addClass("fa fa-forward");

		    $( ".ui-icon.ui-icon-seek-end" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-end").removeClass().addClass("fa fa-fast-forward");

		})

$(window).on('resize.jqGrid', function () {
	$("#jqgrid").jqGrid( 'setGridWidth', $("#content").width() );
})

</script>


<?php 
include("inc/google-analytics.php"); 
?>
