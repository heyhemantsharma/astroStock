-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `predictions`
--

CREATE TABLE `predictions` (
  `id` int(11) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `prediction` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predictions`
--

INSERT INTO `predictions` (`id`, `sign`, `prediction`, `date`) VALUES
(3, 'Pisces', 'The color purple and the number 7 are going to bring you lots of luck. Wear something purple today.', '2024-11-05 18:30:00'),
(4, 'Aquarius', 'The numbers 67, 93, and 14 will bring you great amounts of good luck. However, investing in real estate is not recommended.', '2024-11-05 18:30:00'),
(5, 'Capricorn', 'You are lucky in matters connected to construction.', '2024-11-05 18:30:00'),
(6, 'Sagittarius', 'This is a lucky time to have negotiations about your future or communication with your HR department.', '2024-11-05 18:30:00'),
(7, 'Scorpio', 'Unfortunately your stars are not favorable today and you might not receive the assistance you require.', '2024-11-05 18:30:00'),
(8, 'Libra', 'Hang in there if all seems lost, it never is.', '2024-11-05 18:30:00'),
(9, 'Virgo', 'Luck arrives unexpectedly bringing with it positive energy and everything seems to get better. You may get your financial problems solved today.', '2024-11-05 18:30:00'),
(10, 'Leo', 'The numbers 46 and 12 are going to bring you good luck today. You will receive some unexpected income.', '2024-11-05 18:30:00'),
(11, 'Cancer', 'Some days are there to test us and some to reward us.', '2024-11-05 18:30:00'),
(12, 'Gemini', 'The colors blue and purple are going to bring you luck today. Some financial luck will come your way today.', '2024-11-05 18:30:00'),
(13, 'Taurus', 'The numbers 4, 88, 98, 28, 75, and 1 will be your lucky numbers today. If you can, invest in the stock market.', '2024-11-05 18:30:00'),
(14, 'Aries', 'Never trust fool\'s gold. It might seem like a good deal, but it rarely is. ', '2024-11-05 18:30:00'),
(39, 'Pisces', 'Mars on your IC brings luck when you are decisive about a family matter.', '2024-11-06 18:30:00'),
(40, 'Aquarius', 'The area of creative visualization makes your day lucky one.', '2024-11-06 18:30:00'),
(41, 'Capricorn', 'Jupiter is not currently sending out energy that will be favorable for gambling and betting.', '2024-11-06 18:30:00'),
(42, 'Sagittarius', 'The numbers 3, 1, 8, 61, and 38 are going to be your lucky numbers today. Wear something golden for extra luck.', '2024-11-06 18:30:00'),
(43, 'Scorpio', 'Things are not working in your favor. You need to let go of situations that are beyond your control.', '2024-11-06 18:30:00'),
(44, 'Libra', 'The number 12 will appear everywhere around you. Pay close attention because the universe is giving you a sign.', '2024-11-06 18:30:00'),
(45, 'Virgo', 'Today is one of the good luck day when with little efforts you shall achieve many things.', '2024-11-06 18:30:00'),
(46, 'Leo', 'The color pink is going to bring you lots of good luck. If you want to invest in some real estate, today is the perfect day to do so. Just don’t gamble today.', '2024-11-06 18:30:00'),
(47, 'Cancer', 'You will have some minor luck when it comes to your financial situation today. Jupiter has your back.', '2024-11-06 18:30:00'),
(48, 'Gemini', 'Today is one of your terrible days; nothing will seem to work right. Luck is not in your favor.', '2024-11-06 18:30:00'),
(49, 'Taurus', 'You are already where you need to be in life.', '2024-11-06 18:30:00'),
(50, 'Aries', 'The number 50 is your lucky number today. You feel the influence of Jupiter heavily at the end of the day.', '2024-11-06 18:30:00'),
(51, 'Pisces', 'Some days you have it all and some days it can feel impossible. Take the good with the bad.', '2024-11-07 18:30:00'),
(52, 'Aquarius', 'Events which you never expected have a high chance of happening today. You shall venture into different things and succeed at them.', '2024-11-07 18:30:00'),
(53, 'Capricorn', 'Identify your emotions and relate with them. Do not alienate yourself from them as this may in reciprocation lead to suppression. Identify your restless inner being and project it correctly to get the message through.', '2024-11-07 18:30:00'),
(54, 'Sagittarius', 'The color blue and mustard yellow are going to bring you luck. Perhaps try wearing those colors to attract more luck.', '2024-11-07 18:30:00'),
(55, 'Scorpio', 'Good energy and great opportunities are coming your way, even when you think that all hope is lost. Stay focused and strong today.', '2024-11-07 18:30:00'),
(56, 'Libra', 'You will have lots of good luck when it comes to social and personal relationships. Communication will be easy for you today.', '2024-11-07 18:30:00'),
(57, 'Virgo', 'Your ex flame will bring in the subtle glow of good luck.', '2024-11-07 18:30:00'),
(58, 'Leo', 'The number 7 is going to bring you good things today. Keep your eye out for that number.', '2024-11-07 18:30:00'),
(59, 'Cancer', 'Your lucky numbers are going to be 78, 3, 49 and 20. Tomorrow will be a better day when it comes to your luck.', '2024-11-07 18:30:00'),
(60, 'Gemini', 'Your lucky numbers are going to be 75, 2, 42, 11, and 57 today. Investing might be a good idea.', '2024-11-07 18:30:00'),
(61, 'Taurus', 'The numbers that are going to bring you luck are going to be 90, 2, 41, 64 and 74.', '2024-11-07 18:30:00'),
(62, 'Aries', 'The numbers 42 and 13 are going to be your lucky numbers today.', '2024-11-07 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predictions`
--
ALTER TABLE `predictions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predictions`
--
ALTER TABLE `predictions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
