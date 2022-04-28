<?php
$miCorreoK = "kevin.trivino@pucv.cl";
/*********************************************************************************************************
Autor             : Marcelo Aranda Tapia
Fecha de creación : 21/07/2009
Descripción       : Permite almacenar variables globales para su uso dentro del navegador.
**********************************************************************************************************/

//Variables de configuración del sistema.

//DIRECTORIO RAIZ MIGRACION
//$GLOBALS['gs_directorio_raiz_migracion']       = "traduccion_navegador_academico";
//IP SERVER MIGRACION}    
//$GLOBALS['ip_server_migracion']        = "158.251.4.101";
//--DIRECTORIO RAIZ
$GLOBALS['gs_directorio_raiz']     = "UDS/kevin.trivino/NA";
//--DIRECTORIO RAIZ FTP
$GLOBALS['gs_directorio_raiz_ftp'] = "UDS/kevin.trivino/NA";
//--VARIABLE GLOABL COLOR
$GLOBALS['gs_color_fila']          = "class='color'";
//Variable Protocolo HTTP   
$GLOBALS['gs_protocolo']           = "http://";


//----------------------------------- CREDENCIALES DE CONECION A LDAP ------------------------
	$GLOBALS['is_responsable_servicio']=$miCorreoK;
	
	$GLOBALS['gs_directorio_configuracion_ldap'] 	   = "/home/directorioper/"; //aqui ahi que poner la ruta del archivo de configuracion de servidores ldap. --- poner / al final ---!!
	
	
	//----------------------------------- CREDENCIALES DE CONECION A ACTIVE DIRECTORY ------------------------
	// --- Estado cuentas de usuario Active directory 
	$GLOBALS['is_usuario_activo_ad']=544;
	$GLOBALS['is_usuario_inactivo_ad']=546;
	/*$GLOBALS['is_usuario_activo_ad']=66080;
	$GLOBALS['is_usuario_inactivo_ad']=66082;*/
	

//-----------------------------DESTINO POST CAMBIO DE CLAVE USUARIO-------------
	$GLOBALS['is_url_destino'] = "www.pucv.cl";
	//---------DOMINIOS ------------
	$GLOBALS['is_dominio_empleado']="ucv.cl";
	$GLOBALS['is_dominio_alumno']="mail.ucv.cl";
	
	//CONFIGURACION DE VARIABLES PARA CONEXIÓN RESPALDO
	$GLOBALS['REPORTES_DESFASE']        = 1;//indica si se ocupa o no la base de respaldo



	//CONFIGURACION DE PARA ESTADISTICAS PUCV
	$GLOBALS['IP_PIWIK']        = "158.251.5.73";//indica si se ocupa o no la base de respaldo
	$GLOBALS['NOMBRE_MODULO']   = "piwik";//indica si se ocupa o no la base de respaldo
	$GLOBALS['SITE_PIWIK_PROG_DOCENCIA']     = 10;
	$GLOBALS['SITE_PIWIK_FICHA_CONSOLIDADA'] = 13;
	$GLOBALS['SITE_PIWIK_AVANCE_CURRICULAR'] = 14;
	$GLOBALS['SITE_PIWIK_ACTAS'] 			 = 15;
	$GLOBALS['SITE_DEUDAS_SANCIONES'] 		 = 16;
	$GLOBALS['SITE_INSCRIPCION_TUTORIAL']	 = 17;
	$GLOBALS['SITE_CERTIFICADOS']			 = 18;
	$GLOBALS['SITE_RESOLUCIONES']     		 = 19;


//--Utilizadas para el envío de imail el Log de errores
	$GLOBALS['is_destinatario_correo_error'] = $miCorreoK; 
	$GLOBALS['is_remitente']                 = $miCorreoK;
	$GLOBALS['is_asunto']                    = "Log de Error Universis Desarrollo";
	
//--CORREOS CUPONERA - FINANZAS
	$GLOBALS['is_destinatario_correo_cuponera'] = $miCorreoK; //modificado por Cristina Fuentealba 03-09-2013
	$GLOBALS['is_remitente_correo_cuponera']    = $miCorreoK;
	
//--CONSTANTE DE FINANZAS
	$GLOBALS['ig_ambiente_finanzas']  = "_DES"; //_DES = DESARROLLO; (VACIO) = TESTING; _PROD = PRODUCCIÓN


//--CORREOS SERVIPAG - FINANZAS
		$GLOBALS['is_destinatario_correo_servipag'] = $miCorreoK;
		$GLOBALS['is_remitente_correo_servipag']    = $miCorreoK;
		$GLOBALS['is_asunto_servipag']              = "Información de Pagos Servipag a Finanzas";


// variables globales de correo para el error en el arancel de matrícula.
$GLOBALS['is_destinatario_error_arancel_matricula'] = $miCorreoK; //modificado por Cristina Fuentealba 05-01-2016
$GLOBALS['is_remitente_error_arancel_matricula']	= $miCorreoK;
$GLOBALS['is_asunto_error_arancel_matricula']		= "MATRICULA CENTRALIZADA: Error con alumno sin datos de arancel desde ";

// Fecha vencimiento comprobante matrícula centralizada.
// $is_fecha_comprobante_centralizada_pregrado	=	"05/08/2015";

// Fecha vencimiento comprobante matrícula centralizada.
// $is_fecha_comprobante_centralizada_postgrado	=	"10/08/2015";

//Marcelo Aranda - 08-03-2010 - se agrega variable para control de correo en cargador de pagos,
// proceso de matrícula activo, switch entre Primer año = 1 y Curso Superior = 2.
$GLOBALS['is_proceso_matricula_activo'] = 1;

// correo para formalización matrícula desde matrícula Centralizada y cargador de pagos para Curso Superior
$GLOBALS['is_remitente_formaliza_matricula_cs'] = $miCorreoK;
$GLOBALS['is_asunto_formaliza_matricula_cs']    = "Formalizaci&oacute;n de matr&iacute;cula";

// correo para cargador de pagos para Primer Año
$GLOBALS['is_remitente_formaliza_matricula_pa'] = $miCorreoK;
$GLOBALS['is_asunto_formaliza_matricula_pa']    = "Formalización de matrícula";
$GLOBALS['ib_forzar_destinatario_matricula_pa'] = true;
$GLOBALS['is_destinatario_matricula_pa'] = $miCorreoK;

//asunto para el correo informativo del certificado de alumno regular desde matrícula centralizada.
$GLOBALS['is_asunto_certificado_matricula_cs']    = "Emisión Certificado Alumno Regular";


//asunto para el correo informativo del certificado de alumno regular desde cargador de pagos.
$GLOBALS['is_asunto_certificado_matricula_pa']    = "Emisión Certificado Alumno Regular";


$GLOBALS['is_ambite_procedimiento_finanzas']    = "Finanzas"; //Desarrollo
//$GLOBALS['is_ambite_procedimiento_finanzas']    = "FINTESTING"; //Testing
//$GLOBALS['is_ambite_procedimiento_finanzas']    = "Finanzas"; //Producción

/***********************************************************************************************************/
//variables globales de correo para Correo Gmail
//Creado: Carolina Jimenez
//05-05-2010
/**********************************************************************************************************/
$GLOBALS['gs_destinatario_admin_gmail'] = $miCorreoK;
$GLOBALS['gs_domino_correo'] = "mail.pucv.cl";
$GLOBALS['gs_firma_correo_excepciones'] = "Servicio automático de administración de correo.";
$GLOBALS['gs_archivo_terminos_uno'] = "TerminosUsoPUCV.pdf";
$GLOBALS['gs_remitente_correo'] = $miCorreoK;

//jorge carrasco - se agrega variable para indicar el año desde cuando se acepta para registrar estudios
$GLOBALS['ii_ano_minimo_estudio'] = 1935;

//jorge carrasco - se agregan variables para indicar codigos para envio de emails
$GLOBALS['codigo_sistema_profesores'] = 1;
$GLOBALS['codigo_aplicacion_profesores'] = 2;

$GLOBALS['correo_envio_profesores'] = $miCorreoK;

$GLOBALS['correo_destino_dpd'] = $miCorreoK;

$GLOBALS['correo_destino_profesor_unidad'] = $miCorreoK;

$GLOBALS['correo_destino_profesor_jerarquia'] = $miCorreoK;

$GLOBALS['correo_destino_profesor_cargo_administrativo'] = $miCorreoK;

//asunto para el correo informativo del certificado de alumno regular desde cargador de pagos.
$GLOBALS['is_asunto_certificado_matricula_pa']    = "Emisión Certificado Alumno Regular";

// Marcelo aranda 31-03-2010 - se agrega variable para indicar el año desde cuando se requiere tener registro de las publicaciones para el sistema de investigación
$GLOBALS['ii_ultimo_ano_registro_publicaciones']	= 2000;

//Marcelo aranda 31-03-2010 - se agrega variable para indicar el año desde cuando se requiere tener registro de los proyectos para el sistema de investigación
$GLOBALS['ii_ultimo_ano_registro_proyectos']	= 2000;

//Marcelo aranda 07-03-2011 - se agrega variable para indicar el año desde cuando se requiere tener registro de las patentes para el sistema de investigación
$GLOBALS['ii_ultimo_ano_registro_patentes']	= 1990;

//Marcelo aranda 07-03-2011 - se agrega variable para indicar el año desde cuando se requiere tener registro de las marcas para el sistema de investigación
$GLOBALS['ii_ultimo_ano_registro_marcas']	= 1990;

//Marcelo Aranda al 29/10/2013 se agrega varialbe para el comienzo de registro de años en donde se comienzan a crear concursos
$GLOBALS['ii_inicio_ano_concursos']	= 2013;

// Marcelo aranda 02-06-2010 - se agrega variables para obtención de mensajes de plantillas sistemnia investigación
$GLOBALS['ii_codigo_sistema_informacion_dii']	= 1;

$GLOBALS['ii_codigo_aplicacion_dii']			= 1;

// Marcelo Aranda 03-11-2010 - se agrega variable para mensajes predeterminados en sistema de investigación en módulo de proyectos sección recursos
$GLOBALS['is_titulo_mensaje_tabla_sin_cuadrar']		= "Estimado Usuario:";
$GLOBALS['is_cuerpo_mensaje_tabla_sin_cuadrar']		= "Por favor verifique y actualice los montos desplegados en la tabla anterior ya que no están cuadrando con el total del proyecto.";

// correo sistema investigación
$GLOBALS['is_remitente_sistema_investigacion'] 		= $miCorreoK;

$GLOBALS['is_destinatario_sistema_investigacion'] 	= $miCorreoK;

//agregado al 28/11/2013 por Marcelo Aranda tapia
$GLOBALS['is_correo_soporte_sistema_investigacion'] 		= $miCorreoK;
$GLOBALS['is_anexo_soporte_sistema_investigacion'] 		= "227 3187";

//tipo de parentesco utilizado e ficha de profesor
//$GLOBALS['tipo_parentesco'] = 15;
//Carolina Jimenez 29-04-2011 - Se agrega variable para el envio de correo por problemas en registro asistencia alumnos
$GLOBALS['is_destinatario_registro_asistencia'] = $miCorreoK;
$GLOBALS['is_remintente_registro_asistencia'] = $miCorreoK;
$GLOBALS['is_asunto_registro_asistencia']    = "Problemas registro asistencia Alumnos";


//Periodo para estadísticas de matrícula cs pregrado
//Periodo para estadísticas de matrícula cs pregrado y postgrado
$id_est_matcs_ano = 2022;
$id_est_matcs_np = 1;
$id_est_matcs_tp = 1;

//Variables generadas para las estadísticas del eco página est_eco
$ii_ano_est_eco  = 2022;
$ii_proc_est_eco = 1;
//////////////////////fin variables estadísticas eco ////////////////


/////////////////// Inhabilidad Preinscripciones////////////////////////////////
//Esta variable tiene el porcentaje mínimo exigido de respuestas que debe tener contestadas un alumno
$ii_porje_preins_encu = 100;
///////////////////////////////////////////////////////////////////////////////

//TIPO DE CUENTA PRESUPUESTARIA QUE SE UTLIZARA PARA PROYECTOS
$GLOBALS['gi_t_cuenta_proyectos'] 	= 6;

//Número de días adicionales para la fecha de vencimiento para la impresion de cuponeras, cuando la cuota esta vencida
$GLOBALS['gi_num_dias_adicionales'] 	= 4;

//agregado por jorge carrasco para obtener indicar año inicial para listados de tipo de proceso de beneficio
$GLOBALS['ii_primer_ano_beneficios'] = 2008;

//Varible para el tipo de sistema reporte
$GLOBALS['codigo_sistema_inf_reporte'] = 2;

//--CORREOS POSTULACIONES	
//Modificado por: Fabian Arias
//Fecha:          04-07-2019
//Descripcion:    Se modifica $GLOBALS['is_remitente_correo_postulacion'] ya que generaba casillas inexistentes.
//$GLOBALS['is_remitente_correo_postulacion']    = "Postulaciones Postgrado PUCV";
$GLOBALS['is_remitente_correo_postulacion']    = $miCorreoK;
$GLOBALS['is_asunto_postulacion']              = "Validación correo electrónico";

//agregado por Marcelo Aranda para obtener el año inicial para las busquedas de carga de beneficios
$GLOBALS['ii_ultimo_ano_carga_beneficio'] = 2000;

// agregado por Marcelo Aranda al 29-08-2011 para obtener el correo al que se informara acerca de cambios realizados en los beneficos a travez de cargas masivas.
/* Mod. FernandoVelascoPerez el 20190527 por solicitud en ticket 701823 destinatarios mail beneficios */
$GLOBALS['is_destinatario_carga_masiva_beneficios'] = $miCorreoK;
$GLOBALS['is_remintente_carga_masiva_beneficios'] 	= $miCorreoK;
$GLOBALS['is_asunto_carga_masiva_beneficios']  		= "Carga masiva de beneficios";
	
//variable para ejecutar verificacion de usuarios en aula virtual
$GLOBALS['gi_verifica'] 	= 1; //1: verifican todos; 2:verifica solo el profesor; 3: no verifica nadie
$GLOBALS['gi_sincroniza'] 	= 1; //1: sincroniza en editar e ir; 2:sincroniza solo en editar; 3: no sincroniza  
//TOKEN PARA WEBSERVICES AULAVIRTUAL MOODLE
$GLOBALS['token'] 	= 'ed8a3f685072c8c540d2f90bdab70645'; //DESARROLLO
//$GLOBALS['token'] 	= '6ced8a7d4175efa4d65e86345e92aacb'; //TESTING
//$GLOBALS['token'] 	= '9fb6bac21786de2702bf712839a665bd'; //PRODUCCION

/* ojo moodle funcionando 3.5 */
$GLOBALS['domainname'] 	= 'https://desamoodlev35.ucv.cl'; //DESARROLLO
//Direccion donde debe ir webservise AULAVIRTUAL MOODLE
/* moodle desarrollo anterior */
//$GLOBALS['domainname'] 	= 'http://desamoodlev3.ucv.cl/'; //DESARROLLO
//$GLOBALS['domainname']  	= 'http://avtesting.ucv.cl'; //TESTING
//$GLOBALS['domainname'] 	= 'http://aulavirtualmoodleact.ucv.cl'; //PRODUCCION

// agregado por Marcelo Aranda al 21-09-2011 por mensaje especial para cursos de 1 semestre de 2011 que seran cerrados sin tener completado el procesos de retiro de cursos
//$GLOBALS['is_mensaje_acta_alumno']		= "<b>Importante:</b> La informaci&oacute;n presentada es preliminar. A partir del lunes 10 de Octubre se dispondr&aacute; de la informaci&oacute;n definitiva.";
//$GLOBALS['is_mensaje_acta_docente']		= "<b>Estimado Profesor:</b>  Le recordamos que la informaci&oacute;n de alumnos en el acta del curso es temporal y ser&aacute; ratificada una vez que finalice el proceso de Retiro Parcial para aquellos alumnos que lo soliciten  hasta el viernes 30 de Septiembre. A contar del lunes 10 de Octubre se dispondr&aacute; de la informaci&oacute;n definitiva para la impresi&oacute;n de las actas oficiales.";

// agregado por Marcelo Aranda al 26-09-2011 por mensaje especial para profesores en cursos de 1 semestre de 2011 que seran cerrados sin tener completado el procesos de retiro de cursos.
//$GLOBALS['is_mensaje_acta_docente_provisorio'] = "Luego de presionar el bot&oacute;n \"Cierre Provisorio\" no podr&aacute; modificar las notas.";

/************ PROYECTO TARIFICACION, DANIELA OLGUIN 18-10-2011 ****************/
// Variable para el valor por minuto a todo destino para la facturación, esta variable aparace como 0 al cargar el buffer
$GLOBALS['ii_valor_minuto_TD'] = 41; // DOLGUIN 27-03-2015, se cambia de $55 a $41 por actualizacion de contrato

$GLOBALS['ii_t_moneda_garantia_fianza_cge'] = 2;

$GLOBALS['ii_primer_ano_cge'] = 2006;

$GLOBALS['ii_cota_maxima_cge'] = 2.0;
$GLOBALS['ii_aplica_cota_maxima_cge'] = 1;


//----------------------------BLOQUEO USUARIO	-----------------------------------
	$GLOBALS['gi_minutos_bloqueo_usuario'] = 12;


// agregado por Cristina Fuentealba 10-09-2012 para envio de correo a administrador de exalumnos
$GLOBALS['is_destinatario_exalumnos'] = $miCorreoK;
$GLOBALS['is_asunto_exalumnos'] = "Carga Masiva de Ex alumnos";
$GLOBALS['gi_tiempo_de_espera'] = 500000;

/*
 * Agrega por jorge Carrasco
 * variable encargada de indicar el año maximo para el que se pueden generar las actas para los cursos mediante la opcion de la implementada en la ficha de los cursos
 */
$GLOBALS['ii_max_ano_acta'] = 2001;

/*
 * Rmunoz 16:57 25-07-2013
 * @gi_c_unre_t_beneficio_postulaciones_dea ( int ) :	variable indica la unidad responsable en la tabla T_BENEFICIO
														con esto, se consulta sobre que beneficios tiene registrados esta unidad.
 */
$GLOBALS['gi_c_unre_t_beneficio_postulaciones_dea'] = 508;


/* INICIO  Mailing Rmunoz 14:39 08-08-2013  */
/* @gi_email_proceso_mailing ( string ) : indica el email que usa el procesamiento de mailing */
$GLOBALS['gi_email_proceso_mailing'] = $miCorreoK ;

/* @gi_nombre_proceso_mailing ( string ) : indica el nombre que usa el procesamiento de mailing */
$GLOBALS['gi_nombre_proceso_mailing'] = "Plataforma de Procesamiento de Mailing" ;

/* @gi_cantidad_maxima_correos_proceso ( int ) : indica la cantidad maxima de correos que se pueden procesar en un lote en el procesamiento de mailing */
// $GLOBALS['gi_cantidad_maxima_correos_proceso'] = 7000 ; // PRODUCCION
$GLOBALS['gi_cantidad_maxima_correos_proceso'] = 450 ; // DESARROLLO TESTING

/* @gi_cantidad_maxima_correos_proceso_por_lote ( int ) : indica la cantidad maxima de correos por lote que se pueden procesar */
// $GLOBALS['gi_cantidad_maxima_correos_proceso_por_lote'] = 500 ; // PRODUCCION
$GLOBALS['gi_cantidad_maxima_correos_proceso_por_lote'] = 50 ; // DESARROLLO TESTING

/* @gi_segundos_entre_lotes ( int ) : indica la cantidad de segundos entre lotes de correos */
$GLOBALS['gi_segundos_entre_lotes'] = 1560 ; // PRODUCCION
// $GLOBALS['gi_segundos_entre_lotes'] =  120 ; // DESARROLLO TESTING
/* FIN  Mailing Rmunoz 11:01 28-08-2013  */



/* INICIO  CONVENIOS FINANZAS Rmunoz 17:40 05-11-2014  */
	$ia_convenios[ "santander" ][ "valparaiso" ] = "0883" ;
	$ia_convenios[ "santander" ][ "santiago" ] = "0173" ;
	$ia_convenios[ "bci" ][ "valparaiso" ] = "1225" ;
	$ia_convenios[ "bci" ][ "santiago" ] = "128400" ; 
/* FIN  CONVENIOS FINANZAS Rmunoz 17:40 05-11-2014  */
	
//Correo Certificado  Cfuentealba 11-12-2014
$GLOBALS['gs_remitente_correo_certificado'] = $miCorreoK ;

$GLOBALS['gi_ano_incial_presupuesto_curso'] = 2014;

/* AGREGADO POR DANIELA OLGUIN */
//INFORMACIÓN MATRÍCULA PRIMER AÑO
$GLOBALS['ii_agno_matr'] = 2022;
$GLOBALS['ib_ingresa_a_matr'] = true;
$is_fecha_comprobante_matricula_pa	=	"03/02/2022"; //FECHA VENCIMIENTO DERECHO DE INSCRIPCIÓN 



// variables globales de correo para el error avance curricular
$GLOBALS['is_destinatario_error_avance_curricular'] = $miCorreoK;
$GLOBALS['is_remitente_error_avance_curricular']	= $miCorreoK;
$GLOBALS['is_asunto_error_avance_curricular']		= "AVANCE CURRICULAR: Error con alumno en Plan de estudio sin PLAN_MAXIMO_SEMESTRES - PLAN_TASA_AVANCE";



//Correo Informe de error Pago Resoluciones Finanzas  Maranda 10/05/2016 Proyecto INTEGRACIÓN PROG DOC + SIST RESOL
$GLOBALS['gs_remitente_error_pago_resolucion_finanzas'] = $miCorreoK;
//Correo quien envia PABLO ESCALONA 16/05/2016 Proyecto INTEGRACIÓN PROG DOC + SIST RESOL
$GLOBALS['gs_emisor_error_pago_resolucion_finanzas'] = $miCorreoK;

//correo de notificación por falta de UTM en el FSCU, en Producción debe ser xchavez@pucv.cl
//Creado por Roberto Moraga 31-08-2016
$GLOBALS['gsEmailNotificacionUtm'] = $miCorreoK;

$GLOBALS['ia_codigo_cc_ti'] = array(20,36,47,48);

/* BEGIN: Variables globales para Encuesta Docente. Fernando Velasco Perez 20161107 */

//Variable FTP encuesta docente para archivos word
$GLOBAL['gs_path_ftp_encuesta'] = "encuesta_rep/encuesta/";

// Variable para el envio de correo automatico para las notificaciones de encuesta.
$GLOBALS['gs_remitente_notificacion'] = $miCorreoK;
$GLOBALS['gs_remitente_procesamiento'] = $miCorreoK;

$GLOBALS['gs_asunto_notificacion'] = "Encuesta Docente desarrollo";

//para el envio en formato HTML
$GLOBALS['gs_headers_notificacion'] = "MIME-Version: 1.0\r\n";
$GLOBALS['gs_headers_notificacion'] .= "Content-type: text/html; charset=iso-8859-1\r\n";
$GLOBALS['gs_headers_notificacion'] .= "From: <".$GLOBALS['gs_remitente_notificacion'].">\r\n";
//direccion de respuesta, si queremos que sea distinta que la del remitente
$GLOBALS['gs_headers_notificacion'] .= "Reply-To: ".$GLOBALS['gs_remitente_notificacion']."\r\n";

// varibales para el envio automatico de notificiaciones.
$GLOBALS['gi_cantidad_por_lote_correo'] = 15;
$GLOBALS['gi_tiempo_delay_entre_lotes'] = 150; // valor en segundos

// cuota maxima para el envio de correos masivos.
$GLOBALS['gi_cuota_maxima_correo'] = 5000; 

/** Identificador google captcha **/
$sKeySitioCaptchaGoogle  = "6LdXeUkUAAAAAGnOnvN997pYpWeWFOMpOtC9IjKX";

/* END: Variables globales para Encuesta Docente. Fernando Velasco Perez 20161107 */
$GLOBALS['URL_MIGRACION'] = array();
//array_push($GLOBALS['URL_MIGRACION'],"http://158.251.4.101/traduccion_navegador_academico/");
array_push($GLOBALS['URL_MIGRACION'],"http://158.251.4.93/navegador_academico_desa/");
//VARIALE DE RUTA PARA ENVIAR LA DOCUMENTACION Y LOS CORREOS EN MATRICULA
$is_correo_matricula_pa	=	"http://158.251.4.93/mpa_desa/";

//MARCELO ARANDA TAPIA 20181004, agrega arreglo con perfiles que pueden programar las asignaturas "no programables"
$GLOBALS['perfil_excepcion_no_programable'] = array(149,153,70,12);

// Arreglo que permiten identificar los beneficios que pertenecen a la ley 21.091
$GLOBALS['beneficios_ley_21091'] = array(80,81,82);

//20200311- Carolina Jimenes -Tramite Grado PostGrado
$GLOBALS['$gs_ruta_decreto_finalizaciones']= "documentos/administrar_finalizaciones/";
$GLOBALS['$gs_selilla_aes']= "D19I2S5-D2I9S5C0";
//20200828- Vivian Espinoza - Alertas Academicas
$GLOBALS['gs_ruta_cambio_estado_incripcionAA']= "documentos/Alertas_academica/cambio_estado_inscripcion/";
//20201119 Vivian Espinoza para texto en comprobante matricula
$GLOBALS['is_muestra_mensaje_edFisica_Kine']= false;
$GLOBALS['is_muestra_informacion_en_comprobante']= false; 

//20210107 - Carlos Castro - Se crea correo para copia oculta de envío de Matrícula CS
$GLOBALS['is_copia_correo_mcs'] = $miCorreoK;

//20210411 - Patricio Schmidt - Se crea correo para copia oculta en adscripción de Minors
$GLOBALS['is_copia_correo_minors'] = $miCorreoK;
//20210525- Pablo Escalona - Seguimiento Planes de mejora
$GLOBALS['gs_ruta_sspmdoc']= "documentos/sspmdoc/";
?>
