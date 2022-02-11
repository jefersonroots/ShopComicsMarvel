# <p align="center"> Desafio PHP </p>

## Sobre o Projeto

  O SISTEMA CONSISTE EM CONSTRUIR UMA LOJA DE QUADRINHOS UTILIZANDO A API DA MARVEL.

   * > STATUS: Developing

### Requisitos para o 'GET' das informações:
   * Conta developer na marvel: developer.marvel.com/
   * URL base: https://gateway.marvel.com:443/v1/public/comics
   * private key 
   * public key
   * md5 hash
   * Rate limite:3000 calls/day 
     * #### Instruções de criação da apikey 
      * > TS - um carimbo de data/hora (ou outra string longa que pode mudar de solicitação a solicitação)
      * > HASH - o resumo md5 do parâmetro ts, sua chave privada e sua chave pública (por exemplo, md5(ts+privateKey+publicKey) 
      * > Utilizar função md5() ou utilizar o site https://www.md5hashgenerator.com
      * > Layout base da url final: https://gateway.marvel.com:443/v1/public/comics?ts=420&apikey=a75555362c9502323423424247952321&hash=edd67434324245353d7c12045da9ef50

### Tecnologias Utilizadas

<table>
    <tr>
        <td>PHP</td>
        <td>Laravel</td>
        <td>Composer</td>
        <td>JavaScript</td>
        <td>Bootstrap</td>
        <td>Git</td>
    </tr>
    <tr>
        <td>7.4</td>
        <td>8.*</td>
        <td>2.*</td>
        <td></td>
        <td>5</td>
        <td></td>
    </tr>

</table>

### Passos utilizados para abrir o projeto após um git clone
   *  git clone https://github.com/jefersonroots/TestePHP.git
   *  abrir repositório 
   *  rodar o comando: composer install 
   *  rodar o segundo comando: php artisan key:generate
   *  renomear o .env.example para .env 
   *  iniciar o projeto: php artisan serve
----------------------------------------------------------------//------------------------------------------------------------------


## Telas do Sistema
  > Principal: <br>
<img src="https://user-images.githubusercontent.com/64113091/153602131-f5b74786-b182-4961-a3be-23b713e17a15.JPG" alt="drawing" width="500" heigth="350" />.
  <br>  Menu de Navegação: Abri ao passar o mouse. <br> 
<img src="https://user-images.githubusercontent.com/64113091/153603337-a527b67d-04bb-40a2-b925-69803be8a735.png" alt="drawing" width="500" heigth="350" />.
  <br>  Adicionar Produto ao carrinho: Clicar no primeiro botão. <br> 
 <img src="https://user-images.githubusercontent.com/64113091/153606222-400b02f7-f9ba-44a3-98ed-2dc75b83bec9.png" alt="drawing" width="300" heigth="250" />.
  <br>  Detalhar Comics: Clicar no segundo botão. <br> 
 <img src="https://user-images.githubusercontent.com/64113091/153606372-ff1a699b-65cb-4afa-b57c-a4c5da71e997.png" alt="drawing" width="300" heigth="250" />.
  <br>  Tela de Detalhar:<br> 
 <img src="https://user-images.githubusercontent.com/64113091/153606688-a1aa0029-c3ac-46eb-bd02-12c3bdd7e8e9.png" alt="drawing" width="300" heigth="250" />.
  <br>  Tela do Carrinho de Compras:<br> 
 <img src="https://user-images.githubusercontent.com/64113091/153607588-fc7d5f8e-94e8-40f3-8623-59dd44733521.png" alt="drawing" width="500" heigth="350" />.

## Funcionalidades Futuras
   * Notificar se o produto foi adicionado ao carrinho com sucesso. 
   * Somar quantidade ao carrinho quando o comics já está no carrinho.
   * Operar quantidade x valor no carrinho 
   * Adicionar opções de raridades nos comics 
   * Adicionar opção de cupom aos comics utilizando rest com mock


