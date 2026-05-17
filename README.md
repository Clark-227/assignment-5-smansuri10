# Assignment 5 – IdeaJam SQL Queries with PHP

## Overview

In this assignment you will write SQL queries inside PHP pages to retrieve data from the **IdeaJam** database you built earlier in this module. Each task lives in its own PHP file. You decide how to present the results — be creative!

---

## Prerequisites

Before you begin, make sure you have:

- [XAMPP](https://www.apachefriends.org/) (or another local Apache + PHP + MySQL stack) installed and running
- The **IdeaJam** database imported into your local MySQL server
- [Visual Studio Code](https://code.visualstudio.com/) installed
- [Git](https://git-scm.com/) installed

---

## Setup

### 1. Clone this repository

```bash
git clone <your-classroom-repo-url>
cd <repo-folder>
```

### 2. Move the project into your web server root

Copy or move the entire project folder into your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\assignment-5\     ← Windows
/Applications/XAMPP/htdocs/assignment-5/   ← Mac
```

### 3. Configure the database connection

Open **`db.php`** and update the credentials to match your local MySQL setup:

```php
$host     = 'localhost';
$dbname   = 'ideajam';   // must match your database name exactly
$username = 'root';      // your MySQL username
$password = '';          // your MySQL password (blank by default in XAMPP)
```

### 4. Start XAMPP and open the app

1. Start **Apache** and **MySQL** in the XAMPP Control Panel.
2. Open your browser and go to: `http://localhost/assignment-5/`
3. You should see the task navigation page.

---

## File Structure

```
assignment-5/
├── db.php        ← Shared database connection (edit credentials here)
├── index.php     ← Navigation page — links to all tasks
├── task1.php     ← Task 1
├── task2.php     ← Task 2
├── task3.php     ← Task 3
├── task4.php     ← Task 4
├── task5.php     ← Task 5
└── task6.php     ← Task 6
```

---

## Tasks

Each file has a `TODO` comment and a hint to guide you. Replace the placeholder line:

```php
$sql = "-- YOUR QUERY HERE";
```

with your actual SQL query.

| File | Task |
|---|---|
| `task1.php` | Show all comments where `idea.idea_id = 4` |
| `task2.php` | Add `idea.description` and `idea.user_id` to the Task 1 query |
| `task3.php` | Show all tags for `idea_id = 4`, include `idea_tag.tag_id` |
| `task4.php` | Add `tag.tag` using a second JOIN, order results by `tag.tag` |
| `task5.php` | Show `user.first_name`, `user.last_name`, `user.username` for `idea_id = 1` |
| `task6.php` | Show `idea.description`, `idea.user_id`, `comment.comment`, `user.first_name`, `user.last_name` for `idea_id = 1` |

---

## Tips

- If your page shows **"Connection failed"**, double-check `db.php` credentials and make sure MySQL is running.
- If your page shows **"No results found"**, your query ran but returned nothing — re-read the WHERE clause.
- You can style the output however you like. Tables, cards, lists — it's up to you.
- For Task 6, try changing the `idea_id` value and see what results come back for other ideas.

---

## Submission

1. Save all your files.
2. Stage and commit your work:

```bash
git add .
git commit -m "Complete assignment 5"
```

3. Push to GitHub:

```bash
git push
```

4. Submit **"Ready to Grade"** in Canvas.
