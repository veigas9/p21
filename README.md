
## SISTEMA PARA ATUALIZAÇÃO DE BASE DE DADOS E DISPARO DE EMAIL

## PASSO 1:
    - Usuário importa arquivo XML no sistema;
    obs. O arquivo XML deve possuir o nome torcedores.xml
## PASSO 2:
    - Usuário pode gerar uma planilha uma planilha excel do arquivo XML importado;
## PASSO 3:
    - A opção: CARREGAR EXCEL NO SISTEMA, possibilita o usuário salvar o arquivo no diretório XLS do servidor.
## PASSO 4:
    - Usuário atualiza base de dados carregando planilha.
        obs. Após edição da planilha, a mesma deve ser salva no formato XML do excel.
            SALVAR COMO -> NOME DO ARQUIVO: CLIENTES
                           TIPO: PLANILHA XML

## DISPARO DE EMAILS
    - Ao clicar no botão DISPARAR EMAIL, é realizado envio de email para todos os usuários cadastrados

    - Realizei os testes para o disparo de email com a ferramenta mailtrap https://mailtrap.io/

## MENU LISTAR TORCEDORES
    - Exibe uma tabela de todos usuários;
    - A tabela possui a opção para editar o usuário;

## BANCO DE DADOS
    - Segue junto aos arquivos do projeto um DUMP da Base de Dados

## DEPENDENCIAS 
- Deve ser executado comando composer install, para baixar algumas dependencias de desenvolvimento;

- Foi criado arquivo .editorconfig com o objetivo de padronizarmos o código;

- O projeto segue o PSR-1 como padrão de codificação;
