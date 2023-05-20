> Clone the Repository

1.  Open your terminal or command prompt.
2.  Navigate to the directory where you want to clone the repository.
3.  Run the following command to clone the repository:
    > git clone https://github.com/iamPawanSaini/demo1.git

> Install Dependencies

    1. Go to the root directory of the project
    2. Run the following command to install the project dependencies using Composer
           > composer install

> Database Setup

    1. For XAMPP
        > Create a new MySQL database for your Drupal project.
            > you can follow these steps
                 1. Start XAMPP, Launch the XAMPP control panel and start the Apache and MySQL services.
                 2. Open a command prompt Open a command prompt or terminal window.
                 3. Navigate to the MySQL bin directory, Change your current directory to the MySQL bin directory within your XAMPP installation. The path may vary depending on your XAMPP installation directory                         and operating system. for windows system the patha is
                         **cd C:\xampp\mysql\bin**
                 4. Connect to MySQL: Run the following command to connect to the MySQL server
                    > mysql -u root
                 5. Once you are connected to the MySQL server, you can create a new database using the following command
                    > CREATE DATABASE your_database_name;
                 6. You can verify if the DATABASE created or not by running below command.
                    > SHOW DATABASES;
                 7. Use the following command to import the MySQL database
                    > mysql -u root my_drupal_db < C:\path\to\backup.sql (a database file attached in root folder named "newdb.sql").
                 8. After importing the database.
        > Create virtual host
            1. Open the virtual hosts configuration file:- Locate and open the httpd-vhosts.conf file, which is typically located in the "xampp\apache\conf\extra" directory.
            2. Configure the virtual host:- Add the following configuration to the httpd-vhosts.conf file:
                **<VirtualHost *:80>
                    DocumentRoot "C:/xampp/htdocs/your_drupal_project_folder"
                    ServerName demo.local
                </VirtualHost>**

            3. After this open host file which is locaeted at C:\Windows\System32\drivers\etc\hosts location.
                add this line in host file
                127.0.0.1 demo.local


            Now configure your db in settigs.php file this may looks like

                $databases['default']['default'] = array(
                   'database' => 'dbname',       //Your Db NAme
                   'username' => 'root',
                   'password' => '',
                   'host' => 'localhost',
                   'port' => '3306',
                   'driver' => 'mysql',
                   'prefix' => '',
                  );


                > Restart Apache and Mysql services and hit "demo.local" URL in your browser




      > If you are using Docker with Lando then should run below command
            > After cloning the project move to the root directory and open command window
            > Run command "lando init"
            > after this command lando will ask to choose a recipe Select "drupal9" next will ask for root folder and project name you can choose accordingly.
            > then Run " lando rebuild -y  " command
            > then "lando composer install"
            > once everything done Run " lando start  "
            > for importing db Run "   lando db-import <file-to-import>"


      Once you have done with the setup hit the local site url in browser
      > The admin Credentials are
                    Username :- admin
                    Pass:-  admin
      For the view listing page you need to go to below url
         " demo.local/node/2"





      Thanks and Regards
      Pawan Kumar







