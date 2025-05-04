<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Obediencia Fundamental Canina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        /* 🎨 Paleta de colores renovada */
        :root {
            --black: #1a1a1a;
            --dark-blue: #0a2540;
            --gold: #d4af37;
            --light-gold: #f5d991;
            --white: #ffffff;
            --off-white: #f8f9fa;
            --gray: #e5e5e5;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* 📱 Estilos base mejorados */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--black);
            line-height: 1.7;
            overflow-x: hidden;
            background-color: var(--off-white);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.3;
            color: var(--dark-blue);
        }

        section {
            padding: 7rem 1.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* 🎯 Botones mejorados */
        .cta-button {
            background: var(--gold);
            color: var(--dark-blue);
            border: none;
            padding: 1.2rem 2.5rem;
            font-size: 1.1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            background: var(--light-gold);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
        }

        .cta-button:active {
            transform: translateY(1px);
        }

        /* 🔹 Sección Hero renovada */
        .hero-section {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--black) 100%);
            color: var(--white);
            padding: 12rem 2rem 10rem;
            text-align: center;
            position: relative;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            margin-bottom: -5rem;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            margin-bottom: 2rem;
            color: var(--white);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content h1 span {
            color: var(--gold);
            display: inline;
        }

        .hero-content p {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            margin-bottom: 3rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        /* 🔹 Sección de Beneficios */
        .benefits-section {
            padding: 8rem 2rem 6rem;
            background: var(--white);
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            font-size: clamp(2rem, 5vw, 3rem);
            position: relative;
            padding-bottom: 1.5rem;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--gold);
            margin: 1.5rem auto 0;
            border-radius: 2px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .benefit-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border: 1px solid rgba(212, 175, 55, 0.2);
            text-align: center;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: rgba(212, 175, 55, 0.4);
        }

        .benefit-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--gold);
        }

        .benefit-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-blue);
        }

        /* 🔹 Sección de Comandos */
        .commands-section {
            padding: 6rem 2rem;
            background: var(--off-white);
        }

        .commands-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 4rem;
            align-items: center;
        }

        .commands-content {
            max-width: 600px;
        }

        .commands-list {
            margin-top: 2.5rem;
        }

        .command-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: var(--transition);
        }

        .command-item:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .command-number {
            background: var(--gold);
            color: var(--dark-blue);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        .command-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark-blue);
        }

        /* 🔹 Sección de Proceso */
        .process-section {
            padding: 6rem 2rem;
            background: var(--white);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
            position: relative;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), var(--light-gold));
            z-index: 1;
        }

        .process-step {
            text-align: center;
            position: relative;
            z-index: 2;
            background: var(--white);
            padding: 0 1rem;
        }

        .step-icon {
            background: var(--dark-blue);
            color: var(--gold);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            font-weight: bold;
            border: 5px solid var(--white);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .process-step h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--dark-blue);
        }

        /* 🔹 Sección CTA mejorada */
        .cta-section {
            padding: 8rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--black) 100%);
            color: var(--white);
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
            margin-top: -3rem;
        }

        .cta-banner {
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            padding: 5rem 2rem;
            border-radius: 12px;
            max-width: 800px;
            margin: 0 auto;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
            z-index: -1;
        }

        .cta-banner h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            margin-bottom: 2rem;
            color: var(--gold);
        }

        .cta-banner p {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* 🎨 Popup mejorado */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 37, 64, 0.9);
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
            padding: 4rem 3rem;
            border-radius: 12px;
            max-width: 500px;
            width: 90%;
            position: relative;
            transform: translateY(20px);
            transition: all 0.3s ease;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .popup-overlay.active .popup-content {
            transform: translateY(0);
        }

        .popup-content h3 {
            text-align: center;
            margin-bottom: 2.5rem;
            color: var(--dark-blue);
            font-size: 1.8rem;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .popup-form input, .popup-form select {
            padding: 1.2rem;
            border: 1px solid var(--gray);
            border-radius: 6px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .popup-form input:focus, .popup-form select:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
        }

        .popup-form button[type="submit"] {
            background: var(--gold);
            color: var(--dark-blue);
            border: none;
            padding: 1.2rem;
            font-size: 1.1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            margin-top: 1rem;
            letter-spacing: 1px;
        }

        .popup-form button[type="submit"]:hover {
            background: var(--light-gold);
        }

        .close-popup {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 1.8rem;
            cursor: pointer;
            color: var(--dark-blue);
            transition: var(--transition);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .close-popup:hover {
            background: rgba(0, 0, 0, 0.05);
            transform: rotate(90deg);
        }

        /* 🎬 Animaciones mejoradas */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .animate {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
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

        /* 📱 Responsive mejorado */
        @media (max-width: 992px) {
            section {
                padding: 5rem 1.5rem;
            }
            
            .hero-section {
                padding: 9rem 2rem 7rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
                margin-bottom: -3rem;
            }
            
            .cta-section {
                clip-path: polygon(0 5%, 100% 0, 100% 100%, 0% 100%);
                padding: 6rem 2rem;
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 4rem 1.5rem;
            }
            
            .hero-section {
                padding: 7rem 1.5rem 5rem;
            }
            
            .commands-container, .process-steps::before {
                grid-template-columns: 1fr;
            }
            
            .process-steps::before {
                display: none;
            }
            
            .process-step {
                text-align: left;
                display: flex;
                align-items: flex-start;
                gap: 1.5rem;
                padding: 0;
            }
            
            .step-icon {
                margin: 0;
                flex-shrink: 0;
            }
            
            .cta-section {
                clip-path: polygon(0 3%, 100% 0, 100% 100%, 0% 100%);
                padding: 5rem 1.5rem;
            }
            
            .popup-content {
                padding: 3rem 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                clip-path: polygon(0 0, 100% 0, 100% 97%, 0 100%);
            }
            
            .cta-section {
                clip-path: polygon(0 2%, 100% 0, 100% 100%, 0% 100%);
            }
            
            .benefit-card, .command-item {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- 🔹 Hero Section renovada -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="animate">Obediencia Fundamental <span>Canina</span></h1>
            <p class="animate delay-1">Transforma la comunicación con tu perro y establece las bases para una relación armoniosa con nuestro programa de obediencia esencial.</p>
            <button class="cta-button animate delay-2">Comenzar Ahora</button>
        </div>
    </section>

    <!-- 🔹 Beneficios Section -->
    <section class="benefits-section">
        <div class="container">
            <h2 class="section-title animate">Beneficios de la Obediencia Básica</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Un perro obediente no solo es más feliz, sino que también fortalece el vínculo con su familia humana.</p>
            
            <div class="benefits-grid">
                <div class="benefit-card animate">
                    <div class="benefit-icon">🦮</div>
                    <h3>Seguridad en Paseos</h3>
                    <p>Control total durante los paseos, evitando tirar de la correa o reacciones impulsivas.</p>
                </div>
                <div class="benefit-card animate delay-1">
                    <div class="benefit-icon">🏡</div>
                    <h3>Convivencia Armónica</h3>
                    <p>Comportamiento adecuado en casa con visitas, niños y otras mascotas.</p>
                </div>
                <div class="benefit-card animate delay-2">
                    <div class="benefit-icon">❤️</div>
                    <h3>Vínculo Fortalecido</h3>
                    <p>Mejora la comunicación y comprensión mutua entre dueño y mascota.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Comandos Section -->
    <section class="commands-section">
        <div class="container commands-container">
            <div class="commands-image animate">
                <img src="https://images.unsplash.com/photo-1588943211346-0908a1fb0b01?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1635&q=80" alt="Perro siguiendo comandos">
            </div>
            <div class="commands-content">
                <h2 class="section-title animate">Comandos Esenciales</h2>
                <p class="animate delay-1">Dominar estos 5 comandos básicos transformará la convivencia con tu perro:</p>
                
                <div class="commands-list">
                    <div class="command-item animate">
                        <div class="command-number">1</div>
                        <div class="command-content">
                            <h3>"Siéntate"</h3>
                            <p>Base para el autocontrol, útil en situaciones de excitación o espera.</p>
                        </div>
                    </div>
                    <div class="command-item animate delay-1">
                        <div class="command-number">2</div>
                        <div class="command-content">
                            <h3>"Quieto"</h3>
                            <p>Fundamental para seguridad en calles, puertas y situaciones de riesgo.</p>
                        </div>
                    </div>
                    <div class="command-item animate delay-2">
                        <div class="command-number">3</div>
                        <div class="command-content">
                            <h3>"Ven"</h3>
                            <p>Llama de emergencia que puede salvar la vida de tu perro.</p>
                        </div>
                    </div>
                    <div class="command-item animate delay-1">
                        <div class="command-number">4</div>
                        <div class="command-content">
                            <h3>"Suelta"</h3>
                            <p>Para soltar objetos peligrosos o no deseados de su boca.</p>
                        </div>
                    </div>
                    <div class="command-item animate delay-2">
                        <div class="command-number">5</div>
                        <div class="command-content">
                            <h3>"Abajo"</h3>
                            <p>Posición de calma para momentos que requieren tranquilidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Proceso Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title animate">Nuestro Método de Enseñanza</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Un proceso gradual y positivo que garantiza resultados duraderos:</p>
            
            <div class="process-steps">
                <div class="process-step animate">
                    <div class="step-icon">1</div>
                    <h3>Evaluación Inicial</h3>
                    <p>Análisis del temperamento y nivel actual de obediencia.</p>
                </div>
                <div class="process-step animate delay-1">
                    <div class="step-icon">2</div>
                    <h3>Entrenamiento Básico</h3>
                    <p>Enseñanza de comandos en ambiente controlado.</p>
                </div>
                <div class="process-step animate delay-2">
                    <div class="step-icon">3</div>
                    <h3>Distracciones Controladas</h3>
                    <p>Práctica con estímulos graduales para generalizar los comandos.</p>
                </div>
                <div class="process-step animate delay-3">
                    <div class="step-icon">4</div>
                    <h3>Entrenamiento en Vida Real</h3>
                    <p>Aplicación en situaciones cotidianas y paseos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 CTA Section mejorada -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>¿Listo para Transformar la Conducta de tu Perro?</h2>
                <p>Obtén un <strong>20% de descuento</strong> en nuestro programa de Obediencia Fundamental al inscribirte hoy.</p>
                <button class="cta-button">¡Quiero el Descuento!</button>
            </div>
        </div>
    </section>

    <script>
        // 📌 Popup Form mejorado
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
            
            // Enhanced Popup Form
            const createPopup = function() {
                const popupOverlay = document.createElement('div');
                popupOverlay.className = 'popup-overlay';
                
                popupOverlay.innerHTML = `
                    <div class="popup-content">
                        <h3>Inscripción al Programa</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Nombre Completo" required>
                            <input type="email" placeholder="Correo Electrónico" required>
                            <input type="tel" placeholder="Teléfono">
                            <select required>
                                <option value="" disabled selected>Nivel de obediencia actual</option>
                                <option>Principiante (ningún comando)</option>
                                <option>Básico (1-2 comandos)</option>
                                <option>Intermedio (3-4 comandos)</option>
                            </select>
                            <button type="submit">Aplicar al Descuento</button>
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
                    alert('¡Gracias por tu interés! Hemos aplicado tu descuento. Un entrenador se pondrá en contacto contigo en las próximas 24 horas para confirmar tu inscripción.');
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