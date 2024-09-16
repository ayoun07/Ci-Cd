// Sélectionne tous les éléments ayant la classe 'btn'
const buttons = document.getElementsByClassName("delete");
console.log(buttons);

// Parcours de chaque bouton pour ajouter un écouteur d'événement
Array.from(buttons).forEach((button) => {
  button.addEventListener("click", function (event) {
    console.log("ID du bouton cliqué :", event.target.id);

    // Définir l'URL pour la requête DELETE (exemple : "/api/resource/{id}")
    const url = `/database/${event.target.id}`;

    fetch(url, {
      method: "DELETE",
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Réponse du serveur :", data);
      })
      .catch((error) => {
        console.error("Erreur lors de la requête :", error);
      });
  });
});
