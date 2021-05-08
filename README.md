# sistema-pizzaria
Sistema de uma pizzaria, com funcionalidades para pedido de pizza.

---
## Tecnologias (Stack)
- Apache
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- Bootstrap

## Criação da tabela
```
CREATE TABLE tbl_pedidos(
    nome varchar(75),
    endereco varchar(30),
    cidade varchar(30),
    estado varchar(2),
    tamanho_pizza varchar(1),
    sabor_pizza varchar(20),
    borda_pizza varchar(10),
    forma_pagamento varchar(20),
    troco int,
);

