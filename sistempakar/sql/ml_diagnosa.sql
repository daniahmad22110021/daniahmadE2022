CREATE DATABASE IF NOT EXISTS ml_diagnosa;
USE ml_diagnosa;

CREATE TABLE hasil_diagnosa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(100),
    tier VARCHAR(50),
    winrate INT,
    jumlah_hero INT,
    role VARCHAR(50),
    hasil TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);