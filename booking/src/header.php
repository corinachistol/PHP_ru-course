<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- brand name -->
            <a class="navbar-brand" href="/">XEBOOKING</a>
            <!-- toggle button , responsiveness -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- link navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a 
                        href="?page=support"  
                        class="nav-link <?= ($page == 'support') ? 'active' : '' ?> ">Support</a>
                </li>

                <li class="nav-item">
                    <a 
                        href="?page=contacts" 
                        class="nav-link <?= ($page == 'contacts') ? 'active' : '' ?>">Contacts</a>
                </li>

                <li class="nav-item">
                    <a href="?page=tours" class="nav-link <?= ($page == 'tours') ? 'active' : '' ?>">Tour Catalog</a>
                </li>
            </ul>
            <!-- search form -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

</header>