# Glossaire PHP


`Tableau à remplir.`

| Fonction PHP | Rôle à compléter| Exemple |
|:------------:|:---------------:|:-------:|
|date()        |Retourne la date du serveur (plusieurs formats existes) |echo date('d m Y H:i'); affichera 19 12 2017 10:46|
|getdate()     |Retourne un tableau associatif contenant les informations de date de l'horodatage, ou l'heure locale actuelle si aucun horodatage n'est donné.| $today = getdate(); print_r($today);|
|time()        | Retourne le timestamp UNIX actuel mesurée en seconde|$date = date("d,m,Y,H/i" time()/2);|
