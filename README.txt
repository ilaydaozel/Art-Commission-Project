Website link: https://artiye-app.herokuapp.com/home.php

Database Information:

mysql://b893d69c34f150:551cfc91@eu-cdbr-west-02.cleardb.net/heroku_a4c26417a470e78?reconnect=true

UN: b893d69c34f150
PW: 551cfc91
HOST: eu-cdbr-west-02.cleardb.net

IMPORTANT NOTES:
Normally uploading photo works successfully, but if there occurs any errors, it might be caused by the special character or spaces of the photo.


Project Requirements:

1- File I/O (maybe log events to a file?)
2- MySQL Connection - insert, select functions used.
3- Users should be able to Login or Register,
4- PHP sessions must be used,
5- Users must be able to do something at the site: Update their profiles, write messages, upload photos, whatever.
6- File upload function - can be "upload your avatar/photo"
7- Basic HTML commands (tables, images)
8- Must be 100% your own work; we check each upload, and if items that are not taught in class are used, or if the work is detected to belong to someone else, plagiarism rules of the school are applied.
9- Your project must be made for this class, for this term. Project of another class or for your employment will not be accepted.
10- Your project must work online

How I tried to meet the requirements?
1- In take_order.php file, I wrote the order informations to a txt file. You can see that file i/o code part of the take_order.php below:
$handle=fopen("customer_orders.txt", "a");
$order_line="Customer id:".$customer_id.", Customer name:".$customer_name.", Customer surname:".$customer_surname.", Customer address:".$customer_address.", Customer email:".$customer_email.", Medium:".$art_medium.", Photo:".$photo.", Paper size:".$paper_size.", Person amount:".$person_amount.", Comment:".$clean_comment.", Price:".$price."\n";
fwrite($handle, $order_line);
fclose($handle);

2- These functions are used in :
take_order.php -> insert, select
order_info.php _> select
change_address.php -> update
change_email.php ->select, update
signout.php -> delete
signup.php -> insert
auth.php -> select

3-Users can login from https://artiye-app.herokuapp.com/login.php link and register from  https://artiye-app.herokuapp.com/signup.php.
Log inned users can log out by pressing the log out button at the up right of the page.
Log inned users can also sign out from the website from https://artiye-app.herokuapp.com/signout.php link.

4-PHP sessions are used in every file of the webpage. 
$_SESSION['Authenticated'] tells the webpage if a user is log inned or not by checking if it equals to 0 or not. It also stores an array that contains user informations. By this way user informations can reached easily by every page without necessarily opening the database.
$_SESSION['Order'] stores the information of the order.

5- Users can upload photos and write comment while giving an order. https://artiye-app.herokuapp.com/pencil_form.php , https://artiye-app.herokuapp.com/watercolor_form.php these two links are for uploading a photo and writing comment.
 Later clicking "view your order" button, a page for confirming you order will be shown. In that page users can see their uploaded photo and their comment.
 If users click "confirm my order button", they can view their comment and photo in https://artiye-app.herokuapp.com/order_info.php page.
 
 Additionally, users can change their addresses in https://artiye-app.herokuapp.com/change_address.php. Users can change their email in https://artiye-app.herokuapp.com/change_email.php. The references for these pages are 
 also available in the upper right "MY ACCOUNT" section , the link is https://artiye-app.herokuapp.com/my_account.php. Users can later controll whether their informations are changed or not by viewing https://artiye-app.herokuapp.com/user_info.php.
