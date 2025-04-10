# Silhuetas
---

Projeto de silhuetas.
O projeto a seguir foi estruturado em `PHP 8.3` e `Composer`. Executando sobre o `Docker`.

### Configuração e utilização do projeto
---

Para executar o projeto, basta executar o script `run.sh` disponibilizado na raiz do mesmo.

Ou se preferir:

```bash
docker compose up -d
```

```bash
docker exec -it jefffrade-silhuetas-php-fpm bash
```

```bash
composer dump-autoload -o
```

```bash
php index.php
```

### Arquivo de silhuetas

O arquivo de silhuetas encontra-se na raiz do projeto, chama-se `file.txt`.
