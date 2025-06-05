CREATE TABLE rezerwacje (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(100),
    email VARCHAR(100),
    telefon VARCHAR(20),
    data DATE,
    godzina TIME,
    osoby INT
);

CREATE TABLE kontakt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(100),
    email VARCHAR(100),
    wiadomosc TEXT
);
