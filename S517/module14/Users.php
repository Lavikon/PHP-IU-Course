<?php
$dropu = "DROP TABLE IF EXISTS php2022niko_users;";

$createu = "CREATE TABLE php2022niko_users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uname VARCHAR(20) NOT NULL,
    gname VARCHAR(20) NOT NULL,
    fname VARCHAR(50) NOT NULL,
    year INT NOT NULL
)";

$datau = "INSERT INTO php2022niko_users (uname, gname, fname, year)
VALUES
    ('Lavi', 'Niko', 'Lavikainen', 1986);";