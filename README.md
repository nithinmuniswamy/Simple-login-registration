# Simple-login-registration

A simple php program to register and login users
- Registration form to register a new user store the data in MYSQL database.
- Login form to redirect the loggedin user to home page which has the list of products stored in database.
- Using SESSION variable to check if the user is logged in or not.

Configuring your MYSQL Database..

Open db-config.php file and edit the following line of code.

$link = mysqli_connect("localhost", "root", "root", "php", "3308");

Like

$link = mysqli_connect("[host]", "[username]", "[password]", "[db_name]", "[port_number(optional)]");

Create a Database name "php" and execute the following query.

- Create table users

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

- Create table products

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` text NOT NULL,
  `brand` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Inserting values to products table

INSERT INTO `products` (`id`, `name`, `image_url`, `brand`, `cost`) VALUES
(1, 'Galaxy S', 'https://images.samsung.com/is/image/samsung/p5/global/mkt/unpacked201802/pcdpfs/smartphone-galaxy-star-type2.png', 'Samsung', '1999'),
(5, 'Galaxy Note', 'https://images.samsung.com/is/image/samsung/p5/global/mkt/unpacked201808/pcdpfs/pcd-choose-crown-color2.png', 'Samsung', '1500'),
(8, 'redmi-note-6-pro', 'https://i01.appmifile.com/webfile/globalimg/in/cms/793D062A-59CE-B605-91F0-957B9D5424CF.jpg', 'Redmi', '200'),
(9, 'Redmi Y2', 'https://i01.appmifile.com/webfile/globalimg/in/cms/FA582CFC-830C-9314-2430-295181B9DE06.jpg', 'Redmi', '180'),
(10, 'Apple X', 'https://www.extremetech.com/wp-content/uploads/2017/11/554940-apple-iphone-x.jpg', 'Apple', '2000'),
(11, 'Apple 8 Plus', 'https://static.digit.in/product/5f155449239e312a84c64cef3932f6a959a5b933.jpeg', 'Apple', '1800'),
(12, 'Google Pixel 2 XL', 'https://images-na.ssl-images-amazon.com/images/I/51xZGDvJLfL.jpg', 'Google', '1600'),
(13, 'Google Pixel 3', 'https://images-na.ssl-images-amazon.com/images/I/31NGWxRNVvL.jpg', 'google', '1899'),
(14, 'OnePlus 6T', 'https://images-na.ssl-images-amazon.com/images/I/51EfDWKl24L._SL1300_.jpg', 'OnePlus', '599'),
(15, 'OnePlus 6', 'https://images-na.ssl-images-amazon.com/images/I/81ZUsnL1v2L._SL1500_.jpg', 'OnePlus', '530');
