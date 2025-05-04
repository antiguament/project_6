<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackELK - Adiestramiento Canino Profesional</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .hero {
            background: linear-gradient(135deg, #4a4a4a, #1a1a1a);
            padding: 5rem 2rem;
            text-align: center;
            color: white;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .hero:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            opacity: 0.3;
            z-index: 0;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .logo {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #e8c547;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn {
            display: inline-block;
            color: white;
            padding: 0.8rem 1.8rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 0.3rem;
        }

        .btn-primary {
            background-color: #e8c547;
            color: #1a1a1a;
            box-shadow: 0 4px 15px rgba(232, 197, 71, 0.3);
        }

        .btn-primary:hover {
            background-color: #e0b933;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(232, 197, 71, 0.4);
        }

        .btn-secondary {
            background-color: rgba(232, 197, 71, 0.15);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(232, 197, 71, 0.3);
            color: #e8c547;
        }

        .btn-secondary:hover {
            background-color: rgba(232, 197, 71, 0.25);
            transform: translateY(-2px);
        }

        .levels-section {
            padding: 4rem 2rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .levels-section h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .levels-section p.subtitle {
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        .levels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .level-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }

        .level-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .level-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #4a4a4a;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .level-card h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, #e8c547, #d4a72c);
            border-radius: 3px;
        }

        .level-card p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 1rem;
            flex-grow: 1;
        }

        .level-card p strong {
            color: #4a4a4a;
        }

        .card-footer {
            margin-top: auto;
            padding-top: 1rem;
        }

        .btn-card {
            background: linear-gradient(90deg, #e8c547, #d4a72c);
            color: #1a1a1a;
            font-size: 0.9rem;
            padding: 0.6rem 1.5rem;
        }

        .btn-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(232, 197, 71, 0.3);
        }

        .importance-section {
            background: linear-gradient(135deg, #f5f7fa, #e4e8f0);
            padding: 5rem 2rem;
            text-align: center;
            border-radius: 20px 20px 0 0;
            margin-top: 4rem;
        }

        .importance-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .importance-section h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 3rem;
            font-weight: 600;
        }

        .importance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .importance-point {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .importance-point:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .importance-point h4 {
            font-size: 1.2rem;
            color: #e8c547;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .importance-point p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .section-cta {
            text-align: center;
            padding: 3rem 2rem;
            background-color: #1a1a1a;
            color: white;
        }

        .section-cta h3 {
            font-size: 1.8rem;
            color: white;
            margin-bottom: 1.5rem;
        }

        .testimonials {
            padding: 4rem 2rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 3rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: left;
        }

        .testimonial-card p {
            font-style: italic;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }

        .author-info h5 {
            margin: 0;
            color: #4a4a4a;
            font-size: 1rem;
        }

        .author-info p {
            margin: 0;
            font-size: 0.8rem;
            color: #999;
            font-style: normal;
        }

        .nav-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #e8c547, #d4a72c);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a1a;
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(232, 197, 71, 0.3);
            transition: all 0.3s ease;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
        }

        .nav-button.visible {
            opacity: 1;
            visibility: visible;
        }

        .nav-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(232, 197, 71, 0.4);
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1.5rem;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .levels-section, .importance-section, .testimonials, .section-cta {
                padding: 3rem 1.5rem;
            }
            
            .nav-button {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <div class="logo">BlackELK</div>
            <h2>Adiestramiento Canino Profesional</h2>
            <p>Transforma la relación con tu perro mediante métodos científicos y respetuosos</p>
            <div>
                <a href="#programs" class="btn btn-primary">Nuestros Programas</a>
                <a href="#method" class="btn btn-secondary">Nuestro Método</a>
            </div>
        </div>
    </section>

    <section id="programs" class="levels-section">
        <h2>Programas de Adiestramiento</h2>
        <p class="subtitle">Soluciones personalizadas para cada necesidad canina</p>
        
        <div class="levels-grid">
            <div class="level-card">
                <h3>Educación Básica</h3>
                <p><strong>Contenido:</strong> Órdenes básicas (sentado, quieto, ven), paseo sin tirar, socialización.</p>
                <p><strong>Beneficios:</strong> Establece los fundamentos para una convivencia armoniosa.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Más información</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>Modificación de Conducta</h3>
                <p><strong>Contenido:</strong> Tratamiento de miedos, ansiedad por separación, agresividad.</p>
                <p><strong>Beneficios:</strong> Soluciona problemas de comportamiento de raíz.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Más información</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>Adiestramiento Avanzado</h3>
                <p><strong>Contenido:</strong> Órdenes complejas, habilidades especiales, deportes caninos.</p>
                <p><strong>Beneficios:</strong> Estimula mentalmente a tu perro y fortalece vuestro vínculo.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Más información</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>Preparación para Exposiciones</h3>
                <p><strong>Contenido:</strong> Stacking, movimiento en pista, presentación profesional.</p>
                <p><strong>Beneficios:</strong> Optimiza el potencial de tu perro en competiciones.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Más información</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>Terapia Asistida</h3>
                <p><strong>Contenido:</strong> Preparación para intervenciones asistidas con animales.</p>
                <p><strong>Beneficios:</strong> Convierte a tu perro en un agente de cambio social.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Más información</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>Programa Personalizado</h3>
                <p><strong>Contenido:</strong> Entrenamiento a medida según tus necesidades específicas.</p>
                <p><strong>Beneficios:</strong> Soluciones adaptadas a tu situación particular.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Consultar</a>
                </div>
            </div>
        </div>
    </section>

    <section id="method" class="importance-section">
        <div class="importance-container">
            <h2>Nuestro Método BlackELK</h2>
            
            <div class="importance-grid">
                <div class="importance-point">
                    <h4>Refuerzo Positivo</h4>
                    <p>Utilizamos técnicas basadas en premios y refuerzos, nunca en castigos o métodos aversivos.</p>
                    <a href="#" class="btn btn-card">Ver técnicas</a>
                </div>
                
                <div class="importance-point">
                    <h4>Ciencia del Comportamiento</h4>
                    <p>Nuestros métodos están respaldados por estudios científicos sobre aprendizaje animal.</p>
                    <a href="#" class="btn btn-card">Ver estudios</a>
                </div>
                
                <div class="importance-point">
                    <h4>Enfoque Holístico</h4>
                    <p>Consideramos todos los aspectos de la vida del perro: físico, mental y emocional.</p>
                    <a href="#" class="btn btn-card">Ver enfoque</a>
                </div>
                
                <div class="importance-point">
                    <h4>Entrenamiento Individualizado</h4>
                    <p>Cada perro es único y merece un plan de entrenamiento personalizado.</p>
                    <a href="#" class="btn btn-card">Ver ejemplos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>Historias de Éxito</h2>
        <p class="subtitle">Lo que dicen nuestros clientes</p>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"BlackELK transformó completamente la relación con mi pastor alemán. En solo 4 semanas resolvimos problemas de agresividad que llevaban años."</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Cliente satisfecho">
                    <div class="author-info">
                        <h5>María González</h5>
                        <p>Dueña de Thor</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p>"Gracias al programa de educación básica, ahora puedo pasear a mis dos labradores sin que me arrastren. ¡Increíble diferencia!"</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente satisfecho">
                    <div class="author-info">
                        <h5>Carlos Martínez</h5>
                        <p>Dueño de Max y Luna</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p>"Preparamos a nuestro border collie para agility con BlackELK y los resultados han sido espectaculares. ¡Ahora competimos a nivel nacional!"</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Cliente satisfecho">
                    <div class="author-info">
                        <h5>Ana Rodríguez</h5>
                        <p>Dueña de Flash</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-cta">
        <h3>¿Listo para transformar la vida de tu perro?</h3>
        <a href="#programs" class="btn btn-primary">Empieza ahora</a>
    </div>

    <a href="#" class="nav-button">↑</a>

    <script>
        // Scroll suave para todos los enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mostrar/ocultar botón de navegación
        window.addEventListener('scroll', () => {
            const navButton = document.querySelector('.nav-button');
            if (window.scrollY > 300) {
                navButton.classList.add('visible');
            } else {
                navButton.classList.remove('visible');
            }
        });
    </script>
</body>
</html>