CREATE DATABASE IF NOT EXISTS rush01;
            USE rush01;
            CREATE TABLE users
            (
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                login VARCHAR(8) UNIQUE KEY DEFAULT 'player',
                pass VARCHAR(512) NOT NULL
            );
            CREATE TABLE ranking
            (
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                victories INT DEFAULT 0 NOT NULL,
                losses INT DEFAULT 0 NOT NULL
            );
            CREATE TABLE chat
            (
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                id_user INT NOT NULL,
                message TEXT,
                dates DATETIME NOT NULL
            );
            CREATE TABLE games_in_progress
            (
                id_game INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                player1 TEXT DEFAULT NULL,
                player2 TEXT DEFAULT NULL,
                player3 TEXT DEFAULT NULL,
                player4 TEXT DEFAULT NULL,
                groupe ENUM ('running', 'waiting') DEFAULT 'waiting' NOT NULL,
                rounds INT DEFAULT 0 NOT NULL
            );