<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="GT LAWNCARE";
	$Domain='www.GT-lawncare.com';//No dejar pleca al final del dominio
	$Address='316 W 12th St Columbia TN 38401';

	$PhoneName="Telefono";
	$Phone='931 398 4588';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='reyesvictorhugo52@gmail.com ';$MailRef="mailto:".$Mail;
	$Services="Venta de cafe y Productos Derivados";
	$Estimates="Cotizaciones o Adquisiciones al Por Mayor";
	$Payment="Efectivo, Cheques, Tarjetas de Credito o Debito y Transferencias";
	$Experience="";
	$Schedule="Lunes a Viernes: 8:00am - 5:00pm";	
	$Cover="";

	$Facebook="https://www.facebook.com/CafeLaspraderas";
	$GoogleMap='<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.97757028144!2d-86.25741189617352!3d12.113687148497766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe200da0f8fb%3A0x18379fa307c5ebe8!2sCentroamerica%20Nte.%2C%20Managua!5e0!3m2!1ses!2sni!4v1665121161072!5m2!1ses!2sni" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
	
//Phrases
	$Description="Cafe Jinotegano Las Praderas gracias al clima, tecnicas de cultivo y posicion geografica, obtenemos una selecta y magnifica mezcla de cafe.";	
 	
	//Slide show frases :) 
	$Phrase = array(
		"Nuestra reputacion ha sido construida por nuestro producto de calidad.",
		"Cultivo Organico y excelentes resultados.",
		"Orgullo en lo que hacemos y en nuestro equipo de cultivo.",
		"Promoviendo el cafe organico para cuidar de nuestra salud.",
	);
	


 
	//Home  etc. 
	$Home = array(		 
		"En Cafe Jinotegano las Praderas, Muchos de nuestros clientes Vienen a nosotros por nuestros productos naturales 100% organicos asi como tambien por nuestra experiencia en cuanto a cafe respecta.",
		"Asi que durante el tiempo que toma en que ellos nos encuentren, Pueden sentirse aliviados, sabiendo que encontraron la mejor solucion para las mañanas en sus casas. En Cafe Jinotegano Las Praderas, no nos excedemos en nuestro en cuanto al precio, Ofrecemos diferentes tipos de cafe de calidad que te daran esa energia que buscas para salir de tu casa con energias siempre y en las mejores condiciones.",
		"por varios años, nos hemos dedicado en dar lo mejor de lo mejor en todo lo que hacemos y como lo hacemos en cuanto a nuestros cultivos y cosechas de cafe para brindarle a todos nuestros queridos clientes lo mejor de lo mejor. Desde nuestra Fundacion en Jinotega, Cafe Las Praderas ha logrado mantener siempre una sonrisa en el rostro de nuestros clientes, y podemos estar seguros de que usted no sera la excepcion.",		
		);

		
	$About = array(
		"We individually assess each <br> plan and offer optimal solutions",
		"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.",
		);
		

   
	
	//services index parraf
	
	$Services_Parraf = array(
		"What You Will Get Form Us Check It",
		"There are variations available majoritaey suffered alteration words which look believable  dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.",
	);

	//Services index categories 
	$SN[0]="Lawncare Service General ";
	$SD[0]="El cultivo de nuestros granos de cafe de alta calidad siempre nos brindan una experiencia unica.";
	$SN[1]="landscaping Service General ";
	$SD[1]="Nos hemos adentrado en las diferentes opciones para satisfacer a nuestros clientes, de esta forma brindadoles opciones para todos los gustos.";
	$SN[2]="Fence Desing  Wood - Metal";
	$SD[2]="Con servicio de envio hasta la puerta de su hogar en compras de cafe en linea, nos satisface saber que siempre nos elige al momento de realizar sus compras de su dosis diaria de energia.";
	$SN[3]="Painting Service ";
	$SD[3]="Hemos decidido cultivar granos de la mas alta calidad para nuestros clientes que desean probar una experiencia inolvidable en sus mañanas con sabores distinguidos que solo nuestro cafe puede ofrecerles.";
	$SN[4]="Pavers Service";
	$SD[4]="Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..";
	$SN[5]="DriveWays Concrete";
	$SD[5]="Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..";
	
	//Choose Us
	$ChooseT[0] = "Perfect Interior";
	$Choose[0] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.";
	$ChooseT[1] = "Team Of Professional";
	$Choose[1] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.";
	$ChooseT[2] = "Full Of Services";
	$Choose[2] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.";
	$ChooseT[3] = "27/7 Support";
	$Choose[3] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.";
	$ChooseT[4] = "Unique Technology";
	$Choose[4] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.";
	$ChooseT[5] = "Attractive Building";
	$Choose[5] = "Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions."; 

	// seccion video

	$Video_Text = array(
		"We Build, Your Dream",
		"Quality Comes First",
		"To develop a financial strategy for your future, it's important for your financial professional to see a complete, 360-degree view of your financial picture, including how your retirement assets are intadfegrated and work with one another.",
		"",
	);

	//seccion gallery index
	// fAaltante :) 

	//partner
	$Partner = array(
		"Super Partner",
		"There are variations available majoritaey suffered alteration words which look believable dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.",
	);




	$Name = array(		 
		"Espresso",
		"Lounge ",
		"Home",		
		"Montero",	
		"Roast",
		"Zurekin",
		"Arratsaldean",
		"Egun on",
		);

		/*Productos Descripcion*/

	$Detail = array(		 
	"Saborea un café Nicaraguense con sabor atrevido pero suave y con notas dulces y vibrantes.",

	"Sírvete un delicioso café ligeramente tostado, delicado y sabroso, con una agradable suavidad.  ",

	"Este café  está lleno de sabor, con equilibradas notas de frutos secos y cacao y un delicado toque dulce que proviene del tueste.",	

	"El dulce tueste con notas de cacao intenso de esta mezcla hacen que esta taza de café sea equilibrada y deliciosa.",

	"Deleitate con el tueste de este café unico, delicioso con sabor y bastantes sensaciones con el tueste especial.",

	"Disfruta del mejor café acompañandote siempre en todo lo que hagas, como su nombre, siempre contigo.",

	"Debusta tu tarde con el café con el tueste indicado para brindar esas sensaciones del nostalgico atardecer que reconforta con solo verlo. ",

	"Nada como empezar tu día con el café que te da las energías, te brinda emociones y sensaciones solo con su increíble sabor acompañandote desde.",


	);



$Small = array(		 
	"10",
	"10",
	"15",
	"10",
	"11",
	"10",
	"15",
	"10",		
	);


$large = array(		 
	"20",
	"20",
	"30",
	"20",
	"22",
	"20",
	"30",
	"20"		
	);



//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
