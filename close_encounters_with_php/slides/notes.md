##### The best way to install **Composer** is to use the command line.

*In the terminal you will use these commands:*

    php -r "copy('http://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === 115a8dc7871f15d853148a7f
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    mv composer.phar /usr/local/bin/composer
    

We can use the Composer command to search for packages.

     composer search validation
     
Using the Composer CLI, we will install the respect/validation package.

     composer require respect/validation