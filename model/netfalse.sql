-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 13:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `netfalse`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `duration` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `titre`, `categorie`, `description`, `duration`, `nom`) VALUES
(11, 'Bleach', 'anime', 'Adolescent de quinze ans, Ichigo Kurosaki possède un don particulier : celui de voir les esprits. Un jour, il croise la route d\'une belle shinigami (un être spirituel) en train de pourchasser une “âme perdue”, un esprit maléfique qui hante notre monde et n\'arrive pas à trouver le repos.', 25, '62b587be725c37.83634370.jpg'),
(12, 'L’Attaque des Titans', 'anime', 'Dans un monde ravagé par des titans mangeurs d\'homme depuis plus d\'un siècle, les rares survivants de l\'humanité n\'ont d\'autre choix pour survivre que de se barricader dans une cité-forteresse.', 25, '627e62bd327f02.49499642.jpg'),
(14, 'Game of Thrones', 'histoire', 'Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s\'emparer du Trône de Fer, le symbole du pouvoir absolu.', 50, '6286ae23c14711.68718564.jpg'),
(15, 'Vikings', 'histoire', 'Scandinavie, à la fin du 8ème siècle. Ragnar Lodbrok, un jeune guerrier viking, est avide d\'aventures et de nouvelles conquêtes. Lassé des pillages sur les terres de l\'Est, il se met en tête d\'explorer l\'Ouest par la mer.', 45, '627e636f855d62.95468244.jpg'),
(16, 'The witcher', 'histoire', 'Inspiré d\'une série littéraire fantastique à succès, The Witcher est un récit épique sur la famille et le destin. Geralt de Riv, un chasseur de monstres solitaire, se bat pour trouver sa place dans un monde où les humains sont souvent plus vicieux que les bêtes.', 60, '62b581e7183f53.49355759.jpg'),
(17, 'Black mirror', 'syfy', 'Dans un monde où tout le monde pédale afin de produire de l\'énergie, une jeune femme veut tenter sa chance dans un télécrochet. Un ami l\'appuie, utilisant des crédits dont il a hérité. Mais tout dérape avec des propositions graveleuses des gens de TV, jusqu\'à ce que l\'ami doive faire un choix moral…', 60, '62b581332d5b01.71257292.jpg'),
(18, 'La casa de papel', 'action', 'Un homme mystérieux, surnommé le Professeur, planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs en Espagne qui n\'ont rien à perdre.', 50, '627eb0704f71e6.72804348.jpg'),
(20, 'Narcos', 'action', 'Loin d\'un simple biopic de Pablo Escobar, Narcos retrace la lutte acharnée des États-Unis et de la Colombie contre le cartel de la drogue de Medellín, l\'organisation la plus lucrative et impitoyable de l\'histoire criminelle moderne.', 50, '627eb11150caa4.61567514.jpg'),
(21, 'The 100', 'syfy', 'Après une apocalypse nucléaire causée par l\'Homme lors d\'une troisième Guerre Mondiale, les 318 survivants recensés se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000. Mais 97 ans plus tard, ', 45, '627eb142f2f373.63855067.jpg'),
(22, 'Validé', 'action', 'Un jeune rappeur talentueux, épaulé par ses deux amis d\'enfance, se retrouve du jour au lendemain \"validé\" par une des stars du milieu. Seulement, cette alliance se transforme rapidement en une dangereuse rivalité...', 35, '627eb16ddb69c5.42390672.jpg'),
(23, 'The walking dead', 'action', 'L\'histoire suit le personnage de Rick Grimes (interprété par Andrew Lincoln), adjoint du shérif du comté de Kings (en Géorgie). Il se réveille d\'un coma de plusieurs semaines pour découvrir que la population a été ravagée par une épidémie inconnue qui transforme les êtres humains en morts-vivants, appelés « rôdeurs ».', 40, '62b58050ede072.11864890.jpg'),
(26, 'Vikings, Valhalla', 'histoire', '100 ans après les premiers vikings, l\'histoire de leurs descendants, parmi lesquels les légendaires Leif Erikson, Freydis, Harald Harada et William Le Conquérant, des hommes et des femmes prêts à tout pour survivre dans une Europe en pleine mutation... Spin-off de Vikings.', 45, '62b5823588eea8.70779110.jpg'),
(27, 'Baki', 'anime', 'Cinq assassins sanguinaires s\'évadent de prison et prennent Tokyo d\'assaut. Le champion d\'arts martiaux Baki Hanma et quatre combattants d\'élite devront les affronter. Tous les coups sont permis. Le combat sera féroce et sans pitié.', 30, '6286c0af8efec3.04844237.jpg'),
(28, 'Demon slayer', 'anime', 'Le groupe de Tanjirô a terminé son entraînement de récupération au domaine des papillons et embarque à présent en vue de sa prochaine mission à bord du train de l\'infini, d\'où quarante personnes ont disparu en peu de temps. Tanjirô et Nezuko, accompagnés de Zen\'itsu et Inosuke, s\'allient à l\'un des plus puissants épéistes de l\'armée des pourfendeurs de démons, le Pilier de la Flamme Kyôjurô Rengoku, afin de contrer le démon qui a engagé le train de l\'Infini sur une voie funeste.', 25, '62b584b43b57d2.81132999.jpg'),
(30, 'Halo', 'syfy', 'Halsey, une brillante scientifique, a créé les Spartans, des super-soldats génétiquement et technologiquement améliorés pour booster les capacités physiques et mentales. John-117, le commandant d\'une des unités, mène ses troupes vers le combat', 50, '62b5832eba8006.64602586.jpg'),
(31, 'Marco Polo', 'histoire', 'Le jeune marchand vénitien pénètre alors dans un univers périlleux et fascinant dont il ignore tout. Entre querelles de pouvoir et cupidité, trahisons et intrigues sexuelles, il va devoir jouer de malice pour gagner la confiance du Khan et le seconder dans sa quête sauvage pour régner sur le monde.', 45, '62b582cba0c0d6.68048216.jpg'),
(32, 'Perdu dans l\'espace', 'syfy', 'Sélectionnée pour coloniser une nouvelle planète, loin de la Terre, famille Robinson s\'écrase sur une planète inconnue. Ils vont devoir travailler ensemble pour survivre, et affronter de nombreux dangers', 55, '62b58378af6c29.65241613.jpg'),
(33, 'Peaky Blinders', 'action', 'En 1919, à Birmingham, soldats, révolutionnaires politiques et criminels combattent pour se faire une place dans le paysage industriel de l\'après-Guerre. Le Parlement s\'attend à une violente révolte, et Winston Churchill mobilise des forces spéciales pour contenir les menaces.', 60, '62b581921188c4.80491105.jpg'),
(34, 'Gomorra', 'action', 'En Italie, la famille Savastano, dirigée par l\'impitoyable Don Pietro, domine la mafia napolitaine. En concurrence avec un autre clan de la Camorra et confronté à une nouvelle génération décidée à prendre de l\'importance sans respecter les codes, Don Piet', 40, '6286c4de980442.25261299.jpg'),
(35, 'Ozark', 'action', 'Marty, conseiller financier de Chicago, blanchit discrètement de l\'argent pour le compte d\'un baron de la drogue. Lorsque son partenaire le trahit, il doit rapidement déménager avec sa famille aux monts Ozarks.', 40, '6286c514e99473.27474193.jpg'),
(37, 'berserk', 'anime', 'Dans un monde médiéval et fantastique, erre un guerrier solitaire nommé Guts, décidé à être seul maître de son destin. Autrefois contraint par un pari perdu à rejoindre les Faucons, une troupe de mercenaires dirigés par Griffith, Guts fut acteur de nombreux combats sanglants et témoin de sombres intrigues politiques.', 25, '62b58615a85e72.60146294.jpg'),
(38, 'The mandalorian', 'syfy', 'Après les aventures de Jango et Boba Fett, un nouveau héros émerge dans l\'univers Star Wars. L\'intrigue, située entre la chute de l\'Empire et l\'émergence du Premier Ordre, suit les voyages d\'un chasseur de primes solitaire dans les contrées les plus éloignées de la Galaxie, loin de l\'autorité de la Nouvelle République.', 50, '62b583da4673f4.25279938.jpg'),
(39, 'Moon knight', 'syfy', 'Employé discret dans une boutique de souvenirs, Steven Grant est soudain victime de pertes de mémoire et est hanté par des visions d\'une autre vie. Il découvre qu\'il souffre d\'un trouble dissociatif de l\'identité et qu\'il partage le même corps qu\'un mercenaire, Marc Spector.', 50, '62b584320ab048.66633442.jpeg'),
(40, 'The last kingdom', 'histoire', 'A  la fin du IXème siècle, l\'Angleterre est encore séparée en plusieurs royaumes et attaquée de toutes parts par les vikings. Uthred, fils orphelin d\'un saxon, est kidnappé par des vikings et élevé comme l\'un d\'eux. En grandissant, il va devoir faire des choix entre ses deux origines.', 55, '62b5885c782374.10972555.jpg'),
(41, 'Fullmetal Alchemist', 'anime', 'Après avoir perdu leur mère, Edward et Alphonse tentent de la ramener à la vie grâce à l\'alchimie. Cependant, l\'alchimie doit obéir à la loi de l\'échange équivalent : l\'objet transformé et l\'objet issu de la transformation doivent être de masses équivalentes.', 25, '62b588f4e8cc70.29992822.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `note`, `user_id`, `item_id`) VALUES
(264, 4, 47, 20),
(265, 3, 47, 22),
(266, 4, 47, 18),
(267, 4, 47, 23),
(268, 3, 47, 33),
(269, 3, 47, 34),
(270, 3, 47, 35),
(271, 5, 47, 14),
(272, 5, 47, 14),
(273, 5, 47, 14),
(274, 5, 47, 14),
(275, 5, 47, 15),
(276, 5, 47, 15),
(277, 5, 47, 15),
(278, 4, 47, 16),
(279, 2, 47, 26),
(280, 4, 47, 31),
(281, 4, 47, 17),
(282, 3, 47, 21),
(283, 3, 47, 32),
(284, 4, 47, 11),
(285, 5, 47, 12),
(286, 5, 47, 12),
(287, 5, 47, 12),
(288, 5, 47, 12),
(289, 5, 47, 12),
(290, 4, 47, 28),
(291, 4, 47, 37),
(292, 4, 47, 41);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'admin'),
(2, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `id_role` int(11) DEFAULT 2,
  `pseudo` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `mdp`, `id_role`, `pseudo`, `avatar`) VALUES
(48, 'admin@netfalse.com', '$2y$10$EJwzfLU/H58/eW5QYxo0AuBqsYHBxBQC6p/3NIGrh8kY7EiRWttym', 1, 'admin', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_note_item` (`item_id`),
  ADD KEY `fk_note_user` (`user_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_note_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_note_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
