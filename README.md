
# Rematrícula FAETERJ

Cópia do site de rematrícula da minha faculdade, porém utilizando PHP e Bootstrap. Como alternativa ao Google Firebase, decidi utilizar MariaDB e o próprio PhpMyAdmin para gerenciar o banco de dados 

## Stack utilizada

**Front-end:** Bootstrap

**Back-end:** PHP, MariaDB



## Rodando localmente

Primeiramente, certifique se de possuir o XAMPP instalado e devidamente configurado nas portas desejadas.

Clone o projeto

```bash
  git clone https://github.com/1alvaropaiva/matricula.git
```

Para funcionar corretamente, crie um usuário no banco de dados e na página 'conexao.php' altere os dados inseridos.

```bash
  define('HOST', 'seu host');
  define('USUARIO', 'seu nome de usuario');
  define('SENHA', 'sua senha, caso tenha');
  define('DB', 'matricula');  //não altere esse dado
```

No seu banco de dados, insira a seguinte query:

```bash
CREATE TABLE `matriculas`.`alunos` (`id` INT(100) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `senha` VARCHAR(255) NOT NULL , `email` VARCHAR(100) NOT NULL , `matricula` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
Isso irá criar o banco de dados chamado "matricula" e a tabela "alunos".

#### Após seguir esses passos, você será capaz de visualizar o projeto e interagir com ele.

## Autores

- [@1alvaropaiva](https://www.github.com/1alvaropaiva)

