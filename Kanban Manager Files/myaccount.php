<?php
if (!isset($_COOKIE["account"])) {
    echo "<script>window.location.href='index.html';</script>";
}
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mój Panel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/placeholder.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="style/dashboard.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/changepasswordvalidate.js" type="module"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/draggable.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="./style/kanban.css">
</head>

<script type="module">
    $('#edittask').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var taskname = button.data('taskname')
        var taskdesc = button.data('taskdesc')
        var taskenddate = button.data('taskenddate')
        var taskstatus = button.data('taskstatus')
        var btnval = button.data('taskid')
        var modal = $(this)

        modal.find('input#task_name_edit').val(taskname)
        modal.find('input#task_desc_edit').val(taskdesc)
        modal.find('input#task_end_date_edit').val(taskenddate)
        modal.find('select#task_status_edit').val(taskstatus)
        modal.find('button#savechangesbtn').val(btnval)
    })

    $('#addtask').on('show.bs.modal', function (ev) {
        var button = $(ev.relatedTarget)
        var taskstatus = button.data('taskstatus')
        var modal = $(this)
        modal.find('select#task_status').val(taskstatus)
    })
</script>

<body>

<header class="navbar navbar-dark sticky-top bg-black flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6"><?php echo htmlspecialchars(explode(";", $_COOKIE["account"])[1]); ?></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Wyloguj</a>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span style="color: #1c55ff;">Menedżer Tablic</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?standard_view">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Podgląd standardowy
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#addtask">
                            Dodaj zadanie
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span style="color: #1c55ff;">Zadania</span>
                    <a class="link-secondary" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="?to_do">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Do zrobienia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?during_work">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            W trakcie
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?for_tests">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Do testów
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?finished">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Ukończone
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span style="color: #1c55ff;">Ustawienia konta</span>
                    <a class="link-secondary" aria-label="Add a new report">
                        <span data-feather="plus-circle" class="align-text-bottom"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#changeusernamemodal">
                            Zmień nazwę konta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#changepassword">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Zmień hasło
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#deleteaccount">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Usuń konto
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <?php
                if (filter_has_var(INPUT_GET, 'standard_view')) {
                    echo '<h1 class="h2">Podgląd standardowy</h1>';
                }
                if (filter_has_var(INPUT_GET, 'to_do')) {
                    echo '<h1 class="h2">Do zrobienia</h1>';
                }
                if (filter_has_var(INPUT_GET, 'during_work')) {
                    echo '<h1 class="h2">W trakcie</h1>';
                }
                if (filter_has_var(INPUT_GET, 'for_tests')) {
                    echo '<h1 class="h2">Do testów</h1>';
                }
                if (filter_has_var(INPUT_GET, 'finished')) {
                    echo '<h1 class="h2">Ukończone</h1>';
                }
                ?>
            </div>
            <div class="table-responsive">
                <tbody>
                <?php
                $db = mysqli_connect('localhost', 'root', '', 'kanban_manager');
                $currtable = explode(";", $_COOKIE["account"])[2];
                if (filter_has_var(INPUT_GET, 'standard_view')) {
                    echo '<div class="container py-5">';
                    echo '<div class="row">';
                    echo '<div class="col-12 col-lg-3">';
                    echo '<div class="card mb-3 kanban-col">';
                    echo '<div class="card-header bg-light">';
                    echo '<h3 class="card-title h5 mb-1">';
                    echo 'Do zrobienia';
                    echo '</h3>';
                    echo '<small class="mb-0 text-muted">';
                    echo 'Aktualne zaplanowane zadania.';
                    echo '</small>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="tasks">';
                    //to_do
                    $sql = "SELECT * FROM $currtable WHERE status = 'to_do'";
                    $to_do = $db->query($sql);
                    if ($to_do->num_rows > 0) {
                        while ($row = $to_do->fetch_assoc()) {
                            echo '<div class="card mb-3 cursor-grab">';
                            echo '<div class="card-body">';
                            echo '<span class="badge bg-danger text-white mb-2">' . $row["task_name"] . '</span>';
                            echo '<p class="mb-0">' . $row["task_desc"] . '</p>';
                            echo '<div class="date-cont" style="border-top: 1px dashed black; margin-top: 15px;">';
                            echo '<small>Created at:' . $row["task_add_date"] . '</small>';
                            echo '<br>';
                            echo '<small>Endline:' . $row["task_end_date"] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    //
                    echo '</div>';
                    echo '<div class="btn btn-primary btn-block buttonAddKanban" data-bs-toggle="modal" data-bs-target="#addtask" data-taskstatus="to_do">Add task</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col-12 col-lg-3">';
                    echo '<div class="card mb-3 kanban-col">';
                    echo '<div class="card-header bg-light">';
                    echo '<h3 class="card-title h5 mb-1">';
                    echo 'W trakcie';
                    echo '</h3>';
                    echo '<small class="mb-0 text-muted">';
                    echo 'Zadania w trakcie wykonywania.';
                    echo '</small>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="tasks" id="progress">';
                    //during
                    $sql = "SELECT * FROM $currtable WHERE status = 'during'";
                    $during = $db->query($sql);
                    if ($during->num_rows > 0) {
                        while ($row = $during->fetch_assoc()) {
                            echo '<div class="card mb-3 cursor-grab">';
                            echo '<div class="card-body">';
                            echo '<span class="badge bg-warning text-white mb-2">' . $row["task_name"] . '</span>';
                            echo '<p class="mb-0">' . $row["task_desc"] . '</p>';
                            echo '<div class="date-cont" style="border-top: 1px dashed black; margin-top: 15px;">';
                            echo '<small>Created at:' . $row["task_add_date"] . '</small>';
                            echo '<br>';
                            echo '<small>Endline:' . $row["task_end_date"] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    //
                    echo '</div>';
                    echo '<div class="btn btn-primary btn-block buttonAddKanban" data-bs-toggle="modal" data-bs-target="#addtask" data-taskstatus="during">Add task</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col-12 col-lg-3">';
                    echo '<div class="card mb-3 kanban-col">';
                    echo '<div class="card-header bg-light">';
                    echo '<h3 class="card-title h5 mb-1">';
                    echo 'W trakcie testów';
                    echo '</h3>';
                    echo '<small class="mb-0 text-muted">';
                    echo 'Gotowe zadania, które wymagają testów.';
                    echo '</small>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="tasks" id="completed">';
                    //in_tests
                    $sql = "SELECT * FROM $currtable WHERE status = 'in_tests'";
                    $in_tests = $db->query($sql);
                    if ($in_tests->num_rows > 0) {
                        while ($row = $in_tests->fetch_assoc()) {
                            echo '<div class="card mb-3 cursor-grab">';
                            echo '<div class="card-body">';
                            echo '<span class="badge bg-info text-white mb-2">' . $row["task_name"] . '</span>';
                            echo '<p class="mb-0">' . $row["task_desc"] . '</p>';
                            echo '<div class="date-cont" style="border-top: 1px dashed black; margin-top: 15px;">';
                            echo '<small>Created at:' . $row["task_add_date"] . '</small>';
                            echo '<br>';
                            echo '<small>Endline:' . $row["task_end_date"] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    //
                    echo '</div>';
                    echo '<div class="btn btn-primary btn-block buttonAddKanban" data-bs-toggle="modal" data-bs-target="#addtask" data-taskstatus="in_tests">Add task</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col-12 col-lg-3">';
                    echo '<div class="card mb-3 kanban-col">';
                    echo '<div class="card-header bg-light">';
                    echo '<h3 class="card-title h5 mb-1">';
                    echo 'Ukończone';
                    echo '</h3>';
                    echo '<small class="mb-0 text-muted">';
                    echo 'Gotowe zadania, po testach.';
                    echo '</small>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="tasks">';
                    //done
                    $sql = "SELECT * FROM $currtable WHERE status = 'done'";
                    $done = $db->query($sql);
                    if ($done->num_rows > 0) {
                        while ($row = $done->fetch_assoc()) {
                            echo '<div class="card mb-3 cursor-grab">';
                            echo '<div class="card-body">';
                            echo '<span class="badge bg-success text-white mb-2">' . $row["task_name"] . '</span>';
                            echo '<p class="mb-0">' . $row["task_desc"] . '</p>';
                            echo '<div class="date-cont" style="border-top: 1px dashed black; margin-top: 15px;">';
                            echo '<small>Created at:' . $row["task_add_date"] . '</small>';
                            echo '<br>';
                            echo '<small>Endline:' . $row["task_end_date"] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    //
                    echo '</div>';
                    echo '<div class="btn btn-primary btn-block buttonAddKanban" data-bs-toggle="modal" data-bs-target="#addtask" data-taskstatus="done">Add task</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

                if (filter_has_var(INPUT_GET, 'to_do')) {
                    echo '<table class="table table-striped table-sm">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">ID</th>';
                    echo '<th scope="col">NAZWA</th>';
                    echo '<th scope="col">OPIS</th>';
                    echo '<th scope="col">DATA DODANIA</th>';
                    echo '<th scope="col">DEADLINE</th>';
                    echo '<th scope="col">OPCJE</th>';
                    echo '</tr>';
                    echo '</thead>';
                    $sql = "SELECT * FROM $currtable WHERE status = 'to_do'";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["task_end_date"] < date('Y-m-d')) echo '<tr style="background-color: #ff8080">';
                            else echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["task_name"] . '</td>';
                            echo '<td>' . $row["task_desc"] . '</td>';
                            echo '<td>' . $row["task_add_date"] . '</td>';
                            echo '<td>' . $row["task_end_date"] . '</td>';
                            echo '<td><a href="deletetask.php?task_id=' . $row["id"] . '&dest=to_do" class="fa fa-close" style="margin-right: 10px; text-decoration: none;"></a>
                                          <a href="#" style="text-decoration: none" class="fa fa-bars" data-taskname="' . $row["task_name"] . '" data-taskid="' . $row["id"] . '" data-taskdesc="' . $row["task_desc"] . '" data-taskenddate="' . $row["task_end_date"] . '" data-taskstatus="' . $row["status"] . '" data-bs-toggle="modal" data-bs-target="#edittask"></a></td>';
                            echo '</tr>';
                        }
                    }
                    $db->close();
                }
                if (filter_has_var(INPUT_GET, 'during_work')) {
                    echo '<table class="table table-striped table-sm">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">ID</th>';
                    echo '<th scope="col">NAZWA</th>';
                    echo '<th scope="col">OPIS</th>';
                    echo '<th scope="col">DATA DODANIA</th>';
                    echo '<th scope="col">DEADLINE</th>';
                    echo '<th scope="col">OPCJE</th>';
                    echo '</tr>';
                    echo '</thead>';
                    $sql = "SELECT * FROM $currtable WHERE status = 'during'";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["task_end_date"] < date('Y-m-d')) echo '<tr style="background-color: #ff8080">';
                            else echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["task_name"] . '</td>';
                            echo '<td>' . $row["task_desc"] . '</td>';
                            echo '<td>' . $row["task_add_date"] . '</td>';
                            echo '<td>' . $row["task_end_date"] . '</td>';
                            echo '<td><a href="deletetask.php?task_id=' . $row["id"] . '&dest=during_work" class="fa fa-close" style="margin-right: 10px; text-decoration: none;"></a>
                                          <a href="#" style="text-decoration: none" class="fa fa-bars" data-taskname="' . $row["task_name"] . '" data-taskid="' . $row["id"] . '" data-taskdesc="' . $row["task_desc"] . '" data-taskenddate="' . $row["task_end_date"] . '" data-taskstatus="' . $row["status"] . '" data-bs-toggle="modal" data-bs-target="#edittask"></a></td>';
                            echo '</tr>';
                        }
                    }
                    $db->close();
                }
                if (filter_has_var(INPUT_GET, 'for_tests')) {
                    echo '<table class="table table-striped table-sm">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">ID</th>';
                    echo '<th scope="col">NAZWA</th>';
                    echo '<th scope="col">OPIS</th>';
                    echo '<th scope="col">DATA DODANIA</th>';
                    echo '<th scope="col">DEADLINE</th>';
                    echo '<th scope="col">OPCJE</th>';
                    echo '</tr>';
                    echo '</thead>';
                    $sql = "SELECT * FROM $currtable WHERE status = 'in_tests'";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["task_end_date"] < date('Y-m-d')) echo '<tr style="background-color: #ff8080">';
                            else echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["task_name"] . '</td>';
                            echo '<td style="width: 25%">' . $row["task_desc"] . '</td>';
                            echo '<td>' . $row["task_add_date"] . '</td>';
                            echo '<td>' . $row["task_end_date"] . '</td>';
                            echo '<td><a href="deletetask.php?task_id=' . $row["id"] . '&dest=for_tests" class="fa fa-close" style="margin-right: 10px; text-decoration: none;"></a>
                                          <a href="#" style="text-decoration: none" class="fa fa-bars" data-taskname="' . $row["task_name"] . '" data-taskid="' . $row["id"] . '" data-taskdesc="' . $row["task_desc"] . '" data-taskenddate="' . $row["task_end_date"] . '" data-taskstatus="' . $row["status"] . '" data-bs-toggle="modal" data-bs-target="#edittask"></a></td>';
                            echo '</tr>';
                        }
                    }
                    $db->close();
                }
                if (filter_has_var(INPUT_GET, 'finished')) {
                    echo '<table class="table table-striped table-sm">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">ID</th>';
                    echo '<th scope="col">NAZWA</th>';
                    echo '<th scope="col">OPIS</th>';
                    echo '<th scope="col">DATA DODANIA</th>';
                    echo '<th scope="col">DEADLINE</th>';
                    echo '<th scope="col">OPCJE</th>';
                    echo '</tr>';
                    echo '</thead>';
                    $sql = "SELECT * FROM $currtable WHERE status = 'done'";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr style="background-color: #70db70">';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["task_name"] . '</td>';
                            echo '<td>' . $row["task_desc"] . '</td>';
                            echo '<td>' . $row["task_add_date"] . '</td>';
                            echo '<td>' . $row["task_end_date"] . '</td>';
                            echo '<td><a href="deletetask.php?task_id=' . $row["id"] . '&dest=finished" class="fa fa-close" style="margin-right: 10px; text-decoration: none;"></a>
                                          <a href="#" style="text-decoration: none" class="fa fa-bars" data-taskname="' . $row["task_name"] . '" data-taskid="' . $row["id"] . '" data-taskdesc="' . $row["task_desc"] . '" data-taskenddate="' . $row["task_end_date"] . '" data-taskstatus="' . $row["status"] . '" data-bs-toggle="modal" data-bs-target="#edittask"></a></td>';
                            echo '</tr>';
                        }
                    }
                    $db->close();
                }
                ?>
                </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<div class="modal fade" id="changeusernamemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="changeusername.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Zmień nazwę konta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" id="changeusername" name="changeusername"
                               value="<?php echo htmlspecialchars(explode(";", $_COOKIE["account"])[1]); ?>"
                               class="form-control"
                               aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zakmnij</button>
                    <button type="submit" name="changeusernamebtn" id="changeusernamebtn" class="btn btn-primary">Zapisz
                        zmiany
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<form action="changepassword.php" method="post">
    <div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Zmień hasło</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" class="form-control"
                                   placeholder="hasło" required/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                                   placeholder="powtórz hasło" required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zakmnij</button>
                    <button type="submit" id="changepasswordbtn" name="changepasswordbtn" class="btn btn-primary">Zapisz
                        zmiany
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="deleteaccount.php" method="post">
    <div class="modal fade" id="deleteaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Usuń konto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 style="text-align: center;">Czy napewno chcesz usunąć konto? Wszelkie dane zostaną usunięte
                        bezpowrotnie i nie będzie można cofnąć tej operacji.</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zakmnij</button>
                    <button type="submit" name="deltaskbtn" class="btn btn-danger">Usuń</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="edittask.php" method="post">
    <div class="modal fade" id="edittask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Edytuj zadanie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- -->
                <div class="modal-body"><!-- -->
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input id="task_name_edit" name="task_name_edit" type="text" placeholder="Nazwa"
                                   class="form-control" required/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" id="task_desc_edit" name="task_desc_edit" class="form-control"
                                   placeholder="Opis" style="height: 90px !important;"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="date" id="task_end_date_edit" name="task_end_date_edit" class="form-control"
                                   min="<?= date('Y-m-d'); ?>" required/>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <select id="task_status_edit" name="task_status_edit" class="form-control" required>
                                <option value="to_do">Do zrobienia</option>
                                <option value="during">W trakcie</option>
                                <option value="in_tests">Do testów</option>
                                <option value="done">Ukończone</option>
                            </select>
                        </div>
                    </div>
                    <!-- --></div><!-- -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zakmnij</button>
                    <button type="submit" id="savechangesbtn" name="savechangesbtn" class="btn btn-primary" value="">
                        Zapisz zmiany
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="addtask.php" method="post">
    <div class="modal fade" id="addtask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Dodaj zadanie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input id="task_name" name="task_name" type="text" placeholder="Nazwa" class="form-control"
                                   required/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" id="task_desc" name="task_desc" class="form-control" placeholder="Opis"
                                   style="height: 90px !important;"/>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="date" id="task_end_date" name="task_end_date" class="form-control"
                                   min="<?= date('Y-m-d'); ?>" required/>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <select id="task_status" name="task_status" class="form-control" required>
                                <option value="to_do">Do zrobienia</option>
                                <option value="during">W trakcie</option>
                                <option value="in_tests">Do testów</option>
                                <option value="done">Ukończone</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zakmnij</button>
                    <button type="submit" id="addtaskbtn" name="addtaskbtn" class="btn btn-primary">Zapisz zmiany
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
