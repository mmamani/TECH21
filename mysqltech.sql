/*esquema de producto*/
/*tabla marcas*/
drop database if exists tech21;
create database tech21;

use tech21;

drop table if exists marcas;
create table marcas(
    idmarca integer AUTO_INCREMENT,
    nombre varchar(30),
	urlimg text,
	visible bit default true,
    primary key (idmarca),
	constraint uq_nombre unique(nombre))
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
	
	insert into marcas(nombre) values ('HIKVISION');
	insert into marcas(nombre) values ('NAPCO');
	insert into marcas(nombre) values ('QNAP');
	insert into marcas(nombre) values ('AVTECH');
	insert into marcas(nombre) values ('STV');
	insert into marcas(nombre) values ('SOYAL');
	insert into marcas(nombre) values ('VIVOTEK');
	insert into marcas(nombre) values ('VISONIC');
	insert into marcas(nombre) values ('SECUTRON');


drop table if exists categorias;
create table categorias (
    idcat integer AUTO_INCREMENT,
    nombre varchar(30),
    idsubcat integer,
	visible bit default true,
    primary key (idcat),
    foreign key (idsubcat) references categorias(idcat))
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

	insert into categorias (idcat,nombre) values (1,'Alarmas');
	insert into categorias (idcat,nombre) values (2,'Asistencia');    
	insert into categorias (idcat,nombre) values (3,'Cámaras de seguridad');
	insert into categorias (idcat,nombre) values (4,'Alarmas contra incendio');
	insert into categorias (idcat,nombre) values (5,'Radio Enlace');
	insert into categorias (idcat,nombre,idsubcat) values (6,'Cámara Analogica',3);
	insert into categorias (idcat,nombre,idsubcat) values (7,'Cámara IP',3);
	insert into categorias (nombre,idsubcat) values ('CA Domo',6);
	insert into categorias (nombre,idsubcat) values ('CA PTZ',6);
	insert into categorias (nombre,idsubcat) values ('CA Caja',6);
	insert into categorias (nombre,idsubcat) values ('CA Tubo',6);
	insert into categorias (nombre,idsubcat) values ('IP Domo',7);
	insert into categorias (nombre, idsubcat) values ('IP PTZ',7);
	insert into categorias (nombre, idsubcat) values ('IP Caja', 7);
	insert into categorias (nombre, idsubcat) values ('IP Tubo',7);

/*	
drop table if exists imagenes;
create table imagenes(
    idimg integer AUTO_INCREMENT,
    url text,
	visible bit default true,
    primary key (idimg))
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
    
	insert into imagenes (idimg,url) values (1,'img\cam\DS-2CE5582N.jpg')
	*/

/*tabla productos*/
drop table if exists productos;
create table productos (
    idpro integer AUTO_INCREMENT,
    modelo varchar(30),
    idmarca integer,
    idcat integer,
	tipo char(1),
    precio decimal,
    stock tinyint,
    activo bit default true,
    numvist integer,
    urlimg text,
	visible bit default true,
    primary key (idpro),
    foreign key (idmarca) references marcas(idmarca),
    foreign key (idcat) references categorias(idcat))
    ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

	insert into productos (modelo,idmarca,idcat,tipo,precio,stock,urlimg) values ('DS-2CE5582N-IR',1,6,'d',44.56,10,'img\cam\DS-2CE5582N-IR.jpg');
	insert into productos (modelo,idmarca,idcat,tipo,precio,stock,urlimg) values ('DS-2CE1582N-IR',1,6,'t',44.56,10,'img\cam\DS-2CE1582N-IR.jpg');
	
	
create table nseries (
    idserie integer AUTO_INCREMENT,
	idpro integer,
    serie varchar(50),
    vendido boolean,
    primary key (idserie),
    foreign key (idpro) references productos(idpro));
	
create table descripcion (
	iddescr integer auto_increment,
	descripcion varchar(200),
	urlimgico text, 
	primary key (iddescr))
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
	
	insert into descripcion (iddescr,descripcion) values (1,'600 TVL Resolucion Horizontal');
    insert into descripcion (iddescr,descripcion) values (2,'Conmutación Dia/Noche');
	insert into descripcion (iddescr,descripcion) values (3,'Lente 3.6mm');
	insert into descripcion (iddescr,descripcion) values (4,'Temperaturas de Funcionamiento: -40°C a 60°C');
	
create table pro_descr (
	idpro integer,
	iddescr integer,
	foreign key (idpro) references productos(idpro),
    foreign key (iddescr) references descripcion(iddescr))
	ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	insert into pro_descr (idpro,iddescr) values (1,1);
	insert into pro_descr (idpro,iddescr) values (1,2);
	insert into pro_descr (idpro,iddescr) values (1,3);
	insert into pro_descr (idpro,iddescr) values (1,4);
	insert into pro_descr (idpro,iddescr) values (2,1);
	insert into pro_descr (idpro,iddescr) values (2,2);
	insert into pro_descr (idpro,iddescr) values (2,3);
	insert into pro_descr (idpro,iddescr) values (2,4);
	
create table detalle_tecnico (
	id_det_tecnico integer auto_increment,
	especificacion varchar(80),
	detalle_t varchar(100))
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
	
	
	
create table pro_detalle_tec (
	idpro integer,
	id_det_tecnico integer,
	foreign key (idpro) references productos(idpro),
    foreign key (id_det_tecnico) references detalle_tecnico(id_det_tecnico))
	ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
create table promociones (
	idpromo integer auto_increment;
	titulo varchar(50),
	descripcion varchar(200),
	
	
	
	
	
/*esquema de personas*/
create table personas (
    idper integer AUTO_INCREMENT,
    dni char(8),
    nombres varchar(50),
    apellidos varchar(80),
    nomuser varchar(50),
    clave varchar(100),
    email varchar(80),
    direccion varchar(80),
    cell char(12),
    telf char(10),
    activo boolean,
    estado boolean,
    sexo char(1),
    primary key (idper));
    
create table roles(
    idrol integer AUTO_INCREMENT,
    nombre varchar(30),
    primary key (idrol));
  
create table rol_per(
    idrol_per integer AUTO_INCREMENT,
    idper integer,
    idrol integer,
    primary key (idrol_per),
    foreign key (idper) references personas(idper),
    foreign key (idrol) references roles(idrol));
    

    
/*esquema de venta y pedidos*/

    
    
create table pedidos (
    idped integer AUTO_INCREMENT,
    idrol_per integer,
    idemp integer null,
    idcomp integer null,
    fechaped datetime,
    subtotal decimal,
    igv decimal,
    total decimal,
    estado char(1),
    tipo char(1),
    conf boolean,
    fechentrega datetime,
    primary key (idped));
    
create table detallepedidos (
	iddet integer AUTO_INCREMENT,
	idpro integer,    
    modelo varchar(30),
    serie varchar(100),
    cantidad integer,
    preciound decimal,
    subtotal decimal,
    primary key (iddet),
    foreign key (idpro) references productos(idpro),
    foreign key (modelo) references productos(modelo),
    foreign key (serie) references nseries(serie));

    
create table comprobantes(
    idcom integer AUTO_INCREMENT,
    idped integer,
    tipocom char(1),
    razonsocial varchar(80),
    direccion varchar(80),
    ruc char(11),
    primary key (idcom),
    foreign key (idped) references pedidos(idped));

	
	