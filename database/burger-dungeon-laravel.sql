-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2023 at 07:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger-dungeon-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_03_21_015757_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `images`, `created_at`, `updated_at`) VALUES
(16, 'Kraby Patty', 'Kraby Patty is a delicious burger made with 100% pure beef patty, melted cheddar cheese, crispy lettuce, juicy tomatoes, and pickles, all tucked inside a soft, freshly baked bun. The burger is topped with a special sauce made with a blend of secret ingredients, giving it a unique flavor that keeps customers coming back for more. Whether you\'re in the mood for a quick lunch or a satisfying dinner, Kraby Patty is the perfect choice. With its mouthwatering taste and high-quality ingredients, this burger is sure to leave you feeling fully satisfied. So come on down and sink your teeth into a Kraby Patty today!', 'burger', 'IMG_641aa628d9bbc.pngwing.com (29).png', '2023-03-21 22:54:32', '2023-03-29 18:36:39'),
(18, 'Chicken Wings', 'Chicken wings are a popular finger food that is enjoyed by people of all ages. These delicious treats can be found in various styles and flavors, from classic buffalo to spicy Korean. Chicken wings are typically made by frying or baking chicken wings until they are crispy and then tossing them in a flavorful sauce. Some popular sauces for chicken wings include BBQ, honey mustard, garlic parmesan, and teriyaki.', 'barbeque', 'IMG_641aabb4806ae.pngwing.com (25).png', '2023-03-21 23:18:12', '2023-03-30 18:35:55'),
(19, 'Burger Linamnam', 'Burger Linamnam is a flavorful burger that is sure to satisfy your cravings. It features a juicy beef patty, crispy bacon, melted cheese, and a special sauce that packs a punch of umami flavor. The burger is sandwiched between soft brioche buns and served with a side of crispy fries, making it the perfect meal for any burger lover. With each bite, you\'ll experience a delicious explosion of flavors and textures that will leave you wanting more.', 'burger', 'IMG_641aabe971441.pngwing.com (17).png', '2023-03-21 23:19:05', '2023-03-29 18:44:26'),
(25, 'Fries with Nuggets', 'Fries with nuggets is a classic fast food combination that never fails to satisfy. The crispy and savory nuggets perfectly complement the soft and fluffy fries. Whether you dip your nuggets in ketchup, honey mustard, or barbecue sauce, each bite is a flavor explosion that will leave you wanting more. It\'s a perfect meal for a quick snack or a satisfying lunch on the go.', 'fries', 'IMG_641acfdd6a84c.pngwing.com (21).png', '2023-03-22 01:52:29', '2023-03-29 18:45:18'),
(26, 'Super Bacon Burger', 'Super Bacon Burger is a mouthwatering burger that features a juicy beef patty topped with crispy bacon, melted cheddar cheese, fresh lettuce, and tangy pickles, all sandwiched between two soft buns. The combination of flavors and textures creates a delicious and satisfying meal that will leave you craving for more. Whether you\'re a burger enthusiast or simply looking for a hearty meal, the Super Bacon Burger is a must-try that will not disappoint.', 'burger', 'IMG_641ad0293709c.pngwing.com (16).png', '2023-03-22 01:53:45', '2023-03-29 18:45:49'),
(27, 'Cheesy Burger', 'Cheesy Burger is a classic fast-food staple that combines juicy beef patty with melted cheese, lettuce, tomato, and a special sauce in a soft bun. The star of the show, the cheese, is often the highlight of this burger, adding a gooey and satisfying texture that pairs perfectly with the savory meat. The burger is also customizable, with many variations adding bacon, onion rings, or jalapeños for a spicy kick. Whether it\'s a quick bite on-the-go or a guilty pleasure, Cheesy Burgers never fail to satisfy cravings for comfort food.', 'burger', 'IMG_641ad0522aba5.pngwing.com (27).png', '2023-03-22 01:54:26', '2023-03-29 18:46:26'),
(28, 'Choco Dash Ice Cream', 'Choco Dash Ice Cream is a delightful treat for anyone with a sweet tooth. The rich chocolate flavor combined with the smooth and creamy texture of the ice cream creates an irresistible sensation that is sure to satisfy your cravings. Each scoop is loaded with chunks of chocolate that add a crunchy texture to the creamy base, making it an indulgent dessert that you can enjoy any time of the day. Whether you\'re looking for a refreshing summer treat or a decadent after-dinner dessert, Choco Dash Ice Cream is the perfect choice.', 'icecream', 'IMG_641bacc4f3f21.pngwing.com (15).png', '2023-03-22 17:35:01', '2023-03-29 18:48:11'),
(29, 'Saucy Chicken', 'Saucy Chicken is a delicious dish that features tender, juicy chicken pieces coated in a flavorful sauce. The sauce is made with a blend of savory and sweet ingredients, such as soy sauce, honey, garlic, and chili paste, which gives the dish a perfect balance of flavors. It\'s often served over a bed of rice, with steamed vegetables or as a sandwich. This dish is perfect for those who love a little kick of spice and is a great way to enjoy a comforting, home-cooked meal with family and friends.', 'barbeque', 'IMG_641bbef28a82b.pngwing.com (26).png', '2023-03-22 18:52:34', '2023-03-29 18:48:43'),
(30, 'Coke-Cola', 'Coca-Cola is a carbonated soft drink that was created in the late 19th century by pharmacist John Pemberton. It is one of the most popular and iconic soda brands in the world, known for its distinctive red and white branding and refreshing taste. Coca-Cola is made with a secret recipe of natural flavors and ingredients, and it has a unique blend of sweetness and acidity that makes it a favorite beverage for many people around the globe. It is available in a range of sizes and flavors, including classic, diet, and cherry, and it is often enjoyed with meals or as a refreshing pick-me-up throughout the day.', 'drinks', 'IMG_641bc6aa749df.pngwing.com (23).png', '2023-03-22 19:25:30', '2023-03-29 18:49:20'),
(31, 'Double Burger Dash', 'Double Burger Dash is a delicious burger that is loved by many. This burger features two juicy beef patties layered with melted cheese, fresh lettuce, tomatoes, pickles, and a special sauce, all sandwiched between two soft buns. With every bite, the savory flavors of the beef and cheese blend perfectly with the tangy sauce, creating a taste sensation that will leave you wanting more. Whether you\'re craving a hearty lunch or a satisfying dinner, Double Burger Dash is sure to satisfy your hunger and your taste buds.', 'burger', 'IMG_641bf273b61c5.IMG-64097fdc759c45.33040241.pngwing.com.png', '2023-03-22 22:32:19', '2023-03-29 18:49:52'),
(32, 'Onion Bacon Burger', 'The Onion Bacon Burger is a mouthwatering sandwich that features a juicy beef patty topped with crispy bacon and caramelized onions. The savory and slightly sweet flavors of the bacon and onions perfectly complement the meaty goodness of the burger, making for a deliciously satisfying meal. Served on a soft bun with your choice of toppings and condiments, this burger is a classic favorite that never fails to satisfy cravings.', 'burger', 'IMG_6423dbaf76c6d.pngwing.com (39).png', '2023-03-22 22:33:34', '2023-03-29 18:50:27'),
(33, 'The Cheesy Giant Burger', 'The Cheesy Giant Burger is a true feast for cheese lovers! This burger features a juicy beef patty that\'s smothered in melted cheddar cheese, topped with crispy bacon, and served on a toasted bun. The combination of savory beef, salty bacon, and gooey cheese creates a mouth-watering explosion of flavor in every bite. It\'s the perfect meal for when you\'re craving something indulgent and satisfying. Don\'t forget to pair it with a side of crispy fries and an ice-cold soda for the ultimate fast-food experience.', 'burger', 'IMG_641bf2e0dd5a3.IMG-640eb7248e9760.78202599.pngwing.com (19).png', '2023-03-22 22:34:08', '2023-03-29 18:51:02'),
(34, 'Nuggetlicious Burger', 'Nuggetlicious Burger is a mouth-watering combination of crispy chicken nuggets, fresh lettuce, juicy tomato slices, and creamy mayonnaise sandwiched between two soft buns. With every bite, you\'ll experience a perfect blend of textures and flavors that will leave you wanting more. The crunchy nuggets give the burger an extra punch of flavor, while the fresh vegetables add a refreshing and healthy touch. If you\'re looking for a quick and satisfying meal that will leave you feeling full and happy, the Nuggetlicious Burger is definitely the way to go!', 'burger', 'IMG_641bf315cefde.IMG-640eb7429d0d21.58592318.pngwing.com (18).png', '2023-03-22 22:35:01', '2023-03-29 18:51:32'),
(35, 'The Burger Dungeon', 'The Burger Dungeon is a haven for burger lovers seeking a unique and unforgettable culinary experience. With its dark, medieval-inspired ambiance and mysterious decor, it sets the perfect mood for a tantalizing meal. But what truly sets it apart are its burgers - each one bursting with flavor and crafted with care. From the classic cheeseburger to the daring and innovative creations, like the Dungeon Master Burger with its spicy jalapeño cream cheese and crispy onion rings, every bite is an adventure. So come on in, brave the dungeon, and savor the taste of the best burgers in town.', 'burger', 'IMG_641bf36b06f9c.IMG-640a99d0508739.80814407.burger.png', '2023-03-22 22:36:27', '2023-03-29 18:52:04'),
(36, 'Chicken Burger Sandwich', 'A chicken burger sandwich is a type of sandwich that typically consists of a breaded and fried chicken patty, served on a bun with various toppings such as lettuce, tomato, onion, pickles, cheese, and condiments like mayonnaise, ketchup, or mustard. It is a popular fast food item and can be found on the menus of many fast food chains around the world. The chicken patty can also be grilled or baked instead of fried to create a healthier option.', 'burger', 'IMG_641bf3881f9ad.IMG-641164f50eb1a9.42863228.pngwing.com (28).png', '2023-03-22 22:36:56', '2023-03-29 18:53:08'),
(37, 'Cheesy Fries Explosion', 'Cheesy Fries Explosion is a delicious and indulgent snack that combines crispy french fries with rich, melted cheese. Each bite is a heavenly explosion of savory flavors and textures, with the gooey cheese perfectly complementing the salty fries. Whether you\'re looking for a satisfying snack or a tasty side dish, Cheesy Fries Explosion is sure to hit the spot. So why settle for plain old fries when you can take your taste buds on a cheesy adventure?', 'fries', 'IMG_641bf3acc0af5.IMG-6409a5b3230c73.34787294.pngwing.com (3).png', '2023-03-22 22:37:32', '2023-03-29 18:53:49'),
(38, 'Simply Crispy: The Allure of Regular Fries', 'There\'s something undeniably satisfying about biting into a perfectly cooked, golden-brown fry. The crisp exterior gives way to a soft and fluffy interior, and the subtle saltiness hits just the right spot. While there are many variations of fries, from curly to waffle-cut to sweet potato, sometimes there\'s nothing quite like the simplicity of a classic regular fry.', 'fries', 'IMG_641bf3c267acb.IMG-6409a6c4ef67d0.49809937.pngwing.com (2).png', '2023-03-22 22:37:54', '2023-03-29 18:54:35'),
(39, 'Buffalo Chicken Wing Fries', 'Buffalo Chicken Wing Fries are the perfect combination of crispy fries and spicy buffalo chicken. The crispy fries are topped with shredded chicken, buffalo sauce, and melted cheese, creating a delicious and addictive snack or meal. Whether you\'re a fan of buffalo chicken wings or just love the taste of spicy food, these fries are sure to satisfy your cravings. Perfect for game day or just a night in with friends, Buffalo Chicken Wing Fries are the ultimate comfort food that will leave you wanting more.', 'barbeque', 'IMG_641bf409aa08c.IMG-640ebcaaf40dd6.18516028.pngwing.com (20).png', '2023-03-22 22:39:05', '2023-03-29 18:55:04'),
(40, 'Loaded Cheesy Fries', 'Loaded Cheesy Fries are a delectable indulgence that combines the satisfying crunch of golden fries with the savory flavors of melted cheese, crispy bacon bits, and tangy jalapeños. Perfectly seasoned and generously topped, these fries are sure to satisfy your cravings and leave you feeling happy and satisfied. Whether you\'re enjoying them as a snack, side dish, or late-night treat, Loaded Cheesy Fries are a crowd-pleasing favorite that are impossible to resist.', 'fries', 'IMG_641bf42734002.IMG-640ebcdfbcbe83.61334566.pngwing.com (22).png', '2023-03-22 22:39:35', '2023-03-29 18:55:36'),
(41, 'Blue Ice White Dragon', 'Blue Ice White Dragon is a refreshing and invigorating fruit juice blend that combines the sweet and tangy flavors of blueberries and dragon fruit with a cool and icy blast of menthol. This unique combination of flavors creates a smooth and satisfying vaping experience that is sure to satisfy any fruit and menthol lover\'s taste buds. With its vibrant blue color and bold flavor profile, Blue Ice White Dragon is the perfect all-day vape for those who enjoy a sweet and icy sensation.', 'drinks', 'IMG_641bf44e577f2.IMG-6409a962a59508.47355920.pngwing.com (6).png', '2023-03-22 22:40:14', '2023-03-29 18:56:46'),
(42, 'Regular Iced Tea', 'Regular Iced Tea is a classic refreshing beverage made by steeping tea leaves in water, sweetened with sugar or honey, and served over ice. It is a popular drink for those who want a caffeine-free alternative to soda or coffee, especially on hot summer days. Some variations include adding lemon, mint, or fruit flavors to the tea for a twist on the traditional taste. Regular Iced Tea is a great way to hydrate and cool down during any season.', 'drinks', 'IMG_641bf470eab45.IMG-6409a97f4df7e9.02736266.pngwing.com (4).png', '2023-03-22 22:40:48', '2023-03-29 18:57:15'),
(43, 'Fresh Orange Juice', 'Fresh Orange Juice is a refreshing beverage made from freshly squeezed oranges. It is a great source of vitamin C and other essential nutrients, making it a popular choice for those looking for a healthy and tasty drink. With its sweet and tangy flavor, fresh orange juice is perfect for breakfast, a midday snack, or any time of the day when you need a refreshing pick-me-up.', 'drinks', 'IMG_641bf48397021.IMG-640fddddde8765.48691470.pngwing.com (5).png', '2023-03-22 22:41:07', '2023-03-29 18:57:43'),
(44, 'Chocolate Ice Cream Wafer Stick', 'The Chocolate Ice Cream Wafer Stick is a delectable treat that is perfect for any chocolate lover. The creamy, rich chocolate ice cream is surrounded by a crispy wafer stick, creating a perfect balance of textures. Each bite is like a mini celebration of chocolate, with a satisfying crunch and a smooth, indulgent finish. Whether you\'re looking for a sweet treat to cool down on a hot day or a decadent dessert to satisfy your sweet tooth, the Chocolate Ice Cream Wafer Stick is sure to hit the spot.', 'icecream', 'IMG_641bf4ca98c5e.IMG-6409a91b9865b4.74186453.pngwing.com (8).png', '2023-03-22 22:42:18', '2023-03-29 18:58:14'),
(45, 'Creamy Strawberry Ice Cream', 'Creamy Strawberry Ice Cream is a delicious and refreshing dessert that is perfect for a hot summer day. Made with fresh, ripe strawberries and cream, this ice cream is rich, creamy, and bursting with flavor. It is a perfect blend of sweetness and tanginess that will satisfy your taste buds. Whether enjoyed on its own or as a topping for a slice of pie or cake, Creamy Strawberry Ice Cream is a classic dessert that everyone will love.', 'icecream', 'IMG_641bf4e15fda4.IMG-6409a943ae08d5.57748259.pngwing.com (7).png', '2023-03-22 22:42:41', '2023-03-29 18:58:50'),
(46, 'Triple Treat Ice Cream', 'Triple Treat Ice Cream is a delicious dessert that features three flavors of ice cream in one serving. Typically, this treat consists of three scoops of different ice cream flavors, such as chocolate, vanilla, and strawberry, served together in a bowl or on a cone. This combination creates a perfect harmony of flavors and textures that make it a favorite among ice cream lovers of all ages. Whether enjoyed on a hot summer day or as a special treat after a meal, Triple Treat Ice Cream is sure to satisfy any sweet tooth.', 'icecream', 'IMG_641bf4f57be9c.IMG-640e9f61531475.40804347.pngwing.com (14).png', '2023-03-22 22:43:01', '2023-03-29 18:59:36'),
(47, 'Super Dash Ice Cream', 'A 4-in-1 ice cream with vanilla, chocolate, strawberry, and vanilla-strawberry flavors would offer a variety of tastes and textures in one dessert. The smooth and creamy vanilla ice cream would provide a classic and comforting flavor, while the rich and decadent chocolate ice cream would satisfy those chocolate cravings. The sweet and fruity strawberry ice cream would add a refreshing and delightful twist, and the vanilla-strawberry flavor would be a perfect balance of the two classic flavors. Overall, this 4-in-1 ice cream would be a great option for anyone who loves to have it all!', 'icecream', 'IMG_641bf50884e53.IMG-640ea0a5200087.24266956.pngwing.com (9).png', '2023-03-22 22:43:20', '2023-03-29 19:01:12'),
(48, 'BBQ Chicken with a Side of Veggies', 'BBQ chicken with a side of veggies is a savory and satisfying meal that is perfect for lunch or dinner. The juicy and tender chicken is coated with a sweet and smoky BBQ sauce that adds a burst of flavor to every bite. The side of veggies adds a refreshing and healthy element to the dish, providing a mix of vitamins and nutrients. Whether you\'re looking for a hearty meal after a long day or a quick lunch that will keep you energized throughout the afternoon, BBQ chicken with a side of veggies is a delicious and satisfying choice.', 'barbeque', 'IMG_641bf51e19f85.IMG-6409a8af63ad69.08868476.pngwing.com (11).png', '2023-03-22 22:43:42', '2023-03-29 19:01:50'),
(49, 'BBQ Chicken Smacking Sauce', 'Get ready to experience the bold and flavorful taste of our BBQ Chicken Smacking Sauce! Made with a special blend of spices and seasonings, this sauce adds the perfect amount of zing to your chicken dishes. Whether you\'re grilling, baking, or sautéing, our smacking sauce is the perfect addition to any meal. Not just for chicken, it also pairs well with beef, pork, and even vegetables. So get your taste buds ready for a savory and delicious BBQ experience like no other!', 'barbeque', 'IMG_641bf5487bcc5.IMG-6409a8d9c723a3.11758503.pngwing.com (10).png', '2023-03-22 22:44:24', '2023-03-29 19:02:19'),
(50, 'Steak and Veggie Loaded Fries', 'Steak and Veggie Loaded Fries is a hearty and delicious meal that\'s perfect for satisfying your cravings. It features crispy fries that are loaded with tender, juicy steak, fresh and crunchy vegetables, and a drizzle of creamy sauce that brings it all together. Whether you\'re looking for a filling lunch or a satisfying dinner, these loaded fries are sure to hit the spot. So grab a fork and dig in!', 'barbeque', 'IMG_641bf56d77121.IMG-640ebe11ee6419.95730537.pngwing.com (24).png', '2023-03-22 22:45:01', '2023-03-29 19:02:50'),
(51, 'Strawberry Shake', 'Strawberry Shake is a classic creamy and refreshing drink that\'s perfect for a hot summer day. Made with fresh strawberries, milk, and ice cream, it\'s a delicious treat that can be enjoyed any time of day. The smooth and creamy texture of the shake pairs perfectly with the sweet and tangy flavor of the strawberries, making it a favorite among kids and adults alike. Whether enjoyed as a quick snack or a sweet dessert, the Strawberry Shake is sure to satisfy your sweet tooth cravings.', 'drinks', 'IMG_641c1643e12b0.pngwing.com (35).png', '2023-03-23 01:05:07', '2023-03-29 19:03:19'),
(93, 'Overloaded Onion Burger', 'The Overloaded Onion Burger is a hearty and flavorful meal that is perfect for satisfying your hunger cravings. This juicy burger is topped with crispy fried onions, melted cheese, and a tangy sauce that brings out the delicious flavor of the beef. With each bite, you\'ll savor the combination of savory and sweet flavors, creating a taste explosion in your mouth. Served with a side of crispy fries and a refreshing drink, this burger is the perfect meal for any occasion.', 'burger', 'IMG_6423a701ade87.pngwing.com (30).png', '2023-03-28 18:48:33', '2023-03-29 19:03:45'),
(94, 'Whopper Hamburger Big King', 'The Whopper Hamburger and the Big King are two classic burgers that have become synonymous with fast food. The Whopper Hamburger is a flame-grilled beef patty, topped with lettuce, tomato, onion, pickles, ketchup, and mayo, all sandwiched between a sesame seed bun. The Big King, on the other hand, features two flame-grilled beef patties, cheese, lettuce, onions, and pickles, all served on a sesame seed bun, and finished with a special sauce. Both burgers are known for their bold flavors and are favorites of fast food lovers everywhere.', 'burger', 'IMG_6423a7de19bb0.pngwing.com (36).png', '2023-03-28 18:52:14', '2023-03-29 19:04:12'),
(95, 'Quarter Pounder Burger', 'Veggie burger Cheeseburger Quarter Pounder is a classic hamburger. It features a juicy 1/4 pound beef patty, topped with melted cheese, onions, pickles, ketchup, and mustard, all nestled between a soft sesame seed bun. It\'s a simple but satisfying burger that has been a favorite among fast food enthusiasts for decades.', 'burger', 'IMG_6423a8182e9fb.pngwing.com (37).png', '2023-03-28 18:53:12', '2023-03-29 19:05:04'),
(101, 'Submarine Cheese Sandwich', 'The Submarine Cheese Sandwich is a classic deli sandwich that is packed with flavor and texture. This sandwich features layers of thinly sliced ham, turkey, and roast beef, topped with melted Swiss cheese and served on a warm, toasted sub roll. The sandwich is then finished off with a tangy mustard-mayo sauce and topped with crisp lettuce, juicy tomatoes, and crunchy pickles. The Submarine Cheese Sandwich is a delicious and filling meal that is perfect for lunch or dinner, and is sure to satisfy any sandwich craving.', 'burger', 'IMG_6423dbe13eb87.pngwing.com (41).png', '2023-03-28 22:31:01', '2023-03-29 19:05:30'),
(102, 'Gyro Baguette', 'Gyro Baguette is a delicious sandwich made with thinly sliced gyro meat, fresh vegetables, and a creamy tzatziki sauce, all packed inside a warm, crispy baguette. The gyro meat is usually made with beef, lamb, or a combination of both, and is seasoned with a blend of spices like oregano, garlic, and paprika. The fresh vegetables used in the sandwich can include lettuce, tomato, onion, and cucumber, and they add a crunchy texture and a burst of flavor to the sandwich. The creamy tzatziki sauce is made with Greek yogurt, cucumber, garlic, and dill, and it adds a tangy, refreshing taste to the sandwich. Overall, the Gyro Baguette is a tasty and filling meal that\'s perfect for lunch or dinner.', 'burger', 'IMG_6423dc1458cda.pngwing.com (40).png', '2023-03-28 22:35:00', '2023-03-29 19:06:01'),
(103, '3 in 1 Veggie Burger Pack', 'The 3 in 1 Veggie Burger Pack is the perfect choice for those who love variety and plant-based options. This pack includes three delicious and satisfying veggie burgers made with the freshest ingredients. Each burger is bursting with flavor and features a unique blend of vegetables, herbs, and spices. With this pack, you can enjoy the classic Veggie Burger, the zesty Spicy Black Bean Burger, and the savory Mushroom and Swiss Burger. Whether you\'re a vegetarian or just looking to switch up your burger game, the 3 in 1 Veggie Burger Pack is a must-try!', 'burger', 'IMG_6423e89364393.pngwing.com (31).png', '2023-03-28 23:28:19', '2023-03-29 19:06:32'),
(104, 'Four Seasons with Orange and Cherry', 'Four Seasons with Orange and Cherry is a refreshing fruit drink made with a combination of four different fruits - usually pineapple, mango, guava, and papaya - along with orange and cherry flavors. It is a popular drink in the Philippines and can be found in most fast-food chains and restaurants. The sweet and tangy taste of the fruits, combined with the citrusy flavor of orange and the sweetness of cherry, makes for a delicious and thirst-quenching beverage.', 'drinks', 'IMG_642544bf3374e.pngwing.com (34).png', '2023-03-30 00:13:51', '2023-03-30 00:13:51'),
(105, 'Regular Fries with Catsup and Mayo', 'Indulge in the classic combination of golden brown, crispy regular fries paired with the rich and tangy flavors of catsup and creamy mayonnaise. The perfect snack or side dish that never goes out of style, satisfying both your cravings and nostalgia. Bite into each crispy fry, dip it in the savory sauce, and let the flavors dance in your mouth. Enjoy this timeless treat anytime, anywhere!', 'fries', 'IMG_6425450a76f38.pngwing.com (38).png', '2023-03-30 00:15:06', '2023-03-30 00:15:06'),
(106, 'Sweet and Sumptuous: Blueberry Ice Cream', 'Indulge in the creamy goodness of our blueberry ice cream, made with the freshest and juiciest blueberries. Savor the sweet and tangy flavors of this delectable dessert that is perfect for any time of the day. Its smooth and velvety texture will surely leave you craving for more. Whether you want to cool down on a hot summer day or simply satisfy your sweet tooth, our blueberry ice cream is the perfect treat for you.', 'icecream', 'IMG_6425453977e8c.pngwing.com (32).png', '2023-03-30 00:15:53', '2023-03-30 00:15:53'),
(107, 'Vanilla Ice Cream', 'Vanilla Ice Cream is a classic dessert that is loved by many. It is a smooth and creamy frozen treat made with vanilla flavoring, cream, and sugar. This timeless flavor is perfect on its own or as a complement to other desserts, such as pies, cakes, or brownies. Whether enjoyed in a cone or a bowl, vanilla ice cream is a crowd-pleaser that never goes out of style.', 'icecream', 'IMG_642545e1077dc.pngwing.com (42).png', '2023-03-30 00:18:41', '2023-03-30 00:18:41'),
(108, 'Strawberry Cake Ice Cream', 'Indulge in the sweet and creamy delight of our strawberry cake ice cream! Made with real strawberries and chunks of fluffy cake, this delicious treat is the perfect balance of fruity and decadent. With every scoop, you\'ll experience the rich and velvety texture of our premium ice cream, blended with the delicious flavor of fresh strawberries and the irresistible sweetness of cake. Whether you\'re a dessert lover or simply craving something sweet, our strawberry cake ice cream is sure to satisfy your cravings and leave you wanting more!', 'icecream', 'IMG_64254603208ac.pngwing.com (43).png', '2023-03-30 00:19:15', '2023-03-30 00:19:15'),
(118, 'Potato Fries', 'Potato fries are a classic snack loved by people of all ages. Made from freshly cut potatoes, these fries are deep-fried to perfection, giving them a crispy exterior and a soft, fluffy interior. Whether you enjoy them plain, with ketchup, or with your favorite dipping sauce, potato fries are a tasty and satisfying treat that can be enjoyed anytime, anywhere. Perfect as a side dish or as a quick snack, potato fries are a beloved classic that will never go out of style.', 'fries', 'IMG_6426882d8281a.pngwing.com (44).png', '2023-03-30 23:13:49', '2023-03-30 23:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Frederick Socorin', 'socorinzyk@gmail.com', NULL, '$2y$10$KPnLJ3qPLw85545ib59BKevKifZg3QcXwHDSiBSCRG7aKxFVlUmzK', NULL, '2023-03-20 18:04:59', '2023-03-20 18:04:59'),
(2, 'Jeric Angana', 'jericpogi123@gmail.com', NULL, '$2y$10$4iBjwx7m4cO3276r/HYaWuvoI/7eIbdf.jikO/2Q3rcNikr2IECV2', NULL, '2023-03-21 17:47:10', '2023-03-21 17:47:10'),
(3, 'Krista Mae Hainto', 'kristamaehainto@gmail.com', NULL, '$2y$10$U.jSRoxWWctLR6Qk8.HAL.KaY71Z96t68TuWKW173CwupxQ2Gn3ee', NULL, '2023-03-28 01:37:12', '2023-03-28 01:37:12'),
(4, 'Rowell Gumahad', 'rowellskie12@gmail.com', NULL, '$2y$10$bjkZg7JH8PwGOAW5RbQx5erdR0.n.QRjBcOhoEZwdj09M3pRsqM6e', NULL, '2023-03-28 18:47:36', '2023-03-28 18:47:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
