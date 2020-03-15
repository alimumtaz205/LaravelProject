***********************************************

Assignment No.2

*********************************************** 



# Before running this project


1. Install Laravel 5.8


2. Vue.JS Pakage


3. MySql database

 
4. Atom or any other text editor  


7. XAMPP or any other Server







=>	Open 'XAMPP Control Panel' and start 'Apache' and 'mySQL'

=>	Import database file 'database.sql' to mySQL
=>	Open 'Google Crome' or any other browser.

=>  	Import databse file 'db.sql' from the folder.

=>	Open 'Command Prompt' of your window and Start server by using command 'php artisan serve' 
=>	Open browser and write 'localhost:8000 and press enter.

=>	For 'Forgot Your Password' the link is store in 'logs' file inside the storage folder. 
	Copy the link from 'logs' file then paste to the browser



**********************************


PROJECT INTERFACES:

**********************************

Index Page (Login and SignUp buttons)

Login Page (Email, Password, Forgot Password?)

Forgot Password (Mail for password reset is stored in Logs file in storage folder) 

Reset Password (E-Mail Address, Password, Confirm Password)

SignUp Page (Username, E-mail, Picture (by default it will upload avatar), 
Password, Confirm Password)

User Dashboard (Update Profile, Change Password?)



Database Name: assignment2


Tables: 
users (id, name, email, avatar, is_admin, email_verified_at, password, created_at, updated_at)

password_resets (email, token, created_at)

migrations(id, migration, batch)
 


****************************************
Author: Mumtaz Ali