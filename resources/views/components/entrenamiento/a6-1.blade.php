<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Especialización en Enseñanza Canina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        /* 🎨 Paleta de colores profesional */
        :root {
            --black: #1a1a1a;
            --dark-black: #0d0d0d;
            --gold: #d4af37;
            --light-gold: #e8c874;
            --white: #ffffff;
            --off-white: #f8f8f8;
            --gray: #e5e5e5;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* 📱 Estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--black);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.2;
        }

        section {
            padding: 6rem 1.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* 🎯 Botones */
        .cta-button {
            background: var(--gold);
            color: var(--black);
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cta-button:hover {
            background: var(--light-gold);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* 🔹 Sección Hero */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1498&q=80') no-repeat center/cover;
            color: var(--white);
            padding: 10rem 2rem;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .hero-content h1 span {
            color: var(--gold);
            display: block;
        }

        .hero-content p {
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        /* 🔹 Sección de Especialidades */
        .specialties-section {
            padding: 6rem 2rem;
            background: var(--off-white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            color: var(--black);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--gold);
            margin: 1rem auto 0;
        }

        .specialties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .specialty-card {
            background: var(--white);
            padding: 2.5rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border-top: 4px solid var(--gold);
        }

        .specialty-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .specialty-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--gold);
        }

        .specialty-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--black);
        }

        /* 🔹 Sección de Métodos */
        .methods-section {
            padding: 6rem 2rem;
            background: var(--white);
        }

        .methods-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            align-items: center;
        }

        .methods-content {
            max-width: 600px;
        }

        .methods-list {
            margin-top: 2rem;
        }

        .method-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .method-icon {
            color: var(--gold);
            font-size: 1.5rem;
            margin-top: 0.2rem;
        }

        /* 🔹 Sección de Certificaciones */
        .certifications-section {
            padding: 6rem 2rem;
            background: var(--off-white);
        }

        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .certification-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .certification-card:hover {
            transform: translateY(-5px);
        }

        .certification-logo {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin: 0 auto 1rem;
        }

        /* 🔹 Sección CTA */
        .cta-section {
            padding: 6rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, var(--dark-black) 0%, var(--black) 100%);
            color: var(--white);
        }

        .cta-banner {
            background: var(--black);
            color: var(--white);
            padding: 4rem 2rem;
            border-radius: 8px;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .cta-banner h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            margin-bottom: 1.5rem;
            color: var(--gold);
        }

        .cta-banner p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        /* 🎨 Popup */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .popup-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .popup-content {
            background: var(--white);
            padding: 3rem;
            border-radius: 8px;
            max-width: 500px;
            width: 90%;
            position: relative;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .popup-overlay.active .popup-content {
            transform: translateY(0);
        }

        .popup-content h3 {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--black);
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .popup-form input, .popup-form select {
            padding: 1rem;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
        }

        .popup-form button[type="submit"] {
            background: var(--gold);
            color: var(--black);
            border: none;
            padding: 1rem;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            margin-top: 1rem;
        }

        .popup-form button[type="submit"]:hover {
            background: var(--light-gold);
        }

        .close-popup {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        /* 🎬 Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        /* 📱 Responsive */
        @media (max-width: 768px) {
            section {
                padding: 4rem 1.5rem;
            }

            .methods-container {
                grid-template-columns: 1fr;
            }

            .methods-image {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <!-- 🔹 Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="animate">Especialización en Enseñanza Canina <span>Profesional</span></h1>
            <p class="animate delay-1">Domina las técnicas avanzadas de adiestramiento canino con nuestro programa de especialización certificado por las principales organizaciones internacionales.</p>
            <button class="cta-button animate delay-2">¡Inscríbete Ahora!</button>
        </div>
    </section>

    <!-- 🔹 Especialidades Section -->
    <section class="specialties-section">
        <div class="container">
            <h2 class="section-title animate">Nuestras Áreas de Especialización</h2>
            <div class="specialties-grid">
                <div class="specialty-card animate">
                    <div class="specialty-icon">🐕‍🦺</div>
                    <h3>Adiestramiento de Perros de Trabajo</h3>
                    <p>Técnicas avanzadas para perros policía, rescate, terapia y servicio. Certificación internacional incluida.</p>
                </div>
                <div class="specialty-card animate delay-1">
                    <div class="specialty-icon">🧠</div>
                    <h3>Modificación de Conducta</h3>
                    <p>Especialización en problemas de agresividad, ansiedad por separación y miedos fóbicos.</p>
                </div>
                <div class="specialty-card animate delay-2">
                    <div class="specialty-icon">🏆</div>
                    <h3>Entrenamiento Deportivo</h3>
                    <p>Preparación para competiciones de agility, obedience, IPO y otros deportes caninos.</p>
                </div>
                <div class="specialty-card animate delay-3">
                    <div class="specialty-icon">👶</div>
                    <h3>Terapia Asistida con Animales</h3>
                    <p>Formación en intervenciones asistidas con perros para centros educativos y de salud.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Métodos Section -->
    <section class="methods-section">
        <div class="container methods-container">
            <div class="methods-content">
                <h2 class="section-title animate">Métodos Científicos de Enseñanza</h2>
                <p class="animate delay-1">Nuestro programa se basa en los últimos avances en etología canina y psicología del aprendizaje, combinando:</p>
                
                <div class="methods-list">
                    <div class="method-item animate">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Refuerzo Positivo</h3>
                            <p>Técnicas basadas en premios y motivación intrínseca</p>
                        </div>
                    </div>
                    <div class="method-item animate delay-1">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Clicker Training</h3>
                            <p>Precisión en la marcación de comportamientos</p>
                        </div>
                    </div>
                    <div class="method-item animate delay-2">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Manejo de Contingencias</h3>
                            <p>Modificación ambiental para moldear conductas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="methods-image animate delay-2">
                <img src="https://images.unsplash.com/photo-1559131397-f94da358a7d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Entrenamiento canino profesional" style="border-radius: 8px;">
            </div>
        </div>
    </section>

    <!-- 🔹 Certificaciones Section -->
    <section class="certifications-section">
        <div class="container">
            <h2 class="section-title animate">Certificaciones Internacionales</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Nuestro programa está avalado por las organizaciones más prestigiosas del mundo canino:</p>
            
            <div class="certifications-grid">
                <div class="certification-card animate">
                    <img src="https://via.placeholder.com/150x150?text=ICAN" alt="ICAN" class="certification-logo">
                    <h3>ICAN</h3>
                    <p>International Companion Animal Network</p>
                </div>
                <div class="certification-card animate delay-1">
                    <img src="https://via.placeholder.com/150x150?text=CCPDT" alt="CCPDT" class="certification-logo">
                    <h3>CCPDT</h3>
                    <p>Certification Council for Professional Dog Trainers</p>
                </div>
                <div class="certification-card animate delay-2">
                    <img src="https://via.placeholder.com/150x150?text=FCI" alt="FCI" class="certification-logo">
                    <h3>FCI</h3>
                    <p>Fédération Cynologique Internationale</p>
                </div>
                <div class="certification-card animate delay-3">
                    <img src="https://via.placeholder.com/150x150?text=IAABC" alt="IAABC" class="certification-logo">
                    <h3>IAABC</h3>
                    <p>International Association of Animal Behavior Consultants</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>Conviértete en Instructor Certificado</h2>
                <p>Únete a nuestro próximo grupo de especialización con <strong>20% de descuento</strong> para las primeras 10 inscripciones.</p>
                <button class="cta-button">¡Quiero Más Información!</button>
            </div>
        </div>
    </section>

    <script>
        // 📌 Popup Form
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation classes when scrolling
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.animate, .delay-1, .delay-2, .delay-3');
                const windowHeight = window.innerHeight;
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const elementVisible = 100;
                    
                    if (elementPosition < windowHeight - elementVisible) {
                        element.classList.add('animate');
                    }
                });
            };
            
            // Run once on load
            animateOnScroll();
            
            // Run on scroll
            window.addEventListener('scroll', animateOnScroll);
            
            // Popup Form
            const createPopup = function() {
                const popupOverlay = document.createElement('div');
                popupOverlay.className = 'popup-overlay';
                
                popupOverlay.innerHTML = `
                    <div class="popup-content">
                        <h3>Solicita Información</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Nombre Completo" required>
                            <input type="email" placeholder="Correo Electrónico" required>
                            <input type="tel" placeholder="Teléfono">
                            <select required>
                                <option value="" disabled selected>Área de interés</option>
                                <option>Perros de Trabajo</option>
                                <option>Modificación de Conducta</option>
                                <option>Entrenamiento Deportivo</option>
                                <option>Terapia Asistida</option>
                            </select>
                            <button type="submit">Enviar Solicitud</button>
                        </form>
                        <span class="close-popup">×</span>
                    </div>
                `;
                
                document.body.appendChild(popupOverlay);
                
                // Show popup with animation
                setTimeout(() => {
                    popupOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }, 10);
                
                // Close popup
                popupOverlay.querySelector('.close-popup').addEventListener('click', () => {
                    popupOverlay.classList.remove('active');
                    document.body.style.overflow = 'auto';
                    setTimeout(() => {
                        popupOverlay.remove();
                    }, 300);
                });
                
                // Form submission
                const form = popupOverlay.querySelector('form');
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('¡Gracias por tu interés! Nos pondremos en contacto contigo pronto con toda la información.');
                    popupOverlay.classList.remove('active');
                    document.body.style.overflow = 'auto';
                    setTimeout(() => {
                        popupOverlay.remove();
                    }, 300);
                });
                
                // Close when clicking outside
                popupOverlay.addEventListener('click', function(e) {
                    if (e.target === popupOverlay) {
                        popupOverlay.classList.remove('active');
                        document.body.style.overflow = 'auto';
                        setTimeout(() => {
                            popupOverlay.remove();
                        }, 300);
                    }
                });
            };
            
            // Attach popup to all CTA buttons
            document.querySelectorAll('.cta-button').forEach(button => {
                button.addEventListener('click', createPopup);
            });
        });
    </script>
</body>
</html>