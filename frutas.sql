create database hortifruti;
use hortifruti;

create table frutas ( idFruta int not null auto_increment,
 primary key,
  nome varchar(20) not null,
   preco decimal(5,2) not null
    );
