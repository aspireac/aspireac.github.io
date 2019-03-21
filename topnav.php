<nav class="navbar navbar-expand-md navbar-dark">
    <a class="navbar-brand" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>index.php"><img src="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>media/ajf-logo.png" height="100px"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topnav">
        <ul class="navbar-nav">
            <li <?php if ($thispage=="index.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>>
                <a class="nav-link" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li <?php if ($thispage=="about.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>>
                <a class="nav-link" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) echo "../"; ?>about.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Online Store
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>store.php">Main Store Page</a></li>
                    <li <?php if ($thispage=="shirts.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>store/shirts.php">Order Shirts</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Events
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>events.php">Main Events Page</a></li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">June 2019 Samurai Slam</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>events/samurai_slam_judo_tournament.php">Main Tournament Page</a></li>
                            <li><a class="dropdown-item" href="http://www.americanjudofoundation.org/wp-content/uploads/2019/02/03-2019-Samurai-Slam-Judo-Registration-Packet.pdf" target="_blank">Registration Packet</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Entrants</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/brackets.php">By Name</a></li>
                                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/bracketbyclub.php">By Club</a></li>
                                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/bracketbyweight.php">By Weight</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/divisionbrackets.php">Division Brackets</a></li>
                            <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/pools.pdf" target="_blank">Pools</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Results</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/results.php">Individual Results</a></li>
                                    <li><a class="dropdown-item" href="<?php if($thisfolder=="tournament") echo "../"; ?>tournament/team_results.php">Team Results</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">March 2019 Samurai Slam</a>
                        <ul class="dropdown-menu">
                            <li <?php if ($thispage=="march2019results.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>events/march2019results.php">Individual Results</a></li>
                            <li <?php if ($thispage=="march2019team.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>><a class="dropdown-item" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>events/march2019team.php">Team Results</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li <?php if ($thispage=="become_sponsor.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>>
                <a class="nav-link" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>become_sponsor.php">Become A Sponsor</a>
            </li>
            <li <?php if ($thispage=="contact.php") {echo " class=\"nav-item active\"";} else {echo "class=\"nav-item\"";} ?>>
                <a class="nav-link" href="<?php if($thisfolder=="tournament"){echo "../../";} else if (!empty($thisfolder)) {echo "../";} ?>contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>



