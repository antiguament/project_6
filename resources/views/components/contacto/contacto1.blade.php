<section class="contact-section">
    <div class="contact-content">
        <h2>Contáctanos</h2>
        <p>
            ¿Listo para comenzar el viaje de transformación de tu perro?  ¡Contáctanos hoy mismo para agendar tu evaluación inicial gratuita!
        </p>
        <div class="contact-details">
            <div class="contact-detail">
                <i class="fas fa-phone"></i>
                <p>Teléfono: +123 456 7890</p>
            </div>
            <div class="contact-detail">
                <i class="fas fa-envelope"></i>
                <p>Email: info@blackelk.com</p>
            </div>
            <div class="contact-detail">
                <i class="fas fa-map-marker-alt"></i>
                <p>Dirección: 123 Calle Principal, Ciudad, Estado</p>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <h3>Formulario de Contacto</h3>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="cta-button">Enviar Mensaje</button>
        </form>
    </div>
</section>

<style>
.contact-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5rem 2rem;
    background-color: #f5f5f5;
    color: var(--black);
}

.contact-content {
    text-align: left;
    padding-right: 0;
    margin-bottom: 3rem;
    max-width: 100%;
}

.contact-content h2 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
    color: var(--gold);
    font-family: 'Playfair Display', serif;
    text-align: center;
}

.contact-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    font-family: 'Montserrat', sans-serif;
}

.contact-details {
    margin-bottom: 2rem;
}

.contact-detail {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.contact-detail i {
    font-size: 1.5rem;
    margin-right: 1rem;
    color: var(--gold);
}

.contact-form {
    background: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
}

.contact-form h3 {
    font-size: 1.8rem;
    margin-bottom: 2rem;
    color: var(--black);
    font-family: 'Playfair Display', serif;
    text-align: center;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: var(--black);
    font-family: 'Montserrat', sans-serif;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    font-family: 'Montserrat', sans-serif;
}

.form-group textarea {
    resize: vertical;
    height: 100px;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--gold);
    box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.25);
}

@media (min-width: 768px) {
    .contact-section {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
    }
    .contact-content {
        padding-right: 2rem;
        margin-bottom: 0;
        max-width: 60%;
    }
    .contact-form {
        width: 40%;
        margin-top: 0;
    }
    .contact-content h2{
        text-align: left;
    }
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Aquí puedes agregar la lógica para enviar el formulario (por ejemplo, usando fetch)
    console.log(`Nombre: ${name}, Email: ${email}, Mensaje: ${message}`);

    // Mostrar un mensaje de éxito (puedes usar una librería como SweetAlert)
    alert('¡Mensaje enviado con éxito!');

    // Limpiar el formulario
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
});
</script>
