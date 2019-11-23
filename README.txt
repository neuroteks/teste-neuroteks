Olá, obrigado pela oportunidade de participar do teste. 

Observações:
    1. Foi considerado nesse programa que os termos já estariam cadastrados no banco de dados. O serviço apenas pegaria os termos do banco de dados.
    2. É necessário criar uma pasta chamada "WebDriver" dentro do diretório C: e dentro dessa pasta deve existir o "chromedriver.exe". 
        2.1 O chromedriver.exe pode ser baixado no link https://sites.google.com/a/chromium.org/chromedriver/
    3. O Xampp deve estar instalado no seu computador.
    4. MySQL está configurado para conectar no usuário "root" e sem senha. Caso você utilize algum outro usuário ou senha, altere no arquivo DB/querys.
    5. MySQL não precisa estar configurado no PATH, mas caso prefira acessar o banco de dados pelo console configure ela por favor.
    6. Python3 deve estar instalado.
    5. O módulo requests do python deve estar instalado também.
        5.1 utilize "pip install requests" no seu CMD.

Instruções para uso:
    1. Coloque este repositório dentro da pasta "htdocs" do Xampp.
    2. Abra o xampp-controll, ative o Apache e o MySQL.
    3. No seu CMD conecte com o MySQL ou conecte no phpMyAdmin.
    4. Crie um banco de dados da seguinte forma "create database neuroteks;".
    5. Crie uma tabela da da seguinte forma "create table termo (id int(11) primary key auto_increment, nome varchar(255));".
    6. Crie uma tabela da da seguinte forma "create table busca (id int(11) primary key auto_increment, termo varchar(255), link varchar(255));".
    7. Popule sua tabela de termos com "insert into termo (nome) values ("<alguma coisa pra pesquisar>");". Insira o quanto quiser.
    8. Após popular você pode fechar o CMD ou abrir outro.
    9. No CMD acesse o repositório deste desafio que consta na pasta "htdocs" do Xampp.
    10. Ainda no CMD digite "python crawler.py".