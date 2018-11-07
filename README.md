# Debug

0. composer.json : manque un / après app 
1. index.php 
    - exit()
    - dispatcher appelé avant db et config
2. config.php
    - <php? au lieu de <?php
    - APPDEV et non APP_DEV
3. dossier Controler et non Controller
   dossier a view et non View
4. routing.php : 
    - item au lieu de Item pour le controleur
    - route / appelée en POST et non en GET
    - manque le ; après la fermeture du tableau
5. style.css : 
    - opactiy 0 sur le body
6. Connection.php 
    - contient la classe Connexion et non Connection
    - use PDO et non \PDO
7. ItemController
    - extend au lieu d'extends
    - vue index.htm1 au lieu index.html 
    - item et non items envoyé à la vue
    - manque accoloade en fin de classe
    - return sting et non string
    - selectALL() et non selectAll()
8. AbstractController
    - manque un _ au __construct
9. ItemManager
    - pas le bon namespace
    - manque un param dans parent::__construct
    - selectAll() avec un \PD0::FETCH_CLASS (zéro au lieu de O)
10. AbstractManager
    - manque un espace après "select * FROM"
11. layout.html.twig
    - enddlock et non endblock
12. index.html.twig
    - extend layout.twig et non layout.html.twig
    - inversion `</li>` et `</a>`
    - appel des variable par {% au lieu de {{
    - item.name au lieu de item.title
    
BONUS (add):
0. ItemController 
    - add() : simple égal dans la condition
    - view item/... au lieu de Item/...
    - manque le return
0. ItemManager 
    - insert() : manque un $this->
    - SQL : manque le INTO
