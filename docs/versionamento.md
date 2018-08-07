### Versionamento 

#### Como funcionará o versionamento do projeto ?

> Primeiro passo

##### Clone o projeto

```bash
$ git clone https://github.com/orionteles/iesb-eleicoes.git

```
<br>
Atualize o projeto, caso não esteja atualizado.

```bash
$ git pull origin master

```
<br>

##### Crie sua branch de Desenvolvimento

```bash
$ git checkout -b seunome-nomedemanda

```
Eg: git checkout -b douglas-crud-partido

<br>
Após a criação da branch, basta fazer suas alterações e mandar para o remoto, caso não consiga, siga os passos abaixo.

> git add .

Adiciona toda as alterações que você fez no arquivo.

> git commit -m"[ADD] Adicionado a documentação do Versionamento.MD"

Fazendo comentário da alteração antes de enviar para o remoto.

> git push

Mandando suas alterações para o remoto.

##### Adicionando suas alterações à branch master

Por motivos de segurança, a branch final é protegida, podendo apenas ser mesclada a partir de Pull Request. Ao finalizar sua demanda, solicite um pull request e adicione um revisor.
Em qualquer caso de dúvida, abra uma issue relatando sua dúvida que alguém te ajudará.


<b>Caso não tenha obtido sucesso:</b>

1) Um dos motivos de você não ter conseguido pode ser porque você não configurou o git na sua máquina. Para configurar, entre na documentação oficial do git e procure por primeiros passos.
2) Alguma parte do progresso você não fez correto, siga novamente os passos, caso o erro persista, entre em contato com alguém do grupo ouo abra uma issue para pedir ajuda, relatando o que precisa.


