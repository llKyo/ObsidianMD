<?php
    //Datos de conexión BD UNIVERSIS
$is_host_conexion = "LUPUS" ;
$is_basedatos_conexion = "DESA_UNIVERSIS" ;
$is_usuario_conexion = "USERUNIV_ADM" ;
$is_pass_conexion = "h667k889j4" ;

	//Conexión a Universis. Deja la variable conexion_UNIVERSIS para ocuparla como conexión
	$conexion_UNIVERSIS = sybase_connect($is_host_conexion,$is_usuario_conexion, $is_pass_conexion) or die("Error al conectar al conectar a la base de datos de Universis");

	//Base de Datos
	sybase_select_db($is_basedatos_conexion, $conexion_UNIVERSIS);		
	
//	Datos de conexión BD Finanzas Desarrollo
$is_usuario_finanzas = "Universis" ;
$is_password_finanzas = "desauniversis" ;
$is_bd_finanzas = "BdDevel" ;

//	Datos de conexión BD FSCU Desarrollo
$sHostConexion  = "SCORPIUS";
$sBaseDatos     = "FSCU";
$sUsuario       = "fscu_adm";
$sPass          = "k345p112h3";

	//-----------------------------------CONTRASEÑAS EXTERNAS-----------------------------------------//
//Matrícula de verano. Usuario y contraseña de report
$is_matricula_verano_usuario = "tav" ;
$is_matricula_verano_contrasena = "tav08" ;

//Claves de acceso Servidor OpenReport
$is_usuario_open_report = "srodriguez" ;
$is_password_open_report = "srodriguez09" ;
	
//FECHA MATRICULA CENTRALIZADA
$is_fecha_comprobante_centralizada = "16/09/2008" ;

//$DEBUG = true ; // activar para debuguear 
$GLOBALS['is_host_conexion_R']      = "LUPUS";
$GLOBALS['is_basedatos_conexion_R'] = "DESA_UNIVERSIS";
$GLOBALS['is_usuario_conexion_R']   = "USERUNIV_ADM";
$GLOBALS['is_pass_conexion_R']      = "h667k889j4";

//CREDENCIALES SQLSERVER
//Credenciales para pruebas de certificados
$is_host_sqlserver = "158.251.2.67:1433";
$is_user_sqlserver = "desa_consulta_lectura";
$is_pass_sqlserver = "d458h23m3RY";
$is_db_sqlserver = "DESA_DM_SF";
/*
$is_host_sqlserver = "158.251.2.55:1433";
$is_user_sqlserver = "consulta";
$is_pass_sqlserver = "c987h45h2";
$is_db_sqlserver = "DESA_INDICADOR_GESTION";
*/

//CREDENCIALES META4
$is_host_conexion_M4      = "META4DESA";
$is_basedatos_conexion_M4 = "META4DESA";
$is_usuario_conexion_M4   = "adminmeta4";
$is_pass_conexion_M4      = "meta42011";

/** Credenciales de google captcha **/
$sSecretKeyCaptchaGoogle = "6LdXeUkUAAAAADfrPfg_RwamC9NM6dOUmnqKrX_S";
   
?>