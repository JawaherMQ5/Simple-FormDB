# 📝 Simple PHP Form with MySQL Integration

## 📌 Project Overview
This project is a basic PHP web application that allows users to submit their first name, last name, and age through an HTML form. The submitted data is then stored in a MySQL database, and all entries are displayed in a table format.

---

## 🚀 Features
- HTML form with input fields: First Name, Last Name, Age  
- PHP backend to handle form submission  
- MySQL database to store and retrieve records  
- Data displayed dynamically in an HTML table  

---

## 🛠 Technologies Used
- HTML
- PHP
- MySQL
- XAMPP (Apache + MySQL Server)

---

## ⚙️ How It Works
1. User fills out the form (`index.html`).
2. On submission, data is sent to submit.php.
3. PHP script inserts the data into the students.info table.
4. All entries from the database are fetched and displayed in a table.

---

## 🧱 Database Structure

### Database: students
### Table: info

| Column Name  | Type    | Description           |
|--------------|---------|-----------------------|
| id         | INT     | Primary Key (Auto Increment) |
| first_name | VARCHAR | User's first name     |
| last_name  | VARCHAR | User's last name      |
| age        | INT     | User's age            |

---

## 📁 Form Files

| File Name     | Description                      | Link |
|---------------|----------------------------------|------|
| index.html  | The HTML form                    | [View](./https://github.com/JawaherMQ5/Simple-FormDB/blob/main/index.html) |
| submit.php  | PHP script to save and display data | [View](./https://github.com/JawaherMQ5/Simple-FormDB/blob/main/submit.php) |
| screenshot_form_page.jpg | Screenshot of the form     | [View](./https://github.com/JawaherMQ5/Simple-FormDB/blob/main/Form.png) |
| screenshot_data_table.jpg | Screenshot of the data table | [View](./https://github.com/JawaherMQ5/Simple-FormDB/blob/main/SQl.png) |

---
## 💻 How to Run
1. Open XAMPP and start Apache & MySQL.
2. Create the database and table using phpMyAdmin.
3. Place the project folder inside htdocs directory.
4. Open http://localhost/form/index.html
5. Fill out the form and submit!

---

## 👩‍💻 Author
Created by [Jawaher Mohammed] – a simple web project to practice form handling and database integration using PHP and MySQL.
