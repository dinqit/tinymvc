<?php
require_once(MODELS."template.php");
$title='MCV:Home';

$message = "Dit is een test";
//calling the template 
$template = new Template;
//navigation in the head
$template->assign('hnav',array(
	array("num"=>"1","title"=>"Home",'href'=>WWW_URI),
	array("num"=>"2","title"=>"Diensten",'href'=>WWW_URI.'diensten'),
	array("num"=>"3","title"=>"Getuigenissen",'href'=>WWW_URI.'diensten'),
	array("num"=>"4","title"=>"Projecten",'href'=>WWW_URI.'projecten'),
	array("num"=>"5","title"=>"Contact",'href'=>WWW_URI.'contact')
));
$image_1=IMAGES.'snellville-websites-today-front-page.jpg';
$image_2=IMAGES.'speed4.jpg';
$image_3=IMAGES."Green-Forest-Wallpaper-green-20036604-1280-1024.jpg";
$image_4=IMAGES."fast.jpg";
// bringing the images to the stage
$template->assign('main_images',array(
array("src"=>$image_1,"alt"=>'Keywords to find'),
array("src"=>$image_2,"alt"=>'SpeedWay to follow'),
array("src"=>$image_3,"alt"=>'Wooble with Grooble'),
array("src"=>$image_4,"alt"=>'Nice Forest Power')
));
//$_SESSION['msg']="Dit is een sessie bericht";
$template->assign('title',$title);
$template->assign('css','/mvc/public/css/style.css');
$template->assign('header',"DinQIT");
$template->assign('message',$message);
$template->registerPlugin('function','set_message','show_session_message');
$template->registerPlugin('function','unset_message','unset_message');
$template->assign('fnav',array(
	array("num"=>"1","title"=>"Home",'href'=>WWW_URI),
	array("num"=>"2","title"=>"Login",'href'=>WWW_URI.'login'),
	array("num"=>"3","title"=>"Registreren",'href'=>WWW_URI.'registreren'),
	array("num"=>"4","title"=>"Voorwaarden",'href'=>WWW_URI.'voorwaarden'),
	array("num"=>"5","title"=>"Vrijwaring",'href'=>WWW_URI.'vrijwaring')
));
$template->display('home/index.xhtml');

//displaying the session message
function show_session_message(){
	if(isset($_SESSION['msg'])){
		echo "<p>".$_SESSION['msg']."</p>";
	}
}

//unsetting the session if it was set
// in the first place
function unset_message(){
	unset($_SESSION['msg']);	
}
?>
<script type="text/javascript" src="/mvc/public/js/image_slide.js"></script>
<script type="text/javascript">
	//TODO
</script>
