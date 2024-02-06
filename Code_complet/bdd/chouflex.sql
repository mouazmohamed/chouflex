#  création de la base ChouFlex™

CREATE DATABASE chouflex DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
use chouflex ;

CREATE TABLE serie(
nom VARCHAR(50),
genre VARCHAR(50),
realisateur VARCHAR(100),
annee INT,
saison INT,
episode INT,
duree INT,
resumer VARCHAR(20000),
img VARCHAR(100)
) ENGINE=Innodb;

CREATE TABLE connexion(
id VARCHAR(20) NOT NULL ,
passwd VARCHAR(20) ,
PRIMARY KEY(id)
) ENGINE=Innodb;

INSERT INTO connexion values ("admin", "siojjr");

INSERT INTO serie values ("Les Deguns","Comédie", "Nordine Salhi", 2014, 4, 41, 25,"Cambriolages ratés agressions manquées, business loupés, Karim et Nono sont très vite rattrapés par leur incompétence et leur formidable capacité à échouer dans tout ce qu'ils entreprennent ! Une suite d'aventures toutes plus invraisemblables, qui les conduiront dans les pires situations.","deguns.jpeg");
INSERT INTO serie values ("Ma famille d'abord", "Comédie", "Don Roye", 2001, 4, 123, 20, "Michael Kyle est un mari aimant et un père de famille comblé. Mais il n'est pas toujours facile d'élever trois enfants. Entre un fils passionné de musique rap, une fille adolescente qui lui cause bien des soucis et la benjamine qui veut toujours avoir le dernier mot, on ne s'ennuie pas avec la famille Kyle.","mfd.jpeg");
INSERT INTO serie values ("Malcolm", "Comédie", "Linwood Boomer", 2000, 7, 151, 23, "Petit génie malgré lui, Malcolm vit dans une famille hors du commun. Le jeune surdoué n'hésite pas à se servir de son intelligence pour faire les 400 coups avec ses frères. Et les parents tentent tant bien que mal de canaliser l'énergie de ces petits démons.","malc.jpeg");
INSERT INTO serie values ("The Haunting of Hill House", "Horreur", "Mike Flanagan", 2018, 1, 10, 54,"Après le suicide de leur benjamine, quatre frères et soeurs se souviennent des événements survenus dans la maison hantée de leur enfance, un lieu sinistre que toute la famille a fui jadis, après la mort de la mère. Entre passé et présent, ils vont affronter leurs deuils et leurs fantômes.", "hohh.jpeg");
INSERT INTO serie values ("Stranger Things", "Horreur", "Matt & Ross Duffer", 2016, 4, 34, 42,"A Hawkins, en 1983 dans l'Indiana. Lorsque Will Byers disparaît de son domicile, ses amis se lancent dans une recherche semée d'embûches pour le retrouver. Dans leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite.", "st.jpeg");
INSERT INTO serie values ("Resident Evil", "Horreur", "Andrew Dabb", 2022, 1, 8, 63,"En 2022, vingt ans ont passé depuis la mystérieuse destruction de Raccoon City par le gouvernement américain. Sœurs jumelles de 14 ans, Billie et Jade Wesker, emménagent avec leur père Albert, à New Raccoon City, une ville créée de toutes pièces par Umbrella Corporation en Afrique du Sud.", "re.jpeg");
INSERT INTO serie values ("Dragon Ball Super", "Manga", "Kimotoshi Chioka", 2015, 1, 131, 25,"Au lendemain de son féroce combat avec Majin Buu, Goku tente de maintenir la paix sur Terre. L'arrivée de nombreux extra-terrestres l'oblige à se surpasser une nouvelle fois et s'engager dans une terrible bataille qui va l'amener dans une nouvelle dimension, au-delà des possibilités de l'imaginaire !", "dbs.jpeg");
INSERT INTO serie values ("One Piece", "Manga", "Konosuke Uda", 1997, 1, 1047, 25,"L'histoire suit principalement l'équipage de Chapeau de paille, mené par son capitaine Monkey D. Luffy, un jeune homme ayant mangé, enfant, sans le savoir le fruit du Gum Gum qui lui permet d'étirer ses membres, et dont le rêve est de devenir le Roi des pirates.", "op.jpeg");
INSERT INTO serie values ("Naruto", "Manga", "Kayato Date", 2002, 1, 220, 25,"Naruto est un garçon qui vit dans le village de Konoah. Il rêve de devenir Hokage (un grand chef qui protège son village et qui est très puissant). Mais il est détesté de tout le monde, car il a un démon scellé en lui: le démon renard à neuf queues (Kyubi).", "naru.jpeg");