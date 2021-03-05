<header class="header">
    <section class="title">
        <h4>Employees Manager</h4>
    </section>
    <ul class="nav-links">
        <li>
            <a href="<?=URL?>dashboard">Dashboard</a>
        </li>
        <li>
            <a href="<?=URL?>dashboard/employee">Employee</a>
        </li>
        <?= $_SESSION['name'] == 'admin' ? "
        <li>
            <a href='" . URL . "users'>Users</a>
        </li>
        <li>
            <a href='" . URL . "users/newUser'>Create User</a>
        </li>"
            : "" ?>
    </ul>

    <section class="logout-container">
        <a href="<?=URL?>login/logOut"><button class="logoutBtn" id="logout"> Log Out </button></a>
    </section>
</header>
