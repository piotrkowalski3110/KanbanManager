<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zarejestruj się</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="module" src="scripts/passwordregistervalidate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</head>

<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">O nas</h4>
                    <p class="text-white">Aplikacja tworzona przez studenta pierwszego roku Teleinformatyki na
                        Wydziale Elektrycznym ZUT. Celem projektu jest stworzenie aplikacji dla uczniów oraz innych
                        studentów, która pozwoli na łatwe i przyjemne zarządzanie codziennymi zadaniami. Dzięki
                        mojej aplikacji internetowej już nigdy nie zapomnisz o wykonaniu ważnych rzeczy, zadań i
                        projektów! </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Kontakt</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-hover" style="text-decoration:none;"><i class="bi-facebook"
                                                                                                  style="font-size:20px; margin-right: 15px;"></i>Facebook</a>
                        </li>
                        <li><a href="#" class="text-white-hover" style="text-decoration:none;"><i class="bi-twitter"
                                                                                                  style="font-size:20px; margin-right: 15px;"></i>Twitter</a>
                        </li>
                        <li><a href="#" class="text-white-hover" style="text-decoration:none;"><i
                                        class="bi-envelope-fill" style="font-size:20px; margin-right: 15px;"></i>Adres
                                E-mail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="index.html" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-calendar-event-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                    <path
                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <strong>Kanban Manager</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">

                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Zarejestruj się</p>

                                <form class="mx-1 mx-md-4" action="register.php" method="post">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Twoje imię i nazwisko</label>
                                            <input type="text" id="nameandsurname" name="nameandsurname"
                                                   class="form-control"
                                                   placeholder="Jan Kowalski" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Twój Email</label>
                                            <input type="email" id="accountmail" name="accountmail" class="form-control"
                                                   placeholder="adres@domena.com" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="password">Hasło</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                   placeholder="hasło" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="confirm_password">Powtórz hasło</label>
                                            <input type="password" id="confirm_password" class="form-control"
                                                   placeholder="powtórz hasło" required/>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-3 text-center">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="agreecheck"
                                               required/>
                                        <label class="form-check-label">Zgadzam się na <a href="#!">warunki
                                                korzystania</a></label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-4 text-center">
                                        <label class="form-check-label">Masz już konto? <a href="login.html">Zaloguj
                                                się</a></label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button name="registermebtn" id="registerme" type="submit"
                                                class="btn btn-primary btn-lg">
                                            Zarejestruj
                                        </button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="images/logandreg.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-dark">
    <footer class="py-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-white-hover">Strona główna</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-hover">O nas</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-hover">Kontakt</a></li>
        </ul>
        <p class="text-center text-white">&copy; 2022 Piotr Kowalski</p>
    </footer>
</div>
</body>

</html>

<?php
session_start();

$username = "";
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'kanban_manager');

if (isset($_POST['registermebtn'])) {
    $username = mysqli_real_escape_string($db, $_POST['nameandsurname']);
    $email = mysqli_real_escape_string($db, $_POST['accountmail']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $kanban_table = "kanbans__".md5($email);

    $user_check_query = "SELECT * FROM users WHERE mail='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['mail'] === $email) {
            array_push($errors, "email already exists");
            echo '<script>alert("Konto o podanym adresie e-mail już istnieje w bazie danych!")</script>';
            session_destroy();
        }
    }

    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (id, name, mail, password, kanban) VALUES(NULL, '$username', '$email', '$password', '$kanban_table')";
        mysqli_query($db, $query);

        $createtable = "CREATE TABLE `kanban_manager`.`$kanban_table` (`id` INT NOT NULL AUTO_INCREMENT , `task_name` TEXT NOT NULL , `task_desc` TEXT NULL , `task_add_date` DATE NOT NULL , `task_end_date` DATE NOT NULL , `status` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        mysqli_query($db, $createtable);
        echo '<script>alert("Konto zostało utworzone pomyślnie! Nastąpi przekierowanie do strony logowania!")</script>';
        session_destroy();
        echo "<script>window.location.href='login.html';</script>";
    }
    session_destroy();
}