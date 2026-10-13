# Práctica 1: Introducción a PHP

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4)
![Licencia](https://img.shields.io/badge/licencia-MIT-green)

Ejercicios de introducción a PHP para 2.º DAW. Incluye variables, condicionales,
arrays, formularios, sesiones y una mini agenda de contactos.

![Imagen de ejemplo](https://placehold.co/800x300?text=Pr%C3%A1ctica+PHP)

## Ejercicios

| Archivo | Contenido |
|:--|:--|
| `presentacion.php` | Variables y salida de texto |
| `tabla.php` | Formulario y tabla de multiplicar |
| `alumnos.php` | Arrays, funciones y promedio |
| `registro.html`, `procesar.php` | Formulario y validación |
| `bienvenida.php`, `logout.php` | Sesión de usuario |
| `agenda.php` | Mini agenda guardada en sesión |

## Requisitos y ejecución

- PHP 8.0 o superior.
- Un servidor web local con soporte PHP.

Coloca el proyecto en el directorio público del servidor y abre en el navegador
`presentacion.php`, `tabla.php`, `alumnos.php`, `registro.html` o `agenda.php`.
Los archivos PHP deben ejecutarse desde un servidor local; no basta con abrirlos
directamente desde el explorador de archivos.

## Imagen del proyecto

Guarda una imagen en el directorio `images/` y enlázala así:

![Ilustración local de la práctica](images/practica.svg)

## Tareas pendientes

- [x] Completar los ejercicios de variables, tablas y notas.
- [x] Añadir registro con validación y sesión.
- [x] Crear la agenda de contactos.
- [ ] Añadir persistencia de contactos en una base de datos.

> [!NOTE]
> Los contactos de la agenda se guardan en la sesión y desaparecen al terminarla.

> [!WARNING]
> No introduzcas datos personales reales en esta aplicación de demostración.

## Preguntas frecuentes

<details>
<summary>¿Por qué no funciona al abrir un archivo PHP directamente?</summary>

Los archivos PHP necesitan ejecutarse en un servidor con PHP habilitado.

</details>

<details>
<summary>¿Dónde se almacenan los contactos?</summary>

En la sesión del navegador. El proyecto todavía no usa una base de datos.

</details>

## Flujo de la agenda

```mermaid
flowchart LR
    A[Usuario] --> B[Formulario de agenda]
    B --> C{Datos válidos}
    C -->|Sí| D[Guardar contacto en sesión]
    D --> E[Mostrar tabla de contactos]
    C -->|No| F[Mostrar errores]
```

## Registro de cambios

Consulta el [CHANGELOG.md](CHANGELOG.md) para ver las versiones y modificaciones.

## Colaboración y licencia

Consulta [CONTRIBUTING.md](CONTRIBUTING.md) para proponer cambios.

Este proyecto utiliza la licencia MIT porque permite estudiar, modificar y
reutilizar el código, manteniendo el aviso de copyright. El texto completo está
en [LICENSE](LICENSE).

## Autoría

Nombre Apellido — 2.º DAW.

[^1]: Práctica educativa de introducción a PHP.
