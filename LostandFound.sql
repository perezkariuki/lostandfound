CREATE DATABASE LostandFound;

CREATE TABLE `credentials` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `FirstName` varchar(255) NOT NULL,
    `LastName` varchar(255) NOT NULL,
    `Phone` varchar(255) NOT NULL,
    `Email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `code` mediumint(50) NOT NULL,
    `status` text NOT NULL,
    PRIMARY KEY(`id`);

CREATE TABLE `foundItems`(
    `idFound` int(255) NOT NULL AUTO_INCREMENT,
    `img` LONGBLOB NOT NULL,
    `category` varchar(255) NOT NULL,
    `serial` varchar(255),
    `brand` varchar(255) NOT NULL,
    `colour` varchar(255) NOT NULL,
    `datetime` DATE NOT NULL,
    `location` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `credentials_id` int(11) NOT NULL,
    PRIMARY KEY (`idFound`),
    CONSTRAINT FK_foundItems_1
    FOREIGN KEY (credentials_id) REFERENCES credentials(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE `lostItems`(
    `idLost` int(255) NOT NULL AUTO_INCREMENT,
    `img` LONGBLOB NOT NULL,
    `category` varchar(255) NOT NULL,
    `serial` varchar(255),
    `brand` varchar(255) NOT NULL,
    `colour` varchar(255) NOT NULL,
    `datetime` DATE NOT NULL,
    `location` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `credentials_id` int(11) NOT NULL,
    PRIMARY KEY (`idLost`),
    CONSTRAINT FK_lostItems_1
    FOREIGN KEY (credentials_id) REFERENCES credentials(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;