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
6. Create for the necessary pages a wordpress page in the administration (http://localhost/wp-admin). Necessary are the following (Name the pages (title) exactly like in the following list. The ID is the page title!):
    - `A little about myself`
    - `Crafted in Zurich – Switzerland`
    - `Part Coder!`
    - `Part Designer…`
7. Create the necessary blog articles in the administration as "Beiträge".

&rarr; Hint: The theme is located in `wordpress\wp-content\themes\eth-portfolio`
