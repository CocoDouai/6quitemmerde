/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  15/02/2017 12:17:17                      */
/*==============================================================*/


drop table if exists CARTE;

drop table if exists CARTE_JOUEE;

drop table if exists COMPORTE;

drop table if exists COMPOSEE_DE;

drop table if exists DEFAUSSE;

drop table if exists INVITATION;

drop table if exists JOUEUR;

drop table if exists MAIN;

drop table if exists MANCHE;

drop table if exists PARTIE;

drop table if exists RANGEE;

drop table if exists REGLE;

drop table if exists REJOINDRE;

drop table if exists TOUR;

/*==============================================================*/
/* Table : CARTE                                                */
/*==============================================================*/
create table CARTE
(
   ID_CARTE             int not null,
   MALUS                int comment 'Nombre de taureaux',
   primary key (ID_CARTE)
);

/*==============================================================*/
/* Table : CARTE_JOUEE                                          */
/*==============================================================*/
create table CARTE_JOUEE
(
   ID_CARTE             int not null,
   ID_JOUEUR            int not null,
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   NUMERO_TOUR          int not null,
   primary key (ID_CARTE, ID_JOUEUR, ID_PARTIE, NUMERO_MANCHE, NUMERO_TOUR)
);

/*==============================================================*/
/* Table : DEFAUSSE                                             */
/*==============================================================*/
create table DEFAUSSE
(
   ID_DEFAUSSE          int not null auto_increment,
   ID_JOUEUR            int not null,
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   ID_CARTE             int not null,
   primary key (ID_DEFAUSSE)
);

/*==============================================================*/
/* Table : INVITATION                                           */
/*==============================================================*/
create table INVITATION
(
   ID_JOUEUR            int not null,
   ID_PARTIE            int not null,
   ACCEPTE              bool DEFAULT false,
   REFUSE               bool DEFAULT false,
   primary key (ID_JOUEUR, ID_PARTIE)
);

/*==============================================================*/
/* Table : JOUEUR                                               */
/*==============================================================*/
create table JOUEUR
(
   PSEUDO               varchar(20),
   ADRESSE_MEL          varchar(100),
   PARTIES_GAGNEES      int DEFAULT 0,
   NB_PARTIES_JOUEE     int DEFAULT 0,
   MDP                  varchar(20),
   SCORE_GENERAL        int DEFAULT 0,
   ID_JOUEUR            int not null auto_increment,
   primary key (ID_JOUEUR)
);

/*==============================================================*/
/* Table : MAIN                                                 */
/*==============================================================*/
create table MAIN
(
   ID_MAIN              int not null auto_increment,
   ID_JOUEUR            int not null,
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   ID_CARTE		int not null,
   primary key (ID_MAIN)
);

/*==============================================================*/
/* Table : MANCHE                                               */
/*==============================================================*/
create table MANCHE
(
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   primary key (ID_PARTIE, NUMERO_MANCHE)
);

/*==============================================================*/
/* Table : PARTIE                                               */
/*==============================================================*/
create table PARTIE
(
   ID_PARTIE            int not null auto_increment,
   ID_CREATEUR          int not null,
   DEMARRER             bool DEFAULT false,
   TERMINER             bool DEFAULT false,
   ID_REGLE				int not null,
   PARTIE_PUBLIQUE		bool,
   primary key (ID_PARTIE)
);

/*==============================================================*/
/* Table : RANGEE                                               */
/*==============================================================*/
create table RANGEE
(
   ID_CARTE             int not null,
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   NUMERO_RANGEE        int,
   primary key (ID_PARTIE, NUMERO_MANCHE, ID_CARTE)
);

/*==============================================================*/
/* Table : REGLE                                                */
/*==============================================================*/
create table REGLE
(
   ID_REGLE             int not null auto_increment,
   LIBELLE              varchar(20) DEFAULT 'default',
   NB_JOUEURS           int DEFAULT 4,
   NB_CARTES_MAIN       int DEFAULT 10,
   NB_RANGEES           int DEFAULT 4,
   NB_CARTES_RANGEE     int DEFAULT 5,
   SCORE_FIN_PARTIE     int DEFAULT 66,
   VARIANTE_PRO         bool DEFAULT false,
   primary key (ID_REGLE)
);


/*==============================================================*/
/* Table : REJOINDRE                                            */
/*==============================================================*/
create table REJOINDRE
(
   ID_JOUEUR            int not null,
   ID_PARTIE            int not null,
   SCORE                int DEFAULT 0,
   primary key (ID_JOUEUR, ID_PARTIE)
);

alter table REJOINDRE comment 'Un joueur rejoint une partie';

/*==============================================================*/
/* Table : TOUR                                                 */
/*==============================================================*/
create table TOUR
(
   ID_PARTIE            int not null,
   NUMERO_MANCHE        int not null,
   NUMERO_TOUR          int not null,
   primary key (ID_PARTIE, NUMERO_MANCHE, NUMERO_TOUR)
);

/*==============================================================*/
/* cree les relations entre tables                              */
/*==============================================================*/

alter table CARTE_JOUEE add constraint FK_EST_ASOCIEE foreign key (ID_CARTE)
      references CARTE (ID_CARTE) on delete restrict on update cascade;

alter table CARTE_JOUEE add constraint FK_JOUE foreign key (ID_JOUEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;

alter table CARTE_JOUEE add constraint FK_JOUEE foreign key (ID_PARTIE, NUMERO_MANCHE, NUMERO_TOUR)
      references TOUR (ID_PARTIE, NUMERO_MANCHE, NUMERO_TOUR) on delete restrict on update cascade;

alter table DEFAUSSE add constraint FK_APPARTIENT_A foreign key (ID_JOUEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;
      
alter table DEFAUSSE add constraint FK_APPARTIENT_A2 foreign key (ID_PARTIE, NUMERO_MANCHE)
      references MANCHE (ID_PARTIE, NUMERO_MANCHE) on delete restrict on update cascade;

alter table DEFAUSSE add constraint FK_APPARTIENT_A3 foreign key (ID_CARTE)
      references CARTE (ID_CARTE) on delete restrict on update cascade;

alter table INVITATION add constraint FK_INVITATION foreign key (ID_JOUEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;

alter table INVITATION add constraint FK_INVITATION2 foreign key (ID_PARTIE)
      references PARTIE (ID_PARTIE) on delete restrict on update cascade;

alter table MAIN add constraint FK_ASSOCIEE_A foreign key (ID_PARTIE, NUMERO_MANCHE)
      references MANCHE (ID_PARTIE, NUMERO_MANCHE) on delete restrict on update cascade;

alter table MAIN add constraint FK_EST_POSSEDEE_PAR foreign key (ID_JOUEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;

alter table MAIN add constraint FK_EST_POSSEDEE_PAR2 foreign key (ID_CARTE)
      references CARTE (ID_CARTE) on delete restrict on update cascade;

alter table MANCHE add constraint FK_EST_DIVISE_EN foreign key (ID_PARTIE)
      references PARTIE (ID_PARTIE) on delete restrict on update restrict;

alter table PARTIE add constraint FK_CREER foreign key (ID_CREATEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;

alter table PARTIE add constraint FK_REGLE_PARTIE foreign key (ID_REGLE)
      references REGLE (ID_REGLE) on delete restrict on update cascade;

alter table RANGEE add constraint FK_COMPORTE2 foreign key (ID_PARTIE, NUMERO_MANCHE)
      references MANCHE (ID_PARTIE, NUMERO_MANCHE) on delete restrict on update cascade;

alter table RANGEE add constraint FK_COMPORTE foreign key (ID_CARTE)
      references CARTE (ID_CARTE) on delete restrict on update cascade;

alter table REJOINDRE add constraint FK_REJOINDRE foreign key (ID_JOUEUR)
      references JOUEUR (ID_JOUEUR) on delete restrict on update cascade;

alter table REJOINDRE add constraint FK_REJOINDRE2 foreign key (ID_PARTIE)
      references PARTIE (ID_PARTIE) on delete restrict on update cascade;

alter table TOUR add constraint FK_EST_DIVISEE_EN foreign key (ID_PARTIE, NUMERO_MANCHE)
      references MANCHE (ID_PARTIE, NUMERO_MANCHE) on delete restrict on update cascade;

