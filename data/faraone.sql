CREATE TABLE `country` (
  `id` int(11) NOT NULL COMMENT '国家ID',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `iso_code` varchar(5) NOT NULL COMMENT 'ISO code',
  `show_in_front` tinyint(1) NOT NULL DEFAULT '1',
  `currency_code` varchar(3) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `area` (`area`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT