<style>
  :root {
    --black: #0a0a0a;
    --gold: #d4af37;
    --cream: #f5f3ee;
    --white: #ffffff;
    --dark-gray: #1e1e1e;
    --transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
  }

  .premium-video-section {
    padding: 8rem 2rem;
    background: linear-gradient(135deg, var(--dark-gray) 0%, var(--black) 100%);
    color: var(--white);
    position: relative;
    overflow: hidden;
  }

  .premium-container {
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  .section-header {
    text-align: center;
    margin-bottom: 5rem;
  }

  .premium-title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 1.5rem;
    background: linear-gradient(to right, var(--gold), #f5d742);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    display: inline-block;
  }

  .premium-title:after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background: var(--gold);
  }

  .premium-subtitle {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.9;
    line-height: 1.7;
  }

  .video-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 3rem;
    margin-top: 4rem;
  }

  .premium-video-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    transition: var(--transition);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(212, 175, 55, 0.2);
  }

  .premium-video-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
    border-color: rgba(212, 175, 55, 0.4);
  }

  .video-thumb-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
    overflow: hidden;
  }

  .video-thumbnail {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.9);
    transition: var(--transition);
  }

  .premium-video-card:hover .video-thumbnail {
    filter: brightness(1.1);
    transform: scale(1.03);
  }

  .play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(212, 175, 55, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
    z-index: 2;
  }

  .play-button:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 25px solid var(--white);
    left: 53%;
    top: 50%;
    transform: translate(-50%, -50%);
  }

  .premium-video-card:hover .play-button {
    background: var(--gold);
    transform: translate(-50%, -50%) scale(1.1);
  }

  .video-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--gold);
    color: var(--black);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    z-index: 2;
  }

  .video-info-container {
    padding: 2rem;
  }

  .video-category {
    color: var(--gold);
    font-weight: 600;
    font-size: 0.9rem;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
  }

  .video-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
    line-height: 1.3;
  }

  .video-description {
    font-size: 1rem;
    opacity: 0.8;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .video-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.9rem;
    opacity: 0.7;
  }

  .video-duration {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .video-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
  }

  .video-modal-overlay.active {
    opacity: 1;
    visibility: visible;
  }

  .video-modal-container {
    width: 90%;
    max-width: 1200px;
    position: relative;
    transform: translateY(30px);
    transition: var(--transition);
  }

  .video-modal-overlay.active .video-modal-container {
    transform: translateY(0);
  }

  .close-modal {
    position: absolute;
    top: -50px;
    right: 0;
    color: var(--white);
    font-size: 2rem;
    cursor: pointer;
    transition: var(--transition);
  }

  .close-modal:hover {
    color: var(--gold);
  }

  .modal-video-wrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
  }

  .modal-video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 8px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
  }

  .decoration-element {
    position: absolute;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(212, 175, 55, 0.15) 0%, rgba(212, 175, 55, 0) 70%);
    border-radius: 50%;
    z-index: 1;
  }

  .decoration-1 {
    top: -150px;
    right: -150px;
  }

  .decoration-2 {
    bottom: -100px;
    left: -100px;
  }

  @media (max-width: 992px) {
    .video-showcase {
      grid-template-columns: 1fr;
    }
    
    .premium-video-card {
      max-width: 600px;
      margin: 0 auto;
    }
  }

  @media (max-width: 768px) {
    .premium-video-section {
      padding: 6rem 1.5rem;
    }
    
    .section-header {
      margin-bottom: 3rem;
    }
    
    .video-info-container {
      padding: 1.5rem;
    }
    
    .play-button {
      width: 60px;
      height: 60px;
    }
  }
</style>

<!-- Zona Premium de Videos -->
<section class="premium-video-section">
  <div class="decoration-element decoration-1"></div>
  <div class="decoration-element decoration-2"></div>
  
  <div class="premium-container">
    <div class="section-header">
      <h2 class="premium-title">Transformaciones Reales</h2>
      <p class="premium-subtitle">Descubre cómo nuestro método exclusivo ha cambiado la vida de cientos de perros y sus familias. Casos documentados con resultados comprobables.</p>
    </div>
    
    <div class="video-showcase">
      <!-- Video 1 -->
      <div class="premium-video-card">
        <div class="video-thumb-container">
          <img src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Thor antes y después" class="video-thumbnail">
          <div class="play-button" data-video-id="dQw4w9WgXcQ"></div>
          <div class="video-badge">Éxito</div>
        </div>
        <div class="video-info-container">
          <div class="video-category">Agresividad</div>
          <h3 class="video-title">De peligroso a dócil: La transformación de Thor</h3>
          <p class="video-description">Thor, un Pastor Alemán de 2 años con graves problemas de agresividad, logró convertirse en un perro equilibrado y seguro en solo 8 semanas.</p>
          <div class="video-meta">
            <span>Duración: 6:42</span>
            <div class="video-duration">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Ver caso completo</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Video 2 -->
      <div class="premium-video-card">
        <div class="video-thumb-container">
          <img src="https://images.unsplash.com/photo-1601758003122-53c40e686a19?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Luna antes y después" class="video-thumbnail">
          <div class="play-button" data-video-id="dQw4w9WgXcQ"></div>
          <div class="video-badge">Recomendado</div>
        </div>
        <div class="video-info-container">
          <div class="video-category">Ansiedad</div>
          <h3 class="video-title">Luna: De la destrucción a la calma</h3>
          <p class="video-description">Cómo ayudamos a Luna, una Labrador con severa ansiedad por separación, a superar sus miedos y dejar de destruir la casa cuando se queda sola.</p>
          <div class="video-meta">
            <span>Duración: 5:18</span>
            <div class="video-duration">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Ver caso completo</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Video 3 -->
      <div class="premium-video-card">
        <div class="video-thumb-container">
          <img src="https://images.unsplash.com/photo-1554692936-82776f9406c9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Max antes y después" class="video-thumbnail">
          <div class="play-button" data-video-id="dQw4w9WgXcQ"></div>
          <div class="video-badge">Premium</div>
        </div>
        <div class="video-info-container">
          <div class="video-category">Reactividad</div>
          <h3 class="video-title">Max: Paseos pacíficos al fin</h3>
          <p class="video-description">La historia de cómo Max pasó de ser reactivo con otros perros a disfrutar de paseos tranquilos y sociables en el parque.</p>
          <div class="video-meta">
            <span>Duración: 4:55</span>
            <div class="video-duration">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Ver caso completo</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal de Video Premium -->
<div class="video-modal-overlay">
  <div class="video-modal-container">
    <span class="close-modal">&times;</span>
    <div class="modal-video-wrapper">
      <iframe width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<script>
  // Controlador de videos premium
  document.querySelectorAll('.play-button').forEach(button => {
    button.addEventListener('click', function() {
      const videoId = this.getAttribute('data-video-id');
      const modal = document.querySelector('.video-modal-overlay');
      const iframe = modal.querySelector('iframe');
      
      iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&showinfo=0`;
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  // Cerrar modal
  document.querySelector('.close-modal').addEventListener('click', function() {
    const modal = document.querySelector('.video-modal-overlay');
    const iframe = modal.querySelector('iframe');
    
    iframe.src = '';
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
  });

  // Cerrar al hacer clic fuera
  document.querySelector('.video-modal-overlay').addEventListener('click', function(e) {
    if (e.target === this) {
      const iframe = this.querySelector('iframe');
      iframe.src = '';
      this.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
  });
</script>