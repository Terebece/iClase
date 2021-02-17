
# iClase

Universidad Nacional Autónoma de México  
Facultad de Ciencias  
Diseño de interfaces 2021-1  
Proyecto final  

## Integrantes del equipo

* Altamirano Vázquez J. Fernando
* Ascencio Bolio Raúl
* Becerril Torres Teresa
* Nava García Diana Esmeralda 

## Documentación

Enlace a la [documentación](https://docs.google.com/document/d/1IYdaUWNT1E7BOJ3h8iplgF_Uz48-YwsUk1E6roXefzQ/edit "Documentación")

## Instalar el proyecto

Para instalar el proyecto se deben correr los siguientes comandos:

composer install
composer dumpautoload -o
cp .env.example .env 
php artisan key:generate
php artisan config:clear
php artisan config:cache

## Instalar base de datos

Una vez clonado el repositorio se deben realizar los siguientes pasos:
1. Acceder como root a MySQL (mysql -u root –p).
2. Correr el comando: CREATE DATABASE iCLase;
3. Salir del shell de MySQL.
4. Correr el comando: mysql -u root -p iClase < iClase.sql


## Para iniciar el proyecto

1. Correr npm init, para instalar los paquetes de npm.
2. Correr npm run dev.
3. Verificar que el proyecto se visualice correctamente con php artisan serve.

## Correr webpack

El proyecto contiene webpack, que minifica los archivos de css y js.

1. Correr npm run watch, escucha los cambios en css y js.
2. Al mismo tiempo correr php artisan serve, dar en recargar cada que notifique el build successful y ver los cambios.
