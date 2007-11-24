CREATE TABLE person (
 
   first_name varchar(20),
   last_name varchar(20),
   age int(3),
   uid int(2),
   PRIMARY KEY (uid)
);

INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Dupond', 'Lajoie', 55, 1 );
 
INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Julie', 'Petite', 23, 2 );
 
INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Yolande', 'Moreaux', 60, 3 );
 
INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Philippe', 'Molaro', 40, 4 );
 
INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Maelle', 'Pelnoux', 8, 5 );
 
INSERT INTO person ( first_name, last_name, age, uid )
VALUES ( 'Pascal', 'Dupuy', 20, 6 );