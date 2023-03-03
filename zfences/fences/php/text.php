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
	$Company="Fences Speciality";
	$Domain='www.FencesSpeciality.com';//No dejar pleca al final del dominio
	$Address='Orlando Florida, St.Cloud ';

	$PhoneName="Telefono";
	$Phone='407-749-7750';
	$Phone2='407-749-7750';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='fencespecialityllc@gmail.com';$MailRef="mailto:".$Mail;
	$Services="Venta de cafe y Productos Derivados";
	$Estimates="Cotizaciones o Adquisiciones al Por Mayor";
	$Payment="Cash, Check, Zelle";
	$Experience="";
	$Schedule="Lunes a Viernes: 8:00am - 5:00pm";	
	$Cover="";

	$Facebook="https://www.facebook.com/CafeLaspraderas";
	$GoogleMap='<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.97757028144!2d-86.25741189617352!3d12.113687148497766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe200da0f8fb%3A0x18379fa307c5ebe8!2sCentroamerica%20Nte.%2C%20Managua!5e0!3m2!1ses!2sni!4v1665121161072!5m2!1ses!2sni" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
	
//Phrases
	$Description="Cafe Jinotegano Las Praderas gracias al clima, tecnicas de cultivo y posicion geografica, obtenemos una selecta y magnifica mezcla de cafe.";	
 	
	//Slide show frases :) 
	$Phrase = array(
		"",
	);
	
	$gall = "Fence Speciality serrvice and more.";


 
	//Home  etc. 
	$Home = array(		 
		"En Cafe Jinotegano las Praderas, Muchos de nuestros clientes Vienen a nosotros por nuestros productos naturales 100% organicos asi como tambien por nuestra experiencia en cuanto a cafe respecta.",
		"Asi que durante el tiempo que toma en que ellos nos encuentren, Pueden sentirse aliviados, sabiendo que encontraron la mejor solucion para las mañanas en sus casas. En Cafe Jinotegano Las Praderas, no nos excedemos en nuestro en cuanto al precio, Ofrecemos diferentes tipos de cafe de calidad que te daran esa energia que buscas para salir de tu casa con energias siempre y en las mejores condiciones.",
		"por varios años, nos hemos dedicado en dar lo mejor de lo mejor en todo lo que hacemos y como lo hacemos en cuanto a nuestros cultivos y cosechas de cafe para brindarle a todos nuestros queridos clientes lo mejor de lo mejor. Desde nuestra Fundacion en Jinotega, Cafe Las Praderas ha logrado mantener siempre una sonrisa en el rostro de nuestros clientes, y podemos estar seguros de que usted no sera la excepcion.",		
		);

		
	$About = array(
		"We individually assess each <br> plan and offer optimal solutions",
		"Our professional fence services include installation, maintenance and repair of wooden and metal fences. We will take care of every aspect of your fence needs including design and selection, installation, material selection and more!",
		);
		

   
	
	//services index parraf
	
	$Services_Parraf = array(
		"What You Will Get Form Us Check It",
		"There are variations available majoritaey suffered alteration words which look believable  dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.",
	);

	//Services index categories 
	$SN[0]="Fence Wood, aluminum, Metal";
	$SD[0]="remodelation of your fence is a simple and economical way to add quality to your property.";
	$SN[1]="Remodeling";
	$SD[1]="Professional fence services: from fences maintenance.";
	$SN[2]="Repair";
	$SD[2]="Repair of fence. Our team of professional will repair your fence at a reasonable cost.";
	$SN[3]="New Additions";
	$SD[3]="We offer all kinds of additions that the client requires";
	$SN[4]="Instalación";
	$SD[4]="Our fence repair service includes everything from simple repairs to complex excavations, so we can fix your fence no matter what the problem.";
	
	
	//Choose Us
	$ChooseT[0] = "Perfect Exterior";
	$Choose[0] = "High-quality exteriors and exclusive materials";
	$ChooseT[1] = "Team Of Professional";
	$Choose[1] = "We have a team of professionals in the field with years of experience";
	$ChooseT[2] = "Full Of Services";
	$Choose[2] = "We have all kinds of services to meet the most complex requirements the client's.";
	$ChooseT[3] = "24/7 Support";
	$Choose[3] = "trabajamos todos los dias de la semana para entregar lo mas rapido posible. ";
	$ChooseT[4] = "Unique Technology";
	$Choose[4] = "we have materials for all types of work and for all types of requires. ";
	$ChooseT[5] = "Attractive Fences";
	$Choose[5] = "Beautifully Fences with soft and colorful colors."; 

	// seccion video

	$Video_Text = array(
		"We Build, Your Dream",
		"Quality Comes First",
		"We use only professionally installed and maintained fences. Our fence installation services include removing existing fences and installing new ones to meet your needs.",
		"",
	);

	//seccion gallery index
	// fAaltante :) 

	//partner
	$Partner = array(
		"Super Partner",
		"There are variations available majoritaey suffered alteration words which look believable dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.",
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

	// footer text
	
	$footer = "We provide you with the best landscaping and lawncare service. <br> We create a beautiful landscape for your home or business with our <br> professional experience, we can do everything from planting flowers to <br> trimming trees and shrubs.";
	$por = "We create a beautiful landscape for your home or business with our professional experience, we can do everything from planting flowers to trimming trees and shrubs."; 




//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
