-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Janvier 2019 à 14:47
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10
DROP DATABASE IF EXISTS jeanForteroche;
CREATE DATABASE jeanForteroche;
USE jeanForteroche;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeanforteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `postedDate` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `idEcrivain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `billet`
--

INSERT INTO `billet` (`id`, `titre`, `contenu`, `postedDate`, `slug`, `idEcrivain`) VALUES
(7, 'Le départ', '<p>Ce mardi-l&agrave;, la sonnerie du t&eacute;l&eacute;phone retentit en d&eacute;but de soir&eacute;e. En d&eacute;couvrant le nom du correspondant qui s&rsquo;affiche, V&eacute;ronique d&eacute;croche le combin&eacute;, tr&egrave;s intrigu&eacute;e. D&rsquo;habitude, sa s&oelig;ur ne l&rsquo;appelle jamais quand elle est en vacances, et n&rsquo;&eacute;courte pas ses cong&eacute;s non plus. Elle devait repartir vendredi de Bretagne avec son mari Jean-Claude et s&rsquo;arr&ecirc;ter deux jours chez V&eacute;ronique et Michel avant de rentrer sur Chalon. Alors, que se passe-t-il ? Y aurait-il un emp&ecirc;chement ? &laquo; Allo, V&eacute;ro ? C&rsquo;est Fran&ccedil;oise, je ne te d&eacute;range pas ? - Tu ne me d&eacute;ranges jamais&hellip; Mais, je vous croyais encore &agrave; Morgat ! Tout va bien ? &raquo; - En fait, on est rentr&eacute; cet apr&egrave;s-midi. Il n&rsquo;y a rien de grave, mais on ne pourra pas venir ce week-end. C&rsquo;est juste un petit contretemps, ne t&rsquo;inqui&egrave;te pas. Je voulais te pr&eacute;venir tout de suite, pour que tu ne remplisses pas le r&eacute;frig&eacute;rateur pour rien. Je te connais&hellip; - Mais que se passe-t-il ? L&rsquo;un de vous est malade ? Insiste V&eacute;ronique. - Oh, j&rsquo;ai juste une douleur qui persiste au ventre, sans doute les fruits de mer qui ne m&rsquo;ont pas r&eacute;ussi&hellip; Mais j&rsquo;ai pris rendez-vous chez le m&eacute;decin qui ne peut pas me recevoir avant vendredi, et il va s&ucirc;rement m&rsquo;envoyer passer des tas d&rsquo;examens. Alors on viendra quand je serai r&eacute;tablie&hellip; Je suis d&eacute;sol&eacute;e pour ce contretemps, m&ecirc;me si ce n&rsquo;est que partie remise. - Dis &agrave; Jean-Claude de ne pas s&rsquo;inqui&eacute;ter, il aura quand m&ecirc;me l&rsquo;osso bucco qu&rsquo;il m&rsquo;a r&eacute;clam&eacute; quand vous viendrez, essaie de plaisanter V&eacute;ronique, pas du tout rassur&eacute;e. &raquo;&nbsp;</p>', '2019-01-23 11:03:45', 'le-depart', 1),
(8, 'Une grande inquiétude', '<p>Les deux s&oelig;urs continuent &agrave; papoter un peu au t&eacute;l&eacute;phone, mais l&rsquo;esprit de V&eacute;ronique galope. Une douleur au ventre, juste un petit contretemps&hellip; Un signal d&rsquo;alarme clignote dans son cerveau, et une petite voix lui chuchote de s&rsquo;inqui&eacute;ter. Sa s&oelig;ur ne se plaint jamais. M&ecirc;me quand elle a &eacute;t&eacute; op&eacute;r&eacute;e douze ans plus t&ocirc;t, puis trait&eacute;e par rayons, elle a plaisant&eacute; de tout pour ne pas inqui&eacute;ter son entourage. Et V&eacute;ronique sait que Fran&ccedil;oise doit beaucoup souffrir pour &eacute;courter ses vacances. Pourvu que son cancer ne prenne pas le dessus&hellip; Elles parlent des enfants, mais V&eacute;ronique r&eacute;pond distraitement, l&rsquo;esprit pr&eacute;occup&eacute;. De vingt ans son a&icirc;n&eacute;e, Fran&ccedil;oise s&rsquo;est toujours occup&eacute;e de sa petite s&oelig;ur, et depuis que leur m&egrave;re n&rsquo;est plus l&agrave;, V&eacute;ronique a parfois l&rsquo;impression d&rsquo;avoir deux mamans : Paulette et Fran&ccedil;oise, ses deux s&oelig;urs a&icirc;n&eacute;es. Toujours l&agrave; pour l&rsquo;&eacute;couter et la soutenir, l&rsquo;encourager dans ses projets ou ses d&eacute;marches. Un lien d&rsquo;amour indescriptible les unit toutes les trois, surtout depuis que leur s&oelig;ur Brigitte n&rsquo;est plus l&agrave;&hellip; Elles ont rassembl&eacute; leurs forces pour surmonter ensemble cette perte cruelle. V&eacute;ronique promet &agrave; Fran&ccedil;oise de la rappeler vendredi soir et raccroche le t&eacute;l&eacute;phone, plus inqui&egrave;te que jamais. Les deux jours qui pr&eacute;c&egrave;dent ce vendredi paraissent interminables, V&eacute;ronique tourne en rond, s&rsquo;interdisant de t&eacute;l&eacute;phoner &agrave; sa s&oelig;ur avant, afin que celle-ci ne devine pas son inqui&eacute;tude. Apr&egrave;s tout, Fran&ccedil;oise a peut-&ecirc;tre raison, les fruits de mer sont probablement responsables de ses troubles&hellip; Oh, pourvu que ce soit &ccedil;a&hellip; Le vendredi arrive enfin mais V&eacute;ronique ne parvient pas &agrave; joindre sa s&oelig;ur. Toujours ce maudit r&eacute;pondeur avec cette annonce tr&egrave;s personnalis&eacute;e de Fran&ccedil;oise qui doit en d&eacute;courager plus d&rsquo;un : &laquo; Bonjour, nous sommes absents pour un moment mais si vous laissez un message avec vos coordonn&eacute;es, nous vous rappellerons. D&eacute;marcheurs ou supporters du p&eacute;dophile de la famille, vous n&rsquo;&ecirc;tes pas les bienvenus, passez votre chemin ! &raquo;</p>', '2019-01-23 11:04:44', 'une-grande-inquietude', 1),
(9, 'L\'organisation', '<p>V&eacute;ronique a pourtant demand&eacute; cent fois &agrave; Fran&ccedil;oise de modifier son annonce, mais celle-ci la trouve parfaite et n&rsquo;a pas chang&eacute; un mot ! Sa s&oelig;ur est comme &ccedil;a&hellip; Tard dans la soir&eacute;e, le num&eacute;ro de celle-ci s&rsquo;affiche enfin sur le t&eacute;l&eacute;phone qui sonne, et V&eacute;ronique se pr&eacute;cipite pour r&eacute;pondre. Au bout du fil, Jean-Claude&hellip; La gorge serr&eacute;e, sa belle-s&oelig;ur l&rsquo;&eacute;coute lui annoncer ce qu&rsquo;elle a d&eacute;j&agrave; devin&eacute;. Fran&ccedil;oise est hospitalis&eacute;e pour des analyses approfondies, orient&eacute;es du c&ocirc;t&eacute; du foie. Elle appellera sa petite s&oelig;ur le lendemain entre deux examens d&egrave;s que le t&eacute;l&eacute;phone sera mis en service dans sa chambre. L&rsquo;inqui&eacute;tude pointe dans la voix de Jean-Claude, m&ecirc;me si celui-ci tente de plaisanter &agrave; propos de sa femme qui r&acirc;le un peu. Apr&egrave;s une nuit blanche, V&eacute;ronique re&ccedil;oit enfin l&rsquo;appel tant attendu de son a&icirc;n&eacute;e. Mais la petite voix de la malade ne la rassure gu&egrave;re, Fran&ccedil;oise semble tr&egrave;s affaiblie. Sa s&oelig;ur propose de venir la voir d&egrave;s le lendemain, malgr&eacute; la distance qui les s&eacute;pare. En partant t&ocirc;t le matin, l&rsquo;aller-retour reste g&eacute;rable sur une journ&eacute;e. Mais Fran&ccedil;oise refuse, elle n&rsquo;aime pas qu&rsquo;on la voit dans un lit d&rsquo;h&ocirc;pital. Peut-&ecirc;tre craint-elle de fissurer son image d&rsquo;a&icirc;n&eacute;e protectrice&hellip; Celle-ci essaie donc de rassurer la plus jeune, et lui promet d&rsquo;une voix t&eacute;nue d&rsquo;&ecirc;tre sortie d&egrave;s le lundi. Puis, vraisemblablement &eacute;puis&eacute;e, elle raccroche, un peu trop rapidement. V&eacute;ronique ne sait toujours pas quel mal ronge sa s&oelig;ur, mais elle devine que c&rsquo;est s&eacute;rieux et une immense inqui&eacute;tude teint&eacute;e de tristesse l&rsquo;envahit</p>', '2019-01-23 11:05:13', 'lorganisation', 1),
(10, 'La rencontre', '<p>Il lui explique tr&egrave;s doucement que l&rsquo;&eacute;tat de Fran&ccedil;oise s&rsquo;est brusquement aggrav&eacute;. Elle se d&eacute;bat au milieu d&rsquo;un oc&eacute;an de souffrances quand elle ne sombre pas dans un sommeil semicomateux. Le ton tr&egrave;s s&eacute;rieux de son beau-fr&egrave;re est un indicateur d&rsquo;extr&ecirc;me gravit&eacute;, il a perdu cette attitude d&eacute;sinvolte qu&rsquo;il cultive et qui lui va si bien. &laquo; Mais qu&rsquo;est-ce qu&rsquo;elle a ? demande V&eacute;ronique, &eacute;trangl&eacute;e par l&rsquo;&eacute;motion. - Une tumeur au foie qui a provoqu&eacute; une h&eacute;morragie interne, r&eacute;pond Jean-Claude apr&egrave;s un instant d&rsquo;h&eacute;sitation. Je ne vais pas te mentir, son &eacute;tat est tr&egrave;s pr&eacute;occupant. &raquo; Il promet &agrave; sa belle-s&oelig;ur de lui redonner des nouvelles d&egrave;s qu&rsquo;il en aura, et la laisse en larmes dans les bras de son mari qui ne sait pas comment la consoler. V&eacute;ronique comprend peu &agrave; peu qu&rsquo;elle s&rsquo;appr&ecirc;te &agrave; perdre sa deuxi&egrave;me s&oelig;ur, et cette id&eacute;e est insupportable. Effectivement, le lundi l&rsquo;&eacute;tat de Fran&ccedil;oise se d&eacute;grade encore, et le mardi soir, la triste nouvelle tombe. Jean-Claude annonce avec beaucoup de pr&eacute;cautions &agrave; V&eacute;ronique que Fran&ccedil;oise les a quitt&eacute;s. Sa belle-s&oelig;ur ne pouvant prononcer une parole, submerg&eacute;e de chagrin, elle passe le t&eacute;l&eacute;phone &agrave; Michel et les deux beaux-fr&egrave;res discutent un long moment. Puis, V&eacute;ronique tombe dans les bras de son mari, ces bras qui l&rsquo;ont d&eacute;j&agrave; trop souvent r&eacute;confort&eacute;e dans de pareils moments. Il faut ensuite annoncer cette terrible nouvelle aux trois enfants, qui ont d&eacute;j&agrave; compris &agrave; demi-mots qu&rsquo;un nouveau malheur vient de frapper leur cocon. Tous sont an&eacute;antis par ce brusque d&eacute;part. Les parents tentent de consoler les enfants qui adoraient leur tante et s&rsquo;installent avec eux dans le salon d&rsquo;habitude si chaleureux, mais ce soir plut&ocirc;t triste et froid. La soir&eacute;e s&rsquo;&eacute;tire entre col&egrave;re et petits mots apaisants, chuchotements et larmes. Pour ses enfants et son mari, V&eacute;ronique rassemble les souvenirs de celle qui l&rsquo;a fait rire toute sa vie, avant de la faire pleurer aujourd&rsquo;hui. Cette s&oelig;ur qui grima&ccedil;ait dans le dos de leur m&egrave;re quand elles &eacute;taient en d&eacute;saccord, et qui jurait &agrave; la mani&egrave;re du capitaine Haddock. Celle-l&agrave; m&ecirc;me qui aboyait derri&egrave;re la porte de la maison familiale pour faire fuir les d&eacute;marcheurs qui osaient sonner, d&eacute;clenchant les rires des plus jeunes. C&rsquo;est Fran&ccedil;oise qui lui avait transmis son amour pour les livres, qui l&rsquo;avait cajol&eacute;e et consol&eacute;e. En retour, sa plus jeune s&oelig;ur l&rsquo;avait aim&eacute;e autant qu&rsquo;une m&egrave;re. La fille de V&eacute;ronique avait h&eacute;rit&eacute; du temp&eacute;rament un peu direct et r&acirc;leur de Fran&ccedil;oise, et le regard bleu profond de son plus jeune fils rappelait celui de sa tante. La seule fois o&ugrave; V&eacute;ronique avait vers&eacute; des larmes &agrave; cause de Fran&ccedil;oise, c&rsquo;&eacute;tait le jour de son mariage avec Jean-Claude. Ag&eacute;e alors de sept ans, la petite ne comprenait pas que toute la famille se r&eacute;jouisse de voir sa s&oelig;ur se marier et quitter la maison. Cette id&eacute;e faisant jaillir un flot de larmes, leur m&egrave;re, un peu &eacute;nerv&eacute;e, avait demand&eacute; &agrave; sa plus jeune : &laquo; Mais enfin V&eacute;ro, pourquoi pleures-tu ainsi ? Ta s&oelig;ur se marie, c&rsquo;est un jour de f&ecirc;te ! - Mais qui va s&rsquo;occuper de moi maintenant? avait demand&eacute; la petite entre deux sanglots. &raquo; Sa m&egrave;re n&rsquo;avait rien trouv&eacute; &agrave; lui r&eacute;pondre</p>', '2019-01-23 11:05:59', 'la-rencontre', 1),
(11, 'Juste un contretemps', '<p>&nbsp;Et en ce jour de juin 2008, V&eacute;ronique se sent aussi perdue que quarante ans en arri&egrave;re. Comment va-t-elle continuer &agrave; avancer dans la vie sans cette s&oelig;ur qui commence d&eacute;j&agrave; &agrave; lui manquer cruellement ? Le lendemain, elle rassemble son courage et t&eacute;l&eacute;phone &agrave; son beau-fr&egrave;re. Elle s&rsquo;en veut de ne pas avoir pu lui parler la veille, submerg&eacute;e par le chagrin. Celui-ci, abattu mais r&eacute;confort&eacute; par son appel, lui explique qu&rsquo;il a pu parler un peu avec sa femme avant qu&rsquo;elle ne sombre dans un coma profond. Puis il ajoute, mi- contrari&eacute;, mi- amus&eacute; : &laquo; Je vais respecter toutes les derni&egrave;res volont&eacute;s de Fran&ccedil;oise, je les ai list&eacute;es, et il y en a beaucoup&hellip; Tu connais ta s&oelig;ur&hellip; Est-ce qu&rsquo;elle t&rsquo;en avait parl&eacute; ? &raquo; V&eacute;ronique parvient &agrave; sourire &agrave; travers ses larmes. Oui, elle connait bien cette s&oelig;ur dont ils parlent encore ensemble au pr&eacute;sent. Elle r&eacute;sume donc &agrave; son beau-fr&egrave;re ce qu&rsquo;elle a retenu : la cr&eacute;mation, une partie des cendres &eacute;parpill&eacute;es au large de Morgat et le reste dans une urne, dans le petit cimeti&egrave;re des Buteaux. Son beau-fr&egrave;re lui confirme les souhaits de sa femme. Elle apprend &eacute;galement que sa s&oelig;ur avait &eacute;tabli quelques mois auparavant une liste des personnes &agrave; pr&eacute;venir, mais aussi de celles &agrave; ne surtout pas contacter. Celles-ci n&rsquo;auront pas leur place aupr&egrave;s d&rsquo;eux le jour de ses obs&egrave;ques. Parmi ces derni&egrave;res, leur p&egrave;re et tous ceux qui se sont rang&eacute;s derri&egrave;re une autre de leurs s&oelig;urs et son pervers de mari, le bourreau de V&eacute;ronique pendant de longues ann&eacute;es. Fran&ccedil;oise a bien insist&eacute; aupr&egrave;s de son mari pour qu&rsquo;aucun de ceux-l&agrave; ne soit pr&eacute;sent le jour venu. Jean-Claude assure &agrave; sa belles&oelig;ur qu&rsquo;il respectera le souhait de sa femme, et qu&rsquo;il pr&eacute;viendra leur p&egrave;re apr&egrave;s les diff&eacute;rentes c&eacute;r&eacute;monies, comme il l&rsquo;a promis &agrave; Fran&ccedil;oise. V&eacute;ronique s&rsquo;effondre, tr&egrave;s touch&eacute;e par les derni&egrave;res volont&eacute;s de sa s&oelig;ur. Celle-ci continue &agrave; la soutenir m&ecirc;me apr&egrave;s avoir rendu son dernier souffle. A nouveau, les larmes jaillissent en torrent, incontr&ocirc;lables. Puis V&eacute;ronique essaie de puiser dans ses ressources pour trouver de nouvelles forces. A son tour, elle va devoir soutenir ses enfants, ses ni&egrave;ces, leurs enfants et son beau-fr&egrave;re, qui vont avoir besoin d&rsquo;elle. Sa s&oelig;ur Paulette sera &agrave; ses c&ocirc;t&eacute;s, et V&eacute;ronique s&rsquo;accroche &agrave; cette id&eacute;e qui la r&eacute;conforte un peu. Des journ&eacute;es &eacute;prouvantes les attendent tous, ils en sortiront un peu plus meurtris, elle s&rsquo;en doute, mais plus unis que jamais, &ccedil;a, elle le sait aussi. Ce &laquo; petit contretemps &raquo; qui contrariait un peu Fran&ccedil;oise va chambouler bien plus qu&rsquo;un week-end en famille. La vie de son mari, de ses enfants et de tous ses proches n&rsquo;aura plus jamais la m&ecirc;me saveur sans cette femme &eacute;tonnante qui tenait &agrave; merveilles les r&ocirc;les qui lui &eacute;taient confi&eacute;s : s&oelig;ur, &eacute;pouse, m&egrave;re, grand-m&egrave;re, tante et m&ecirc;me grand-tante. Tous vont devoir apprendre &agrave; vivre sans elle et &agrave; parler d&rsquo;elle au pass&eacute;. Fran&ccedil;oise va devenir un puzzle de souvenirs, longtemps rang&eacute; dans la bo&icirc;te des plus tristes, avant de rejoindre morceau apr&egrave;s morceau ceux qui font parfois sourire.&nbsp;</p>', '2019-01-23 11:06:59', 'juste-un-contretemps', 1),
(18, 'dd', '<p>dfdff</p>', '2019-01-24 14:08:09', 'dd', 1),
(19, 'dd', '<p>dfdff</p>', '2019-01-24 14:14:22', 'dd', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `postedDate` datetime NOT NULL,
  `signaledAt` datetime,
  `moderateAt` datetime,
  `idBillet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecrivain`
--

CREATE TABLE `ecrivain` (
  `id` int(11) NOT NULL,
  `mp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ecrivain`
--

INSERT INTO `ecrivain` (`id`, `mp`, `email`) VALUES
(1, 'pass', 'jfr@yopmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEcrivain` (`idEcrivain`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBillet` (`idBillet`);

--
-- Index pour la table `ecrivain`
--
ALTER TABLE `ecrivain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ecrivain`
--
ALTER TABLE `ecrivain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `billet_ibfk_1` FOREIGN KEY (`idEcrivain`) REFERENCES `ecrivain` (`id`)ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idBillet`) REFERENCES `billet` (`id`)ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
