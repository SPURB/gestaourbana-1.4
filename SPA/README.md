# SPA's do Gestão Urbana
Os arquivos de SPA's (Single Page Application) deste tema serão transferidos para este diretório. Em produção cada página deve conter apenas os arquivos gerados pelo `build` de cada SPA separada.

### Aplicações:

* Código de obras e edificações  
	* `./codigo-de-obras-e-edificacoes` 
	* `../page-coe-texto-da-lei-ilustrado.php` (página da aplicação)

*  PIU Monitoramento
	* `./piu-monitoramento` 
	* `../page-piu-monitoramento.php` 

* Inforgráficos
	* `./infograficos` 
	* `../page-infografico-oucae.php` 

### Desenvolvimento e atualizações
Crie uma branch com o no padrão `dev-nome-do-projeto`. Para desenvolver em uma aplicação já existente Siga as instruções especificadas em cada projeto.

### Publicação
Faça o build no seu ambiente local (`npm run build`, `gulp build` etc) faça um merge mantendo apenas os arquivos necessários para que a aplicação funcione. Atualize o arquivo php faça a vinculação dos recursos desta pasta.

### Documentação
Ao criar um SPA neste tema atualize este `README.me` incluindo a url do diretório e a página php seguindo o padrão da lista acima.