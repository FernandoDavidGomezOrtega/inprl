CREATE DATABASE taxi_wamp CHARACTER SET utf8 COLLATE utf8_general_ci;
USE taxi_wamp;


-- drop table hojadiaria;
-- drop table totalesmes;
-- drop table login;

CREATE TABLE hojadiaria
(
  id INT(3) AUTO_INCREMENT,
  users_id INT (3) NOT NULL,
  fecha_hoja DATE NOT NULL,
  ganancia_dia float(5.2) not null,
  gasoil_dia INT (9) NOT NULL,
  CONSTRAINT pk_hojadiaria PRIMARY KEY(id)
) DEFAULT CHARACTER SET = utf8;

-- CREATE TABLE totalesmes
-- (
--	mes_year VARCHAR(50) NOT NULL,
--	ganancia_mes float(5.2) not null,
--	gasoil_mes INT (9),
--	CONSTRAINT pk_totalesmes PRIMARY KEY(mes_year)
-- )DEFAULT CHARACTER SET = utf8;

CREATE TABLE users
(
  id INT(3) AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL,
  CONSTRAINT pk_login PRIMARY KEY(id)
)DEFAULT CHARACTER SET = utf8;

--
-- indices para la tabla `HOJADIARIA`
--
ALTER TABLE `hojadiaria`

ADD CONSTRAINT uk_fecha_hoja_users_id UNIQUE(fecha_hoja, users_id);

--
-- Indices para la tabla users
--
ALTER TABLE users
ADD CONSTRAINT uk_name UNIQUE(name);

-- alter table hojadiaria add constraint fk_hojadiaria_totalesmes foreign key (mes_year) references totalesmes (mes_year) on delete restrict on update restrict;
-- alter table parte add constraint fk_parte_login foreign key (login) references login (login) on delete restrict on update restrict;



INSERT INTO USERS (name, password) VALUES ("Fernando", "l");
INSERT INTO USERS (name, password) VALUES ("Irene", "l");
