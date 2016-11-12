<?php 
if(isset($_GET['music']) && $_GET['music'] == "on"){
	exec('cvlc /var/www/html/moc/music/0451.mp3 -R');
}else if(isset($_GET['music']) && $_GET['music'] == "off"){
	exec('killall vlc');
}

?>
