/*drop table if exists unidades;
*/
/*==============================================================*/
/* Table: unidades                                              */
/*==============================================================*/
create table unidades
(
   id_unidad	varchar(3) not null,
   nombre   	varchar(50),
   primary key (id_unidad)
)
engine = InnoDB
character set utf8
collate utf8_spanish_ci;

drop table if exists categorias;

/*==============================================================*/
/* Table: categorias                                            */
/*==============================================================*/
create table categorias
(
   id_categoria		int not null auto_increment,
   nombre   		varchar(50),
   primary key (id_categoria)
)
engine = InnoDB
character set utf8
collate utf8_spanish_ci;

drop table if exists productos;

/*==============================================================*/
/* Table: productos                                             */
/*==============================================================*/
create table productos
(
   id_producto		int not null auto_increment,
   nombre           varchar(100),
   marca            varchar(100),
   fecreg           datetime,
   id_unidad		varchar(3),
   id_categoria     int,
   tipo_producto	enum('F','I'),
   codigo			varchar(20),
   primary key (id_producto)
)
engine = InnoDB
character set utf8
collate utf8_spanish_ci;

insert into unidades (id_unidad, nombre) values
	('und', 'Unidad'),
	('m', 'Metros'),
	('kg', 'Kilogramos'),
	('m2', 'Metros cuadrados'),
	('m3', 'Metros Cúbicos'),
	('l', 'Litros'),
	('cj', 'Cajas');

insert into categorias (nombre) values ('Equipos');