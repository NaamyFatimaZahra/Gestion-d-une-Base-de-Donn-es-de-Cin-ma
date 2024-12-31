<?php

class Film {
    private int $id;
    private string $titre;
    private string $genre;
    private int $duree;
    private DateTime $date_sortie;
    private string $realisateur;

    public function __construct(string $titre, string $genre, int $duree, DateTime $date_sortie, string $realisateur) {
        $this->titre = $titre;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->date_sortie = $date_sortie;
        $this->realisateur = $realisateur;
    }

    
    public function getId(){
        return $this->id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getDuree(){
        return $this->duree;
    }

    public function getDateSortie(){
        return $this->date_sortie;
    }

    public function getRealisateur(){
        return $this->realisateur;
    }

  
    public function setTitre(string $titre){
        $this->titre = $titre;
    }

    public function setGenre(string $genre){
        $this->genre = $genre;
    }

    public function setDuree(int $duree){
        $this->duree = $duree;
    }

    public function setDateSortie(DateTime $date_sortie){
        $this->date_sortie = $date_sortie;
    }

    public function setRealisateur(string $realisateur){
        $this->realisateur = $realisateur;
    }

    
    public function afficherDetails(): array {
        return [
            'titre' => $this->titre,
            'genre' => $this->genre,
            'duree' => $this->duree . ' minutes',
            'date_sortie' => $this->date_sortie->format('d/m/Y'),
            'realisateur' => $this->realisateur
        ];
    }
}
?>