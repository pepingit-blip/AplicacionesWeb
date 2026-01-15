Este proyecto es una aplicación web hecha en PHP que sirve para gestionar usuarios.
Básicamente puedes crear cuentas, iniciar sesión y dependiendo de tu rol puedes hacer más o menos cosas.

Los usuarios normales pueden:

-Registrarse
-Iniciar sesión
-Ver su información personal

Los administradores pueden:

-Ver todos los usuarios
-Crear usuarios
-Editar usuarios
-Eliminar usuarios
-Todo funciona con sesiones y tiene un sistema de roles (admin y user).

ESTRUCTURA DEL PROYECTO

La carpeta del proyecto está organizada así para que sea más fácil de entender:

Proyecto3-UserManager/
UserManager/
│ login.php → Formulario para iniciar sesión
│ procesar_login.php → Comprueba si el login es correcto
│ registro.php → Formulario para registrarse
│ procesar_registro.php → Guarda el usuario en la base de datos
│ logout.php → Cierra la sesión
│ bienvenido.php → Pagina publica

admin/
│ list.php → Lista todos los usuarios si eres admin y lista con tu informacion si eres user/usuario
│ create.php → Formulario para crear usuarios
│ procesar_create.php → Guarda el usuario nuevo
│ edit.php → Editar datos de un usuario
│ procesar_edit.php → Guarda los cambios
│ delete.php → Elimina un usuario
| dashboard → lleva a lista para ver la lista de los usuarios

includes/
│ db.php → Conexión a la base de datos
│ auth.php → Funciones para comprobar sesiones y roles

css/
│ styless.css → Estilos del sitio

js/
│ validation.js → Validaciones con JavaScript

FUNCIONALIDADES PRINCIPALES

AUTENTICACIÓN

Registro de usuarios con contraseña segura
Inicio de sesión con email y contraseña
Uso de sesiones para saber si el usuario está logueado
Cierre de sesión seguro

ROLES DE USUARIO

Admin: puede gestionar todos los usuarios
User: solo puede ver su información

CRUD DE USUARIOS (solo admin)

Crear usuarios
Ver la lista de usuarios
Editar usuarios
Eliminar usuarios

VALIDACIONES

JavaScript valida los formularios antes de enviarlos
PHP vuelve a validar los datos en el servidor
La base de datos tiene restricciones para evitar errores

SEGURIDAD

Contraseñas encriptadas usando password_hash()
Protección de páginas privadas con sesiones
Control de acceso según el rol del usuario