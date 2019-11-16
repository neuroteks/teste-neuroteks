# Teste para desenvolvedor FullStack - Kelly Sandim Iwauchi

Olá, primeiramente, gostaria de agradecer a oportunidade de participar da seletiva. Enfim, vamos a como usar esse código

### **O que é necessário?**

- Xampp instalado na máquina
- Ter (a biblioteca?) WebDriver Manager instalada

### **Instruções de uso**

1. Colocar esse repositório dentro da pasta _xampp/htdocs/<nome da pasta onde ficarão esses arquivos>_
2. Abrir o Xampp, ativar o Apache e o MySQL para poder abrir o PHPMyAdmin e criar um banco de dados chamado "bd_json" com as tabelas "busca" e "termo" (todas sem aspas, claro)
3. O meu código não lê arquivos json, então caso queira mudar a entrada, terá de ir na pasta **server**, abrir o arquivo _recebe_json.php_ , ir na variável _$json_ e editar as entradas
4. Depois, só abrir um navegador (o meu código está configurado para funcionar com o Google Chrome) e digitar _localhost/<nome da pasta onde ficarão esses arquivos>/server/recebe_json.php_ e deixar rodando. Ele fará o resto sozinho.

### **Observações**

1.  No meu PHPMyAdmin, o usuário é root, e não há senha. Porém eu não sei se vocês já tem o Xampp instalado aí ou se o usuário ou a senha foram alterados. Caso sim, terão de alterar os arquivos _open_selenium.py_ , na linha 11, e _recebe_json.php_ na linha 38, ambos da pasta _server, e o arquivo _exibe_bd.php_ da pasta _view_, na linha 3.
2. Apesar do meu código não ler um arquivo json já criado, ele é capaz de gerar um arquivo json com o resultado das pesquisas. Esse arquivo se chama _search_results.js_ e se encontra na pasta raíz logo após a execução do código.
