<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                <a class="nav-link text-warning pr-lg-5 pr-xl-5" id="homefit" href="/">HomeFit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item<?= $controllerType == 'diary' ? ' active' : '' ?>">
                <a class="nav-link text-warning pl-lg-5 pl-xl-5 menu" href="?action=show&type=diary">Дневник тренировок</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-warning pl-lg-5 pl-xl-5 menu" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Упражнения
                </a>
                <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-warning menu" href="?action=show&type=planka">Планка</a>
                    <a class="dropdown-item text-warning menu" href="?action=show&type=rasminka">Разминка</a>
                    <a class="dropdown-item text-warning menu" href="?action=show&type=press">Пресс</a>
                </div>
            </li>
<!--            <li class="nav-item--><?//= $controllerType == 'workouts' ? ' active' : '' ?><!--">-->
<!--                <a class="nav-link text-warning" href="?action=show&type=workouts">План тренировок</a>-->
<!--            </li>-->
            <li class="nav-item<?= $controllerType == 'group' ? ' active' : '' ?>">
                <a class="nav-link text-warning pl-lg-5 pl-xl-5 menu" href="?action=show&type=group">Group</a>
            </li>
            <li class="nav-item<?= $controllerType == 'users' ? ' active' : '' ?>">
                <a class="nav-link text-warning menu pl-lg-5 pl-xl-5" href="?action=show&type=users">Users</a>
            </li>
            <!-- <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=loginform&type=auth">Login</a>
            </li> -->
            <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                <a class="nav-link text-warning pl-lg-5 pl-xl-5 menu" href="?action=logout&type=auth">Выйти</a>
            </li>

<!--            <span class="navbar-text text-warning">-->
<!--                    --><?//= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
<!--                </span>-->
    </div>
</nav>