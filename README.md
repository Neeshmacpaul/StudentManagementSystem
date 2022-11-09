# Laravel Machine Test - StudentManagementSystem

Question : Create a students management system

Technology : Laravel ^9.2

# Prerequisite

PHP >= 8.1

# Installation Steps

    1. Clone Project Repository : git clone https://github.com/Neeshmacpaul/StudentManagementSystem.git
    2. Move to application folder : cd StudentManagementSystem
    3. Rename .env.example file to .env
    4. Create database on your database serve and update the DB details in .env file
    
       DB_CONNECTION=mysql
       DB_HOST=127.0.0.1
       DB_PORT=3306
       DB_DATABASE=students_management  
       DB_USERNAME=root                 
       DB_PASSWORD=password
       
    5. Run command
    
       composer update
       
    6. Run artisan command to generate APP_KEY 
       
       php artisan key:generate
       
    7. Execute database migrations and seed using following artisan commands
    
       php artisan migrate
       php artisan db:seed
       
    8. Run the application using command
    
       php artisan serve
       
    9. Use following credentials for login to the dashboard or you can create an account using Register option
    
       Username : superadmin@admin.com
       Password : superadmin@123
