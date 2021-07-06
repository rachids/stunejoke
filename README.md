# StuneJoke

Application très basique permettant d'afficher et d'enregistrer des blagues.
**Attention:** la branche `procédural` comporte des injections SQL exploitables.

## Installation

### Version procédurale

- Clôner ce repository
- Dans `config/bdd.php`, insérer les informations de connexion à la base de données
- Utiliser le fichier `config/schema.sql` pour créer les tables avec quelques données

---

Cette application est destinée à la création de deux vidéos:

## Découverte de SQLMap

Lien vers la vidéo _(à venir)_

Avec l'outil en python [sqlmap](https://sqlmap.org/), on va tenter de voir ce qui peut se passer lorsqu'un utilisateur exploite une injection SQL.

On va également tenter de se prémunir au maximum de ce genre de failles à l'aide d'une règle simple: ne jamais faire confiance aux utilisateurs.

## De Legacy à Laravel

Lien vers la vidéo _(à venir)_

On va prendre cette application et tenter de la migrer vers le framework [Laravel](https://laravel.com/). Nous irons par étape, comme si c'était une vraie application en production qui ne doit pas s'interrompre pendant cette migration.
