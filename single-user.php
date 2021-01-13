<?php

error_reporting(0);

echo "\n# UserRecon\n";
echo "# Created By MarsHall\n\n";
echo "Input username : ";
$user  = trim(fgets(STDIN));
echo "\n\n";

// Instagram
$url = "https://www.instagram.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[19])){   
         echo "[+] Instagram: Found >> $url\n";       
     } else {
         echo "[×] Instagram: Not Found\n";    
     }

// facebook
$url = "https://facebook.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[19])){   
         echo "[+] Facebook: Found >> $url\n";       
     } else {
         echo "[×] Facebook: Not Found\n";    
     }

// twitter
$url = "https://www.twitter.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[19])){   
         echo "[+] Twitter: Found >> $url\n";       
     } else {
         echo "[×] Twitter: Not Found\n";    
     }

// youtube
$url = "https://www.youtube.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[19])){   
         echo "[+] Youtube: Found >> $url\n";       
     } else {
         echo "[×] Youtube: Not Found\n";    
     }

// blogger
$url = "https://$user.blogspot.com";
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Blogger: Found >> $url\n";       
     } else {
         echo "[×] Blogger: Not Found\n";    
     }
     
// tumblr
$url = "https://$user.tumblr.com";
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Tumblr: Found >> $url\n";       
     } else {
         echo "[×] Tumblr: Not Found\n";    
     }
     
// wordpress
$url = "https://$user.wordpress.com";
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Wordpress: Found >> $url\n";       
     } else {
         echo "[×] Wordprees: Not Found\n";    
     }

// pinterest
$url = "https://www.pinterest.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[19])){   
         echo "[+] Pinterest: Found >> $url\n";       
     } else {
         echo "[×] Pinterest: Not Found\n";    
     }

// Github
$url = "https://github.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Github: Found >> $url\n";       
     } else {
         echo "[×] Github: Not Found\n";    
     }

// Github
$url = "https://gitlab.com/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Gitlab: Found >> $url\n";       
     } else {
         echo "[×] Gitlab: Not Found\n";    
     }
     
// Pastebin
$url = "https://pastebin.com/u/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Pastebin: Found >> $url\n";       
     } else {
         echo "[×] Pastebin: Not Found\n";    
     }

// Wattpad
$url = "https://www.wattpad.com/user/".$user;
$get = get_headers($url);
if (preg_match('/HTTP\/1.1 200/i', $get[0])){   
         echo "[+] Wattpad: Found >> $url\n";       
     } else {
         echo "[×] Wattpad: Not Found\n";    
     }


?>