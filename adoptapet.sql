-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2023 a las 18:52:09
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adoptapet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entity_profiles`
--

CREATE TABLE `entity_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entity_profiles`
--

INSERT INTO `entity_profiles` (`id`, `id_user`, `name`, `logo`, `banner`, `address`, `time_table`, `phone_number`, `email`, `description`, `facebook`, `instagram`, `website`, `created_at`, `updated_at`) VALUES
(1, 21, 'Protectora BCN', 'KAZor23qpVrIIf5f7eBb0EFCF5okNy1gDdaXCvQl.jpeg', 'ah42zZoCcbu1EtwIJPGhN8J8naSw2ABTT1WJKab5.jpeg', 'Guarda Antón 10', 'lunes a viernes de 10 a 17:30h', '934170124', NULL, 'Estamos al final de la Av. Tibidabo, a pocos metros de la estación del Funicular del Tibidabo.\r\nPodéis llegar hasta la Av. Tibidabo con los trenes FGC, línea L7 (con origen en Plaza Catalunya), y después tomar el autobús 196 apeándoos delante de la estación del funicular (Plaza Dr. Andreu).', 'https://www.facebook.com/protectorabarcelona', 'https://www.instagram.com/protectora.bcn/', 'https://www.protectorabcn.es/', '2020-05-31 17:41:56', '2020-06-02 12:55:14'),
(2, 22, 'Miguel Llabrés Rovellada', 'kzwugQ1MdiCZ4S9NcV6YDc7TIMvsaxwjKfSFyp5o.png', 'JXj6rR7h1aiuKYDluKz0J8lZdv5Dza3fAVdF2pgx.jpeg', 'Calle Ribes', 'De lunes a sábado: 9:00 a 12:30h y de 16:00 a 18:30h', '622931815', NULL, NULL, NULL, NULL, 'https://www.helpguau.com', '2020-05-31 17:42:00', '2020-06-04 01:08:38'),
(3, 23, 'Asociación Alba', 'G9FPd13AsW7PJErM6HppYn3tXUl0ov3yYMZu7xdM.png', 'dCLW0uGwkipb2nwbXjKwBc0OWR48u5LzcJuUesqD.jpeg', '28080  Madrid', 'lunes a viernes, de 10:30 a 14:00 y de 16:00 a 20:00', '609291930', NULL, NULL, 'https://www.facebook.com/ProtectoraAlba/', 'https://www.instagram.com/albaonlineorg/', 'https://albaonline.org/', '2020-06-01 20:55:57', '2020-06-02 12:59:37'),
(4, 24, 'Sociedad Canina Galega', 'gfCUoXwvyBX33ldb2E5DGXt4n8vB9uFSariPjh3l.png', 'IWwVRrMdqxKjZQQSvbTplL0zxxp1BKlO9GLSA05z.jpeg', 'Coutadas Nº 35', 'martes, miércoles y jueves de 8:00 a 15:00', '654844305', NULL, NULL, 'https://es-es.facebook.com/pages/category/Nonprofit-Organization/Sociedade-Canina-Galega-1626408864246076/', NULL, 'https://www.caninagalega.com/', '2020-06-01 20:57:04', '2020-06-01 22:08:45'),
(5, 25, 'Arca de Noé', 'W4H8z50z46Q0S0WgIvFuFLv9lgoeT2IMGYXQsRCL.jpeg', 'rNDS3o91hKsrGkCiXt7kLWHOTTBlzUeGmadojwoX.jpeg', 'Av. de la Reina Mercedes, 41', 'lunes a sábado de 9:00–14:00, 17:00–20:30', '954620302', NULL, NULL, 'https://www.facebook.com/arcadenoesevilla', 'https://www.instagram.com/arcadenoesevilla/', 'https://arcadenoe.org/', '2020-06-01 20:57:48', '2020-06-01 21:11:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_11_150330_create_user_profiles_table', 2),
(5, '2020_05_11_151713_create_entity_profiles_table', 2),
(6, '2020_05_11_154534_create_pet_profiles_table', 2),
(7, '2020_05_11_155853_create_pet_pictures_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_pictures`
--

CREATE TABLE `pet_pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pet` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pet_pictures`
--

INSERT INTO `pet_pictures` (`id`, `id_pet`, `created_at`, `updated_at`, `picture`) VALUES
(3, 1, '0000-00-00 00:00:00', '2020-06-01 17:43:02', '2020-06-01 19:43:02'),
(5, 2, '0000-00-00 00:00:00', '2020-06-01 17:54:01', '2020-06-01 19:54:01'),
(7, 3, '0000-00-00 00:00:00', '2020-06-01 18:04:11', '2020-06-01 20:04:11'),
(10, 4, '0000-00-00 00:00:00', '2020-06-01 18:07:30', '2020-06-01 20:07:30'),
(12, 5, '0000-00-00 00:00:00', '2020-06-01 18:10:30', '2020-06-01 20:10:30'),
(14, 6, '0000-00-00 00:00:00', '2020-06-01 18:12:53', '2020-06-01 20:12:53'),
(16, 7, '0000-00-00 00:00:00', '2020-06-01 18:17:54', '2020-06-01 20:17:54'),
(18, 8, '0000-00-00 00:00:00', '2020-06-01 18:27:32', '2020-06-01 20:27:32'),
(20, 9, '0000-00-00 00:00:00', '2020-06-01 18:30:30', '2020-06-01 20:30:30'),
(22, 10, '0000-00-00 00:00:00', '2020-06-01 18:32:24', '2020-06-01 20:32:24'),
(24, 11, '0000-00-00 00:00:00', '2020-06-01 18:34:38', '2020-06-01 20:34:38'),
(26, 12, '0000-00-00 00:00:00', '2020-06-01 18:38:56', '2020-06-01 20:38:56'),
(28, 13, '0000-00-00 00:00:00', '2020-06-01 18:44:19', '2020-06-01 20:44:19'),
(30, 14, '0000-00-00 00:00:00', '2020-06-01 18:47:09', '2020-06-01 20:47:09'),
(32, 15, '0000-00-00 00:00:00', '2020-06-01 18:49:33', '2020-06-01 20:49:33'),
(34, 16, '0000-00-00 00:00:00', '2020-06-01 19:08:45', '2020-06-01 21:08:45'),
(36, 17, '0000-00-00 00:00:00', '2020-06-01 19:13:08', '2020-06-01 21:13:08'),
(38, 18, '0000-00-00 00:00:00', '2020-06-01 19:19:24', '2020-06-01 21:19:24'),
(40, 19, '0000-00-00 00:00:00', '2020-06-01 19:32:20', '2020-06-01 21:32:20'),
(42, 20, '0000-00-00 00:00:00', '2020-06-01 19:39:43', '2020-06-01 21:39:43'),
(44, 21, '0000-00-00 00:00:00', '2020-06-01 19:52:32', '2020-06-01 21:52:32'),
(46, 22, '0000-00-00 00:00:00', '2020-06-01 20:38:05', '2020-06-01 22:38:05'),
(48, 23, '0000-00-00 00:00:00', '2020-06-01 20:41:10', '2020-06-01 22:41:10'),
(50, 24, '0000-00-00 00:00:00', '2020-06-01 20:45:04', '2020-06-01 22:45:04'),
(52, 25, '0000-00-00 00:00:00', '2020-06-01 21:14:38', '2020-06-01 23:14:38'),
(54, 26, '0000-00-00 00:00:00', '2020-06-01 21:19:51', '2020-06-01 23:19:51'),
(56, 27, '0000-00-00 00:00:00', '2020-06-01 21:23:07', '2020-06-01 23:23:07'),
(58, 28, '0000-00-00 00:00:00', '2020-06-01 21:49:03', '2020-06-01 23:49:03'),
(60, 29, '0000-00-00 00:00:00', '2020-06-01 21:57:16', '2020-06-01 23:57:16'),
(62, 30, '0000-00-00 00:00:00', '2020-06-01 22:00:26', '2020-06-02 00:00:26'),
(64, 31, '0000-00-00 00:00:00', '2020-06-01 22:12:53', '2020-06-02 00:12:53'),
(66, 32, '0000-00-00 00:00:00', '2020-06-01 22:17:29', '2020-06-02 00:17:29'),
(68, 33, '0000-00-00 00:00:00', '2020-06-01 22:21:15', '2020-06-02 00:21:15'),
(70, 34, '0000-00-00 00:00:00', '2020-06-02 14:11:42', '2020-06-02 16:11:42'),
(72, 35, '0000-00-00 00:00:00', '2020-06-02 14:14:02', '2020-06-02 16:14:02'),
(74, 36, '0000-00-00 00:00:00', '2020-06-02 14:17:37', '2020-06-02 16:17:37'),
(75, 21, '0000-00-00 00:00:00', '2020-06-02 14:21:55', '2020-06-02 16:21:55'),
(76, 21, '0000-00-00 00:00:00', '2020-06-02 14:22:31', '2020-06-02 16:22:31'),
(77, 32, '0000-00-00 00:00:00', '2020-06-02 14:23:50', '2020-06-02 16:23:50'),
(78, 16, '0000-00-00 00:00:00', '2020-06-02 14:25:35', '2020-06-02 16:25:35'),
(79, 16, '0000-00-00 00:00:00', '2020-06-02 14:26:20', '2020-06-02 16:26:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_profiles`
--

CREATE TABLE `pet_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `state` tinyint(1) NOT NULL,
  `img_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `sterilized` tinyint(1) NOT NULL,
  `weight` double(5,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `donated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pet_profiles`
--

INSERT INTO `pet_profiles` (`id`, `id_user`, `state`, `img_thumbnail`, `name`, `gender`, `species`, `breed`, `birthdate`, `sterilized`, `weight`, `description`, `donated_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'bN9qxXG5cFnZzGMjCIbYLeqtccD2Nithi7q3gykr.jpeg', 'Tiris', 'Hembra', 'Perro', 'Mestizo', '2015-03-04', 1, 18.00, 'Sóc un gosset molt bo i sociable tant amb mascles com amb femelles, sempre que tinguem una bona presentació, ja que de vegades sóc una mica \"brusc\". M\'agradaria trobar una família amb un ritme de vida moderat, amb la qual pugui passejar per tot arreu. Una família que em mimi molt a casa! Vols ser tu?', NULL, '2020-06-01 17:22:07', '2020-06-01 17:43:11'),
(2, 2, 0, 'i1scSjF02sjZHgQeIzlUNwJu97ogpyH9nv50IAbE.jpeg', 'Horus', 'Macho', 'Perro', 'Mestizo', '2000-01-02', 1, 20.00, 'Horus es este cruce de pastor alemán, de 3 años de edad. A Horus le encanta jugar y dar paseos tranquilos, y es muy cariñoso con las personas que conoce. Por otro lado, es desconfiado con desconocidos y necesita de una familia que tenga paciencia para conocerlo y para ayudarlo en su adaptación. Por otro lado, Horus es muy noble y besucón con sus personas.\r\n\r\nEsperamos que llegue esa familia que le dé el apoyo que necesita para sentirse seguro y por fin le dé el hogar que tanto merece. Con Horus descubrirán un perro maravilloso que, aunque necesita paciencia para adaptarse, corresponde a sus personas con una fidelidad absoluta y devoción por ellos.', NULL, '2020-06-01 17:53:07', '2020-06-01 17:54:05'),
(3, 3, 0, 'L2MWYcUBOyTaX1LWFNjr93T8UFqQia38i3boKbRg.jpeg', 'Nerea', 'Hembra', 'Perro', 'Mestizo', '2010-10-01', 1, 14.00, 'Nerea fue rescatada de un síndrome de Noé hace ya 5 años y desde entonces ha estado en la Lliga. Era un ambiente muy complejo que la condicionó, pero desde que llegó al refugio ha mejorado mucho. Aún le cuesta mostrarse afectuosa con las personas, así que buscamos para ella una familia que tenga paciencia y comprensión con ella. Nerea tiene 8 años y necesita que por fin una familia se fije en ella y le dé el hogar que necesita.\r\nDebido a su pasado, Nerea necesita estar acompañada, con lo cual es preferible una familia con algún otro perro, o en la que Nerea esté con personas todo el tiempo. También es incompatible con gatos. Por otro lado es una perrita a la que le encanta pasear y tomar el sol. Esperamos que su oportunidad de ser feliz llegue pronto.', NULL, '2020-06-01 18:03:50', '2020-06-01 18:04:18'),
(4, 4, 0, 'FRegWq3QMAwjgIzlmBfPKvQx1TqLUEJrITqA9YRA.jpeg', 'Gina', 'Hembra', 'Perro', 'Mestizo', '2010-09-01', 0, 17.00, 'Si tuviéramos que describir a Gina con una sola palabra sería: “cautivadora”. Así es, Gina es una perra con mucho encanto, si no lo crees pregúntale a los voluntarios, resulta muy bonito ver la estima que le tienen.\r\n\r\nGina hace que todo sea especial, desde su forma de comer o sus paseos, hasta la efusividad con la que te recibe, todo en ella está repleto de detalles que la hacen única.\r\n\r\nNo ha tenido un pasado fácil, Gina sufrió malos tratos por parte del que era su propietario, y vivió en un entorno muy desequilibrado. Cuando llegó al refugio en 2014 Gina parecía una cabra desbocada, no entendía absolutamente nada, y costó muchos meses de trabajo enseñarle y reconducir sus conductas asalvajadas. Tras estos años con nosotros Gina ha dado un cambio espectacular, aquella cabra loca ya forma parte del recuerdo de voluntarios y trabajadores, ahora Gina es toda una señorita que busca una familia que le aporte estabilidad y la ayude a seguir el camino de mejora que ha tomado.\r\n\r\nBuscamos para ella un/a adoptante que preferiblemente tenga otro perro o bien una familia en la que estuviera acompañada todo el día, ya que siempre ha convivido con perros y es posible que no lleve bien quedarse sola.\r\n\r\nA Gina le quedan muchos años de vida por delante y todavía le falta descubrir lo que es un hogar, si no puedes adoptar, puedes ayudar compartiendo su caso para que por fin encuentre su lugar.', NULL, '2020-06-01 18:06:23', '2020-06-01 18:07:31'),
(5, 5, 0, 'hrTVImx1JMCr02hFWMSoFp2zCLSEGj0uATnjjkDV.jpeg', 'Nut', 'Hembra', 'Perro', 'Mestizo', '2018-09-20', 1, 17.00, 'Nut busca una familia dispuesta a entenderlo y ayudarlo. Este mestizo de pastor alemán, de un año de edad, es desconfiado con las personas, así que sospechamos que debió pasarlo mal antes de llegar a nuestro refugio a pesar de su corta edad. \r\n\r\nNut, en cambio, disfruta de la compañía perruna, así que sería ideal que se lo llevase una familia con otro perro con el que jugar y del que aprender a comportarse. De todas formas, Nut necesitará de mucha paciencia y perseverancia para darle unas rutinas y estabilidad, por lo que debería adoptarlo una familia sin niños que esté dispuesta a trabajar su adaptación, que será lenta y requerirá de la ayuda de un educador o etólogo.  Estamos convencidos de que se convertirá en un perro maravilloso si la familia adecuada le da la oportunidad.', NULL, '2020-06-01 18:10:07', '2020-06-01 18:10:41'),
(6, 6, 0, '0Pc6vjEMAeM969yJaWnRpw07U8svIf8V8POPIO8X.jpeg', 'Goliath', 'Macho', 'Perro', 'Fila Brasileiro', '2018-02-11', 1, 20.00, 'Buscamos una acogida indefinida para nuestro Goliath. No tiene ni 2 añitos pero, debido a su tamaño, tiene una artrosis avanzada y el frío, la humedad y el gran número de escaleras, hace que el refugio no sea un buen lugar para él.\r\n\r\nBuscamos para él un hogar sin escaleras y sin niños. Puesto que de entrada es desconfiado con los desconocidos, necesitamos que la familia cree un vínculo con él antes de llevárselo, ya que una vez creado es un perrito muy alegre, cariñoso, juguetón y extremadamente fiel.', NULL, '2020-06-01 18:12:37', '2020-06-01 18:12:55'),
(7, 7, 0, '9WgQ3UD7k1Rfx9euMPg2tFCdn8CV13DaILXdJ3tM.jpeg', 'Bruno', 'Macho', 'Perro', 'Terrier', '2011-01-21', 1, 9.00, 'Bruno es este precioso mestizo de terrier nacido en octubre de 2011. Es un perrito cariñoso pero que necesita una persona que lo sepa entender y que sepa darle su espacio cuando lo necesita. Buscamos preferiblemente para Bruno una sola persona que quiera darle la oportunidad de vivir el resto de su vida en un hogar.', NULL, '2020-06-01 18:17:37', '2020-06-01 18:17:55'),
(8, 8, 0, 'NXdcLfE0kFs0xK7Hqjf5OPglvkr2u9bjwFgZVNGw.jpeg', 'Olivia', 'Hembra', 'Perro', 'Mestizo', '2010-02-01', 1, 13.00, 'Olivia no ha tenido mucha suerte en su vida, podríamos decir que la ha pasado prácticamente entera en una jaula; no entendemos cómo a veces un perro puede ser el invisible para todas las personas que quieren adoptar. \r\n\r\nOlivia no guarda rencor al ser humano, es una perrita muy cariñosa, que siempre te espera con una sonrisa para compartir momentos felices contigo. Si quieres ayudarnos a que Olivia deje de vivir en una jaula ayúdanos compartiendo su historia para dar con ese adoptante que la hará libre por fin. Por sus características Olivia debería vivir sin más perros.', NULL, '2020-06-01 18:27:05', '2020-06-01 18:27:34'),
(9, 9, 0, 'ln5ngaPTdkH8XGhpLmby8pCgcbtAv00AyOrhQ6Ta.jpeg', 'Misha', 'Hembra', 'Gato', 'Gato Europeo', '2012-02-21', 1, 11.00, 'A Misha la dejaron sus dueños porque decían que tenía un comportamiento muy complicado. En la Protectora tiene muy buen carácter e incluso es juguetona.\r\nMisha es un poco tímida al principio, pero bastan unos pocos minutos para ver lo cariñosa que es. Y como todo gato, también necesita sus momentos de tranquilidad e independencia.\r\nA pesar de que es una preciosidad nunca nadie se ha fijado en ella. Pero esperamos que encuentre una familia que sepa valorarla y que con un poco de paciencia le devuelva la confianza y el hogar que nunca debió perder.', NULL, '2020-06-01 18:30:12', '2020-06-01 18:30:34'),
(10, 10, 0, 'SLvFsbPjOvtfk5oXAQa4cPt2ZkILjncACOvOpgMj.jpeg', 'Penny', 'Hembra', 'Gato', 'Gato Europeo', '2012-11-07', 0, 13.00, 'A Penny la dejó su dueño porque decía que tenía mal carácter y que no quería un gato así.\r\nNo sabemos si era cierto ya que, cuando Penny entró en la Protectora, lo pasó tan mal y sufrió tanto estrés por el cambio, que hasta pasados unos meses no pudimos ver su verdadero carácter.\r\nAl principio sólo se acercaba a unas pocas personas pero ahora ya le gusta que la acaricien y la mimen. También necesita sus momentos de independencia.\r\nHa sido tan grande el cambio en ella que nos gustaría encontrar pronto un hogar donde se sienta querida y esté tranquila. Por ello, lo ideal sería una familia sin más gatos ni niños y que tenga paciencia en su adaptación.', NULL, '2020-06-01 18:32:03', '2020-06-01 18:32:29'),
(11, 11, 0, 'MFKD0MXQhqTcbw288iYfkNPLGvg6crmEksa1DCkc.jpeg', 'Ivana', 'Hembra', 'Gato', 'Gato europeo', '2014-02-01', 1, 10.00, 'No todos los gatos que tenemos en la Protectora son aptos para darlos en adopción: algunos llevan ya tantos años en el refugio que no se adaptarían fuera de él, otros no son adecuados para convivir en una familia debido a su carácter, y otros, simplemente, nacieron o nos llegan en estado \"salvaje\" y no son sociables con la gente. No obstante, aunque no se puedan dar en adopción, se merecen pasar su vida en su hogar, que es la Protectora, y necesitan cuidados; por eso, para todos ellos buscamos padrinos que colaboren en su manutención.', NULL, '2020-06-01 18:34:24', '2020-06-01 18:34:41'),
(12, 12, 0, '00Pt1TavNOkHEea8AwJM774MqHiQtLh4CPiZIgIN.jpeg', 'Estrella', 'Hembra', 'Gato', 'Siames', '2010-01-21', 1, 6.00, 'No todos los gatos que tenemos en la Protectora son aptos para darlos en adopción: algunos llevan ya tantos años en el refugio que no se adaptarían fuera de él, otros no son adecuados para convivir en una familia debido a su carácter, y otros, simplemente, nacieron o nos llegan en estado \"salvaje\" y no son sociables con la gente. No obstante, aunque no se puedan dar en adopción, se merecen pasar su vida en su hogar, que es la Protectora, y necesitan cuidados; por eso, para todos ellos buscamos padrinos que colaboren en su manutención.', NULL, '2020-06-01 18:38:27', '2020-06-01 18:38:59'),
(13, 13, 0, 'rCioWIEzx35Q3hDpW1rXTeNWtefaFmGxVbEJYf1m.jpeg', 'Ona', 'Hembra', 'Ave', 'Periquito Australiano', '2016-01-02', 1, 1.00, 'Ona pareja Marito (periquitos australianos), no sabemos con exactitud la edad, está bien de salud. (Se entregarán juntos)\r\n\r\nEstá revisada, la hemos anillado para mayor seguridad, está desparasitada internamente y externamente, esta sexada, tiene realizadas las analíticas de PBFD y Psitacosis. \r\n\r\nSe recogería en Tarragona(Cataluña).', NULL, '2020-06-01 18:44:05', '2020-06-01 18:44:20'),
(14, 14, 0, 'RvfQw8XZDQhuDyuMyRSuN2XXd0AdNahIScrhJoMF.jpeg', 'Sol', 'Macho', 'Ave', 'Inseparable de Namibia', '2015-03-02', 1, 1.00, 'Está revisada, la hemos anillado para mayor seguridad, está desparasitada internamente y externamente, esta sexada, tiene realizadas las analíticas de PBFD y Psitacosis. \r\n\r\nSe recogería en Igualada(Cataluña).', NULL, '2020-06-01 18:46:52', '2020-06-01 18:47:12'),
(15, 15, 0, 'GChy2RMBMhhu2Sb9DaH6b7f4xnAkX0YlG1di3WC2.jpeg', 'Marito', 'Macho', 'Ave', 'Periquito Australiano', '2016-02-01', 1, 1.00, 'Marito pareja Ona (periquitos australianos), no sabemos con exactitud la edad, está bien de salud. (Se entregarán juntos)\r\n\r\nEstá revisado, lo hemos anillado para mayor seguridad, está desparasitado internamente y externamente, esta sexado, tiene realizadas las analíticas de PBFD y Psitacosis. \r\n\r\nSe recogería en Tarragona(Cataluña).', NULL, '2020-06-01 18:49:17', '2020-06-01 18:49:34'),
(16, 16, 0, 'nnLxj77MjS56dpPTFWvNFoyo8p0veam9snE9M6qL.jpeg', 'Biloba', 'Macho', 'Otro', 'Sirio', '2017-02-21', 0, 1.00, 'Biloba es una hámster siria que fue encontrada en las escaleras de un edificio abandonada con varias de sus crías. Desgraciadamente, cuando las encontraron, algunas de ellas ya estaban muertas y Biloba estaba de nuevo preñada…\r\n\r\nA pesar de todo, Biloba es una hámster muy buena y tranquila a la que le encanta el ejercicio. Se pasa horas en su rueda, le chifla salir de excursión para darse unos buenos paseos por toda su habitación y juega al escondite siempre y cuando la recompensa sea una rica verdura.', NULL, '2020-06-01 19:07:57', '2020-06-01 19:08:47'),
(17, 17, 0, 'v40mALcmaakWwJ1nqxXkpwaDE9GdTlySIzzEOPxR.jpeg', 'Thor', 'Macho', 'Otro', 'Ruso', '2018-02-01', 0, 1.00, 'Llegó a nosotros porque su dueña falleció. Ahora busca un nuevo hogar en el que ser feliz.', NULL, '2020-06-01 19:12:47', '2020-06-01 19:13:17'),
(18, 18, 0, 'srknVjWfODxycZeVodflJ2I8ilFu06BkmNvFHXbX.jpeg', 'Bubu', 'Macho', 'Otro', 'Roborowski', '2019-06-10', 1, 1.00, 'BUBU y Cindy son dos hámsteres roborowski que fueron abandonados en una clínica veterinaria, desde donde fueron al Valle Encantado antes de venir con nosotros.\r\n\r\nAmbos son nerviosos, como todos los de su especie, pero muy buenos y simpáticos. Les encanta cotillear, darse carreras por cualquier lado y hacer maratones en su rueda. Si, además, les das alguna chuchería natural, cogerán confianza más rápidamente.', NULL, '2020-06-01 19:19:10', '2020-06-01 19:19:25'),
(19, 19, 0, 'iEhZ7dFDpCtGkDkWCLHxPFOhgfNru1MzqBoCMBdW.jpeg', 'Leo', 'Hembra', 'Reptil', 'Tortuga Leopardo', '2015-02-01', 1, 2.00, 'Leo es esta tortuga Espolones nacida en Enero de 2015. Come mucho y es de un tamaño grande, Dentro de 2 meses tendrá crias y también serán puestas en adopción.\r\nBuscamos a una persona de Sevilla a poder ser.', NULL, '2020-06-01 19:31:13', '2020-06-01 19:46:45'),
(20, 20, 0, 'pfYhCVkLwUWIBwQMRv4QPPF7CXK6DbAJkcci9ifk.jpeg', 'Marco', 'Hembra', 'Reptil', 'Espolones', '2013-01-21', 1, 2.00, 'Marco es esta preciosa tortuga Espolones nacida en Enero de 2013. Come mucho y es de un tamaño medio, Estamos buscando a una persona que sepa cuidarla y sepa darle el espacio que necesita. Preferiblemente buscamos una persona de Galicia.', NULL, '2020-06-01 19:38:25', '2020-06-01 19:44:38'),
(21, 2, 0, 'iK8sCySq8y4gQkD3AjgC58NccAQOawnxgE01pmlE.jpeg', 'Pinuez', 'Macho', 'Otro', 'Ruso', '2019-01-01', 0, 1.00, 'Pinuez es una pequeña hámster ruso que llegó a nosotros después de que fuera requisada por la policía en una tienda de animales. Es bastante sociable y buena.', NULL, '2020-06-01 19:52:10', '2020-06-01 19:52:34'),
(22, 22, 0, 'xAoJ5AIkJ6Iei3K2Kaxx5QyhVx6RUOidok6KBuWf.jpeg', 'Joao', 'Macho', 'Perro', 'Mestizo', '2018-11-03', 1, 11.00, 'Joao es este perrito de tamaño pequeño nacido en marzo de 2018, fue abandonado junto a su hermana Leti y su madre. Joao es bueno, sociable y cariñoso pero seguramente no fue socializado y tratado correctamente y por eso le cuesta mucho adaptarse a las cosas nuevas. Joao necesita una familia paciente y con paciencia en su adaptación que pueda pasar mucho tiempo con él ya que no lleva muy bien estar sin la compañía humana. Joao merece por fin encontrar esa familia que lo quiera y cuide como se merece.', NULL, '2020-06-01 20:37:39', '2020-06-01 20:38:08'),
(23, 22, 0, 'WZaqkOL6wIUlFngFaaWHhLdKFfiLHQIAXbL6GsDc.jpeg', 'Nana', 'Hembra', 'Gato', 'Gato Europeo', '2013-09-02', 0, 7.00, 'Nuestra panterita gordita se ve de nuevo en el refugio y no lo está pasando nada bien. Su ADOPCIÓN ES URGENTE.\r\nEs una gata muy buena y cariñosa y necesita una familia que pase la mayor parte del tiempo con ella ya que le gusta estar acompañada.', NULL, '2020-06-01 20:40:42', '2020-06-01 20:41:13'),
(24, 21, 0, 'i59bXEDJX9HZDUeHkorVWxIC0Ff1oWm6nipWhdLq.jpeg', 'Telerina', 'Hembra', 'Gato', 'Gato Europeo', '2015-08-08', 1, 8.00, 'No todos los gatos que tenemos en la Protectora son aptos para darlos en adopción, algunos llevan ya tantos años en el refugio que no se adaptarían fuera de él, otros no son adecuados para convivir en una familia debido a su carácter, y otros, simplemente, nacieron o nos llegaron en estado \"salvaje\" y no son sociables con la gente. No obstante, aunque no se puedan dar en adopción, se merecen pasar su vida en su hogar, que es la Protectora, y necesitan cuidados; por eso, para todos ellos buscamos padrinos que colaboren en su manutención.', NULL, '2020-06-01 20:44:48', '2020-06-01 20:45:05'),
(25, 25, 0, '0YJdPSkrq8hDZHBAadByKABRgH6Zupksr6RCgZF4.jpeg', 'Rubén', 'Macho', 'Gato', 'Atigrado naranja', '2018-01-04', 0, 6.00, 'Despierta tu lado más tierno solo con mirarte con esos grandes ojos anaranjados llenos de bondad, agradece cada caricia, cada mimo. Le encanta que lo cepillen y que le presten atención. Adora todos los tipos de chucherías gatunas.', NULL, '2020-06-01 21:14:12', '2020-06-01 21:14:40'),
(26, 22, 0, '5cQAM2Vd4Lo8GhOzCUneDGhJ9uvAGvYrrjdkEzAq.jpeg', 'Malú', 'Hembra', 'Gato', 'Común europeo', '2010-02-10', 0, 6.00, 'Rescatada de una colonia siendo un cachorro, junto a su hermano Milú, ambos han perdido uno de sus ojos a causa del herpesvirus. Son positivos al calicivirus.\r\n\r\nEs un poco insegura, pero en cuanto coge confianza se deja acaricar y no para de ronronear.', NULL, '2020-06-01 21:19:26', '2020-06-01 21:19:54'),
(27, 22, 0, 'CLsjx48HTNtRjraP1p1zk8lCmTpBexIJia0m4Tf5.jpeg', 'Hita', 'Hembra', 'Gato', 'Atigrado', '2016-11-03', 1, 5.00, 'Vivía en un hueco del alcantarillado en una vía muy transitada, por suerte pudimos rescatarla y que no ocurriese ninguna desgracia. Desde entonces ha vivido fuera de peligro con sus compis gatunos, con los cuales se lleva muy bien. Es una gatita muy activa, siempre está dispuesta a jugar con cualquier cuerda o pelotita, y en sus ratitos de relax no dice que no a unos buenos mimos.', NULL, '2020-06-01 21:22:46', '2020-06-01 21:23:09'),
(28, 23, 0, 'dY0c7SOLyO4MF6uWpH0O4o0Ufzgrv6OBqSa2SGPY.jpeg', 'Lulu', 'Hembra', 'Gato', 'Gato Europeo', '2018-07-07', 1, 7.00, 'Lulu y Lusi, son estas dos pequeñas  de unos siete meses de edad, llegaron a la LLiga en el mes de agosto junto a Romeo que ya ha sido adoptado. Curiosamente Romeo era el más esquivo de los tres pero ya está en una familia adaptándose poco a poco y tal como pensábamos es super cariñoso. Lulu y Lusi son dos gatas preciosas pero con mucho miedo. Son buenas, lo que tienen es puro miedo pero sabemos que en una casa donde estén tranquilas y siguiendo las pautas de  nuestro educador podrán avanzar y llegar a ser unas gatas caseras. Son potencialmente sociables pero necesitan una familia con paciencia y muchas ganas de quererlas y trabajar con ellas para ayudarlas en su adaptación. Sabemos que es difícil pero nos gustaría que pudieran salir adoptadas juntas .Son preciosas ¿no os parecen?', NULL, '2020-06-01 21:48:40', '2020-06-01 21:49:05'),
(29, 22, 0, 'rvqknKNzhIIFBp8IIw38YEFoVTvbMctItJiJcCQg.jpeg', 'Thom', 'Macho', 'Gato', 'Gato Europeo', '2018-01-06', 0, 8.00, 'Thom llegó al refugio junto a su hermana Lorena. Fueron abandonados en la calle y, por suerte, los recogió y acogió una buena persona que rescata gatos de la calle. Cuidó de ellos hasta que pudieron entrar en la Protectora.\r\n\r\nThom es un buen gato y convive perfectamente con otros gatos. No lo está pasando bien en la Protectora y es muy desconfiado con quien no conoce. Estamos seguros que en un hogar mejoraría, pero necesitará mucha paciencia en su adaptación.\r\n\r\nLo mejor para él sería un hogar sin niños pequeños y con experiencia en gatos tímidos.', NULL, '2020-06-01 21:56:54', '2020-06-01 21:57:18'),
(30, 22, 0, '7hZKJDxgGnKgidHzCYoTnMesksqmQapcZ3XmY97I.jpeg', 'Duck', 'Macho', 'Gato', 'Gato Europeo', '2016-06-01', 0, 6.00, 'Duck fue abandonado en una colonia de gatos con la falsa creencia de que podría sobrevivir. Pero eso nunca es así, los gatos caseros sólo sobreviven en la calle unos pocos meses.\r\nÉl tuvo la suerte de ser recogido por la persona que se encargaba de esa colonia ya que enseguida vio que era un gato doméstico. Así que no sabemos mucho más de su pasado, pero si sabemos que fue duro, pues el estado en el que llegó era bastante malo. El pobre lo debió pasar muy mal en la calle.\r\nDuck es un gato que te enamora desde el segundo cero. Es tranquilo y muy bueno. Le encantan las caricias y, en cuanto puede, se acurruca a tu lado para que no pares de dárselas. Y por supuesto, es imposible resistirse.\r\nAhora Duck se va recuperando y va cogiendo fuerzas. Seguramente su alimentación no fue buena en el pasado y es por eso que tiene gingivitis. Necesitará tratamiento periódicamente.\r\nEsperamos que pronto alguien decida darle una nueva oportunidad. Los gatos tan caseros lo pasan muy mal en el refugio y tememos que Duck se deprima.', NULL, '2020-06-01 22:00:07', '2020-06-01 22:00:42'),
(31, 24, 0, 'xsYeS7fhhZt0JfIwVCtetOAwIKTtyjfsglD9Zi0c.jpeg', 'Teckno', 'Macho', 'Perro', 'Mestizo', '2017-02-22', 1, 15.00, 'Teckno era feliz en su hogar hasta que un día se vio entrando al refugio, su familia se iba a vivir al extranjero y él ya no encajaba en sus planes de futuro. \r\nA Teckno su nombre le queda como anillo al dedo. Pero no os asustéis, es todo un buenazo. Teckno es un perrito de tamaño mediano y con mucha energía y ganas de jugar. Se lleva muy bien con otros perros y es la mar de cariñoso con las personas. \r\n\r\nEs muy jovencito y por ello es ideal una familia joven y con tiempo para dedicarle buenos paseos, juegos y también tranquilidad y calma. Debido a su carácter activo, la estancia de Teckno en el refugio se le hace demasiado estresante y nos gustaría mucho que no tuviera que esperar demasiado tiempo.', NULL, '2020-06-01 22:12:03', '2020-06-01 22:12:55'),
(32, 24, 0, 'nAShwWfySC7iCC8ZinbUKL1s1vrH2udPWuXJtmve.jpeg', 'Sokar', 'Macho', 'Otro', 'Ruso', '2018-01-22', 1, 1.00, 'Sokar es un hámster ruso hijo de Nut, que nos llegó preñada.\r\n\r\nAl principio es muy tímido, sale poco de su casita y casi no se deja ver, pero en seguida se vuelve muy sociable.\r\n\r\nEs muy metódico. Siempre come su desayuno en el mismo orden: queso fresco, fruta, verdura y pienso casero. Y no sólo eso, sino que del pienso deja siempre el arroz integral, que es lo que menos le gusta y, cuando han pasado un par de horas, vuelve al comedero a cogerlo. Normalmente está muy activo a primera hora de la mañana, cuando te acercas a la jaula está de pie, corriendo de un lado a otro cuando te ve, como diciendo: “Hey, ¡¡dame mi desayuno ya!!”. Pero un poco más tarde está un poco más dormido y sale igualmente a por la comida pero no tan nervioso.\r\n\r\nEstá toda la mañana durmiendo y más o menos después de comer (como casi todos los hámsters) vuelve a salir a jugar un poco. Le encanta la rueda, trepar o los tubos de papel higiénico. Le encanta morderlos por dentro y quitar el cartón, así luego lo usa para meterlo en su casa. Luego vuelve a dormir y por la noche es cuando más juega.\r\n\r\nCuando hace frío duerme en su casita, pero cuando hace calor va cambiando de sitio o simplemente en el suelo, eso sí, quitando el sustrato de maiz antes de tumbarse.\r\n\r\nEs que es muy inteligente y muy gracioso, salta mucho, es un malabarista, cuando le hablas te mira, y cuando estás cerca intenta saltar para que le des algo de fruta o verdura. Es adorable.', NULL, '2020-06-01 22:17:05', '2020-06-01 22:17:31'),
(33, 24, 0, 'WMTeIFrYVxWCYYlkCefrWi0TiCTfCf0c3Gn1Wb1I.jpeg', 'Minnie', 'Hembra', 'Ave', 'Ninfa Ancestral', '2014-09-22', 1, 1.00, 'Está revisada, la hemos anillado para mayor seguridad, está desparasitada internamente y externamente. \r\n\r\nSe recogería en Tarragona(Cataluña).', NULL, '2020-06-01 22:20:56', '2020-06-01 22:21:17'),
(34, 22, 0, 'VG5AY0tvMw467bN9udeUFS9REAyBAdVyHpTYVIeM.jpeg', 'Salem', 'Macho', 'Gato', 'Gato Europeo', '2015-02-03', 1, 5.00, 'Salem no ha tenido suerte a lo largo de sus 4 añitos. Hace dos años fue adoptado en otro refugio.  Pero por un problema grave de alergia de su adoptante, ahora está en nuestro refugio buscando una nueva familia.\r\nSalem pasó unos días muy asustado y desubicado. Y es normal, porque para un gato que ha estado en una casa verse en un refugio es un shock muy grande. Además, en el caso de Salem ya es la segunda vez que le ocurre.\r\nPero a pesar de todas estas vivencias, Salem es un gato con un carácter buenísimo. Es dulce y le encantan los mimos. Puede también convivir con niños.\r\nOjalá pronto Salem encuentre una familia que no le falle nunca más.', NULL, '2020-06-02 14:11:14', '2020-06-02 14:11:43'),
(35, 22, 0, 'SNc8ztEizVnkAEoA9IXy2JJeZdIHC3HhezC39yio.jpeg', 'Toby', 'Macho', 'Perro', 'Terrier', '2015-02-07', 1, 4.00, 'Este perrito de tamaño pequeño con expresión tan simpática es Toby, el cual fue abandonado en la calle sin ningún miramiento, posiblemente esa experiencia le ha generado mucha inseguridad hacia las personas. \r\nToby está aprendiendo de nuevo a confiar en los humanos, y para ello necesita que tengan un poco de paciencia para conocerlo, en cuanto te conoce descubres un perrito juguetón, curioso y alegre. Y en el entorno adecuado podrá seguir mejorando sus inseguridades hacia las personas desconocidas. Toby no es adecuado para convivir con niños. Necesita de un adoptante con ganas de conocerlo y darle una oportunidad más que merecida.', NULL, '2020-06-02 14:13:32', '2020-06-02 14:14:04'),
(36, 22, 1, 'AmGawZKa5DkBaJ8ewTbeWcRHsFbU9hV9q6qZkdn2.jpeg', 'Ceniza', 'Hembra', 'Otro', 'Ruso', '2019-02-20', 1, 1.00, 'Ceniza es una hámster rusa buena y tímida que fue abandonada en la calle. Ahora sólo espera ese hogar que tanto se merece.', NULL, '2020-06-02 14:16:51', '2020-06-02 14:17:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Allouch', 'allouchahmed1997@gmail.com', '2020-05-31 18:00:00', '$2y$10$bJbMkcPio8AIHAb5N7h1Y.gfkcOQtihQ9S0kjFO89Yd8t7QzKvs6C', 'Persona', NULL, '2020-05-31 17:15:21', '2020-05-31 17:20:17'),
(2, 'Carlos de Diego', 'carlos_ddg@yahoo.es', '2020-05-31 18:00:00', '$2y$10$ZfWm959FvvRhpBVWumOwhelBDTmCzwYeFauX47qsmXUhJfDyFSm9K', 'Persona', NULL, '2020-05-31 17:16:06', '2020-05-31 17:16:06'),
(3, 'Cándice Cuellar Fonseca', 'candicecuellar@gmail.com', '2020-05-31 18:00:00', '$2y$10$/785jOyzGI2VMq4YsRnzn.ihEVkmHeY6YO64RZ5FGMNoRlYplia0m', 'Persona', NULL, '2020-05-31 17:24:10', '2020-05-31 17:24:10'),
(4, 'Karmina Vanegas Soria', 'karminavanegas@gmail.com', '2020-05-31 18:00:00', '$2y$10$B3q1xNkFQNK.xHQQ86mJVOKAWoScx.VxpKgSiWBIP1ugLweoq5E8a', 'Persona', NULL, '2020-05-31 17:25:47', '2020-05-31 17:25:47'),
(5, 'Merlin Raya Lucero', 'merlinraya@gmail.com', '2020-05-31 18:00:00', '$2y$10$Nksrrn177lgSV6pUnaHDp.SgFDEeIm8w/v8JtJX.0FsI4zmaXPkk2', 'Persona', NULL, '2020-05-31 17:27:09', '2020-05-31 17:27:09'),
(6, 'Quirico Castellanos Badillo', 'quiricocastellanos@gmail.com', '2020-05-31 18:00:00', '$2y$10$ZsLz8Z0qPN7XT0LMp2nSKOujL6kvkHCO1l9ZO4ty9k1a.ABP4aSlm', 'Persona', NULL, '2020-05-31 17:28:10', '2020-05-31 17:28:10'),
(7, 'Gad Montoya Armendáriz', 'gadmontoya@gmail.com', '2020-05-31 18:00:00', '$2y$10$V2Eq/rUJq2x/tGCYPPf4C.duPxMps9L5Snpnxq9PHjMwLTjkTP0..', 'Persona', NULL, '2020-05-31 17:29:33', '2020-05-31 17:29:33'),
(8, 'Frederic Burgos Acevedo', 'fredericburgos@gmail.com', '2020-05-31 18:00:00', '$2y$10$678el4P6Ba/2YrsQ2CuX7.ACLdWFdr75EZF2DT2OdFJ0oiO/UTrXm', 'Persona', NULL, '2020-05-31 17:29:40', '2020-05-31 17:29:40'),
(9, 'Calanit Leal Macías', 'calanitleal@gmail.com', '2020-05-31 18:00:00', '$2y$10$rn34Vv.aq6n64mmh6/2e8emg6kge/LDLVhMagb68sj4Xbs8MnWigC', 'Persona', NULL, '2020-05-31 17:30:49', '2020-05-31 17:30:49'),
(10, 'Mirana Cervántez Valadez', 'miranacervantez@gmail.com', '2020-05-31 18:00:00', '$2y$10$iuEHSjhoiivLYLp/iCr.h.0r.zG7JUgcw9ad.MYuXgG88wokUwUou', 'Persona', NULL, '2020-05-31 17:31:38', '2020-05-31 17:31:38'),
(11, 'Priscilla Vega Munguia', 'priscillavega@gmail.com', '2020-05-31 18:00:00', '$2y$10$uFXZ0PqD/EPYpOtq2D.5xe2pkUtfqFEOTMHDYURfniIRGxHppyVsK', 'Persona', NULL, '2020-05-31 17:32:28', '2020-05-31 17:32:28'),
(12, 'Maha Farías Grijalva', 'mahafarias@gmail.com', '2020-05-31 18:00:00', '$2y$10$FXZEK.V1UbeWED4Ml9oaGeE8TrnnElyj84OZd/YiATqHUI7WWo27S', 'Persona', NULL, '2020-05-31 17:32:39', '2020-05-31 17:32:39'),
(13, 'Alejo Barrios Cabán', 'alejobarrios@gmail.com', '2020-05-31 18:00:00', '$2y$10$zLSCIN79c9rv5XoprV52BuRWv6KVKhElL4ArNXSHzI3si9vrBGHGC', 'Persona', NULL, '2020-05-31 17:34:16', '2020-05-31 17:34:16'),
(14, 'Gilda Arellano Pineda', 'gildaarellano@gmail.com', '2020-05-31 18:00:00', '$2y$10$.c6KmZLhMo4ThnWGkamUee/NUaRAgHBxvf85iSP.qBfHs8QoxHXvC', 'Persona', NULL, '2020-05-31 17:34:30', '2020-05-31 17:34:30'),
(15, 'Eawinda Berrios Mora', 'eawindaberrios@gmail.com', '2020-05-31 18:00:00', '$2y$10$.gOuJEJs9yuZ9C1wEXAAC.CQ7mwo4wF7QUiWVtXaBWCGSidan7S1q', 'Persona', NULL, '2020-05-31 17:35:30', '2020-05-31 17:35:30'),
(16, 'Mili Toledo Zamudio', 'militoledo@gmail.com', '2020-05-31 18:00:00', '$2y$10$Yj3eAGuNYQfSXEYGOuOZHeaxBSutCC0IBrYWUxbQf11HKM.oUw/me', 'Persona', NULL, '2020-05-31 17:36:17', '2020-05-31 17:36:17'),
(17, 'Almira Tirado Trejo', 'almiratirado@gmail.com', '2020-05-31 18:00:00', '$2y$10$clFWcGpur5GXmX7aDP3GAuYCTv1qskZ29SANq1GNxPVwNriAHVimO', 'Persona', NULL, '2020-05-31 17:36:52', '2020-05-31 17:36:52'),
(18, 'Casimiro Molina Saucedo', 'casimiromolina@gmail.com', '2020-05-31 18:00:00', '$2y$10$UOWkf5kT8YyI2UhjbSQSRu9NpwAyK8CZkr/KpIvRhjLpUuxdj/wxu', 'Persona', NULL, '2020-05-31 17:37:20', '2020-05-31 17:37:20'),
(19, 'Antares Ledesma Soto', 'antaresledesma@gmail.com', '2020-05-31 18:00:00', '$2y$10$HXfQgPmbp6YMGabvp1WTbOQ7ZRLFBGpPul/O3abwg4iXw/uEQU2jG', 'Persona', NULL, '2020-05-31 17:37:58', '2020-05-31 17:37:58'),
(20, 'Dédalo Espinosa Rosado', 'dedaloespinosa@gmail.com', '2020-05-31 18:00:00', '$2y$10$jKmgsRnbu2O6gxVbVwwni..Ilu9.HOIyS8Fz0Ox2IwPCvPASwv43q', 'Persona', NULL, '2020-05-31 17:38:27', '2020-05-31 17:38:27'),
(21, 'Protectora BCN', 'protectorabcn@gmail.com', '2020-05-31 18:00:00', '$2y$10$ZGK6r71j8dW5hViosH7CXenQ7McT/r7ZggIEGrpB6MbHjtmRCQMQy', 'Entidad', NULL, '2020-05-31 17:41:56', '2020-05-31 17:41:56'),
(22, 'Help Guau', 'helpguau@gmail.com', '2020-05-31 18:00:00', '$2y$10$vuxMng8TJ0zuFU4t59ctaOckjbhakfAtKt.A2R8ibZJVGzG5.TPXi', 'Entidad', NULL, '2020-05-31 17:42:00', '2020-05-31 17:42:00'),
(23, 'Alba Online', 'albaonline@gmail.com', '2020-05-31 18:00:00', '$2y$10$m7ii9vZH5H4JcQ1vPYFIMuGBy342YINIzgB45Zy6O5wjGk/jO8Eou', 'Entidad', NULL, '2020-06-01 20:55:57', '2020-06-01 20:55:57'),
(24, 'Sociedad Canina Galega', 'caninagalega@gmail.com', '2020-05-31 18:00:00', '$2y$10$HYwFcg8Dgt1KOaizZoocOO6LfI5auAupexkAIzMt0srhso8vLwxze', 'Entidad', NULL, '2020-06-01 20:57:04', '2020-06-01 20:57:04'),
(25, 'Arca de Noé', 'arcanoe@gmail.com', '2020-05-31 18:00:00', '$2y$10$xWJ9uQPnn0IzomIzYBGZOOZ.gYDvKeC09bm4OgffEzOHNL534sGDu', 'Entidad', NULL, '2020-06-01 20:57:48', '2020-06-01 20:57:48'),
(26, 'Miguel Llabrés Rovellada', 'mllabres86@gmail.com', '2020-06-03 18:12:53', '$2y$10$vuxMng8TJ0zuFU4t59ctaOckjbhakfAtKt.A2R8ibZJVGzG5.TPXi', 'Persona', NULL, '2020-06-03 17:50:59', '2020-06-03 18:12:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `id_user`, `name`, `city`, `picture`, `phone_number`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahmed Allouch', 'Barcelona', 'default_user_image.png', '651500709', 'allouchahmed1997@gmail.com', NULL, '2020-05-31 17:15:21', '2020-05-31 17:22:35'),
(2, 2, 'Carlos de Diego', 'Barcelona', 'wg0o9QMjeoAbOlL6VzBAwsegfuW5eHKji1Pcc433.jpeg', '677543526', 'carlos_ddg@yahoo.es', NULL, '2020-05-31 17:16:06', '2020-06-01 19:54:13'),
(3, 3, 'Cándice Cuellar Fonseca', 'Madrid', 'Oj2yku5o5f4wfELX2VDACEMHwefCegfdzyLLnsA5.png', '655324178', 'candicecuellar@gmail.com', NULL, '2020-05-31 17:24:10', '2020-06-01 19:57:26'),
(4, 4, 'Karmina Vanegas Soria', 'Madrid', 'default_user_image.png', '749250735', 'karminavanegas@gmail.com', NULL, '2020-05-31 17:25:47', '2020-05-31 17:27:40'),
(5, 5, 'Merlin Raya Lucero', 'Sevilla', 'WgxVqPzBjkDRSpvcK8Q7GD07uL7NScGiSNnlwX2J.jpeg', '693847362', 'merlinraya@gmail.com', NULL, '2020-05-31 17:27:09', '2020-06-01 19:58:10'),
(6, 6, 'Quirico Castellanos Badillo', 'Barcelona', 'default_user_image.png', '636259952', 'quiricocastellanos@gmail.com', NULL, '2020-05-31 17:28:10', '2020-05-31 17:28:52'),
(7, 7, 'Gad Montoya Armendáriz', 'Sevilla', '9IurgMF0XXPvpInIU3DPH4b5AVxt8rgyCldZ5SzX.jpeg', '609246709', 'gadmontoya@gmail.com', NULL, '2020-05-31 17:29:33', '2020-06-01 19:58:50'),
(8, 8, 'Frederic Burgos Acevedo', 'Murcia', 'default_user_image.png', '628736452', 'fredericburgos@gmail.com', NULL, '2020-05-31 17:29:40', '2020-05-31 17:30:26'),
(9, 9, 'Calanit Leal Macías', 'Barcelona', '1N040yceXcTZCj1PoRlIL5207YHhe3DQC5H8gW84.jpeg', '685631380', 'calanitleal@gmail.com', NULL, '2020-05-31 17:30:49', '2020-06-01 19:59:35'),
(10, 10, 'Mirana Cervántez Valadez', 'Galicia', 'default_user_image.png', '623890736', 'miranacervantez@gmail.com', NULL, '2020-05-31 17:31:38', '2020-05-31 17:32:12'),
(11, 11, 'Priscilla Vega Munguia', 'Galicia', 'g1WbGYuBgdY0GOQ8ZWtROEiHQ2p127vMazwmex25.jpeg', '678248775', 'priscillavega@gmail.com', NULL, '2020-05-31 17:32:28', '2020-06-01 20:00:19'),
(12, 12, 'Maha Farías Grijalva', 'País Vasco', 'eEoOFruJl8gyX3q9EBUk18ffBVDSD1u2nWmZLDuH.jpeg', '668526372', 'mahafarias@gmail.com', NULL, '2020-05-31 17:32:39', '2020-06-01 20:01:00'),
(13, 13, 'Alejo Barrios Cabán', 'Granada', 'default_user_image.png', '728040894', 'alejobarrios@gmail.com', NULL, '2020-05-31 17:34:16', '2020-05-31 17:34:52'),
(14, 14, 'Gilda Arellano Pineda', 'Valencia', 'default_user_image.png', '611827362', 'gildaarellano@gmail.com', NULL, '2020-05-31 17:34:30', '2020-05-31 17:35:50'),
(15, 15, 'Eawinda Berrios Mora', 'Sevilla', 'WZG4Kal5PAEpIMbtgAM2RuSDMjH5K5mdcXQjm92k.jpeg', '736026868', 'eawindaberrios@gmail.com', NULL, '2020-05-31 17:35:30', '2020-06-01 20:02:57'),
(16, 16, 'Mili Toledo Zamudio', 'Granada', 'default_user_image.png', '625738291', 'militoledo@gmail.com', NULL, '2020-05-31 17:36:17', '2020-05-31 17:36:50'),
(17, 17, 'Almira Tirado Trejo', 'Oviedo', 'Spv6BaTdqYTMS9PVoUjzH3VNoG4qFRReAYTL0S1B.jpeg', '723283115', 'almiratirado@gmail.com', NULL, '2020-05-31 17:36:52', '2020-06-01 20:04:12'),
(18, 18, 'Casimiro Molina Saucedo', 'Lleida', 'default_user_image.png', '736728392', 'casimiromolina@gmail.com', NULL, '2020-05-31 17:37:20', '2020-05-31 17:37:57'),
(19, 19, 'Antares Ledesma Soto', 'Burgos', 'p7Qs2qvs75XBNt0WVPspkqRcP4FslTfJzshF5P8S.jpeg', '776901066', 'antaresledesma@gmail.com', NULL, '2020-05-31 17:37:58', '2020-06-01 20:06:53'),
(20, 20, 'Dédalo Espinosa Rosado', 'Toledo', 'default_user_image.png', '627283928', 'dedaloespinosa@gmail.com', NULL, '2020-05-31 17:38:27', '2020-05-31 17:39:08'),
(21, 26, 'Miguel Llabrés Rovellada', NULL, 'default_user_image.png', NULL, 'mllabres86@gmail.com', NULL, '2020-06-03 17:50:59', '2020-06-03 17:50:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entity_profiles`
--
ALTER TABLE `entity_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entity_profiles_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pet_pictures`
--
ALTER TABLE `pet_pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_pictures_id_pet_foreign` (`id_pet`);

--
-- Indices de la tabla `pet_profiles`
--
ALTER TABLE `pet_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_profiles_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entity_profiles`
--
ALTER TABLE `entity_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pet_pictures`
--
ALTER TABLE `pet_pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `pet_profiles`
--
ALTER TABLE `pet_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entity_profiles`
--
ALTER TABLE `entity_profiles`
  ADD CONSTRAINT `entity_profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `pet_pictures`
--
ALTER TABLE `pet_pictures`
  ADD CONSTRAINT `pet_pictures_id_pet_foreign` FOREIGN KEY (`id_pet`) REFERENCES `pet_profiles` (`id`);

--
-- Filtros para la tabla `pet_profiles`
--
ALTER TABLE `pet_profiles`
  ADD CONSTRAINT `pet_profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
