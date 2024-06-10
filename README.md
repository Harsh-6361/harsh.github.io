<p align="center">
  <img src="https://img.icons8.com/?size=512&id=55494&format=png" width="100" />
</p>
<p align="center">
    <h1 align="center">HARSH.GITHUB.IO</h1>
</p>
<p align="center">
    <em><code>► NEWBIE TECH SPARK</code></em>
</p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/HTML5-E34F26.svg?style=flat&logo=HTML5&logoColor=white" alt="HTML5">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
    XAMPP
</p>
<hr>
## 🔗 Quick Links

> - [📍 Overview](#-overview)
> - [📦 Features](#-features)
> - [📂 Repository Structure](#-repository-structure)
> - [screenshorts](#-screenshorts)
> - [🚀 Getting Started](#-getting-started)
>   - [⚙️ Installation](#️-installation)
>   - [🤖 Running harsh.github.io](#-running-harsh.github.io)
>   - [🧪 Tests](#-tests)
> - [🛠 Project Roadmap](#-project-roadmap)
> - [🤝 Contributing](#-contributing)
> - [📄 License](#-license)
> - [👏 Acknowledgments](#-acknowledgments)

---

## 📍 Overview

The Student Records Management System is a web-based application designed to manage student records efficiently. The system provides a user-friendly interface for users to perform various tasks such as creating and managing student records, calculating SGPA, and sorting and filtering records.

The system is built using PHP and HTML, and utilizes a database to store student records. The application is designed to be scalable and secure, with features such as user authentication and authorization to ensure that only authorized users can access and modify student records.

The Student Records Management System is ideal for educational institutions that need to manage large amounts of student data. It provides a centralized platform for storing and managing student records, making it easier to track student progress and performance.


---


## 📦 Features

The Student Records Management System has the following features:

### 1. User Authentication

* Login functionality to authenticate users (login.php)
* Logout functionality to end user sessions (logout.php)
* Sign-up functionality for new users to create an account (sign_up.php)

### 2. Student Record Management

* Insert new student records into the database (insert_record.php)
* Display a list of student records in a table format (display_records.php)
* Edit existing student records (edit_record.php)
* Update existing student records (update_record.php)

### 3. SGPA Calculation

* A simple calculator to calculate the SGPA (Semester Grade Point Average) of a student (sgpa.html)

### 4. Sorting and Filtering

* Sort student records based on various criteria (e.g., name, USN, SGPA) (sorting.php)

### 5. Profile Management

* Display user profile information (my_profile.php)

### 6. Database Management

* Create database tables required for the application (create_table.sql)
* Manage teacher-related data (teacher.sql)

---

## 📂 Repository Structure

```sh
# THE MAIN FILE TO ACCESS WHOLE STUDENT DATABASE MANAGEMENT IS LOGIN.PHP
└── harsh.github.io/
    ├── config.php
    ├── create_table.sql
    ├── display_records.php
    ├── edit_record.php
    ├── footer.php
    ├── index.php
    ├── insert_record.php
    ├── login.php
    ├── logout.php
    ├── my_profile.php
    ├── sgpa.html
    ├── sign_up.php
    ├── sorting.php
    ├── teacher.sql
    └── update_record.php
```

---
---
## screenshorts
![sign_up](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/84773e06-f34b-44d4-a566-d41294608909)
![login](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/601a3a81-0903-4dab-a52a-28df3aaf2470)
![insert_records](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/23a9b437-7c74-4194-bcd0-f94011eb2f4f)
![display_records](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/34695790-76d7-44f6-a6dc-88f9afc500c2)
![profile](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/91083abe-a906-4e3a-90ff-9f83d3a2bd23)
![sgpa_calc](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/199d83b5-fbe9-41b4-8b8c-fff08c6215c7)
![sign_up](https://github.com/Harsh-6361/harsh.github.io/assets/121291397/84773e06-f34b-44d4-a566-d41294608909)

---

---

## 🚀 Getting Started

***Requirements***

you need XAMPP

Ensure you have the following dependencies installed on your system:
* **XAMPP**: `any`
* **PHP**: `any`

### ⚙️ Installation

1. Clone the harsh.github.io repository:

```sh
git clone https://github.com/Harsh-6361/harsh.github.io.git
```

2. XAMPP Installation:

3. First, download the XAMPP installer from the Apache Friends website. Open the downloaded file and install XAMPP on your system. Starting XAMPP Control Panel:

4. Open the XAMPP control panel. Start the Apache and MySQL services. This will activate your local server. Placing Your Project Folder in XAMPP's 'htdocs' Directory:

5. Locate the 'htdocs' folder within your XAMPP installation directory. This folder serves as the root directory for XAMPP. Copy or move your project folder into the 'htdocs' directory. Database Setup (If Required):

6. Open localhost/phpmyadmin in your browser. Use phpMyAdmin to create a new database for your project. If your project includes a database file (such as a .sql file), import that file here. Project Configuration (If Required):

7. If your project connects to a database, you may need to update the database connection details (like database name, username, password) in your project's configuration files. These details are usually found in a config.php file or a similar file within your project. Accessing Your Project via Localhost:

8. Type localhost/your_project_folder_name in any web browser, where 'your_project_folder_name' is the name of your project folder within 'htdocs'. Press Enter, and your project should open in the browser.
```

### 🤖 Running harsh.github.io

Use the following command to run harsh.github.io:

```sh
php main.php
```

### 🧪 Tests

To execute tests, run:

```sh
vendor/bin/phpunit
```

---

## 🛠 Project Roadmap

## 🗺️ Roadmap

### [X] `► TASK-1` Short-term Goals (Next 2 weeks)

* Implement user authentication and authorization
* Develop a user-friendly interface for creating and managing student records
* Integrate SGPA calculation feature

### [X] `► TASK-2` Mid-term Goals (Next 6 weeks)

* Develop sorting and filtering functionality for student records
* Implement data validation and error handling
* Enhance user interface and user experience

### [X] `► TASK-3` Long-term Goals (Next 3 months)

* Integrate with existing educational institution systems (e.g. attendance, grading)
* Develop reporting and analytics features
* Implement data backup and recovery system

### Future Development

* Integrate with mobile devices for on-the-go access
* Develop a notification system for important updates and reminders
* Explore integration with artificial intelligence and machine learning for predictive analytics

---

## 🤝 Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Submit Pull Requests](https://github.com/Harsh-6361/harsh.github.io.git/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/Harsh-6361/harsh.github.io.git/discussions)**: Share your insights, provide feedback, or ask questions.
- **[Report Issues](https://github.com/Harsh-6361/harsh.github.io.git/issues)**: Submit bugs found or log feature requests for Harsh.github.io.


# Contributing Guidelines

1. **Fork the Repository**: Start by forking the project repository to your GitHub account.
2. **Clone Locally**: Clone the forked repository to your local machine using a Git client.
   ```sh
   git clone https://github.com/Harsh-6361/harsh.github.io.git
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to GitHub**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.

Once your PR is reviewed and approved, it will be merged into the main branch.



---

## 📄 License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

## 👏 Acknowledgments
## 📚 References
* you might face some issuses while starting the MySQL server
   plz refer to youtube for solutions and not any ai or websites.

* 70% help taken from the [**blackbox**](www.blackbox.ai)


[**follow me on linkedin**](https://www.linkedin.com/in/j-harsh-vardhan-934a00258/)
