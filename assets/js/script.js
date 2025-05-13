// Sensibilisation OWASP - Bonnes pratiques front-end
// 1. Ne pas faire confiance aux entrées utilisateur (valider côté client et serveur)
// 2. Désactiver l'autocomplétion pour les champs sensibles
// 3. Utiliser une validation stricte pour les emails
// 4. Éviter les messages d'erreur trop détaillés
function validateForm(event) {
    event.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    let error = "";

    if (!name || !email || !message) {
        error = "Tous les champs sont obligatoires.";
    } else if (!emailRegex.test(email)) {
        error = "L'adresse email n'est pas valide.";
    }

    const feedback = document.getElementById("feedback");
    if (error) {
        feedback.textContent = error;
        feedback.className = "error";
    } else {
        feedback.textContent = "Merci pour votre message !";
        feedback.className = "success";
        document.getElementById("contactForm").reset();
    }
}
