## Install wordpress

ansible-playbook -i hosts.ini setup_wp.yaml 

### db_releated
- Copy mariadb repo cfg
- Install mariadb
- Reload mariadb
- isntall mysql releated modules
- create wp's db
- create user && assing privileges

### os_packages
- Install http serwer 
- Install EPEL and Remi repo for php
- Install php

### wp_related
- Download wordpress && extract wp
- www root exists
- Copy vhost cfg
- copy wp cfg
- Reload apache

![alt text](https://github.com/kudseb/wpinstall/blob/main/yepWorking.png?raw=true)
