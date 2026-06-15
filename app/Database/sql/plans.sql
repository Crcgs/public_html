CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(255) NOT NULL,
  `plan_price` decimal(10,2) NOT NULL,
  `plan_duration` int(11) NOT NULL COMMENT 'Duration in days',
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci; 