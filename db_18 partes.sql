CREATE DATABASE parteaccidente CHARACTER SET utf8 COLLATE utf8_general_ci;

-- DROP SCHEMA IF EXISTS parteaccidente;

-- CREATE SCHEMA parteaccidente;

USE parteaccidente;


drop table parte;
drop table trabajador;
drop table login;

CREATE TABLE parte
(
	cod_parte INT(5) NOT NULL AUTO_INCREMENT,
	dni char (9) NOT NULL,
	login VARCHAR(30) NOT NULL,
	fecha_accidente DATE NOT NULL,
	causa_accidente VARCHAR(100) NOT NULL,
	tipo_lesion VARCHAR(60) NOT NULL,
	partes_cuerpo_lesionado VARCHAR(60) NOT NULL,
	gravedad ENUM ('Baja','Normal','Alta') NOT NULL,
	baja ENUM ('Sí','No') NOT NULL,
	CONSTRAINT pk_parte PRIMARY KEY(cod_parte)
) DEFAULT CHARACTER SET = utf8;

CREATE TABLE trabajador
(
	nombre_trabajador VARCHAR(50) NOT NULL,
	dni CHAR(9),
	sexo enum ('hombre','mujer') NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	direccion VARCHAR(25) NOT NULL,
	com_autonoma VARCHAR(20),	
	telefono VARCHAR(50) NOT NULL,
	correo_elec VARCHAR(40) NOT NULL,
	sector ENUM ('Auditoria y Consultoria','Banca y Seguros','Construcci�n e Inmobiliaria','Energia','Educacion','Industria','Farmaceutica','Legal','Recursos Humanos','Servicios Textil y distribucion','Telecomunicaciones y Informatica','Sanidad') NOT NULL,
	CONSTRAINT pk_trabajador PRIMARY KEY(dni)
)DEFAULT CHARACTER SET = utf8;

CREATE TABLE login
(
	login VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL,
	CONSTRAINT pk_login PRIMARY KEY(login)
)DEFAULT CHARACTER SET = utf8;

alter table parte add constraint fk_parte_trabajador foreign key (dni) references trabajador (dni) on delete restrict on update restrict;
alter table parte add constraint fk_parte_login foreign key (login) references login (login) on delete restrict on update restrict;

-- nombre, dni,sexo,fecha_nacimiento,direccion,com_autonoma,telefono,correo_elec,sector

INSERT INTO trabajador VALUES ("Maria del Carmen Sanz", "45678934W","mujer","1960/10/03","Paseo de los Linares 7","Sevilla","645678765","sanzcarmen01@gmail.com","Sanidad");
INSERT INTO trabajador VALUES ("Josep Buenas", "89457634R","hombre","1999/01/15","Colinas 45","Catalu�a","765340287","mcabanyes@hotmail.com","Farmaceutica");
INSERT INTO login VALUES ("admin-1", "inprl-123");
INSERT INTO login VALUES ("admin-2", "inprl-123");
INSERT INTO login VALUES ("admin-3", "inprl-123");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-1", "2019/01/28", "ca�da al mismo nivel", "esguince de tobillo", "tobillo derecho", "Normal", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-1", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-1", "2018/12/02", "ca�da por escaleras del segundo piso", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-1", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "esguince de tobillo", "tobillo derecho", "Normal", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-1", "2019/01/28", "corte con cutter", "cortadura leve en dedo pulgar izquierdo", "dedo pulgar izquierdo", "Baja", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-1", "2017/05/22", "corte con cutter", "cortadura leve en dedo pulgar derecho", "dedo pulgar derecho", "Baja", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-2", "2019/01/28", "ca�da al mismo nivel", "esguince de tobillo", "tobillo derecho", "Normal", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-2", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-2", "2018/12/02", "ca�da por escaleras del segundo piso", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-2", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "esguince de tobillo", "tobillo derecho", "Normal", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-2", "2019/01/28", "corte con cutter", "cortadura leve en dedo pulgar izquierdo", "dedo pulgar izquierdo", "Baja", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-2", "2017/05/22", "corte con cutter", "cortadura leve en dedo pulgar derecho", "dedo pulgar derecho", "Baja", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-3", "2019/01/28", "ca�da al mismo nivel", "esguince de tobillo", "tobillo derecho", "Normal", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-3", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-3", "2018/12/02", "ca�da por escaleras del segundo piso", "fractura de tobillo izquierdo", "tobillo izquierdo", "Alta", "S�");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("89457634R", "admin-3", "2018/12/02", "ca�da de una silla al cambiar una bombilla", "esguince de tobillo", "tobillo derecho", "Normal", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-3", "2019/01/28", "corte con cutter", "cortadura leve en dedo pulgar izquierdo", "dedo pulgar izquierdo", "Baja", "No");
insert into parte (dni, login, fecha_accidente, causa_accidente, tipo_lesion, partes_cuerpo_lesionado, gravedad, baja) values ("45678934W", "admin-3", "2017/05/22", "corte con cutter", "cortadura leve en dedo pulgar derecho", "dedo pulgar derecho", "Baja", "No");

