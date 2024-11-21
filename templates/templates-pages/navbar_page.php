<link rel="stylesheet" href="../../css/navbar.css">


<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-menu">
                <li class="navbar-logo">
                    <a href="../../index.php">
                        <img src="../images/logo_aquitaine.png" alt="Logo Aquitaine">     
                    </a>
                </li>
                <li><a href="templates/pages/collections.php">Collections</a></li>
                <li><a href="templates/pages/exposition.php">Expositions</a></li>
                <li><a href="templates/pages/visit_acti.php">Visites et Activités</a></li>
                <li><a href="templates/pages/boutique.php">Boutique</a></li>
                <li class="search-container">
                    <form class="search-form">
                        <input type="search" placeholder="Rechercher..." class="search-input">
                        <button type="submit" class="search-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </form>
                </li>
                <li class="cacatoes"><a href="templates/pages/contact.php">Contactez-nous</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Toggle mobile menu
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.navbar-menu').classList.toggle('active');
        });

        // Navbar scroll behavior
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>