        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="index.php">
                                <img class="logo1" src="assets/images/logo/logo.png" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="index.php">Hem</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="Shop.php">Shop</a>

                                    </li>
                                    <li class="nav-item"><a href="#">Blogg</a></li>
                                    <li class="nav-item"><a href="contact.php">Kontakt</a></li>
                                    <?php if (!isset($_SESSION["loggedin"])) { ?>
                                        <li class="nav-item">
                                            <a href="login.php">Logga in</a>
                                        </li>
                                    <?php } else { ?>

                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php"><?php echo $_SESSION["username"] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="logout.php">Logga ut</a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            <div class="button">

                            </div>
                        </nav>
                        <!-- navbar -->

                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->