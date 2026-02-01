CREATE DATABASE IF NOT EXISTS todo_app;

USE todo_app;

CREATE TABLE
    IF NOT EXISTS tasks (
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(255) NOT NULL,
        text TEXT
    );

INSERT INTO
    tasks (name, text)
VALUES
    (
        "Note de test 1",
        "Je suis la note de test numéro 1"
    ),
    (
        "Note de test 2",
        "Je suis la note de test numéro 2"
    );