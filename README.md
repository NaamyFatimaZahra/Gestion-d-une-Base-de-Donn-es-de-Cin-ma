# Gestion-d-une-Base-de-Donn-es-de-Cin-ma

Acteurs :
Client
Système
Cas d'utilisation :
S'inscrire
Consulter les films
Choisir une projection
Choisir un siège
Confirmer la réservation



Classes Principales :
Client

Attributs :
id (int)
nom (string)
email (string)
motDePasse (string)
Méthodes :
inscrire()
seConnecter()
consulterHistorique()

Film

Attributs :
id (int)
titre (string)
genre (string)
duree (int)
dateSortie (date)
realisateur (string)
Méthodes :
ajouterFilm()
modifierFilm()
supprimerFilm()
Projection

Attributs :
id (int)
filmId (int)
horaire (datetime)
salleId (int)
Méthodes :
creerProjection()
modifierProjection()
annulerProjection()
Salle

Attributs :
id (int)
nom (string)
capacite (int)
Méthodes :
ajouterSalle()
modifierSalle()
Ticket

Attributs :
id (int)
clientId (int)
projectionId (int)
numSiege (int)
Méthodes :
reserverTicket()
annulerTicket()
Reservation

Attributs :
id (int)
clientId (int)
projectionId (int)
dateReservation (datetime)
statut (string)
Méthodes :
confirmerReservation()
annulerReservation()


















concept lifecycle 