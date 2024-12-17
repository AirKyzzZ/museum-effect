<head>
    <link rel="icon" href="../images/logo_head.png" type="image/png">
    <link rel="stylesheet" href="../../css/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
                <li class="dropdown">
                    <a href="#">Collections</a>
                    <div class="dropdown-content">
                        <a href="https://musee-aquitaine.opacweb.fr/fr/">Collections en ligne du musée d'Aquitaine</a>
                        <a href="les-objets-phares-du-musee.php">Les objets phares du musée</a>
                        <a href="acquisitions.php">Acquisitions récentes</a>
                        <a href="contacter-un-ou-une-chargee-de-collections.php">Contacter un chargé de collection</a>
                        <a href="Le-musee-d-hier-a-aujourd-hui.php">Le musée, d'hier à aujourd'hui</a>
                        <a href="centre-national-jean-moulin.php">Le Centre Jean Moulin</a>
                        <a href="https://musee-goupil.opacweb.fr/fr/">Le musée Goupil</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Expositions</a>
                    <div class="dropdown-content">
                        <a href="exposition-photographique-28-aout-1944-libres.php">Exposition photographique | 28 août 1944 Libres !</a>
                        <a href="le-parcours-400-000-ans-dhistoire.php">Le parcours 400 000 ans d'histoire(s)</a>
                        <a href="expo-virtuelle-destinees-juives-bordeaux-durant-la-seconde-guerre-mondiale.php">En ligne | Destinées juives à Bordeaux durant la Seconde Guerre mondiale</a>
                        <a href="musee-virtuel-epigraphie.php">Musée virtuel d'épigraphie</a>
                        <a href="archives-des-expositions-temporaires.php">Archives des expositions temporaires</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Visites et Activités</a>
                    <div class="dropdown-content">
                    <a href="Agenda.php">Agenda</a>
                    <a href="Feuilleter-les-nouveaux-programmes.php">Feuilleter les nouveaux programmes</a>
                    <a href="Accueil-des-groupes.php">Accueil des groupes</a>
                    <a href="Relais-et-publics-du-champ-social.php">Relais et publics du champ social</a>
                    <a href="Visiteurs-en-situation-de-handicap.php">Visiteurs en situation de handicap</a>
                    <a href="S-amuser-au-musee.php">S'amuser au musée</a>
                    <a href="Vous-etes-guide-conferencier.php">Vous êtes guide-conférencier</a>
                    <a href="Bibliotheque.php">Bibliothèque</a>
                    <a href="Activites-scolaires.php">Activités scolaires</a>
                    <a href="Le-musee-dans-la-classe.php">Le musée dans la classe</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Boutique</a>
                    <div class="dropdown-content">
                        <a href="Bienvenue-dans-la-boutique.php">Bienvenue dans la boutique</a>
                        <a href="Idees-cadeaux.php">Idées cadeaux</a> 
                        <a href="Librairie.php">Librairie</a>
                        <a href="Tirage-Felix-Arnaudin.php">Tirages Félix Arnaudin</a>
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
                        </datalist>
                        <button type="submit" class="search-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </form>
                </li>
                <li class="cacatoes"><a href="../pages/contact.php">Contactez-nous</a></li>
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
            item.style.transitionDelay = `${index * 0.05}s`;
        });

        const searchRoutes = {
            "collections en ligne du musée d'Aquitaine": "https://musee-aquitaine.opacweb.fr/fr/",
            "les objets phares du musée": "les-objets-phares-du-musee.php",
            "acquisitions récentes": "acquisitions.php",
            "contacter un chargé de collection": "contacter-un-ou-une-chargee-de-collections.php",
            "le musée, d'hier à aujourd'hui": "Le-musee-d-hier-a-aujourd-hui.php",
            "le centre jean moulin": "centre-national-jean-moulin.php",
            "le musée goupil": "https://musee-goupil.opacweb.fr/fr/",
            "exposition photographique | 28 août 1944 libres !": "exposition-photographique-28-aout-1944-libres.php",
            "le parcours 400 000 ans d'histoire(s)": "le-parcours-400-000-ans-dhistoire.php",
            "en ligne | destinées juives à bordeaux durant la seconde guerre mondiale": "expo-virtuelle-destinees-juives-bordeaux-durant-la-seconde-guerre-mondiale.php",
            "musée virtuel d'épigraphie": "musee-virtuel-epigraphie.php",
            "archives des expositions temporaires": "archives-des-expositions-temporaires.php",
            "agenda": "Agenda.php",
            "feuilleter les nouveaux programmes": "Feuilleter-les-nouveaux-programmes.php",
            "accueil des groupes": "Accueil-des-groupes.php",
            "relais et publics du champ social": "Relais-et-publics-du-champ-social.php",
            "visiteurs en situation de handicap": "Visiteurs-en-situation-de-handicap.php",
            "s'amuser au musée": "S-amuser-au-musee.php",
            "vous êtes guide-conférencier": "Vous-etes-guide-conférencier.php",
            "bibliothèque": "Bibliotheque.php",
            "activités scolaires": "Activites-scolaires.php",
            "le musée dans la classe": "Le-musee-dans-la-classe.php",
            "bienvenue dans la boutique": "Bienvenue-dans-la-boutique.php",
            "idées cadeaux": "Idees-cadeaux.php",
            "librairie": "Librairie.php",
            "tirages félix arnaudin": "Tirage-Felix-Arnaudin.php"
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
                    <option value="Les objets phares du musée">
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
