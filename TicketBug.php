<?php

class TicketBug extends Ticket {
    private string $niveauUrgence;

    public function __construct(int $id, string $titre, string $description, string $niveauUrgence, string $statut = "Ouvert") {
        parent::__construct($id, $titre, $description, $statut);
        $this->niveauUrgence = $niveauUrgence;
    }

    public function afficherDetailsBug() {
        $this->afficherTicket();
        echo "Niveau d'urgence: {$this->niveauUrgence}<br>";
        echo "----------------------------<br>";
    }
}