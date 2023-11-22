CREATE TABLE categorias (
    idcategoria INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    descripcion TEXT,
    PRIMARY KEY(idcategoria)
);

CREATE TABLE productos(
    id_producto INT AUTO_INCREMENT,
    idcategoria INT,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10,2),
    stock INT,
    statuss INT,
    PRIMARY KEY(id_producto),
    FOREIGN KEY(idcategoria) REFERENCES categorias(idcategoria)
);

CREATE TABLE cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellidoP VARCHAR(255) NOT NULL,
    apellidoM VARCHAR(255) NOT NULL,
    correo_electronico VARCHAR(255) UNIQUE NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    direccion VARCHAR(255),
    genero ENUM('masculino', 'femenino', '39 tipos de gay') NOT NULL
);

CREATE TABLE venta(
    id_venta INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    fecha_venta DATE,
    num_ticket VARCHAR(20),
    hora_venta TIME,
    impuesto DECIMAL(10,2),
    total_venta DECIMAL(10,2),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE detalle_venta (
    iddetalle INT AUTO_INCREMENT,
    id_venta INT,
    id_producto INT,
    cantidad INT,
    precio_unitario DECIMAL(10,2),
    importe DECIMAL(10,2),
    PRIMARY KEY(iddetalle),
    FOREIGN KEY(id_venta) REFERENCES venta(id_venta),
    FOREIGN KEY(id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE proveedor ( 
    id_proveedor INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(255) NOT NULL, 
    email VARCHAR(255) UNIQUE NOT NULL, 
    telefono VARCHAR(20) NOT NULL, 
    direccion VARCHAR(255) NOT NULL, 
    pais VARCHAR(100) NOT NULL, 
    ciudad VARCHAR(100) NOT NULL,
    estatus char(1)
);

CREATE TABLE ingreso_producto( 
    id_ingprod INT PRIMARY KEY AUTO_INCREMENT, 
    id_producto INT NOT NULL, 
    id_proveedor INT NOT NULL, 
    fecha_ingreso DATE NOT NULL, 
    hora_ingreso TIME NOT NULL, 
    cantidad_ingresada INTEGER NOT NULL, 
    precio_compra int NOT NULL, 
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY (id_proveedor) REFERENCES proveedor(id_proveedor)
);

create TABLE detalle_ingreso(
    id_detaing INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    id_ingprod int,
    cantidad INT,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY (id_ingprod) REFERENCES ingreso_producto(id_ingprod)
);

CREATE TABLE usuario ( 
    id_usuario INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(50) NOT NULL, 
    apellidoP VARCHAR(50) NOT NULL,
    apellidoM VARCHAR(50) NOT NULL, 
    telefono VARCHAR(20) NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL, 
    direccion VARCHAR(255) NOT NULL, 
    id_rolperm int,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_rolperm) REFERENCES roles_permisos(id_rolperm)
);

CREATE TABLE roles (
    id_roles INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id_roles),
    UNIQUE (name)
);

CREATE TABLE permisos (
    id_permiso INT AUTO_INCREMENT,
    modulo VARCHAR(255) NOT NULL,
    accion VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id_permiso)
);

create TABLE roles_permisos(
    id_rolperm INT PRIMARY KEY AUTO_INCREMENT,
    id_permiso INT,
    id_roles INT,
    codigo char(6),
    estatus CHAR(1),
    FOREIGN KEY (id_permiso) REFERENCES permisos(id_permiso),
    FOREIGN KEY (id_roles) REFERENCES roles(id_roles)
);