-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 fév. 2022 à 16:13
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `content`, `date`) VALUES
(1, 3, 'Article 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam odio, euismod vel rutrum id, imperdiet sed lorem. Integer et posuere risus, sit amet lobortis libero. Vivamus nulla nisi, ullamcorper in egestas a, egestas tempor nibh. Praesent dolor lacus, scelerisque ut nulla volutpat, tempus finibus magna. Vestibulum posuere iaculis ornare. Curabitur suscipit risus tellus, in elementum lorem laoreet maximus. Maecenas purus velit, sagittis vel aliquam nec, mattis sed ex. Morbi a feugiat neque. Morbi et ipsum vitae libero semper aliquet vestibulum fringilla nunc.\r\n\r\nNulla facilisi. Mauris ut auctor magna. Sed tempor est ex, ut dictum nisi pellentesque ut. Praesent quis neque ut orci vehicula suscipit. Vivamus feugiat orci id ante hendrerit tincidunt. Fusce ac turpis nunc. Nunc ut rhoncus tortor. Cras mollis neque vitae risus pulvinar, vitae interdum nisi sollicitudin. Donec pharetra lectus diam, in iaculis urna imperdiet sed. Pellentesque sit amet luctus enim, ut auctor ex.\r\n\r\nVivamus vestibulum, elit sed pharetra lobortis, orci ante pretium lacus, in tempor sem lacus ut ligula. Nullam et pretium nisi, at hendrerit magna. Nam sed leo eros. Ut eleifend, risus et consectetur hendrerit, nunc eros ultrices risus, id egestas ipsum neque in dui. Duis purus lorem, maximus at lobortis sit amet, facilisis at nulla. Praesent posuere pharetra gravida. Vivamus ligula enim, pellentesque non ante ut, convallis vestibulum turpis. Vestibulum bibendum nisl sit amet luctus luctus. Nam vitae dui malesuada lacus accumsan semper. Nam sit amet cursus elit. Nullam porttitor odio at mollis tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer varius ipsum et mi laoreet dignissim. Cras lorem tortor, pellentesque eget vestibulum fermentum, dignissim sed erat. Nunc condimentum odio eget turpis consectetur, eget ornare velit lacinia.\r\n\r\nDuis laoreet libero nec nulla posuere, quis imperdiet nunc finibus. Proin lacinia nisi nec felis vehicula consequat. Mauris volutpat a lacus nec molestie. Nulla vel euismod magna, nec finibus augue. Cras eleifend mauris at leo imperdiet gravida. In hac habitasse platea dictumst. Aliquam eget suscipit purus. Quisque nec diam eget velit venenatis placerat quis eu mi. Nulla hendrerit, elit nec vehicula congue, ligula nulla maximus erat, at porttitor orci diam vel ipsum. Donec lacinia feugiat tincidunt. Cras malesuada, nulla et commodo ornare, lacus ligula finibus dui, pulvinar ullamcorper diam sem id velit. Duis dapibus lacus sed ante convallis, sit amet sodales augue imperdiet. Nulla semper tristique dignissim. Proin fringilla, neque tincidunt suscipit pharetra, dolor nisi hendrerit nibh, in pretium erat velit vel odio.\r\n\r\nFusce at mattis metus. Vestibulum et ex facilisis, luctus libero quis, dictum velit. Maecenas et neque tristique, finibus metus vitae, tempor turpis. Nulla posuere maximus leo, ut pulvinar lectus sagittis id. Duis auctor arcu quis vehicula mollis. Vivamus non sem in dolor placerat vulputate. Vivamus tempor lectus et nisl auctor porta. Maecenas vehicula, nunc et tristique luctus, ante arcu pretium neque, tincidunt posuere magna velit eget diam. Ut blandit ligula nulla, vitae ultrices quam suscipit ac. Proin eget dolor interdum, cursus urna at, gravida diam. Morbi tempus sed orci egestas placerat. Phasellus ac vehicula urna. Nullam sollicitudin sollicitudin enim at convallis. Nam sed dolor dapibus, efficitur lorem eu, ultricies augue. Suspendisse ornare finibus lectus sit amet viverra. Donec pretium sagittis augue, vitae viverra tellus tincidunt ac.', '2021-08-11 13:30:56'),
(3, 3, 'Article 3', 'Gummies bonbon gummies lemon drops sugar plum jelly-o. Bear claw candy canes oat cake halvah tootsie roll fruitcake. Candy canes fruitcake gummi bears cake cookie tiramisu chocolate tiramisu gummi bears. Danish biscuit dessert sweet gingerbread jelly-o cake donut. Fruitcake sesame snaps sweet apple pie dessert. Jelly beans candy toffee danish oat cake muffin soufflé. Cake sweet roll donut cheesecake tootsie roll caramels cake brownie macaroon. Croissant chocolate bar cake cake jelly bonbon jelly beans bear claw sweet roll. Gummi bears chocolate bar wafer bear claw cookie cake. Jelly beans ice cream candy canes chocolate caramels. Chupa chups jujubes halvah tiramisu cake lollipop oat cake. Topping halvah jelly-o chocolate tart jujubes. Marshmallow lollipop marshmallow donut chupa chups jelly candy. Danish dessert liquorice bear claw caramels.\r\nShortbread marzipan shortbread cake ice cream biscuit soufflé cake. Candy sugar plum lollipop macaroon lollipop sugar plum chocolate cake sugar plum. Shortbread sweet roll lemon drops chocolate cake jelly beans liquorice gummi bears. Dragée cheesecake pudding macaroon bonbon sugar plum. Chupa chups marzipan tiramisu sweet roll marzipan jujubes jelly. Oat cake cake jelly beans macaroon pie liquorice. Sweet pie chocolate cake chupa chups cake chocolate cake liquorice powder jelly beans. Dessert gummies dragée cupcake tiramisu lemon drops fruitcake cookie. Danish tart toffee cheesecake chocolate cake cotton candy. Brownie jelly beans powder ice cream topping fruitcake chupa chups tart candy. Caramels cake jelly-o lemon drops jelly-o dragée tootsie roll. Sweet roll croissant fruitcake shortbread croissant oat cake. Wafer jelly pudding gummi bears cupcake liquorice.\r\nBiscuit toffee jelly beans liquorice dessert fruitcake marzipan powder. Chocolate soufflé chocolate gummies danish caramels chocolate cake. Cookie danish danish wafer sweet lollipop dessert. Cupcake cookie lemon drops marzipan oat cake tiramisu cookie jelly caramels. Donut brownie pastry jujubes pudding marzipan. Chocolate cake caramels liquorice chocolate gummi bears. Soufflé lollipop powder dragée pie macaroon sesame snaps gummi bears. Gingerbread candy tart chocolate cake icing oat cake chocolate bar halvah. Carrot cake gummies soufflé chocolate bar halvah muffin sweet cotton candy. Bear claw bear claw pudding halvah chupa chups macaroon jujubes soufflé halvah. Cake chocolate bear claw croissant tiramisu cotton candy soufflé caramels. Cotton candy dragée cheesecake bear claw gummies donut danish.\r\nMarshmallow lollipop lemon drops tiramisu gingerbread tiramisu marshmallow brownie. Powder pie brownie topping cotton candy. Sweet cake lemon drops dragée topping ice cream. Dragée soufflé soufflé liquorice gingerbread. Chocolate candy carrot cake caramels wafer jujubes tootsie roll dessert ice cream. Toffee cupcake ice cream gingerbread caramels. Apple pie biscuit chocolate jelly beans cake chocolate bear claw topping. Marshmallow sweet chocolate bar halvah danish lemon drops. Sesame snaps caramels cheesecake chocolate bar sesame snaps gummi bears. Cake cotton candy liquorice tart candy cotton candy bear claw gummi bears. Sugar plum donut apple pie toffee powder soufflé. Sugar plum halvah croissant wafer halvah cookie ice cream biscuit pie. Macaroon cheesecake caramels tootsie roll pie candy apple pie. Dragée oat cake jelly oat cake shortbread chocolate.\r\nJelly beans caramels gingerbread sesame snaps wafer muffin toffee. Icing shortbread tiramisu jelly beans donut jelly beans dragée tiramisu. Tiramisu muffin tart brownie jelly-o. Candy marshmallow biscuit candy muffin shortbread danish gingerbread cupcake. Cake caramels candy canes ice cream caramels chocolate bar cotton candy. Gummi bears liquorice oat cake liquorice chocolate cake danish caramels chupa chups. Marshmallow cake jelly-o sugar plum dessert. Jujubes cake caramels shortbread tiramisu jelly-o donut muffin pie. Oat cake liquorice caramels lemon drops halvah chupa chups brownie topping apple pie. Biscuit caramels marzipan pastry ice cream gingerbread jelly beans cookie soufflé. Macaroon topping cheesecake tart apple pie. Donut powder marzipan marzipan donut.\r\nHalvah marshmallow ice cream jelly beans bonbon. Sweet roll dessert tootsie roll cupcake gummi bears. Gingerbread cotton candy sweet biscuit muffin jelly-o sugar plum cookie sweet roll. Dragée sesame snaps sugar plum tart tart wafer dessert. Danish danish bear claw cake gummies dessert pastry. Carrot cake chocolate bar carrot cake marshmallow halvah muffin. Lemon drops powder jelly chocolate dessert. Macaroon cake cotton candy bear claw cotton candy toffee sweet gummies. Sweet cotton candy chocolate topping bear claw sesame snaps dessert gummi bears. Apple pie cake shortbread jelly beans chocolate sesame snaps. Biscuit fruitcake sweet roll bear claw danish jujubes. Shortbread jelly caramels sweet roll chocolate. Dragée tart biscuit sweet tootsie roll apple pie. Macaroon cake chocolate cake powder muffin.\r\nMuffin gummi bears sesame snaps jelly beans croissant jelly beans sweet pudding muffin. Pudding muffin fruitcake lemon drops oat cake tootsie roll tootsie roll. Tiramisu chocolate cake biscuit sweet roll sugar plum powder powder sweet roll. Croissant candy canes fruitcake wafer pastry wafer donut pudding marzipan. Carrot cake candy canes jelly-o dragée gingerbread dragée dessert tiramisu. Jelly sweet cake chocolate bar oat cake halvah brownie sweet roll. Soufflé pudding gummi bears chocolate topping cupcake soufflé. Apple pie icing danish carrot cake gingerbread marshmallow pie gummies shortbread. Cotton candy shortbread chupa chups cookie jelly-o powder tiramisu fruitcake ice cream. Shortbread chocolate lemon drops jujubes pudding caramels. Toffee cheesecake jelly-o muffin sugar plum bear claw. Sweet chocolate dragée powder gummi bears cake apple pie. Danish dragée muffin tiramisu cotton candy dragée. Pastry muffin toffee apple pie cotton candy pudding danish.', '2021-08-11 13:14:56'),
(4, 3, 'Article 4', 'Danish sugar plum muffin ice cream muffin jelly liquorice cupcake. Powder fruitcake I love jelly beans chocolate oat cake sesame snaps cheesecake. I love cake gingerbread I love gummies sweet roll tart candy. Carrot cake jelly-o lemon drops marshmallow bear claw dessert sesame snaps. Jelly macaroon chocolate brownie jelly-o I love chupa chups. Sweet roll gummi bears cotton candy I love wafer gummi bears sesame snaps candy canes croissant. Lemon drops cake tootsie roll dragée ice cream. Ice cream lemon drops tart tootsie roll cake tart cupcake topping.\r\nI love fruitcake donut jelly beans chupa chups I love. Cake chocolate cake cake cotton candy soufflé cake carrot cake cake. Chupa chups cookie I love croissant apple pie brownie cake cheesecake. Jelly beans dragée chocolate bar biscuit danish. Shortbread gummi bears jelly beans ice cream lollipop cookie muffin donut I love. Apple pie liquorice topping I love lemon drops candy canes liquorice. Icing pastry oat cake carrot cake sweet muffin brownie. Tootsie roll wafer tiramisu chocolate cake sesame snaps I love jelly-o bear claw macaroon.\r\nJelly carrot cake gummi bears gummi bears liquorice powder danish chocolate cake I love. Danish wafer fruitcake caramels macaroon. Danish dragée donut brownie ice cream jelly beans jelly. Shortbread sweet roll gummi bears marshmallow cotton candy. Chocolate cake donut topping cheesecake cheesecake bonbon ice cream brownie. Chocolate cake caramels chupa chups jelly-o cupcake. Caramels sesame snaps tiramisu pudding danish carrot cake. Donut I love powder I love pastry.', '2021-08-11 13:54:56'),
(6, 3, 'article test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada magna in gravida tristique. Suspendisse potenti. Donec non felis mollis, ullamcorper arcu at, malesuada libero. Pellentesque luctus felis enim, ut pretium purus pretium sed. Donec nec sagittis felis. Curabitur ac turpis mattis, ultrices magna vitae, maximus nibh. Proin gravida posuere pellentesque. Vestibulum nibh eros, pulvinar vel ullamcorper sed, consectetur eget ex. Pellentesque sit amet aliquet lacus. Aliquam iaculis sodales turpis.\r\n\r\nNullam suscipit metus vitae odio mollis pharetra. Nam nec enim suscipit, ullamcorper eros finibus, interdum arcu. Donec tincidunt hendrerit eros, id blandit elit condimentum nec. Quisque ac orci nec dui consequat commodo eu at libero. Praesent porta ornare diam, quis sagittis arcu tristique sit amet. Praesent nibh turpis, blandit a facilisis id, elementum et purus. In eleifend ultrices dui, vitae finibus ante. Sed auctor tempus ex, quis posuere mi pellentesque ac. Donec et faucibus nibh, non pretium elit. Mauris ac risus eu purus aliquam hendrerit quis ut risus. Maecenas laoreet libero at mollis aliquet. Praesent odio felis, pulvinar id metus a, vestibulum ullamcorper eros.\r\n\r\nPraesent egestas id justo ut auctor. Phasellus molestie nisi enim. Proin lacinia dui a blandit pellentesque. Mauris vel ipsum arcu. Quisque ultrices egestas nisl, sit amet bibendum risus condimentum a. Proin volutpat ipsum id orci sollicitudin tincidunt. Sed egestas a erat in gravida. Aliquam eu fringilla neque. Nulla vel libero pellentesque, consectetur justo sed, aliquet elit. Nam turpis purus, ullamcorper et venenatis sit amet, molestie interdum orci.\r\n\r\nNulla euismod nunc velit, eu consequat orci rutrum vitae. Suspendisse velit odio, hendrerit vitae leo sit amet, malesuada maximus odio. Donec malesuada pharetra sem, eget convallis mi volutpat a. Duis leo orci, congue quis mauris sit amet, mollis aliquam lorem. Nullam venenatis ut augue vitae mollis. Pellentesque ut tempus eros. Vestibulum ut ultricies ipsum. Maecenas bibendum turpis massa, in sodales felis cursus quis. Aliquam dapibus ex sed hendrerit pharetra. In mauris nunc, pharetra id lorem vel, condimentum feugiat ipsum. Donec fringilla leo quis purus ullamcorper, vitae laoreet neque pharetra. Morbi pulvinar consequat purus et sodales. Etiam elementum lacus congue semper tempor. Maecenas facilisis volutpat varius. Suspendisse auctor auctor nunc, at accumsan purus. Nunc eget dui nulla.\r\n\r\nAliquam erat volutpat. Aliquam vel lacus sed enim tempus maximus. Nullam nibh purus, semper volutpat tristique eget, aliquam id turpis. Vivamus dolor mauris, accumsan tincidunt enim sit amet, gravida fermentum massa. Nulla nec nunc arcu. Donec volutpat dui enim, vel hendrerit justo laoreet ut. Vestibulum eu semper orci. Aliquam iaculis vehicula vulputate. Integer odio nibh, interdum dignissim tempus ut, rutrum nec augue. Fusce facilisis hendrerit dolor eu suscipit. Integer leo dui, ornare vel sagittis eget, sagittis sed ipsum. Vestibulum sagittis efficitur nunc sit amet scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et cursus dolor. Nullam interdum arcu nisl, ac blandit eros vestibulum eu. Quisque sodales arcu fringilla bibendum efficitur.', '2021-11-16 10:52:26'),
(18, 3, 'Antépénultième', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec felis volutpat, ullamcorper sapien egestas, hendrerit augue. Donec sit amet augue mi. Nam turpis dolor, efficitur quis euismod at, maximus a tellus. Ut lacinia libero vehicula dui pellentesque pharetra. Ut suscipit ligula eu congue dignissim. Proin ut velit aliquet ligula sodales efficitur quis ac lorem. Sed tristique tellus at mattis lobortis. Pellentesque vehicula sodales ligula sit amet egestas. Ut consequat suscipit libero nec lacinia. Nam accumsan malesuada nunc, sit amet porta odio consequat non. Praesent eget justo sit amet risus semper congue vitae ac metus.\r\n\r\nCurabitur sem nulla, vulputate eu facilisis quis, interdum a erat. Ut posuere ante a orci viverra, ut eleifend ex sodales. Suspendisse dignissim mi turpis, id lobortis turpis ultrices non. Vestibulum id eleifend sapien. In justo odio, maximus eu convallis eu, gravida imperdiet orci. Mauris sollicitudin sit amet dui et accumsan. Donec ante lectus, pulvinar sed dolor placerat, sodales egestas sapien. Duis auctor orci id arcu luctus, eu molestie orci fringilla. Integer a justo accumsan, accumsan enim in, pharetra sapien. Integer neque elit, volutpat sit amet laoreet ut, congue sit amet justo. Sed commodo lectus sem. Aenean vitae enim eget eros ultrices rhoncus. Nam mi arcu, pharetra sed purus in, finibus semper felis.', '2022-01-21 11:38:09'),
(19, 3, 'Avant-dernier', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec felis volutpat, ullamcorper sapien egestas, hendrerit augue. Donec sit amet augue mi. Nam turpis dolor, efficitur quis euismod at, maximus a tellus. Ut lacinia libero vehicula dui pellentesque pharetra. Ut suscipit ligula eu congue dignissim. Proin ut velit aliquet ligula sodales efficitur quis ac lorem. Sed tristique tellus at mattis lobortis. Pellentesque vehicula sodales ligula sit amet egestas. Ut consequat suscipit libero nec lacinia. Nam accumsan malesuada nunc, sit amet porta odio consequat non. Praesent eget justo sit amet risus semper congue vitae ac metus.\r\n\r\nCurabitur sem nulla, vulputate eu facilisis quis, interdum a erat. Ut posuere ante a orci viverra, ut eleifend ex sodales. Suspendisse dignissim mi turpis, id lobortis turpis ultrices non. Vestibulum id eleifend sapien. In justo odio, maximus eu convallis eu, gravida imperdiet orci. Mauris sollicitudin sit amet dui et accumsan. Donec ante lectus, pulvinar sed dolor placerat, sodales egestas sapien. Duis auctor orci id arcu luctus, eu molestie orci fringilla. Integer a justo accumsan, accumsan enim in, pharetra sapien. Integer neque elit, volutpat sit amet laoreet ut, congue sit amet justo. Sed commodo lectus sem. Aenean vitae enim eget eros ultrices rhoncus. Nam mi arcu, pharetra sed purus in, finibus semper felis.', '2022-01-27 11:42:16'),
(20, 3, 'Dernier', 'vraimen arsum dolor sit amet, consectetur adipiscing elit. Nullam nec felis volutpat, ullamcorper sapien egestas, hendrerit augue. Donec sit amet augue mi. Nam turpis dolor, efficitur quis euismod at, maximus a tellus. Ut lacinia libero vehicula dui pellentesque pharetra. Ut suscipit ligula eu congue dignissim. Proin ut velit aliquet ligula sodales efficitur quis ac lorem. Sed tristique tellus at mattis lobortis. Pellentesque vehicula sodales ligula sit amet egestas. Ut consequat suscipit libero nec lacinia. Nam accumsan malesuada nunc, sit amet porta odio consequat non. Praesent eget justo sit amet risus semper congue vitae ac metus.\r\n\r\nCurabitur sem nulla, vulputate eu facilisis quis, interdum a erat. Ut posuere ante a orci viverra, ut eleifend ex sodales. Suspendisse dignissim mi turpis, id lobortis turpis ultrices non. Vestibulum id eleifend sapien. In justo odio, maximus eu convallis eu, gravida imperdiet orci. Mauris sollicitudin sit amet dui et accumsan. Donec ante lectus, pulvinar sed dolor placerat, sodales egestas sapien. Duis auctor orci id arcu luctus, eu molestie orci fringilla. Integer a justo accumsan, accumsan enim in, pharetra sapien. Integer neque elit, volutpat sit amet laoreet ut, congue sit amet justo. Sed commodo lectus sem. Aenean vitae enim eget eros ultrices rhoncus. Nam mi arcu, pharetra sed purus in, finibus semper felis.', '2022-01-27 11:46:49');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `comment`, `date`, `approved`) VALUES
(1, 6, 5, 'coucou top l\'article', '2021-12-16 11:44:16', 1),
(2, 6, 5, 'top', '2021-12-16 11:45:50', 0),
(3, 6, 5, 'top', '2021-12-16 11:57:45', 0),
(4, 6, 5, 'Incroyable', '2021-12-16 11:57:52', 0),
(5, 6, 5, 'Incroyable', '2021-12-16 11:58:44', 0),
(6, 6, 5, 'top top', '2021-12-16 11:58:49', 0),
(9, 6, 5, 'okok', '2021-12-16 12:01:15', 1),
(10, 6, 5, 'okok', '2021-12-16 12:02:25', 1),
(17, 6, 5, 'rederhtrhtry', '2022-01-27 11:24:06', 1),
(18, 18, 5, 'gffhryjyytj', '2022-01-27 11:41:34', 1),
(19, 20, 5, 'fgdgdhfdhghnf', '2022-01-27 11:47:07', 0),
(20, 20, 5, 'tghfhfhfjgf', '2022-01-27 11:47:53', 0),
(21, 20, 5, 'gfhfghfghf', '2022-01-27 11:47:58', 0),
(22, 20, 5, 'gfhfghfghf', '2022-01-27 11:51:37', 0),
(23, 19, 5, 'jhdfgjdgfjgyk', '2022-01-27 11:52:10', 0),
(24, 19, 5, 'jhdfgjdgfjgyk', '2022-01-27 11:54:02', 0),
(25, 19, 5, 'jhdfgjdgfjgyk', '2022-01-27 11:54:06', 0),
(26, 19, 5, 'jhdfgjdgfjgyk', '2022-01-27 11:57:59', 0),
(27, 20, 5, 'C\'est très bien écrit', '2022-02-03 08:21:00', 1),
(28, 20, 5, 'C\'est très bien écrit', '2022-02-03 08:21:52', 1),
(29, 1, 5, 'c\'est très fort\r\n', '2022-02-05 10:16:20', 1),
(32, 18, 14, 'C\'est formidable', '2022-02-05 14:05:45', 1),
(33, 19, 5, 'Vraiment top', '2022-02-07 09:57:53', 1),
(34, 19, 5, 'incroyable', '2022-02-07 10:01:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `type`, `password`) VALUES
(3, 'Dupont2', 'delamousquitiaire@live.fr', 'admin', '1423d012d445a8e77797824e4089ea0094b6aeea986b6637cd3b5fdb9fefce56'),
(4, 'sofia', 'sosoboxe@live.fr', 'user', '96909d45b1a681522283b70cdc82414c9015ebc92de23710c7badc3b735f90f4'),
(5, 'claire', 'claire@hotmail.fr', 'admin', '$argon2id$v=19$m=65536,t=4,p=1$ZnVqVlpYcHRud0I2amt2YQ$IWIhfC0dYETO0b9d1ExOhDZky0cr9aeAuM946rlyWnI'),
(6, 'ismael', 'ismael@live.com', 'user', '2cb4b1431b84ec15d35ed83bb927e27e8967d75f4bcd9cc4b25c8d879ae23e18'),
(11, 'cimer', 'cimer12345', 'user', '$argon2i$v=19$m=2048,t=4,p=3$RjVOQjE4aXR0QWpvWTROeQ$d/1ljrfFUlx3oleSLC0WVR3KZGqqucNbRhQjFuWh4dU'),
(12, 'shalom', 'shalom12345', 'user', '$argon2id$v=19$m=65536,t=4,p=1$QkJVV1I2SW16TUd5b1NISw$QEETLUvI6CMWuIztJe52FdCJiTX998JsqvAtS6mi0+o'),
(13, 'thomas', 'thomas@live.fr', 'user', '$argon2id$v=19$m=65536,t=4,p=1$SktYWnhGWkJNLjE5OHVTTw$M4+3B3wXQpKkQvDKw90PnCJrE+BZQszu34ffXiQaT6c'),
(14, 'herve', 'gdrhehte@hotmail.fr', 'user', '$argon2id$v=19$m=65536,t=4,p=1$SmpkVDNLM0xtc0l6eUtJcA$4VZsB6yFHy+7JUvPGIWMxkY9owI2T8MmPjnsFtB+5r0'),
(15, 'israel1', 'israel@live.fr', 'user', '$argon2id$v=19$m=65536,t=4,p=1$bTc5WVJDNTJWcm5GaTFVQQ$wIfUedp+Eio4QHJjRwMlGO6uOX1vNa5sRBSsqTnHqR0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
