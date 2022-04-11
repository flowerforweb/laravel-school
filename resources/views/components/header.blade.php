<div class="header user-{{ $a }} pos-rel">
            <div class="inner">
                <div class="brand">
                    <i>
                        <em>F</em>lower <em>S</em>pring
                    </i>
                </div>
                <nav class="nav">
                    <ul class="main-nav">
                        <li>
                            <a href="/" class="li-link">
                                <i class="fas fa-home"></i> Accuil
                            </a>
                        </li>
                        <li class="drop-li">
                            <div class="drop niveau">
                                <div class="toggle">
                                    <span>
                                        <i class="fas fa-users"></i> Cours
                                    </span>
                                    <span>
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                                <div class="list" >
                                    <ul>
                                        <li>
                                            <a href="{{route('coursesView')}}">
                                                Deuxieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                troisieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('coursesView')}}">
                                                Tous
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="drop-li">
                            <div class="drop categories">
                                <div class="toggle">
                                    <span>
                                        <i class="fas fa-atom"></i> Categorie
                                    </span>
                                    <span>
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Science
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                mathimatiques
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/" class="li-link">
                                <i class="fas fa-envelope"></i> Contact us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="li-link">
                                About us
                            </a>
                        </li>
                    </ul>
                    <div class="sec-nav">
                        <div class="auth">
                            <button id="logDrop">
                                connexion or inscrire <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="auth-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('login')}}" class="log">
                                            Connexion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}" class="log">
                                            s'inscrire
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>