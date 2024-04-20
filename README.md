<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

# Bienvenidos!

Espero que te encuentres bien, en este pequeño documento te explicare 
paso a paso como levantar el proyecto de forma local para su testeo.

## Instalacion de paquetes

Ejecuta el siguiente comando de composer para realizar la instalacion de 
paquetes requeridos en php

```
    composer install
```

Posterior a su ejecucion y validando que no existan errores, copia y ejecuta el siguiente comando para instalar las dependencias de 
nodejs

```
    npm i
```

## Base de datos

### Importante

**Estuve trabajando con una base de datos mysql**

Para recrear la base de datos con la cual estuve trabajando debemos usar 
los siguientes comandos:

```
    php artisan migrate:fresh
```

En este punto y confirmando que se ejecuto correctamente este proceso ya tendriamos
nuestra base de datos recreada. Usaremos el siguiente comando para llenar las tablas 
con los datos iniciales del usuario con el que se realizarian las pruebas

```
    php artisan db:seed
```
Si luego de ejecutar este comando todo salio bien estariamos preparados para hacer login
y usar nuestra app. Segui el ejemplo del pdf asi que las credenciales son las mismas: 

* User: admin@admin.com
* Password: Clave123+

El token generado se obtiene de la cabecera 'Authorization' 

