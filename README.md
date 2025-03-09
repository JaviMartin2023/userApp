# 👥 UserManager - Sistema de Gestión de Usuarios

UserManager es una aplicación web desarrollada con Laravel que permite gestionar usuarios con autenticación, roles y permisos. Ideal para proyectos que requieren control de acceso y administración de usuarios de manera eficiente.

## 🚀 Características

- 🔐 **Registro e inicio de sesión**

  ![image](https://github.com/user-attachments/assets/0c5f82bb-6092-4935-9b0c-146cea37f832)

  ![image](https://github.com/user-attachments/assets/6b5ab33f-d6e0-4f39-ac6c-d54cabc04178)

- 👤 **Gestión de usuarios** (crear, editar, eliminar, listar)

![image](https://github.com/user-attachments/assets/8417c6b5-9c3b-4331-8d55-c4cda59cb8ce)
![image](https://github.com/user-attachments/assets/66651668-f414-40c0-a1ad-56eb0b2284c1)
![image](https://github.com/user-attachments/assets/32132bd4-2643-4802-8b80-7f75cb543293)
![image](https://github.com/user-attachments/assets/55076fe4-f5c3-4467-a307-f4f781bf26bb)


- 🔑 **Roles y permisos** (Administrador, Usuario, etc.)

![image](https://github.com/user-attachments/assets/fa1caa79-3f61-4fe9-91a7-c4d7723c7492)

- 🛡️ **Autenticación y seguridad**

Nos mandarán un correo de confirmación para poder usar completamente la app.

- 📊 **Panel de administración**

![image](https://github.com/user-attachments/assets/410f6734-5d66-49d6-8699-7ad0f6208c3e)


## 🛠️ Tecnologías Utilizadas

- **Framework:** Laravel 10+
- **Base de Datos:** MySQL / PostgreSQL
- **Autenticación:** Laravel Breeze / Laravel Jetstream
- **Frontend:** Blade, Bootstrap / TailwindCSS
- **Middleware:** Laravel Sanctum / Spatie Roles & Permissions (si aplica)

## 📂 Instalación y Configuración

### 1️⃣ Clonar el repositorio
```bash
    git clone https://github.com/tuusuario/usermanager.git
    cd usermanager
```

### 2️⃣ Instalar dependencias
```bash
    composer install
    npm install
```

### 3️⃣ Configurar variables de entorno
```bash
    cp .env.example .env
    php artisan key:generate
```
Editar el archivo `.env` y configurar la conexión a la base de datos.

### 4️⃣ Migrar base de datos y seeders
```bash
    php artisan migrate --seed
```

### 5️⃣ Iniciar el servidor
```bash
    php artisan serve




---
¡Administra usuarios de manera eficiente y segura! 🚀
