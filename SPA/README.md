# SPA's do Gestão Urbana
Os arquivos de SPA's (Single Page Application) deste tema serão transferidos para este diretório. Em produção cada página deve conter apenas os arquivos gerados pelo `build` de cada SPA separada.

### Aplicações:

* Código de obras
	* `./codigo-de-obras` 
	* `../page-coe-texto-da-lei-ilustrado.php`

*  PIU Monitoramento
	* `./piu-monitoramento` 
	* `../page-piu-monitoramento.php` 

* Inforgráficos
	* `./infograficos` 
	* `../page-infografico-oucae.php` 

### Desenvolvimento e atualizações (branch `dev-nome-do-projeto`)
Desenvolva em uma branch com o padrão de nome `dev-nome-do-projeto-funcionalidade`. Para desenvolver em uma aplicação já existente siga as instruções especificadas em cada projeto.

### Publicação (branch `master`)
Faça o build no seu ambiente local (`npm run build`, `gulp build` etc) faça um merge mantendo apenas os arquivos necessários para que a aplicação funcione. Por padrão em uma pasta de nome `dist`. Atualize o arquivo php na raiz do tema e faça a vinculação dos recursos desta pasta. **Nunca** use paths ou urls absolutas.

### Documentação
Ao criar um SPA neste tema atualize este `README.me` incluindo a url do diretório e a página php seguindo o padrão da lista acima. 