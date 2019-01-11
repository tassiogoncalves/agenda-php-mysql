##CHANGELOG

## Agenda Telefônica Didática (PHP + MYSQL)
## Agenda criada utilizando PHP e MySQL, com o intuito de projeto de demonstração, conta com as seguintes funções

* Autenticação do Usuário
* Cadastro do Contato
* Edição do Contato
* Listagem dos Contatos
* Busca dos Contatos
* Função Sair

## Versão 0.1 
## (https://github.com/bbicudo)

* Nome do usuário trazido na tela de boas-vindas (ao invés do login);
* Cadastro de novos usuários (com sistema de permicionamento por ACL simples);
* Somente administradores têm acesso ao menu de exclusão de contatos cadastrados;
* Somente administradores podem adicionar usuários ao sistema (controle de usuários ativos/inativos ainda não implementado);
* Adicionado "autocompletar" no campo de busca (JQuery);
* Adicionadas máscaras aos campos de Telefone e Celular (pattern gera trabalho do usuário em digitar certos caracteres, a máscara padroniza e simplifica isso);
* Adicionados alguns campos na visualização da listagem de usuários (telefone, celular);
* Desabilitado o campo de "Codigo do Usuário" para edição na tela de editar contatos (cod_contato agora é auto incremental);
* Correção de pequenos erros de código (fechamento de tags ou chaves);

## Última Versão Testada com as seguintes configurações

* **Servidor de base de dados**
	* Servidor: MySQL (127.0.0.1 via TCP/IP)
	* Tipo de servidor: MySQL
	* Versão do servidor: 5.7.21 - MySQL Community Server (GPL)
	* Versão do protocolo: 10
	* Conjunto de caracteres do servidor: UTF-8 Unicode (utf8)
* **Servidor web**
  * Apache/2.4.33
  * Versão do cliente de base de dados: 5.7.21 MySQL Community Server (GPL)
  * versão do PHP: 7.0.29
OBS: Foi utilizado o WAMP no Windows 10

## Instruções de Instalação

Para utilizar é muito simples, primeiro baixe o projeto e coloque na pasta do servidor (Ex: www ou htdocs), em seguida basta importar o arquivo 'bd_agenda.sql', logo em seguida modificar o arquivo 'config.php'.

Após essas alterações, acesse a url http://seuservidor/agenda e utilize o usuário e a senha 'admin'.

Acesse: http://tassiogoncalves.com.br

Deixe seus comentários e sugestões: http://tassiogoncalves.com.br/agenda-telefonica-em-php-mysql
