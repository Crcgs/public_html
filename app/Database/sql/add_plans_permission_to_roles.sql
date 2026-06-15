-- Add plans permission column to roles table
ALTER TABLE `roles` ADD `plans` TINYINT(1) NOT NULL DEFAULT '0' AFTER `ad_spaces`;

-- Update admin role to have plans permission
UPDATE `roles` SET `plans` = 1 WHERE `role` = 'admin'; 