if(isset($_GET['music']) && $_GET['music'] == "on"){
	exec('mocp -S');
	exec('mocp -c');
	exec('mocp -a /var/www/moc/music');
	exec('mocp -t shuffle');
	exec('mocp -p');

}else if(isset($_GET['music']) && $_GET['music'] == "off"){
	exec('mocp -x');
}
