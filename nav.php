
<nav id="nav_bar">
    <a href="./index.php" id="logo">FreeTales</a>


   
    <ul id="menu">
        <li><a href="./index.php" id="a1" class=<?php if($activePage == "acasa") {echo "active";}?>>Acasa</a></li>
        <li><a href="./rezumat.php" id="a2" class=<?php if($activePage == "rezumat") {echo "active";}?>>Rezumat</a></li>
        <li><a href="./original.php" id="a3" class=<?php if($activePage == "original") {echo "active";}?>>Originalul</a></li>
        <li><a href="./personaje.php" id="a4" class=<?php if($activePage == "personaje") {echo "active";}?>>Personaje</a></li>
        <li><a href="./contact.php" id="a5" class=<?php if($activePage == "contact") {echo "active";}?>>Cotact Us</a></li>
    </ul>
   
    <div class="burger_button" onclick="toggleBurgerMenu('.burger_button')">
        <div></div>
    </div>
    <div class="burger_menu">
        <ul>
            <li>
                <span >Themes:</span>
                <div id="theme-btns">
                    <div id="orange-theme-div" onclick="changeTheme('orange')"></div>
                    <div id="purple-theme-div" onclick="changeTheme('purple')"></div>
                    <div id="green-theme-div" onclick="changeTheme('green')"></div>
                </div>
            </li>
            <li><a href="./loginForm.php">Log In</a></li>
            <li><a href="./regForm.php">Sign Up</a></li>
        </ul>
    </div>
</nav>


