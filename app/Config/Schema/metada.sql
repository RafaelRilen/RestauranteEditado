CREATE Table `cake_restaurante`.`pedidos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `cliente` varchar(60) DEFAULT NULL,
    `pedido` varchar(100)  DEFAULT NULL,
    `mesa` int(10) NOT NULL,
    `observacao` varchar(120) DEFAULT NULL,
    `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB Default CHARSET=utf8;

CREATE Table `cake_restaurante`.`usuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(80) NOT NULL,
    `login` varchar(45)  NOT NULL,
    `senha` varchar(45) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB Default CHARSET=utf8;
