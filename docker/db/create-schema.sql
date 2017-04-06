SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `grocery_list` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `grocery_list` ADD PRIMARY KEY (`id`);
ALTER TABLE `grocery_list` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
