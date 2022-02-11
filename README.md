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

### Passos utilizados para abrir o projeto apos um git clone
   *  git clone https://github.com/jefersonroots/TestePHP.git
   *  abrir repositório 
   *  rodar o comando: composer install 
   *  rodar o segundo comando: php artisan key:genetare
   *  renomear o .env.example para .env 
   *  iniciar o projeto: php artisan serve


