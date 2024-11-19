
# ExplorePak

![Banner Image](images/Banner.png)

**ExplorePak** is a web application designed to manage and display a variety of tour packages. This project allows admin users to manage packages, including details such as name, location, description, price range, and images. It also includes an admin login page to access the management panel.

## Features

- Admin login page for secure access to the management panel.
- Display a list of available tour packages with their details.
- Responsive table displaying package information.
- Option to add new packages (for future development).
- User-friendly interface built with **Bootstrap** for responsiveness.

## Tech Stack

- **Frontend**: HTML, CSS, Bootstrap 5
- **Backend**: PHP (MySQL for database operations)
- **Database**: MySQL
- **Authentication**: PHP session-based login system

## Project Structure

```
/ExplorePak
│
├── /images/                # Directory for storing package images
├── /includes/              # Contains PHP files for handling database connections
├── /css/                   # Custom CSS styles
│
├── index.php               # Homepage for displaying available packages
├── login.php               # Admin login page
├── admin.php               # Admin dashboard for managing packages
├── admin_contact.php       # View all contacts submitted via the website
├── authenticate.php        # Handles authentication logic
├── logout.php              # Handles user logout
├── config.php              # Database configuration
└── README.md               # Project documentation
```

## Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/faheem506pk/ExplorePak.git
   ```

2. Set up your database. Use the following SQL commands to create the database and required tables:

   ```sql
   CREATE DATABASE tour;

   USE tour;

   -- Create contact table
   CREATE TABLE contact (
       id INT AUTO_INCREMENT PRIMARY KEY,
       Name VARCHAR(100),
       Email VARCHAR(100),
       Phone VARCHAR(20),
       Subject VARCHAR(100),
       Message TEXT
   );

   -- Create packages table
   CREATE TABLE packages (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100),
       location VARCHAR(100),
       description TEXT,
       price_min INT,
       price_max INT,
       image VARCHAR(255)
   );

   -- Insert initial package data
   INSERT INTO packages (name, location, description, price_min, price_max, image) VALUES
   ('Murree Package', 'Murree', 'Murree is a popular hill station in Pakistan, known for its scenic beauty, lush greenery, and cool climate. It is a top destination for families, honeymooners, and tourists.', 5999, 8999, 'img-1.jpg'),
   ('Karachi Package', 'Karachi', 'Explore the beaches of Karachi, the bustling markets, and historical sites. Karachi offers a diverse experience with nightlife and water sports options for tourists.', 7999, 12999, 'img-2.webp'),
   ('Islamabad Package', 'Islamabad', 'Islamabad, the capital city, boasts modern architecture, beautiful gardens, and cultural landmarks. Discover the serenity of the city with our exclusive packages.', 2999, 8999, 'img-3.jpg'),
   ('Lahore Package', 'Lahore', 'Lahore, the heart of Pakistan, is famous for its rich cultural heritage, delicious food, and historic sites like Badshahi Mosque and Lahore Fort. Our tours cover the best spots in the city.', 11999, 15999, 'img-4.jpg'),
   ('Hunza Valley Package', 'Hunza Valley', 'Discover the breathtaking beauty of Hunza Valley, surrounded by snow-capped peaks, crystal clear rivers, and lush greenery. It\'s an ideal destination for nature lovers.', 4999, 9999, 'img-5.jpg'),
   ('Skardu Package', 'Skardu', 'Visit the mesmerizing landscapes of Skardu, known for its stunning lakes, mountains, and adventurous treks. Skardu is a must-visit destination for adventure enthusiasts.', 20000, 25000, 'img-6.jpg');
   ```

3. Update the `config.php` file with your database credentials.
4. Ensure that your web server supports PHP (e.g., XAMPP, WAMP, or a live server).
5. Place the project files in your server's root directory (e.g., `htdocs` in XAMPP).
6. Open your browser and navigate to `localhost/ExplorePak` to view the project.

## Usage

- **Admin Login**: Access the admin panel through `login.php` and use the admin credentials to log in.
- **Manage Packages**: Once logged in, the admin can view, update, and manage tour packages.
- **Display Packages**: The public-facing homepage (index.php) will show the available packages with details.

## Future Improvements

- Allow admins to add, update, and delete packages.
- Implement a contact form to handle customer inquiries.
- Add user registration and authentication for customer interactions.
- Enhance the user interface with more interactive elements.

## Contributions and Improvements

We welcome contributions to improve the **ExplorePak** project! Here’s how you can contribute:

1. Fork the repository:
   Click on the **Fork** button at the top-right of this page to create a personal copy of the repository.

2. Create a branch for your changes:
   It’s recommended to create a new branch for each feature or fix you want to contribute.
   ```bash
   git checkout -b feature/your-feature-name
   ```

3. Make your changes:  
   Implement your changes in the codebase and commit them with clear and descriptive messages.

4. Push your changes:  
   Push your changes back to your forked repository.
   ```bash
   git push origin feature/your-feature-name
   ```

5. Open a Pull Request:  
   Open a Pull Request (PR) to the original repository, explaining the changes you made.

By contributing to this project, you help improve **ExplorePak** and make it better for everyone. Thank you!

## License

This project is open source and available under the MIT License.

---

Feel free to fork, contribute, or open issues. For any questions or feedback, open an issue or contact me directly ( mailto:Faheemiqbalm@gmail.com ).

