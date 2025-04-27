<?php
require_once './GestionnaireTicket.php';
require_once './Ticket.php';
require_once './TicketBug.php';
require_once './TicketAmelioration.php';

$gestionnaire = new GestionnaireTicket();

$ticket1 = new Ticket(1, "Problème de connexion", "Je ne peux pas me connecter à mon compte.");
$ticket2 = new TicketBug(2, "Erreur 404", "La page ne se charge pas.", "Critique");
$ticket3 = new TicketAmelioration(3, "Ajouter une option de tri", "Je ne peux pas trier par date.", "Permettre aux utilisateurs de trier par date");

$gestionnaire->ajouterTicket($ticket1);
$gestionnaire->ajouterTicket($ticket2);
$gestionnaire->ajouterTicket($ticket3);

$gestionnaire->afficherTousLesTickets();

echo "\nDétails d'un ticket bug :\n";
$ticket2->afficherDetailsBug();

$gestionnaire->fermerTicket(1);

echo "\nAprès modification :\n";
$gestionnaire->afficherTousLesTickets();
