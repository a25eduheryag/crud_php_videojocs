# crud_php_videojocs
CRUD amb PHP sobre una base de dades de videojocs, CSS amb Boostrap

Sentencia per crear la base de dades
CREATE TABLE videojuegos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    descripcion varchar(255)
);
