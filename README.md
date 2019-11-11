# Teste para desenvolvedor FullStack

## Por que trabalhar na Neuroteks

A Neuroteks é uma startup que cria soluções e produtos integrando seu Automação de Processos e Inteligência Artificial com o negócio dos nossos clientes. Nossos softwares e projetos se baseiam no desenvolvimento de Bots de Automação, Ferramentas de Análise de Dados, REST API's, Mobile Apps, entre outros.

Atuamos no desenvolvimento de produtos nos mais variados segmentos como Advocacia, Jurídico, Análises de Mídias Sociais, Telecomunicações, entre outros, em empresas de diversas áreas de atuação.

Quer conhecer mais sobre a empresa? <https://neuroteks.com/>

## Sobre a vaga

Queremos um desenvolvedor fullstack para nos ajudar a inovar com soluções completas a nível de software e a manter o ciclo de demandas dos nossos atuais clientes. 

O dia-a-dia do desenvolvedor será trabalhar junto com a equipe na elaboração e em melhorias de algumas rotinas dos sistemas.

O desenvolvedor irá trabalhar em vários projetos de diferentes escopos, se você não se sente intimidado por novos desafios e adora se reinventar e usar a criatividade, então essa vaga é pra você.

Os requisitos são:

## Requisitos

* Ter disponibilidade para trabalhar em Campo Grande/MS.
* Ter excelente comunicação.
* Conhecer metodologias ágeis.
* Ter experiência nos seguintes itens:
  * Linux Básico
  * Bootstrap 4
  * Javascript 
  * PHP
  * Python e Selenium
  * MySQL 5
* Diferenciais:
  * SVN e Git
  * REST API's
  * Integração e Deploy contínuo
  * TDD

## Tecnologias para o desafio

* PHP 
* Python
* MySQL 5

## O Desafio

Você deverá criar um **SERVIÇO** em PHP que permita receber um JSON contendo resultados de pesquisas no Google para um determinado Termo e seus respectivos links. Este serviço deverá então cadastrar a Busca em banco de dados. Cada Termo de Busca pode ter vários links associados. O serviço deve permitir também, consultar os termos cadastrados no banco de dados. 
Faça a distinção pelo método da requisição (GET = Obter termos, POST = Cadastrar Buscas).
Além disso, será necessária uma **VIEW** que exiba uma lista com todos os links cadastrados no banco de dados e seus respectivos termos. Essa view deve conter filtros por conteudo do termo e por conteudo do link. Não se preocupe com a estilização de menus e cabeçalhos, apenas utilize o Bootstrap, o Javascript e o PHP da melhor forma possível para exibir os filtros e a lista.
A cereja do bolo consiste na criação de um **CRAWLER** utilizando Selenium Web Driver do Python. 
O Crawler deve ser capaz de consumir o serviço PHP com GET e obter todos os termos cadastrados para buscas. Após obter os termos, realizar as buscas no Google e então consumir novamente o serviço em PHP com POST para armazenando os links no banco de dados. 

Para ajudar na modelagem, considere um termo contendo apenas ID e Nome, e uma Busca contendo ID, ID do termo e link. 



JSON de Entrada do Serviço

```json
{
  "termo": "3"
  "link": "https://www.devmedia.com.br/dominando-o-selenium-web-driver-na-pratica/34183"
}
```

Retorno da consulta do Termos do Serviço

```json
[
  {
    "id": "3",
    "nome": "Selenium Web Driver",
  },
  {
    "id": "4",
    "nome": "Dockerizando Python",
  },
  
]
```

**É importante que as entradas sejam validadas**

## Como devo entregar o desafio

* Crie uma branch a partir da branch master deste respositório.
* Implemente o código do desafio.
* Faça um push de sua branch com o desafio implementado.
* Crie um pull request para branch master.
* Envie um email para (desenvolvimento@neuroteks.com) com o nome de sua branch informando que você concluiu o projeto.

## Restou alguma dúvida

Você pode enviar um email para: desenvolvimento@neuroteks.com
Não exite em nos contatar!
