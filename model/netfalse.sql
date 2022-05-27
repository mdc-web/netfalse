-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 mai 2022 à 21:56
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
CREATE SCHEMA IF NOT EXISTS `netfalse` DEFAULT CHARACTER SET utf8 ;
USE `netfalse` ;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `titre`, `categorie`, `description`, `duration`, `nom`) VALUES
(11, 'Bleach', 'anime', 'Adolescent de quinze ans, Ichigo Kurosaki possède un don particulier : celui de voir les esprits. Un jour, il croise la route d\'une belle shinigami (un être spirituel) en train de pourchasser une “âme perdue”, un esprit maléfique qui hante notre monde et ', 25, '627e6263754e19.13199014.jpg'),
(12, 'L’Attaque des Titans', 'anime', 'Dans un monde ravagé par des titans mangeurs d\'homme depuis plus d\'un siècle, les rares survivants de l\'humanité n\'ont d\'autre choix pour survivre que de se barricader dans une cité-forteresse.', 25, '627e62bd327f02.49499642.jpg'),
(14, 'Game of Thrones', 'histoire', 'Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s\'emparer du Trône de Fer, le symbole du pouvoir absolu.', 50, '6286ae23c14711.68718564.jpg'),
(15, 'Vikings', 'histoire', 'Scandinavie, à la fin du 8ème siècle. Ragnar Lodbrok, un jeune guerrier viking, est avide d\'aventures et de nouvelles conquêtes. Lassé des pillages sur les terres de l\'Est, il se met en tête d\'explorer l\'Ouest par la mer.', 45, '627e636f855d62.95468244.jpg'),
(16, 'The witcher', 'histoire', 'Inspiré d\'une série littéraire fantastique à succès, The Witcher est un récit épique sur la famille et le destin. Geralt de Riv, un chasseur de monstres solitaire, se bat pour trouver sa place dans un monde où les humains sont souvent plus vicieux que les', 60, '627e63d94bbe00.19047941.jpg'),
(17, 'Black mirror', 'syfy', 'Dans un monde où tout le monde pédale afin de produire de l\'énergie, une jeune femme veut tenter sa chance dans un télécrochet. Un ami l\'appuie, utilisant des crédits dont il a hérité. Mais tout dérape avec des propositions graveleuses des gens de TV, jus', 60, '6286c2c90ae532.69602252.jpg'),
(18, 'La casa de papel', 'action', 'Un homme mystérieux, surnommé le Professeur, planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs en Espagne qui n\'ont rien à perdre.', 50, '627eb0704f71e6.72804348.jpg'),
(20, 'Narcos', 'action', 'Loin d\'un simple biopic de Pablo Escobar, Narcos retrace la lutte acharnée des États-Unis et de la Colombie contre le cartel de la drogue de Medellín, l\'organisation la plus lucrative et impitoyable de l\'histoire criminelle moderne.', 50, '627eb11150caa4.61567514.jpg'),
(21, 'The 100', 'syfy', 'Après une apocalypse nucléaire causée par l\'Homme lors d\'une troisième Guerre Mondiale, les 318 survivants recensés se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000. Mais 97 ans plus tard, ', 45, '627eb142f2f373.63855067.jpg'),
(22, 'Validé', 'action', 'Un jeune rappeur talentueux, épaulé par ses deux amis d\'enfance, se retrouve du jour au lendemain \"validé\" par une des stars du milieu. Seulement, cette alliance se transforme rapidement en une dangereuse rivalité...', 35, '627eb16ddb69c5.42390672.jpg'),
(23, 'The walking dead', 'syfy', 'L\'histoire suit le personnage de Rick Grimes (interprété par Andrew Lincoln), adjoint du shérif du comté de Kings (en Géorgie). Il se réveille d\'un coma de plusieurs semaines pour découvrir que la population a été ravagée par une épidémie inconnue qui tra', 40, '627eb1d7753bd7.43152747.jpg'),
(26, 'Vikings, Valhalla', 'histoire', '100 ans après les premiers vikings, l\'histoire de leurs descendants, parmi lesquels les légendaires Leif Erikson, Freydis, Harald Harada et William Le Conquérant, des hommes et des femmes prêts à tout pour survivre dans une Europe en pleine mutation... Sp', 45, '6286c045b9fb78.32074978.jpg'),
(27, 'Baki', 'anime', 'Cinq assassins sanguinaires s\'évadent de prison et prennent Tokyo d\'assaut. Le champion d\'arts martiaux Baki Hanma et quatre combattants d\'élite devront les affronter. Tous les coups sont permis. Le combat sera féroce et sans pitié.', 30, '6286c0af8efec3.04844237.jpg'),
(28, 'Demon slayer', 'anime', 'Le groupe de Tanjirô a terminé son entraînement de récupération au domaine des papillons et embarque à présent en vue de sa prochaine mission à bord du train de l\'infini, d\'où quarante personnes ont disparu en peu de temps. Tanjirô et Nezuko, accompagnés ', 25, '6286c12a08bb07.89954882.jpg'),
(29, 'Fullmetal Alchemist', 'anime', 'L\'histoire se situe à une époque indéterminée qui ressemble au début de nôtre XXème siècle, où l\'alchimie est l\'équivalent de la science dans notre monde. La mère de deux frères, Alphonse et Edward Elric, attend désespérément le retour de son mari, parti ', 30, '6286c1af8f2694.06899827.jpg'),
(30, 'Halo', 'syfy', 'Halsey, une brillante scientifique, a créé les Spartans, des super-soldats génétiquement et technologiquement améliorés pour booster les capacités physiques et mentales. John-117, le commandant d\'une des unités, mène ses troupes vers le combat... Adaptati', 50, '6286c202b14007.63762136.jpg'),
(31, 'Marco Polo', 'histoire', 'Le jeune marchand vénitien pénètre alors dans un univers périlleux et fascinant dont il ignore tout. Entre querelles de pouvoir et cupidité, trahisons et intrigues sexuelles, il va devoir jouer de malice pour gagner la confiance du Khan et le seconder dan', 45, '6286c22a4512d4.99914624.jpg'),
(32, 'perdu dans l\'espace', 'syfy', 'Sélectionnée pour coloniser une nouvelle planète, loin de la Terre, famille Robinson s\'écrase sur une planète inconnue. Ils vont devoir travailler ensemble pour survivre, et affronter de nombreux dangers.', 55, '6287cc4406a2a8.58385271.jpg'),
(33, 'Peaky Blinders', 'action', 'En 1919, à Birmingham, soldats, révolutionnaires politiques et criminels combattent pour se faire une place dans le paysage industriel de l\'après-Guerre. Le Parlement s\'attend à une violente révolte, et Winston Churchill mobilise des forces spéciales pour', 45, '6286c492351a14.42883747.jpg'),
(34, 'Gomorra', 'action', 'En Italie, la famille Savastano, dirigée par l\'impitoyable Don Pietro, domine la mafia napolitaine. En concurrence avec un autre clan de la Camorra et confronté à une nouvelle génération décidée à prendre de l\'importance sans respecter les codes, Don Piet', 40, '6286c4de980442.25261299.jpg'),
(35, 'Ozark', 'action', 'Marty, conseiller financier de Chicago, blanchit discrètement de l\'argent pour le compte d\'un baron de la drogue. Lorsque son partenaire le trahit, il doit rapidement déménager avec sa famille aux monts Ozarks.', 40, '6286c514e99473.27474193.jpg');

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
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `id_role` int(11) DEFAULT 2,
  `pseudo` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `mdp`, `id_role`, `pseudo`, `avatar`) VALUES
(35, 'admin@netfalse.com', '$2y$10$xGUOW338P84fjA5hNW3PTuqIRUle7nNhs5E3S41wq60K0.BCtJCS.', 1, 'admin', '6287f184856141.35008881.jpg'),
(36, 'test@gmail.fr', '$2y$10$w6PxIaDBAGzyuXSiITF8.uehXMUkM.ccvotYcL05ASak8DCos6oRq', 2, 'test', '6287f1d7067cc7.92361624.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
