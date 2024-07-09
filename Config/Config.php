<?php 
	const BASE_URL = "http://localhost/wakami";
	 

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "wakami";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

 
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@wakami.com";
	const NOMBRE_EMPESA = "..: Wakami Eventos :..";
	const WEB_EMPRESA = "www.wakami@wakamieventos.com.com";

	const DESCRIPCION = "Transformamos cada evento en una experiencia única. Ofrecemos soluciones personalizadas en decoración para todo tipo de empresas, asegurando un servicio impecable y resultados que superan las expectativas. Garantía total en cada proyecto.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Imperial, Cañete";
	const TELEMPRESA = "+(51) 9000000";
	const WHATSAPP = "989796053";
	const EMAIL_EMPRESA = "wakami@wakamieventos.com";
	const EMAIL_PEDIDOS = "wakami@wakamieventos.com"; 
	const EMAIL_SUSCRIPCION = "info@wakami.com";
	const EMAIL_CONTACTO = "info@wakami.com";

	const CAT_SLIDER = "1,2,3,4,5";
	const CAT_BANNER = "6,7,8";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'wakami';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/eventoswakami";
	const INSTAGRAM = "#";
	

 ?>