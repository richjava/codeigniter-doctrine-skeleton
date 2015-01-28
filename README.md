# codeigniter-doctrine-skeleton
This is a starting point for a CodeIgniter project with modular views and assets, and Object Relational Mapping.

To learn more about ORM in CodeIgniter with Doctrine, visit: [https://github.com/wildlyinaccurate/CodeIgniter-2-with-Doctrine-2](https://github.com/wildlyinaccurate/CodeIgniter-2-with-Doctrine-2) and Integrating Doctrine 2 with CodeIgniter 2. For more on modularized views using a custom template, see: [https://github.com/anvoz/codeigniter-skeleton](https://github.com/anvoz/codeigniter-skeleton).

##Getting started##

To get started:

1. In PHPMyAdmin, create a database named "doctrinedb".
2. Run the doctrine.sql file. You'll find this file at the root of the project. An easy way to do this in PHPMyAdmin is to open the "SQL" tab, copy and paste in the raw SQL from the file and press "Go".
3. Go to application > config > database and configure your database settings (if they are different from what is set).
4. In application > controllers > welcome.php, uncomment the "doctrine section.

And you're good to go!
