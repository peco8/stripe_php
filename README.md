# stripe_php
This is stripe payment demo written in php

## prerequisite
- **php5.5** or higher ver
- **mysql**
  - Here is the tip if you already setup docker environment
  ( run `docker run --name mysql -e MYSQL_ROOT_PASSWORD=mysql -d -p 3306:3306 mysql` )
  
  1. Login `username => root` & pass => `mysql` with any client or If you prefer in command line, `mysql -h $(docker-machine ip default) -uroot -p`
  2. Here is the query 
  ```
  CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `premium` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
  
  INSERT INTO `users` (`id`, `username`, `email`, `premium`)
VALUES
	(1, 'peco8', 'peco8@mail.com', 0);

  ````
  
## setup

1. git clone git@github.com:peco8/stripe_php.git
2. cd ./stripe_php
3. composer install
4. set up your stripe API key in `app/init.php `
5. run 'php -S localhost:8000'
5. play around!!!
