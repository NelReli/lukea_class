<?php

class GestionnaireTicket {
    private array $tickets = [];

    public function ajouterTicket(Ticket $ticket): void {
        $this->tickets[] = $ticket;
    }

    public function afficherTousLesTickets(): void {
        foreach($this->tickets as $ticket) {
            $ticket->afficherTicket();
        }
    }

    public function trouverTicketParId(int $id): ?Ticket {
        foreach($this->tickets as $ticket) {
            if($ticket->getId() == $id) {
                return $ticket;
            }
        }
        return null;
    }

    public function fermerTicket(int $id): void {
        $ticket = $this->trouverTicketParId($id);
        if($ticket) {
            $ticket->changerStatut('Fermé');
            echo "\nTicket #$id a été fermé.<br>";
        } else {
            echo "\nTicket #$id introuvable.<br>";
        }
    }
}