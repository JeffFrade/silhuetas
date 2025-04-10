echo "##### Inicializando os containers ######"
docker compose up -d

echo "##### Executando o composer #####"
docker exec -it jefffrade-silhuetas-php-fpm composer dump-autoload -o

echo "##### Executando o programa #####"
docker exec -it jefffrade-silhuetas-php-fpm php index.php

echo "##### Script finalizado #####"
