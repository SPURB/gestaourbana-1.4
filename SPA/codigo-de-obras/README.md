# Código de Obras e Edificações Ilustrado

## Importante! Desenvolva apenas a partir da branch dev

> Código de SPA do portal [gestaourbana.sp.gov.br](http://gestaourbana.sp.gov.br) referente à Lei nº 16.642 e Decreto nº 57.776 ilustradas. 
> [http://gestaourbana.prefeitura.sp.gov.br/coe-texto-da-lei-ilustrado/](http://gestaourbana.prefeitura.sp.gov.br/coe-texto-da-lei-ilustrado/)

### Requisitos
* Nodejs 
* NPM 

## Setup

``` bash
# Instalar dependências
npm install

# Serve com 'hot reload' em localhost:8080
npm run dev

# constrói para produção com minificação dos recursos
npm run build

# constrói para produção e visualização dos recursos construídos
npm run build --report

# inicia testes unitários
npm run unit

# inicia todos os testes
npm test
```

Para ver explicações detalhadas de como as coisas funcionam ver [guia](http://vuejs-templates.github.io/webpack/) e [documentação do vue-loader](http://vuejs.github.io/vue-loader).

### Ignore em branch dev
``` gitignore
.DS_Store
node_modules/
npm-debug.log*
yarn-debug.log*
yarn-error.log*
/test/unit/coverage/
dist/
static/pdf/*.pdf

# Editor directories and files
.idea
.vscode
*.suo
*.ntvs*
*.njsproj
*.sln
```

### Ignore em branch master
``` gitignore
.DS_Store
build/
config/
node_modules/
src/
static/
test/
.babelrc
.editorconfig
.eslintignore
.eslintrc.js
.postcssrc.js
index.html
LICENSE
package-lock.json
package.json
npm-debug.log*
yarn-debug.log*
yarn-error.log*
/test/unit/coverage/
dist/
static/pdf/*.pdf

# Editor directories and files
.idea
.vscode
*.suo
*.ntvs*
*.njsproj
*.sln
```