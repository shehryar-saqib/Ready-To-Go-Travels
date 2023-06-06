DESCRIPTION:
RTG (Ready to Go) Travels is a travel agency devoted to providing the best possible experience to its users. It is an online travel booking website that provides comprehensive information about the   offered destinations, the best itineraries, top-notch amenities, and an unforgettable experience all while giving the users the ability to book tours online without any hassle. For the cs350 Web Engineering project, the aim of the group was to design and build a cutting-edge, professional website for this travel agency. Using this website, the users will be able to sign up, book tours from a list of pre-prepared travel packages or customize a travel package that is tailored to their needs. Moreover, the travelers can explore the website to gain assistance for planning their next trip. The responsive script and layout have been designed through HTML, CSS and Bootstrap v.5.2.3. The server-side programming has been achieved through php and Laravel with the database records stored in a mysql database.


FRAMEWORKS USED:
	1 -> HTML
	2 -> CSS
	3 -> Bootstrap templates
	4 -> MySQL
	5 -> PHP
	6 -> Laravel

DATABASE TABLES:
	1 -> Users: Stores the registered user details.
	2 -> Usertrips: Stores the reservations made by the users to display on reservations page.
	3 -> Team: Stores the details of the team members displayed on packages page.
	4 -> Reviews: Stores the faq posts uploaded by the authenticated users.
	5 -> assets: Stores the images and their respective locations to be fetched.

HOW TO RUN:
	1 -> Download and install XAMPP, with default ports 80 and 3306 for Apache and mysql respectively.
	2 -> Run XAMPP's Apache and database services.
	3 -> Install Laravel 8/9.
	4 -> Place the 'new' named project in any directory.
	5 -> Open command prompt and enter the project's directory.
	6 -> Open PhpMyAdmin on localhost and paste the queries from sql.txt on sql query builder.
		NOTE -> Replace the local images paths in sql.txt with respective directory you place your project in)
	7 -> Run the command 'php artisan migrate' to install the database in PhpMyAdmin in localhost.
	8 -> Run the command 'php artisan serve' to start the project.
	9 -> Navigate to '127.0.0.1:8000/' in a browser to visit the project.