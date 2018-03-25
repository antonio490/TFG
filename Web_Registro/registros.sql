

create table datos
(
username varchar(50),
fecha varchar(100),
puzle int(4),
maxVeloX float(6),
maxVeloY float(6),
fallos int(4),
diffTime float(6),
timeTotal float(6),
N1 int(4),
N2 int(4), 
N3 int(4)
);


create table usuarios
(
user_ID int(4) AUTO_INCREMENT PRIMARY KEY
username varchar(50),
password varchar(50)
);


/**************************************************/

SELECT a.username, a.N1, a.N2, a.N3 
from datos a 
JOIN usuarios b on a.username = b.username


