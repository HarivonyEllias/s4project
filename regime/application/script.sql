create database regime;
use regime;

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

create table objectif(
    id int primary key auto_increment,
    nom varchar(20)
);
insert into objectif (nom) values ('Augmenter_poids');
insert into objectif (nom) values ('Diminuer_poids');

create table objectif_utilisateur(
    id int primary key auto_increment,
    idUtilisateur int references utilisateur(id),
    idObjectif int references objectif(id),
    kilos float,
    date date
);

create table regime(
    id int primary key auto_increment,
    menu varchar(30),
    prix float
);
insert into regime (menu,prix) values ('Pack_menu_1',10000);
insert into regime (menu,prix) values ('Pack_menu_2',15000);
insert into regime (menu,prix) values ('Pack_menu_3',20000);

create table sport(
    id int primary key auto_increment,
    nom varchar(30)
);
insert into sport (nom) values ('Footing');
insert into sport (nom) values ('Musculation');
insert into sport (nom) values ('Abdo');

create table regime_par_kilo(
    id int primary key auto_increment,
    idObjectif int references objectif(id),
    idRegime int references regime(id),
    idSport int references sport(id),
    kilos float,
    duree int 
    );
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (1,1,2,5,14);
insert into regime_par_kilo (idObjectif,idRegime,idSport,kilos,duree) values (2,2,1,5,14);

create table proposition(
    id int primary key auto_increment,
    idUtilisateur int references utilisateur(id),
    idRegimeParKilo int references regime_par_kilo(id),
    date datetime
);