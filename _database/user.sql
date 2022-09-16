SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `birthmonth` int(2) NOT NULL,
  `birthday` int(2) NOT NULL,
  `birthyear` int(4) NOT NULL,
  `gender` int(1) NOT NULL,
  `citizenship` text NOT NULL,
  `adressstreet` text NOT NULL,
  `adressbarangay` text NOT NULL,
  `adresscity` text NOT NULL,
  `adressprovince` text NOT NULL,
  `adresszipcode` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `nick`, `birthmonth`, `birthday`, `birthyear`, `gender`, `citizenship`, `adressstreet`, `adressbarangay`, `adresscity`, `adressprovince`, `adresszipcode`, `email`, `number`) VALUES
(1, 'John', 'Matin-ao', 'Napoles', 'MinecraftJohn', 6, 14, 2001, 1, 'Filipino', 'Plaridel St. Star Apple', 'Umapad', 'Mandaue', 'Cebu', 6014, 'minecraft.john727@gmail.com', '09308611273');

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;