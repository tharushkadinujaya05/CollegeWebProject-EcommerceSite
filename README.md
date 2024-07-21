# CollegeWebProject-EcommerceSite
A PHP-based e-commerce website for a clothing brand, featuring CRUD operations, user and admin authentication, and a responsive UI built with Tailwind CSS.

## Features

- User Registration and Login
- Admin Panel for Product Management
- CRUD Operations for Products
- Responsive Design with Tailwind CSS
- Secure Authentication for Users and Admins

## Technologies Used

- PHP
- MySQL
- Tailwind CSS
- JavaScript
- HTML

## Project Structure
```
CollegeWebProject-EcommerceSite/
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
├── config/
│   └── config.php
├── database/
│   └── schema.sql
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── navbar.php
├── public/
│   ├── index.php
│   ├── products.php
│   ├── about.php
│   ├── contact.php
│   ├── login.php
│   ├── register.php
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── add_product.php
│   │   ├── edit_product.php
│   │   ├── delete_product.php
│   │   ├── login.php
├── src/
│   ├── db/
│   │   └── Database.php
│   ├── models/
│   │   ├── Product.php
│   │   ├── User.php
│   ├── controllers/
│   │   ├── ProductController.php
│   │   ├── UserController.php
├── vendor/
│   ├── autoload.php
│   └── composer.json
├── .env
├── .gitignore
└── README.md
```
---

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/college-ecommerce-web-project.git
    ```

2. Navigate to the project directory:
    ```sh
    cd college-ecommerce-web-project
    ```

3. Install dependencies using Composer:
    ```sh
    composer install
    ```

4. Create a `.env` file in the root directory and add your database credentials:
    ```
    DB_HOST=localhost
    DB_USERNAME=root
    DB_PASSWORD=
    DB_NAME=ecommerce
    ```

5. Import the database schema:
    ```sh
    mysql -u your_username -p your_database_name < database/schema.sql
    ```

6. Start your local server (e.g., XAMPP, WAMP, or MAMP) and navigate to the project directory.

## Usage

- Register as a user and explore the product catalog.
- Admins can log in to manage products, including creating, updating, and deleting products.

## Contributing

Contributions are welcome! If you'd like to contribute to this ecommerce web app, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and commit them to your branch.

4. Push your changes to your forked repository.

5. Submit a pull request describing your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
