Here's a professional `README.md` for your GitHub repository:

```markdown
# Light-it-Up E-shop

## Overview

Light-it-Up E-shop is a dynamic e-commerce platform designed for efficient online shopping experiences. This project aims to provide a seamless interface for users to browse, select, and purchase lighting products.

## Features

- **User Authentication:** Secure login and registration system.
- **Product Management:** Admin interface for adding, updating, and deleting products.
- **Shopping Cart:** Users can add items to their cart and proceed to checkout.
- **Order Management:** Track and manage orders from both user and admin perspectives.
- **Responsive Design:** Mobile-friendly interface ensuring accessibility on various devices.

## Technologies Used

- **Frontend:**
  - HTML, CSS, SCSS
  - JavaScript

- **Backend:**
  - PHP
  - MongoDB

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

- **Admin Panel:** Accessible at `/admin` after logging in with admin credentials.
- **User Dashboard:** Provides access to user-specific functionalities like order history and profile settings.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or feedback, please contact [pkourr](mailto:your-email@example.com).

---

**Note:** Ensure you have the necessary permissions and configurations on your server to avoid any issues during setup.
```

Feel free to adjust the contact email and any other specific details to match your project requirements.