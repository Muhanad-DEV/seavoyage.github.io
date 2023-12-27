-- Create the database
CREATE DATABASE trip_booking_db;
USE trip_booking_db;

-- Table to store trip information
CREATE TABLE trips (
    trip_id INT AUTO_INCREMENT PRIMARY KEY,
    trip_type VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    duration VARCHAR(50) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    available_seats INT NOT NULL,
    additional_info VARCHAR(255),
    UNIQUE KEY unique_trip (trip_type, date, time)
);

-- Insert sample trip data
INSERT INTO trips (trip_type, date, time, duration, cost, available_seats, additional_info)
VALUES
    ('Dolphin Watching', '2023-11-20', '10:00:00', '2 hours', 50.00, 10, 'Enjoy a scenic boat ride while watching playful dolphins in their natural habitat'),
    ('Snorkeling Adventure', '2023-11-22', '14:00:00', '3 hours', 75.00, 8, 'Dive into crystal-clear waters and explore the vibrant underwater world with our snorkeling experience'),
    ('Sailing Excursion', '2023-11-25', '12:00:00', '4 hours', 100.00, 12, 'Relax and unwind on a sailing adventure, experiencing the beauty of the open sea and coastal views'),
    ('Kayaking Adventure', '2023-11-28', '09:30:00', '2.5 hours', 60.00, 6, 'Explore the waters with our exciting kayaking adventure'),
    ('Island Hopping', '2023-12-02', '11:00:00', '5 hours', 120.00, 15, 'Visit multiple islands and enjoy a day of exploration and relaxation'),
    ('Fishing Trip', '2023-12-05', '08:00:00', '6 hours', 80.00, 8, 'Experience the thrill of fishing in the deep sea with our guided fishing trip'),
    ('Sunset Cruise', '2023-12-08', '17:30:00', '1.5 hours', 40.00, 20, 'Enjoy a romantic sunset cruise along the coastline with breathtaking views');

-- Table to store booking information
CREATE TABLE IF NOT EXISTS bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    trip_type VARCHAR(255) NOT NULL,
    num_people INT NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

-- Sample booking data
INSERT INTO bookings (trip_id, num_people)
VALUES
    ('Dolphin Watching', 5),
    ('Kayaking Adventure', 3),
    ('Sailing Excursion', 8),
    ('Snorkeling Adventure', 2),
    ('Fishing Trip', 10),
    ('Island Hopping', 6),
    ('Sunset Cruise', 15);
CREATE TABLE ContactForm (
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message VARCHAR(255)
);
INSERT INTO ContactForm (name, email, message) VALUES
    ('Haithem ALhinai', 'Haithem@example.com', 'Hello, this is my message.'),
    ('Salim Alyhyaii', 'Salim@example.com', 'I would like to inquire about your services.'),
    ('Mohammed ALKhrusi', 'Mohammed@example.com', 'This is another message.'),
    ('Sara ALtmimi', 'Sara@example.com', 'I have a question.'),
    ('Badria Ahmed', 'Badria@example.com', 'Feedback on your website.'),
    ('Azza Gabub, 'Azza@example.com', 'I want to subscribe to your newsletter.'),
    ('Elyas Alshaqsi', 'Elyas@example.com', 'This is a test message.');

CREATE TABLE BoatRental (
    id INT AUTO_INCREMENT PRIMARY KEY,
    boat_name VARCHAR(50) NOT NULL,
    pickup_date DATE NOT NULL,
    return_date DATE NOT NULL,
    num_days INT NOT NULL,
    extras VARCHAR(255),
    fuel_type VARCHAR(10),
    special_requests VARCHAR(255),
    preferences VARCHAR(255),
);
INSERT INTO BoatRental (boat_name, pickup_date, return_date, num_days, extras, fuel_type, ‘NO special_requests’, preferences) VALUES
    ('Boat 1', '2023-12-20', '2023-12-23', 3, 'life-jacket,fishing-rod', 'petrol', 'No special requests', 'preference1,preference2'),
    ('Boat 2', '2023-12-21', '2023-12-24', 3, 'fishing-rod', 'diesel', 'Need a cooler on board', 'preference2,preference3'),
    ('Boat 3', '2023-12-22', '2023-12-25', 3, 'life-jacket', 'petrol', 'Prefer a captain on board', 'preference1,preference3'),
    ('Boat 4', '2023-12-23', '2023-12-26', 3, '', 'diesel', 'No special requests', 'preference1'),
    ('Boat 5', '2023-12-24', '2023-12-25', 1, 'life-jacket,fishing-rod', 'petrol', 'Need snorkeling equipment', 'preference2'),
    ('Boat 6', '2023-12-25', '2023-12-27', 2, 'fishing-rod', 'diesel', 'Prefer morning departure', 'preference3'),
    ('Boat 1', '2023-12-26', '2023-12-29', 3, 'life-jacket', 'petrol', 'No special requests', 'preference1,preference3');
