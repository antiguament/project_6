<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Corrección de Conductas Caninas</title>
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

        /* 🔹 Sección de Problemas Comunes */
        .problems-section {
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

        .problems-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .problem-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border-top: 4px solid var(--gold);
        }

        .problem-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .problem-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--black);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .problem-icon {
            color: var(--gold);
            font-size: 1.5rem;
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

        /* 🔹 Sección de Casos de Éxito */
        .success-section {
            padding: 6rem 2rem;
            background: var(--off-white);
        }

        .success-stories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .story-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .story-card h3 {
            color: var(--gold);
            margin-bottom: 1rem;
        }

        .story-progress {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1rem 0;
        }

        .progress-bar {
            flex-grow: 1;
            height: 8px;
            background: var(--gray);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--gold);
            border-radius: 4px;
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

        .popup-form input, .popup-form select, .popup-form textarea {
            padding: 1rem;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
        }

        .popup-form textarea {
            min-height: 100px;
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
            <h1 class="animate">Corrección de Conductas <span>Caninas</span></h1>
            <p class="animate delay-1">Soluciones profesionales y científicas para los problemas de comportamiento más desafiantes en perros.</p>
            <button class="cta-button animate delay-2">¡Agenda una Evaluación!</button>
        </div>
    </section>

    <!-- 🔹 Problemas Comunes Section -->
    <section class="problems-section">
        <div class="container">
            <h2 class="section-title animate">Problemas de Conducta que Tratamos</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Nuestros especialistas en comportamiento canino tienen experiencia resolviendo:</p>
            
            <div class="problems-grid">
                <div class="problem-card animate">
                    <h3><span class="problem-icon">⚠️</span> Agresividad</h3>
                    <p>Hacia personas, otros perros o recursos (comida, juguetes). Identificamos los desencadenantes y trabajamos en modificación conductual.</p>
                </div>
                <div class="problem-card animate delay-1">
                    <h3><span class="problem-icon">🏃</span> Ansiedad por Separación</h3>
                    <p>Destrozos, ladridos excesivos o eliminación inadecuada cuando el perro se queda solo. Programa de desensibilización sistemática.</p>
                </div>
                <div class="problem-card animate delay-2">
                    <h3><span class="problem-icon">🗣️</span> Ladridos Excesivos</h3>
                    <p>Identificamos la causa (aburrimiento, alerta, demanda de atención) y aplicamos técnicas específicas para cada caso.</p>
                </div>
                <div class="problem-card animate delay-1">
                    <h3><span class="problem-icon">🚫</span> Desobediencia</h3>
                    <p>Falta de respuesta a órdenes básicas, ignorar al dueño. Reforzamiento positivo y mejora en la comunicación.</p>
                </div>
                <div class="problem-card animate delay-2">
                    <h3><span class="problem-icon">💩</span> Eliminación Inadecuada</h3>
                    <p>Dentro de casa a pesar de estar educado. Descarte médico y programa de reeducación.</p>
                </div>
                <div class="problem-card animate delay-3">
                    <h3><span class="problem-icon">😨</span> Miedos y Fobias</h3>
                    <p>A ruidos, personas, otros animales u objetos. Técnicas de desensibilización y contracondicionamiento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Métodos Section -->
    <section class="methods-section">
        <div class="container methods-container">
            <div class="methods-content">
                <h2 class="section-title animate">Nuestro Enfoque Científico</h2>
                <p class="animate delay-1">Utilizamos métodos basados en la psicología del aprendizaje y etología canina, evitando técnicas aversivas:</p>
                
                <div class="methods-list">
                    <div class="method-item animate">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Análisis Funcional</h3>
                            <p>Identificamos los antecedentes y consecuencias que mantienen la conducta problemática.</p>
                        </div>
                    </div>
                    <div class="method-item animate delay-1">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Refuerzo Positivo</h3>
                            <p>Premiamos conductas alternativas deseables para sustituir los problemas.</p>
                        </div>
                    </div>
                    <div class="method-item animate delay-2">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Desensibilización Sistemática</h3>
                            <p>Exposición gradual a estímulos que provocan la conducta no deseada.</p>
                        </div>
                    </div>
                    <div class="method-item animate delay-3">
                        <span class="method-icon">✓</span>
                        <div>
                            <h3>Contracondicionamiento</h3>
                            <p>Cambiamos la respuesta emocional del perro ante estímulos específicos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="methods-image animate delay-2">
                <img src="https://images.unsplash.com/photo-1559131397-f94da358a7d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Métodos de corrección canina" style="border-radius: 8px;">
            </div>
        </div>
    </section>

    <!-- 🔹 Casos de Éxito Section -->
    <section class="success-section">
        <div class="container">
            <h2 class="section-title animate">Casos de Éxito</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Transformaciones reales logradas con nuestro programa de corrección conductual</p>
            
            <div class="success-stories">
                <div class="story-card animate">
                    <h3>Thor - Agresividad por miedo</h3>
                    <div class="story-progress">
                        <span>Progreso:</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 90%"></div>
                        </div>
                        <span>90%</span>
                    </div>
                    <p>Pastor Alemán de 3 años que gruñía y mostraba los dientes ante extraños. Tras 8 semanas de trabajo, ahora puede recibir visitas con normalidad.</p>
                </div>
                <div class="story-card animate delay-1">
                    <h3>Luna - Ansiedad por separación</h3>
                    <div class="story-progress">
                        <span>Progreso:</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                        <span>85%</span>
                    </div>
                    <p>Destrozaba muebles y ladraba constantemente cuando se quedaba sola. Después de nuestro programa, puede estar hasta 5 horas tranquila.</p>
                </div>
                <div class="story-card animate delay-2">
                    <h3>Max - Agresión a otros perros</h3>
                    <div class="story-progress">
                        <span>Progreso:</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 95%"></div>
                        </div>
                        <span>95%</span>
                    </div>
                    <p>Reaccionaba violentamente al ver otros perros en paseos. Hoy puede caminar tranquilamente por el parque y tiene amigos caninos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>¿Listo para Transformar la Conducta de tu Perro?</h2>
                <p>Obtén una <strong>evaluación inicial gratuita</strong> y descubre cómo podemos ayudarte.</p>
                <button class="cta-button">¡Quiero Ayuda Profesional!</button>
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
            
            // Enhanced Popup Form for behavior issues
            const createPopup = function() {
                const popupOverlay = document.createElement('div');
                popupOverlay.className = 'popup-overlay';
                
                popupOverlay.innerHTML = `
                    <div class="popup-content">
                        <h3>Evaluación de Conducta</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Tu Nombre" required>
                            <input type="email" placeholder="Tu Email" required>
                            <input type="tel" placeholder="Teléfono">
                            <select required>
                                <option value="" disabled selected>Problema principal de tu perro</option>
                                <option>Agresividad</option>
                                <option>Ansiedad por separación</option>
                                <option>Ladridos excesivos</option>
                                <option>Desobediencia</option>
                                <option>Eliminación inadecuada</option>
                                <option>Miedos y fobias</option>
                                <option>Otro problema</option>
                            </select>
                            <textarea placeholder="Describe el problema y su frecuencia"></textarea>
                            <button type="submit">Solicitar Evaluación</button>
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
                    alert('¡Gracias por tu solicitud! Un especialista en comportamiento canino se pondrá en contacto contigo en menos de 24 horas para programar la evaluación.');
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