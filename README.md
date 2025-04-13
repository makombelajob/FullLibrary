# 📚 Library Management System in PHP

## 📝 Description

This project is a simple Library Management System built with PHP. It allows users to add, search, display, edit, and delete books. The data is stored in a PHP array (no database involved).

---

## 🎯 Project Goals

- Understand the structure of a PHP application.
- Work with forms and PHP files.
- Organize the project with reusable files (`header.php`, `footer.php`, `functions.php`).
- Implement basic CRUD (Create, Read, Update, Delete) operations.

---

## 🗂️ Project Structure

/library/ │ ├── index.php # Homepage (displays the last 3 books) ├── add_book.php # Add a book ├── view_books.php # View all books ├── search_book.php # Search for a book ├── edit_book.php # Edit a book ├── delete_book.php # Delete a book │ ├── includes/ │ ├── header.php # Common header │ └── footer.php # Common footer │ └── functions/ └── functions.php # PHP functions for book management


---

## ⚙️ Features

- **Add a book**: via a form (`addBook()`).
- **View all books**: reading from the array (`getAllBooks()`).
- **Search a book**: by title or author (`searchBook()`).
- **Edit a book**: update information via book ID (`getBookById()` / `updateBook()`).
- **Delete a book**: remove a book by ID (`deleteBook()`).
- **Clear navigation**: with a common menu across all pages.

---

## 🧠 Main Functions (`functions.php`)

- `addBook($book)`
- `getAllBooks()`
- `searchBook($query)`
- `getBookById($id)`
- `updateBook($id, $updatedBook)`
- `deleteBook($id)`

---
📸 Screenshot

![Screenshot](assets/Screenshot.png)


(Add a screenshot of your project here)
🛠️ To Improve (Future Suggestions)

    Save books in a JSON file or a database.

    Implement user management with authentication.

    Add pagination.

    Add form validation
## 💡 How to Use

1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/repository-name.git
