<?php include 'partials/header.php'; ?>

<main>
    <section class="contact flex flex-column items-center">

        <h1 class="text-center">Contactez-nous</h1>

        <form class="flex flex-column gap-10" action="#" method="post">
            <div class="flex flex-column gap-3">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="flex flex-column gap-3">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="flex flex-column gap-3">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="10" required></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>

    </section>
</main>

<?php include 'partials/footer.php'; ?>