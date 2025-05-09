# University Student Management CRUD Application (Laravel)

## Overview

This is a web application built using Laravel 9+ and MySQL to manage university student records. It provides full Create, Read, Update, and Delete (CRUD) functionality for student information, along with features like teacher assignment, search, pagination, soft deletes, and user authentication.

## Requirements

* PHP >= 8.0
* Composer
* MySQL Database
* Node.js and npm (for frontend assets)

## Features

* **Student Management:**
    * Create, read, update, and soft-delete student records.
    * Student fields: `student_name`, `class_teacher_id` (linking to a teacher), `class`, `admission_date`, `yearly_fees`.
    * Displays the assigned teacher's name in the student list.
* **Teacher Management:** (Basic setup for assigning class teachers)
    * Create and manage teacher records.
* **Relationships:**
    * Establishes a one-to-many relationship between teachers and students (one teacher can have multiple students).
* **Database:**
    * Uses MySQL database.
    * Database schema defined through Laravel migrations.
    * Sample data populated using Laravel seeders.
* **Form Validation:**
    * Implements server-side validation for all form inputs to ensure data integrity.
* **User Interface:**
    * User-friendly interface built with Blade templates.
    * Responsive design using Bootstrap for compatibility across devices.
    * Dropdown to select the class teacher when creating or editing a student.
* **Functionality:**
    * Lists all students with pagination for easy navigation.
    * Provides a dedicated form to add new student records.
    * Allows editing and soft-deleting individual student records.
    * Implements search functionality to filter students by name or class.
    * Only soft delete is implemented (deleted records are not permanently removed).
    * Integrates JS DataTables for enhanced table features like sorting and filtering on the client-side.
* **User Authentication:**
    * Implements user authentication using Laravel's built-in system to secure access to the application.

## Installation

Follow these steps to set up the application on your local machine:

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/satyak-k/student_management_laravel.git
    cd student_management
    ```

2.  **Install Composer Dependencies:**
    ```bash
    composer install
    ```

3.  **Copy Environment File:**
    ```bash
    cp .env.example .env
    ```

4.  **Configure Database:**
    * Open the `.env` file and update the database credentials to match your MySQL setup:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        ```

5.  **Run Migrations:**
    ```bash
    php artisan migrate
    ```

6.  **Run Seeders (to populate sample data):**
    ```bash
    php artisan db:seed
    ```

7.  **Install Frontend Dependencies and Compile Assets:**
    ```bash
    npm install
    npm run dev
    ```

8.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

9.  **Set Up User Authentication (Laravel Breeze):**
    ```bash
    composer require laravel/breeze --dev
    php artisan breeze:install
    npm install
    npm run dev
    php artisan migrate
    ```
    *(Follow the prompts during the Breeze installation)*

10. **Serve the Application:**
    ```bash
    php artisan serve
    ```
    Open your web browser and navigate to `http://127.0.0.1:8000` to access the application.

## Usage

1.  **Authentication:**
    * Register a new user or log in with an existing account to access the student management features.
    * The authentication routes (`/login`, `/register`) are provided by Laravel Breeze.
2.  **Student Management:**
    * Navigate to the students section (e.g., `/students`).
    * **Listing Students:** Displays a paginated list of students with their name, class teacher, class, admission date, and yearly fees. The teacher's name is shown in the "Class Teacher" column. JS DataTables provides sorting and filtering capabilities.
    * **Adding Students:** Click on the "Add Student" button to open a form where you can enter new student details, including selecting a class teacher from a dropdown.
    * **Editing Students:** Click the "Edit" button next to a student record to modify their information.
    * **Deleting Students (Soft Delete):** Click the "Delete" button next to a student record to soft-delete them. The record will remain in the database but will not be displayed in the active student list.
    * **Searching Students:** Use the search bar to filter students by their name or class.

## Database Structure

* **`students` Table:**
    * `id` (INT, primary key, auto-increment)
    * `student_name` (VARCHAR)
    * `class_teacher_id` (FOREIGN KEY, INT, references `teachers.id`)
    * `class` (VARCHAR)
    * `admission_date` (DATE)
    * `yearly_fees` (DECIMAL)
    * `created_at` (TIMESTAMP)
    * `updated_at` (TIMESTAMP)
    * `deleted_at` (TIMESTAMP, nullable for soft deletes)
* **`teachers` Table:**
    * `id` (INT, primary key, auto-increment)
    * `teacher_name` (VARCHAR)
    * `created_at` (TIMESTAMP)
    * `updated_at` (TIMESTAMP)

## Relationships

* **`Student` belongsTo `Teacher`:** Each student is associated with one class teacher through the `class_teacher_id` foreign key.
* **`Teacher` hasMany `Student`:** Each teacher can have multiple students assigned to them.

## Contributing

Feel free to contribute to this project by submitting pull requests or reporting issues.

## License

[MIT](LICENSE)
