CREATE TABLE user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    genero ENUM('feminino', 'masculino', 'outro'),
    data_nasc DATE NOT NULL,
) ENGINE = InnoDB;

CREATE TABLE companhia_aerea(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL, 
    cpnj VARCHAR(150) NOT NULL,
    endereco VARCHAR(500) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
) ENGINE = InnoDB;

CREATE TABLE voo(
    id INT PRIMARY KEY AUTO_INCREMENT.
    companhia_aerea_id INT NOT NULL,
    origem VARCHAR(150) NOT NULL,    
    destino VARCHAR(150) NOT NULL,
    data_horario DATETIME NOT NULL,
    duracao INT NOT NULL,
    assentos INT NOT NULL,
    valor FLOAT NOT NULL,
    FOREIGN KEY (companhia_aerea_id) REFERENCES companhia_aerea(id) ON DELETE CASCADE,
) ENGINE = InnoDB;   

CREATE TABLE reserva(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    voo_id INT NOT NULL,
    qtd_passagem INT NOT NULL,
    situacao VARCHAR(50) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (voo_id) REFERENCES voo(id) ON DELETE CASCADE,
) ENGINE = InnoDB;

CREATE TABLE admin(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(100) NOT NULL,
) ENGINE = InnoDB;