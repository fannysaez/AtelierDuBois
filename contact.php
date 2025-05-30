<?php include 'partials/header.php'; ?>

<main class="flex flex-column items-center">

    <section class="contact flex flex-column items-center">
        <h1 class="text-center">Contactez-nous</h1>

        <form class="flex flex-column gap-10" action="#" method="post">
            <div class="flex flex-column">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="flex flex-column">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="flex flex-column">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </section>

    <section class="contact-presentation flex flex-column">
        <img class="hero-img-1" src="./assets/img/contact-img.jpg" alt="image menuiserie client">
        <h2>
            Nous serions heureux de vous conseiller dans notre showroom à Steinen dans le canton de Schwyz.
            Nous vous présentons un large choix de cuisines et de meubles sur une superficie de plus de 300 mètres carrés.
            Notre personnel compétent se fera un plaisir de prendre le temps de vous fournir des informations complètes
            sur les différents matériaux et designs. Nous sommes impatients de vous aider à réaliser la maison de vos rêves.
            Venez nous rendre visite et laissez-vous inspirer.
        </h2>
        <div class="projects-section flex justify-between">
            <h3>Projets</h3>
            <div class="projects-list flex flex-column">
                <a class="project-card">
                    Installateur
                </a>
                <a class="project-card">
                    Bilan : Journée portes ouvertes 2024
                </a>
                <a class="project-card">
                    Prochain après-midi de projet le 28 juin
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>