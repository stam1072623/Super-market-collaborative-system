-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1:3307
-- Χρόνος δημιουργίας: 12 Σεπ 2023 στις 17:28:09
-- Έκδοση διακομιστή: 10.4.28-MariaDB
-- Έκδοση PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `web_project`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `shop`
--

CREATE TABLE `shop` (
  `shop_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `active_offer` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `shop`
--

INSERT INTO `shop` (`shop_id`, `name`, `shop`, `longitude`, `latitude`, `active_offer`) VALUES
(354449389, 'Lidl', 'supermarket', 21.712654, 38.2080319, 0),
(360217468, 'The Mart', 'supermarket', 21.7806567, 38.28931, 0),
(360226900, 'Lidl', 'supermarket', 21.7434265, 38.2633511, 0),
(364381224, 'Σουπερμάρκετ Ανδρικόπουλος', 'supermarket', 21.7908028, 38.2952086, 0),
(364463568, 'Σκλαβενίτης', 'supermarket', 21.7642075, 38.2104365, 0),
(598279836, 'Papakos', 'convenience', 21.7622778, 38.23553, 0),
(980515550, 'Lidl', 'supermarket', 21.740082, 38.2312926, 0),
(1643373636, 'Σκλαβενίτης', 'supermarket', 21.7814957, 38.3013087, 0),
(1643818281, 'Σκλαβενίτης', 'supermarket', 21.7489662, 38.2596476, 0),
(1657132006, 'Ρουμελιώτης SUPER Market', 'supermarket', 21.7436127, 38.2613806, 0),
(1657132008, 'Σκλαβενίτης', 'supermarket', 21.741582, 38.2585236, 0),
(1763830009, 'My market', 'supermarket', 21.7473265, 38.2323892, 0),
(1763830474, 'ΑΒ Βασιλόπουλος', 'supermarket', 21.7257294, 38.2322376, 0),
(1770994538, 'Markoulas', 'supermarket', 21.7603629, 38.2644973, 0),
(1815896581, 'Lidl', 'supermarket', 21.8051332, 38.3067563, 0),
(1971240515, 'Ανδρικόπουλος', 'supermarket', 21.736371, 38.2399863, 0),
(1971247760, 'Σκλαβενίτης', 'supermarket', 21.7373409, 38.2364945, 0),
(1971249846, 'My Market', 'supermarket', 21.7342362, 38.2427052, 0),
(3144355008, 'My Market', 'supermarket', 21.7396708, 38.2568618, 0),
(3354481184, 'Ανδρικόπουλος', 'supermarket', 21.7323293, 38.1951968, 0),
(4101518891, 'ΑΒ ΒΑΣΙΛΟΠΟΥΛΟΣ', 'supermarket', 21.7418506, 38.2565589, 0),
(4356183595, 'Σκλαβενίτης', 'supermarket', 21.733285, 38.2434859, 0),
(4357589496, 'Ανδρικόπουλος', 'supermarket', 21.7302559, 38.2427963, 0),
(4372108797, 'Mini Market', 'convenience', 21.8364993, 38.2725804, 0),
(4484528391, 'Carna', 'convenience', 21.7667136, 38.2795377, 0),
(4752810729, 'Mini Market', 'convenience', 21.7770011, 38.3052409, 0),
(4931300543, 'Kronos', 'supermarket', 21.7296435, 38.2425794, 0),
(4953268497, 'Φίλιππας', 'convenience', 21.7504681, 38.2585639, 0),
(5005384516, 'No supermarket', 'supermarket', 21.7363349, 38.2498065, 0),
(5005409493, 'Kiosk', 'convenience', 21.735128, 38.2490852, 0),
(5005409494, 'Kiosk', 'convenience', 21.7349115, 38.2493169, 0),
(5005409495, 'Kiosk', 'convenience', 21.7344427, 38.2489563, 0),
(5005476710, 'Kiosk', 'convenience', 21.7413066, 38.2569875, 0),
(5005476711, 'Kiosk', 'convenience', 21.7409531, 38.2561434, 0),
(5164678230, 'Ανδρικόπουλος - Supermarket', 'supermarket', 21.7481501, 38.2691937, 0),
(5164678230, 'Σκλαβενίτης', 'supermarket', 21.7497014, 38.2690963, 0),
(5396345464, 'Mini Market', 'convenience', 21.8764222, 38.3277388, 0),
(5620198221, 'ΑΒ Βασιλόπουλος', 'supermarket', 21.7357783, 38.2170935, 0),
(5620208927, 'Mini Market', 'convenience', 21.7321204, 38.2160259, 0),
(7673935764, '3A', 'supermarket', 21.7396687, 38.2504514, 0),
(7673976786, 'Spar', 'supermarket', 21.7389771, 38.2486316, 0),
(7673986831, 'ΑΝΔΡΙΚΟΠΟΥΛΟΣ', 'supermarket', 21.7383224, 38.2481545, 0),
(7674120315, 'ΑΝΔΡΙΚΟΠΟΥΛΟΣ', 'supermarket', 21.7308044, 38.2429466, 0),
(7677225097, 'MyMarket', 'supermarket', 21.7265283, 38.2392836, 0),
(8214753473, 'Ena Cash And Carry', 'supermarket', 21.7253472, 38.2346622, 0),
(8214854586, 'ΚΡΟΝΟΣ - (Σκαγιοπουλείου)', 'supermarket', 21.7294915, 38.2358002, 0),
(8214887295, 'Ανδρικόπουλος Super Market', 'supermarket', 21.7306406, 38.2379176, 0),
(8214887306, '3Α Αράπης', 'supermarket', 21.7328984, 38.2375068, 0),
(8214910532, 'Γαλαξίας', 'supermarket', 21.733787, 38.2361127, 0),
(8215010716, 'Super Market Θεοδωρόπουλος', 'supermarket', 21.7283123, 38.2360129, 0),
(8215157448, 'Super Market ΚΡΟΝΟΣ', 'supermarket', 21.7340723, 38.2390442, 0),
(8777081651, 'Σκλαβενίτης', 'supermarket', 21.7428703, 38.2601801, 0),
(8777171555, '3Α Αράπης', 'supermarket', 21.7460078, 38.2586424, 0),
(8805335004, 'Μασούτης', 'supermarket', 21.7355058, 38.2454669, 0),
(8805467220, 'ΑΒ Shop & Go', 'supermarket', 21.7380288, 38.24957, 0),
(8806495733, '3Α ΑΡΑΠΗΣ', 'supermarket', 21.7455558, 38.2398789, 0),
(9651304117, 'Περίπτερο', 'convenience', 21.7408745, 38.2554443, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
