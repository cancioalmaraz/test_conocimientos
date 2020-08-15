# Test De Conocimientos

Esto es un test para demostrar mis conocimientos en desarrollos web.

Espero saber mas de ustedes, gracias :smile: :smile: :smile:

* Instalacion
  * Mac y Linux
  * Windows

## Instalacion

Se aconseja encarecidamente que para tener mucho mas detalles de la instalacion de todo lo necesario, ver los videos recomendados:

Windows -> https://aprendible.com/series/laravel-desde-cero/lecciones/instalando-lo-necesario-en-windows

Mac y Linux -> https://aprendible.com/series/laravel-desde-cero/lecciones/instalando-lo-necesario-en-mac

Esta es una guia rapida, de instalacion, si hay algunos errores a la hora de instalar, favor, nuevamente, revisar los links de aqui arriba, gracias :+1:

### Mac y Linux

En mac primeramente debemos instalar brew, que es un instalador de paquetes (valga la redundancia) para mac, en el siguiente link lo encontramos:

* https://brew.sh/index_es

Ahora, desde una terminal ejecutamos;

* (mac) brew install php
* (linux) sudo apt-get install php

Despues instalamos composer, ejecutando en el terminal lo siguiente:

* php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
* php -r "if (hash_file('sha384', 'composer-setup.php') === '572cb359b56ad9ae52f9c23d29d4b19a040af10d6635642e646a7caa7b96de717ce683bd797a92ce99e5929cc51e7d5f') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
* php composer-setup.php
* php -r "unlink('composer-setup.php');"

O bien puedes ir a copiar el comando de arriba en https://getcomposer.org/download/

Ahora ejecutamos el siguiente comando para ejecutar composer:

* mv composer.phar /usr/local/bin/composer

Intalamos base de datos, el que laravel nos recomienda es la version 5.7 :tired_face: :tired_face: :tired_face: :

* (mac) brew install mysql@5.7
* (linux) sudo apt-get install mysql@5.7

Iniciamos la base de datos:

* (mac) brew services start mysql@5.7

Muy bien, hasta aqui ya tenemos lo necesario para correr nuestro programa, ahora clonamos nuestro repositorio:

* git clone https://github.com/cancioalmaraz/test_conocimientos.git

![Captura de Pantalla 2020-08-14 a la(s) 20 12 19](https://user-images.githubusercontent.com/47458067/90303276-b3ac2080-de7a-11ea-81bf-9c73bcd7de24.png)

Nos situamos en la carpeta donde esta nuestro proyecto:

cd test_conocimientos

Ahora ejecutamos nuestro servidor web local con:

php artisan serve

![Captura de Pantalla 2020-08-14 a la(s) 22 06 32](https://user-images.githubusercontent.com/47458067/90303298-d8a09380-de7a-11ea-9951-626cf8d75850.png)

Abrimos el navegador en la web indicada:

localhost:8000 ó 127.0.0.1:8000 y listo!!! :tada: :tada: :tada:

![Captura de Pantalla 2020-08-14 a la(s) 20 35 43](https://user-images.githubusercontent.com/47458067/90303350-4ea4fa80-de7b-11ea-8d42-35bc5ad532a5.png)


### Windows

Afortunadamente la instalacion en windows en mucho mas rapida y sencilla :smiley:

Primeramente es necesario instalar Laragon, el cual nos brindara todas las herramientas necesarias para correr el servidor web local, desde el siguiente link:

https://laragon.org/download/index.html

Descargar la version full.

![Captura de Pantalla 2020-08-14 a la(s) 21 07 32](https://user-images.githubusercontent.com/47458067/90302222-ab4fe780-de72-11ea-8aa6-0f395847e02f.png)

Una vez instalado, abrir el programa y antes de iniciar los servicios, tenemos que descargar el repositorio, para esto abrimos la terminal:

![laragonTerminal](https://user-images.githubusercontent.com/47458067/90302304-38933c00-de73-11ea-8909-77869c5bd275.PNG)

Desde el terminal ejecutamos el siguiente comando:

git clone https://github.com/cancioalmaraz/test_conocimientos.git

![git clone](https://user-images.githubusercontent.com/47458067/90302353-a3447780-de73-11ea-834f-7df0aa1cb6f8.PNG)

Ahora si estamos listos para iniciar los servicios, damos al boton Iniciar Todo.

![laragonIniciar](https://user-images.githubusercontent.com/47458067/90302383-d7b83380-de73-11ea-800b-b63fbfca62c8.PNG)

OJO: Si el servidor Apache no inicia, generalmente se debe a que el puerto esta ocupado, es necesario cambiar a otro que este desocupado.

![laragonConf](https://user-images.githubusercontent.com/47458067/90302412-03d3b480-de74-11ea-9bd6-6879e1c823b8.PNG)

![portApache](https://user-images.githubusercontent.com/47458067/90302417-10580d00-de74-11ea-9824-16f8ba29190e.PNG)

Y listo!!! :tada: :tada: :tada: Ya deberia iniciar correctamente todo, ahora accedemos al host donde esta nuestro programa, ingresar al navegador:

test_conocimientos.test:8000

![test_windows](https://user-images.githubusercontent.com/47458067/90302474-60cf6a80-de74-11ea-8c34-ede9951f475d.PNG)
