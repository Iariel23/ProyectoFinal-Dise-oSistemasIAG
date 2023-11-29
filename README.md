## Como instalar y utilizar el proyecto

1. Instalar paquetes o dependencias desde la terminal:
```bash
composer install --ignore-platform-reqs
``` 
```bash
composer update
```
```bash
composer fund
 ```

2. Realizar una copia del archivo .env.example:
```bash
cp .env.example .env
```

3. Generar APP_KEY:
```bash
php artisan key:generate
```

4. Deberá crear en su motor de base de datos la BD llamada **peliculabd** y ejecutar el servicio

5. Crear migraciones en la BD desde la terminal:
```bash
php artisan migrate:install
```

6. Lanzar migraciones para que aparezcan en la BD:
```bash
php artisan migrate
```

7. Instalar Nodejs y npm:
```bash
sudo apt-get install nodejs
sudo apt-get install npm
```