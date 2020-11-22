Built using Laravel and MySQL

This app is a console based application that will populate fake data to a database using faker, and will then allow the user to pull all users with active orders, pull all active orders, and then update the column 'updated_at' (according the order_id's parity).

How to Run:
1. git clone "https://github.com/edhale3/visaApp.git"
2. cd visaApp
3. composer install
4. rename '.env.example' to '.env'
5. Enter mysql shell with 'mysql -u [username] -p
   
   -Enter password
6. Run "CREATE DATABASE _dbname_" and then exit shell
7. Update environment variables DB_DATABASE, DB_USERNAME, and DB_PASSWORD to fit your created database and credentials.
8. Run "php artisan migrate:fresh" to run all migrations to date.
9. Run "php artisan db:seed --class=UserSeeder" to populate Users table with generated data.
10. Run "php artisan db:seed --class=OrderSeeder" to populate Orders table with generated data.
11. To view all users run "php artisan users"
12. To view all orders run "php artisan orders"
13. To update active orders according to ID number (even or odd) run "php artisan update"
14. To check that the updated_at column has been updated run "php artisan orders" again to view the difference between orders that have been updated and those that have not.
