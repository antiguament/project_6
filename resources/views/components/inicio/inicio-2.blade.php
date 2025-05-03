<style>
    /* Clases únicas con prefijo 'eng-a1-' para evitar colisiones */
    .eng-a1-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }
    
    .eng-a1-topics-container {
        width: 100%;
        background: #f8f9fa;
        padding: 15px;
        box-sizing: border-box;
    }
    
    .eng-a1-content-container {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        border-top: 1px solid #ddd;
    }
    
    .eng-a1-topics-list h2 {
        color: #333;
        margin-bottom: 15px;
        font-size: 1.5rem;
    }
    
    .eng-a1-topic-item {
        padding: 12px 15px;
        margin: 8px 0;
        background: #e9ecef;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .eng-a1-topic-item:hover {
        background: #dee2e6;
        transform: translateX(5px);
    }
    
    .eng-a1-active-topic {
        background: #007bff;
        color: white;
        font-weight: bold;
    }
    
    .eng-a1-default-message {
        color: #666;
        font-style: italic;
        text-align: center;
        margin-top: 30px;
    }
    
    /* Diseño responsive para pantallas más grandes */
    @media (min-width: 768px) {
        .eng-a1-container {
            flex-direction: row;
            height: auto;
            max-width: 1200px;
        }
        
        .eng-a1-topics-container {
            width: 30%;
            height: 100vh;
            overflow-y: auto;
            position: sticky;
            top: 0;
        }
        
        .eng-a1-content-container {
            width: 70%;
            border-top: none;
            border-left: 1px solid #ddd;
            min-height: 100vh;
        }
    }
</style>

<!-- Sección contenedora con clases únicas -->
<section class="eng-a1-container">
    <!-- Contenedor de temas -->
    <div class="eng-a1-topics-container">
        <div class="eng-a1-topics-list">
            <h2>English A1 Topics</h2>
            
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-1')">1. Greetings & Farewells</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-2')">2. Introductions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-3')">3. Personal Information</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-4')">4. Alphabet & Numbers</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-5')">5. Basic Grammar</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-6')">6. Family & Friends</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-7')">7. Time & Daily Routines</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-8')">8. Places & Directions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-9')">9. Food & Drinks</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-10')">10. Physical Descriptions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-11')">11. Hobbies & Free Time</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic('a1-12')">12. Weather</div>
        </div>
    </div>
    
    <!-- Contenedor de contenido -->
    <div class="eng-a1-content-container" id="engA1ContentDisplay">
        <p class="eng-a1-default-message">Select a topic from the list to view its content.</p>
   
   
   
    </div>
</section>

<script>
    // Función mejorada para cargar componentes
    async function loadEngA1Topic(topicId) {
        // Remover clase activa de todos los items
        document.querySelectorAll('.eng-a1-topic-item').forEach(item => {
            item.classList.remove('eng-a1-active-topic');
        });
        
        // Agregar clase activa al item seleccionado
        event.target.classList.add('eng-a1-active-topic');
        
        try {
            // Cargar el componente
            const response = await fetch(`/load-component/${topicId}`);
            const html = await response.text();
            
            // Crear un contenedor temporal
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = html;
            
            // Procesar scripts primero
            const scripts = tempDiv.querySelectorAll('script');
            for (const oldScript of scripts) {
                const newScript = document.createElement('script');
                
                // Copiar todos los atributos
                Array.from(oldScript.attributes).forEach(attr => {
                    newScript.setAttribute(attr.name, attr.value);
                });
                
                // Copiar contenido si es inline
                if (!oldScript.src && oldScript.textContent) {
                    newScript.textContent = oldScript.textContent;
                }
                
                // Reemplazar el script en el HTML temporal
                oldScript.parentNode.replaceChild(newScript, oldScript);
            }
            
            // Insertar el contenido en el contenedor real
            const container = document.getElementById('engA1ContentDisplay');
            container.innerHTML = tempDiv.innerHTML;
            
            // Forzar ejecución de scripts nuevamente por si acaso
            container.querySelectorAll('script').forEach(script => {
                if (script.src) {
                    // Para scripts externos
                    const newScript = document.createElement('script');
                    newScript.src = script.src;
                    document.body.appendChild(newScript).remove();
                } else {
                    // Para scripts inline
                    eval(script.textContent);
                }
            });
            
        } catch (error) {
            console.error('Error loading component:', error);
            document.getElementById('engA1ContentDisplay').innerHTML = 
                '<p class="eng-a1-error-message">Error loading content. Please try again.</p>';
        }
    }
</script>