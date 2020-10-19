# ubisoft_test_repo

in order to run this program on your computer follow these steps

-->first install xampp from the browser locally on your computer.
		xampp download link: https://www.apachefriends.org/download.html [while downloading, download the latest version]

-->next install the xampp application on your computer and after installation start the 'apache server' and 'mysql server'.
 		for more information on installation watch any of the youtube video or this one: https://www.youtube.com/watch?v=-f8N4FEQWyY

--> after both the servers have started open the admin tab and go to phpmyadmin page.

-->here create a new database with the name : 'ubisoft_test' and table with a name :'images'

-->the table should contain 4 columns- 'id','title','description' and 'image' .
    make 'id' as the primary key and turn on auto increment option as this column should increase automatically with each entry

--> in the files 'post.php','insert.php','delete.php' and 'queue.php' update ypur mysql login username and password if they 	are not as states:
		username: 'root'
		password:  '' [none]

--> now to run this copy paste this on your browser URL : localhost/ubisoft_test_repo/test.php

--> to check if your connection to your database has been successfully established,
 	type this on your browser URL: localhost/ubisoft_test_repo/insert.php and check if the screen shows any error or 'connection established'.

--> now input the image details by entering the title , the description and the image URL by pressing the submit button.

--> enter a minimum of 8 images to see the actual effect.

--> to view the photos click on 'view photos'