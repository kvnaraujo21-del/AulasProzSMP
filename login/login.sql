create database login;

use login;

create table usuario (
    id serial primary key not null,
    email varchar (200)not null,
    senha varchar (200)not null,
    perfil varchar (200)check
    (perfil = "ADMINISTRADOR" or perfil = "USUARIO") not null
);

insert into usuario (email, senha, perfil)
values ("marcusgg@gmail.com", sha1('159'), "USUARIO");


