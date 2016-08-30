<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello world</title>
    </head>
    <body>
        <?php
        require('phpQuery/phpQuery.php');
        
        phpinfo();
        exit();
        
        $url = 'https://www.rabobank.nl/particulieren/';
        $markup = file_get_contents($url);
        
        $document = phpQuery::newDocumentHTML($markup);
        
		print pq('head title')->html();
        	print "<br />";

        
        
        foreach (pq('h3') as $item) {
			print pq($item)->html();
			print "<br />";
		}

        

        
        echo "end of file reached"; 	
        ?>
    </body>
</html>
