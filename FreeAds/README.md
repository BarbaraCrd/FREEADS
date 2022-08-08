# BARFLATO
![forthebadge](https://i.ibb.co/K27QLTp/logo.png)
![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)

BarFlaTo is a free classified website inspired by LeBonCoin. Users can post ads, modify them, talk to each others and more..

Created by [@BarbaraCrd](https://github.com/BarbaraCrd), [@FlavienETC](https://github.com/FlavienETC) and [@TheoBoulanger](https://github.com/TheoBoulanger1) from Coding Academy by Epitech.


## How it's working

* Create an account by the login way then register
* Verify your account by cliking the button in the mail verification
* Enjoy and test all the features
* You can use our database to get an idea of how it's looking


## Features

User :
* Has a default avatar that he can change.
* Can post an add
* Can reply to an add
* Can reply to someone who's contacting him
* To Update your profile, go to Dashboard > Acount settings > Update button
* To Delete your profile, go to Dashboard > Acount settings > Delete button
* Got a "remember me" feature
* Email verification to get access to dashboard and post/reply to ads
* Forgot password feature
* Personalized emails notification

Ads :
* Has a specified region and category
* Has a title, a description, a price
* Has the possibility to have two pictures
* Has seller's and ad's information
* To update an add, go to Dashbord > Your ads > Show this ad > update button
* To delete an add, go to Dashboad > Your ads > Show this ad > Delete button

Search :
* Can search by only category or region or both at the same time
* Can do search by title


## To start

* Configure your mailtrap to get emails
* Remove NOT NULL of the collumn picture 2 in the posts table
* Be sure to have Laravel installed and configure your env file to put your mailtrap
* Add "files":[ "app/helpers.php" ] in autoload composer.json
```bash
dump-autoload
```  
* You can use your proper location/category or use ours 
```bash
INSERT INTO `categories` VALUES (1,'Women\'s Fashion',NULL,NULL),(2,'Men\'s Fashion',NULL,NULL),(3,'Home',NULL,NULL),(4,'Multimedia',NULL,NULL),(5,'Cars',NULL,NULL),(6,'Real Estate',NULL,NULL);

INSERT INTO `locations` VALUES (1,'Auvergne-Rhône-Alpes',NULL,NULL),(2,'Bourgogne-Franche-Comté',NULL,NULL),(3,'Bretagne',NULL,NULL),(4,'Centre-Val de Loire',NULL,NULL),(5,'Corse',NULL,NULL),(6,'Grand Est',NULL,NULL),(7,'Hauts-de-France',NULL,NULL),(8,'Île-de-France',NULL,NULL),(9,'Normandie',NULL,NULL),(10,'Nouvelle-Aquitaine',NULL,NULL),(11,'Occitanie',NULL,NULL),(12,'Pays-de-Loire',NULL,NULL),(13,'Provence-Alpes-Côte d\'Azur',NULL,NULL);
```  


### Prerequisites

```bash
composer require laravel/breeze
composer require intervention/images
php artisan breeze:install
```
## Made with

* [Visual Studio Code](https://code.visualstudio.com/) - IDE
* [Laravel](https://laravel.com/) - The PHP Framework
for Web Artisans