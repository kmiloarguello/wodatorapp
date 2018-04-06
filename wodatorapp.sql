-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-04-2018 a las 19:14:04
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daniihqw_wodatorapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'The Girls', '2018-01-30 22:35:35', '2018-01-30 22:35:35'),
(2, 'The Heroes', '2018-01-27 15:20:13', '2018-01-27 15:20:13'),
(3, 'Partner Wods', '2018-01-27 15:10:12', '2018-01-27 15:11:11'),
(4, 'Travel Wods', '2018-01-27 14:54:52', '2018-01-27 14:54:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exercises`
--

DROP TABLE IF EXISTS `exercises`;
CREATE TABLE IF NOT EXISTS `exercises` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_company_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `time`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'Karen', 'For Time', '150 Wall Ball Shots (20/14 lb)', 1, NULL, NULL),
(3, 'Nicole', 'AMRAP in 20 minutes', '400 Meter Run\r\nMax Pull-Ups', 1, NULL, NULL),
(2, 'Chelsea', 'EMOM in 30 minutes', '5 Pull-Ups\r\n10 Push-Ups\r\n15 Air Squats', 1, NULL, NULL),
(5, 'Amanda', '9-7-5 Reps For Time', 'Muscle-Ups\r\nSnatches (135/95 lbs)', 1, NULL, NULL),
(1, 'Barbara', '5 Rounds For Time', '20 pull ups\r\n30 push-ups\r\n40  SIt-ups\r\n50  Squads', 1, NULL, NULL),
(6, 'Grace', 'For Time', 'Clean-and-Jerks (135/95 lb)', 1, NULL, NULL),
(7, 'Murph', 'For Time', '1 mile Run\r\n100 Pull-Ups\r\n200 Push-Ups\r\n300 Air Squats\r\n1 mile Run\r\nAll with a Weight Vest (20/14 lb)', 2, NULL, NULL),
(8, 'Daniel', 'For Time', '50 Pull-Ups\r\n400 meter Run\r\n21 Thrusters (95/65 lb)\r\n800 meter Run\r\n21 Thrusters (95/65 lb)\r\n400 meter Run\r\n50 Pull-Ups', 2, NULL, NULL),
(9, 'Michael', '3 Rounds For Time', '800 meter Run\r\n50 Back Extensions\r\n50 Sit-Ups', 2, NULL, NULL),
(10, 'J.T', '21-15-9 Reps For Time', 'Handstand Push-Ups\r\nRing Dips\r\nPush-Ups', 2, NULL, NULL),
(11, 'Hall', '5 Rounds for Time', '3 Cleans (225/155 lb)\r\n200 meter Sprint\r\n20 Kettlebell Snatches (1.5/1 pood) (10 each arm)\r\n2 minutes Rest', 2, NULL, NULL),
(12, 'The Seven', '7 Rounds For Time', '7 Handstand Push-Ups\r\n7 Thrusters (135/95 lb)\r\n7 Knees-to-Elbows\r\n7 Deadlifts (245/165 lb)\r\n7 Burpees\r\n7 Kettlebell Swings (2/1.5 pood)\r\n7 Pull-Ups', 3, NULL, NULL),
(13, 'PARTNER WODS – AMRAP TIME!', '20 Min AMRAP', '20 Thrusters (115/75) 20 Box Jumps (24/20) 20 Burpees\r\n30 Thrusters (95/65) 30 Box Jumps 30 Burpees\r\n40 Thrusters (75/45) 40 Box Jumps 40 Burpees\r\n50 Thrusters (45/35)\r\nMax Calorie Row in Remaining Time', 3, NULL, NULL),
(15, 'PARTNER WODS ', 'AMRAP in 20 minutes', '17 Thrusters (95/65)\r\n17 KB Swings (70/53)\r\n17 C2B pull ups', 3, NULL, NULL),
(16, 'Running and squats', '3 Rounds for time', 'Run 1/2 mile\r\n50 air squats', 4, NULL, NULL),
(14, 'Two Wod', 'For TIme', '20 Russian KB Swings 70M/53W\r\n15 Burpees\r\n10 Pull Ups\r\n15 Lunge Steps\r\n20 Sit Ups\r\n400 Meter Run togethe', 3, NULL, NULL),
(17, 'Push-ups, squats and sit-ups', '10 rounds for time', '10 push-ups\r\n10 sit ups\r\n10 squats', 4, NULL, NULL),
(18, '200 squats for time', 'For Time', '200 squats', 4, NULL, NULL),
(19, 'Susan', '8 rounds', '200 mt sprint\r\n10 squats\r\n10 push ups\r\n1\' rest\r\n4 km run', 4, NULL, NULL),
(20, 'Sprints and push-ups', '3 rounds for time', 'Sprint 200 m\r\n25 push ups', 4, NULL, NULL),
(21, 'HSPUs and run', '3 rounds for time', '10 Handstand push ups\r\n200 m run', 4, NULL, NULL),
(22, 'Tabata squats and tabata push-ups', '8 rounds', '8 rounds:\r\n20 seconds of squats\r\n10 seconds of rest\r\n\r\nThen 8 rounds\r\n\r\n20 seconds of push-ups\r\n10 seconds of rest', 4, NULL, NULL),
(23, 'Push-ups, squats and sit-ups', '20 rounds for time:', '5 push-ups\r\n5 squats\r\n5 sit-ups', 4, NULL, NULL),
(24, 'Handstand walk', '10-9-8-7-6-5-4-3-2-1 Rounds', '10-9-8-7-6-5-4-3-2-1 of sit-ups and a 100 meter sprint between each set', 4, NULL, NULL),
(25, 'Squats and push-ups', '21-15-9 Rounds For Time', 'air squats\r\npush-ups', 4, NULL, NULL),
(27, 'Jumps and squats', '5 rounds for time', '3 vertical jumps\r\n3 squats\r\n3 long jumps', 4, NULL, NULL),
(26, 'Gymnastics', '8 Rounds for time', 'Handstand 30 seconds\r\n10 squats', 4, NULL, NULL),
(28, '100 burpees', 'For Time', '100 burpees for time', 4, NULL, NULL),
(29, 'Jumping jacks, squats, push-ups and burpees', 'For time', '100 jumping jacks\r\n75 air squats\r\n50 push ups\r\n25 burpees', 4, NULL, NULL),
(30, 'Push-ups, hollow rocks and running', '5 rounds for time', '10 push-ups\r\n10 hollow rocks\r\n200 m run', 4, NULL, NULL),
(31, 'Run and squat!', '4 rounds for time', '400m run\r\n50 air squats', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `exercise_id` int(200) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `exercises_id` (`exercise_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `exercise_id`) VALUES
(29, 5, 4),
(26, 5, 7),
(25, 5, 2),
(28, 5, 8),
(27, 5, 19),
(30, 5, 31),
(34, 6, 18),
(33, 6, 3),
(35, 6, 19),
(36, 6, 6),
(37, 6, 6),
(38, 6, 9),
(39, 1, 14),
(40, 1, 3),
(42, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marks`
--

INSERT INTO `marks` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'Hall', 'GOod', 5, '2018-03-30 23:17:09', '2018-03-30 23:17:09'),
(22, 'jj', 'hbhbhb', 5, '2018-03-30 23:28:59', '2018-03-30 23:28:59'),
(23, 'M1', 'asd', 7, '2018-04-06 22:54:02', '2018-04-06 22:54:02'),
(19, 'xcvbn', 'sedrftgyhuj', 1, '2018-03-23 06:43:07', '2018-03-23 06:43:07'),
(20, 'proff', 'ngf', 1, '2018-03-23 09:22:50', '2018-03-23 09:22:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_16_221512_create_families_table', 2),
(4, '2018_01_16_223737_create_pets_table', 2),
(6, '2018_01_17_001331_create_comments_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dan.elasam@gmail.com', '$2y$10$S69SZPYeEs1vMY34spdEtugYOxjKZ0mPYsIA1/a9PLR6y2M4cLpb2', '2018-01-31 00:40:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `searches`
--

DROP TABLE IF EXISTS `searches`;
CREATE TABLE IF NOT EXISTS `searches` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `searches`
--

INSERT INTO `searches` (`id`, `name`, `description`, `image`) VALUES
(1, 'One', '', ''),
(2, 'Two', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

DROP TABLE IF EXISTS `tips`;
CREATE TABLE IF NOT EXISTS `tips` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Air Squat ', 'Squat without weights', NULL, NULL),
(2, 'AMRAP', 'As Many Repetitions/Rounds As Possible. Typically in a specified timeframe.', NULL, NULL),
(3, 'As Rx’d', 'As Prescribed. The suggested parameters for a given exercise.', NULL, NULL),
(4, 'Back Squat ', 'Squat with barbell on you back. See definition of squat.', NULL, NULL),
(5, 'Box Jump', 'An exercise where you jump onto and down from an elevated platform', NULL, NULL),
(6, 'Burpee', 'Gymnastic move that you drop to the ground, do a push-up, jump into a squat and then jump.', NULL, NULL),
(7, 'BW', 'body weight', NULL, NULL),
(8, ' Clean and jerk', 'Lifting movement of moving weight to rack position (clean) and then moving weight above head (jerk).', NULL, NULL),
(9, 'Clean', 'Motion of moving weight from ground to rack position.', NULL, NULL),
(10, 'EMOTM', 'Every Minute on the Minute', NULL, NULL),
(11, 'Hang Clean', 'Olympic Lift. Barbell starts by hanging from your hips and end in the front squat position. See definition of clean', NULL, NULL),
(12, 'HSPU', 'Handstand Push Up', NULL, NULL),
(13, 'K2E', 'Knees to Elbows. While hanging from pull up bar, raise knees up to touch your elbows.', NULL, NULL),
(14, 'MetCon', 'Metabolic Conditioning', NULL, NULL),
(15, 'Power Clean', 'Olympic lift. Barbell starts on the ground and end in the rack position. See definition of clean.', NULL, NULL),
(16, 'Power Snatch', 'Olympic Lift. Barbell starts on the ground and ends up overhead. See definition of squat.', NULL, NULL),
(17, 'PR', 'Personal Record. Highest number of reps or fastest time attained at completing a specific WOD.', NULL, NULL),
(19, 'Push Jerk', 'while holding barbell in rack position, slightly squat down and lift weight above head.', NULL, NULL),
(18, 'Push Press', 'while holding barbell in rack position, lift weight above head.\r\n\r\n ', NULL, NULL),
(20, 'Rep', 'A repetition or instance of a given exercise.', NULL, NULL),
(21, 'RM', 'Repetition maximum. The most you can lift for a given number of repetitions.', NULL, NULL),
(22, 'Snatch (SN)', 'Olympic lift. Hang Snatch, Power Snatch, Squat Snatch', NULL, NULL),
(23, 'Squat', 'feet shoulder width apart with feet angled slightly outward. Keeping upper body rigid, bend at the knees lowering upper body in straight line', NULL, NULL),
(24, 'Squat Snatch', 'Olympic lift. Barbell starts on the ground and ends up in the overhead squat position.  See definition of squat.', NULL, NULL),
(25, 'Sumo Deadlift High Pull', 'In a wide stance over a barbell, explosively pull the barbell up from the ground to shoulder height.', NULL, NULL),
(26, 'Tabata', 'A protocol of 20 seconds of exercise followed by 10 seconds of rest. Named after Dr. Tabata.', NULL, NULL),
(27, 'Thrusters', 'Hold barbell in rack position, drop down in squat position with barbell in rack position, return to standing position in exploding motion, pushing the barbell over you head.', NULL, NULL),
(28, 'Toes to Bar (TtB) ', 'while hanging from a pull up bar, bring toes up to bar.\r\n\r\n ', NULL, NULL),
(29, 'Unbroken', 'UB. Perform all workouts in a row or start over at the beginning.', NULL, NULL),
(30, 'Wall Balls', 'Using a medicine ball, drop into a front squat position and stand up using the momentum to push the ball to hit a target on the wall.', NULL, NULL),
(31, 'WOD', '“Workout of the Day.” Series of exercises or number of reps for a timed workout', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `first_name`, `middle_name`, `last_name`, `city`, `role_id`) VALUES
(4, 'Ela', 'dan.elasam@gmail.com', '$2y$10$74BAnN3sHkqCOuB.qB69qOAFyjadYAle3eNI7jxW8VfHsbXoMcR5m', '9frveZxy3VvWxktvjrkgob0pKas5jCr2OtkgnXFIypuNTbMajAyaAdApeLGB', '2018-03-28 00:43:00', '2018-03-28 00:43:00', NULL, NULL, NULL, NULL, 3),
(1, 'Ela', 'beibdan@hotmail.com', '$2y$10$DeGk7y6/egH7seRx1bAaweE4toPF960DkyutloDeM5miLfTtWYHV.', 'UQWdIVUo0zVhqqaXSbBXVXTWB0HSZj3B6he3ywmkDfUV78yWZMOdezKzAaV0', '2018-01-19 13:45:38', '2018-01-19 13:45:38', NULL, NULL, NULL, NULL, 3),
(5, 'Simone', 'abc@gmail.com', '$2y$10$ey5T0W4MlqRxHQQ0Pg.wteZxhKoAtbozynGLLPBhu0Q0uX2FdtSEO', 'k3D8V9zX333xAzsGmA6hCGMYlvIsNi7J0dLKwW9sjoHR42AibUPnZteW3XNq', '2018-03-28 00:43:58', '2018-03-28 00:43:58', NULL, NULL, NULL, NULL, 3),
(6, 'Wodator', 'abc123@gmail.com', '$2y$10$4rq8SQT5tm32apicoDsN0eavn5zWt8tTqTRxbBqR2zi.F9O6MUWzO', NULL, '2018-04-06 20:46:59', '2018-04-06 20:46:59', NULL, NULL, NULL, NULL, 3),
(7, 'Camilo Arguello', 'camilo@mostromedia.com', '$2y$10$jvjaTOmE6J1lKim2R701Ku5bZMgSJajJlCgrPkgfk.azX1DC5gpiu', NULL, '2018-04-06 22:53:02', '2018-04-06 22:53:02', NULL, NULL, NULL, NULL, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
