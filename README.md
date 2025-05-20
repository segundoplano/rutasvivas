# 🌿 RUTAS VIVAS. Gestor de Actividades Deportivas.

**Rutas Vivas** es una aplicación web desarrollada con **Symfony** para gestionar actividades deportivas al aire libre como **barranquismo, ciclismo, escalada**, entre otras.

Funciona como un **diario personal de actividades**, donde los usuarios pueden crear, editar y eliminar sus experiencias, así como gestionar su perfil gracias a la integración 
con **Clerk** mediante vistas en **Twig**.

Este proyecto ha sido desarrollado durante mis prácticas de **Desarrollo de Aplicaciones Web (DAW)** a media jornada en la empresa *Segundo Plano*.

## ⚒️ Funcionalidades

- Registro e inicio de sesión con Clerk (integrado vía `clerk-js` y Twig).
- Gestión de actividades: creación, edición y eliminación.
- Visualización personalizada por usuario.
- Edición del perfil (nombre, biografía, ubicación...).
- Cambio de foto y contraseña mediante Clerk.
- Experiencia responsive.

## 🔐 Integración con Clerk

- Autenticación segura: inicio y cierre de sesión con Clerk.
- Gestión de perfil integrada con `Clerk.mountUserProfile()` en vistas Twig.
- Cambio de imagen y contraseña desde la interfaz de Clerk.
- ClerkJS integrado en el frontend Twig.

## 📸 Capturas de pantalla
Pantalla de inicio: 
![inicio](https://github.com/user-attachments/assets/bfc507ba-5ffa-47fc-a744-d3f66a4dc18d)

Login con Clerk: 
![clerk1](https://github.com/user-attachments/assets/439ef1e1-12b5-4dee-b6e0-8049b6e4fbd2)

Página principal del usuario:
![clerk2](https://github.com/user-attachments/assets/e5e65353-a1df-4b1b-b13a-78f919702219)

Actividades: 
![clerk2-1](https://github.com/user-attachments/assets/e7a068b4-a9c4-4210-92f9-a1bf2f1039c0)

Vista de actividades: 
![clerk4](https://github.com/user-attachments/assets/be08c394-41c9-4342-bab2-dc95ba83700c)

Vista de perfil del usuario: 
![clerk6](https://github.com/user-attachments/assets/33de5cdf-3be1-4dda-8092-f9211a8d0636)


## 💻 Tecnologías utilizadas

- Symfony 7.2
- Twig
- Clerk
- Doctrine ORM
- MySQL


## 💡 Requisitos
- PHP >= 8.1  
- Composer  
- Symfony CLI  
- Base de datos MySQL

## ⌛ Instalación

```bash
git clone https://github.com/segundoplano/rutasvivas
cd personal-activity
composer install
cp .env .env.local
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
symfony server:start
```

### 📬 Contacto
Email: laurarodriguezbasanta@gmail.com
Github: https://github.com/Laurarb94


