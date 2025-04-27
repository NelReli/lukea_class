<?php

class TicketAmelioration extends Ticket {
    private string $propositionSolution;

    public function __construct(int $id, string $titre, string $description, string $propositionSolution, string $statut = "Ouvert") {
        parent::__construct($id, $titre, $description, $statut);
        $this->propositionSolution = $propositionSolution;
    }

    public function afficherDetailsAmelioration(): void {
        $this->afficherTicket();
        echo "Proposition de solution: {$this->propositionSolution}<br>";
        echo "----------------------------<br>";
    }
}