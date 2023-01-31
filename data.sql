USE CONTROLE_PLACA;
CREATE TABLE controle_placa (
    id int NOT NULL,
    name varchar(128) NOT NULL,
    phone varchar(32) NOT NULL,
    cpf varchar(32) NOT NULL,
    placa varchar(32) NOT NULL,
    PRIMARY KEY (id)
);