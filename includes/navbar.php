<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><strong>Voting system</strong></a>
                <button
                    type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-targe="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div
                class="collapse navbar-collapse pull-left"
                id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php
                        if (isset($_SESSION['student'])) {
                            echo "
                                <li><a href='../index.php'>home</a></li>
                                <li><a href='../transaction.php'>transactions</a></li>
                            ";
                        }
                    ?>
                </ul>
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="user user-menu">
                        <a href="">
                            <img
                                src="<?= (!empty($voter['photo'])) ? 'imgs/'.$voter['photo'] : 'imgs/profile.jpg' ?>"
                                class="user-image" alt="user image">
                            <span class="hidden-xs">
                                <?php echo $voter['first_name'].' '.$voter['last_name'] ?>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="../logout.php">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
