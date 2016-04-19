# ETHZWebEngineering2016
ETHZWebEngineering2016

## Installation Wordpress
1. Download XAMPP
2. Edit the configuration file of Apache (xampp\apache\conf\httpd.conf, line ~244ff.):

    `DocumentRoot "C:/Users/Sebastian/git/ETHZWebEngineering2016/wordpress"`
    
    `<Directory "C:/Users/Sebastian/git/ETHZWebEngineering2016/wordpress"`
3. Start `xampp-control.exe` and start up Apache and MySQL
4. Create a new database "eth_web_engineering" on http://localhost/phpmyadmin
5. Setup Wordpress on http://localhost (everything is stored in the database)

&rarr; Hint: The theme is located in `wordpress\wp-content\themes\eth-portfolio`
