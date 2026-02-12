## Como usar

1. Clonar a aplicação
```shell
git clone https://github.com/digitalcollege-classes/landing-page
```

2. Entrar no diretório
```shell
cd landing-page
```

3. Configurar as variáveis de ambiente (opcional)
```shell
cp .env.example .env
```
> **Nota:** O arquivo `.env` é opcional. Se não for criado, a aplicação usará os valores padrão configurados no `docker-compose.yml`.

Edite o arquivo `.env` com suas credenciais de banco de dados:
```
DB_HOST=setup-lp_mysql
DB_NAME=setup_lp
DB_USER=setup
DB_PASSWORD=setup
```

4. Subir o docker
```shell
make up
```

Pronto, deve estar rodando em <http://localhost:8080>

### Variáveis de Ambiente

O projeto agora utiliza variáveis de ambiente para configuração do banco de dados, melhorando a segurança e flexibilidade. As seguintes variáveis podem ser configuradas:

| Variável | Descrição | Valor Padrão |
|----------|-----------|--------------|
| `DB_HOST` | Host do banco de dados | `setup-lp_mysql` |
| `DB_NAME` | Nome do banco de dados | `setup_lp` |
| `DB_USER` | Usuário do banco de dados | `setup` |
| `DB_PASSWORD` | Senha do banco de dados | `setup` |

**Importante:** O arquivo `.env` nunca deve ser commitado no repositório. Use o arquivo `.env.example` como referência.

---

## Como contribuir com esse projeto

1. Atualize a sua branch principal
```
git checkout main
git pull origin main
```

2. Crie sua branch
```
git checkout -b nome-da-nova-branch
```
h
3. Faça as alterações que devem ser feitas
_faça os códigos_

4. Prepare o envio
```
git add .
git commit -m "descreva aqui..."
git push origin nome-da-nova-branch
```

5. Abra o Pull Request
Acesse <https://github.com/digitalcollege-classes/landing-page/pulls> e clique em "Compare & pull" para abrir o pull request

6. Peça aos coleguinhas para revisar seu código

7. Tá pronto o sorvetinho