# Infográficos

## Instruções

1. Construa seu infográfico utilizando adobe illustrator. 
2. Rode o script do projeto [ai2html](http://ai2html.org/). O script irá gerar dois arquivos: um html e uma imagem.
3. Crie um diretório com o nome do projeto. Separe do arquivo html o css e salve apenas o css nesta pasta como `meuprojeto.scss`. 
4. Inclua a imagem na pasta `dist/`.
5. Crie um arquivo javascript. Nela declare uma nova instância `Vue`. Declare o atributo `template`. E dentro deste template cole todo o html gerado pelo script.
6. Crie uma propriedade do tipo `computed` e inclua a url da imagem e chame-a dentro do template `<img src=imgUrl`>

meuprojeto/meuprojeto.js (etapas 4 e 5)
```javascript
new Vue({
	el: '#app',
	computed:{
		imgUrl(){ return template_url + '/SPA/infograficos/meuprojeto/meuprojeto.jpg' }	
	},
	template: `
	html-exportado-do-illustrator
	`
```
> Para utilizar componentes é necessário declarar neste arquivo mesmo arquivo js (`components: { um, dois} `) e alterar a task no gulpfile indicado mais abaixo. 

7. Crie na raiz do tema um arquivo com o padrão de nomenclatura `page-infografico-meuprojeto.php`. Nela você deve:
    1. Incluir o css minificado `<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/SPA/infograficos/dist/oucae.min.css">` abaixo da header
    2. Criar uma div com id app `<div id="app"></app>` na área do conteúdo
    3. Incluir o vue 
    4. Incluir o javascript minificado `<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/dist/oucae.min.js';?>" defer></script>`
8. Na página de admin do wordpress crie uma página com a slug `infografico-meuprojeto`
9. Acesse o infográfico pela url url-do-tema/infografico-meuprojeto

## Pré-processadores 
> A utilização de pré-processaores é opcional porém recomendada

### Pré-requisitos: 
* Nodejs
* Gulp

### Instruções:
Altere o arquivo `gulpfile.js` criando as tasks para seu projeto:

> Crie a task para minificar seu javascript. Inclua apenas os componentes utilizados no seu projeto

```javascript
gulp.task('meuprojeto-js', function() {
	return gulp.src([
		'./dev/componentes/um.js',  
		'./dev/componentes/dois.js', 
		'./dev/meuprojeto/meuprojeto.js', 
	])
	...
``` 

> Crie a task para minificar seu css. Inclua apenas os componentes utilizados no seu projeto
```javascript
gulp.task('meuprojeto-scss', function() {
	return gulp.src([
		'./dev/componentes/um.scss'  
		'./dev/componentes/dois.scss' 		
		'./dev/meuprojeto/meuprojeto.scss' 
	])
	...
});
```

> Altere task default para assistir a alterações do seu js e javascript. Inclua apenas os componentes utilizados no seu projeto

```javascript
gulp.task('default', [
	'oucae-js',
	'oucae-scss'
	], function (){
  gulp.watch('./**/*.js', ['array','de','tarefas','meuprojeto-js']); 
  gulp.watch('./**/*.scss', ['array','de','tarefas','meuprojeto-scss']); 
})
```
Para visualizar as alterações você deve reiniciar url-do-tema/infografico-meuprojeto