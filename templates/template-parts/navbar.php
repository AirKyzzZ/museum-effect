<link rel="stylesheet" href="css/navbar.css">
<link rel="icon" href="templates/images/logo_head.png" type="image/png">
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
                    <a href="">Collections</a>
                    <div class="dropdown-content">
                        <a href="https://musee-aquitaine.opacweb.fr/fr/">Collections en ligne du musée d'Aquitaine</a>
                        <a href="templates/pages/les-objets-phares-du-musee.php">Les objets phares du musée</a>
                        <a href="templates/pages/acquisitions.php">Acquisitions récentes</a>
                        <a href="#">Contacter un chargé de collection</a>
                        <a href="#">Le musée, d'hier à aujourd'hui</a>
                        <a href="#">Le Centre Jean Moulin</a>
                        <a href="https://musee-goupil.opacweb.fr/fr/">Le musée Goupil</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="">Expositions</a>
                    <div class="dropdown-content">
                        <a href="#">Exposition photographique | 28 août 1944 Libres !</a>
                        <a href="#">Le parcours 400 000 ans d'histoire(s)</a>
                        <a href="#">En ligne | Destinées juives à Bordeaux durant la Seconde Guerre mondiale</a>
                        <a href="#">Musée virtuel d'épigraphie</a>
                        <a href="#">Archives des expositions temporaires</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="">Visites et Activités</a>
                    <div class="dropdown-content">
                    <a href="#">Agenda</a>
                    <a href="#">Feuilleter les nouveaux programmes</a>
                    <a href="#">Accueil des groupes</a>
                    <a href="#">Relais et publics du champ social</a>
                    <a href="#">Visiteurs en situation de handicap</a>
                    <a href="#">S'amuser au musée</a>
                    <a href="#">Vous êtes guide-conférencier</a>
                    <a href="#">Bibliothèque</a>
                    <a href="#">Activités scolaires</a>
                    <a href="#">Le musée dans la classe</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="">Boutique</a>
                    <div class="dropdown-content">
                        <a href="#">Bienvenue dans la boutique</a>
                        <a href="#">Idées cadeaux</a> 
                        <a href="#">Librairie</a>
                        <a href="#">Tirages Félix Arnaudin</a>
                    </div>
                </li>


                <li class="search-container">
                    <form id="search-form" class="search-form">
                        <input type="search" id="search-input" placeholder="Rechercher..." class="search-input" list="search-options">
                        <datalist id="search-options">
                            <option value="Collections en ligne du musée d'Aquitaine">
                            <option value="Les objets phares du musée">
                            <option value="Acquisitions récentes">
                            <option value="Contacter un chargé de collection">
                            <option value="Le musée, d'hier à aujourd'hui">
                            <option value="Le Centre Jean Moulin">
                            <option value="Le musée, d'hier à aujourd'hui">
                            <option value="Le musée Goupil">
                            <option value="Exposition photographique | 28 août 1944 Libres !">
                            <option value="Le parcours 400 000 ans d'histoire(s)">
                            <option value=">En ligne | Destinées juives à Bordeaux durant la Seconde Guerre mondiale">
                            <option value="Musée virtuel d'épigraphie">
                            <option value="Archives des expositions temporaires">
                            <option value="Agenda">
                            <option value="Feuilleter les nouveaux programmes">
                            <option value="Accueil des groupes">
                            <option value="Relais et publics du champ social">
                            <option value="Visiteurs en situation de handicap">
                            <option value="S'amuser au musée">
                            <option value="Vous êtes guide-conférencier">
                            <option value="Bibliothèque">
                            <option value="Activités scolaires">
                            <option value="Le musée dans la classe">
                            <option value="Bienvenue dans la boutique">
                            <option value="Idées cadeaux">
                            <option value="Librairie">
                            <option value="Tirages Félix Arnaudin">
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

        const searchRoutes = {
        "collections en ligne du musée d'Aquitaine": "https://musee-aquitaine.opacweb.fr/fr/",
        "les objets phares du musée": "templates/pages/les-objets-phares-du-musee.php",
        "acquisitions récentes": "templates/pages/visit_acti.php",
        "contacter un chargé de collection": "templates/pages/boutique.php",
        "le musée, d'hier à aujourd'hui": "templates/pages/contact.php",
        "le centre jean moulin": "templates/pages/exposition.php",
        "le musée goupil": "templates/pages/contact.php",
        "exposition photographique | 28 août 1944 libres !": "templates/pages/exposition.php",
        "le parcours 400 000 ans d'histoire(s)": "templates/pages/exposition.php",
        "en ligne | destinées juives à bordeaux durant la seconde guerre mondiale": "templates/pages/collections.php",
        "musée virtuel d'épigraphie": "templates/pages/contact.php",
        "archives des expositions temporaires": "templates/pages/collections.php",
        "agenda": "templates/pages/exposition.php",
        "feuilleter les nouveaux programmes": "templates/pages/visit_acti.php",
        "accueil des groupes": "templates/pages/boutique.php",
        "relais et publics du champ social": "templates/pages/contact.php",
        "visiteurs en situation de handicap": "templates/pages/collections.php",
        "s'amuser au musée": "templates/pages/exposition.php",
        "vous êtes guide-conférencier": "templates/pages/visit_acti.php",
        "bibliothèque": "templates/pages/collections.php",
        "activités scolaires": "templates/pages/exposition.php",
        "le musée dans la classe": "templates/pages/contact.php",
        "bienvenue dans la boutique": "templates/pages/boutique.php",
        "idées cadeaux": "templates/pages/collections.php",
        "librairie": "templates/pages/exposition.php",
        "tirages félix arnaudin": "templates/pages/visit_acti.php"
    };

    const searchInput = document.getElementById('search-input');
    const searchOptions = document.getElementById('search-options');

    // Fonction pour masquer les options du datalist jusqu'à la première saisie
    searchInput.addEventListener('focus', function() {
        if (this.value === '') {
            searchOptions.innerHTML = ''; // Vider les options avant la saisie
        }
    });

    // Restaure les options du datalist quand l'utilisateur commence à taper
    searchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();
        if (query !== '') {
            // Restaure toutes les options du datalist
            searchOptions.innerHTML = `
                <option value="Collections en ligne du musée d'Aquitaine">
                <option value="Les objets phares du musé">
                <option value="Acquisitions récentes">
                <option value="Contacter un chargé de collection">
                <option value="Le musée, d'hier à aujourd'hui">
                <option value="Le Centre Jean Moulin">
                <option value="Le musée Goupil">
                <option value="Exposition photographique | 28 août 1944 Libres !">
                <option value="Le parcours 400 000 ans d'histoire(s)">
                <option value="En ligne | Destinées juives à Bordeaux durant la Seconde Guerre mondiale">
                <option value="Musée virtuel d'épigraphie">
                <option value="Archives des expositions temporaires">
                <option value="Agenda">
                <option value="Feuilleter les nouveaux programmes">
                <option value="Accueil des groupes">
                <option value="Relais et publics du champ social">
                <option value="Visiteurs en situation de handicap">
                <option value="S'amuser au musée">
                <option value="Vous êtes guide-conférencier">
                <option value="Bibliothèque">
                <option value="Activités scolaires">
                <option value="Le musée dans la classe">
                <option value="Bienvenue dans la boutique">
                <option value="Idées cadeaux">
                <option value="Librairie">
                <option value="Tirages Félix Arnaudin">
            `;
        }
    });

    // Gère la soumission du formulaire
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const query = searchInput.value.trim().toLowerCase();

        if (searchRoutes[query]) {
            window.location.href = searchRoutes[query];
        } else {
            alert('Aucune page ne correspond à votre recherche.');
        }
    });
    </script>
</body>
</html>