--
-- Créer la base de données
--
CREATE DATABASE IF NOT EXISTS stunejoke;

--
-- Créer la table jokes
--
CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Insérer d'hilarantes blagues pour avoir un jeu de données de base
--

INSERT INTO `jokes` (`id`, `title`, `content`, `author`, `status`, `created_at`) VALUES
(1, 'Faut pas être daltonien pour celle-là ', 'Qu\'est-ce qui est petit et marron ?\r\n\r\n- Un marron.', 'henry_golant', 1, '2021-05-03 19:49:12'),
(2, 'Joke caféinée', 'C\'est un mec qui rentre dans un café... et plouf!', 'jessica_puccino', 1, '2021-05-05 19:47:38'),
(3, 'La même couleur que l\'site!', 'Qu\'est-ce qui est jaune et qui attend ?\r\n\r\n- Jonathan', 'john_moutarde', 0, '2021-05-07 19:49:12');

--
-- Ajout d'une table bidon qui n'est jamais accédée par l'application
--

CREATE TABLE `top_secrets` (
  `id` int(11) NOT NULL,
  `credit_card_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `top_secrets`
--

INSERT INTO `top_secrets` (`id`, `credit_card_number`) VALUES
(1, '5595832628573608'),
(2, '5166092514862875'),
(3, '4716545992326760'),
(4, '4532664097628715');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `top_secrets`
--
ALTER TABLE `top_secrets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `top_secrets`
--
ALTER TABLE `top_secrets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;