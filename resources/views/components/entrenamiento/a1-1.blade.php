<!-- 🔹 Hero Section -->
<section class="hero-section">
  <div class="hero-content">
    <h1>¿Quieres un Perro Obediente y Equilibrado? <span>Comienza con una Evaluación Profesional</span></h1>
    <p>Descubre cómo nuestra Evaluación Inicial identifica el comportamiento de tu perro para un plan de entrenamiento 100% personalizado.</p>
    <button class="cta-button">¡Agenda tu Evaluación Gratis!</button>
  </div>
</section>

<!-- 🔹 Sección 1: Importancia Evaluación -->
<section class="features-section">
  <h2>¿Por qué es Importante la Evaluación Inicial?</h2>
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon">🐕</div>
      <h3>Identificamos problemas de conducta ocultos</h3>
    </div>
    <div class="feature-card">
      <div class="feature-icon">📋</div>
      <h3>Creamos un plan adaptado a tu perro</h3>
    </div>
    <div class="feature-card">
      <div class="feature-icon">🚫</div>
      <h3>Evitamos métodos genéricos</h3>
    </div>
  </div>
</section>

<!-- 🔹 Sección 2: Proceso de Evaluación -->
<section class="process-section">
  <h2>Proceso de Evaluación</h2>
  <div class="timeline">
    <div class="timeline-step">
      <div class="step-number">1</div>
      <h3>Formulario Online</h3>
      <p>Historial del perro</p>
    </div>
    <div class="timeline-step">
      <div class="step-number">2</div>
      <h3>Sesión Presencial/Virtual</h3>
      <p>30-45 min con experto</p>
    </div>
    <div class="timeline-step">
      <div class="step-number">3</div>
      <h3>Análisis de Datos</h3>
      <p>Informe detallado</p>
    </div>
    <div class="timeline-step">
      <div class="step-number">4</div>
      <h3>Plan Personalizado</h3>
      <p>Obediencia, agresividad, etc.</p>
    </div>
  </div>
</section>

<!-- 🔹 Sección 3: Testimonios -->
<section class="testimonials-section">
  <h2>Dueños Felices, Perros Felices</h2>
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <p>"La evaluación de Blackelk cambió a mi perro. Ahora es tranquilo y obediente."</p>
      <div class="testimonial-author">
        <span>Ana M.</span>
        <div class="stars">★★★★★</div>
      </div>
    </div>
    <div class="testimonial-card">
      <p>"Profesionales que entienden la raíz del problema."</p>
      <div class="testimonial-author">
        <span>Carlos R.</span>
        <div class="stars">★★★★★</div>
      </div>
    </div>
  </div>
</section>

<!-- 🔹 Sección 4: Cierre + CTA -->
<section class="cta-section">
  <div class="cta-banner">
    <h2>¡Oferta Limitada!</h2>
    <p>Solo este mes: <strong>20% OFF</strong> en tu primer paquete de entrenamiento al completar la evaluación.</p>
    <button class="cta-button">¡Quiero mi Evaluación Inicial YA!</button>
  </div>
</section>

<style>
    /* 🎨 Paleta: Negro, dorado, blanco */
:root {
  --black: #1a1a1a;
  --gold: #d4af37;
  --white: #ffffff;
}

/* 🔹 Hero Section */
.hero-section {
  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1498&q=80') no-repeat center/cover;
  color: var(--white);
  padding: 8rem 2rem;
  text-align: center;
}

.hero-content h1 {
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-content p {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

/* 🔹 Features Grid */
.features-section {
  padding: 5rem 2rem;
  background: var(--white);
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.feature-card {
  background: #f9f9f9;
  padding: 2rem;
  border-radius: 8px;
  text-align: center;
  transition: transform 0.3s;
}

.feature-card:hover {
  transform: translateY(-10px);
}

.feature-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

/* 🔹 Timeline Proceso */
.timeline {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 1rem;
  padding: 3rem 0;
}

.timeline-step {
  flex: 1;
  min-width: 200px;
  text-align: center;
  position: relative;
}

.step-number {
  background: var(--gold);
  color: var(--black);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1rem;
  font-weight: bold;
}

/* 🔹 Testimonios */
.testimonials-section {
  background: #f5f5f5;
  padding: 5rem 2rem;
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-top: 2rem;
}

.testimonial-card {
  background: var(--white);
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.stars {
  color: var(--gold);
}

/* 🔹 CTA Final */
.cta-section {
  padding: 5rem 2rem;
  text-align: center;
}

.cta-banner {
  background: var(--black);
  color: var(--white);
  padding: 3rem;
  border-radius: 8px;
  max-width: 800px;
  margin: 0 auto;
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
  transition: all 0.3s;
  font-weight: bold;
}

.cta-button:hover {
  background: #c9a227;
  transform: scale(1.05);
}
</style>


<script>
    // 📌 Popup de Evaluación (aparece al hacer clic en CTA)
document.querySelectorAll('.cta-button').forEach(button => {
  button.addEventListener('click', () => {
    const popup = document.createElement('div');
    popup.className = 'popup-form';
    popup.innerHTML = `
      <div class="popup-content">
        <h3>¡Agenda tu Evaluación!</h3>
        <form>
          <input type="text" placeholder="Nombre" required>
          <input type="email" placeholder="Email" required>
          <input type="tel" placeholder="Teléfono">
          <button type="submit">Enviar</button>
        </form>
        <span class="close-popup">×</span>
      </div>
    `;
    document.body.appendChild(popup);

    // Cerrar popup
    popup.querySelector('.close-popup').addEventListener('click', () => {
      popup.remove();
    });
  });
});

// 🎨 Efecto hover en tarjetas (ya incluido en CSS)
</script>