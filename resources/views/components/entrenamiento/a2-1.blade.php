<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackelk | Socialización Básica Canina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        /* 🎨 Paleta de colores cálida y acogedora */
        :root {
            --dark-teal: #2a5a5a;
            --light-teal: #4a8c8c;
            --cream: #f5f0e6;
            --soft-orange: #e8b15a;
            --dark-orange: #d4943a;
            --white: #ffffff;
            --light-gray: #e8e8e8;
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* 📱 Estilos base mejorados */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-teal);
            line-height: 1.7;
            overflow-x: hidden;
            background-color: var(--cream);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.3;
            color: var(--dark-teal);
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
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        /* 🎯 Botones cálidos */
        .cta-button {
            background: var(--soft-orange);
            color: var(--dark-teal);
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
            box-shadow: 0 4px 15px rgba(232, 177, 90, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            background: var(--dark-orange);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(212, 148, 58, 0.4);
            color: var(--white);
        }

        .cta-button:active {
            transform: translateY(1px);
        }

        /* 🔹 Sección Hero cálida */
        .hero-section {
            background: linear-gradient(135deg, var(--dark-teal) 0%, var(--light-teal) 100%);
            color: var(--cream);
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
            color: var(--cream);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-content h1 span {
            color: var(--soft-orange);
            display: inline;
        }

        .hero-content p {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            margin-bottom: 3rem;
            opacity: 0.9;
            line-height: 1.8;
            color: var(--cream);
        }

        /* 🔹 Sección de Importancia */
        .importance-section {
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
            background: var(--soft-orange);
            margin: 1.5rem auto 0;
            border-radius: 2px;
        }

        .importance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .importance-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border: 1px solid rgba(232, 177, 90, 0.2);
            text-align: center;
        }

        .importance-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: rgba(232, 177, 90, 0.4);
        }

        .importance-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--light-teal);
        }

        .importance-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-teal);
        }

        /* 🔹 Sección de Etapas */
        .stages-section {
            padding: 6rem 2rem;
            background: var(--cream);
        }

        .stages-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 4rem;
            align-items: center;
        }

        .stages-content {
            max-width: 600px;
        }

        .stages-list {
            margin-top: 2.5rem;
        }

        .stage-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: var(--transition);
            border-left: 4px solid var(--soft-orange);
        }

        .stage-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .stage-number {
            background: var(--light-teal);
            color: var(--cream);
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

        .stage-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark-teal);
        }

        /* 🔹 Sección de Entornos */
        .environments-section {
            padding: 6rem 2rem;
            background: var(--white);
        }

        .environments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .environment-card {
            background: var(--cream);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid rgba(232, 177, 90, 0.2);
        }

        .environment-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .environment-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--light-teal);
        }

        /* 🔹 Sección CTA mejorada */
        .cta-section {
            padding: 8rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, var(--dark-teal) 0%, var(--light-teal) 100%);
            color: var(--cream);
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
            margin-top: -3rem;
        }

        .cta-banner {
            background: rgba(255, 255, 255, 0.1);
            color: var(--cream);
            padding: 5rem 2rem;
            border-radius: 12px;
            max-width: 800px;
            margin: 0 auto;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(232, 177, 90, 0.3);
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
            background: radial-gradient(circle, rgba(232, 177, 90, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
            z-index: -1;
        }

        .cta-banner h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            margin-bottom: 2rem;
            color: var(--soft-orange);
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
            background: rgba(42, 90, 90, 0.95);
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
            background: var(--cream);
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
            color: var(--dark-teal);
            font-size: 1.8rem;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .popup-form input, .popup-form select {
            padding: 1.2rem;
            border: 1px solid var(--light-gray);
            border-radius: 6px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--white);
        }

        .popup-form input:focus, .popup-form select:focus {
            outline: none;
            border-color: var(--soft-orange);
            box-shadow: 0 0 0 3px rgba(232, 177, 90, 0.2);
        }

        .popup-form button[type="submit"] {
            background: var(--soft-orange);
            color: var(--dark-teal);
            border: none;
            padding: 1.2rem;
            font-size: 1.1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            letter-spacing: 1px;
        }

        .popup-form button[type="submit"]:hover {
            background: var(--dark-orange);
            color: var(--white);
        }

        .close-popup {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 1.8rem;
            cursor: pointer;
            color: var(--dark-teal);
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
            
            .stages-container {
                grid-template-columns: 1fr;
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
            
            .importance-card, .stage-item {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- 🔹 Hero Section cálida -->
    <section class="hero-section">
        <div class="container hero-content">
            <h1 class="animate">Socialización <span>Canina</span> Básica</h1>
            <p class="animate delay-1">Desarrolla las habilidades sociales de tu perro para una vida más equilibrada y feliz con nuestro programa especializado.</p>
            <button class="cta-button animate delay-2">Comenzar Socialización</button>
        </div>
    </section>

    <!-- 🔹 Importancia Section -->
    <section class="importance-section">
        <div class="container">
            <h2 class="section-title animate">¿Por qué es crucial la socialización?</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Un perro bien socializado es más seguro, equilibrado y capaz de adaptarse a diversas situaciones.</p>
            
            <div class="importance-grid">
                <div class="importance-card animate">
                    <div class="importance-icon">😊</div>
                    <h3>Confianza</h3>
                    <p>Reduce el miedo y la ansiedad en situaciones nuevas, creando un perro más seguro de sí mismo.</p>
                </div>
                <div class="importance-card animate delay-1">
                    <div class="importance-icon">🐕</div>
                    <h3>Relaciones Caninas</h3>
                    <p>Mejora la interacción con otros perros, previniendo conflictos y promoviendo juegos saludables.</p>
                </div>
                <div class="importance-card animate delay-2">
                    <div class="importance-icon">👨‍👩‍👧</div>
                    <h3>Convivencia Familiar</h3>
                    <p>Facilita la adaptación a diferentes entornos y personas, incluyendo niños y ancianos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Etapas Section -->
    <section class="stages-section">
        <div class="container stages-container">
            <div class="stages-image animate">
                <img src="https://images.unsplash.com/photo-1559131397-f94da358a7d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Perros socializando">
            </div>
            <div class="stages-content">
                <h2 class="section-title animate">Etapas Clave de Socialización</h2>
                <p class="animate delay-1">Nuestro programa aborda todas las fases críticas del desarrollo social canino:</p>
                
                <div class="stages-list">
                    <div class="stage-item animate">
                        <div class="stage-number">1</div>
                        <div class="stage-content">
                            <h3>Período Sensible (3-14 semanas)</h3>
                            <p>Exposición controlada a diversos estímulos para crear experiencias positivas fundamentales.</p>
                        </div>
                    </div>
                    <div class="stage-item animate delay-1">
                        <div class="stage-number">2</div>
                        <div class="stage-content">
                            <h3>Juventud (3-6 meses)</h3>
                            <p>Refuerzo de interacciones positivas y manejo de situaciones desafiantes.</p>
                        </div>
                    </div>
                    <div class="stage-item animate delay-2">
                        <div class="stage-number">3</div>
                        <div class="stage-content">
                            <h3>Adolescencia (6-18 meses)</h3>
                            <p>Socialización continua para consolidar comportamientos adecuados.</p>
                        </div>
                    </div>
                    <div class="stage-item animate delay-1">
                        <div class="stage-number">4</div>
                        <div class="stage-content">
                            <h3>Edad Adulta</h3>
                            <p>Mantenimiento y corrección de posibles problemas de socialización.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 Entornos Section -->
    <section class="environments-section">
        <div class="container">
            <h2 class="section-title animate">Entornos de Socialización</h2>
            <p class="animate delay-1" style="text-align: center; max-width: 800px; margin: 0 auto;">Trabajamos en diversos contextos para una socialización completa:</p>
            
            <div class="environments-grid">
                <div class="environment-card animate">
                    <div class="environment-icon">🏡</div>
                    <h3>Hogar</h3>
                    <p>Visitas, ruidos domésticos y convivencia con la familia.</p>
                </div>
                <div class="environment-card animate delay-1">
                    <div class="environment-icon">🌳</div>
                    <h3>Parques</h3>
                    <p>Interacción con otros perros en áreas controladas.</p>
                </div>
                <div class="environment-card animate delay-2">
                    <div class="environment-icon">🛒</div>
                    <h3>Ciudad</h3>
                    <p>Tráfico, multitudes y ruidos urbanos.</p>
                </div>
                <div class="environment-card animate delay-3">
                    <div class="environment-icon">🚗</div>
                    <h3>Transporte</h3>
                    <p>Viajes en coche, transporte público y visitas al veterinario.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🔹 CTA Section mejorada -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner animate">
                <h2>¿Listo para mejorar la socialización de tu perro?</h2>
                <p>Obtén un <strong>sesión de evaluación gratuita</strong> para identificar las necesidades específicas de tu mascota.</p>
                <button class="cta-button">¡Quiero la Evaluación Gratis!</button>
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
                        <h3>Evaluación de Socialización</h3>
                        <form class="popup-form">
                            <input type="text" placeholder="Nombre Completo" required>
                            <input type="email" placeholder="Correo Electrónico" required>
                            <input type="tel" placeholder="Teléfono">
                            <select required>
                                <option value="" disabled selected>Edad de tu perro</option>
                                <option>Cachorro (2-6 meses)</option>
                                <option>Joven (6-18 meses)</option>
                                <option>Adulto (1.5-7 años)</option>
                                <option>Senior (7+ años)</option>
                            </select>
                            <select required>
                                <option value="" disabled selected>Principal desafío de socialización</option>
                                <option>Miedo a otros perros</option>
                                <option>Miedo a personas</option>
                                <option>Miedo a entornos nuevos</option>
                                <option>Exceso de excitación</option>
                                <option>Agresividad</option>
                            </select>
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
                    alert('¡Gracias por tu interés! Un especialista en comportamiento canino se pondrá en contacto contigo en menos de 24 horas para programar tu evaluación gratuita.');
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