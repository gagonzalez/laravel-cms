create database cms;
use cms;

CREATE TABLE IF NOT EXISTS prueba (
    idprueba INT AUTO_INCREMENT PRIMARY KEY,
    campo VARCHAR(20) NOT NULL,
    description VARCHAR(250),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 

insert into prueba(campo, descripcion) values ('laravel','prueba 1 de insercion de base de datos');
insert into prueba(campo, descripcion) values ('laravel','prueba 2 de insercion de base de datos');
insert into prueba(campo, descripcion) values ('laravel','prueba 3 de insercion de base de datos');
insert into prueba(campo, descripcion) values ('laravel','prueba 4 de insercion de base de datos');
insert into prueba(campo, descripcion) values ('laravel','prueba 5 de insercion de base de datos');

select * from prueba;