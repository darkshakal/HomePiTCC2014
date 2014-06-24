-- Host: localhost
-- Generation Time: 07/06/2014
-- Generation Time: 07/06/2014
-- Author: Vagner Fritsch
-- Description: TCC 2014-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: gpio
--
DROP DATABASE IF EXISTS `gpio`;
CREATE DATABASE `gpio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gpio`;

--
-- Estrutura da tabela pinstatus
--

DROP TABLE IF EXISTS `pinstatus`;
CREATE TABLE IF NOT EXISTS `pinstatus` (
  `pin_id` int(11) NOT NULL AUTO_INCREMENT,
  `pin_num` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `pinstatus` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pin_id`),
  UNIQUE KEY `pin_num` (`pin_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- valores default
--

INSERT INTO `pinstatus` (`pin_id`, `pin_num`, `pinstatus`) VALUES
(1, '7', '0'),
(2, '8', '0'),
(3, '11', '0'),
(4, '17', '0'),
(5, '18', '0'),
(6, '22', '0'),
(7, '23', '0'),
(8, '24', '0'),
(9, '25', '0');


--
-- Estrutura da tabela temperature
--
DROP TABLE IF EXISTS `temperature`;
CREATE TABLE IF NOT EXISTS `temperature` (
  `temp_autom` int(1) NOT NULL,
  `temp_set` int(5) COLLATE utf8_unicode_ci NOT NULL,
  `temp_read` int(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`temp_set`),
  UNIQUE KEY `temp_autom` (`temp_autom`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Valores default
--

INSERT INTO `temperature` (`temp_autom`, `temp_set`,`temp_read`) VALUES
(0, 22000,23000);

--
-- Estrutura da tabela alarm
--

DROP TABLE IF EXISTS `alarm`;
CREATE TABLE IF NOT EXISTS `alarm` (
  `alarm_set` int(1) NOT NULL,
  `alarm_flag` int(1) COLLATE utf8_unicode_ci NOT NULL,
  `alarm_clear` int(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`alarm_set`),
  UNIQUE KEY `alarm_set` (`alarm_set`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;


--
-- valores default
--

INSERT INTO `alarm` (`alarm_set`, `alarm_flag`,`alarm_clear`) VALUES
(0, 0, 0);

--
-- estrutura da tabela ilumi
--

DROP TABLE IF EXISTS `ilumi`;
CREATE TABLE IF NOT EXISTS `ilumi` (
  `ilumi_id` int(2) NOT NULL,
  `ilumi_auto` int(1) COLLATE utf8_unicode_ci NOT NULL,
  `ilumi_on_h` int(2) COLLATE utf8_unicode_ci NOT NULL,
  `ilumi_on_m` int(2) COLLATE utf8_unicode_ci NOT NULL,
  `ilumi_off_h` int(2) COLLATE utf8_unicode_ci NOT NULL,
  `ilumi_off_m` int(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ilumi_id`),
  UNIQUE KEY `ilumi_id` (`ilumi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;


--
-- valores default
--

INSERT INTO `ilumi` (`ilumi_id`, `ilumi_auto`,`ilumi_on_h`,`ilumi_on_m`,`ilumi_off_h`,`ilumi_off_m`) VALUES
(1, 0, 8, 0, 22, 0),
(2, 0, 8, 0, 22, 0),
(3, 0, 8, 0, 22, 0),
(4, 0, 8, 0, 22, 0);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `consum`;
CREATE TABLE IF NOT EXISTS `consum` (
  `consum_equip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `consum_month` int(1) COLLATE utf8_unicode_ci NOT NULL,
  `consum_total` int(5) COLLATE utf8_unicode_ci NOT NULL
  ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9;

--
-- valores default
--

INSERT INTO `consum` (`consum_equip`, `consum_month`, `consum_total`) VALUES
('quarto', 1, 0),
('cozinha', 1, 0),
('sala', 1, 0),
('rua', 1, 0),
('climatizador', 1, 0),
('quarto', 2, 0),
('cozinha', 2, 0),
('sala', 2, 0),
('rua', 2, 0),
('climatizador', 2, 0),
('quarto', 3, 0),
('cozinha', 3, 0),
('sala', 3, 0),
('rua', 3, 0),
('climatizador', 3, 0),
('quarto', 4, 0),
('cozinha', 4, 0),
('sala', 4, 0),
('rua', 4, 0),
('climatizador', 4, 0),
('quarto', 5, 0),
('cozinha', 5, 0),
('sala', 5, 0),
('rua', 5, 0),
('climatizador', 5, 0),
('quarto', 6, 0),
('cozinha', 6, 0),
('sala', 6, 0),
('rua', 6, 0),
('climatizador', 6, 0),
('quarto', 7, 0),
('cozinha', 7, 0),
('sala', 7, 0),
('rua', 7, 0),
('climatizador', 7, 0),
('quarto', 8, 0),
('cozinha', 8, 0),
('sala', 8, 0),
('rua', 8, 0),
('climatizador', 8, 0),
('quarto', 9, 0),
('cozinha', 9, 0),
('sala', 9, 0),
('rua', 9, 0),
('climatizador', 9, 0),
('quarto', 10, 0),
('cozinha', 10, 0),
('sala', 10, 0),
('rua', 10, 0),
('climatizador', 10, 0),
('quarto', 11, 0),
('cozinha', 11, 0),
('sala', 11, 0),
('rua', 11, 0),
('climatizador', 11, 0),
('quarto', 12, 0),
('cozinha', 12, 0),
('sala', 12, 0),
('rua', 12, 0),
('climatizador', 12, 0);

--
-- Estrutura da tabela energy
--

DROP TABLE IF EXISTS `energy`;
CREATE TABLE IF NOT EXISTS `energy` (
  `energy_equip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `energy_base_value` int(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;
INSERT INTO `energy` (`energy_equip`, `energy_base_value`) VALUES
('quarto', 15),
('cozinha', 15),
('sala', 15),
('rua', 15),
('climatizador', 900);

--
-- Estrutura da tabela logs
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int(4) COLLATE utf8_unicode_ci NOT NULL AUTO_INCREMENT,
  `log_event_id` int(2) COLLATE utf8_unicode_ci NOT NULL,
  `log_data` int(8) COLLATE utf8_unicode_ci NOT NULL,
  `log_hora` int(4) ZEROFILL COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `log_id` (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


--
-- Estrutura da tabela event_id
--

DROP TABLE IF EXISTS `event_id`;
CREATE TABLE IF NOT EXISTS `event_id` (
  `event_id` int(4) COLLATE utf8_unicode_ci NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

insert into event_id (descricao) values 
('Luz quarto : ligada'),
('Luz quarto : desligada'),
('Luz cozinha : ligada'),
('Luz cozinha : desligada'),
('Luz sala : ligada'),
('Luz sala : desligada'),
('Luz rua : ligada'),
('Luz rua : desligada'),
('Portao da garagem : aberto'),
('Portao da garagem : fechado'),
('Climatizador : ligado'),
('Climatizador : desligado'),
('Luz quarto : Automatico'),
('Luz quarto : Manual'),
('Luz cozinha : Automatico'),
('Luz cozinha : Manual'),
('Luz sala : Automatico'),
('Luz sala : Manual'),
('Luz rua : Automatico'),
('Luz rua : Manual'),
('Climatizador : Automatico'),
('Climatizador : Manual'),
('Alarme : Habilitado'),
('Alarme : Desabilitado'),
('Alarme : Acionado'),
('Nova Temperatura Autom.');

--
-- Estrutura da tabela usuarios
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Valores default
--

INSERT INTO `users` (`userID`, `username`, `password`, `salt`) VALUES
(1, 'admin', '62f615b1eed9ea340c34485c21a92046488990d45f6369e860e483287e137543', 'f135a0bb');