<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Run Api

Luego del <b>composer install</b>, el primer comando que deben ejecutar es:

> php artisan migrate`

Se hace enfasis en que debe crearse en una primera instancia el archivo .env en base al ejemplo suministrado y llenar los datos necesarios para la conexion con su servicio de bases de datos.

Una vez creado el schema de la base, si queremos hacer pruebas, procedemos a ejecutar el siguiente comando

> php artisan db:seed`

Esto inyectara algunos datos basicos para pruebas en modo desarrollo de la api.

Para correr la API en modo desarrollo. Unicamente debe usar el CLI artisan con el comando "php artisan serve".

## Body Employees Request

El formato en el Body para las consultas de crear y actualizar empleados debe contener lo siguiente:

`{
	"first_lastname": A-Za-Z max 20 char,
	"first_name": A-Za-Z max 20 char,
	"country_id": int,
	"identify_id": int,
	"identify_number": Alphanumeric with "-" max 20 char,
	"email": Alphanumeric max 300 char with this format: name.lastname.id@global.com(.xx),
	"admission_date": Date format <= Date now,
	"department_id": int,
	"status_id": int
}` 

## Rutas Habilitadas

> [GET] /api/v1/employees`: Muestra toda la informacion de los empleados registrados.

> [GET] /api/v1/employees/{employeeId}: Muestra la informacion de un solo empleado.

> [GET] /api/v1/countries: Muestra la informacion de todos los paises registrados

> [GET] /api/v1/departments: Muestra la informacion de todos los departamentos

> [GET] /api/v1/identifies: Muestra la informacion de los tipos de identificacion

> [GET] /api/v1/statuses: Muestra la informacion de todos los status disponibles

> [POST] /api/v1/employees: Crea un ejempleado. El body debe estar en formato RAW JSON

> [PUT] /api/v1/employees/{employeeId}: Crea un ejempleado. El body debe estar en formato RAW JSON. Sus propiedades son opcionales

### Nota

Para los metodos PUT, POST en el header debe existir "Accept": "application/json" 
