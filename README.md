Please Follow These Steps to Run the Project on Your Local Machine:

Make sure to first create a database in your XAMPP PHPMyAdmin named "import_excel_db"

After unzipping the folder and creating the database in your XAMPP, run the following commands to migrate the table into the database and seed the data. Please run both commands in the given sequence:

2.1. php artisan migrate

After running the command, check if the data and table have been imported successfully into your XAMPP PHPMyAdmin.

Then, run the command to start the project: php artisan serve.

Note:

Ensure that your PHP version is >= 8.0.

Make sure your Composer version is updated to at least version 2.

Backend Logic of This Assignment:

1 . Only CSV extensions are accepted.

2 . When you import an Excel file, it stores the file name in a table.

3 . It creates a dynamic table where the table columns are the headers from the Excel file, and the table name is the Excel file name.

4 . Queue jobs are not used because they require storing the file first on the local/server, but currently, data insertion is done using chunking, which is also fast.

5 . Files are listed with hyperlinks to view their details.

6 . After clicking a file, you can view the details of the Excel file in a table format.

7 . Traits, services, and Requests are used for validation.
