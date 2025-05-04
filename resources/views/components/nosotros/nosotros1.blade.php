<section class="about-us-section">
    <div class="about-us-content">
        <h2>Nuestra Pasión: Transformar Vidas Caninas</h2>
        <p>
            En Blackelk, somos un equipo de adiestradores caninos certificados con una profunda pasión por mejorar la relación entre los dueños y sus perros.  Nuestra filosofía se basa en el respeto, la paciencia y la comprensión del comportamiento canino.
        </p>
        <p>
            Creemos que cada perro es único y merece un enfoque de entrenamiento personalizado.  Nos dedicamos a proporcionar las herramientas y el conocimiento necesarios para que los dueños puedan comunicarse eficazmente con sus compañeros caninos, construyendo un vínculo de confianza y amor duradero.
        </p>
        <p>
            Nuestro compromiso va más allá de la obediencia básica.  Nos esforzamos por abordar las necesidades individuales de cada perro, ya sea que se trate de problemas de comportamiento, ansiedad o simplemente el deseo de mejorar sus habilidades sociales.  Con Blackelk, tu perro no solo aprenderá a obedecer, sino que también ganará confianza, equilibrio y felicidad.
        </p>
    </div>
    <div class="about-us-image">
        <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Adiestrador canino trabajando con un perro">
    </div>
</section>

<style>
.about-us-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5rem 2rem;
    background-color: var(--white);
    color: var(--black);
}

.about-us-content {
    text-align: left;
    padding-right: 0;
    margin-bottom: 3rem;
    max-width: 100%;
}

.about-us-content h2 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
    color: var(--gold);
    font-family: 'Playfair Display', serif;
    text-align: center;
}

.about-us-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    font-family: 'Montserrat', sans-serif;
}

.about-us-image {
    width: 100%;
    max-width: 500px;
    margin-top: 0;
}

.about-us-image img {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

@media (min-width: 768px) {
    .about-us-section {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
    }
    .about-us-content {
        padding-right: 2rem;
        margin-bottom: 0;
        max-width: 60%;
    }
    .about-us-image {
        margin-top: 0;
        width: 40%;
    }
    .about-us-content h2{
        text-align: left;
    }
}
</style>
