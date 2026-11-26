# Sistema de Clientes: portal de membresía y panel administrativo en PHP

[![PHP](https://img.shields.io/badge/PHP-5.6%20%7C%207.x-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.6-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-3-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![PHPMailer](https://img.shields.io/badge/PHPMailer-correo%20SMTP-1f6feb)](https://github.com/PHPMailer/PHPMailer)
[![Estado](https://img.shields.io/badge/estado-archivo%20hist%C3%B3rico-lightgrey)](#licencia)

Sistema web para administrar los clientes de un club con planes de membresía. Incluye un portal para los afiliados (inicio de sesión, cambio y recuperación de contraseña, planes, cortesías y pasadías, promoción del mes) y un panel administrativo para registrar clientes y administradores.

## Qué problema resuelve

Centraliza en una sola base de datos el registro de clientes y sus planes, y les da a los afiliados un portal propio para consultar su información y beneficios, sin depender de hojas de cálculo.

## Funcionalidades

- Inicio de sesión de clientes y de administradores por separado.
- Cambio de contraseña y recuperación por correo (PHPMailer).
- Consulta de planes, cortesías y pasadías, y promoción del mes.
- Panel administrativo: alta, búsqueda y edición de clientes y de administradores, carga de foto de perfil.
- Interfaz del panel con la plantilla SmartAdmin y Bootstrap.

## Estructura del proyecto

```
.
├── Base de datos.sql        # Esquema y datos de las tablas Clientes y Administradores
├── admin/                   # Panel administrativo
│   ├── controlador/         # Conexión a la base de datos (lee variables de entorno)
│   ├── Busqueda/            # Búsqueda de clientes y administradores
│   ├── Data/                # Consultas de datos
│   ├── Edit/                # Edición de registros
│   ├── css/ js/ lib/        # Recursos de la plantilla SmartAdmin
│   └── index.php            # Acceso al panel
└── clientes/                # Portal de afiliados
    ├── index.php            # Inicio de sesión
    ├── valida.php           # Validación de credenciales
    ├── cambio-de-clave.php  # Cambio de contraseña
    ├── olvido-contrasena.php# Recuperación de contraseña
    ├── Mailer.php           # Envío de correos con PHPMailer
    ├── planes-alliance.php  # Planes de membresía
    ├── promo-del-mes.php    # Promoción del mes
    └── PHPMAILER/           # Librería de correo
```

## Requisitos

- PHP 5.6 (el archivo heredado de conexión usa la extensión `mysql_*`, que no existe desde PHP 7; el resto usa PDO).
- MySQL 5.6 o compatible.
- Servidor web Apache o el servidor integrado de PHP.

## Ejecución local

1. Crea una base de datos vacía e importa el esquema:

   ```bash
   mysql -u <usuario> -p <base_de_datos> < "Base de datos.sql"
   ```

2. Copia el archivo de ejemplo y completa tus valores:

   ```bash
   cp .env.example .env
   ```

   La aplicación lee estas variables del entorno del proceso, así que expórtalas antes de iniciar el servidor:

   ```bash
   export DB_HOST=127.0.0.1 DB_NAME=<base_de_datos> DB_USER=<usuario> DB_PASS=***REMOVED***
   export MAIL_HOST=<servidor_smtp> MAIL_PASSWORD=***REMOVED***
   ```

3. Inicia el servidor integrado:

   ```bash
   php -S localhost:8000
   ```

   Portal de afiliados: `http://localhost:8000/clientes/` y panel: `http://localhost:8000/admin/`.

## Seguridad

Las credenciales de base de datos y de correo ya no están escritas en el código y se leen de variables de entorno. Las versiones anteriores del historial de Git pueden contener credenciales antiguas, por lo que deben considerarse comprometidas y rotarse antes de reutilizar el proyecto.

## Licencia

Sin licencia de código abierto. Todos los derechos reservados.

Este proyecto se desarrolló como trabajo para un cliente y el código no se distribuye bajo ninguna licencia abierta.
