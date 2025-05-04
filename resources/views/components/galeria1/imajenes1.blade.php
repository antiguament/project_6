<section class="gallery-section">
    <h2>Momentos Blackelk</h2>
    <div class="gallery-grid">
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Perro feliz corriendo en el parque">
            <div class="overlay">
                <h3>Alegría en el Parque</h3>
                <p>¡La felicidad de un perro libre!</p>
            </div>
        </div>
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1572879405677-4f5194652931?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Perro aprendiendo a dar la pata">
             <div class="overlay">
                <h3>Aprendiendo Juntos</h3>
                <p>Desarrollando obediencia con amor.</p>
            </div>
        </div>
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Perro recibiendo un premio">
             <div class="overlay">
                <h3>Recompensa al Esfuerzo</h3>
                <p>Reforzando el buen comportamiento.</p>
            </div>
        </div>
        <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1598133894008-61f7fdb8cc3a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dueño y perro abrazados">
            <div class="overlay">
                <h3>Conexión Incondicional</h3>
                <p>Fortaleciendo el vínculo humano-canino.</p>
            </div>
        </div>
    </div>
</section>

<style>
.gallery-section {
    padding: 5rem 2rem;
    text-align: center;
    background-color: #f9f9f9;
}

.gallery-section h2 {
    font-size: 2.2rem;
    margin-bottom: 3rem;
    color: var(--gold);
    font-family: 'Playfair Display', serif;
}


.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.gallery-card {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.gallery-card:hover {
    transform: translateY(-5px);
}


.gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.gallery-card .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: var(--white);
    opacity: 0;
    transition: opacity 0.3s;
    padding: 1rem;
    text-align: center;
}

.gallery-card:hover .overlay {
    opacity: 1;
}

.gallery-card .overlay h3 {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.gallery-card .overlay p {
    font-size: 0.9rem;
    font-family: 'Montserrat', sans-serif;
}
</style>
