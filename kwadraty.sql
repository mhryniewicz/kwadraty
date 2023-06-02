CREATE DATABASE kwadraty;

USE kwadraty;

CREATE TABLE kwadraty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pole INT NOT NULL,
    liczba_bokow INT NOT NULL,
    kolor VARCHAR(20) NOT NULL
);

INSERT INTO kwadraty (pole, liczba_bokow, kolor) VALUES
(16, 4, 'czerwony'),
(25, 4, 'zielony'),
(36, 4, 'niebieski'),
(49, 4, 'żółty'),
(64, 4, 'fioletowy'),
(81, 4, 'pomarańczowy'),
(100, 4, 'różowy');
