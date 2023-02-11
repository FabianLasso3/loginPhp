create database if not exists usuarios;
use usuarios;

create table persona(
    usuario varchar(50) not null,
    clave varchar(32) not null,
    constraint pk_persona primary key(usuario)  
)ENGINE=InnoDb;

insert into persona(usuario, clave) values ('Fabian', md5(123));