# TaskFlow

![Versión](https://img.shields.io/badge/versi%C3%B3n-1.0.0-blue)
![Licencia](https://img.shields.io/badge/licencia-MIT-green)

Aplicación web sencilla para organizar tareas y proyectos.

![Vista de TaskFlow](https://placehold.co/800x400?text=TaskFlow)

## Características

- Crear y editar tareas.
- Asignar prioridades y fechas límite.
- Marcar tareas como completadas.
- Consultar las tareas desde cualquier dispositivo.

## Tecnologías

| Parte | Tecnología |
|:--|:--|
| Interfaz | HTML, CSS y JavaScript |
| Servidor | Node.js |
| Datos | SQLite |

## Requisitos

- Node.js 20 o superior
- npm

## Instalación

```bash
git clone https://github.com/usuario/taskflow.git
cd taskflow
npm install
npm run dev
```

## Uso

1. Crea una cuenta.
2. Añade una tarea con su fecha límite.
3. Marca la tarea como completada cuando termines.

También puedes consultar el [registro de cambios](CHANGELOG.md).

## Tareas pendientes

- [x] Crear el diseño inicial.
- [x] Añadir creación y edición de tareas.
- [ ] Incorporar recordatorios por correo.
- [ ] Publicar la aplicación.

> [!NOTE]
> TaskFlow guarda las tareas en la base de datos local del servidor.

> [!WARNING]
> No compartas tus credenciales ni subas archivos con contraseñas al repositorio.

## Preguntas frecuentes

<details>
<summary>¿Cómo instalo la aplicación?</summary>

Sigue los pasos de la sección **Instalación**.

</details>

<details>
<summary>¿Puedo usar TaskFlow desde el móvil?</summary>

Sí. La interfaz se adapta a pantallas de distintos tamaños.

</details>

## Funcionamiento

```mermaid
flowchart LR
    A[Usuario] --> B[Interfaz web]
    B --> C[Servidor Node.js]
    C --> D[(Base de datos SQLite)]
```

## Licencia

Este proyecto usa la licencia MIT porque permite reutilizar y modificar el código,
manteniendo el aviso de copyright. Consulta el archivo [LICENSE](LICENSE).

## Autoría

Nombre Apellido — curso y centro educativo.

[^1]: TaskFlow es un proyecto educativo de demostración.
