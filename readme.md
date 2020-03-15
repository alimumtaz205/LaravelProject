## Assignment No.2
### Laravel and Vue using mySQL

***********************************************

## Before running this project

1. Install Laravel 5.8 <br>
2. Vue.JS Pakage <br>
3. mySql database <br>
4. Atom or any other text editor <br>  
7. XAMPP or any other Server <br>

=>	Open 'XAMPP Control Panel' and start 'Apache' and 'mySQL' <br>
=>	Import database file 'database.sql' to mySQL server <br>
=>	Open 'Google Crome' or any other browser. <br>
=>  Import databse file 'database.sql' from the folder. <br>
=>	Open 'Command Prompt' of your window and Start server by using command 'php artisan serve' <br>
=>	Open browser and write 'localhost:8000 and press enter. <br>
=>	For 'Forgot Your Password' the link is store in 'logs' file inside the storage folder. 
	Copy the link from 'logs' file then paste to the browser. <br>


## Project Interface:

Index Page (Login and SignUp buttons) <br>
Login Page (Email, Password, Forgot Password?) <br>
Forgot Password (Mail for password reset is stored in Logs file in storage folder) <br>
Reset Password (E-Mail Address, Password, Confirm Password) <br>
SignUp Page (Username, E-mail, Picture (by default it will upload avatar), <br>
Password, Confirm Password) <br>
User Dashboard (Update Profile, Change Password?) <br>

## Database Name: assignment2

Tables: 
users (id, name, email, avatar, is_admin, email_verified_at, password, created_at, updated_at) <br>
password_resets (email, token, created_at) <br>
migrations(id, migration, batch) <br>
 

### Contributing
Author: Mumtaz Ali
