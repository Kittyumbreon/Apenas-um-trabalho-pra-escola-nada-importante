CREATE TABLE categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

CREATE TABLE cartas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    raridade VARCHAR(50),
    preco DECIMAL(10,2),
    imagem VARCHAR(255),
    categoria_id INT,
    destaque TINYINT(1) DEFAULT 0,
    carta_semana TINYINT(1) DEFAULT 0,
    colecao VARCHAR(100),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE boosters (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    preco DECIMAL(10,2),
    imagem VARCHAR(255),
    cor_bg VARCHAR(100)
);

CREATE TABLE trocas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(100),
    procura VARCHAR(100),
    oferece VARCHAR(100)
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100)
);

CREATE TABLE pedidos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    data_pedido DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

INSERT INTO categorias (nome) VALUES
('Cute Cards'), ('Ultra Raras'), ('Boosters'), ('Colecoes'), ('Acessorios'), ('Novidades');

INSERT INTO cartas (nome, raridade, preco, imagem, categoria_id, destaque, carta_semana, colecao) VALUES
('Sylveon ex', 'Ultra Rare', 85.00, 'https://archives.bulbagarden.net/media/upload/thumb/4/4c/SVPR-EN-041.png/200px-SVPR-EN-041.png', 2, 1, 0, 'Evolucoes Prismaticas'),
('Pikachu (AR)', 'Rare', 45.00, 'https://archives.bulbagarden.net/media/upload/thumb/0/04/SVI-EN-090.png/200px-SVI-EN-090.png', 1, 1, 0, 'Scarlet e Violet'),
('Eevee (CHR)', 'Rare', 35.00, 'https://archives.bulbagarden.net/media/upload/thumb/b/b9/MEW-EN-049.png/200px-MEW-EN-049.png', 1, 1, 0, '151'),
('Mew ex (Full Art)', 'Ultra Rare', 120.00, 'https://archives.bulbagarden.net/media/upload/thumb/3/3f/MEW-EN-054.png/200px-MEW-EN-054.png', 2, 1, 0, '151'),
('Jigglypuff (AR)', 'Comum', 18.00, 'https://archives.bulbagarden.net/media/upload/thumb/6/67/OBF-EN-086.png/200px-OBF-EN-086.png', 1, 1, 0, 'Obsidian Flames'),
('Umbreon VMAX', 'Ultra Rare', 150.00, 'https://archives.bulbagarden.net/media/upload/thumb/6/69/PR-SW-SWSH261.png/200px-PR-SW-SWSH261.png', 2, 0, 1, 'Evolucoes Alternativas');

INSERT INTO boosters (nome, preco, imagem, cor_bg) VALUES
('Scarlet & Violet', 25.00, '', 'linear-gradient(145deg,#ff8a80,#ff5252)'),
('Paldas Evolved', 25.00, '', 'linear-gradient(145deg,#9b59b6,#3498db)'),
('Twilight Masquerade', 25.00, '', 'linear-gradient(145deg,#2c3e50,#8e44ad)'),
('Journey Together', 25.00, '', 'linear-gradient(145deg,#27ae60,#2ecc71)');

INSERT INTO trocas (usuario, procura, oferece) VALUES
('AshKetchum', 'Pikachu (AR)', 'Eevee AR'),
('MistyBlue', 'Mew ex', 'Gardevoirite ex'),
('BrockRocks', 'Latias ex', 'Giratina V');
