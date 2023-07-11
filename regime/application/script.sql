create database regime;
use regime;

--checked
create table utilisateur(
    id int primary key auto_increment,
    nom varchar(30),
    email varchar(50),
    mdp varchar(20),
    genre varchar(10),
    taille float,
    poids float,
    argent float
);
insert into utilisateur (nom,email,mdp,genre,taille,poids,argent) values ("Harivony Ellias","harivonyellias@yahoo.com","ellias","M",1.69,63,20000);
--checked
create table objectif(
    id int primary key auto_increment,
    nom varchar(20)
);
insert into objectif (nom) values ('Augmenter_poids');
insert into objectif (nom) values ('Diminuer_poids');

--checked
create table objectif_utilisateur(
    id int primary key auto_increment,
    idUtilisateur int references utilisateur(id),
    idObjectif int references objectif(id),
    kilos float,
    date date
);

--checked
create table regime(
    id int primary key auto_increment,
    menu varchar(30),
    prix float,
    description varchar(50)
);
insert into regime (menu,prix) values ('pack Poisson',10000);
insert into regime (menu,prix) values ('pack Viande blanc',15000);
insert into regime (menu,prix) values ('pack legume Vert',14500);
insert into regime (menu,prix) values ('pack BioFruit',25000);
insert into regime (menu,prix) values ('pack Proteine',19700);

--checked
create table sport(
    id int primary key auto_increment,
    nom varchar(30)
);
insert into sport (nom) values ('Footing');
insert into sport (nom) values ('Caliestic');
insert into sport (nom) values ('Velo');
insert into sport (nom) values ('Plank');
insert into sport (nom) values ('Cardio');

--checked
create table regime_par_kilo(
    id int primary key auto_increment,
    idObjectif int references objectif(id),
    idRegime int references regime(id),
    idSport int references sport(id),
    kilos float,
    duree int 
);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (1,1,2,5,14);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (1,2,1,10,19);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (1,4,3,15,24);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (1,3,3,100,17);


insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (2,5,2,5,7);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (2,2,5,10,19);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (2,3,4,15,4);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (2,3,3,100,17);

insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,5,2,30,10);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,2,5,40,17);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,3,4,50,23);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,3,3,70,14);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,3,3,90,20);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (3,3,3,100,25);

--checked
create table proposition(
    id int primary key auto_increment,
    idUtilisateur int references utilisateur(id),
    idregime int references regime(id),
    duree int,
    kilos float,
    idObjectif int references objectif(id),
    idSport int references sport(id),
    date datetime default now()
);


create table code (
    id int primary key auto_increment,
    monnaie float,
    valeursequence varchar(20),
    utiliser boolean
);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (28372.49, 'A1B2C3D4E5F6G', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (25513.84, 'H7I8J9K0L1M2N', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (17097.75, 'O3P4Q5R6S7T8U', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (18194.51, 'V9W0X1Y2Z3A4B', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (24653.08, 'C5D6E7F8G9H0I', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (29892.17, 'J1K2L3M4N5O6P', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (13172.33, 'Q7R8S9T0U1V2W', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (11748.15, 'X3Y4Z5A6B7C8D', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (16261.32, 'E9F0G1H2I3J4K', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (19527.42, 'L5M6N7O8P9Q0R', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (22203.05, 'S1T2U3V4W5X6Y', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (27856.01, 'Z7A8B9C0D1E2F', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (12314.11, 'G3H4I5J6K7L8M', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (13775.87, 'N9O0P1Q2R3S4T', false);
INSERT INTO code (monnaie, valeursequence, utiliser) VALUES (20853.36, 'U5V6W7X8Y9Z0A', false);


create table demandecode (
    id int primary key auto_increment,
    idUtilisateur int references utilisateur(id),
    idcode int references code(id)
);