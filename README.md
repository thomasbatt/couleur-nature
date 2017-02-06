#Site vitrine des Gites Acker

*Projet realisé en HTML5, CSS3, JavaScript, PHP, Sql*

###[www.couleur-nature.fr](http://couleur-nature.fr)


### Dependences 

- [animate.css](https://github.com/daneden/animate.css) - [bootstrap-sass](https://github.com/twbs/bootstrap-sass) - [font-awesome](https://github.com/FortAwesome/Font-Awesome) - [wowjs](https://github.com/matthieua/WOW) - [jquery](https://github.com/jquery/jquery)


### Instalation des routines

Pour installer faites simplement les commandes suivantes:


```bash
  	$ npm install
  	$ bower install
```

et lancez

```bash
	$ gulp 
```

La tache par defaut installe les fichiers de styles, fonts et scripts puis surveille les sources pour injecter les modifications apportées. 


### Instalation de la base de données

Importer les tables couleurnature.sql sur votre serveur db local.

Au premier chargement de la page, wp vous demandera de renseigner les informations de la DB. Utilisez les details de connexion lié a votre installation en précisant pour le prefix: wp_couleurnature_

Si tous c'est passé correctement, wp vous indiquera qu'une version est déjà installé et vous proposera de vous connecter.


### Configuration WP

Pour activer l'ajout et la suppression de fichier par l'interface wp-admin:

faites les commandes suivantes:

```bash
  	$ sudo chmod 775 -R /[url_du_projet]/couleur-nature/
  	$ sudo adduser www-data [mon_utilisateur_courant]
  	$ sudo /etc/init.d/apache2 restart
```

puis ajoutez la ligne suivante au fichier wp-congig.php:

	define('FS_METHOD', 'direct');
