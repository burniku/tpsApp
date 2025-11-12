# Student TPS App

## Description / Overview
Student TPS App is a Laravel web application designed to manage student records. This system allows users to **add**, **view**, **edit**, and **delete** student information through a simple interface. The application serves as a practical example of basic CRUD (Create, Read, Update, Delete) operations in Laravel.

## Goals & Objectives
- Learn how to implement CRUD functionality using Laravel.
- Understand routing, controllers, and views in Laravel.
- Practice database management and migrations with MySQL.
- Gain experience in building user-friendly web interfaces.
- Apply basic validation for form inputs in Laravel.

## Features / Functionality
- **Add Students:** Input student details and save them to the database.
- **View Students:** List all students in a tabular format with their details.
- **Edit Students:** Update existing student records.
- **Delete Students:** Remove students from the system.

## Installation Instructions
1. **Clone the repository and navigate into the directory:**
   ```bash
   git clone https://github.com/burniku/tpsApp
   cd tpsApp
   ```
2. **Install PHP dependencies:**
   ```bash
   composer install
   ```
3. **Run migrations (to create the database tables):**
```bash
php artisan migrate
```
4. **Start the development server:**
```bash
php artisan serve
```
5. **Open the application:**
**Go to http://127.0.0.1:8000 to start using TPS App.**


## Usage
1. Use Add Student Button to **Add a Student** by entering details like name, email, and other relevant information.
2. View the list of students on the main page.
3. Use the **Edit** button to modify student details.
4. Use the **Delete** button to remove a student from the system.

## Screenshots 
<img width="1282" height="623" alt="image" src="https://github.com/user-attachments/assets/01d5ef00-27cf-40eb-98ac-d134f2172906" />
<img width="1283" height="621" alt="image" src="https://github.com/user-attachments/assets/df97f60d-5092-4a5d-8c6e-0cd4a638be2b" />
<img width="1280" height="619" alt="image" src="https://github.com/user-attachments/assets/9ba74e9b-d3ac-4611-954c-9b1be481a421" />
<img width="1279" height="621" alt="image" src="https://github.com/user-attachments/assets/fa54d80f-bc08-4e4c-b574-44426eb98e8b" />

## Contributors

**Brandon Sean Gallardo**

## License

MIT License

Copyright (c) 2025 Brandon Sean Gallardo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.


