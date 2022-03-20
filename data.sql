-- TABLE
INSERT INTO File VALUES 
("CV.pdf"), ("LM.pdf"), ("Fiche.pdf"), ("Convoc.pdf");

INSERT INTO Class VALUES 
("A1"), ("A2 info"), ("A2 btp"), ("A3 info"), ("A3 btp"), 
("A4 info"), ("A4 btp"), ("A5 info"), ("A5 btp");

INSERT INTO Address (City) VALUES 
("Aix-en-Provence"), ("Paris"), ("Nantes"), ("Lyon");

INSERT INTO Role (Role) VALUES 
("Student"), ("Pilot"), ("Admin"), ("Deleguate1");

INSERT INTO Company (Name, Domain, Number_intern) VALUES
("Google", "sector 1", 50),
("Apple", "sector 2", 10),
("Airbus", "sector 3", 100);

INSERT INTO Permission (Permission) VALUES 
("perm 1"), ("perm 2"), ("perm 3"), ("perm 4"), ("perm 5"), 
("perm 6"), ("perm 7"), ("perm 8"), ("perm 9"), ("perm 10");

INSERT INTO Mark VALUES (1), (2), (3), (4), (5), (6), (7), (8), (9), (10);

INSERT INTO Opinion VALUES 
("Com 1"), ("Com 2"), ("Com 3"), 
("Com 4"), ("Com 5"), ("Com 6");

INSERT INTO Person (Mail, Pwd, Fname, Lname, ID_Ad) VALUES
("lea.laborde@viacesi.fr", "cesi123", "Lea", "LABORDE", 1),
("maxim.cuynat@viacesi.fr", "123cesi", "Maxim", "CUYNAT", 2),
("khalled.khebbeb@cesi.fr", "cesi321", "Khaled", "KHEBBEB", 1),
("samir.ouchani@cesi.fr", "321cesi", "Samir", "OUCHANI", 3);

INSERT INTO Offer (Post, Skill, Duration, Date, Remu, Nb_Place, ID_Cmp) VALUES
("dev web", "skill 1", 4, '16/03/2022', 591, 5, 1),
("architect", "skill 2", 6, '25/02/2022', 600.5, 1, 3),
("Java", "skill 3", 2, '30/01/2022', 458.99, 2, 1);

-- RELATION

INSERT INTO Pers_File (File, ID_Person) VALUES 
("CV.pdf", 1), ("LM.pdf", 1), ("Fiche.pdf", 3), ("Convoc.pdf", 1);

INSERT INTO Pers_Class (ID_Person, Class) VALUES 
(1, "A2 info"), (2, "A2 btp"), (3, "A2 info"), (3, "A3 info"), (4, "A5 info");

INSERT INTO Offer_Class (Class, ID_Offer) VALUES 
("A2 info", 1), ("A3 btp", 2), ("A5 info", 1), ("A5 info", 3);


INSERT INTO Favoris (ID_Person, ID_Offer) VALUES 
(2,1), (2,2);

INSERT INTO Postuler (ID_Person, ID_Offer) VALUES 
(1,1), (1,3), (2,2);


INSERT INTO Pers_Role (ID_Person, ID_Role) VALUES 
(1,4), (2,1), (3,2), (4,1), (4,2), (4,3);


INSERT INTO Offer_Ad (ID_Offer, ID_Ad) VALUES 
(1,2), (1,4), (2,3), (3,1);


INSERT INTO Cmp_Ad (ID_Ad, ID_Cmp) VALUES 
(2,1), (3,1), (1,2), (4,2), (1,3);


INSERT INTO Opi_Cmp (ID_Cmp, Com) VALUES 
(1, "Com 1"), (2, "Com 2"), (2, "Com 3"), 
(3, "Com 4"), (3, "Com 5"), (3, "Com 6");


INSERT INTO Perm_Role (ID_Role, ID_Perm) VALUES 
(1,1), (1,2), (2,1), (2,2), (2,5), (3,7), (3,8), 
(3,9), (3,10), (4,1), (4,2), (4,3), (4,4), (4,5), (4,6);

INSERT INTO Mark_Cmp (ID_Cmp, Value) VALUES
(1,5), (1,8), (2,7), (3,3);