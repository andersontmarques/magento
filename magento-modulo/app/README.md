Módulo de integração PagSeguro para Magento
===========================================
---
Descrição
---------
---
Com o módulo instalado e configurado, você pode pode oferecer o PagSeguro como opção de pagamento em sua loja. O módulo utiliza as seguintes funcionalidades que o PagSeguro oferece na forma de APIs:

 - Integração com a [API de Pagamentos]
 - Integração com a [API de Notificações]


Requisitos
----------
---
 - [Magento] Community 1.7.0.2
 - [PHP] 5.1.6+
 - [SPL]
 - [cURL]
 - [DOM]


Instalação
----------
---
 - Certifique-se de que não há instalação de outros módulos para o PagSeguro em seu sistema;
 - Baixe o repositório como arquivo zip ou faça um clone;
 - Copie as pastas *code* e *etc* para dentro da pasta *app* em sua instalação Magento. Caso seja informado da sobrescrita de alguns arquivos, você pode confirmar o procedimento sem problemas. Esta instalação não afetará nenhum arquivo do seu sistema, somente adicionará os arquivos do módulo PagSeguro;
 - Certifique-se de que as permissões das pastas e arquivos recém copiados sejam, respectivamente, definidas como 755 e 644;
 - Na área administrativa do seu sistema, acesse o menu System -> Cache Management -> Flush Magento Cache.


Configuração
------------
---
Para acessar e configurar o módulo acesse o menu System -> Configuration -> Payment methods -> PagSeguro. As opções disponíveis estão descritas abaixo.

 - **ativar módulo**: ativa/desativa o módulo.
 - **nome de exibição**: define o nome que será utilizado para o meio de pagamento.
 - **e-mail**: e-mail cadastrado no PagSeguro.
 - **token**: token cadastrado no PagSeguro.
 - **url de redirecionamento**: ao final do fluxo de pagamento no PagSeguro, seu cliente será redirecionado automaticamente para a página de confirmação em sua loja ou então para a URL que você informar neste campo. Para ativar o redirecionamento ao final do pagamento é preciso ativar o serviço de [Pagamentos via API]. Obs.: Esta URL é informada automaticamente e você só deve alterá-la caso deseje que seus clientes sejam redirecionados para outro local.
 - **url de notificação**: sempre que uma transação mudar de status, o PagSeguro envia uma notificação para sua loja ou para a URL que você informar neste campo. Obs.: Esta URL é informada automaticamente e você só deve alterá-la caso deseje receber as notificações em outro local.
 - **charset**: codificação do seu sistema (ISO-8859-1 ou UTF-8).
 - **log**: ativa/desativa a geração de logs.
 - **diretório**: informe o local a partir da raíz de instalação do Magento onde se deseja criar o arquivo de log. Ex.: /logs/ps.log. Caso não informe nada, o log será gravado dentro da pasta ../PagSeguroLibrary/PagSeguro.log.


Changelog
---------
---

1.2
 - Correção: Erro ao finalizar compra.


1.1

 - Adicionado: Integração com API de Notificação do PagSeguro.
 - Adicionado: Links para criação de conta e token.
 - Adicionado: Url padrão de retorno caso não seja informada.
 - Correção: Redefinição de envio do frete.
 - Correção: Ajuste no envio de taxas.

1.0

 - Versão inicial. Integração com API de Pagamento do PagSeguro.


Notas
---------
---
 - O PagSeguro somente aceita pagamento utilizando a moeda Real brasileiro (BRL).
 - Certifique-se que o email e o token informados estejam relacionados a uma conta que possua o perfil de vendedor ou empresarial.
 - Certifique-se que tenha definido corretamente o charset de acordo com a codificação (ISO-8859-1 ou UTF-8) do seu sistema. Isso irá prevenir que as transações gerem possíveis erros ou quebras ou ainda que caracteres especiais possam ser apresentados de maneira diferente do habitual.
 - Para que ocorra normalmente a geração de logs, certifique-se que o diretório e o arquivo de log tenham permissões de leitura e escrita.


[Dúvidas?]
----------
---
Em caso de dúvidas mande um e-mail para desenvolvedores@pagseguro.com.br


Contribuições
-------------
---
Achou e corrigiu um bug ou tem alguma feature em mente e deseja contribuir?

* Faça um fork.
* Adicione sua feature ou correção de bug.
* Envie um pull request no [GitHub].


  [API de Pagamentos]: https://pagseguro.uol.com.br/v2/guia-de-integracao/api-de-pagamentos.html
  [API de Notificações]: https://pagseguro.uol.com.br/v2/guia-de-integracao/api-de-notificacoes.html
  [Dúvidas?]: https://pagseguro.uol.com.br/desenvolvedor/comunidade.jhtml
  [Pagamentos via API]: https://pagseguro.uol.com.br/integracao/pagamentos-via-api.jhtml
  [Notificação de Transações]: https://pagseguro.uol.com.br/integracao/notificacao-de-transacoes.jhtml
  [Magento]: https://www.magentocommerce.com/
  [PHP]: http://www.php.net/
  [SPL]: http://php.net/manual/en/book.spl.php
  [cURL]: http://php.net/manual/en/book.curl.php
  [DOM]: http://php.net/manual/en/book.dom.php
  [GitHub]: https://github.com/pagseguro/magento
