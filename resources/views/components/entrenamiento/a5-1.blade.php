<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Evaluación Canina Profesional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        /* 🎨 Enhanced Color Palette */
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

        /* 📱 Base Styles */
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

        /* 🎯 Buttons */
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

        .cta-button:active {
            transform: translateY(1px);
        }

        /* 🔹 Enhanced Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1498&q=80') no-repeat center/cover;
            color: var(--white);
            padding: 10rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
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

        /* 🔹 Enhanced Features Grid */
        .features-section {
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: var(--white);
            padding: 2.5rem 2rem;
            border-radius: 8px;
            text-align: center;
            transition: var(--transition);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-top: 4px solid var(--gold);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--gold);
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--black);
        }

        /* 🔹 Enhanced Timeline Process */
        .process-section {
            padding: 6rem 2rem;
            background: var(--white);
            position: relative;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            padding: 3rem 0;
            position: relative;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--gold);
            z-index: 1;
        }

        .timeline-step {
            text-align: center;
            position: relative;
            z-index: 2;
            background: var(--white);
            padding: 0 1rem;
        }

        .step-number {
            background: var(--gold);
            color: var(--black);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-weight: bold;
            font-size: 1.2rem;
            border: 4px solid var(--white);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-step h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--black);
        }

        .timeline-step p {
            color: #666;
            font-size: 0.9rem;
        }

        /* 🔹 Enhanced Testimonials */
        .testimonials-section {
            background: var(--off-white);
            padding: 6rem 2rem;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: var(--white);
            padding: 2.5rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
            transition: var(--transition);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card::before {
            content: '"';
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            color: var(--gold);
            opacity: 0.2;
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }

        .testimonial-card p {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .testimonial-author {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .testimonial-author span {
            font-weight: 600;
            color: var(--black);
        }

        .stars {
            color: var(--gold);
            font-size: 1.1rem;
        }

        /* 🔹 Enhanced CTA Section */
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
            z-index: 1;
        }

        .cta-banner > * {
            position: relative;
            z-index: 2;
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

        .cta-banner strong {
            color: var(--gold);
            font-weight: 700;
        }

        /* 🎨 Popup Styles */
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .popup-overlay.active .popup-content {
            transform: translateY(0);
        }

        .popup-content h3 {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--black);
            font-size: 1.5rem;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .popup-form input {
            width: 100%;
            padding: 1rem;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            transition: var(--transition);
        }

        .popup-form input:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
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
            transition: var(--transition);
        }

        .close-popup:hover {
            color: var(--black);
            transform: rotate(90deg);
        }

        /* 🐕 Dog Paw Cursor (Optional) */
        body.dog-cursor {
            cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%23d4af37" d="M12 2c-2.21 0-4 1.79-4 4 0 1.07.53 2.02 1.34 2.61-.41.25-.76.59-1.02 1-.55-.88-1.5-1.5-2.6-1.5-1.77 0-3.22 1.36-3.42 3.09C1.36 11.22 0 12.77 0 14.5c0 1.61 1.22 2.94 2.8 3.15.28 2.67 2.53 4.85 5.2 4.85s4.92-2.18 5.2-4.85c1.58-.21 2.8-1.54 2.8-3.15 0-1.77-1.36-3.22-3.09-3.42C17.64 9.22 16.23 8 14.5 8c-1.1 0-2.05.62-2.6 1.5-.26-.41-.61-.75-1.02-1 .81-.59 1.34-1.54 1.34-2.61 0-2.21-1.79-4-4-4z"/></svg>'), auto;
        }

        /* 🎬 Animations */
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

        /* 📱 Responsive Adjustments */
        @media (max-width: 768px) {
            section {
                padding: 4rem 1.5rem;
            }

            .timeline {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .timeline::before {
                display: none;
            }

            .timeline-step {
                text-align: left;
                display: flex;
                align-items: flex-start;
                gap: 1.5rem;
            }

            .step-number {
                margin: 0;
                flex-shrink: 0;
            }

            .popup-content {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body class="dog-cursor">
    <!-- 🔹 Enhanced Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="animate">¿Quieres un Perro Obediente y Equilibrado? <span>Comienza con una Evaluación Profesional</span></h1>
            <p class="animate delay-1">Descubre cómo nuestra Evaluación Inicial identifica el comportamiento de tu perro para un plan de entrenamiento 100% personalizado.</p>
            <button class="cta-button animate delay-2">¡Agenda tu Evaluación Gratis!</button>
        </div>
    </section>

    <!-- 🔹 Enhanced Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title animate">¿Por qué es Importante la Evaluación Inicial?</h2>
            <div class="features-grid">
                <div class="feature-card animate">
                    <div class="feature-icon">🐕</div>
                    <h3>Identificamos problemas de conducta ocultos</h3>
                    <p>Nuestros expertos detectan comportamientos que podrían convertirse en problemas graves.</p>
                </div>
                <div class="feature-card animate delay-1">
                    <div class="feature-icon">📋</div>
                    <h3>Creamos un plan adaptado a tu perro</h3>
                    <p>Entrenamiento personalizado según la raza, edad y personalidad de tu mascota.</p>
                </div>
                <div class="feature-card animate delay-2">
                    <div class="feature-icon">🚫</div>
                    <h3>Evitamos métodos genéricos</h3>
                    <p>Soluciones específicas para tu perro, no técnicas estándar que pueden no funcionar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Enhanced Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title animate">Nuestro Proceso de Evaluación</h2>
            <div class="timeline">
                <div class="timeline-step animate">
                    <div class="step-number">1</div>
                    <h3>Formulario Online</h3>
                    <p>Completa nuestro cuestionario detallado sobre el historial de tu perro.</p>
                </div>
                <div class="timeline-step animate delay-1">
                    <div class="step-number">2</div>
                    <h3>Sesión Presencial/Virtual</h3>
                    <p>30-45 minutos de evaluación con nuestro experto en comportamiento canino.</p>
                </div>
                <div class="timeline-step animate delay-2">
                    <div class="step-number">3</div>
                    <h3>Análisis de Datos</h3>
                    <p>Evaluación exhaustiva para identificar patrones y problemas específicos.</p>
                </div>
                <div class="timeline-step animate delay-3">
                    <div class="step-number">4</div>
                    <h3>Plan Personalizado</h3>
                    <p>Recibe un plan detallado para problemas de obediencia, agresividad, ansiedad, etc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Enhanced Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title animate">Dueños Felices, Perros Felices</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card animate">
                    <p>La evaluación de Blackelk cambió completamente a mi perro Rocky. Pasó de ser un perro ansioso y destructivo a un compañero tranquilo y obediente. El plan personalizado fue fácil de seguir y los resultados fueron inmediatos.</p>
                    <div class="testimonial-author">
                        <span>Ana M.</span>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
                <div class="testimonial-card animate delay-1">
                    <p>Finalmente encontré profesionales que entienden la raíz del problema. Mi perra Luna tenía problemas de agresividad y con la evaluación identificaron exactamente qué la desencadenaba. Ahora podemos pasear sin problemas.</p>
                    <div class="testimonial-author">
                        <span>Carlos R.</span>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
                <div class="testimonial-card animate delay-2">
                    <p>Increíble cómo con solo la evaluación inicial ya vimos mejoras. El entrenador identificó que nuestro error era el refuerzo positivo en momentos equivocados. Ahora Max responde perfectamente a las órdenes básicas.</p>
                    <div class="testimonial-author">
                        <span>María L.</span>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Enhanced CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>¡Oferta Especial por Tiempo Limitado!</h2>
                <p>Solo este mes: <strong>20% DE DESCUENTO</strong> en tu primer paquete de entrenamiento al completar la evaluación inicial.</p>
                <button class="cta-button">¡Quiero mi Evaluación Inicial YA!</button>
                <p class="small-text" style="margin-top: 1rem; font-size: 0.8rem;">*Oferta válida para las primeras 20 evaluaciones del mes</p>
            </div>
        </div>
    </section>

    <script>
        // 📌 Enhanced Popup Form
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
                        <h3>¡Agenda tu Evaluación Gratis!</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Tu Nombre" required>
                            <input type="email" placeholder="Tu Email" required>
                            <input type="tel" placeholder="Teléfono (opcional)">
                            <select required>
                                <option value="" disabled selected>¿Qué problema tiene tu perro?</option>
                                <option>Agresividad</option>
                                <option>Ansiedad por separación</option>
                                <option>Problemas de obediencia</option>
                                <option>Comportamiento destructivo</option>
                                <option>Otro</option>
                            </select>
                            <button type="submit">Enviar Solicitud</button>
                        </form>
                        <span class="close-popup">×</span>
                        <p class="small-text" style="margin-top: 1rem; font-size: 0.8rem; text-align: center;">Nos pondremos en contacto contigo en menos de 24 horas</p>
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
                    // Here you would typically send the form data to your server
                    alert('¡Gracias por tu solicitud! Nos pondremos en contacto contigo pronto.');
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
            
            // Optional: Auto-show popup after delay
            setTimeout(() => {
                // Only show if no popup was already opened
                if (!document.querySelector('.popup-overlay')) {
                    const viewedPopup = sessionStorage.getItem('viewedPopup');
                    if (!viewedPopup) {
                        createPopup();
                        sessionStorage.setItem('viewedPopup', 'true');
                    }
                }
            }, 15000); // Show after 15 seconds
        });
    </script>
</body>
</html>