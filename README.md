## AdminLTE 
**É um modelo de administração totalmente responsivo. Baseado no framework** [Bootstrap 4.6] (https://getbootstrap.com/) ** e também no plugin JS / jQuery.
Altamente personalizável e fácil de usar. Compatível com várias resoluções de tela, de pequenos dispositivos móveis a grandes desktops.

** Visualização em [AdminLTE.io] (https://adminlte.io/themes/v3) **

## Instalação
Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install
** Visualização em [AdminLTE.io] (https://adminlte.io/themes/v3) **

## Instalação
Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.


Depois é só aguardar.

## Configuração
Todos os arquivos de **configuração** e aplicação estão dentro da pasta *src*.

As configurações de Banco de Dados e URL estão no arquivo *src/Config.php*

É importante configurar corretamente a constante *BASE_DIR*:
> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Modelo de MODEL
```php
<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

}

