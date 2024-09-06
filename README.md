# CollegeWebProject-EcommerceSite
A PHP-based e-commerce website for a clothing brand, featuring CRUD operations, user and admin authentication, and a responsive UI built with Tailwind CSS.

## Table of Contents

- [Features](#features)
- [Folder Structure](#folder-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **User Authentication**: Secure user registration and login system.
- **Product Listings**: Display available products with descriptions, images, and categories.
- **Shopping Cart**: Add items to the cart and proceed to checkout.
- **Admin Panel**: Manage products, categories, and orders (CRUD operations).
- **Responsive Design**: Optimized for mobile and desktop screens using Tailwind CSS.
- **Checkout Process**: Smooth and secure payment integration (future).
- **Blog Section**: Informative blog posts (optional).

## Folder Structure

```bash
.
├── assets/
│   ├── css/                     # Styling files
│   │   ├── nav_cart.css
│   │   └── style.css
│   ├── images/                  # Image assets
│   │   └── con01.jfif
│   └── js/                      # JavaScript files
│       ├── login.js
│       └── main.js
├── config/
│   └── config.php               # Database configuration
├── database/
│   ├── ivorystreetsdb.sql       # Database dump
│   └── schema.sql               # Schema file for database setup
├── public/
│   ├── admin/                   # Admin panel pages
│   ├── blog/                    # Blog section
│   ├── checkout.php             # Checkout process page
│   ├── contactus.php            # Contact page
│   ├── faq/                     # Frequently asked questions
│   ├── gift.php                 # Gift card page
│   ├── includes/                # Reusable components (headers, footers, etc.)
│   ├── product_description.php  # Product details page
│   └── readytowear.php          # Category page (Ready to Wear)
├── src/
│   ├── controllers/             # Controllers for handling requests
│   ├── db/                      # Database interaction files
│   ├── input.css                # Tailwind CSS input
│   └── models/                  # Data models for the application
├── .DS_Store                    # macOS system file (can be removed)
├── .env                         # Environment variables
├── .gitignore                   # Git ignore rules
├── .htaccess                    # Apache server configuration
├── 404.php                      # Error page
├── LICENSE                      # License information
├── README.md                    # Project documentation
├── index.php                    # Main entry point
├── package.json                 # Node.js dependencies (if any)
└── tailwind.config.js           # Tailwind CSS configuration
```

## Installation

### Clone the repository:
```bash
git clone https://github.com/your-username/ivory-street-ecommerce.git
cd ivory-street-ecommerce
```
### Install Dependencies (Optional):
If you’re using Node.js for development:
```bash
npm install
```
### Database Setup:
Create a MySQL database and import the ivorystreetsdb.sql or schema.sql file located in the `/database/` directory.

### Tailwind CSS:
If you’re making changes to the front-end styles, run Tailwind’s build process:
```bash
npx tailwindcss -i ./src/input.css -o ./assets/css/style.css --watch
```
## Usage 
- User can explore product catalogue and add to cart and then checkout
- **Live Website**: [Visit the user-facing site here](https://www.ivorystreets.live).  
- Admins can log in to manage products, including creating, updating, and deleting products. (CRUD)
- **Admin Pannele**: [Visit the user-facing site here](https://www.ivorystreets.live/admin.index.php).  

## Contributing

Contributions are welcome! If you'd like to contribute to this ecommerce web app, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and commit them to your branch.

4. Push your changes to your forked repository.

5. Submit a pull request describing your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
