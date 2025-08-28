-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2025 at 10:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(132, 15, 13, 'pink rose', 10, 1, 'pink roses.jpg'),
(154, 0, 13, 'Bird of paradise', 1200, 1, 'bg.jpg'),
(168, 0, 23, 'Peace Lily', 1100, 1, 'peacelily.jpg'),
(170, 0, 25, 'Lady Palm', 2000, 1, 'ladypalm.jpg'),
(172, 22, 23, 'Peace Lily', 1100, 1, 'peacelily.jpg'),
(173, 22, 24, 'Snake plant', 600, 1, 'snakeplant.jpg'),
(202, 46, 23, 'Peace Lily', 1100, 1, 'peacelily.jpg'),
(203, 46, 24, 'Snake plant', 600, 1, 'snakeplant.jpg'),
(204, 46, 13, 'Bird of paradise', 1200, 1, 'birdofparadise.jpg'),
(231, 56, 26, 'Crotons', 600, 1, 'Crotons.jpg'),
(232, 56, 23, 'Peace Lily', 1100, 1, 'peacelily.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(13, 14, 'shrey ', 'shrey@gmail.com', '0987654321', 'hi, how are you?'),
(14, 17, 'deeya', 'deeya@gmail.com', '0912999', 'Function check '),
(15, 45, 'shr', 'shreyasubedi.078@kathford.edu.np', '2434', 'dfgh'),
(16, 45, 'jkbgkvgc', 'deeyamaharjan@gmail.com', '9871655141', 'jhbvhgv'),
(18, 52, 'Sarita', 'sarita@gmail.com', '9876543210', 'I need help to choose the indoor plants.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--
-- Error reading structure for table shop_db.order: #1932 - Table 'shop_db.order' doesn't exist in engine
-- Error reading data for table shop_db.order: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `shop_db`.`order`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(58, 52, 'Shreya Subedi', '9817715151', 'shreyasubedi8014@gmail.com', 'cash on delivery', '   Imadol, mahalaxmi municipality, 3121, Kathmandu ', ', Bird of paradise (1) ', 1200, '26-May-2024', 'dispatched'),
(59, 53, 'shreya', '9871551441', 'shreyasbd333@gmail.com', 'cash on delivery', '   Jhamsikhel, 9A95, Kathmandu ', ', Mini tool set (1) , Mowing tool (1) ', 2400, '26-May-2024', 'dispatched'),
(62, 53, 'Shreya Subedi', '9861544131', 'shreyasubedi333@gmail.com', 'cash on delivery', '   Imadol, mahalaxmi municipality, 555, Kathmandu ', ', Bird of paradise (1) ', 1200, '27-May-2024', 'dispatched');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image`) VALUES
(13, 'Bird of paradise', 'Bird of Paradise plants are stunning tropical specimens that can add a touch of exotic beauty to indoor spaces. With proper care and attention to their light, water, and temperature needs, these plants can thrive and become impressive focal points in any home or garden.', 1200, 'birdofparadise.jpg'),
(23, 'Peace Lily', 'Peace lily is a popular indoor plant cherished for its elegant appearance and air-purifying qualities.', 1100, 'peacelily.jpg'),
(24, 'Snake plant', 'Snake plants are prized for their striking appearance, air-purifying qualities, and ease of care, making them a favorite among indoor plant enthusiasts looking to add greenery to their living or workspaces without a lot of fuss.', 600, 'snakeplant.jpg'),
(25, 'Lady Palm', 'Lady palms are believed to bring positive energy, good luck, and prosperity to the home or workplace. They are thought to promote harmony, balance, and tranquility, making them popular choices for enhancing the ambiance of living and working environments.', 2000, 'ladypalm.jpg'),
(26, 'Crotons', 'Croton plants are renowned for their striking and variegated leaves, which come in a wide range of colors including red, orange, yellow, green, and purple. The foliage may feature various patterns, such as speckles, stripes, or blotches, adding to their visual appeal.', 600, 'Crotons.jpg'),
(27, 'Rubber plant', 'Rubber plants are versatile and resilient houseplants that can thrive indoors with minimal care. With proper attention to light, water, and temperature requirements, rubber plants can add beauty and greenery to any indoor space while purifying the air and promoting a sense of well-being.', 800, 'rubberplant.jpg'),
(28, 'Spider Plant', 'Spider plants are prolific propagators and can be easily propagated from the baby plantlets that form on the ends of long stems. Spider plants are versatile and low-maintenance houseplants that can thrive in a variety of indoor conditions.', 500, 'spiderplant.jpg'),
(29, 'Lucky Bamboo', ' Lucky bamboo is a popular houseplant believed to bring good luck and prosperity according to feng shui principles. Despite its name, lucky bamboo is not actually bamboo but belongs to the Dracaena genus.', 500, 'luckybamboo.jpg'),
(30, 'Jade Plant', 'The Jade Plant, scientifically known as Crassula ovata, is a popular and easy-to-care-for succulent that is native to South Africa.', 400, 'jade.jpg'),
(31, 'Water spray gun', 'Makes watering plants easy. Handy, comfortable to use.', 1100, 'waterspraygun.jpg'),
(32, 'Mini tool set', 'Comes with four mini gardening tool set. Handy and suitable for indoor plantings. ', 1500, 'minitoolset.jpg'),
(33, 'Gardening Apron', 'Gardening apron comes with front pockets to fit your tools or other items while gardening. Also protects your cloths from getting dirt.', 999, 'apron.jpg'),
(34, 'Hanging pots', 'Carefully crafted, these pots are made of ceramic to enhance the look of your garden with the ropes handmade with detail. ', 2000, 'hangingpots.jpg'),
(35, 'Mowing tool', 'Helps in slight digging.', 900, '11 Garden Tools You Should Have.jpg'),
(36, 'indoor decor ', 'Plant for indoor decors.', 1200, 'bg2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `verification_code`, `is_verified`) VALUES
(16, 'shreya359', 'shreyasubedi8014@gmail.com', 'shreyasubedi3121', 'admin', '', 0),
(38, '111shrey', 'shrey@gmail.com', '4545', 'user', '', 0),
(41, 's3s3', 's3s3@gmail.com', 's3s3s3s3s3', 'user', '', 0),
(42, 's3s3', 's3@gmail.com', 's3s3s3s33s3s3', 'user', '', 0),
(47, 'zayn333', 'zayn@gmail.com', 'zayn12345', 'user', '', 0),
(48, 'niks333', 'nikgmail.com', 'niks123456789', 'user', '', 0),
(51, 'shreya333', 'angel@gmail.com', 'shreA3121', 'user', '', 0),
(53, 'shrey11', 'shreyasbd333@gmail.com', 'shreyasubedi3121', 'user', '', 0),
(54, 'angel333', 'angelsubedi@gmail.com ', 'angelsubedi3121', 'user', '', 0),
(55, 'The Gardeners3', 'thegardeners333@gmail.com', '239482934820jhdbsfjhsdbr', 'user', '', 0),
(56, 'shreejana123', 'shreejana123@gmail.com', 'shreejana123', 'user', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(76, 0, 24, 'Snake plant', 600, 'snakeplant.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
