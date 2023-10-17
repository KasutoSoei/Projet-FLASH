DROP DATABASE IF EXISTS PowerOfMemory;

CREATE DATABASE PowerOfMemory;

USE PowerOfMemory;

--Story 1, création des tables

CREATE TABLE Utilisateur (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    pseudo VARCHAR(127) NOT NULL,
    dateHeureInscription DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dateHeureConnexion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, --la date de connexion et d'inscription sont par défaut la date de création du compte
    PRIMARY KEY (id),
    CONSTRAINT ak_email UNIQUE(email),
    CONSTRAINT ak_pseudo UNIQUE(pseudo) --création de clés alternatives pour rendre l'email et le pseudo unique
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE Jeu(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nomJeu VARCHAR(63) NOT NULL,
    PRIMARY KEY (id)
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE Scores (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    idJoueur INT UNSIGNED NOT NULL,
    idJeu INT UNSIGNED NOT NULL,
    difficulte VARCHAR(10) NOT NULL,
    score INT NOT NULL,
    dateHeureScore DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_Scores_idJoueur FOREIGN KEY (idJoueur) REFERENCES Utilisateur(id) ON DELETE CASCADE,
    CONSTRAINT fk_Scores_idJeu FOREIGN KEY (idJeu) REFERENCES Jeu(id) ON DELETE CASCADE --Supprime les scores d'un joueur si son id ou le jeu est supprimé
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE Chat (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    idJeu INT UNSIGNED NOT NULL,
    idExpediteur INT UNSIGNED NOT NULL,
    messageChat TEXT,
    dateHeureMessage DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_Chat_idJeu FOREIGN KEY (idJeu) REFERENCES Jeu(id) ON DELETE CASCADE,
    CONSTRAINT fk_Chat_idExpediteur FOREIGN KEY (idExpediteur) REFERENCES Utilisateur(id) ON DELETE CASCADE --Supprime les messages d'un joueur si son id ou le jeu est supprimé
)
CHARACTER SET 'utf8'
ENGINE = INNODB;  

--Story 2, ajouter des valeurs dans les tables

INSERT INTO Utilisateur (email, mdp, pseudo, dateHeureInscription, dateHeureConnexion)
VALUES ("kristian.chou@gmail.com", "JeSuisKristian", "ChouKri", "2023-10-16 11:54:00", "2023-10-16 12:00:00"),
    ("gwendal@gmail.com", "GwendalAigri", "LAIGRI ORIGINEL", "2023-10-16 11:54:00", "2023-10-16 12:00:00"),
    ("elwan@gmail.com", "ElWaN", "Djezon", "2023-10-16 11:54:00", "2023-10-16 12:00:00"),
    ("halloooooooo@gmail.com", "halloooooooo", "HelloColonel", "2023-10-16 11:54:00", "2023-10-16 12:00:00"),
    ("stefan@gmail.com", "JeSuisLeGoat", "LeDieuDeTous", "2023-10-16 11:54:00", "2023-10-16 12:00:00");
    
INSERT INTO Jeu (id, nomJeu)
VALUES (1, 'The Power Of Memory');

INSERT INTO Scores (idJoueur, idJeu, difficulte, score, dateHeureScore)
VALUES (1, 1, "medium", 46, "2023-12-29 12:03:00"),
    (4, 1, "facile", 54, "2023-11-21 07:12:00"),
    (3, 1, "medium",12 , "2023-12-03 00:07:00"),
    (2, 1, "facile", 20, "2023-10-31 10:09:00"),
    (5, 1, "difficile", 143, "2023-12-15 23:13:00");

INSERT INTO Chat (idJeu, idExpediteur, messageChat, dateHeureMessage)
VALUES (1, 1, "Blablabla", "2023-10-16 12:00:00"),
    (1, 2, "Blablabla", "2023-10-16 12:02:00"),
    (1, 5, "Blablabla", "2023-10-16 12:02:00"),
    (1, 3, "Blablabla", "2023-10-16 12:04:00"),
    (1, 4, "Blablabla", "2023-10-16 12:05:00"),
    (1, 2, "Blablabla", "2023-10-16 12:06:00"),
    (1, 1, "Blablabla", "2023-10-16 12:06:00"),
    (1, 5, "Blablabla", "2023-10-16 12:06:00"),
    (1, 4, "Blablabla", "2023-10-16 12:07:00"),
    (1, 5, "Blablabla", "2023-10-16 12:07:00"),
    (1, 2, "Blablabla", "2023-10-16 12:08:00"),
    (1, 3, "Blablabla", "2023-10-16 12:09:00"),
    (1, 4, "Blablabla", "2023-10-16 12:12:00"),
    (1, 2, "Blablabla", "2023-10-16 12:12:00"),
    (1, 1, "Blablabla", "2023-10-16 12:14:00"),
    (1, 2, "Blablabla", "2023-10-16 12:15:00"),
    (1, 3, "Blablabla", "2023-10-16 12:15:00"),
    (1, 1, "Blablabla", "2023-10-16 12:16:00"),
    (1, 5, "Blablabla", "2023-10-16 12:17:00"),
    (1, 3, "Blablabla", "2023-10-16 12:17:00"),
    (1, 2, "Blablabla", "2023-10-16 12:19:00"),
    (1, 4, "Blablabla", "2023-10-16 12:20:00"),
    (1, 1, "Blablabla", "2023-10-16 12:21:00"),
    (1, 2, "Blablabla", "2023-10-16 12:21:00"),
    (1, 3, "Blablabla", "2023-10-16 12:22:00");

--Story 3 déjà faite

--Story 4, changement du mot de passe ou du mail

UPDATE Utilisateur
SET mdp = "motdepassezinzin"
WHERE id=3;

UPDATE Utilisateur
SET email="different@gmail.com"
WHERE id=3 AND mdp="motdepassezinzin";

--Story 5, s'identifier sur internet

SELECT *
FROM Utilisateur
WHERE email="gwendal@gmail.com"
AND mdp="GwendalAigri";

SELECT *
FROM Utilisateur
WHERE pseudo="LAIGRI ORIGINEL";

--Story 6 déjà faite

--Story 7, afficher les scores selon l'ordre demandé

SELECT Scores.*
FROM Scores
INNER JOIN Jeu ON Scores.idJeu=Jeu.id
INNER JOIN Utilisateur ON Scores.idJoueur=Utilisateur.id
ORDER BY Jeu.nomJeu ASC,
CASE
    WHEN difficulte="facile" THEN 1
    WHEN difficulte="medium" THEN 2
    ELSE 3 END,
score ASC;

--Story 8, story 7 mais avec des filtres

SELECT Scores.*
FROM Scores
INNER JOIN Jeu ON Scores.idJeu=Jeu.id
INNER JOIN Utilisateur ON Scores.idJoueur=Utilisateur.id
WHERE nomJeu="The Power Of Memory"
AND pseudo="LeDieuDeTous"
AND difficulte="difficile"
ORDER BY Jeu.nomJeu ASC,
CASE
    WHEN difficulte="facile" THEN 1
    WHEN difficulte="medium" THEN 2
    ELSE 3 END,
score ASC;

--Story 9, actualiser le score d'un utilisateur s'il est meilleur que l'ancien ou ajoute une ligne si c'est son premier score

SELECT idJoueur, idJeu, difficulte, score
FROM Scores
WHERE idJoueur=5
AND idJeu=1
AND difficulte="difficile";

UPDATE Scores
SET score=175, dateHeureScore=CURRENT_TIMESTAMP
WHERE score<=175
AND idJoueur=5
AND difficulte="difficile";

INSERT INTO Scores (idJoueur, idJeu, difficulte, score, dateHeureScore)
VALUES (5, 1, 'difficile', 175, CURRENT_TIMESTAMP);

--Story 10, ajouter un message au chat

INSERT INTO Chat (idJeu, idExpediteur, messageChat, dateHeureMessage)
VALUES (1, 3, "BlablablaBis", "2023-10-16 12:00:00");

--Story 11, afficher la table chat avec une colonne 'isSender' si le message est assez récent

SELECT messageChat, pseudo, dateHeureMessage, Utilisateur.id=3 as isSender
FROM Chat
INNER JOIN Utilisateur ON Chat.idExpediteur=Utilisateur.id
WHERE dateHeureMessage> "2023-10-16 12:09:00";

--Story 12, rechercher le pseudo d'un joueur est afficher son score

SELECT Scores.*
FROM Scores
INNER JOIN Utilisateur ON idJoueur=Utilisateur.id
WHERE pseudo LIKE "%nel%";