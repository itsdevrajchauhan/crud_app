
# CRUD Application in PHP & MySQL

This is a simple CRUD (Create, Read, Update, Delete) application built using **PHP**, **MySQL**, and **Bootstrap**.  
It allows you to manage student records with an easy-to-use web interface.

---

## 🚀 Features

- ➕ Add new student  
- 📄 View all students  
- ✏️ Update student data  
- ❌ Delete student  
- 🎨 Clean UI using Bootstrap  
- 🔌 MySQL database connection via MySQLi  
- 🔄 Redirect messages for success/error actions  

---

## 🛠️ Technologies Used

| Technology | Purpose |
|-----------|----------|
| **PHP** | Backend logic |
| **MySQL** | Database storage |
| **Bootstrap** | Styling |
| **HTML/CSS** | Frontend |
| **XAMPP** | Local server |

---

## 📂 Project Structure

Your folder looks like this:

```

CRUD_APP/
│── dbconnection.php       # Database connection file
│── delete_page.php        # Delete logic
│── footer.php             # Footer layout
│── header.php             # Header + navigation bar
│── index.php              # Displays all students
│── insert_data.php        # Insert student logic
│── update_page_1.php      # Update student page
│── style.css              # Custom styling (optional)

````

Each file plays a specific role:

### ✔ **dbconnection.php**
Handles MySQL connection using `mysqli_connect()`.

### ✔ **index.php**
Shows all data from the database in a Bootstrap table.

### ✔ **insert_data.php**
Processes new student form and inserts data into MySQL.

### ✔ **update_page_1.php**
Loads selected student info, updates record when submitted.

### ✔ **delete_page.php**
Deletes the selected student record.

### ✔ **header.php / footer.php**
Reusable layout components for cleaner code.

### ✔ **style.css**
Your custom styling (optional).

---

## ⚙️ How to Run This Project

### 1. Clone or Download the Project
```bash
git clone https://github.com/your-username/crud-app-php.git
````

### 2. Move to XAMPP htdocs

```
C:/xampp/htdocs/CRUD_APP/
```

### 3. Start Apache & MySQL in XAMPP

### 4. Create the Database

Open **phpMyAdmin**, then run:

```sql
CREATE DATABASE crud_app;

USE crud_app;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    age INT
);
```

### 5. Open in Browser

```
http://localhost/CRUD_APP/
```

---

## 📝 CRUD Operations

### ➕ Create

`insert_data.php` adds student to DB.

### 📄 Read

`index.php` displays all student data.

### ✏️ Update

`update_page_1.php` loads selected student → updates them.

### ❌ Delete

`delete_page.php` removes student from DB.

---

## 📸 Screenshots
Read
<img width="956" height="683" alt="image" src="https://github.com/user-attachments/assets/372f6435-c4fb-4555-b587-bedefa7e553d" />

---
Create
<img width="959" height="740" alt="image" src="https://github.com/user-attachments/assets/9bbd81b3-83e0-4317-ad8e-766a21cb4125" />


---
Update
<img width="953" height="529" alt="image" src="https://github.com/user-attachments/assets/fd93e1e5-824a-433e-ac53-77f82c1c0871" />

---
Delete

<img width="960" height="751" alt="image" src="https://github.com/user-attachments/assets/eed8cc8b-e41a-4a04-88a4-516504dc2343" />



---

## ✨ Future Improvements (Optional)

* Validation messages
* Search bar
* Pagination
* Login system
* Improved UI with custom CSS

---

## 👨‍💻 Author

**Raj Chauhan**
Project created with passion ❤️
Portfolio: [https://itsdevrajchauhan.netlify.app](https://itsdevrajchauhan.netlify.app)

---

## 📝 License

This project is fully open-source.
Feel free to use or modify it for your learning.

```

