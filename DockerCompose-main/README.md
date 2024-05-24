![Logo Docker](docker-logo.svg)
# DockerCompose
Script complet docker compose LAMP
Paramétrage a faire pour le fonctionnement :   
dans **docker-compose.yml**  
changer **_MYSQL_ROOT_PASSWORD_** pour la valeur de votre choix   
changer **_MYSQL_PASSWORD_** pour la valeur de votre choix   

dans db/backup.sh et db/restore.sh

changer ValeurDeVotreChoix par le mot de passe root de mariadb

# Utilisation

Clôner le dépot  

mettre la BDD au format sql dans db/ et l'appeller init.sql
créer un répertoire www/
mettre les données web dans www/  
Changer les valeurs de connexion a la bdd mariadb ( serveur : mariadb pour le reste voir docker-compose.yml ) 
lancer avec ```docker compose up -d```  
lancer ensuite ```ìnitbdd.sh```
