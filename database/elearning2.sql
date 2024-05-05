-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 01:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', '123', '2024-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'web development'),
(2, 'programming'),
(3, 'AI and ML'),
(4, 'data science');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `video_id`, `comment`, `date`) VALUES
(1, 8, 1, 'helo sir i want to know REacr alsndlkadajlbv alj', '2024-03-24'),
(2, 10, 1, 'hello price\r\nme ayush from other user', '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`, `date`) VALUES
(1, 'rishi vaghela', 'primevideono500@gmail.com', 'this is first msg', '2024-03-22'),
(2, 'prince', 'admin@gmail.com', 'this is second msg', '2024-03-22'),
(3, 'sadad', 'kivak76458@mnsaf.com', 'asddddddddd', '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sub-title` varchar(200) NOT NULL,
  `sub-description` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `lessons` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `sub-title`, `sub-description`, `duration`, `category`, `level`, `lessons`, `img`, `description`, `date`, `url`) VALUES
(27, 'Java Fundamentals : A Beginner Guide to Programming ', 'Learn Java From Scratch and build your programming skills', ' Start coding in Java confidently with our beginner-friendly course.', 45, 'Programming and Development', 'Beginner', 27, '1709704321WhatsApp Image 2024-03-06 at 11.14.09_324ebc55.jpg', 'Jumpstart your programming journey with our Java Fundamentals course. Learn essential concepts and gain hands-on experience to write your own Java programs confidently.', '2024-03-06', 'https://youtu.be/yRpLlJmRo2w?si=pCkPyiIfrnm7NrbS'),
(28, 'Python Primer  A Beginners Guide to Programming', 'Building a Solid Foundation in Python Programming from Scratch ', ' Unlock the power of Python with this comprehensive beginner guide.', 50, 'Programming and Development', 'Beginner', 28, '1709706982python.jpg', 'Explore Pythons versatility and simplicity through hands-on examples and clear explanations. With concise lessons and practical exercises this book demystifies programming concepts making Python accessible to beginners', '2024-03-06', 'https://youtu.be/7wnove7K-ZQ?si=28jXzdL_q5aJeWuU'),
(29, 'C Fundamentals: A Beginners Guide to C Programming', 'Building a Strong Foundation in C Programming from Scratch', ' Unravel the intricacies of C programming with clear explanations. ', 40, 'Programming and Development ', 'Beginner ', 0, '1709707650clanguage.jpg', 'Dive into the world of C programming with this comprehensive beginners guide.Unravel the intricacies of C programming with clear explanations and hands-on exercises. This guide simplifies complex concepts, making C accessible to beginners. Whether you\'re aiming to develop software, embedded systems, or games, this book equips you with the foundational knowledge to succeed in your programming endeavors.', '2024-03-06', 'https://youtu.be/irqbmMNs2Bo?si=9I1Er5VMhvxkk03O');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `rating`, `msg`, `date`) VALUES
(1, 0, 5, '', '2024-03-23'),
(2, 0, 5, 'this is good feedback', '2024-03-23'),
(3, 0, 1, 'this is bad feedback', '2024-03-23'),
(4, 0, 4, 'this is feedback 4', '2024-03-24'),
(5, 0, 5, 'asdadsadadasdadasdad', '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `head` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `head`, `description`) VALUES
(29, 27, 'What is Java?', 'Java is a popular programming language, created in 1995.\r\n\r\nIt is owned by Oracle, and more than 3 billion devices run Java.\r\n\r\nIt is used for:\r\n\r\nMobile applications (specially Android apps)\r\nDesktop applications\r\nWeb applications\r\nWeb servers and application servers\r\nGames\r\nDatabase connection\r\nAnd much, much more!'),
(30, 27, 'Java Getting Started', 'C:UsersYour Name>java -version'),
(31, 27, 'Java Syntax', 'public class Main {\r\n  public static void main(String[] args) {\r\n    System.out.println(\"Hello World\");\r\n  }\r\n}'),
(32, 28, 'What is Python?', 'Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.\r\n\r\nIt is used for:\r\n\r\nweb development\r\nsoftware development\r\nmathematics\r\nsystem scripting.'),
(33, 28, 'Python Install', 'Many PCs and Macs will have python already installed.\r\n\r\nTo check if you have python installed on a Windows PC, search in the start bar for Python or run the following on the Command Line (cmd.exe):\r\n\r\nC:UsersYour Name>python --version');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub-title` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `downloads` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `content` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `title`, `category`, `sub-title`, `type`, `downloads`, `description`, `date`, `content`, `price`, `img`) VALUES
(19, 'Java Fundamentals : A Beginner Guide to Programming ', 'data science', 'learn fast', 'zip and pdf', 46, 'Java Fundamentals : A Beginner Guide to Programming ', '2024-03-08', '1709890389.zip', 233, '1709890389Screenshot (324).png'),
(21, 'Python Primer  A Beginners Guide to Programming', 'data science', 'asdsad', 'zip and pdf', 3, 'sdad', '2024-03-11', '1710143437.sql', 500, '1710143437Screenshot (384).png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `material_id`, `date`, `amount`) VALUES
(5, 10, 19, '2024-03-10', 233),
(7, 10, 21, '2024-03-11', 500),
(9, 8, 19, '2024-03-24', 233);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `cource_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `qno`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`, `cource_id`) VALUES
(9, 1, 'What is java ?', 'Click Through Rate', 'CPC', 'Reach & Frequency', 'Clicks', '3', 27),
(8, 2, 'who developed python??', 'Higher CPM bid', 'Fast landing page load time', 'How old is the ad', 'Creativity of the ad', '2', 28),
(15, 5, 'java has which function?', 'Attribution Models', 'Google Ads Linking', 'User ID', 'Audience Definitions', '3', 27),
(22, 1, 'What is c ?', 'majak ', 'majak 2 me sach bol rha hu', 'majak 3', 'majak 4', '2', 29),
(14, 4, 'Ads on YouTube are bought and sold on an auction basis as well as on a reservation basis. What placements on Youtube.lk you can buy ad placements on reservation basis?', 'You can\'t buy reservation based ads on Youtube in Sri Lanka', 'Youtube Masthead Ads', 'Youtube Pre-Roll Ads', 'Youtube Watch Page Ads', '2', 27),
(13, 3, 'If a display ad has been disapproved, how does an advertiser submit a request for another review?', 'Call Google Help', 'Create a new ad group and upload the ad there', 'Save the edited ad or upload a new ad in AdWords', 'Click \"Request a Review Again\" button', '3', 27),
(16, 6, 'what is python??', 'Sales Performance report', 'Frequency & Recency report', 'Referrals report', 'New vs Returning report', '4', 28),
(17, 7, 'When will Google Analytics be unable to identify sessions from the same user by default?', 'When the sessions happen in the same browser on the same device', 'When the sessions happen in the same browser on the same day', 'When the sessions share the same browser cookie', 'When the sessions happen in different browsers on the same device', '4', 28),
(18, 8, 'When does the tracking code send an event hit to Google Analytics?', 'Every time a user adds an event to their calendar', 'Every time a user makes a reservation', 'Every time a user performs an action with event tracking implemented', 'Every time a user performs an action with pageview tracking implemented', '3', 28),
(19, 9, 'Which of these is not a Programmatic Media Buying Method?', 'Adobe Marketing Cloud', 'Rubicon Project', 'SimillarWeb', 'DoubleClick', '3', 28),
(20, 10, 'Which of these is a Social Media Analytics tool?', 'Google Analytics', 'Eskimi', 'SocialBakers', 'Social Media Examiner', '3', 28),
(23, 2, 'What is blue wala software ?', 'ankh dard ka shamn', 'ankh dard ka shamn 2', 'ankh dard ka shamn 3', 'ankh dard ka shamn 4', '1', 29);

-- --------------------------------------------------------

--
-- Table structure for table `quizz_results`
--

CREATE TABLE `quizz_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizz_results`
--

INSERT INTO `quizz_results` (`id`, `user_id`, `course_id`, `score`, `total_score`, `date`) VALUES
(1, 10, 27, 4, 4, '2024-03-11'),
(2, 10, 29, 1, 0, '2024-03-11'),
(3, 10, 29, 1, 2, '2024-03-11'),
(4, 12, 28, 0, 6, '2024-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data1` varchar(200) NOT NULL,
  `data2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `data1`, `data2`) VALUES
(1, 'views', '9', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `profile` varchar(200) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `profile`) VALUES
(8, 'prince', 'admin@gmail.com', '$2y$10$gDVktOzCy7lqC2Q/zJO1hOU6tn8PB7cpyYjijPrgTMu9462Ar.tYS', '2024-02-29', 'default.jpg'),
(9, 'ayush', 'anmol@gmail.com', '$2y$10$JZnnXDIg7IAcEtetuGOY8e483dMkKuPD2YPCpvuENWxbX.BAf0bWy', '2024-03-05', 'default.jpg'),
(10, 'ayush', 'cejaviw263@comsb.com', '$2y$10$Kj7rlxSjKNk75JrZn99IXu9J8IeJJE0uxs06RTxQ8B3WxinN5ly8K', '2024-03-10', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video_course`
--

CREATE TABLE `video_course` (
  `id` int(11) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `thub` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_course`
--

INSERT INTO `video_course` (`id`, `video_title`, `thub`, `course_id`) VALUES
(1, 'c videos', 'html.png', 29),
(2, 'Python Videos ', 'html.png', 28),
(5, 'Learn Java as Beginners For Android dev', '1711280752images.png', 27),
(6, 'sadad', '1711280677images.png', 29),
(7, 'sadad', '1711280752images.png', 29);

-- --------------------------------------------------------

--
-- Table structure for table `video_lessons`
--

CREATE TABLE `video_lessons` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `video_c_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_lessons`
--

INSERT INTO `video_lessons` (`id`, `title`, `video_link`, `video_c_id`, `date`) VALUES
(1, 'sdfsfsdf', '1711276129localhost _ 127.0.0.1 _ elearning2 _ video_lessons _ phpMyAdmin 5.2.1 - Google Chrome 2024-03-24 15-57-47.mp4', 1, '2024-03-24'),
(2, 'sadadasd', '1711277815localhost _ 127.0.0.1 _ elearning2 _ video_lessons _ phpMyAdmin 5.2.1 - Google Chrome 2024-03-24 15-57-47.mp4', 1, '2024-03-24'),
(3, 'asdada', '1711277822localhost _ 127.0.0.1 _ elearning2 _ video_lessons _ phpMyAdmin 5.2.1 - Google Chrome 2024-03-24 15-57-47.mp4', 1, '2024-03-24'),
(4, 'me as python', '1711279905localhost _ 127.0.0.1 _ elearning2 _ video_lessons _ phpMyAdmin 5.2.1 - Google Chrome 2024-03-24 15-57-47.mp4', 2, '2024-03-24'),
(5, 'Me another Pythagoras', '1711279948E Learning - The Best Program to Enroll for Exchange - Google Chrome 2024-03-24 17-02-01.mp4', 2, '2024-03-24'),
(7, 'Learn Java as Beginners For Android dev', '1711280392E Learning - The Best Program to Enroll for Exchange - Google Chrome 2024-03-24 17-02-01.mp4', 4, '2024-03-24'),
(8, '1711280752images.png', '1711280800images.png', 5, '2024-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quizz_results`
--
ALTER TABLE `quizz_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_course`
--
ALTER TABLE `video_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_lessons`
--
ALTER TABLE `video_lessons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quizz_results`
--
ALTER TABLE `quizz_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video_course`
--
ALTER TABLE `video_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video_lessons`
--
ALTER TABLE `video_lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
