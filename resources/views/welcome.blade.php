<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U.E. Villa Pusuma - Educación Musical</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset y Variables Globales */
        :root {
            --primary: #2A5C82;
            --secondary: #38C8A8;
            --accent: #FFD700;
            --light: #F8F9FA;
            --dark: #1A1A1A;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui;
        }

        body {
            background: var(--light);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header y Navegación Responsive */
        .header {
            background: var(--primary);
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            transition: var(--transition);
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
        }

        .nav-menu {
            display: flex;
            gap: 1rem;
            list-style: none;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: var(--light);
            text-decoration: none;
            padding: 0.8rem 1rem;
            border-radius: 30px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-link:hover {
            background: var(--secondary);
        }

        /* Submenús */
        .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 220px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 0.5rem 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
            z-index: 1000;
        }

        .nav-item:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .submenu-item {
            padding: 0.5rem 1rem;
        }

        .submenu-link {
            color: var(--primary);
            text-decoration: none;
            display: block;
            padding: 0.8rem;
            border-radius: 6px;
            transition: var(--transition);
        }

        .submenu-link:hover {
            background: var(--light);
            padding-left: 1.5rem;
        }

        /* Perfil de Usuario */
        .profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            min-width: 200px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 1rem;
            z-index: 1000;
        }

        .profile-dropdown.active {
            display: block;
        }

        .profile-info {
            text-align: center;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .profile-info img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        .profile-menu {
            list-style: none;
            margin-top: 1rem;
        }

        .profile-menu li {
            margin: 0.5rem 0;
        }

        .profile-menu a {
            color: var(--primary);
            text-decoration: none;
            display: block;
            padding: 0.5rem;
            border-radius: 6px;
            transition: var(--transition);
        }

        .profile-menu a:hover {
            background: var(--light);
        }

        /* Sección Hero */
        .hero {
            margin-top: 80px;
            height: 70vh;
            background: linear-gradient(rgba(42,92,130,0.9), rgba(56,200,168,0.8)),
                        url('intro/images/banner.jpg') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 2rem;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--primary);
                flex-direction: column;
                padding: 1rem;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-item {
                margin: 0.5rem 0;
            }

            .submenu {
                position: static;
                opacity: 1;
                visibility: visible;
                background: transparent;
                box-shadow: none;
                margin-left: 1rem;
            }

            .submenu-link {
                color: white;
            }

            .profile-dropdown {
                position: static;
                box-shadow: none;
                background: transparent;
            }

            .profile-info {
                display: none;
            }

            .profile-menu a {
                color: white;
            }
        }
        
        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .cta-buttons {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--secondary);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(56,200,168,0.4);
        }

        /* Sección Destacada */
        .features {
            padding: 5rem 2rem;
            background: white;
        }

        .features-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            padding: 2rem;
            border-radius: 15px;
            background: var(--light);
            text-align: center;
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        /* Footer Mejorado */
        .footer {
            background: var(--primary);
            color: white;
            padding: 4rem 2rem;
            margin-top: 5rem;
        }

        .footer-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1.5rem;
            color: var(--accent);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

    </style>
</head>
<body>
    <!-- Header Responsive -->
    <header class="header">
        <div class="container">
            <nav class="nav-container">
                <div class="logo">
                    <img src="intro/images/logo1.png" alt="Logo U.E. Villa Pusuma">
                </div>

                <div class="menu-toggle" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item">
                        <a href="{{url('/welcome')}}" class="nav-link">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('himno')}}" class="nav-link">
                            <i class="fas fa-music"></i> Himnos
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="#" class="submenu-link">Himno Nacional</a>
                            </li>
                            <li class="submenu-item">
                                <a href="#" class="submenu-link">Himnos Departamentales</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('contenidoinicio')}}" class="nav-link">
                            <i class="fas fa-book-open"></i> Contenido
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('juego')}}" class="nav-link">
                            <i class="fas fa-gamepad"></i> Juegos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('piano')}}" class="nav-link">
                            <i class="fas fa-guitar"></i> Instrumentos
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{url('piano')}}" class="submenu-link">Piano Digital</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{url('zampona')}}" class="submenu-link">Zampoña Virtual</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Perfil de Usuario -->
                    <li class="nav-item">
                    
                        <div class="nav-link" id="profile-toggle">
                            <i class="fas fa-user-circle"></i> Perfil
                        </div>
                            <div class="profile-dropdown" id="profile-dropdown">
                                <div class="profile-info">
                                    <img src="intro/images/profile.jpg" alt="Foto de perfil">
                                    <h4>Nombre Usuario</h4>
                                    <p>usuario@example.com</p>
                                </div>

                                    <ul class="profile-menu">
                                
                                        <li><a href="#"><i class="fas fa-user"></i> Mi Perfil</a></li>
                                        
                                        @if (Route::has('login'))
                                        <li><a href="/login"><i class="fas fa-sign-in"></i> Logueo</a></li> 
                                        @auth
                                        @can ('dashboard') 
                                        <li> <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Sistema</a></li> 
                                        @endcan
                                        @else
                                        <li><a href="/register"><i class="fas fa-user-plus"></i> Registro</a></li>
                                        @endauth
                                    
                                        <li><a href="#"><i class="fas fa-cog"></i>Configuración</a></li>
                                        
                                    
                                        <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
                                            </a>
                                        </form>  
                                        </li>
                                        @endif 
                                        
                                        
                                    </ul>
                            </div
                
                        </li>   
                         
                </ul>
            </nav>
        </div>
    </header>

      <!-- Sección Hero Mejorada -->
      <section class="hero">
        <div class="hero-content">
            <h1>Descubre el Mundo de la Música</h1>
            <p>Aprende, juega y crea con nuestros recursos interactivos</p>
            
            <div class="cta-buttons">
                <a href="{{url('contenidoinicio')}}" class="btn btn-primary">
                    <i class="fas fa-play-circle"></i> Comenzar
                </a>
                <a href="{{url('juego')}}" class="btn btn-primary">
                    <i class="fas fa-gamepad"></i> Juegos
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Características -->
    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-compact-disc feature-icon"></i>
                <h3>Himnos Nacionales</h3>
                <p>Aprende los himnos patrióticos con letras interactivas y acompañamiento musical</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-guitar feature-icon"></i>
                <h3>Instrumentos Virtuales</h3>
                <p>Practica con nuestro piano digital, zampoña virtual y otros instrumentos interactivos</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-puzzle-piece feature-icon"></i>
                <h3>Juegos Educativos</h3>
                <p>Refuerza tus conocimientos musicales con juegos interactivos y desafíos</p>
            </div>
        </div>
    </section>

    <!-- Footer Mejorado -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Provincia Ingavi, Bolivia</li>
                    <li><i class="fas fa-phone"></i> +591 67066488</li>
                    <li><i class="fas fa-envelope"></i> contacto@uevillapusuma.bo</li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="{{url('/welcome')}}">Inicio</a></li>
                    <li><a href="{{url('himno')}}">Himnos</a></li>
                    <li><a href="{{url('juego')}}">Juegos</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Redes Sociales</h3>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Control del menú responsive
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.getElementById('nav-menu');
        const profileToggle = document.getElementById('profile-toggle');
        const profileDropdown = document.getElementById('profile-dropdown');

        // Toggle menú móvil
        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Toggle perfil
        profileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('active');
        });

        // Cerrar menús al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-menu')) {
                navMenu.classList.remove('active');
            }
            if (!e.target.closest('.profile-dropdown') && !e.target.closest('#profile-toggle')) {
                profileDropdown.classList.remove('active');
            }
        });

        // Cerrar menú al cambiar tamaño de pantalla
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                navMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>