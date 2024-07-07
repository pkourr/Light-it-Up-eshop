# Light-it-Up E-shop

## Overview

Light-it-Up E-shop is a dynamic e-commerce platform designed for efficient online shopping experiences. This project provides a seamless interface for users to browse, select, and purchase lighting products.

## Features

- **User Authentication:** Secure login and registration system.
- **Product Management:** Admin interface for adding, updating, and deleting products.
- **Shopping Cart:** Users can add items to their cart and proceed to checkout with dynamic Ajax updates.
- **Order Management:** Track and manage orders from both user and admin perspectives.
- **Responsive Design:** Mobile-friendly interface ensuring accessibility on various devices.
- **Product Recommendations:** Personalized recommendations based on user behavior.
- **Advanced Search:** Search functionality to quickly find products.

## Technologies Used

- **Frontend:**
  - HTML, CSS, SCSS
  - JavaScript

- **Backend:**
  - PHP
  - MongoDB

- **Tools:**
  - Google Trends for market analysis
  - Visual Paradigm for SWOT analysis
  - GlooMaps and Wireframe.cc for design
  - Ajax for dynamic content updates

## Folder Structure

- **`my_db/`:** Contains database scripts and configuration files.
- **`phpmongodb/`:** Backend code including PHP scripts and MongoDB integration.

## Installation

### Prerequisites

- PHP 7.4+
- MongoDB 4.4+
- Apache/Nginx server

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/pkourr/Light-it-Up-eshop.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Light-it-Up-eshop
   ```
3. Set up the database:
    - Import the database schema from the `my_db/` folder into your MongoDB instance.
    - Collections include `usercollection` for user data and `prodcollection` for product data.

4. Configure the backend:
    - Update the MongoDB connection settings in `phpmongodb/config.php`.

5. Start the server:
    - For Apache:
      ```bash
      sudo systemctl start apache2
      ```
    - For Nginx:
      ```bash
      sudo systemctl start nginx
      ```

6. Access the application:
    - Open your web browser and navigate to `http://localhost/Light-it-Up-eshop`.

## Usage

- **Admin Panel:** Accessible at `/admin` after logging in with admin credentials. Admins can manage products, users, and orders.
- **User Dashboard:** Provides access to user-specific functionalities like order history and profile settings.
- **Shopping Cart:** Users can add, remove, and update products in their cart with real-time feedback.

## Database Schema

- **`usercollection`:** Stores user information (id, email, password, name, address).
- **`prodcollection`:** Stores product information (id, name, price, image).

## UI/UX Design

- **Visual Sitemap:** Provides an overview of the website structure (created with GlooMaps).
- **Wireframes:** Desktop, mobile, and tablet designs (created with Wireframe.cc).
- **Mockups:** Detailed design mockups (created with Mockplus RP).

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

**Note:** Ensure you have the necessary permissions and configurations on your server to avoid any issues during setup.
