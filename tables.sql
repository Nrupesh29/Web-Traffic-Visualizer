SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(1024) NOT NULL,
  `target` varchar(1024) NOT NULL,
  `level` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `source`, `target`, `level`, `count`) VALUES
(1, 'INTERNET', 'us-east-1', 1, 1),
(2, 'INTERNET', 'us-west-2', 1, 2),
(3, 'INTERNET', 'eu-west-1', 1, 3),
(4, 'INTERNET', 'server 1', 2, 0),
(5, 'INTERNET', 'server 2', 2, 0),
(6, 'server 1', 'server 3', 2, 0),
(7, 'INTERNET', 'server 4', 2, 0),
(8, 'server 3', 'server 4', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE IF NOT EXISTS `metrics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `normal` double NOT NULL,
  `warning` double NOT NULL,
  `danger` double NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `metrics`
--

INSERT INTO `metrics` (`id`, `normal`, `warning`, `danger`, `type`) VALUES
(1, 18716.976, 766.896, 120.96, 'Normal'),
(2, 830.712, 13139.416, 231.102000001, 'Warning'),
(3, 97.60600000000001, 0.006, 31464.322000000004, 'Danger');

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE IF NOT EXISTS `nodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  `level` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`id`, `name`, `level`, `count`) VALUES
(1, 'INTERNET', 1, 0),
(2, 'us-east-1', 1, 1),
(3, 'us-west-2', 1, 2),
(4, 'eu-west-1', 1, 3),
(5, 'server 1', 2, 0),
(6, 'server 2', 2, 0),
(7, 'server 3', 2, 0),
(8, 'server 4', 2, 0),
(9, 'INTERNET', 2, 0);

