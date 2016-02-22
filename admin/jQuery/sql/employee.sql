CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;


INSERT INTO `employee` (`employee_id`, `name`, `email`, `telephone`) VALUES
(1, 'Dennis Ritchie', 'dritchie@bell.com', '555-154-8745'),
(2, 'Ken Thompson', 'kthompson@bell.com', '555-154-1234'),
(3, 'Steve Jobs', 'sjobs@apple.com', '751-121-8124');