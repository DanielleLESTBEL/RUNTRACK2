UPDATE salles s
SET s.nom = CONCAT('Biggest Room (', max_cap.nom, ' - ', max_cap.capacité, ' places)');
SELECT id, nom, capacite FROM salles ORDER BY capacite = (SELECT MAX(capacite) FROM salles) DESC LIMIT 1;

