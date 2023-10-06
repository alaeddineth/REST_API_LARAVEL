# REST API Laravel Project

![Laravel](https://img.shields.io/badge/Laravel-8.x-red)
![License](https://img.shields.io/github/license/alaeddineth/REST_API_Laravel)

This project serves as a learning resource for creating a CRUD API with Laravel. It includes a Laravel project, API endpoints, and a Postman workspace for testing.

## Project Overview

This project covers the following topics and features:

- Creating a Laravel project
- Implementing CRUD operations for an Instructor model
- API resource controllers and routes
- API versioning
- Database seeding and factories
- Using Postman for API testing

## Getting Started

### Setting Up the Environment

To get started with this project, follow these steps:

1. **Clone the repository to your local machine:**

   ```bash
   git clone https://github.com/your_username/REST_API_Laravel.git


2. **Navigate to the project directory:**
   ```bash
   cd REST_API_Laravel

3. **Install Composer dependencies, create a copy of .env, and generate an application key:**
    ```bash
    composer install
     cp .env.example .env
    php artisan key:generate
5. **Configure the database by opening .env in a text editor and setting the database connection settings. After making changes, save the file and exit the text editor:**
     ```bash
            
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=rest_api  # Set the database name to 'rest_api'
    DB_USERNAME=root      # Your database username
    DB_PASSWORD=          # Your database password


6. **Create a new database named 'rest_api' in your MySQL database management tool:**


7. **Run database migrations and seed the database:**
     ```bash

     php artisan migrate
     php artisan db:seed --class=InstructorsTableSeeder

8. **Start the Laravel development server:**

     ```bash
    php artisan serve


9. **Import the provided Postman workspace for testing (use the workspace file named your_workspace.json located in the root directory). Explore and test the API endpoints using Postman:**

## API Endpoints

Here are the API endpoints provided by this project:

1. **List Instructors (GET):** `/api/instructors`
2. **Create Instructor (POST):** `/api/instructors`
3. **View Instructor (GET):** `/api/instructors/{id}`
4. **Update Instructor (PUT):** `/api/instructors/{id}`
5. **Delete Instructor (DELETE):** `/api/instructors/{id}`

## Contributing
 Contributions to this project are welcome. Feel free to open issues, submit pull requests, or provide feedback.

## License
This project is open-source and available under the MIT License.


