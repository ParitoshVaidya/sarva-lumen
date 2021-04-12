## Sarva REST API

## Setup
- Clone this project on php server XAMPP/WAMP.
- This project uses [Composer] (https://getcomposer.org/) as Dependency Manager
- Use following command at project root to auto install required dependencies


    composer install
- Use .env.example to create .env file
- Update .env with correct db connection details
- Migrate db and run seeder for sample data
- Run or Test code using **Postman** or any other Rest Client
- configure `.htacess` to remove  `public/index.php/` from URL

## Sample end points

GET http://localhost/sarva/public/index.php/api/v1/employees <br />
GET http://localhost/sarva/public/index.php/api/v1/employee/3 <br />
GET http://localhost/sarva/public/index.php/api/v1/employee?salary=62504
GET http://localhost/sarva-lumen/public/index.php/api/v1/employee?zip_code=91004&sort=first_name

## Sample response

```json
[
  {
    "id": 3,
    "first_name": "Carlotta",
    "last_name": "Larkin",
    "dept": "Willms, Emmerich and Smith",
    "salary": 76197,
    "zip_code": 91004,
    "created_at": "2021-04-11T20:14:04.000000Z",
    "updated_at": "2021-04-11T20:14:04.000000Z"
  }
]
```

## Features Completed

- Routing
- Migrations (define and share the application's database schema definition) command `php artisan migrate`
- Seeders (seed database with test data) command `php artisan db:seed`
- Controller to handle requests


## Features that can be added with extra time
- auth middleware
- data integrity validation
- error handling and returning respective error codes
- Open API documentation using Swagger or related tool
- Postman collection for development team
- Jenkins deployment script

