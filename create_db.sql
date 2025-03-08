CREATE DATABASE galactic_travel;

USE galactic_travel;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    travel_date DATE NOT NULL
);
