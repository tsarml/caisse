CREATE DATABASE caisse; 
USE caisse;



CREATE TABLE produit (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    designation     VARCHAR(100) NOT NULL,
    prix            INT NOT NULL,          --en ar
    qte_stock       INT NOT NULL DEFAULT 0,
    created_at      DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;


CREATE TABLE caisse (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    numero          VARCHAR(20) NOT NULL,    --caisse 1 ou 2,...
    created_at      DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;


CREATE TABLE achat (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    caisse_id       INT NOT NULL,
    produit_id      INT NOT NULL,
    quantite        INT NOT NULL,
    prix_unitaire   INT NOT NULL,            
    montant         INT NOT NULL,            
    date_achat      DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (caisse_id)  REFERENCES caisse(id),
    FOREIGN KEY (produit_id) REFERENCES produit(id)
) ENGINE=InnoDB;

INSERT INTO produit (designation, prix, qte_stock) VALUES
('Biscuit', 1000, 50),
('Pain', 400, 100),
('Eau minérale', 300, 200),
('Lait', 800, 75),
('Riz 1kg', 1200, 60);

INSERT INTO caisse (numero) VALUES
('Caisse 1'),
('Caisse 2');