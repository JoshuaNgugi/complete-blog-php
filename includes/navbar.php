<!--- Navbar --->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div>
            <img src="<?php echo BASE_URL . 'static/images/jkuat-logo.png'; ?>" alt="Jkuat logo" width="50" height="50" style="float: left; margin-right:10px;" />
            <a class="navbar-brand text-white" href="<?php echo BASE_URL; ?>">JKUAT School of Computing</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
                </li>
                <li class="nav-item active pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL . 'academics.php'; ?>"><i class="fa fa-graduation-cap fa-fw mr-1"></i>Academics</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL . 'programmes.php'; ?>"><i class="fa fa-th-list fa-fw mr-1"></i>Programmes</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL . 'payment.php'; ?>"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Payment</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL . 'login.php'; ?>"><i class="fa fa-login fa-fw mr-1"></i>Login</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="<?php echo BASE_URL . 'register.php'; ?>"><i class="fa fa-sign-in fa-fw mr-1"></i>Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>