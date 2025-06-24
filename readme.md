# RTG (Ready To Go) Travels

**RTG Travels** is an online travel booking website developed for the CS350 Web Engineering course. It enables users to explore destinations, book travel packages, and customize trips with ease. The platform offers a responsive, professional interface with secure backend functionality.

## Features

- User registration and authentication
- Book predefined or custom travel packages
- View destination and team information
- Post and browse user reviews (FAQs)
- Responsive design with Bootstrap 5.2.3

## Tech Stack

- **Frontend:** HTML, CSS, Bootstrap 5.2.3  
- **Backend:** PHP, Laravel (v8 or v9)  
- **Database:** MySQL

## Database Tables

- `users` – Stores registered user details  
- `usertrips` – Tracks travel reservations  
- `team` – Holds info about agency staff  
- `reviews` – Stores user-generated FAQs  
- `assets` – Stores image metadata and paths

## How to Run

1. Install [XAMPP](https://www.apachefriends.org/) (use default ports 80 and 3306)
2. Start Apache and MySQL services via the XAMPP Control Panel
3. Install Laravel 8 or 9
4. Place the project folder (e.g., `new/`) in your working directory
5. Open terminal and navigate to the project:
   ```bash
   cd path/to/new/
6. Open **phpMyAdmin** and create a new database.
7. Import `sql.txt` into the newly created database.  
8. Run Laravel migrations:
   ```bash
   php artisan migrate
9. Start the Laravel development server:
   ```bash
   php artisan serve
   ```
10. Open your browser and go to:
   [http://127.0.0.1:8000](http://127.0.0.1:8000)
