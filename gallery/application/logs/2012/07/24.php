<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-24 09:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-24 09:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/thethirdchild/www/kohana.test/gallery/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/thethirdchild/www/kohana.test/gallery/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/thethirdchild/www/kohana.test/gallery/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 09:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-24 09:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/thethirdchild/www/kohana.test/gallery/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 09:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-24 09:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/thethirdchild/www/kohana.test/gallery/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/thethirdchild/www/kohana.test/gallery/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/thethirdchild/www/kohana.test/gallery/index.php(109): Kohana_Request->execute()
#3 {main}