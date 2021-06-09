use testing;

-- CREATE TABLE `users` (
--   `id` int(11) NOT NULL auto_increment,
--   `name` varchar(100) NOT NULL,
--   'gender' varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL,
--   `age` int(3) NOT NULL,
--   `email` varchar(100) NOT NULL,
--   PRIMARY KEY  (`id`)
-- );

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL auto_increment,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ImageUrl` varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Username`, `Password`, `FirstName`, `LastName`, `Age`, `Gender`, `ImageUrl`) VALUES
(1, 'demousername1', '123456', 'Hai', 'Bui', 20, 'Male', '../images/male.jpg'),
(2, 'demousername2', '123456', 'Nhat', 'Thai', 20, 'Male', '../images/male.jpg'),
(3, 'demousername3', '123456', 'Phuc', 'Nguyen', 20, 'Male', '../images/male.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
