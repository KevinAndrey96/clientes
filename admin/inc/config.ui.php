<?php

$breadcrumbs = array(
	"Proto International Group" => APP_URL
);

$page_nav = array(
	"Administradores" => array(
		"title" => "Administradores",
		"icon" => "fa-key",
		"sub" => array(
			"Consultar" => array(
				"title" => "Consultar",
				"url" => APP_URL."/admin.php"
			),
			"Cambiar contraseña" => array(
				"title" => "Cambiar contraseña",
				"url" => APP_URL."/pass.php"
			)
		)
	),
	"Clientes" => array(
		"title" => "Clientes",
		"icon" => "fa-child",
		"sub" => array(
			"Consultar" => array(
				"title" => "Consultar",
				"url" => APP_URL."/clientes.php"
			)
		)
	),
	"Extras" => array(
		"title" => "Extras",
		"icon" => "fa-bell-o",
		"sub" => array(
			"Foto de perfil" => array(
				"title" => "Foto de perfil",
				"url" => APP_URL."/fotoperfil.php"
			)
		)
	)
);

$page_title = "Proto International Group";
$page_css = array();
$no_main_header = false;
?>