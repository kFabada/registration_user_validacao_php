# CADASTRO DE USUARIO E VALIDACÃO DE HASH LOGIN COM TELA PRINCIPAL USANDO HTML, CSS, AJAX, JQUERY PHP E POSTGRESQL 
CRIAÇÃO DO BANCO USANDO MODELAGEM 1:N
-------------------------------------
CREATE TABLE usuario (
    
    id_login SERIAL PRIMARY KEY NOT NULL,
    
    vch_login VARCHAR (250) NOT NULL,
    
    vch_senha VARCHAR (250) NOT NULL
) 
----------------------------------------------
CREATE TABLE dados_usuario (

    id_usuario SERIAL PRIMARY KEY NOT NULL,
    
    vch_email VARCHAR (250) NOT NULL,
    
    vch_telefone VARCHAR (14) NOT NULL,
    
    int_cadastro_situacao INTEGER NOT NULL,
    
    id_login INTEGER NOT NULL,
    
    CONSTRAINT fk_id_login FOREIGN KEY (id_login) REFERENCES usuario(id_login)
)
