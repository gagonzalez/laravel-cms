
insert into ejemplo(campo, descripcion, activo) values ('New York','prueba 1 de insercion de base de datos', 1);
insert into ejemplo(campo, descripcion, activo) values ('Toronto','prueba 2 de insercion de base de datos', 1);
insert into ejemplo(campo, descripcion, activo) values ('Madrid','prueba 3 de insercion de base de datos', 1);
insert into ejemplo(campo, descripcion, activo) values ('Mexico','prueba 4 de insercion de base de datos', 1);
insert into ejemplo(campo, descripcion, activo) values ('Paris','prueba 5 de insercion de base de datos', 1);

INSERT INTO users (name, email, password, pais_id, created_at) VALUES ('Gustavo Gonzalez', 'gagonzalez@live.com', 'Qwerty789', 1, SYSDATE());
INSERT INTO users (name, email, password, pais_id, created_at) VALUES ('Cinthia Velasquez', 'cijovero@yahoo.com', 'Qwerty789', 8, SYSDATE());

INSERT INTO roles (rol, created_at) VALUES ('Administrador', SYSDATE());
INSERT INTO roles (rol, created_at) VALUES ('Usuario', SYSDATE());

INSERT INTO pais (nombre, created_at) VALUES ('Honduras', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Guatemala', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('El Salvador', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Nicaragua', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Costa Rica', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Panama', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Belice', SYSDATE());
INSERT INTO pais (nombre, created_at) VALUES ('Estados Unidos', SYSDATE());

INSERT INTO role_user (user_id, role_id) VALUES (1, 1);
INSERT INTO role_user (user_id, role_id) VALUES (2, 2);

INSERT INTO photos (path, imageable_id, imageable_type, created_at) VALUES ('gustavo.jpg', '1', 'App\\Models\\User', SYSDATE());
INSERT INTO photos (path, imageable_id, imageable_type, created_at) VALUES ('logo.jpg', '1', 'App\\Models\\Ejemplo', SYSDATE());
INSERT INTO photos (path, imageable_id, imageable_type, created_at) VALUES ('icono.jpg', '1', 'App\\Models\\Ejemplo', SYSDATE());  