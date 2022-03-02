# Setup guidelines:
* Install Laragon server in C:\ drive
* Install github desktop:
* Login with your github account 
* Click ‘file’ then ‘clone repository 
* Choose ‘URL’
* Set url = “https://github.com/lavizafalaknaz/devops”
* Set local location as “C:\laragon\www\devops”
* Click ‘okay’
* Open in VISUAL STUDIO CODE - verify the code with github repo
* Open in explorer to verify local location (C:\laragon\www\devops)
* Make some changes to the index file 'change echo text and save'
* now , launch laragon and select ‘web’
* Choose ‘Devops’ as system and  check if the file works
* WOO HOOO!
> to commit to main repo, choose SOURCE CONTROL from VS code and commit with  message. then go to github desktop and commit to main repo hosted online.
* To manage data on ClearDB, install mySQL workbench and login to the database with the same credentials. 
 
## Heroku Deployed App:
( https://devops-fyp.herokuapp.com/ )

## Infinity free
Cpanel: ( https://app.infinityfree.net/accounts/epiz_30686719 ) <br />
SQL server: ( https://cpanel.epizy.com/panel/indexpl.php?option=mysql ) <br />
PHP my admin: ( http://185.27.134.10/db_structure.php?db=epiz_30686719_devops ) <br />

## Github Link:
( https://github.com/LavizaFalakNaz/DevOps )

## Drive Link:
( https://drive.google.com/drive/folders/1AwIeKZvAvOsJ2jf8I_c0eg60lkGpZM8F?usp=sharing )

# Database link:
## Phpmpadmin 
( http://185.27.134.10/db_structure.php?db=epiz_30686719_devops )
## credential
1. Server: us-cdbr-east-05.cleardb.net 
2. Database Name: heroku_7fce67cb249adf3
3. Username: bcc77e1841a73a
4. Password: dd32e024
5. Port number: 3306

# FRONTEND TO DO LIST: 
* login and sign in up function in extra to shift to clicking on the admin name
* Open chat room window on clicking on the chat
* Kanban boards don’t generate to do list, create action, doesn’t click on labels 

# CODE NOTES 
Must include this line in every php page for database connection. the connection works successfully
```
include "config/config.php";
```
