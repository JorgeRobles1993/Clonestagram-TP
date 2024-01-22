<section class="container border border-light col mx-5 p-5 rounded-5 blur">
                <h1>Créer un compte</h1>
                <form action="./process/process_register.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="pierrepaul@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo">
                    </div>
                    <a href="./quizz.php"> <button type="submit" class="btn btn-dark">Créer un compte</button> </a>
                </form>
            </section>