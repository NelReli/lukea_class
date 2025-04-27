<?php

class Ticket {
    protected int $id;
    protected string $titre;
    protected string $description;
    protected string $statut;
    protected DateTime $date;

    public function __construct(int $id, string $titre, string $description, string $statut = "Ouvert") {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->statut = $statut;
        $this->date = new \DateTime();
    }

    public function getId(): int {
        return $this->id;
    }

    public function changerStatut(string $nouveauStatut): void {
        $this->statut = $nouveauStatut;
    }

    public function afficherTicket(): void {
        echo "Ticket {$this->id} - {$this->titre}\n";
        echo "Description: {$this->description}\n";
        echo "Statut: {$this->statut}\n";
        echo "Créé le: {$this->date->format("d/m/Y H:i:s")}\n";
        echo "----------------------------\n";
    }
}