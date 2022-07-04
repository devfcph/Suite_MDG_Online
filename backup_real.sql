
DROP TABLE IF EXISTS `accions`;

CREATE TABLE `accions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `accions`
--

LOCK TABLES `accions` WRITE;
/*!40000 ALTER TABLE `accions` DISABLE KEYS */;
INSERT INTO `accions` VALUES (1,'Seguí operando',1,'2021-07-16 04:23:37',NULL,'ab3e224e322611ecab3c089798ba0234'),(2,'Dejé de operar',1,'2021-07-16 04:23:53',NULL,'ab3e23c8322611ecab3c089798ba0234'),(3,'Cumplí mi plan',1,'2021-07-16 04:24:16',NULL,'ab3e2474322611ecab3c089798ba0234'),(4,'Me descontrolé',1,'2021-07-16 04:24:42',NULL,'ab3e24a7322611ecab3c089798ba0234'),(5,'Quemé mi cuenta',1,'2021-07-16 04:25:02',NULL,'ab3e24d4322611ecab3c089798ba0234');
/*!40000 ALTER TABLE `accions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ao_posicions`
--

DROP TABLE IF EXISTS `ao_posicions`;

CREATE TABLE `ao_posicions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `ao_posicions`
--

LOCK TABLES `ao_posicions` WRITE;
/*!40000 ALTER TABLE `ao_posicions` DISABLE KEYS */;
INSERT INTO `ao_posicions` VALUES (1,'Sobre la línea del 0',1,'2021-07-16 04:29:26',NULL,'1cf642b7322711ecab3c089798ba0234'),(2,'Debajo de la línea del 0',1,'2021-07-16 04:29:44',NULL,'1cf64398322711ecab3c089798ba0234'),(3,'No lo consideré',1,'2021-07-16 04:29:57',NULL,'1cf64427322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `ao_posicions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `awesome_oscilators`
--

DROP TABLE IF EXISTS `awesome_oscilators`;

CREATE TABLE `awesome_oscilators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `awesome_oscilators`
--

LOCK TABLES `awesome_oscilators` WRITE;
/*!40000 ALTER TABLE `awesome_oscilators` DISABLE KEYS */;
INSERT INTO `awesome_oscilators` VALUES (1,'Primera Confirmación',1,'2021-07-16 04:34:08',NULL,'21553d5a322711ecab3c089798ba0234'),(2,'Segunda Confirmación',1,'2021-07-16 04:34:22',NULL,'21553e39322711ecab3c089798ba0234'),(3,'Barra de color contrario',1,'2021-07-16 04:34:37',NULL,'21553ebd322711ecab3c089798ba0234'),(4,'No lo consideré',1,'2021-07-16 04:34:49',NULL,'21553ef3322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `awesome_oscilators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandas_bollingers`
--

DROP TABLE IF EXISTS `bandas_bollingers`;

CREATE TABLE `bandas_bollingers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `bandas_bollingers`
--

LOCK TABLES `bandas_bollingers` WRITE;
/*!40000 ALTER TABLE `bandas_bollingers` DISABLE KEYS */;
INSERT INTO `bandas_bollingers` VALUES (1,'Sobreventa',1,'2021-07-16 04:48:43',NULL,'2657fd71322711ecab3c089798ba0234'),(2,'Sobrecompra',1,'2021-07-16 04:48:51',NULL,'2657fead322711ecab3c089798ba0234'),(3,'Línea central',1,'2021-07-16 04:49:14',NULL,'2657ff4e322711ecab3c089798ba0234'),(4,'No lo consideré',1,'2021-07-16 04:51:09',NULL,'2657ff9a322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `bandas_bollingers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cruce_estocasticos`
--

DROP TABLE IF EXISTS `cruce_estocasticos`;

CREATE TABLE `cruce_estocasticos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `cruce_estocasticos`
--

LOCK TABLES `cruce_estocasticos` WRITE;
/*!40000 ALTER TABLE `cruce_estocasticos` DISABLE KEYS */;
INSERT INTO `cruce_estocasticos` VALUES (1,'Cruce por arriba de la línea del 85',1,'2021-07-16 04:53:48',NULL,'29c404fa322711ecab3c089798ba0234'),(2,'Cruce cerca de la linea del 85',1,'2021-07-16 04:54:12',NULL,'29c4073b322711ecab3c089798ba0234'),(3,'Cruce por debajo de la línea del 15',1,'2021-07-16 04:54:29',NULL,'29c407f1322711ecab3c089798ba0234'),(4,'Cruce cerca de la línea del 15',1,'2021-07-16 04:54:45',NULL,'29c4082d322711ecab3c089798ba0234'),(5,'No lo consideré',1,'2021-07-16 04:55:06',NULL,'29c4085d322711ecab3c089798ba0234'),(6,'Cruce quebrado',1,'2021-07-16 05:14:58',NULL,'29c4088e322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `cruce_estocasticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divisas`
--

DROP TABLE IF EXISTS `divisas`;

CREATE TABLE `divisas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `divisas`
--

LOCK TABLES `divisas` WRITE;
/*!40000 ALTER TABLE `divisas` DISABLE KEYS */;
INSERT INTO `divisas` VALUES (1,'AUD-CAD',1,'2021-07-16 04:56:31',NULL,'2d36945a322711ecab3c089798ba0234'),(2,'AUD-CHF',1,'2021-07-16 04:57:03',NULL,'2d3695f1322711ecab3c089798ba0234'),(3,'AUD-JPY',1,'2021-07-16 04:57:32',NULL,'2d369687322711ecab3c089798ba0234'),(4,'AUD-NZD',1,'2021-07-16 04:57:45',NULL,'2d3696b6322711ecab3c089798ba0234'),(5,'AUD-USD',1,'2021-07-16 04:57:58',NULL,'2d3696ec322711ecab3c089798ba0234'),(6,'CAD-CHF',1,'2021-07-16 04:58:45',NULL,'2d369716322711ecab3c089798ba0234'),(7,'CAD-JPY',1,'2021-07-16 04:59:43',NULL,'2d36973d322711ecab3c089798ba0234'),(8,'CHF-JPY',1,'2021-07-16 04:59:46',NULL,'2d369763322711ecab3c089798ba0234'),(9,'EUR-AUD',1,'2021-07-16 04:59:49',NULL,'2d369790322711ecab3c089798ba0234'),(10,'EUR-CAD',1,'2021-07-16 05:00:08',NULL,'2d3697b6322711ecab3c089798ba0234'),(11,'EUR-GBP',1,'2021-07-16 05:00:17',NULL,'2d3697de322711ecab3c089798ba0234'),(12,'EUR-JPY',1,'2021-07-16 05:00:35',NULL,'2d369806322711ecab3c089798ba0234'),(13,'EUR-NZD',1,'2021-07-16 05:00:55',NULL,'2d36982d322711ecab3c089798ba0234'),(14,'EUR-USD',1,'2021-07-16 05:01:16',NULL,'2d369853322711ecab3c089798ba0234'),(15,'GBP-AUD',1,'2021-07-16 05:01:39',NULL,'2d369879322711ecab3c089798ba0234'),(16,'GBP-CAD',1,'2021-07-16 05:04:12',NULL,'2d3698a1322711ecab3c089798ba0234'),(17,'GBP-CHF',1,'2021-07-16 05:04:21',NULL,'2d3698c9322711ecab3c089798ba0234'),(18,'GBP-JPY',1,'2021-07-16 05:04:46',NULL,'2d3698f4322711ecab3c089798ba0234'),(19,'GBP-NZD',1,'2021-07-16 05:05:04',NULL,'2d369920322711ecab3c089798ba0234'),(20,'GBP-USD',1,'2021-07-16 05:05:33',NULL,'2d369948322711ecab3c089798ba0234'),(21,'NZD-USD',1,'2021-07-16 05:05:53',NULL,'2d369972322711ecab3c089798ba0234'),(22,'USD-CAD',1,'2021-07-16 05:06:11',NULL,'2d36999c322711ecab3c089798ba0234'),(23,'USD-CHF',1,'2021-07-16 05:06:31',NULL,'2d3699c3322711ecab3c089798ba0234'),(24,'USD-JPY',1,'2021-07-16 05:07:16',NULL,'2d3699eb322711ecab3c089798ba0234'),(25,'USD-NOK',1,'2021-07-16 05:07:26',NULL,'2d369a14322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `divisas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emocions`
--

DROP TABLE IF EXISTS `emocions`;

CREATE TABLE `emocions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `emocions`
--

LOCK TABLES `emocions` WRITE;
/*!40000 ALTER TABLE `emocions` DISABLE KEYS */;
INSERT INTO `emocions` VALUES (1,'Precipitación',1,'2021-07-16 05:09:18',NULL,'318e843d322711ecab3c089798ba0234'),(2,'Miedo',1,'2021-07-16 05:12:21',NULL,'318e86e3322711ecab3c089798ba0234'),(3,'Exceso de confianza',1,'2021-07-16 05:13:03',NULL,'318e8831322711ecab3c089798ba0234'),(4,'Rabia',1,'2021-07-16 05:13:00',NULL,'318e88c2322711ecab3c089798ba0234'),(5,'Venganza',1,'2021-07-16 05:12:56',NULL,'318e8935322711ecab3c089798ba0234'),(6,'Frustración',1,'2021-07-16 05:12:52',NULL,'318e89a5322711ecab3c089798ba0234'),(7,'Seguridad',1,'2021-07-16 05:12:49',NULL,'318e8a0d322711ecab3c089798ba0234'),(8,'Euforia',1,'2021-07-16 05:12:46',NULL,'318e8a79322711ecab3c089798ba0234'),(9,'Alegría',1,'2021-07-16 05:12:42',NULL,'318e8aed322711ecab3c089798ba0234'),(10,'Estoy haciendo las cosas bien',1,'2021-07-16 05:12:39',NULL,'318e8b59322711ecab3c089798ba0234'),(11,'Estoy haciendo las cosas mal',1,'2021-07-16 05:12:36',NULL,'318e8bcd322711ecab3c089798ba0234'),(12,'Quiero romper todo',1,'2021-07-16 05:12:32',NULL,'318e8c39322711ecab3c089798ba0234'),(13,'No sé cómo me sentí',1,'2021-07-16 05:12:28',NULL,'318e8ca9322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `emocions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estocasticos`
--

DROP TABLE IF EXISTS `estocasticos`;

CREATE TABLE `estocasticos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `estocasticos`
--

LOCK TABLES `estocasticos` WRITE;
/*!40000 ALTER TABLE `estocasticos` DISABLE KEYS */;
INSERT INTO `estocasticos` VALUES (1,'Armónico',1,'2021-07-16 05:14:22',NULL,'347f3032322711ecab3c089798ba0234'),(2,'No armónico',1,'2021-07-16 05:14:26',NULL,'347f3187322711ecab3c089798ba0234'),(3,'Sobrecompra',1,'2021-07-16 05:14:29',NULL,'347f3213322711ecab3c089798ba0234'),(4,'Sobreventa',1,'2021-07-16 05:14:32',NULL,'347f324e322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `estocasticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ;


--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes_test`
--

DROP TABLE IF EXISTS `imagenes_test`;

CREATE TABLE `imagenes_test` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `imagen` longblob,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `imagenes_test`
--

LOCK TABLES `imagenes_test` WRITE;
/*!40000 ALTER TABLE `imagenes_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_07_12_232717_create_sessions_table',1),(7,'2021_07_16_035953_create_divisas_table',2),(8,'2021_07_16_040113_create_sesiones_table',2),(9,'2021_07_16_040135_create_periodovelas_table',2),(10,'2021_07_16_040207_create_tiempooperaciones_table',2),(11,'2021_07_16_040226_create_tipooperacion_table',2),(12,'2021_07_16_040252_create_soportesresistencias_table',2),(13,'2021_07_16_040323_create_bandasbollinger_table',2),(14,'2021_07_16_040346_create_awesomeoscilator_table',2),(15,'2021_07_16_040431_create_aoposicion_table',2),(16,'2021_07_16_040444_create_estocastico_table',2),(17,'2021_07_16_040503_create_cruceestocastico_table',2),(18,'2021_07_16_041047_create_patronvela_table',2),(19,'2021_07_16_041100_create_volatilidad_table',2),(20,'2021_07_16_041114_create_tendencia_table',2),(21,'2021_07_16_041148_create_tipoprofit_table',2),(22,'2021_07_16_041225_create_emociones_table',2),(23,'2021_07_16_041255_create_aftertrade_table',2),(24,'2021_07_27_044811_create_trades_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ;


--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patron_velas`
--

DROP TABLE IF EXISTS `patron_velas`;

CREATE TABLE `patron_velas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `patron_velas`
--

LOCK TABLES `patron_velas` WRITE;
/*!40000 ALTER TABLE `patron_velas` DISABLE KEYS */;
INSERT INTO `patron_velas` VALUES (1,'Nivel alto',1,'2021-07-16 05:19:50',NULL,'3c6465b5322711ecab3c089798ba0234'),(2,'Nivel medio',1,'2021-07-16 05:19:54',NULL,'3c64675d322711ecab3c089798ba0234'),(3,'Nivel bajo',1,'2021-07-16 05:19:57',NULL,'3c646809322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `patron_velas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodovelas`
--

DROP TABLE IF EXISTS `periodovelas`;

CREATE TABLE `periodovelas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `periodovelas`
--

LOCK TABLES `periodovelas` WRITE;
/*!40000 ALTER TABLE `periodovelas` DISABLE KEYS */;
INSERT INTO `periodovelas` VALUES (1,'5 segundos',1,NULL,NULL,'3f2e58e7322711ecab3c089798ba0234'),(2,'15 segundos',1,NULL,NULL,'3f2e5a88322711ecab3c089798ba0234'),(3,'30 segundos',1,NULL,NULL,'3f2e5b19322711ecab3c089798ba0234'),(4,'1 minuto',1,NULL,NULL,'3f2e5b4e322711ecab3c089798ba0234'),(5,'2 minutos',1,NULL,NULL,'3f2e5b7b322711ecab3c089798ba0234'),(6,'5 minutos',1,NULL,NULL,'3f2e5ba4322711ecab3c089798ba0234'),(7,'10 minutos',1,NULL,NULL,'3f2e5bce322711ecab3c089798ba0234'),(8,'15 minutos',1,NULL,NULL,'3f2e5bf7322711ecab3c089798ba0234'),(9,'30 minutos',1,NULL,NULL,'3f2e5c27322711ecab3c089798ba0234'),(10,'1 hora',1,NULL,NULL,'3f2e5c4f322711ecab3c089798ba0234'),(11,'2 horas',1,NULL,NULL,'3f2e5c7c322711ecab3c089798ba0234'),(12,'4 horas',1,NULL,NULL,'3f2e5ca9322711ecab3c089798ba0234'),(13,'1 día',1,NULL,NULL,'3f2e5cd6322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `periodovelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ;


--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psicotrading_videos`
--

DROP TABLE IF EXISTS `psicotrading_videos`;

CREATE TABLE `psicotrading_videos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `sys_guid` varchar(40),
  `titulo` varchar(150) DEFAULT NULL,
  `link` varchar(1024) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `psicotrading` tinyint(1) DEFAULT NULL,
  `duracion` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `psicotrading_videos`
--

LOCK TABLES `psicotrading_videos` WRITE;
/*!40000 ALTER TABLE `psicotrading_videos` DISABLE KEYS */;
INSERT INTO `psicotrading_videos` VALUES (1,'2021-11-04 00:34:19',NULL,'3d48d32e3d3911eca177089798ba0234','Como usar el Plan de Trading','https://www.youtube.com/embed/SZCrN5pe3og?start=3',1,NULL,NULL,0,NULL),(2,'2021-11-04 00:34:19',NULL,'3d498dd33d3911eca177089798ba0234','Como marcar Soportes y Resistencias','https://www.youtube.com/embed/s0-6at8AFMs?start=6',1,NULL,NULL,0,NULL),(3,'2021-11-04 00:34:19',NULL,'3d4a2a413d3911eca177089798ba0234','Explicación Completa Estrategia','https://www.youtube.com/embed/s0-6at8AFMs?start=3',1,NULL,NULL,0,NULL),(4,'2021-11-04 00:34:19',NULL,'3d4ae55d3d3911eca177089798ba0234','Explicación Señales e Indicador Estocástico','https://www.youtube.com/embed/APtWR7vLrVw?start=2',1,NULL,NULL,0,NULL),(5,'2021-11-04 00:34:19',NULL,'3d4b75513d3911eca177089798ba0234','Como leer las Señales del Canal VIP','https://www.youtube.com/embed/FmD6vsLVsYE?start=4',1,NULL,NULL,0,NULL),(6,'2021-11-13 23:31:24',NULL,'1b8cb9c8450c11ec99f3089798ba0234','- ¡Quiero Hacer Trading!','https://www.youtube.com/embed/xPitiFfA2TA?start=5',1,'Como llega la Mayoría de los Trader ','2021-06-09',1,'32 MINUTOS'),(7,'2021-11-13 23:31:24',NULL,'1b8ce258450c11ec99f3089798ba0234','- Identificar los Demonios Internos','https://www.youtube.com/embed/0P28lUVYA_c?start=2',1,'Como podemos controlar e identificar ','2021-07-07',1,'30 MINUTOS'),(8,'2021-11-13 23:48:11',NULL,'739ce053450e11ec99f3089798ba0234','- Gestión Emocional','https://www.youtube.com/embed/jeD89qgKb9s?start=4',1,'El Proceso Interno que vive cada Trader ','2021-07-14',1,'36 MINUTOS'),(9,'2021-11-13 23:48:11',NULL,'739d3482450e11ec99f3089798ba0234','- Trading en la Zona','https://www.youtube.com/embed/k1iEq47yO0Y?start=9',1,'Tips y Consejos del Libro Trading en ','2021-07-28',1,'31 MINUTOS'),(10,'2021-11-13 23:48:11',NULL,'739d473d450e11ec99f3089798ba0234','- Factores para Gestión Emocional','https://www.youtube.com/embed/o15WlCz7Is4?start=8',1,'Los 3 Factores que nos Ayudan a ','2021-08-18',1,'30 MINUTOS'),(11,'2021-11-13 23:48:11',NULL,'739d5db1450e11ec99f3089798ba0234','- Pasos para Mejorar Nuestro Trading','https://www.youtube.com/embed/vNHZseGaxFQ?start=11',1,'Los 10 pasos que necesitamos ','2021-08-25',1,'39 MINUTOS'),(12,'2021-11-13 23:48:11',NULL,'739d7089450e11ec99f3089798ba0234','- Pasos para Mejorar Nuestro Trading (Parte2)','https://www.youtube.com/embed/cdd1jZMoeVk?start=9',1,'Complementa los 10 pasos,','2021-09-01',1,'30 MINUTOS'),(13,'2021-11-14 00:03:38',NULL,'9c4fb919451011ec99f3089798ba0234','- ¿Quién Opera con Usted?','https://www.youtube.com/embed/fNv8dbUJbEg',1,'Repaso de algunos Conceptos Del Libro Pensar Rápido, Pensar Despacio de Daniel Kahneman','2021-09-08',1,'34 MINUTOS'),(14,'2021-11-14 00:03:38',NULL,'9c50058e451011ec99f3089798ba0234','- ¿Cómo Aprender?','https://www.youtube.com/embed/DwRoJuXe_Ng?start=43',1,'La importancia de Crear Mapas Mentales que nos permitan aprender de una Manera Diferente','2021-09-21',1,'31 MINUTOS'),(15,'2021-11-14 00:03:38',NULL,'9c504bc5451011ec99f3089798ba0234','- ¿Cómo Puedo Mejorar Mi Trading?','https://www.youtube.com/embed/n3DlUUACAwY?start=13',1,'Como Realizar Pequeñas Mejoras Inteligentes, basado en el Libro Hábitos Atómicos de James Clear','2021-09-30',1,'35 MINUTOS'),(16,'2021-11-14 00:03:38',NULL,'9c505d59451011ec99f3089798ba0234','- El Hábito que puede Cambiar Su Vida Financiera','https://www.youtube.com/embed/1cEi6hnZrT4?start=3',1,'Como Lograr la Conciencia Financiera ocupando solo 1 Minuto al día','2021-10-06',1,'35 MINUTOS'),(17,'2021-11-14 00:03:38',NULL,'9c506b76451011ec99f3089798ba0234','- Método Sedona','https://www.youtube.com/embed/5uzEFgqMhKc?start=18',1,'Explica Método que Ayuda a Soltar Nuestros Sentimientos por Voluntad Propia','2021-03-31',1,'35 MINUTOS');
/*!40000 ALTER TABLE `psicotrading_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesions`
--

DROP TABLE IF EXISTS `sesions`;

CREATE TABLE `sesions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `sesions`
--

LOCK TABLES `sesions` WRITE;
/*!40000 ALTER TABLE `sesions` DISABLE KEYS */;
INSERT INTO `sesions` VALUES (1,'Matutina',1,'2021-07-16 04:21:45','2021-07-16 04:21:49','ad52d5c0322911ecab3c089798ba0234'),(2,'Nocturna',1,'2021-07-16 04:22:19','2021-07-16 04:22:21','ad52d67f322911ecab3c089798ba0234'),(3,'Madrugada',1,'2021-07-16 04:22:23','2021-07-16 04:22:26','ad52d6ff322911ecab3c089798ba0234'),(4,'Personal',1,'2021-07-16 04:22:40','2021-07-16 04:22:42','ad52d74f322911ecab3c089798ba0234');
/*!40000 ALTER TABLE `sesions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ;


--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soportesresistencias`
--

DROP TABLE IF EXISTS `soportesresistencias`;

CREATE TABLE `soportesresistencias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `soportesresistencias`
--

LOCK TABLES `soportesresistencias` WRITE;
/*!40000 ALTER TABLE `soportesresistencias` DISABLE KEYS */;
INSERT INTO `soportesresistencias` VALUES (1,'Insitucional Fuerte',1,NULL,NULL,'44ad2490322711ecab3c089798ba0234'),(2,'Institucional Normal',1,NULL,NULL,'44ad2611322711ecab3c089798ba0234'),(3,'En Mechas',1,NULL,NULL,'44ad26a9322711ecab3c089798ba0234'),(4,'Microsoporte',1,NULL,NULL,'44ad26da322711ecab3c089798ba0234'),(5,'Microresistencia',1,NULL,NULL,'44ad2707322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `soportesresistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tendencias`
--

DROP TABLE IF EXISTS `tendencias`;

CREATE TABLE `tendencias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `tendencias`
--

LOCK TABLES `tendencias` WRITE;
/*!40000 ALTER TABLE `tendencias` DISABLE KEYS */;
INSERT INTO `tendencias` VALUES (1,'Normal bajista',1,NULL,NULL,'4dcf5b9f322711ecab3c089798ba0234'),(2,'Normal alcista',1,NULL,NULL,'4dcf5ca7322711ecab3c089798ba0234'),(3,'Fuerte bajista',1,NULL,NULL,'4dcf5d27322711ecab3c089798ba0234'),(4,'Fuerte alcista',1,NULL,NULL,'4dcf5d5c322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `tendencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiempooperaciones`
--

DROP TABLE IF EXISTS `tiempooperaciones`;

CREATE TABLE `tiempooperaciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `tiempooperaciones`
--

LOCK TABLES `tiempooperaciones` WRITE;
/*!40000 ALTER TABLE `tiempooperaciones` DISABLE KEYS */;
INSERT INTO `tiempooperaciones` VALUES (1,'1er reloj',1,NULL,NULL,'524528a1322711ecab3c089798ba0234'),(2,'2do reloj',1,NULL,NULL,'52452a63322711ecab3c089798ba0234'),(3,'3er reloj',1,NULL,NULL,'52452b18322711ecab3c089798ba0234'),(4,'4to reloj',1,NULL,NULL,'52452b4d322711ecab3c089798ba0234'),(5,'5to reloj',1,NULL,NULL,'52452b79322711ecab3c089798ba0234'),(6,'Otra temporalidad',1,NULL,NULL,'52452bad322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `tiempooperaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipooperacions`
--

DROP TABLE IF EXISTS `tipooperacions`;

CREATE TABLE `tipooperacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `tipooperacions`
--

LOCK TABLES `tipooperacions` WRITE;
/*!40000 ALTER TABLE `tipooperacions` DISABLE KEYS */;
INSERT INTO `tipooperacions` VALUES (1,'Compra',1,NULL,NULL,'554688be322711ecab3c089798ba0234'),(2,'Venta',1,NULL,NULL,'554689ec322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `tipooperacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoprofits`
--

DROP TABLE IF EXISTS `tipoprofits`;

CREATE TABLE `tipoprofits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `tipoprofits`
--

LOCK TABLES `tipoprofits` WRITE;
/*!40000 ALTER TABLE `tipoprofits` DISABLE KEYS */;
INSERT INTO `tipoprofits` VALUES (1,'Ganada',1,NULL,NULL,'58e9a47c322711ecab3c089798ba0234'),(2,'Perdida',1,NULL,NULL,'58e9a5db322711ecab3c089798ba0234'),(3,'Empatada',1,NULL,NULL,'58e9a660322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `tipoprofits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trades`
--

DROP TABLE IF EXISTS `trades`;

CREATE TABLE `trades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fechaTrade` datetime NOT NULL,
  `horaTrade` varchar(191) NOT NULL,
  `inversion` decimal(18,2) NOT NULL,
  `porcentajePago` decimal(18,2) NOT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `idAfterTrade` int DEFAULT NULL,
  `idAOPosicion` int DEFAULT NULL,
  `idBandasBollinger` int DEFAULT NULL,
  `idCruceEstocastico` int DEFAULT NULL,
  `idDivisa` int NOT NULL,
  `idEmociones` int DEFAULT NULL,
  `idEstocastico` int DEFAULT NULL,
  `idPatronVela` int DEFAULT NULL,
  `idPeriodoVela` int NOT NULL,
  `idSesion` int NOT NULL,
  `idSoportesResistencias` int DEFAULT NULL,
  `idTendencia` int DEFAULT NULL,
  `idTiempoOperacion` int NOT NULL,
  `idTipoOperacion` int NOT NULL,
  `idTipoProfit` int NOT NULL,
  `idVolatilidad` int DEFAULT NULL,
  `idUsers` int NOT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  `idAOConfirmacion` int DEFAULT NULL,
  `esNoticia` tinyint(1) DEFAULT NULL,
  `imagenbase64` longblob,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `trades`
--

LOCK TABLES `trades` WRITE;
/*!40000 ALTER TABLE `trades` DISABLE KEYS */;
/*!40000 ALTER TABLE `trades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40),
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `sys_guid_UNIQUE` (`sys_guid`)
) ;


--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ADMINISTRADOR','admin@me.com',NULL,'$2y$10$nKAPMgOnWmy4xrXiLAwxD.dHLJoMpEi/v0cNLfniVvF3VzHHMASem',NULL,NULL,NULL,NULL,NULL,'2021-11-13 07:55:30','2021-11-13 07:55:30','c8018693442411ec99f3089798ba0234'),(2,'MANEJADOR DE CONTENIDO','contenido@me.com',NULL,'$2y$10$qN75fLaEn.g2csUXqm9Pr.U0nu4cl8oGY621amBaqf4So5sDpA7Ay',NULL,NULL,NULL,NULL,NULL,'2021-11-13 10:10:13','2021-11-13 10:10:13','99a0e93b443711ec99f3089798ba0234'),(3,'TESTER','tester@me.com',NULL,'$2y$10$nRi/FtzKxo0SnEzli7U0oeBvxJcvk.unKSUZ3.4W5EvJHTcMtYkPW',NULL,NULL,NULL,NULL,NULL,'2021-11-16 11:35:34','2021-11-16 11:35:34','0584a632469f11ec99f3089798ba0234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_trades_detalles_todo`
--

DROP TABLE IF EXISTS `v_trades_detalles_todo`;
/*!50001 DROP VIEW IF EXISTS `v_trades_detalles_todo`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `v_trades_detalles_todo` AS SELECT 
 1 AS `idTrade`,
 1 AS `idTipoProfit`,
 1 AS `sys_guid_Trade`,
 1 AS `idUsers`,
 1 AS `idAfterTrade`,
 1 AS `idAOPosicion`,
 1 AS `idBandasBollinger`,
 1 AS `idCruceEstocastico`,
 1 AS `idDivisa`,
 1 AS `idEmociones`,
 1 AS `idEstocastico`,
 1 AS `idPatronVela`,
 1 AS `idPeriodoVela`,
 1 AS `idSesion`,
 1 AS `idSoportesResistencias`,
 1 AS `idTendencia`,
 1 AS `idTiempoOperacion`,
 1 AS `idTipoOperacion`,
 1 AS `idVolatilidad`,
 1 AS `idAOConfirmacion`,
 1 AS `fecha_operacion`,
 1 AS `fechaTrade`,
 1 AS `horaTrade`,
 1 AS `inversion`,
 1 AS `esNoticia`,
 1 AS `porcentajePago`,
 1 AS `ImporteRetorno`,
 1 AS `observaciones`,
 1 AS `divisa`,
 1 AS `periodo_vela`,
 1 AS `expiracion`,
 1 AS `tipo_operacion`,
 1 AS `resultado`,
 1 AS `sesion`,
 1 AS `accion`,
 1 AS `ao_posicion`,
 1 AS `bandas_bollinger`,
 1 AS `cruce_estocastico`,
 1 AS `emocion`,
 1 AS `estocastico`,
 1 AS `soporte_resistencia`,
 1 AS `tendencia`,
 1 AS `volatilidad`,
 1 AS `ao_confirmacion`,
 1 AS `id_divisa`,
 1 AS `id_periodo_vela`,
 1 AS `id_expiracion`,
 1 AS `id_tipo_operacion`,
 1 AS `id_resultado`,
 1 AS `id_sesion`,
 1 AS `id_accion`,
 1 AS `id_ao_posicion`,
 1 AS `id_bandas_bollinger`,
 1 AS `id_cruce_estocastico`,
 1 AS `id_emocion`,
 1 AS `id_estocastico`,
 1 AS `id_soporte_resistencia`,
 1 AS `id_tendencia`,
 1 AS `id_volatilidad`,
 1 AS `id_ao_confirmacion`,
 1 AS `id_patron_vela`,
 1 AS `patron_vela`,
 1 AS `imgbase64`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `volatilidads`
--

DROP TABLE IF EXISTS `volatilidads`;

CREATE TABLE `volatilidads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sys_guid` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `volatilidads`
--

LOCK TABLES `volatilidads` WRITE;
/*!40000 ALTER TABLE `volatilidads` DISABLE KEYS */;
INSERT INTO `volatilidads` VALUES (1,'Normal',1,NULL,NULL,'60bb688f322711ecab3c089798ba0234'),(2,'Velas pequeñas',1,NULL,NULL,'60bb6a2e322711ecab3c089798ba0234'),(3,'Velas con mechas',1,NULL,NULL,'60bb6ac1322711ecab3c089798ba0234'),(4,'Rápida',1,NULL,NULL,'60bb6af9322711ecab3c089798ba0234'),(5,'Lenta',1,NULL,NULL,'60bb6b25322711ecab3c089798ba0234');
/*!40000 ALTER TABLE `volatilidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'suitemdg'
--

--
-- Dumping routines for database 'suitemdg'
--
/*!50003 DROP PROCEDURE IF EXISTS `getTradesByUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `getTradesByUser`(
IN _user VARCHAR(40),
IN _fecha_inicio DATE,
IN _fecha_fin DATE,
IN _TipoOperacion INT
)
lbl_info:
BEGIN
	DECLARE  _success INT;
	DECLARE _msg VARCHAR (4000);
	DECLARE _idUser BIGINT;
	
    call suitemdg.validarItemCatalogos(_user, 18, _idUser);

	IF( _idUser IS NULL) THEN
			set _success = 0;
            SET _msg = '¡SESIÓN INVÁLIDA!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;

	IF (_TipoOperacion = 0) then ##TODO
		SELECT *, 1 as _success, '¡Solcitud procesada correctamente!' as _msg FROM v_trades_detalles_todo where idUsers = _idUser order by idTrade desc limit 100;
	end if;
    
    IF (_TipoOperacion = 1) then ##GANADAS
		SELECT *, 1 as _success, '¡Solcitud procesada correctamente!' as _msg FROM v_trades_detalles_todo where idUsers = _idUser and idTipoProfit = 1 order by idTrade desc limit 100;
	end if;
    
    IF (_TipoOperacion = 2) then ##GANADAS
		SELECT *, 1 as _success, '¡Solcitud procesada correctamente!' as _msg FROM v_trades_detalles_todo where idUsers = _idUser and idTipoProfit = 2 order by idTrade desc limit 100;
	end if;
    
     IF (_TipoOperacion = 3) then ##GANADAS
		SELECT *, 1 as _success, '¡Solcitud procesada correctamente!' as _msg FROM v_trades_detalles_todo where idUsers = _idUser and idTipoProfit = 3 order by idTrade desc limit 100;
	end if;
    
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `validarItemCatalogos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `validarItemCatalogos`(
IN _guid VARCHAR(40),
IN _opcion  INT,
inout _idItem INT
)
lbl_info :
BEGIN

		

/*accions*/
IF (_opcion  = 1) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from accions where sys_guid = _guid );
END if;

##ao_posicions
IF (_opcion  = 2) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from ao_posicions where sys_guid = _guid );
END if;

##awesome_oscilators
IF (_opcion  = 3) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from awesome_oscilators where sys_guid = _guid );
END if;

##bandas_bollingers
IF (_opcion  = 4) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from bandas_bollingers where sys_guid = _guid );
END if;

##cruce_estocasticos
IF (_opcion  = 5) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from cruce_estocasticos where sys_guid = _guid );
END if;

##divisas
IF (_opcion  = 6) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from divisas where sys_guid = _guid );
END if;

##emocions
IF (_opcion  = 7) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from emocions where sys_guid = _guid );
END if;

##estocasticos
IF (_opcion  = 8) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from estocasticos where sys_guid = _guid );
END if;

##patron_velas
IF (_opcion  = 9) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from patron_velas where sys_guid = _guid );
END if;

##periodovelas
IF (_opcion  = 10) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from periodovelas where sys_guid = _guid );
END if;

##sesions
IF (_opcion  = 11) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from sesions where sys_guid = _guid );
END if;

##soportesresistencias
IF (_opcion  = 12) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from soportesresistencias where sys_guid = _guid );
END if;

##tendencias
IF (_opcion  = 13) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from tendencias where sys_guid = _guid );
END if;

##tiempooperaciones
IF (_opcion  = 14) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from tiempooperaciones where sys_guid = _guid );
END if;


##tipooperacions
IF (_opcion  = 15) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from tipooperacions where sys_guid = _guid );
END if;


##tipoprofits
IF (_opcion  = 16) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from tipoprofits where sys_guid = _guid );
END if;


##volatilidads
IF (_opcion  = 17) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from volatilidads where sys_guid = _guid );
END if;



##USER
IF (_opcion  = 18) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from users where sys_guid = _guid );
END if;


IF (_opcion  = 19) THEN
	set _idItem =  ( select if( ( ifnull(count(id), 0) > 0 ), id, NULL) as id from trades where sys_guid = _guid );
END if;



##SELECT _idItem;





		/**/
		END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_EtadisticasUsuarioPorTipoOperacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_EtadisticasUsuarioPorTipoOperacion`(
IN _TipoOperacion INT,
IN _user varchar(40)
)
lbl_info :
BEGIN

	DECLARE  _success INT;
	DECLARE _msg VARCHAR (4000);
	DECLARE _idUser BIGINT;
	
    call suitemdg.validarItemCatalogos(_user, 18, _idUser);

	IF( _idUser IS NULL) THEN
			set _success = 0;
            SET _msg = '¡SESIÓN INVÁLIDA!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;


WITH UniversoEntradas as 
(
	SELECT *, 1 as _index
	FROM suitemdg.v_trades_detalles_todo
	WHERE idUsers = _idUser AND idTipoProfit = _TipoOperacion
),
EstadisticasSesiones as (
	select sesion, count(idSesion) as totalSesion, 2 as _index, 'SESION' as grupo from UniversoEntradas group by idSesion),
EstadisticasDivisas as (
	select uni.divisa, count(uni.idDivisa) as totalDivisa, 3 as _index, 'DIVISA' as grupo from UniversoEntradas uni group by uni.idDivisa),
EstadisticasTipoOperacion as (
	select uni.tipo_operacion, count(uni.idTipoOperacion) as totalTipoOperacion, 4 as _index, 'TIPO DE OPERACIÓN' as grupo from UniversoEntradas uni group by uni.idTipoOperacion),
EstadisticasExpiracion as (
	select uni.expiracion, count(uni.idTiempoOperacion) as totalTiempoOperacion, 5 as _index, 'EXPIRACIÓN' as grupo from UniversoEntradas uni group by uni.idTiempoOperacion),
EstadisticasPeriodoVela as (
	select uni.periodo_vela, count(uni.idPeriodoVela) as totalPeriodoVela, 6 as _index, 'TEMPORALIDAD DE VELA' as grupo from UniversoEntradas uni group by uni.idPeriodoVela),
EstadisticasFechas as (
	select uni.fecha_operacion, count(uni.fecha_operacion) as totalPeriodoVela, 7 as _index, 'FECHA DE OPERACION' as grupo from UniversoEntradas uni group by uni.fecha_operacion),
    UniversoSeparado as (
    select * from EstadisticasSesiones
    union all 
    select * from EstadisticasDivisas
    union all 
    select * from EstadisticasTipoOperacion
    union all 
    select * from EstadisticasExpiracion
    union all
    select * from EstadisticasPeriodoVela
    union all
    select * from EstadisticasFechas
    )
    select *, 1 as _success, '' as _msg from UniversoSeparado;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_ObtenerImagenesOperacion_ByUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_ObtenerImagenesOperacion_ByUser`(
IN _user varchar(40)
)
lbl_info : 
BEGIN

	DECLARE  _success INT;
	DECLARE _msg VARCHAR (4000);
	DECLARE _idUser BIGINT;
	
    call suitemdg.validarItemCatalogos(_user, 18, _idUser);

	IF( _idUser IS NULL) THEN
			set _success = 0;
            SET _msg = '¡SESIÓN INVÁLIDA!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;

	SELECT id, idUsers, imagenbase64, 
    (ROW_NUMBER() OVER (PARTITION BY idUsers order by id desc)) as numrow,
    1 as success, '' as msg FROM trades where idUsers = _idUser and ifnull(imagenbase64, '') <> '' limit 10;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_ObtenerOperacionPorID` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_ObtenerOperacionPorID`(
IN _user varchar(40),
IN _guidItem varchar(40)
)
lbl_info :
BEGIN

	DECLARE  _success INT;
	DECLARE _msg VARCHAR (4000);
	DECLARE _idUser BIGINT;
    DECLARE _idTrade BIGINT;

	call suitemdg.validarItemCatalogos(_user, 18, _idUser);

	IF( _idUser IS NULL) THEN
			set _success = 0;
            SET _msg = '¡SESIÓN INVÁLIDA!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
	call suitemdg.validarItemCatalogos(_guidItem, 19, _idTrade);

	IF( _idTrade IS NULL) THEN
			set _success = 0;
            SET _msg = '¡NO SE ENCONTRÓ INFORMACIÓN DE LA OPERACIÓN!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
	

	SELECT *, 1 as _success, '¡SOLICITUD PROCESADA CORRECTAMENTE!' as _msg
	FROM suitemdg.v_trades_detalles_todo
	WHERE idTrade = _idTrade;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_ObtenerResumenPorcentajeEntradas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_ObtenerResumenPorcentajeEntradas`(
IN _user VARCHAR(40)
)
lbl_info : 
BEGIN

	DECLARE  _success INT;
	DECLARE _msg VARCHAR (4000);
	DECLARE _idUser BIGINT;
	
    call suitemdg.validarItemCatalogos(_user, 18, _idUser);

	IF( _idUser IS NULL) THEN
			set _success = 0;
            SET _msg = '¡SESIÓN INVÁLIDA!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;


	with resumen_entradas as (
SELECT count(idTipoProfit) as TotalEntradas, count(case when idTipoProfit = 1 then idTipoProfit end) as TotalGanadas, count(case when idTipoProfit = 2 then idTipoProfit end) as TotalPerdidas, count(case when idTipoProfit = 3 then idTipoProfit end) as TotalEmpatadas FROM suitemdg.v_trades_detalles_todo where idUsers = _idUser
##
)
select *, 
convert(ifnull(((TotalGanadas * 100) / TotalEntradas),0), decimal(18,2)) as porcentaje_ganadas, 
convert(ifnull(((TotalPerdidas * 100) / TotalEntradas),0), decimal(18,2)) as porcentaje_perdidas, 
convert(ifnull(((TotalEmpatadas * 100) / TotalEntradas), 0), decimal(18,2)) as porcentaje_empatadas ,
1 as _success, '' as _msg
from resumen_entradas;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_OperacionPlanTrading_crear` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_OperacionPlanTrading_crear`(

	##LISTA DE PARÁMETROS
	IN _fecha VARCHAR(30),
	IN _hora VARCHAR (20),
	IN _inversion DECIMAL (18, 2),
	IN _porcentaje DECIMAL (18, 2),
	IN _observaciones VARCHAR (500),
	IN _aftertrade VARCHAR (40),
	IN _aoposicion VARCHAR (40),
	IN _aoconfirmacion VARCHAR (40),
    IN _bandasbollinger VARCHAR (40),
	IN _cruceestocastico VARCHAR (40),
	IN _divisa VARCHAR (40),
	IN _emociones VARCHAR (40),
	IN _estocastico VARCHAR (40),
	IN _patronvela VARCHAR (40),
	IN _periodovela VARCHAR (40),
	IN _sesion VARCHAR (40),
	IN _soporteresistencia VARCHAR (40),
	IN _tendencia VARCHAR (40),
	IN _tiempooperacion VARCHAR (40),
	IN _tipooperacion VARCHAR (40),
	IN _tipoprofit VARCHAR (40),
	IN _volatilidad VARCHAR (40),
    IN _esNoticia TINYINT(1),
	IN _user VARCHAR (40),
    IN _imagenbase64 longblob
)
lbl_info :
BEGIN

		DECLARE _errorState TINYINT (1);
		DECLARE  _success INT;
		DECLARE _msg VARCHAR (4000);
		DECLARE _idAfterTrade INT;
		DECLARE _idAoPosicion INT;
        DECLARE _idAoConfirmacion INT;
		DECLARE _idBandasBollinger INT;
		DECLARE _idCruceEstocastico INT;
		DECLARE _idDivisa INT;
		DECLARE _idEmociones INT;
		DECLARE _idEstocastico INT;
		DECLARE _idPatronVela INT;
		DECLARE _idPeriodoVela INT;
		DECLARE _idSesion INT;
		DECLARE _idSoporteResistencia INT;
		DECLARE _idTendencia INT;
		DECLARE _idTiempoOperacion int;
		DECLARE _idTipoOperacion INT;
		DECLARE _idTipoProfit INT;
		DECLARE _idVolatilidad INT;
		DECLARE _idUser INT ;
        DECLARE
			CONTINUE HANDLER FOR SQLEXCEPTION
		BEGIN
		SET _errorState = 1 ;
		END ; 
		/**/
        
        SET _msg = 'OCURRIÓ UN PROBLEMA EN LA SOLICITUD.';
        
        SET _idSesion = 0;
        call suitemdg.validarItemCatalogos(_sesion, 11, _idSesion);
        if( _idSesion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
        SET _idDivisa = 0;
        call suitemdg.validarItemCatalogos(_divisa, 6, _idDivisa);
        if( _idDivisa IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTipoOperacion = 0;
        call suitemdg.validarItemCatalogos(_tipooperacion, 15, _idTipoOperacion);
        if( _idTipoOperacion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTiempoOperacion = 0;
        call suitemdg.validarItemCatalogos(_tiempooperacion, 14, _idTiempoOperacion);
        if( _idTiempoOperacion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idPeriodoVela = 0;
        call suitemdg.validarItemCatalogos(_periodovela, 10, _idPeriodoVela);
        if( _idPeriodoVela IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTipoProfit = 0;
        call suitemdg.validarItemCatalogos(_tipoprofit, 16, _idTipoProfit);
        if( _idTipoProfit IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
        SET _idUser = 0;
        call suitemdg.validarItemCatalogos(_user, 18, _idUser);
        if( _idUser IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
       set _idSoporteResistencia = 0; 
       set _idBandasBollinger = 0;
       set _idAoConfirmacion = 0;
       set _idAoPosicion = 0;
       set _idEstocastico = 0;
       set _idCruceEstocastico = 0;
       set _idPatronVela = 0;
       set _idVolatilidad = 0;
       set _idTendencia = 0;
       set _idEmociones = 0;
       set _idAfterTrade = 0;
        
        
        call suitemdg.validarItemCatalogos(_soporteresistencia, 12, _idSoporteResistencia);
        call suitemdg.validarItemCatalogos(_bandasbollinger, 4, _idBandasBollinger);
        call suitemdg.validarItemCatalogos(_aoconfirmacion, 3, _idAoConfirmacion);
        call suitemdg.validarItemCatalogos(_aoposicion, 2, _idAoPosicion);
        call suitemdg.validarItemCatalogos(_estocastico, 8, _idEstocastico);
        call suitemdg.validarItemCatalogos(_cruceestocastico, 5, _idCruceEstocastico);
        call suitemdg.validarItemCatalogos(_patronvela, 9, _idPatronVela);
        call suitemdg.validarItemCatalogos(_volatilidad, 17, _idVolatilidad);
        call suitemdg.validarItemCatalogos(_tendencia, 13, _idTendencia);
        call suitemdg.validarItemCatalogos(_emociones, 7, _idEmociones);
        call suitemdg.validarItemCatalogos(_aftertrade, 1, _idAfterTrade);
        
        
        /*set _success = 0;
        set _msg = (select concat("emociones INPUT: '", _emociones, "'")); 
        select _success, _msg;
        leave lbl_info;
        */
        
        /*
        | RETURN: '", _idBandasBollinger, "' ========  EMOCIONES INPUT: '", ifnull(_emociones, ''), "' | RESULT: '",  ifnull(_idEmociones, ''), "'"));
        set _success = 0;
        set _msg = concat("INSERT INTO suitemdg.trades(created_at, updated_at, fechaTrade, horaTrade, inversion, porcentajePago, observaciones, idAfterTrade, idAOPosicion, idBandasBollinger, idCruceEstocastico,idDivisa, idEmociones, idEstocastico, idPatronVela, idPeriodoVela, idSesion, idSoportesResistencias, idTendencia, idTiempoOperacion, idTipoOperacion,idTipoProfit, idVolatilidad, idUsers, sys_guid, idAOConfirmacion) VALUES ('", now(), "', '", now(),  "', '", convert(_fecha, datetime), "', '", _hora , "', ",_inversion,", ",_porcentaje,", '",_observaciones,"', ",_idAfterTrade,");");
        select _success, _msg;
        leave lbl_info;
        
        
        /*
        
         , ", _inversion, ", ", _porcentaje, ", '", _observaciones, "', ",_idAfterTrade,", ",_idAoPosicion,", ",_idBandasBollinger,", ", _idCruceEstocastico, ");
        , ", _idDivisa, ", ", _idEmociones, ", ", _idEstocastico, ", ", _idPatronVela, ", ", _idPeriodoVela, ", ", _idSesion, ", ", _idSoporteResistencia , ", ", _idTendencia ,", ", _idTiempoOperacion, ", ",_idTipoOperacion, ", ", _idTipoProfit, ", ", _idVolatilidad, ", ", _idUser, ", '", replace(uuid(), '-', '') ,"' , ", _idAoConfirmacion, ");
        
        */
        
        START TRANSACTION ;
        ##SET _idUser = 2;
        
        INSERT INTO `suitemdg`.`trades`
        (
			created_at, updated_at, fechaTrade, horaTrade, inversion, porcentajePago, observaciones, idAfterTrade, idAOPosicion, idBandasBollinger, idCruceEstocastico,
			idDivisa, idEmociones, idEstocastico, idPatronVela, idPeriodoVela, idSesion, idSoportesResistencias, idTendencia, idTiempoOperacion, idTipoOperacion,
			idTipoProfit, idVolatilidad, idUsers, sys_guid, idAOConfirmacion, esNoticia, imagenbase64
		)
        VALUES
        (
			now(), now(), convert(_fecha, datetime), _hora, _inversion, _porcentaje, _observaciones, _idAfterTrade, _idAoPosicion, _idBandasBollinger, _idCruceEstocastico, 
            _idDivisa, _idEmociones, _idEstocastico, _idPatronVela, _idPeriodoVela, _idSesion, _idSoporteResistencia, _idTendencia, _idTiempoOperacion, _idTipoOperacion,
            _idTipoProfit, _idVolatilidad, _idUser, replace(uuid(), '-', '') , _idAoConfirmacion, _esNoticia, _imagenbase64
        );
   
        IF _errorState THEN
			ROLLBACK ; 
            set _success = 0;
            set _msg = 'No fue posible registrar la operación. Por favor, contacte con el administrador.';
            select _success, _msg;
            LEAVE lbl_info ;
		END IF ;
        
        
        COMMIT;
        set _success = 1;
		set _msg = 'Operación registrada con éxito';
		select _success, _msg;
		LEAVE lbl_info ;
        
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `_sp_OperacionPlanTrading_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;

/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  PROCEDURE `_sp_OperacionPlanTrading_update`(

	##LISTA DE PARÁMETROS
	IN _fecha VARCHAR(30),
	IN _hora VARCHAR (20),
	IN _inversion DECIMAL (18, 2),
	IN _porcentaje DECIMAL (18, 2),
	IN _observaciones VARCHAR (500),
	IN _aftertrade VARCHAR (40),
	IN _aoposicion VARCHAR (40),
	IN _aoconfirmacion VARCHAR (40),
    IN _bandasbollinger VARCHAR (40),
	IN _cruceestocastico VARCHAR (40),
	IN _divisa VARCHAR (40),
	IN _emociones VARCHAR (40),
	IN _estocastico VARCHAR (40),
	IN _patronvela VARCHAR (40),
	IN _periodovela VARCHAR (40),
	IN _sesion VARCHAR (40),
	IN _soporteresistencia VARCHAR (40),
	IN _tendencia VARCHAR (40),
	IN _tiempooperacion VARCHAR (40),
	IN _tipooperacion VARCHAR (40),
	IN _tipoprofit VARCHAR (40),
	IN _volatilidad VARCHAR (40),
    IN _esNoticia TINYINT(1),
	IN _user VARCHAR (40),
    IN _trade VARCHAR (40),
    IN _imagenbase64 LONGBLOB
)
lbl_info :
BEGIN

		DECLARE _errorState TINYINT (1);
		DECLARE  _success INT;
		DECLARE _msg VARCHAR (4000);
		DECLARE _idAfterTrade INT;
		DECLARE _idAoPosicion INT;
        DECLARE _idAoConfirmacion INT;
		DECLARE _idBandasBollinger INT;
		DECLARE _idCruceEstocastico INT;
		DECLARE _idDivisa INT;
		DECLARE _idEmociones INT;
		DECLARE _idEstocastico INT;
		DECLARE _idPatronVela INT;
		DECLARE _idPeriodoVela INT;
		DECLARE _idSesion INT;
		DECLARE _idSoporteResistencia INT;
		DECLARE _idTendencia INT;
		DECLARE _idTiempoOperacion int;
		DECLARE _idTipoOperacion INT;
		DECLARE _idTipoProfit INT;
		DECLARE _idVolatilidad INT;
		DECLARE _idUser INT ;
        DECLARE _idTrade BIGINT;
        DECLARE
			CONTINUE HANDLER FOR SQLEXCEPTION
		BEGIN
		SET _errorState = 1 ;
		END ; 
		/**/
        
        SET _msg = 'OCURRIÓ UN PROBLEMA EN LA SOLICITUD.';
        
        
        SET _idUser = 0;
        call suitemdg.validarItemCatalogos(_user, 18, _idUser);
        if( _idUser IS NULL) THEN
			set _success = 0;
            set _msg = '¡LLAVE NO VÁLIDA DEL USUARIO!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
        SET _idTrade = 0;
        call suitemdg.validarItemCatalogos(_trade, 19, _idTrade);
        if( _idTrade IS NULL) THEN
			set _success = 0;
            set _msg = '¡TOKEN NO PERMITIDO PARA REALIZAR LA OPERACIÓN!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTrade = ifnull((SELECT id FROM trades where id = _idTrade and idUsers = _idUser), 0);
        if( _idTrade = 0) THEN
			set _success = 0;
            set _msg = '¡TOKEN INVÁLIDO DE LA OPERACIÓN!';
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idSesion = 0;
        call suitemdg.validarItemCatalogos(_sesion, 11, _idSesion);
        if( _idSesion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
        SET _idDivisa = 0;
        call suitemdg.validarItemCatalogos(_divisa, 6, _idDivisa);
        if( _idDivisa IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTipoOperacion = 0;
        call suitemdg.validarItemCatalogos(_tipooperacion, 15, _idTipoOperacion);
        if( _idTipoOperacion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTiempoOperacion = 0;
        call suitemdg.validarItemCatalogos(_tiempooperacion, 14, _idTiempoOperacion);
        if( _idTiempoOperacion IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idPeriodoVela = 0;
        call suitemdg.validarItemCatalogos(_periodovela, 10, _idPeriodoVela);
        if( _idPeriodoVela IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        SET _idTipoProfit = 0;
        call suitemdg.validarItemCatalogos(_tipoprofit, 16, _idTipoProfit);
        if( _idTipoProfit IS NULL) THEN
			set _success = 0;
            select _success, _msg;
            LEAVE lbl_info;
        END IF;
        
        
       set _idSoporteResistencia = 0; 
       set _idBandasBollinger = 0;
       set _idAoConfirmacion = 0;
       set _idAoPosicion = 0;
       set _idEstocastico = 0;
       set _idCruceEstocastico = 0;
       set _idPatronVela = 0;
       set _idVolatilidad = 0;
       set _idTendencia = 0;
       set _idEmociones = 0;
       set _idAfterTrade = 0;
        
        
        call suitemdg.validarItemCatalogos(_soporteresistencia, 12, _idSoporteResistencia);
        call suitemdg.validarItemCatalogos(_bandasbollinger, 4, _idBandasBollinger);
        call suitemdg.validarItemCatalogos(_aoconfirmacion, 3, _idAoConfirmacion);
        call suitemdg.validarItemCatalogos(_aoposicion, 2, _idAoPosicion);
        call suitemdg.validarItemCatalogos(_estocastico, 8, _idEstocastico);
        call suitemdg.validarItemCatalogos(_cruceestocastico, 5, _idCruceEstocastico);
        call suitemdg.validarItemCatalogos(_patronvela, 9, _idPatronVela);
        call suitemdg.validarItemCatalogos(_volatilidad, 17, _idVolatilidad);
        call suitemdg.validarItemCatalogos(_tendencia, 13, _idTendencia);
        call suitemdg.validarItemCatalogos(_emociones, 7, _idEmociones);
        call suitemdg.validarItemCatalogos(_aftertrade, 1, _idAfterTrade);
        
        
        /*set _success = 0;
        set _msg = (select concat("emociones INPUT: '", _emociones, "'")); 
        select _success, _msg;
        leave lbl_info;
        */
        
        /*
        | RETURN: '", _idBandasBollinger, "' ========  EMOCIONES INPUT: '", ifnull(_emociones, ''), "' | RESULT: '",  ifnull(_idEmociones, ''), "'"));
        set _success = 0;
        set _msg = concat("INSERT INTO suitemdg.trades(created_at, updated_at, fechaTrade, horaTrade, inversion, porcentajePago, observaciones, idAfterTrade, idAOPosicion, idBandasBollinger, idCruceEstocastico,idDivisa, idEmociones, idEstocastico, idPatronVela, idPeriodoVela, idSesion, idSoportesResistencias, idTendencia, idTiempoOperacion, idTipoOperacion,idTipoProfit, idVolatilidad, idUsers, sys_guid, idAOConfirmacion) VALUES ('", now(), "', '", now(),  "', '", convert(_fecha, datetime), "', '", _hora , "', ",_inversion,", ",_porcentaje,", '",_observaciones,"', ",_idAfterTrade,");");
        select _success, _msg;
        leave lbl_info;
        
        
        /*
        
         , ", _inversion, ", ", _porcentaje, ", '", _observaciones, "', ",_idAfterTrade,", ",_idAoPosicion,", ",_idBandasBollinger,", ", _idCruceEstocastico, ");
        , ", _idDivisa, ", ", _idEmociones, ", ", _idEstocastico, ", ", _idPatronVela, ", ", _idPeriodoVela, ", ", _idSesion, ", ", _idSoporteResistencia , ", ", _idTendencia ,", ", _idTiempoOperacion, ", ",_idTipoOperacion, ", ", _idTipoProfit, ", ", _idVolatilidad, ", ", _idUser, ", '", replace(uuid(), '-', '') ,"' , ", _idAoConfirmacion, ");
        
        */
        
        START TRANSACTION ;
        SET _idUser = 2;
        
        /*INSERT INTO `suitemdg`.`trades`
        (
			created_at, updated_at, fechaTrade, horaTrade, inversion, porcentajePago, observaciones, idAfterTrade, idAOPosicion, idBandasBollinger, idCruceEstocastico,
			idDivisa, idEmociones, idEstocastico, idPatronVela, idPeriodoVela, idSesion, idSoportesResistencias, idTendencia, idTiempoOperacion, idTipoOperacion,
			idTipoProfit, idVolatilidad, idUsers, sys_guid, idAOConfirmacion, esNoticia
		)
        VALUES
        (
			now(), now(), convert(_fecha, datetime), _hora, _inversion, _porcentaje, _observaciones, _idAfterTrade, _idAoPosicion, _idBandasBollinger, _idCruceEstocastico, 
            _idDivisa, _idEmociones, _idEstocastico, _idPatronVela, _idPeriodoVela, _idSesion, _idSoporteResistencia, _idTendencia, _idTiempoOperacion, _idTipoOperacion,
            _idTipoProfit, _idVolatilidad, _idUser, replace(uuid(), '-', '') , _idAoConfirmacion, _esNoticia
        );*/
        
        
        
        UPDATE `suitemdg`.`trades`
			SET
			`updated_at` = now(),
			`fechaTrade` = convert(_fecha, datetime),
			`horaTrade` = _hora,
			`inversion` = _inversion,
			`porcentajePago` = _porcentaje,
			`observaciones` = _observaciones,
			`idAfterTrade` = _idAfterTrade,
			`idAOPosicion` = _idAoPosicion,
			`idBandasBollinger` = _idBandasBollinger,
			`idCruceEstocastico` = _idCruceEstocastico,
			`idDivisa` = _idDivisa,
			`idEmociones` = _idEmociones,
			`idEstocastico` = _idEstocastico,
			`idPatronVela` = _idPatronVela,
			`idPeriodoVela` = _idPeriodoVela,
			`idSesion` = _idSesion,
			`idSoportesResistencias` = _idSoporteResistencia,
			`idTendencia` = _idTendencia,
			`idTiempoOperacion` = _idTiempoOperacion,
			`idTipoOperacion` = _idTipoOperacion,
			`idTipoProfit` = _idTipoProfit,
			`idVolatilidad` = _idVolatilidad,
			`idAOConfirmacion` = _idAoConfirmacion,
			`esNoticia` = _esNoticia,
            imagenbase64 = _imagenbase64
			WHERE `id` = _idTrade;
   
        IF _errorState THEN
			ROLLBACK ; 
            set _success = 0;
            set _msg = 'No fue posible actualizar la operación. Por favor, contacte con el administrador.';
            select _success, _msg;
            LEAVE lbl_info ;
		END IF ;
        
        
        COMMIT;
        set _success = 1;
		set _msg = 'Operación actualizada con éxito';
		select _success, _msg;
		LEAVE lbl_info ;
        
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `v_trades_detalles_todo`
--

/*!50001 DROP VIEW IF EXISTS `v_trades_detalles_todo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013  SQL SECURITY DEFINER */
/*!50001 VIEW `v_trades_detalles_todo` AS select `trades`.`id` AS `idTrade`,`trades`.`idTipoProfit` AS `idTipoProfit`,`trades`.`sys_guid` AS `sys_guid_Trade`,`trades`.`idUsers` AS `idUsers`,`trades`.`idAfterTrade` AS `idAfterTrade`,`trades`.`idAOPosicion` AS `idAOPosicion`,`trades`.`idBandasBollinger` AS `idBandasBollinger`,`trades`.`idCruceEstocastico` AS `idCruceEstocastico`,`trades`.`idDivisa` AS `idDivisa`,`trades`.`idEmociones` AS `idEmociones`,`trades`.`idEstocastico` AS `idEstocastico`,`trades`.`idPatronVela` AS `idPatronVela`,`trades`.`idPeriodoVela` AS `idPeriodoVela`,`trades`.`idSesion` AS `idSesion`,`trades`.`idSoportesResistencias` AS `idSoportesResistencias`,`trades`.`idTendencia` AS `idTendencia`,`trades`.`idTiempoOperacion` AS `idTiempoOperacion`,`trades`.`idTipoOperacion` AS `idTipoOperacion`,`trades`.`idVolatilidad` AS `idVolatilidad`,`trades`.`idAOConfirmacion` AS `idAOConfirmacion`,cast(`trades`.`fechaTrade` as date) AS `fecha_operacion`,`trades`.`fechaTrade` AS `fechaTrade`,`trades`.`horaTrade` AS `horaTrade`,`trades`.`inversion` AS `inversion`,(case when (`trades`.`esNoticia` = 1) then 'on' else 'off' end) AS `esNoticia`,cast(`trades`.`porcentajePago` as decimal(18,0)) AS `porcentajePago`,cast((case when (`trades`.`idTipoProfit` = 1) then (`trades`.`inversion` * (`trades`.`porcentajePago` / 100)) when (`trades`.`idTipoProfit` = 2) then 0.00 when (`trades`.`idTipoProfit` = 3) then `trades`.`inversion` end) as decimal(18,2)) AS `ImporteRetorno`,`trades`.`observaciones` AS `observaciones`,`divisas`.`descripcion` AS `divisa`,`periodovelas`.`descripcion` AS `periodo_vela`,`tiempooperaciones`.`descripcion` AS `expiracion`,`tipooperacions`.`descripcion` AS `tipo_operacion`,`tipoprofits`.`descripcion` AS `resultado`,`sesions`.`descripcion` AS `sesion`,ifnull(`accions`.`descripcion`,'') AS `accion`,ifnull(`ao_posicions`.`descripcion`,'') AS `ao_posicion`,ifnull(`bandas_bollingers`.`descripcion`,'') AS `bandas_bollinger`,ifnull(`cruce_estocasticos`.`descripcion`,'') AS `cruce_estocastico`,ifnull(`emocions`.`descripcion`,'') AS `emocion`,ifnull(`estocasticos`.`descripcion`,'') AS `estocastico`,ifnull(`soportesresistencias`.`descripcion`,'') AS `soporte_resistencia`,ifnull(`tendencias`.`descripcion`,'') AS `tendencia`,ifnull(`volatilidads`.`descripcion`,'') AS `volatilidad`,ifnull(`awesome_oscilators`.`descripcion`,'') AS `ao_confirmacion`,`divisas`.`sys_guid` AS `id_divisa`,`periodovelas`.`sys_guid` AS `id_periodo_vela`,`tiempooperaciones`.`sys_guid` AS `id_expiracion`,`tipooperacions`.`sys_guid` AS `id_tipo_operacion`,`tipoprofits`.`sys_guid` AS `id_resultado`,`sesions`.`sys_guid` AS `id_sesion`,ifnull(`accions`.`sys_guid`,'') AS `id_accion`,ifnull(`ao_posicions`.`sys_guid`,'') AS `id_ao_posicion`,ifnull(`bandas_bollingers`.`sys_guid`,'') AS `id_bandas_bollinger`,ifnull(`cruce_estocasticos`.`sys_guid`,'') AS `id_cruce_estocastico`,ifnull(`emocions`.`sys_guid`,'') AS `id_emocion`,ifnull(`estocasticos`.`sys_guid`,'') AS `id_estocastico`,ifnull(`soportesresistencias`.`sys_guid`,'') AS `id_soporte_resistencia`,ifnull(`tendencias`.`sys_guid`,'') AS `id_tendencia`,ifnull(`volatilidads`.`sys_guid`,'') AS `id_volatilidad`,ifnull(`awesome_oscilators`.`sys_guid`,'') AS `id_ao_confirmacion`,ifnull(`patron_velas`.`sys_guid`,'') AS `id_patron_vela`,ifnull(`patron_velas`.`descripcion`,'') AS `patron_vela`,ifnull(`trades`.`imagenbase64`,'') AS `imgbase64` from (((((((((((((((((`trades` join `sesions` on((`sesions`.`id` = `trades`.`idSesion`))) join `divisas` on((`divisas`.`id` = `trades`.`idDivisa`))) join `tipooperacions` on((`tipooperacions`.`id` = `trades`.`idTipoOperacion`))) join `tiempooperaciones` on((`tiempooperaciones`.`id` = `trades`.`idTiempoOperacion`))) join `periodovelas` on((`periodovelas`.`id` = `trades`.`idPeriodoVela`))) join `tipoprofits` on((`tipoprofits`.`id` = `trades`.`idTipoProfit`))) left join `accions` on((`accions`.`id` = `trades`.`idAfterTrade`))) left join `ao_posicions` on((`ao_posicions`.`id` = `trades`.`idAOPosicion`))) left join `bandas_bollingers` on((`bandas_bollingers`.`id` = `trades`.`idBandasBollinger`))) left join `cruce_estocasticos` on((`cruce_estocasticos`.`id` = `trades`.`idCruceEstocastico`))) left join `emocions` on((`emocions`.`id` = `trades`.`idEmociones`))) left join `estocasticos` on((`estocasticos`.`id` = `trades`.`idEstocastico`))) left join `patron_velas` on((`patron_velas`.`id` = `trades`.`idPatronVela`))) left join `soportesresistencias` on((`soportesresistencias`.`id` = `trades`.`idSoportesResistencias`))) left join `tendencias` on((`tendencias`.`id` = `trades`.`idTendencia`))) left join `volatilidads` on((`volatilidads`.`id` = `trades`.`idVolatilidad`))) left join `awesome_oscilators` on((`awesome_oscilators`.`id` = `trades`.`idAOConfirmacion`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-16  1:54:00