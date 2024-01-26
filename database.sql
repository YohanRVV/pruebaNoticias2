/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `periodistas`;
CREATE TABLE `periodistas` (
  `id_periodista` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_periodista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `fecha_publicacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_periodista` int DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `id_periodista` (`id_periodista`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_periodista`) REFERENCES `periodistas` (`id_periodista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `periodistas_eliminados`;
CREATE TABLE `periodistas_eliminados` (
  `id_periodista` int NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_periodista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `periodistas` (`id_periodista`, `nombre`, `apellido`, `activo`) VALUES
(1, 'Yohan', 'Velásquez', 1);
INSERT INTO `periodistas` (`id_periodista`, `nombre`, `apellido`, `activo`) VALUES
(2, 'Juan', 'Ibarra', 1);
INSERT INTO `periodistas` (`id_periodista`, `nombre`, `apellido`, `activo`) VALUES
(3, 'Eduardo', 'Gaya', 1);



INSERT INTO `noticias` (`id_noticia`, `titulo`, `contenido`, `fecha_publicacion`, `id_periodista`, `imagen`) VALUES
(1, 'ETF de bitcoin son aprobados en Estados Unidos', 'Tras una larga espera, ya es oficial: los ETF spot (es decir, al contado) de bitcoin han sido aprobados por la Comisión de Bolsa y Valores (SEC).\r\n\r\nPocos minutos después, el documento quedó fuera de línea (quizás por colapso del sitio web debido a la cantidad de consultas) pero puede leerse en una descarga que hizo CriptoNoticias del documento. Sin embargo, en una declaración oficial de Gary Gensler, director de la SEC, se afirma que aunque la comisión ha aprobado el trading de los ETF, no promueven el uso de bitcoin.', '2024-01-18 15:48:25', 2, '65a97279398ac-etfbitcoin.jpeg');
INSERT INTO `noticias` (`id_noticia`, `titulo`, `contenido`, `fecha_publicacion`, `id_periodista`, `imagen`) VALUES
(2, 'Samsung anunciará nuevos teléfonos con IA', 'Samsung está a punto de anunciar la nueva serie S24 en su evento Unpacked programado para el 17 de enero. El pasado martes ya anunció que esto será \"una experiencia móvil completamente nueva impulsada por IA\".\r\n\r\nPuntos clave:\r\n\r\nEl evento promete una \"nueva era de la IA móvil\" para la serie Galaxy S, prometiendo establecer un estándar más alto para los smartphones.\r\n\r\nLos teléfonos podrán incluir \'Gauss\', el modelo de IA para dispositivos revelado por Samsung el pasado noviembre.\r\n\r\nLas funcionalidades pueden incluir chatbots de IA en el dispositivo (imagina un ChatGPT más pequeño y sin conexión), generación de imágenes a partir de indicaciones de texto y funcionalidades avanzadas de IA para respuestas a mensajes de texto.\r\n\r\nEl enfoque de Samsung en la integración de la IA marca un paso significativo en la industria de los smartphones, ya que aún no hemos presenciado realmente un lanzamiento de teléfono centrado únicamente en IA.\r\n\r\nPor qué es importante:\r\n\r\nSamsung busca liderar la forma en que la IA se vuelve útil y accesible en los dispositivos móviles. Si las nuevas funcionalidades IA de Samsung cumplen con las expectativas, quizás esta sea la innovación que estábamos esperando en la industria de los smartphones.', '2024-01-18 15:53:32', 3, '65a973acd1e91-samsungtel.jpg');
INSERT INTO `noticias` (`id_noticia`, `titulo`, `contenido`, `fecha_publicacion`, `id_periodista`, `imagen`) VALUES
(3, 'Nuevos productos impulsados por IA presentados en CES 2024', 'CES 2024, lo que podría ser el evento más importante de tecnología a nivel mundial, acaba de suceder del 9 al 12 de Enero en Las Vegas, presentando innumerables nuevos productos y funcionalidades de IA espectaculares.\r\n\r\nAquí están algunos de los productos presentados que nos han llamado más la atención:\r\n\r\nSamsung agregó IA a su aspiradora robot inteligente, con la capacidad de detectar manchas y diferenciar entre superficies.\r\n\r\nEl espejo inteligente de Baracuda usa IA y procesamiento de lenguaje natural para analizar expresiones, adaptándose al estado de ánimo del usuario aplicando terapia de luz, meditaciones guiadas y afirmaciones.\r\n\r\nHoloconnects mostró su Holobox impulsada por IA, mostrando una impresionante visión del potencial de la comunicación digital.\r\n\r\nRabbit presentó su dispositivo de bolsillo asistente de IA, R1 y agotó las primeras 10.000 unidades en 24 horas después su presentación.\r\n\r\nSamsung también mostró Ballie, un asistente de hogar robot que puede realizar tareas alrededor de la casa e incluye un proyector para mostrar videos, llamadas y más.\r\n\r\nInvoxia presentó un wearable para mascotas impulsado por IA llamado Minitailz, que monitorea signos vitales y alerta a los dueños sobre posibles problemas de salud.\r\n\r\nLG hizo una demostración de Rosie, un nuevo agente de IA robot doméstico para ayudar con las tareas y que se integra con los electrodomésticos inteligentes de LG.\r\n\r\nSin duda una de las tendencias de este 2024 va a ser aplicar Inteligencia Artificial a diferentes tipos de hardware para facilitarnos la vida en diferentes facetas. El año pasado ya salió alguna empresa con productos pioneros, pero lo que se ha visto este año en CES demuestra que hay muchas empresas con foco en este tipo de productos.', '2024-01-18 15:54:40', 3, '65a973f0127cf-ces2024.jpg');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;