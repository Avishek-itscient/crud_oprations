# CRUD Project in PHP

This is a simple CRUD (Create, Read, Update, Delete) project implemented in PHP. The project allows users to manage a collection of items by performing CRUD operations on them.

## Features

- Create: Add new items to the collection with relevant details.
- Read: View the list of items and their details.
- Update: Edit the information of existing items.
- Delete: Remove items from the collection.

## Technologies Used

- PHP: Backend scripting language used to handle server-side operations.
- MySQL: Relational database used for storing item information.
- HTML/CSS: Frontend markup and styling.

## Setup Instructions

1. Clone the repository to your local machine:

   ```shell
   git clone https://github.com/your-username/crud-project-php.git
   ```

2. Import the database schema and sample data. You can use the provided SQL file (`database.sql`) to set up the required tables and sample records in your MySQL database.

3. Update the database configuration in `config.php` file with your MySQL database credentials:

   ```php
   define('DB_HOST', 'localhost');
   define('DB_USERNAME', 'your-username');
   define('DB_PASSWORD', 'your-password');
   define('DB_NAME', 'your-database-name');
   ```

4. Start your local server or run the project using a web server software.

5. Open the project in your web browser:

   ```
   http://localhost/crud-project-php/
   ```

## Project Structure

- `index.php`: Entry point of the project and displays the list of items.
- `add.php`: Form for adding a new item to the collection.
- `edit.php`: Form for editing the details of an existing item.
- `delete.php`: Deletes an item from the collection.
- `config.php`: Configuration file with database credentials.
- `database.sql`: SQL file containing the database schema and sample data.
- `css/`: Directory containing CSS stylesheets.
- `js/`: Directory containing JavaScript files (if applicable).
- `images/`: Directory containing images (if applicable).

## Contributions

Contributions to improve the project are welcome! If you find any issues or have suggestions for enhancements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute the code as per the terms of the license.
