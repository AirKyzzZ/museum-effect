<link rel="stylesheet" href="css/navbar.css">

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
                    <a href="index.php">
                        <img src="templates/images/logo_aquitaine.png" alt="Logo Aquitaine">
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">Collections</a>
                    <div class="dropdown-content">
                        <a href="https://musee-aquitaine.opacweb.fr/fr/">Collections en ligne du musée d'Aquitaine</a>
                        <a href="templates/pages/les-objets-phares-du-musee.php">Les objets phares du musée</a>
                        <a href="templates/pages/acquisitions.php">Acquisitions récentes</a>
                        <a href="templates/pages/contacter-un-ou-une-chargee-de-collections.php">Contacter un chargé de collection</a>
                        <a href="templates/pages/Le-musee-d-hier-a-aujourd-hui.php">Le musée, d'hier à aujourd'hui</a>
                        <a href="templates/pages/centre-national-jean-moulin.php">Le Centre Jean Moulin</a>
                        <a href="https://musee-goupil.opacweb.fr/fr/">Le musée Goupil</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Expositions</a>
                    <div class="dropdown-content">
                        <a href="templates/pages/exposition-photographique-28-aout-1944-libres.php">Exposition photographique | 28 août 1944 Libres !</a>
                        <a href="templates/pages/le-parcours-400-000-ans-dhistoire.php">Le parcours 400 000 ans d'histoire(s)</a>
                        <a href="templates/pages/expo-virtuelle-destinees-juives-bordeaux-durant-la-seconde-guerre-mondiale.php">En ligne | Destinées juives à Bordeaux durant la Seconde Guerre mondiale</a>
                        <a href="templates/pages/musee-virtuel-epigraphie.php">Musée virtuel d'épigraphie</a>
                        <a href="templates/pages/archives-des-expositions-temporaires.php">Archives des expositions temporaires</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Visites et Activités</a>
                    <div class="dropdown-content">
                    <a href="templates/pages/Agenda.php">Agenda</a>
                    <a href="templates/pages/Feuilleter-les-nouveaux-programmes.php">Feuilleter les nouveaux programmes</a>
                    <a href="templates/pages/Accueil-des-groupes.php">Accueil des groupes</a>
                    <a href="templates/pages/Relais-et-publics-du-champ-social.php">Relais et publics du champ social</a>
                    <a href="templates/pages/Visiteurs-en-situation-de-handicap.php">Visiteurs en situation de handicap</a>
                    <a href="templates/pages/S-amuser-au-musee.php">S'amuser au musée</a>
                    <a href="templates/pages/Vous-etes-guide-conferencier.php">Vous êtes guide-conférencier</a>
                    <a href="templates/pages/Bibliotheque.php">Bibliothèque</a>
                    <a href="templates/pages/Activites-scolaires.php">Activités scolaires</a>
                    <a href="templates/pages/Le-musee-dans-la-classe.php">Le musée dans la classe</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Boutique</a>
                    <div class="dropdown-content">
                        <a href="templates/pages/Bienvenue-dans-la-boutique.php">Bienvenue dans la boutique</a>
                        <a href="templates/pages/Idees-cadeaux.php">Idées cadeaux</a> 
                        <a href="templates/pages/Librairie.php">Librairie</a>
                        <a href="templates/pages/Tirage-Felix-Arnaudin.php">Tirages Félix Arnaudin</a>
                    </div>
                </li>


                <li class="search-container">
                    <form id="search-form" class="search-form">
                        <input type="search" id="search-input" placeholder="Rechercher..." class="search-input" list="search-options">
                        <datalist id="search-options">
                            <option value="Collections">
                            <option value="Expositions">
                            <option value="Activités">
                            <option value="Boutique">
                            <option value="Contact">
                        </datalist>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui/1.13.2/jquery-ui.min.js"></script>

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

        document.querySelectorAll('.dropdown > a').forEach(dropdownToggle => {
            dropdownToggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 1200) {
                    e.preventDefault();
                    const dropdown = this.parentElement;
                    dropdown.classList.toggle('active');

                    document.querySelectorAll('.dropdown').forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('active');
                        }
                    });
                }
            });
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 1200) {
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
            }
        });

        document.querySelectorAll('.dropdown-content a').forEach((item, index) => {
            item.style.transitionDelay = `${index * 0.01}s`;
        });

        // Autocomplete functionality using jQuery UI Autocomplete
        const searchRoutes = {
        "collections": "templates/pages/collections.php",
        "expositions": "templates/pages/exposition.php",
        "activités": "templates/pages/visit_acti.php",
        "boutique": "templates/pages/boutique.php",
        "contact": "templates/pages/contact.php"
        };
        document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const query = document.getElementById('search-input').value.trim().toLowerCase();

        if (searchRoutes[query]) {
            window.location.href = searchRoutes[query];
        } else {
            alert('Aucune page ne correspond à votre recherche.');
        }
    });
    </script>
</body>
</html>