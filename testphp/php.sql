CREATE TABLE `Course` (
    `Id` int(11) NOT NULL,
    `Title` varchar(255) NOT NULL,
    `Description` text DEFAULT NULL,
    `ImageURL` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `Course`
    ADD PRIMARY KEY (`Id`);

ALTER TABLE `courses`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;