<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Seguimiento y Acompañamiento</title>
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

        /* 🔹 Sección de Seguimiento */
        .tracking-section {
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

        .tracking-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tracking-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border-left: 4px solid var(--gold);
            position: relative;
        }

        .tracking-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .step-number {
            position: absolute;
            top: -15px;
            left: -15px;
            background: var(--gold);
            color: var(--black);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .tracking-card h3 {
            margin-bottom: 1rem;
            color: var(--black);
        }

        /* 🔹 Sección de Acompañamiento */
        .support-section {
            padding: 6rem 2rem;
            background: var(--white);
        }

        .support-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            align-items: center;
        }

        .support-content {
            max-width: 600px;
        }

        .support-features {
            margin-top: 2rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .feature-icon {
            color: var(--gold);
            font-size: 1.5rem;
            margin-top: 0.2rem;
        }

        /* 🔹 Sección de Dashboard */
        .dashboard-section {
            padding: 6rem 2rem;
            background: var(--off-white);
        }

        .dashboard-preview {
            max-width: 800px;
            margin: 3rem auto 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .dashboard-preview img {
            display: block;
            width: 100%;
            height: auto;
        }

        .dashboard-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .dashboard-feature {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
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

            .support-container {
                grid-template-columns: 1fr;
            }

            .support-image {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <!-- 🔹 Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="animate">Seguimiento y Acompañamiento <span>Personalizado</span></h1>
            <p class="animate delay-1">Nuestro sistema exclusivo de monitoreo garantiza el éxito en el entrenamiento de tu perro con ajustes continuos y soporte experto.</p>
            <button class="cta-button animate delay-2">Acceder a Mi Panel</button>
        </div>
    </section>

    <!-- 🔹 Seguimiento Section -->
    <section class="tracking-section">
        <div class="container">
            <h2 class="section-title animate">Nuestro Proceso de Seguimiento</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Cada etapa del entrenamiento es monitoreada y ajustada para garantizar los mejores resultados</p>
            
            <div class="tracking-steps">
                <div class="tracking-card animate">
                    <div class="step-number">1</div>
                    <h3>Evaluación Inicial</h3>
                    <p>Análisis completo del perro y establecimiento de objetivos claros y medibles.</p>
                </div>
                <div class="tracking-card animate delay-1">
                    <div class="step-number">2</div>
                    <h3>Plan Personalizado</h3>
                    <p>Diseño de un programa adaptado a las necesidades específicas de tu perro.</p>
                </div>
                <div class="tracking-card animate delay-2">
                    <div class="step-number">3</div>
                    <h3>Sesiones de Entrenamiento</h3>
                    <p>Ejecución del plan con registro detallado de progresos y desafíos.</p>
                </div>
                <div class="tracking-card animate delay-3">
                    <div class="step-number">4</div>
                    <h3>Ajustes Continuos</h3>
                    <p>Modificaciones al programa basadas en el análisis de datos y evolución.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Acompañamiento Section -->
    <section class="support-section">
        <div class="container support-container">
            <div class="support-content">
                <h2 class="section-title animate">Acompañamiento Experto</h2>
                <p class="animate delay-1">Nuestro equipo de especialistas está contigo en cada paso del proceso:</p>
                
                <div class="support-features">
                    <div class="feature-item animate">
                        <span class="feature-icon">✓</span>
                        <div>
                            <h3>Soporte 24/7</h3>
                            <p>Acceso directo a nuestros entrenadores para consultas urgentes.</p>
                        </div>
                    </div>
                    <div class="feature-item animate delay-1">
                        <span class="feature-icon">✓</span>
                        <div>
                            <h3>Videollamadas Semanales</h3>
                            <p>Sesiones en vivo para ajustar técnicas y resolver dudas.</p>
                        </div>
                    </div>
                    <div class="feature-item animate delay-2">
                        <span class="feature-icon">✓</span>
                        <div>
                            <h3>Informes de Progreso</h3>
                            <p>Reportes detallados quincenales con métricas y recomendaciones.</p>
                        </div>
                    </div>
                    <div class="feature-item animate delay-3">
                        <span class="feature-icon">✓</span>
                        <div>
                            <h3>Comunidad Exclusiva</h3>
                            <p>Acceso a grupo privado con otros dueños y especialistas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support-image animate delay-2">
                <img src="https://images.unsplash.com/photo-1583512603805-3cc6b41f3edb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" alt="Entrenador canino" style="border-radius: 8px;">
            </div>
        </div>
    </section>

    <!-- 🔹 Dashboard Section -->
    <section class="dashboard-section">
        <div class="container">
            <h2 class="section-title animate">Panel de Seguimiento Interactivo</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Monitoriza el progreso de tu perro con nuestra plataforma exclusiva</p>
            
            <div class="dashboard-preview animate delay-2">
                <img src="https://via.placeholder.com/800x450?text=Dashboard+de+Seguimiento" alt="Panel de seguimiento">
            </div>
            
            <div class="dashboard-features">
                <div class="dashboard-feature animate">
                    <h3>Registro de Sesiones</h3>
                    <p>Lleva un control detallado de cada entrenamiento con notas y observaciones.</p>
                </div>
                <div class="dashboard-feature animate delay-1">
                    <h3>Gráficos de Progreso</h3>
                    <p>Visualiza la evolución de tu perro en cada habilidad entrenada.</p>
                </div>
                <div class="dashboard-feature animate delay-2">
                    <h3>Recordatorios Automáticos</h3>
                    <p>Nunca olvides una sesión con nuestro sistema de notificaciones.</p>
                </div>
                <div class="dashboard-feature animate delay-3">
                    <h3>Biblioteca de Recursos</h3>
                    <p>Acceso inmediato a videos tutoriales y guías especializadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>Comienza Tu Programa con Acompañamiento</h2>
                <p>Obtén <strong>1 mes gratis</strong> de seguimiento profesional al contratar cualquier plan de entrenamiento.</p>
                <button class="cta-button">¡Quiero Mi Acompañamiento!</button>
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
                        <h3>Accede a Nuestro Sistema</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Nombre Completo" required>
                            <input type="email" placeholder="Correo Electrónico" required>
                            <input type="tel" placeholder="Teléfono">
                            <select required>
                                <option value="" disabled selected>Selecciona tu plan</option>
                                <option>Básico (1 mes)</option>
                                <option>Estándar (3 meses)</option>
                                <option>Premium (6 meses)</option>
                            </select>
                            <button type="submit">Solicitar Acceso</button>
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
                    alert('¡Gracias por tu solicitud! Te enviaremos los datos de acceso a tu correo electrónico.');
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