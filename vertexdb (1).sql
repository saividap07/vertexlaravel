-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 10:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vertexdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_11_085953_create_testimonials_table', 1),
(6, '2023_04_13_063221_create_teams_table', 2),
(7, '2023_04_13_071004_create_portfolios_table', 3),
(8, '2023_04_13_100946_create_services_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `type`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, 'International Research Journal Of India', 'IRJI is a leading Research Journal Publication catering to national and international experts for submitting well researched and innovative articles/papers. We have experts from all domains specifically science, commerce, arts and technology. We are also promoting social welfare articles/papers. The editorial board of IRJI helps the authors to maintain various norms of article publishing.', 'Web Application', 'irji_img.png', 'https://irji.in/', '2023-04-13 02:39:38', '2023-04-13 04:35:28'),
(3, 'KVK Solapur', 'The Shabari Krishi Pratishthan, Solapur has been established as a panacea of the ills and suffering from which agriculture as well as agricultural science is distributed or provoked. The main objective of its establishment is over all development of farming community scattered in different villages of the district.', 'Mobile Application', 'KVK_Solapur.png', 'https://play.google.com/store/apps/details?id=com.krishivigyankendra.kvk', '2023-04-13 02:52:15', '2023-04-13 02:52:15'),
(4, 'KVK Solapur', 'The Shabari Krishi Pratishthan, Solapur has been established as a panacea of the ills and suffering from which agriculture as well as agricultural science is distributed or provoked. The main objective of its establishment is over all development of farming community scattered in different villages of the district.', 'Mobile Application', 'KVK_Solapur.png', 'https://play.google.com/store/apps/details?id=com.krishivigyankendra.kvk', '2023-04-13 02:53:13', '2023-04-13 02:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `shortdesc`, `description`, `created_at`, `updated_at`) VALUES
(1, '118-1181927_web-development-services-web-development-services-png-transparent.png', 'Web Development', 'A professional and clean website is a necessity for any business to succeed in the online realm. Website is the face of your business and the services you provide We create a variety of custom websites', '<h1><b style=\"background-color: rgb(255, 255, 255);\">Web Development</b></h1><h1><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">A professional and clean website is a necessity for any business to succeed in the online realm. Website is the face of your business and the services you provide We create a variety of custom websites and templates from responsive websites to internal applications that are hosted locally, cloud-based, or a hybrid of both. These websites reflect the business/service component by unleashing creativity to open up new possibilities in a way apprehend and appreciated by the clients.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\"></p></h1><h5 style=\"font-family: Nunito, sans-serif; font-weight: 600; line-height: 22px; color: rgb(102, 102, 102); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 20px;\">How Vertex Technosys Work?</h5><h1><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">We are a group of creative web developers who are versatile to develop a variety of web applications and web design services to our clients. Our experts develop high-performing and user- friendly websites,with the support of AI which help to improve your website performance..</p></h1><h5 style=\"font-family: Nunito, sans-serif; font-weight: 600; line-height: 22px; color: rgb(102, 102, 102); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 20px;\">Our Web Development Services Include</h5><h1><ul><li style=\"overflow: hidden; padding-top: 10px; color: rgb(119, 119, 119); font-family: Nunito, sans-serif; font-size: 15px;\"><ul class=\"marker-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: outside none none; padding: 0px;\"><ul><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Responsive Website Design</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">SEO Integrated</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Boost Brand Recognition</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Flexible Design</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">AI Support</li></ul></ul></li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">Our web development teams can combine their expertise with latest trends and technologies to resolve your business challenges and needs, at affordable pricing with the latest website development technology.</p><center style=\"color: rgb(119, 119, 119); font-family: Nunito, sans-serif; font-size: 15px;\"></center></h1><h5 style=\"box-sizing: border-box; font-family: Nunito, sans-serif; font-weight: 600; line-height: 22px; color: rgb(102, 102, 102); margin: 0px 0px 15px; font-size: 20px;\">Hire Us for the Best Web Developers in the Town</h5>', '2023-04-13 05:05:58', '2023-04-13 05:40:03'),
(2, '66-660082_seo-png-pic-search-engine-optimization-icon.png', 'SEO', 'The competition among the same business owners is rising day by day.And every business wants to rank #1.It is only attainable if you get the support of experienced and highly qualified SEO consultants', '<h1><b>SEO</b></h1><h1><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">Our SEO experts help you gain visibility on the search engine, building brand authority, to generate qualified leads. It is the appropriate time to take your website one level up and make a position on Google Search Results, with our best result oriented and cost efficient SEO services.</p><div class=\"about-details\" style=\"overflow: hidden; padding-top: 10px; color: rgb(119, 119, 119); font-family: Nunito, sans-serif; font-size: 15px;\"><ul class=\"marker-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: outside none none; padding: 0px;\"><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Best SEO Company in Solapur with the highest client retention rate</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Consistently successful in reducing the cost per lead across different industries</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Team of finest marketing strategists</li></ul></div><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\"></p></h1><h5 style=\"font-family: Nunito, sans-serif; font-weight: 600; line-height: 22px; color: rgb(102, 102, 102); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 20px;\">How Vertex Technosys Work?</h5><h1><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">Our SEO Experts aim at boosting your online visibility, growing traffic and increasing your conversion. We work toward enhancing your website ranking on Google and other major search engines by using digital marketing tactics and approaches.To grow any Business researching about competitors is a vital part whether online or not. Our team works on Researching your competitors, it will help a business to grow by providing better products or services than other companies.</p><ul><li style=\"overflow: hidden; padding-top: 10px; color: rgb(119, 119, 119); font-family: Nunito, sans-serif; font-size: 15px;\"><ul class=\"marker-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: outside none none; padding: 0px;\"><ul><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Analysing your competitors</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Competitor performance comparison</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Swot analysis</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Identify the content relevance</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Unique Content</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Evaluating the backlinks</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">Keyword Positioning</li><li style=\"padding-left: 30px; margin: 10px 0px; position: relative; font-weight: 600;\">More Traffic</li></ul></ul></li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">Our goal is to match the needs of our customers with our capabilities to deliver great work. Our expertise in SEO service give you assured result of high-quality, target traffic and other related services</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); text-align: justify; font-size: 16px; font-family: Nunito, sans-serif;\">We are eager to help you to rank your website on Google with Seo. With the support of&nbsp;<b style=\"font-weight: bold;\">Vertex Technosys</b>&nbsp;team you will get assured results with maximum gains, and at affordable prices.</p><center style=\"color: rgb(119, 119, 119); font-family: Nunito, sans-serif; font-size: 15px;\"></center></h1><h5 style=\"box-sizing: border-box; font-family: Nunito, sans-serif; font-weight: 600; line-height: 22px; color: rgb(102, 102, 102); margin: 0px 0px 15px; font-size: 20px;\">Contact us for Seo Services Today!</h5>', '2023-04-13 05:07:55', '2023-04-13 05:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Narendra Mergu', 'CEO', 'download.jpg', '2023-04-13 01:16:25', '2023-04-13 01:16:25'),
(3, 'Sai', 'Developer', 'download.jpg', '2023-04-13 01:20:01', '2023-04-13 01:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `role`, `review`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Avinash Adam', 'CEO, Pro-Market Solutions', 'As a research team our members decided to start an online publishing platform for creative budding researchers who put their efforts in writing authentic market reports & as a Research journal team we want to help them get their recognition in the Global market.', 'download.jpg', '2023-04-13 00:19:29', '2023-04-13 00:19:29'),
(2, 'M. Kodam', 'Director, Vishaka Industries', 'My business was trying hands at the local & retail market. After a few years I was expanding my business and started exporting and came to know that my Textile firm needs internet presence and came to know about Vertex.', 'download.jpg', '2023-04-13 00:20:52', '2023-04-13 00:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
