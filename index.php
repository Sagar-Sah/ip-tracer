<?php
echo "

█ █▀█ ▄▄ ▀█▀ █▀█ ▄▀█ █▀▀ █▀▀ █▀█
█ █▀▀ ░░ ░█░ █▀▄ █▀█ █▄▄ ██▄ █▀▄";
echo " \n^^^ Made by \033[1;32mAnonSagar\033[0m ^^^\n";
$ip = readline('Enter the IP address: ');

$data=file_get_contents('http://ip-api.com/json/'.$ip);
$new=json_decode($data);
if ($new->status!="success") {
	echo "Please enter a valid IP address.";
}
else{
echo "Tracing.\r";
sleep(1);
echo"Tracing.....\r";
sleep(3);
echo "Tracing......\r";
sleep(2);
echo "Traced!\r";
echo "\nCountry:".$new->country;
echo "\nRegion:".$new->region;
echo "\nISP:".$new->isp;
echo "\nORG:".$new->org;
}
?>