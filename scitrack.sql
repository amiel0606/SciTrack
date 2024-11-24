-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 08:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_estuaries`
--

CREATE TABLE `quiz_questions_estuaries` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_estuaries`
--

INSERT INTO `quiz_questions_estuaries` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is an estuary?', '[\"A forest\", \"Where a river meets the sea\", \"A desert\", \"A mountain range\"]', '../quizImage/esQuizImage1.png', 'Where a river meets the sea', 'An estuary is a unique place where fresh water from rivers mixes with salty sea water, creating a brackish environment perfect for many organisms.'),
(2, 'What type of water is found in estuaries?', '[\"Freshwater\", \"Saltwater\", \"Brackish\", \"Pure\"]', '../quizImage/esQuizImage2.png', 'Brackish', 'Estuaries have brackish water, which is a mix of fresh and saltwater. It\'s like the \'Goldilocks\' water—just right for certain wildlife!'),
(3, 'Which of these animals often relies on estuaries for nesting and breeding?', '[\"Elephants\", \"Sharks\", \"Birds\", \"Monkeys\"]', '../quizImage/esQuizImage3.png', 'Birds', 'Birds love estuaries for nesting and breeding because they provide lots of food and safe places to raise their young. It\'s like nature\'s daycare!'),
(4, 'What causes the murky water in estuaries?', '[\"Trash\", \"Rain\", \"Sediment\", \"Fish parties\"]', '../quizImage/esQuizImage4.png', 'Sediment', 'Sediments like sand and clay make the water look murky, but don’t worry! It’s perfect for small critters who love hiding in the \'underwater fog.\''),
(5, 'Which of these is an example of sediment in an estuary?', '[\"Pebbles\", \"Diamonds\", \"Gold\", \"Ice\"]', '../quizImage/esQuizImage5.png', 'Pebbles', 'Pebbles, along with sand and clay, are common sediments found in estuaries. They’re like nature’s tiny building blocks!'),
(6, 'Which of the following is a biotic factor in an estuary?', '[\"Water\", \"Trees\", \"Light\", \"Rocks\"]', '../quizImage/esQuizImage6.png', 'Trees', 'Biotic factors include living organisms like trees, plants, animals, and bacteria that thrive in estuaries.'),
(7, 'Which of the following is an abiotic factor in an estuary?', '[\"Animals\", \"Soil\", \"Bacteria\", \"Plants\"]', '../quizImage/esQuizImage7.png', 'Soil', 'Abiotic factors include non-living things like soil, water, sunlight, and rocks that influence the environment of an estuary.'),
(8, 'Which of these examples are sediments found in estuaries?', '[\"Pebbles, Sand, and Clay\", \"Gold, Silver, and Ice\", \"Lava, Ash, and Mud\", \"Clouds, Smoke, and Fog\"]', '../quizImage/esQuizImage8.png', 'Pebbles, Sand, and Clay', 'Pebbles, sand, and clay are types of sediments commonly found in estuaries. They help shape the estuary floor and provide shelter for organisms.'),
(9, 'Which of the following is a biotic factor in estuaries?', '[\"Bacteria\", \"Light\", \"Water\", \"Rocks\"]', '../quizImage/esQuizImage9.png', 'Bacteria', 'Bacteria are biotic factors because they are living organisms and play an important role in the decomposition of organic matter in estuaries.'),
(10, 'Which of the following is an abiotic factor in estuaries?', '[\"Plants\", \"Animals\", \"Sunlight\", \"Fish\"]', '../quizImage/esQuizImage10.png', 'Sunlight', 'Sunlight is an abiotic factor that influences photosynthesis and the energy flow in estuarine ecosystems.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_gas`
--

CREATE TABLE `quiz_questions_gas` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_gas`
--

INSERT INTO `quiz_questions_gas` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What state of matter is characterized by particles that are far apart and move quickly?', '[\"Solid\", \"Liquid\", \"Gas\", \"Plasma\"]', '../quizImage/gasQuizImage1.png', 'Gas', 'Gases consist of particles that are much further apart than those in solids or liquids, allowing them to move freely and fill the available space.'),
(2, 'Which of the following statements is true about gases?', '[\"They have a definite shape and volume.\", \"They flow easily and take the shape of their container.\", \"They are tightly packed together.\", \"They cannot be compressed.\"]', '../quizImage/gasQuizImage2.png', 'They flow easily and take the shape of their container.', 'Gases have no fixed shape or volume; they will expand to fill the shape and volume of their container.'),
(3, 'What happens to gas particles when they are heated?', '[\"They move slower.\", \"They stay in one place.\", \"They lose energy.\", \"They move faster and expand.\"]', '../quizImage/gasQuizImage3.png', 'They move faster and expand.', 'Heating a gas increases the kinetic energy of its particles, causing them to move more rapidly and occupy more space.'),
(4, 'Which gas is commonly used in balloons?', '[\"Oxygen\", \"Carbon Dioxide\", \"Helium\", \"Nitrogen\"]', '../quizImage/gasQuizImage4.png', 'Helium', 'Helium is lighter than air and is used in balloons to make them float.'),
(5, 'What is the density characteristic of gases?', '[\"High density\", \"Variable density\", \"Low density\", \"No density\"]', '../quizImage/gasQuizImage5.png', 'Low density', 'Gases have low density compared to solids and liquids, making them less heavy unless compressed.'),
(6, 'Which of the following is an example of a gas?', '[\"Air\", \"Water\", \"Ice\", \"Sand\"]', '../quizImage/gasQuizImage6.png', 'Air', 'Air is a gas that we breathe in.'),
(7, 'Which of these is NOT a gas?', '[\"Helium\", \"Carbon Dioxide\", \"Water\", \"Nitrogen\"]', '../quizImage/gasQuizImage7.png', 'Water', 'Water is a liquid, while helium, carbon dioxide, and nitrogen are gases.'),
(8, 'Which gas is found in soda?', '[\"Carbon Dioxide\", \"Oxygen\", \"Water\", \"Ice\"]', '../quizImage/gasQuizImage8.png', 'Carbon Dioxide', 'Carbon dioxide is the gas that creates bubbles in fizzy drinks.'),
(9, 'What do we call the air that we breathe?', '[\"Gas\", \"Liquid\", \"Solid\", \"Plasma\"]', '../quizImage/gasQuizImage9.png', 'Gas', 'The air we breathe is a mixture of gases.'),
(10, 'Which of these is a property of gases?', '[\"They have a definite shape.\", \"They fill the space of their container.\", \"They are solid.\", \"They are always cold.\"]', '../quizImage/gasQuizImage10.png', 'They fill the space of their container.', 'Gases do not have a fixed shape and will expand to fill any container.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_intertidal`
--

CREATE TABLE `quiz_questions_intertidal` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_intertidal`
--

INSERT INTO `quiz_questions_intertidal` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is the Splash Zone in the intertidal zone also known as?', '[\"Spray Zone\", \"Low Tide Zone\", \"Middle Tide Zone\", \"High Tide Zone\"]', '../quizImage/interQuizImage1.png', 'Spray Zone', 'The Splash Zone, also known as the spray zone or upper littoral zone, is the region that is submerged only during extremely high tides or storms.'),
(2, 'Which organism is commonly found in the High Tide Zone?', '[\"Sea Urchins\", \"Hermit Crabs\", \"Sea Stars\", \"Periwinkle Snails\"]', '../quizImage/interQuizImage2.png', 'Hermit Crabs', 'Hermit crabs are commonly found in the High Tide Zone, which is submerged only during high tide.'),
(3, 'What organisms are typically found in the Low Tide Zone?', '[\"Barnacles\", \"Lichens\", \"Sea Stars\", \"Periwinkle Snails\"]', '../quizImage/interQuizImage3.png', 'Sea Stars', 'Sea stars are commonly found in the Low Tide Zone, which is submerged most of the time and exposed only during extremely low tides.'),
(4, 'Which of the following organisms live in the Middle Tide Zone?', '[\"Fish\", \"Barnacles\", \"Periwinkle Snails\", \"Lichens\"]', '../quizImage/interQuizImage4.png', 'Fish', 'Fish are often found in the Middle Tide Zone, which is generally submerged and exposed only during low tide.'),
(5, 'Which zone in the intertidal area is always submerged except during extremely low tides?', '[\"Splash Zone\", \"High Tide Zone\", \"Low Tide Zone\", \"Middle Tide Zone\"]', '../quizImage/interQuizImage5.png', 'Low Tide Zone', 'The Low Tide Zone is always submerged except during extremely low tides, and it is home to organisms like sea stars and sea sponges.'),
(6, 'What is the High Tide in the intertidal zone also known as?', '[\"Lower mid-littoral zone\", \"Upper mid-littoral zone\", \"Lower littoral zone\", \"Littoral zone\"]', '../quizImage/interQuizImage3.png', 'Upper mid-littoral zone', 'The high tide zone, also known as the upper mid-littoral zone, is submerged in the water during high tide.'),
(7, 'What is the Low Tide in the intertidal zone also known as?', '[\"Lower mid-littoral zone\", \"Upper mid-littoral zone\", \"Lower littoral zone\", \"Littoral zone\"]', '../quizImage/interQuizImage4.png', 'Lower littoral zone', 'The low tide zone, also known as the lower littoral zone, is always submerged in water.'),
(8, 'What is the Middle Tide in the intertidal zone also known as?', '[\"Lower mid-littoral zone\", \"Upper mid-littoral zone\", \"Lower littoral zone\", \"Littoral zone\"]', '../quizImage/interQuizImage2.png', 'Lower mid-littoral zone', 'The Middle Tide Zone is also known as the lower mid-littoral zone, a region that is generally submerged in water.'),
(9, 'Which of the following organisms live in the Low Tide Zone?', '[\"Fish\", \"Barnacles\", \"Periwinkle Snails\", \"Sea Sponge\"]', '../quizImage/interQuizImage1.png', 'Sea Sponge', 'Sea sponges are often found in the Low Tide Zone.'),
(10, 'Which of the following organisms live in the Low Tide Zone?', '[\"Nudibranch\", \"Barnacles\", \"Periwinkle Snails\", \"Lichens\"]', '../quizImage/interQuizImage5.png', 'Nudibranch', 'Nudibranchs are often found in the Low Tide Zone.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_liquid`
--

CREATE TABLE `quiz_questions_liquid` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_liquid`
--

INSERT INTO `quiz_questions_liquid` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'Which state of matter has a fixed volume but no fixed shape?', '[\"Liquid\", \"Solid\", \"Gas\", \"Plasma\"]', '../quizImage/liquidQuizImage1.png', 'Liquid', 'Liquids have a fixed volume but can change shape to fit their container.'),
(2, 'What is a characteristic of liquids?', '[\"They have a definite shape.\", \"They have a fixed volume but no fixed shape.\", \"They cannot be compressed.\", \"They are less dense than gases.\"]', '../quizImage/liquidQuizImage2.png', 'They have a fixed volume but no fixed shape.', 'Liquids maintain a fixed volume, but they take the shape of their container.'),
(3, 'Which of the following is a liquid?', '[\"Ice\", \"Water\", \"Rock\", \"Air\"]', '../quizImage/liquidQuizImage3.png', 'Water', 'Water is a common example of a liquid.'),
(4, 'What happens to the particles in a liquid when it is heated?', '[\"They move rapidly.\", \"They become solid.\", \"They stop moving.\", \"They are tightly packed.\"]', '../quizImage/liquidQuizImage4.png', 'They move rapidly.', 'Heating a liquid increases the energy of its particles, causing them to move more rapidly.'),
(5, 'Which of the following is NOT a liquid?', '[\"Milk\", \"Honey\", \"Salt\", \"Juice\"]', '../quizImage/liquidQuizImage5.png', 'Salt', 'Salt is a solid, while the others are liquids.'),
(6, 'What can liquids do that solids cannot?', '[\"Change shape\", \"Stay in one place\", \"Take up space\", \"Have a fixed shape\"]', '../quizImage/liquidQuizImage6.png', 'Change shape', 'Liquids can change shape to fit their container.'),
(7, 'Which of these liquids can be poured?', '[\"Sand\", \"Oil\", \"Rock\", \"Metal\"]', '../quizImage/liquidQuizImage7.png', 'Oil', 'Oil is a liquid and can be poured easily.'),
(8, 'Which of these is NOT a liquid?', '[\"Water\", \"Milk\", \"Ice\", \"Juice\"]', '../quizImage/liquidQuizImage8.png', 'Ice', 'Ice is the solid form of water, while water, milk, and juice are liquids.'),
(9, 'Which of these is an example of a liquid?', '[\"Sand\", \"Lotion\", \"Ice\", \"Air\"]', '../quizImage/liquidQuizImage9.png', 'Lotion', 'Lotion is a liquid and can take the shape of its container.'),
(10, 'Which of these liquids do we drink every day?', '[\"Syrup\", \"Water\", \"Mud\", \"Oil\"]', '../quizImage/liquidQuizImage10.png', 'Water', 'Water is a very important liquid, and we drink it every day.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_measure`
--

CREATE TABLE `quiz_questions_measure` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_measure`
--

INSERT INTO `quiz_questions_measure` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is the standard unit for measuring distance in the metric system?', '[\"Kilometer\", \"Mile\", \"Yard\", \"Inch\"]', '../quizImage/motionImage1.png', 'Kilometer', 'In the metric system, the standard unit for measuring distance is the kilometer, though meters are also commonly used.'),
(2, 'Which of these tools is used to measure the length of an object?', '[\"Tape Measure\", \"Thermometer\", \"Barometer\", \"Hygrometer\"]', '../quizImage/motionImage2.png', 'Tape Measure', 'A tape measure is a retractable measuring tool commonly used to measure the length of objects or the distance between them.'),
(3, 'What unit is typically used to measure time?', '[\"Seconds\", \"Miles\", \"Kilograms\", \"Celsius\"]', '../quizImage/motionImage3.png', 'Seconds', 'The standard unit for measuring time is the second, although minutes and hours are also commonly used.'),
(4, 'Which of these tools is used to measure angles?', '[\"Protractor\", \"Thermometer\", \"Compass\", \"Clock\"]', '../quizImage/motionImage4.png', 'Protractor', 'A protractor is a tool used to measure the angles between two intersecting lines.'),
(5, 'What tool can measure the distance traveled by a vehicle?', '[\"Odometer\", \"Ruler\", \"Compass\", \"Stopwatch\"]', '../quizImage/motionImage11.png', 'Odometer', 'An odometer is a device built into vehicles to measure the distance traveled.'),
(6, 'Which of these is used to measure the speed of a vehicle?', '[\"Speedometer\", \"Thermometer\", \"Compass\", \"Stopwatch\"]', '../quizImage/motionImage5.png', 'Speedometer', 'A speedometer measures the speed at which a vehicle is traveling.'),
(7, 'Which measuring tool would you use to measure the height of a building?', '[\"Tape Measure\", \"Thermometer\", \"Ruler\", \"Protractor\"]', '../quizImage/motionImage6.png', 'Tape Measure', 'A tape measure is suitable for measuring long distances, such as the height of a building.'),
(8, 'What device can be used to measure the time it takes to run a race?', '[\"Stopwatch\", \"Protractor\", \"Odometer\", \"Speedometer\"]', '../quizImage/motionImage7.png', 'Stopwatch', 'A stopwatch is a timekeeping device designed to measure short periods of time, like the duration of a race.'),
(9, 'What is the unit for speed, which is calculated by dividing distance by time?', '[\"Meters per second\", \"Kilogram per hour\", \"Celsius\", \"Foot per minute\"]', '../quizImage/motionImage8.png', 'Meters per second', 'The standard unit for speed is meters per second (m/s), calculated by dividing distance by time.'),
(10, 'Which of these tools is typically used to measure short distances on the road or land?', '[\"Surveyors Wheel\", \"Speedometer\", \"Tape Measure\", \"Odometer\"]', '../quizImage/motionImage9.png', 'Surveyors Wheel', 'An instrument that is used to measure short distances on the road or on land.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_motion`
--

CREATE TABLE `quiz_questions_motion` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_motion`
--

INSERT INTO `quiz_questions_motion` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is motion?', '[\"Length covered between two points\", \"A body changes position\", \"Measures duration of events\", \"How fast an object\"]', '../quizImage/motionImage1.png', 'A body changes position', 'Motion occurs when a body or object changes position or place.'),
(2, 'What is distance?', '[\"Measures duration of events\", \"A body changes position\", \"Length covered between two points\", \"How fast an object\"]', '../quizImage/motionImage2.png', 'Length covered between two points', 'Distance is identified as the length covered between two points or position.'),
(3, 'What is speed?', '[\"Length covered between two points\", \"How fast an object\", \"Measures duration of events\", \"A body changes position\"]', '../quizImage/motionImage3.png', 'How fast an object', 'Speed is the measurement of how fast an object moves.'),
(4, 'What is time?', '[\"Length covered between two points\", \"How fast an object\", \"Measures duration of events\", \"A body changes position\"]', '../quizImage/motionImage4.png', 'Measures duration of events', 'Time measures the duration of an event.'),
(5, 'Which is a unit for time?', '[\"Liters\", \"Meters\", \"Duration\", \"Seconds\"]', '../quizImage/motionImage5.png', 'Seconds', 'Seconds is one of the units for time along with minutes and hours.'),
(6, 'Which of these is an example of a measurement of motion?', '[\"Pebbles\", \"Speed\", \"Gold\", \"Ice\"]', '../quizImage/motionImage6.png', 'Speed', 'Speed measures how fast an object moves, a key aspect of motion.'),
(7, 'Which of these terms describes how far an object travels?', '[\"Distance\", \"Time\", \"Speed\", \"Position\"]', '../quizImage/motionImage7.png', 'Distance', 'Distance refers to the length covered by an object as it moves.'),
(8, 'Which of these is the measure of rate of position change?', '[\"Speed\", \"Distance\", \"Velocity\", \"Rest\"]', '../quizImage/motionImage8.png', 'Velocity', 'Velocity is the measure of rate at which an object changes its position.'),
(9, 'Which of these units is commonly used to measure distance?', '[\"Meters\", \"Minutes\", \"Liters\", \"Grams\"]', '../quizImage/motionImage9.png', 'Meters', 'Meters are the standard unit for measuring distance in the metric system.'),
(10, 'Which factor affects an object\'s motion?', '[\"Temperature\", \"Force\", \"Color\", \"Weight\"]', '../quizImage/motionImage10.png', 'Force', 'Force is a key factor that affects an object\'s motion, as it can cause it to start moving, stop, or change direction.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_solid`
--

CREATE TABLE `quiz_questions_solid` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_solid`
--

INSERT INTO `quiz_questions_solid` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is a characteristic of a solid?', '[\"Has a definite shape and volume\", \"Takes the shape of its container\", \"Has no definite volume\", \"Flows easily\"]', '../quizImage/solidQuizImage1.png', 'Has a definite shape and volume', 'Solids have a fixed shape and volume because their particles are tightly packed together.'),
(2, 'Which of the following is an example of a solid?', '[\"Water\", \"Air\", \"Ice\", \"Steam\"]', '../quizImage/solidQuizImage2.png', 'Ice', 'Ice is the solid form of water, with a fixed shape and volume.'),
(3, 'What happens to the particles in most solids when they are heated?', '[\"They move faster\", \"They move slower\", \"They stop moving\", \"They stay the same\"]', '../quizImage/solidQuizImage3.png', 'They move faster', 'When solids are heated, the particles gain energy and move faster, which can cause the solid to melt if enough heat is applied.'),
(4, 'Which of these objects is NOT a solid?', '[\"Rock\", \"Book\", \"Water\", \"Chair\"]', '../quizImage/solidQuizImage4.png', 'Water', 'Water is a liquid, not a solid. Solids like rocks and books have a definite shape.'),
(5, 'Why do solids have a fixed shape?', '[\"Because their particles are tightly packed\", \"Because their particles move freely\", \"Because they have no volume\", \"Because they are soft\"]', '../quizImage/solidQuizImage5.png', 'Because their particles are tightly packed', 'The particles in solids are closely packed and do not move freely, which gives solids a fixed shape.'),
(6, 'Which of the following is a solid material used in building houses?', '[\"Wood\", \"Water\", \"Air\", \"Milk\"]', '../quizImage/solidQuizImage1.png', 'Wood', 'Wood is a solid material used in construction because it is strong and durable.'),
(7, 'What happens to a solid when you break it into smaller pieces?', '[\"It becomes a liquid\", \"It stays a solid\", \"It becomes a gas\", \"It disappears\"]', '../quizImage/solidQuizImage7.png', 'It stays a solid', 'When you break a solid into smaller pieces, it still remains a solid. The pieces just get smaller!'),
(8, 'What is another example of a solid?', '[\"Apple\", \"Juice\", \"Smoke\", \"Air\"]', '../quizImage/solidQuizImage8.png', 'Apple', 'Apple is a solid, which has a definite shape and volume.'),
(9, 'What is the state of matter of a pencil?', '[\"Solid\", \"Liquid\", \"Gas\", \"Plasma\"]', '../quizImage/solidQuizImage9.png', 'Solid', 'A pencil is a solid because it has a fixed shape and volume.'),
(10, 'Which of these properties do all solids share?', '[\"They flow easily\", \"They have a fixed shape\", \"They can be poured\", \"They expand to fill a container\"]', '../quizImage/solidQuizImage10.png', 'They have a fixed shape', 'Solids maintain their shape, unlike liquids and gases which take the shape of their container.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_surfaceerosion`
--

CREATE TABLE `quiz_questions_surfaceerosion` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_surfaceerosion`
--

INSERT INTO `quiz_questions_surfaceerosion` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is surface erosion?', '[\"The movement of soil from one place to another\", \"The breakdown of rocks into smaller particles\", \"The process of rock formation\", \"The growth of new plants\"]', '../quizImage/surfaceImage1.png', 'The movement of soil from one place to another', 'Surface erosion is the process where soil and rock particles are transported by natural forces like wind, water, and ice.'),
(2, 'Which of these is a major cause of surface erosion?', '[\"Overgrazing\", \"Deforestation\", \"Construction\", \"All of the above\"]', '../quizImage/surfaceImage2.png', 'All of the above', 'Human activities like overgrazing, deforestation, and construction disturb the land, making it more susceptible to surface erosion.'),
(3, 'What is one major effect of surface erosion on the environment?', '[\"Increased soil fertility\", \"Loss of topsoil\", \"Increased plant growth\", \"Better water retention\"]', '../quizImage/surfaceImage3.png', 'Loss of topsoil', 'Surface erosion removes the fertile topsoil, which is essential for plant growth, leading to reduced agricultural productivity.'),
(4, 'How does surface erosion affect water quality?', '[\"Increases water clarity\", \"Decreases water pollution\", \"Increases sediment in water\", \"Decreases water flow\"]', '../quizImage/surfaceImage4.png', 'Increases sediment in water', 'Surface erosion carries sediment into water sources, which can degrade water quality and harm aquatic ecosystems.'),
(5, 'Which of these is a visible sign of surface erosion?', '[\"Green, lush vegetation\", \"Clear rivers\", \"Dust storms and dry land\", \"Rapid plant growth\"]', '../quizImage/surfaceImage5.png', 'Dust storms and dry land', 'Dust storms and exposed, dry land are common signs of surface erosion, signaling the loss of topsoil and vegetation.'),
(6, 'How does surface erosion affect farming?', '[\"It improves crop growth\", \"It reduces soil fertility and yields\", \"It increases irrigation efficiency\", \"It creates better farming conditions\"]', '../quizImage/surfaceImage6.png', 'It reduces soil fertility and yields', 'Surface erosion leads to the loss of fertile topsoil, which decreases crop yields and makes farming more challenging.'),
(7, 'What role do plant roots play in preventing surface erosion?', '[\"They absorb nutrients from the soil\", \"They help hold the soil together\", \"They create more fertile soil\", \"They increase water evaporation\"]', '../quizImage/surfaceImage7.png', 'They help hold the soil together', 'Plant roots stabilize the soil and prevent surface erosion by anchoring it in place and reducing the impact of wind and water.'),
(8, 'Which of these natural events can be worsened by surface erosion?', '[\"Floods\", \"Earthquakes\", \"Tsunamis\", \"Volcanic eruptions\"]', '../quizImage/surfaceImage8.png', 'Floods', 'Surface erosion can increase water runoff and reduce soil absorption, leading to a higher risk of floods.'),
(9, 'What is desertification?', '[\"The process of fertile land becoming desert-like\", \"The spread of water across dry areas\", \"The increase in biodiversity\", \"The growth of new plant species\"]', '../quizImage/surfaceImage9.png', 'The process of fertile land becoming desert-like', 'Desertification is the result of surface erosion, where fertile land becomes dry and unproductive, turning into desert-like conditions.'),
(10, 'Which of these methods can help prevent surface erosion?', '[\"Clearing forests\", \"Planting vegetation\", \"Building more roads\", \"Burning fields\"]', '../quizImage/surfaceImage10.png', 'Planting vegetation', 'Planting vegetation helps prevent surface erosion by stabilizing the soil with plant roots, reducing wind and water impact.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions_surfaceweathering`
--

CREATE TABLE `quiz_questions_surfaceweathering` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`choices`)),
  `quiz_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions_surfaceweathering`
--

INSERT INTO `quiz_questions_surfaceweathering` (`id`, `question`, `choices`, `quiz_image`, `correct_answer`, `additional_info`) VALUES
(1, 'What is weathering?', '[\"The process of plants growing\", \"The breakdown of rocks into smaller pieces\", \"The movement of soil by wind\", \"The process of water evaporation\"]', '../quizImage/surfaceImage1.png', 'The breakdown of rocks into smaller pieces', 'Weathering is the natural process that breaks down rocks into smaller fragments, which can eventually form soil.'),
(2, 'What is the main difference between physical and chemical weathering?', '[\"Physical weathering breaks rocks down, while chemical weathering builds them up\", \"Physical weathering involves water, chemical weathering involves temperature\", \"Physical weathering breaks rocks into smaller pieces, while chemical weathering changes their composition\", \"Physical weathering happens in warm climates, chemical weathering in cold\"]', '../quizImage/surfaceImage2.png', 'Physical weathering breaks rocks into smaller pieces, while chemical weathering changes their composition', 'In physical weathering, rocks are broken into smaller pieces, while chemical weathering alters the rock\'s chemical structure.'),
(3, 'Which of these is an example of physical weathering?', '[\"Rust forming on metal\", \"Lichens breaking down rock surfaces\", \"Ice causing cracks in rocks\", \"Rocks changing color due to rainwater\"]', '../quizImage/surfaceImage3.png', 'Ice causing cracks in rocks', 'Ice wedging is a type of physical weathering where water freezes in rock cracks, causing them to expand and break apart.'),
(4, 'Which process is responsible for the formation of soil?', '[\"Erosion\", \"Weathering\", \"Volcanic eruptions\", \"Earthquakes\"]', '../quizImage/surfaceImage4.png', 'Weathering', 'Soil forms when rocks are weathered and broken down into small particles, which mix with organic matter.'),
(5, 'Which type of soil forms most quickly in warm and wet climates?', '[\"Desert soil\", \"Tropical soil\", \"Arctic soil\", \"Mountain soil\"]', '../quizImage/surfaceImage5.png', 'Tropical soil', 'Tropical soils form quickly because the warm, wet climate accelerates weathering and decomposition of organic matter.'),
(6, 'What is the main ingredient in soil formation?', '[\"Water\", \"Rocks\", \"Air\", \"Living organisms\"]', '../quizImage/surfaceImage6.png', 'Rocks', 'Rocks are broken down by weathering to form the mineral component of soil. Organic matter and living organisms also play key roles.'),
(7, 'Which of these is an example of chemical weathering?', '[\"The breaking of rocks by plant roots\", \"The dissolution of limestone by acid rain\", \"The grinding of rocks by ice\", \"The expansion of rocks by freezing water\"]', '../quizImage/surfaceImage7.png', 'The dissolution of limestone by acid rain', 'Acid rain causes chemical weathering by reacting with minerals in rocks like limestone, dissolving them over time.'),
(8, 'What is erosion?', '[\"The breakdown of rocks into smaller pieces\", \"The removal and transport of soil and rock particles\", \"The process of plants growing on soil\", \"The formation of new rocks from minerals\"]', '../quizImage/surfaceImage8.png', 'The removal and transport of soil and rock particles', 'Erosion occurs when wind, water, or ice moves weathered rock and soil particles from one place to another.'),
(9, 'Which of the following is NOT a factor affecting weathering?', '[\"Climate\", \"Time\", \"Color\", \"Type of rock\"]', '../quizImage/surfaceImage9.png', 'Color', 'Color does not affect the weathering process, but factors like climate, time, and the type of rock play a big role.'),
(10, 'What is the role of organisms in soil formation?', '[\"They cause rocks to dissolve\", \"They create new types of minerals\", \"They break down organic matter and contribute to soil\", \"They prevent weathering\"]', '../quizImage/surfaceImage10.png', 'They break down organic matter and contribute to soil', 'Organisms such as plants, animals, and microorganisms help break down organic material, contributing to the formation of soil.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id_role` int(255) NOT NULL,
  `id_permission` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id_role`, `id_permission`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 6),
(1, 7),
(1, 8),
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lessons`
--

CREATE TABLE `tbl_lessons` (
  `id` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `matter` varchar(255) NOT NULL DEFAULT 'Inactive',
  `ecosystem` varchar(255) NOT NULL DEFAULT 'Inactive',
  `motion` varchar(255) NOT NULL DEFAULT 'Inactive',
  `earth` varchar(255) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lessons`
--

INSERT INTO `tbl_lessons` (`id`, `section`, `matter`, `ecosystem`, `motion`, `earth`) VALUES
(1, 'Papaya', '2024-11-10', '2024-11-11', '2024-11-11', '2024-11-11'),
(2, 'Mango', 'Inactive', 'Inactive', 'Inactive', 'Inactive'),
(3, 'Sampaloc', 'Inactive', 'Inactive', 'Inactive', 'Inactive'),
(4, 'Sampaguita', 'Inactive', 'Inactive', 'Inactive', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `name`) VALUES
(1, 'addStudent'),
(2, 'removeTeacher'),
(3, 'addTeacher'),
(4, 'addAdmin'),
(5, 'viewLesson'),
(6, 'removeStudents'),
(7, 'viewStudents'),
(8, 'editRoles'),
(9, 'removeAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_scores`
--

CREATE TABLE `tbl_quiz_scores` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `date_taken` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_scores`
--

INSERT INTO `tbl_quiz_scores` (`id`, `student_id`, `quiz_id`, `lesson`, `score`, `date_taken`) VALUES
(1, 39, 1, 'Matter', 6, '2024-11-10 18:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `name`, `section`, `username`, `status`) VALUES
(39, 'Amiel Carhyl Lapid', 'Papaya', 'amiel06', 'Active'),
(44, 'Nicole Heart Mendoza', 'Papaya', 'heart', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`id`, `name`, `section`, `username`, `status`) VALUES
(43, 'Amiel Carhyl Lapid', 'Papaya', 'amiel', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_tracking`
--

CREATE TABLE `tbl_time_tracking` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lesson` varchar(100) DEFAULT NULL,
  `section_index` int(11) DEFAULT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `time_spent` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_time_tracking`
--

INSERT INTO `tbl_time_tracking` (`id`, `student_id`, `lesson`, `section_index`, `section_name`, `time_spent`, `timestamp`) VALUES
(209, 44, 'Matter', 0, 'Solid', 1, '2024-11-10 18:50:04'),
(210, 44, 'Matter', 1, 'Solid', 0, '2024-11-10 18:50:05'),
(211, 44, 'Matter', 2, 'Solid', 0, '2024-11-10 18:50:05'),
(212, 44, 'Matter', 3, 'Solid', 0, '2024-11-10 18:50:05'),
(213, 44, 'Matter', 4, 'Solid', 0, '2024-11-10 18:50:06'),
(214, 44, 'Matter', 5, 'Solid', 0, '2024-11-10 18:50:06'),
(215, 44, 'Matter', 7, 'Solid', 0, '2024-11-10 18:50:07'),
(216, 44, 'Matter', 6, 'Solid', 0, '2024-11-10 18:50:07'),
(217, 44, 'Matter', 8, 'Solid', 0, '2024-11-10 18:50:08'),
(218, 44, 'Matter', 0, 'Liquid', 1, '2024-11-10 18:50:21'),
(219, 44, 'Matter', 1, 'Liquid', 0, '2024-11-10 18:50:21'),
(220, 44, 'Matter', 2, 'Liquid', 0, '2024-11-10 18:50:22'),
(221, 44, 'Matter', 3, 'Liquid', 0, '2024-11-10 18:50:22'),
(222, 44, 'Matter', 4, 'Liquid', 0, '2024-11-10 18:50:22'),
(223, 44, 'Matter', 5, 'Liquid', 0, '2024-11-10 18:50:23'),
(224, 44, 'Matter', 7, 'Liquid', 0, '2024-11-10 18:50:23'),
(225, 44, 'Matter', 6, 'Liquid', 0, '2024-11-10 18:50:23'),
(226, 44, 'Matter', 8, 'Liquid', 0, '2024-11-10 18:50:24'),
(227, 44, 'Matter', 0, 'Gas', 2, '2024-11-10 18:50:35'),
(228, 44, 'Matter', 1, 'Gas', 2, '2024-11-10 18:50:38'),
(229, 44, 'Matter', 2, 'Gas', 0, '2024-11-10 18:50:38'),
(230, 44, 'Matter', 3, 'Gas', 0, '2024-11-10 18:50:38'),
(231, 44, 'Matter', 4, 'Gas', 0, '2024-11-10 18:50:38'),
(232, 44, 'Matter', 5, 'Gas', 0, '2024-11-10 18:50:38'),
(233, 44, 'Matter', 7, 'Gas', 0, '2024-11-10 18:50:38'),
(234, 44, 'Matter', 6, 'Gas', 0, '2024-11-10 18:50:39'),
(235, 44, 'Matter', 8, 'Gas', 0, '2024-11-10 18:50:39'),
(236, 44, 'Ecosystem', 0, 'Estuaries', 0, '2024-11-10 18:50:46'),
(237, 44, 'Ecosystem', 1, 'Estuaries', 3, '2024-11-10 18:50:50'),
(238, 44, 'Ecosystem', 2, 'Estuaries', 3, '2024-11-10 18:50:53'),
(239, 44, 'Ecosystem', 3, 'Estuaries', 0, '2024-11-10 18:50:53'),
(240, 44, 'Ecosystem', 4, 'Estuaries', 0, '2024-11-10 18:50:54'),
(241, 44, 'Ecosystem', 5, 'Estuaries', 0, '2024-11-10 18:50:54'),
(242, 44, 'Ecosystem', 6, 'Estuaries', 0, '2024-11-10 18:50:54'),
(243, 44, 'Ecosystem', 7, 'Estuaries', 0, '2024-11-10 18:50:54'),
(244, 44, 'Ecosystem', 8, 'Estuaries', 0, '2024-11-10 18:50:54'),
(245, 44, 'Ecosystem', 9, 'Estuaries', 0, '2024-11-10 18:50:55'),
(246, 44, 'Ecosystem', 10, 'Estuaries', 0, '2024-11-10 18:50:55'),
(247, 44, 'Ecosystem', 11, 'Estuaries', 0, '2024-11-10 18:50:55'),
(248, 44, 'Ecosystem', 13, 'Estuaries', 2, '2024-11-10 18:50:57'),
(249, 44, 'Ecosystem', 0, 'Intertidal', 2, '2024-11-10 18:51:02'),
(250, 44, 'Ecosystem', 1, 'Intertidal', 4, '2024-11-10 18:51:06'),
(251, 44, 'Ecosystem', 2, 'Intertidal', 0, '2024-11-10 18:51:07'),
(252, 44, 'Ecosystem', 3, 'Intertidal', 0, '2024-11-10 18:51:07'),
(253, 44, 'Ecosystem', 4, 'Intertidal', 0, '2024-11-10 18:51:07'),
(254, 44, 'Ecosystem', 5, 'Intertidal', 0, '2024-11-10 18:51:07'),
(255, 44, 'Ecosystem', 6, 'Intertidal', 0, '2024-11-10 18:51:07'),
(256, 44, 'Ecosystem', 7, 'Intertidal', 0, '2024-11-10 18:51:08'),
(257, 44, 'Ecosystem', 8, 'Intertidal', 0, '2024-11-10 18:51:08'),
(258, 44, 'Ecosystem', 9, 'Intertidal', 0, '2024-11-10 18:51:08'),
(259, 44, 'Ecosystem', 10, 'Intertidal', 0, '2024-11-10 18:51:08'),
(260, 44, 'Ecosystem', 11, 'Intertidal', 0, '2024-11-10 18:51:08'),
(261, 44, 'Ecosystem', 12, 'Intertidal', 0, '2024-11-10 18:51:09'),
(262, 44, 'Ecosystem', 13, 'Intertidal', 0, '2024-11-10 18:51:09'),
(263, 44, 'Ecosystem', 14, 'Intertidal', 0, '2024-11-10 18:51:09'),
(264, 44, 'Ecosystem', 16, 'Intertidal', 1, '2024-11-10 18:51:10'),
(265, 44, 'Motion', 0, 'WhatisMotion', 1, '2024-11-10 18:51:18'),
(266, 44, 'Motion', 1, 'WhatisMotion', 2, '2024-11-10 18:51:20'),
(267, 44, 'Motion', 2, 'WhatisMotion', 0, '2024-11-10 18:51:21'),
(268, 44, 'Motion', 3, 'WhatisMotion', 0, '2024-11-10 18:51:21'),
(269, 44, 'Motion', 4, 'WhatisMotion', 0, '2024-11-10 18:51:22'),
(270, 44, 'Motion', 5, 'WhatisMotion', 0, '2024-11-10 18:51:22'),
(271, 44, 'Motion', 6, 'WhatisMotion', 0, '2024-11-10 18:51:22'),
(272, 44, 'Motion', 7, 'WhatisMotion', 0, '2024-11-10 18:51:22'),
(273, 44, 'Motion', 8, 'WhatisMotion', 0, '2024-11-10 18:51:22'),
(274, 44, 'Motion', 9, 'WhatisMotion', 0, '2024-11-10 18:51:23'),
(275, 44, 'Motion', 10, 'WhatisMotion', 0, '2024-11-10 18:51:23'),
(276, 44, 'Motion', 11, 'WhatisMotion', 0, '2024-11-10 18:51:24'),
(277, 44, 'Motion', 12, 'WhatisMotion', 0, '2024-11-10 18:51:24'),
(278, 44, 'Motion', 13, 'WhatisMotion', 0, '2024-11-10 18:51:24'),
(279, 44, 'Motion', 15, 'WhatisMotion', 2, '2024-11-10 18:51:26'),
(280, 44, 'Motion', 0, 'Measuring', 1, '2024-11-10 18:51:30'),
(281, 44, 'Motion', 1, 'Measuring', 1, '2024-11-10 18:51:32'),
(282, 44, 'Motion', 2, 'Measuring', 0, '2024-11-10 18:51:32'),
(283, 44, 'Motion', 3, 'Measuring', 0, '2024-11-10 18:51:32'),
(284, 44, 'Motion', 4, 'Measuring', 0, '2024-11-10 18:51:33'),
(285, 44, 'Motion', 5, 'Measuring', 0, '2024-11-10 18:51:33'),
(286, 44, 'Motion', 6, 'Measuring', 0, '2024-11-10 18:51:33'),
(287, 44, 'Motion', 7, 'Measuring', 0, '2024-11-10 18:51:34'),
(288, 44, 'Motion', 8, 'Measuring', 0, '2024-11-10 18:51:34'),
(289, 44, 'Motion', 9, 'Measuring', 0, '2024-11-10 18:51:35'),
(290, 44, 'Motion', 10, 'Measuring', 0, '2024-11-10 18:51:35'),
(291, 44, 'Motion', 12, 'Measuring', 2, '2024-11-10 18:51:37'),
(292, 44, 'Earths Surface', 0, 'Weathering', 1, '2024-11-10 18:51:44'),
(293, 44, 'Earths Surface', 1, 'Weathering', 70, '2024-11-10 18:54:32'),
(294, 44, 'Earths Surface', 2, 'Weathering', 1, '2024-11-10 18:54:33'),
(295, 44, 'Earths Surface', 3, 'Weathering', 0, '2024-11-10 18:54:33'),
(296, 44, 'Earths Surface', 4, 'Weathering', 2, '2024-11-10 18:54:36'),
(297, 44, 'Earths Surface', 5, 'Weathering', 0, '2024-11-10 18:54:36'),
(298, 44, 'Earths Surface', 6, 'Weathering', 0, '2024-11-10 18:54:37'),
(299, 44, 'Earths Surface', 7, 'Weathering', 0, '2024-11-10 18:54:37'),
(300, 44, 'Earths Surface', 8, 'Weathering', 1, '2024-11-10 18:54:39'),
(301, 44, 'Earths Surface', 10, 'Weathering', 2, '2024-11-10 18:54:41'),
(302, 44, 'Earths Surface', 0, 'Erosion', 1, '2024-11-10 18:54:46'),
(303, 44, 'Earths Surface', 1, 'Erosion', 2, '2024-11-10 18:54:49'),
(304, 44, 'Earths Surface', 2, 'Erosion', 0, '2024-11-10 18:54:49'),
(305, 44, 'Earths Surface', 3, 'Erosion', 0, '2024-11-10 18:54:49'),
(306, 44, 'Earths Surface', 4, 'Erosion', 0, '2024-11-10 18:54:50'),
(307, 44, 'Earths Surface', 5, 'Erosion', 0, '2024-11-10 18:54:50'),
(308, 44, 'Earths Surface', 6, 'Erosion', 0, '2024-11-10 18:54:50'),
(309, 44, 'Earths Surface', 7, 'Erosion', 0, '2024-11-10 18:54:50'),
(310, 44, 'Earths Surface', 8, 'Erosion', 0, '2024-11-10 18:54:51'),
(311, 44, 'Earths Surface', 9, 'Erosion', 0, '2024-11-10 18:54:51'),
(312, 44, 'Earths Surface', 11, 'Erosion', 2, '2024-11-10 18:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL DEFAULT 'N/A',
  `firstName` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `role`, `section`, `firstName`, `lastname`) VALUES
(39, 'amiel06', '$2y$10$3likkbprqDqGWA0mVnblEuuQ0z67IULdlbSyCWuiUIv.V1xjSswL6', 'Student', 'Papaya', 'Amiel Carhyl', 'Lapid'),
(43, 'amiel', '$2y$10$fL3rofLrCgPOHiljAmBIEu3G88zDxzN73XLD/q.iYQeduymJ21J9q', 'Teacher', 'Papaya', 'Amiel Carhyl', 'Lapid'),
(44, 'heart', '$2y$10$h3pRNtYFj6ZYFapzgmrBtOvaepo2w.5TFCAbF62JtjxmAnHmNuD7i', 'Student', 'Papaya', 'Nicole Heart', 'Mendoza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_questions_estuaries`
--
ALTER TABLE `quiz_questions_estuaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_gas`
--
ALTER TABLE `quiz_questions_gas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_intertidal`
--
ALTER TABLE `quiz_questions_intertidal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_liquid`
--
ALTER TABLE `quiz_questions_liquid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_measure`
--
ALTER TABLE `quiz_questions_measure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_motion`
--
ALTER TABLE `quiz_questions_motion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_solid`
--
ALTER TABLE `quiz_questions_solid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_surfaceerosion`
--
ALTER TABLE `quiz_questions_surfaceerosion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions_surfaceweathering`
--
ALTER TABLE `quiz_questions_surfaceweathering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lessons`
--
ALTER TABLE `tbl_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_time_tracking`
--
ALTER TABLE `tbl_time_tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_questions_estuaries`
--
ALTER TABLE `quiz_questions_estuaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_gas`
--
ALTER TABLE `quiz_questions_gas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_intertidal`
--
ALTER TABLE `quiz_questions_intertidal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_liquid`
--
ALTER TABLE `quiz_questions_liquid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_measure`
--
ALTER TABLE `quiz_questions_measure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_motion`
--
ALTER TABLE `quiz_questions_motion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_solid`
--
ALTER TABLE `quiz_questions_solid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_surfaceerosion`
--
ALTER TABLE `quiz_questions_surfaceerosion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz_questions_surfaceweathering`
--
ALTER TABLE `quiz_questions_surfaceweathering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_lessons`
--
ALTER TABLE `tbl_lessons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_time_tracking`
--
ALTER TABLE `tbl_time_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_quiz_scores`
--
ALTER TABLE `tbl_quiz_scores`
  ADD CONSTRAINT `tbl_quiz_scores_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_students` (`id`);
COMMIT;

CREATE TABLE `tbl_achievements` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `student_id` INT NOT NULL,
    `achievement_name` VARCHAR(255) NOT NULL,
    `image_path` VARCHAR(255), -- Changed to store the path of the image
    `date_earned` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
