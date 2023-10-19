# PHP desde contenedor de Docker

Para iniciar la app es necesario tener Docker instalado y seguir lo siguiente: 
- Configura el path absoluto a la app en **docker-compose.yml**, de preferencia obtener el path con el comando `pwd` en una terminal bash (linux) 
- Ejecuta 
  `docker compose up -d`
- Consultar en el navegador el puerto mapeado en **docker-compose.yml** (8000 en ports: 8000:80)

## Volumens

Los volumens es un concepto que en pocas palabras permiten copiar contenido desde nuestro host (PC) hacia el contenedor

```yml
services:
  php_fazt: 
    build: ./
    image: php_fazt:0.1 
    container_name: php_fazt_container
    ports:
      - 8000:80
    volumes:
      - .../carpeta_local:/donde/copia/la_carpeta
      - $(pwd)/src:/var/www/html/
    # restart: always

volumes:
  php_fazt:
    driver: local
```

## Conectarte a la terminal del contenedor

`docker exec -it [id] bash`

- `-it` para hacerlo interactivo

Gracias a los Volumens se puede interactuar no solo del PC al contenedor, si no tambien del contenedor al PC

Por ejemplo accede a la termianl del contenedor y crea un archivo con el comando `touch name.php`

> Para salir de la terminal del contenedor es con `Ctrl + D`

