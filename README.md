# Fernlea
To-Do List

This is a 'To-do List' web application created with PHP, MySQL, and Javascript.

To run the application with XAMPP you most follow these steps (steps should be similar with most localhost server software):
1. Move all files to your local web directory (htdocs folder for xampp), create a folder name of your choice to hold the files
2. Run XAMPP and start the Apache service as well as MySql
3. Open your browser and navigate to either '127.0.0.1/' OR 'localhost/'
4. Open phpMyAdmin from the link at the top of the page
5. create a database named 'fernlea_todolist'
6. Import the SQL file that you've downloaded, to your new database
  -> NOTE : This file can be removed from the Hhtdocs folder and/or deleted now.
7. if you do not wish to use default settings for the database, ensure to modify the 'database.php' file, replacing the values of
  $dsn, $dsnUser, and $dsnPass accordingly.
8. In your web browser, search '127.0.0.1/[YourFolderNameHere]'
