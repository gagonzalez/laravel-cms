create database cms;
use cms;

CREATE TABLE IF NOT EXISTS ejemplo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    campo VARCHAR(20) NOT NULL,
    descripcion VARCHAR(250),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 

insert into ejemplo(campo, descripcion) values ('laravel1','prueba 1 de insercion de base de datos');
insert into ejemplo(campo, descripcion) values ('laravel2','prueba 2 de insercion de base de datos');
insert into ejemplo(campo, descripcion) values ('laravel3','prueba 3 de insercion de base de datos');
insert into ejemplo(campo, descripcion) values ('laravel4','prueba 4 de insercion de base de datos');
insert into ejemplo(campo, descripcion) values ('laravel5','prueba 5 de insercion de base de datos');

select * from ejemplo;