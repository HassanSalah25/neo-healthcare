-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2023 at 08:48 AM
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
-- Database: `neo1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appinfos`
--

CREATE TABLE `appinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `scheduled_at` datetime NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `time` enum('morning','night') NOT NULL DEFAULT 'morning',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `content_ar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`, `title_ar`, `content_ar`) VALUES
(1, 'Paki Wooten', 'Quia quos facilis do', 1, '2023-05-30 02:48:55', '2023-05-30 02:51:56', 'Jessamine Rivera', 'vEnim irure qui aut o'),
(2, 'Paki Wooten', 'Quia quos facilis do', 1, '2023-05-30 02:50:16', '2023-05-30 02:50:16', 'Jessamine Rivera', 'vEnim irure qui aut o'),
(3, 'Paki Wooten', 'حرص الأطباء في عيادات رام على علاج كل المشاكل وتقديم كل الوسائل والتقنيات الحديثة والآمنة في تركيب الأسنان وتجميل الأسنان والقضاء على عيوبها بلا رجعة ومن ضمنها كان التغلب على مشكلة انكسار الأسنان أو خلعها، حيث أن الأسنان الدائمة تظهر في حياة الإنسان مرة واحدة فإذا أصابها شيء كان الحل الوحيد المتاح هو تعويضها من الخارج عن طريق تركيب الأسنان لجعل ابتسامتك كاملة مرة أخرى.\r\n\r\nيمكن أن يقترح عليك طبيب الأسنان عند زيارة عيادات رام تركيب سن واحد من البورسلين، لتعويض الفقد.\r\n\r\n \r\nما هي تركيبات الأسنان المتحركة؟\r\n\r\n \r\n\r\nهي تلك التركيبات التي يستطيع المريض إزالتها من فمه وتحريكها.\r\n\r\nيتكون تركيب السن من قاعدة معدنية، توضع فوقها لثة صناعية تستخدم لتعويض النقص في جميع الأسنان أو جزءًا منها.\r\n\r\n تعتمد في ثباتها على إلتصاقها مع اللثة وتحتاج إلى إهتمام خاص.\r\n\r\nفي بداية الاستخدام قد تشعر أنها غريبة مما يؤدي إلى عدم الراحة وخاصة عند الكلام أو الضحك.\r\n\r\nلكن ستخف هذه الأعراض عندما تعتاد على استخدام تركيبات الأسنان.\r\n\r\n \r\nما هي الحالات التي تستدعي إلى تركيب سن واحد؟\r\n\r\n \r\n\r\n إذا كان لديك، كسر أو شرخ في السن. فأنت بحاجة إلى تركيب سن واحد.\r\n\r\nتركيبات الأسنان تبدو طبيعية الشكل واللون والعضة. لكن يفضل إختيار طبيب أسنان مختص، رغم أن تركيب سن واحد من النوع الثابت له العديد من الفوائد التي تنعكس إيجابيًا على صحة الفرد وراحته النفسية للظهور بالمظهر الجميل والمطلوب، إلا أن هناك بعض الأضرار.\r\n\r\nما هي أضرار تركيب تركيب سن واحد بورسلين؟\r\n\r\nهناك بعض الأضرار الطفيفة التي يمكن التعامل معها:\r\n\r\nصعوبة في التحدث وبلع الطعام بعد تركيب سن واحد بورسلين.\r\n\r\nزيادة في إفراز اللعاب في الفترة التالية لـ تركيب سن واحد.\r\n\r\nزيادة الحساسية في تركيب سن أمامي خاصًة عند تناول المشروبات الساخنة أو الباردة.\r\n\r\nألم في الفك في حال تعرض السن الثابت لأي مشاكل أو كسر أو تزحزح عن موضعه عند تركيب سن واحد بورسلين.\r\n\r\nتسبق عملية التركيب نزع عصب الأسنان المفقودة تمامًا.\r\n\r\nحاجتها الكبيرة إلى العناية والإهتمام من خلال تنظيف الأسنان بعد كل وجبةٍ على الأقل، وقبل النوم، والتخفيف من استخدام الأطعمة الملونة، والشاي والقهوة.\r\n\r\n \r\nما هي نصائح العناية بتركيبات الأسنان؟\r\n\r\n \r\n\r\nإليك أهم النصائح للعناية بـ تركيبات الأسنان:\r\n\r\nاستخدام فرشاة ومعجون خاصين بتنظيف التركيبات وكل أسبوع يجب أن تنقع التركيبة سبعة أو ثمانية ساعات في محلول طبي.\r\n\r\nعند تنظيفها احرص على أن يكون ذلك فوق مغسلة مملوءة بالماء فإذا ما وقعت من يدك سقطت في الماء فلا تنكسر.\r\n\r\nقبل النوم ضع تركيبة الأسنان في كوب به ماء كي يحميها من الجفاف الذي يمكن أن يؤدي إلى حدوث إلتهابات.\r\n\r\n\r\nيتطلب تركيب سن واحد زيارة الطبيب بشكل دوري للكشف على متانتها وأداء عملها بالشكل المطلوب، للحصول على النتائج المرغوب بها يجب إختيار طبيب موثوق به، عيادات رام لديها أفضل الأطباء المختصين والمدربين.', 1, '2023-05-30 02:50:37', '2023-05-30 03:34:27', 'Jessamine Rivera', 'حرص الأطباء في عيادات رام على علاج كل المشاكل وتقديم كل الوسائل والتقنيات الحديثة والآمنة في تركيب الأسنان وتجميل الأسنان والقضاء على عيوبها بلا رجعة ومن ضمنها كان التغلب على مشكلة انكسار الأسنان أو خلعها، حيث أن الأسنان الدائمة تظهر في حياة الإنسان مرة واحدة فإذا أصابها شيء كان الحل الوحيد المتاح هو تعويضها من الخارج عن طريق تركيب الأسنان لجعل ابتسامتك كاملة مرة أخرى.\r\n\r\nيمكن أن يقترح عليك طبيب الأسنان عند زيارة عيادات رام تركيب سن واحد من البورسلين، لتعويض الفقد.\r\n\r\n \r\nما هي تركيبات الأسنان المتحركة؟\r\n\r\n \r\n\r\nهي تلك التركيبات التي يستطيع المريض إزالتها من فمه وتحريكها.\r\n\r\nيتكون تركيب السن من قاعدة معدنية، توضع فوقها لثة صناعية تستخدم لتعويض النقص في جميع الأسنان أو جزءًا منها.\r\n\r\n تعتمد في ثباتها على إلتصاقها مع اللثة وتحتاج إلى إهتمام خاص.\r\n\r\nفي بداية الاستخدام قد تشعر أنها غريبة مما يؤدي إلى عدم الراحة وخاصة عند الكلام أو الضحك.\r\n\r\nلكن ستخف هذه الأعراض عندما تعتاد على استخدام تركيبات الأسنان.\r\n\r\n \r\nما هي الحالات التي تستدعي إلى تركيب سن واحد؟\r\n\r\n \r\n\r\n إذا كان لديك، كسر أو شرخ في السن. فأنت بحاجة إلى تركيب سن واحد.\r\n\r\nتركيبات الأسنان تبدو طبيعية الشكل واللون والعضة. لكن يفضل إختيار طبيب أسنان مختص، رغم أن تركيب سن واحد من النوع الثابت له العديد من الفوائد التي تنعكس إيجابيًا على صحة الفرد وراحته النفسية للظهور بالمظهر الجميل والمطلوب، إلا أن هناك بعض الأضرار.\r\n\r\nما هي أضرار تركيب تركيب سن واحد بورسلين؟\r\n\r\nهناك بعض الأضرار الطفيفة التي يمكن التعامل معها:\r\n\r\nصعوبة في التحدث وبلع الطعام بعد تركيب سن واحد بورسلين.\r\n\r\nزيادة في إفراز اللعاب في الفترة التالية لـ تركيب سن واحد.\r\n\r\nزيادة الحساسية في تركيب سن أمامي خاصًة عند تناول المشروبات الساخنة أو الباردة.\r\n\r\nألم في الفك في حال تعرض السن الثابت لأي مشاكل أو كسر أو تزحزح عن موضعه عند تركيب سن واحد بورسلين.\r\n\r\nتسبق عملية التركيب نزع عصب الأسنان المفقودة تمامًا.\r\n\r\nحاجتها الكبيرة إلى العناية والإهتمام من خلال تنظيف الأسنان بعد كل وجبةٍ على الأقل، وقبل النوم، والتخفيف من استخدام الأطعمة الملونة، والشاي والقهوة.\r\n\r\n \r\nما هي نصائح العناية بتركيبات الأسنان؟\r\n\r\n \r\n\r\nإليك أهم النصائح للعناية بـ تركيبات الأسنان:\r\n\r\nاستخدام فرشاة ومعجون خاصين بتنظيف التركيبات وكل أسبوع يجب أن تنقع التركيبة سبعة أو ثمانية ساعات في محلول طبي.\r\n\r\nعند تنظيفها احرص على أن يكون ذلك فوق مغسلة مملوءة بالماء فإذا ما وقعت من يدك سقطت في الماء فلا تنكسر.\r\n\r\nقبل النوم ضع تركيبة الأسنان في كوب به ماء كي يحميها من الجفاف الذي يمكن أن يؤدي إلى حدوث إلتهابات.\r\n\r\n\r\nيتطلب تركيب سن واحد زيارة الطبيب بشكل دوري للكشف على متانتها وأداء عملها بالشكل المطلوب، للحصول على النتائج المرغوب بها يجب إختيار طبيب موثوق به، عيادات رام لديها أفضل الأطباء المختصين والمدربين.');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat` varchar(255) NOT NULL,
  `chat_thread_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `seen_by_customer` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_threads`
--

CREATE TABLE `chat_threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `last_message_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_ar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `image`, `discount`, `branch_id`, `service_category_id`, `created_at`, `updated_at`, `name_ar`, `description`, `description_ar`) VALUES
(1, 'Marah Walton', 1, 107.00, NULL, 2, '2023-05-30 02:03:17', '2023-05-30 02:03:17', 'Hayden Lawson', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) NOT NULL,
  `years_of_experience` decimal(8,2) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name_ar` varchar(250) DEFAULT NULL,
  `speciality_ar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `specialty`, `years_of_experience`, `location`, `image`, `created_at`, `updated_at`, `first_name_ar`, `speciality_ar`) VALUES
(1, 'Dr. Mohammad K. Abdeljaber', NULL, 'Consultant of brain and nerve diseases\r\nEncephalography\r\nPreviously medical services\r\nJordanian board', 5.00, NULL, 4, '2023-05-29 19:56:56', '2023-05-29 19:58:04', 'د.محمد خليل عبد الجابر', 'ستشاري أمراض الدماغ و الأعصاب\r\nتخطيط الدماغ و الأعصاب\r\nالخدمات الطبية سابقا\r\nالبورد الاردني'),
(2, 'Dr. Marwan Al akasheh', NULL, 'Consultant Hemotology/ Oncology and Bone Marrow Transplantation', 10.00, NULL, 5, '2023-05-29 19:59:43', '2023-05-29 20:00:11', 'د.مروان العكشة', 'مستشار أمراض الدم و الأورام و زراعة النخاع'),
(3, 'Dr.Feras Al-Rahahleh', NULL, 'Gastroenterologist and Hepatologist inflammatory Bowel Disease', 6.00, NULL, 6, '2023-05-29 20:02:23', '2023-05-29 20:02:23', 'د.فراس الرحاحلة', 'أستشاري أمراض الجهاز الهضمي و الكبد و أمراض القولون و تنظير القنوات المرارية و السمنة'),
(4, 'Dr. Hala N. Owaineh', NULL, 'Endocrine & Diabets Clinic\r\nJordanian board of Endocrinology & Diabetes\r\nJordanian board of internal medicine\r\nArab board of internal medicine\r\nMember of Jordanian Endocrinology & Diabetes Association', 7.00, NULL, 7, '2023-05-29 20:03:41', '2023-05-29 20:03:41', 'د.هلا نعمان عوينة', 'أخصائية أمراض الغدد الصماء و السكري\r\nاستشارية الأمراض الباطنية\r\nالبورد الاردني في اختصاص الغدد الصماء و السكري\r\nالبورد الاردني في اختصاص الامراض الباطنية\r\nالبورد العربي في اختصاص الامراض الباطنية\r\nعضو جمعية أطباء الغدد الصماء و السكري الاردنية'),
(5, 'Dr. Abdelilah M El-Swais', NULL, 'M.B , B.Ch. ,D.S, FF.R.C.SEd.\r\nConsultant General & Endocrine Surgeon', 40.00, NULL, 8, '2023-05-29 20:05:05', '2023-05-29 20:05:05', 'د.عبدالإله محمود السويس', 'استشاري الجراحة العامة و جراحة الغدد الصماء\r\nزميل كلية الجراحين الملكية - بريطانيا\r\nاستاذ مساعد/ جراحة عامة و جراحة الغدد الصماء -الجامعة الأردنية سابقا\r\nاستشاري الجراحة العامة وجراحة الغدد الصماء - مستشفى آرامكو السعودية سابقا');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_branches`
--

CREATE TABLE `doctor_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profissionals`
--

CREATE TABLE `doctor_profissionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `first` enum('1','2','3') NOT NULL DEFAULT '1',
  `second` enum('1','2','3') NOT NULL DEFAULT '1',
  `third` enum('1','2','3') NOT NULL DEFAULT '1',
  `fourth` enum('1','2','3') NOT NULL DEFAULT '1',
  `fifth` enum('1','2','3') NOT NULL DEFAULT '1',
  `sixth` enum('1','2','3') NOT NULL DEFAULT '1',
  `seventh` enum('1','2','3') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_original_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_original_name`, `file_name`, `extension`, `type`, `file_size`, `created_at`, `updated_at`) VALUES
(1, 'center-logos02', 'uploads/all/JTvNjbExC5Jq7IIuzHONaFaxz63ACrut7wPgVF1r.jpg', 'jpg', 'image', '41519', '2023-05-29 19:32:54', '2023-05-29 19:32:54'),
(2, 'center-logos02', 'uploads/all/vRpfKjBz9T184BNQhxFN2I1XxYWknlpP25f9EQtK.jpg', 'jpg', 'image', '41519', '2023-05-29 19:38:15', '2023-05-29 19:38:15'),
(3, 'center-logos02', 'uploads/all/Pui8u18KsAj4Q9ZMirmbOQUgopc2r07lUyHro4aj.jpg', 'jpg', 'image', '41519', '2023-05-29 19:39:13', '2023-05-29 19:39:13'),
(4, 'doctor_01', 'uploads/all/8hlPE3H0ndbXOqwKhdapkBmijRDhW5mzGVP6PeCD.png', 'png', 'image', '175287', '2023-05-29 19:56:56', '2023-05-29 19:56:56'),
(5, 'doctor_07', 'uploads/all/JetHoFwGxVuT8GRqmn2CNLIX3Ukm74Zpgk7EyRer.png', 'png', 'image', '203894', '2023-05-29 19:59:43', '2023-05-29 19:59:43'),
(6, 'doctor_03', 'uploads/all/bbzLQh1AGenw6eyz0l7s2oLnxeOlMlqz8u69SS4H.png', 'png', 'image', '135909', '2023-05-29 20:02:23', '2023-05-29 20:02:23'),
(7, 'doctor_02', 'uploads/all/TgioOqD22PzTOvay4hs7Y9Kt622XXaeOv8AJxLHI.png', 'png', 'image', '145431', '2023-05-29 20:03:41', '2023-05-29 20:03:41'),
(8, 'doctor_08', 'uploads/all/pBUPkQG0Vi6VoguYNXqUZGD8B6Cma5aPtRI4u7rE.png', 'png', 'image', '146459', '2023-05-29 20:05:05', '2023-05-29 20:05:05'),
(9, 'image4', 'uploads/all/ZdNiRKzDM81Kz71gBnxnARN3ypY7CvBwQvJIEIG2.jpg', 'jpg', 'image', '155391', '2023-05-29 20:21:21', '2023-05-29 20:21:21'),
(10, 'wafid_en', 'uploads/all/E42cxVvfWeXpMYzn95dgMyiRZxlpHXnoyoLn24Si.jpg', 'jpg', 'image', '377580', '2023-05-29 20:25:01', '2023-05-29 20:25:01'),
(11, 'Screenshot from 2023-05-29 21-27-39', 'uploads/all/RPheeDoycCjFbRbqsEIND2WxXyT8mD4WnlBpIOiF.png', 'png', 'image', '418004', '2023-05-29 20:26:51', '2023-05-29 20:26:51'),
(12, 'doppler_ultrasound02 (1)', 'uploads/all/N9VUcyD8SFCI3WPLzZig4H6MOejL7NRaKej39LU8.jpg', 'jpg', 'image', '225856', '2023-05-29 23:01:26', '2023-05-29 23:01:26'),
(13, 'doppler_ultrasound02 (1)', 'uploads/all/wFRwfv8h2AEelquADNIGvDpS6ndeGoRdrUDXrj6Q.jpg', 'jpg', 'image', '225856', '2023-05-29 23:01:40', '2023-05-29 23:01:40'),
(14, 'center-logos01', 'uploads/all/UnEpkVjVFt3b9gVYuxFWhPntkvBzs6FVLHhWTCrX.jpg', 'jpg', 'image', '48745', '2023-05-29 23:05:52', '2023-05-29 23:05:52'),
(15, 'center-logos01', 'uploads/all/ZrDZs3pwXHDBGOZLKxtmC7p5x3HStpmlhqQEdmku.jpg', 'jpg', 'image', '48745', '2023-05-29 23:07:11', '2023-05-29 23:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_22_235022_create_patients_table', 2),
(7, '2023_05_22_235744_create_payments_table', 3),
(8, '2023_05_22_235922_create_media_table', 3),
(9, '2023_05_23_011451_create_offer_categories_table', 3),
(10, '2023_05_23_015125_create_countries_table', 4),
(11, '2023_05_23_020658_create_schedules_table', 4),
(12, '2023_05_23_022046_create_appinfos_table', 5),
(13, '2023_05_23_022249_create_contact_us_table', 5),
(14, '2023_05_23_022522_create_chat_threads_table', 6),
(15, '2023_05_23_022530_create_messages_table', 6),
(16, '2023_05_23_234300_create_doctors_table', 6),
(17, '2023_05_23_235306_create_offers_table', 7),
(18, '2023_05_23_235310_create_blogs_table', 7),
(19, '2023_05_23_235335_create_service_categories_table', 7),
(20, '2023_05_23_235535_create_branches_table', 7),
(21, '2023_05_24_013036_create_doctor_branches_table', 7),
(22, '2023_05_24_235323_create_services_table', 8),
(23, '2023_05_25_235344_create_feedback_table', 8),
(24, '2023_05_24_235050_create_appointments_table', 9),
(25, '2023_05_23_234301_create_register_offers_table', 10),
(26, '2023_05_23_022513_create_chats_table', 11),
(27, '2023_05_23_021358_create_discounts_table', 12),
(28, '2023_05_23_013758_create_doctor_profissionals_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `offer_type` int(11) DEFAULT 1,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `offer_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `name_ar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `offer_type`, `price`, `image`, `offer_category_id`, `created_at`, `updated_at`, `period`, `name_ar`) VALUES
(1, 'Offer On Clinics', NULL, 50.00, 14, 1, '2023-05-29 23:05:52', '2023-05-29 23:06:22', NULL, 'عررض علي العيادات'),
(2, 'Offer For News', NULL, 60.00, 15, 1, '2023-05-29 23:07:11', '2023-05-29 23:07:11', NULL, 'عرض للجدد');

-- --------------------------------------------------------

--
-- Table structure for table `offer_categories`
--

CREATE TABLE `offer_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_categories`
--

INSERT INTO `offer_categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `name_ar`) VALUES
(1, 'New Offer', 13, '2023-05-29 23:01:26', '2023-05-29 23:01:40', 'عرض جديد');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'dsdsd', 'dsdsddsd@gmail.com', '01245545', '2023-05-30 01:04:20', '2023-05-30 01:04:20'),
(4, 'dsdsd', 'dsdsdwdsd@gmail.com', '0124554543', '2023-05-30 01:05:13', '2023-05-30 01:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('cash','installment','online') NOT NULL DEFAULT 'cash',
  `installment_type` enum('seed_financing','facilitation') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_offers`
--

CREATE TABLE `register_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `scheduled_at` datetime NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time` enum('morning','night') NOT NULL DEFAULT 'morning',
  `payment_method` int(11) NOT NULL DEFAULT 3,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_offers`
--

INSERT INTO `register_offers` (`id`, `patient_id`, `doctor_id`, `scheduled_at`, `service_id`, `branch_id`, `time`, `payment_method`, `created_at`, `updated_at`, `status`) VALUES
(1, 4, NULL, '2023-05-23 00:00:00', 1, NULL, 'morning', 3, '2023-05-30 01:05:13', '2023-05-30 01:32:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `name_ar` varchar(250) DEFAULT NULL,
  `description_ar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `doctor_id`, `service_category_id`, `name`, `created_at`, `updated_at`, `image`, `description`, `name_ar`, `description_ar`) VALUES
(1, NULL, 2, 'Marah Walton', '2023-05-29 20:21:21', '2023-05-30 02:04:39', 9, NULL, 'Hayden Lawson', NULL),
(2, NULL, 3, 'Expatriates’ Health Check-up Program', '2023-05-29 20:25:01', '2023-05-29 20:25:01', 10, 'The expatriate health Check-up aim\r\nto take the appropriate health\r\nmeasures to ensure that the expatri-\r\nates to the GCC countries are free of\r\ndiseases that pose a threat to their\r\ncontacts, thus endangering the safety\r\n& security of the community of the\r\nGCC states, as well as to ensure that\r\nthey are healthy and fit to examine\r\nexpertise coming for work, visit, resi-\r\ndence, or any other purposes speci-\r\nfied by those countries\r\n\r\nYanbu Medical Center\r\n\r\n: (nal anioo\r\n\r\ndanll gulyo\r\ngoleillgulao Joal\r\nGulf Health Council\r\n\r\nwaalgll (naa polip\r\n\r\nExpatriates’ Health Check-up Program', 'برنامج فحص الوافدين', '.'),
(3, NULL, 3, 'MEDRAY', '2023-05-29 20:26:51', '2023-05-29 20:32:58', 11, 'MEDRAY is one of the leading centers in Jordan and the Middle East that provide excellent radiological procedures and aim to provide the best medical services to patients.\r\n\r\nThe International Medical Radiology Center MEDRAY is distinguished by providing the most optimal and accurate services in all areas of diagnostic radiology. The Department of Nuclear Medicine, Radioisotope Treatment, Early Diagnosis of Tumors, and Follow-up by PET-CT and their addition to our medical diagnostic services have been developed. Thus, our services cover all areas required in the field of diagnostic radiology. And with the latest devices, not only at the level of Jordan but at the level of the Middle East region in general.\r\nSERVICE MEDRAY\r\nMRI\r\nX-Ray\r\nUltrasound\r\nEOS Imaging technology\r\nCT Scan\r\nPET CT\r\nGamma Camera\r\nDexa Scan\r\nLiver examination by FIBROSCAN\r\nComputed tomography coronary angiography (cCTA)\r\nPanorama X-Ray\r\nMammography X-ray picture\r\nHysterosalpingography (HSG)\r\nCone beam 3D\r\nFluoroscopy medical procedure', 'ميدري', 'من المراكز الرائدة على مستوى المنطقة والشرق الأوسط نقدم التشخيص الاشعاعي المتميز من الناحية الطبية والعلمية والخدماتية بهدف تقديم أفضل الخدمات الطبية للمرضى.\r\n\r\nيتميز المركز الدولي للأشعة الطبية MEDRAY بتقديم أفضل الخدمات وأكثرها دقة في جميع مجالات الأشعة التشخيصية. تم تطوير قسم الطب النووي وعلاج النظائر المشعة والتشخيص المبكر للأورام والمتابعة بواسطة PET-CT وإضافتها إلى خدمات التشخيص الطبي لدينا. وبالتالي ، فإن خدماتنا تغطي جميع المجالات المطلوبة في مجال الأشعة التشخيصية. وبأحدث الأجهزة ليس فقط على مستوى الأردن بل على مستوى منطقة الشرق الأوسط.\r\nخدمات ميدري\r\nتصوير رنين مغناطيسي\r\nتصوير اشعة سينية\r\nالموجات فوق الصوتية\r\nتقنية التصوير EOS\r\nستي سكان CT Scan\r\nالتصوير المقطعي\r\nكاميرا جاما\r\nمسح ديكسا\r\nفحص الكبد بواسطة FIBROSCAN\r\nالتصوير المقطعي المحوسب لتصوير الأوعية التاجية (cCTA)\r\nبانوراما الأشعة السينية\r\nتصوير الثدي الشعاعي\r\nتصوير الرحم (HSG)\r\nشعاع مخروط 3D\r\nالإجراء الطبي للتنظير التألقي'),
(4, 1, 2, 'Neurology & Brain Clinic', '2023-05-29 20:28:28', '2023-05-29 20:28:28', NULL, '.', 'عيادات اعصاب دماغ', '.'),
(5, 2, 2, 'Hematology, oncology & bone marrow transplantation Clinic', '2023-05-29 20:30:05', '2023-05-29 20:30:05', NULL, '.', 'عيادة أمراض الدم و الأورام و زراعة النخاع', '.'),
(6, 3, 2, 'Gastroenterology Clinic', '2023-05-29 20:32:12', '2023-05-29 20:32:12', NULL, '.', 'عيادة جهاز هضمي', '.'),
(7, 4, 2, 'Endocrine & Diabets Clinic', '2023-05-29 20:32:50', '2023-05-29 20:32:50', NULL, '.', 'عيادة امراض باطنية', '.'),
(8, 5, 2, 'Medicine, General Surgery and Endocrinology Clinic', '2023-05-29 20:35:02', '2023-05-29 20:35:02', NULL, '.', 'عيادة جراحة عامة', '.');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `schedule_at` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `name_ar` varchar(250) DEFAULT NULL,
  `description_ar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `schedule_at`, `created_at`, `updated_at`, `image`, `description`, `name_ar`, `description_ar`) VALUES
(2, 'Clinic', NULL, '2023-05-29 20:18:24', '2023-05-29 20:18:24', NULL, 'مركز نيو الطبي\r\nيمكنك الحجز في شبكتة عيادات مراكز نيو الطبي للرعاية الصحية التي تضم عيادات طبية متخصصة.', 'عيادات', 'مركز نيو الطبي\r\nيمكنك الحجز في شبكتة عيادات مراكز نيو الطبي للرعاية الصحية التي تضم عيادات طبية متخصصة.'),
(3, 'General', NULL, '2023-05-29 20:19:53', '2023-05-29 20:19:53', NULL, '.', 'عام', '.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Hassan Salah', 'salemhassan175@gmail.com', NULL, '$2y$10$Xv.J348.X0ZRJreem4VgPOj8AKTqIjLumUBbldYXYKmTLMmgEJ5TS', NULL, '2023-05-29 19:32:41', '2023-05-29 19:39:13', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appinfos`
--
ALTER TABLE `appinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_service_id_foreign` (`service_id`),
  ADD KEY `appointments_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_image_foreign` (`image`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branches_country_id_foreign` (`country_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_chat_thread_id_foreign` (`chat_thread_id`),
  ADD KEY `chats_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `chat_threads`
--
ALTER TABLE `chat_threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_threads_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_image_foreign` (`image`),
  ADD KEY `discounts_branch_id_foreign` (`branch_id`),
  ADD KEY `discounts_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_image_foreign` (`image`);

--
-- Indexes for table `doctor_branches`
--
ALTER TABLE `doctor_branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_branches_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_branches_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `doctor_profissionals`
--
ALTER TABLE `doctor_profissionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_profissionals_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_patient_id_foreign` (`patient_id`),
  ADD KEY `feedback_doctor_id_foreign` (`doctor_id`),
  ADD KEY `feedback_service_id_foreign` (`service_id`),
  ADD KEY `feedback_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_image_foreign` (`image`),
  ADD KEY `offers_offer_category_id_foreign` (`offer_category_id`);

--
-- Indexes for table `offer_categories`
--
ALTER TABLE `offer_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_categories_image_foreign` (`image`);

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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `register_offers`
--
ALTER TABLE `register_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_offers_patient_id_foreign` (`patient_id`),
  ADD KEY `register_offers_doctor_id_foreign` (`doctor_id`),
  ADD KEY `register_offers_service_id_foreign` (`service_id`),
  ADD KEY `register_offers_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointment_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_categories_schedule_at_foreign` (`schedule_at`);

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
-- AUTO_INCREMENT for table `appinfos`
--
ALTER TABLE `appinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_threads`
--
ALTER TABLE `chat_threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_branches`
--
ALTER TABLE `doctor_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_profissionals`
--
ALTER TABLE `doctor_profissionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offer_categories`
--
ALTER TABLE `offer_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_offers`
--
ALTER TABLE `register_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_image_foreign` FOREIGN KEY (`image`) REFERENCES `media` (`id`);

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_chat_thread_id_foreign` FOREIGN KEY (`chat_thread_id`) REFERENCES `chat_threads` (`id`),
  ADD CONSTRAINT `chats_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `chat_threads`
--
ALTER TABLE `chat_threads`
  ADD CONSTRAINT `chat_threads_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `discounts_image_foreign` FOREIGN KEY (`image`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `discounts_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_image_foreign` FOREIGN KEY (`image`) REFERENCES `media` (`id`);

--
-- Constraints for table `doctor_branches`
--
ALTER TABLE `doctor_branches`
  ADD CONSTRAINT `doctor_branches_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `doctor_branches_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `doctor_profissionals`
--
ALTER TABLE `doctor_profissionals`
  ADD CONSTRAINT `doctor_profissionals_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `feedback_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `feedback_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `feedback_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_image_foreign` FOREIGN KEY (`image`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `offers_offer_category_id_foreign` FOREIGN KEY (`offer_category_id`) REFERENCES `offer_categories` (`id`);

--
-- Constraints for table `offer_categories`
--
ALTER TABLE `offer_categories`
  ADD CONSTRAINT `offer_categories_image_foreign` FOREIGN KEY (`image`) REFERENCES `media` (`id`);

--
-- Constraints for table `register_offers`
--
ALTER TABLE `register_offers`
  ADD CONSTRAINT `register_offers_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `register_offers_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `register_offers_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `register_offers_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `appointment_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointment_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`);

--
-- Constraints for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD CONSTRAINT `service_categories_schedule_at_foreign` FOREIGN KEY (`schedule_at`) REFERENCES `schedules` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
