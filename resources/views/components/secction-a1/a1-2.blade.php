<section id="improved-numbers-age" class="bg-gradient-to-br from-[#ffb74d] to-[#ff9800] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Encabezado animado -->
        <div class="text-center mb-16">
            <div class="inline-block relative">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#e65100] mb-4 animate-float">
                    <span class="block">Numbers & Age</span>
                    <span class="text-2xl md:text-3xl font-medium text-white bg-[#ef6c00] px-6 py-2 rounded-full inline-block mt-4 shadow-lg">Learn While Playing!</span>
                </h1>
                <div class="absolute -bottom-4 left-0 right-0 h-4 bg-[#fb8c00] rounded-full mx-auto animate-wave" style="width: 200px;"></div>
            </div>
        </div>

        <!-- Sección de Juegos -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Juego 1: Memory de Números Corregido -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp">
                <div class="flex items-center mb-6">
                    <div class="bg-[#ef6c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Number Memory Game</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Match the numbers with their English words!</p>
                
                <div class="grid grid-cols-4 gap-3" id="number-memory-game">
                    <!-- Las tarjetas se generarán con JavaScript -->
                </div>
                
                <div class="mt-6 flex justify-between items-center">
                    <span id="memory-score" class="text-[#e65100] font-medium">Matches: 0/8</span>
                    <button id="reset-memory" class="bg-[#fb8c00] hover:bg-[#e65100] text-white font-medium py-2 px-4 rounded-lg transition-all">
                        Reset Game
                    </button>
                </div>
            </div>
            
            <!-- Nuevo Juego 2: Age Matching Game -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp" style="animation-delay: 0.2s">
                <div class="flex items-center mb-6">
                    <div class="bg-[#fb8c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Age Matching Game</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Match the age with the correct sentence!</p>
                
                <div class="grid grid-cols-1 gap-3 mb-4" id="age-question-container">
                    <!-- La pregunta se generará con JavaScript -->
                </div>
                
                <div class="grid grid-cols-1 gap-2" id="age-options">
                    <!-- Las opciones se generarán con JavaScript -->
                </div>
                
                <div class="mt-4 text-center">
                    <p id="age-feedback" class="text-[#e65100] font-medium"></p>
                    <p id="age-counter" class="text-sm text-[#fb8c00] mt-2">Correct: 0 | Incorrect: 0</p>
                    <button id="next-age" class="bg-[#fb8c00] hover:bg-[#e65100] text-white font-medium py-2 px-4 rounded-lg mt-3 transition-all hidden">
                        Next Question
                    </button>
                </div>
            </div>
        </div>

        <!-- Sección de Números (conservada) -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 mb-16 animate-fadeInUp" style="animation-delay: 0.4s">
            <div class="flex items-center mb-6">
                <div class="bg-[#e65100] p-3 rounded-xl mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#e65100]">Numbers 1-100</h2>
            </div>
            
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-[#fb8c00] mb-3">1-20:</h3>
                <div class="grid grid-cols-4 sm:grid-cols-5 gap-2 text-center">
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">1 - One</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">2 - Two</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">3 - Three</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">4 - Four</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">5 - Five</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">6 - Six</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">7 - Seven</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">8 - Eight</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">9 - Nine</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">10 - Ten</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">11 - Eleven</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">12 - Twelve</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">13 - Thirteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">14 - Fourteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">15 - Fifteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">16 - Sixteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">17 - Seventeen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">18 - Eighteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">19 - Nineteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">20 - Twenty</div>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold text-[#fb8c00] mb-3">Tens (20-100):</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 text-center">
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">20 - Twenty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">30 - Thirty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">40 - Forty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">50 - Fifty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">60 - Sixty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">70 - Seventy</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">80 - Eighty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">90 - Ninety</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">100 - One hundred</div>
                </div>
            </div>
        </div>
        
        <!-- Sección de Edad (conservada) -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 animate-fadeInUp" style="animation-delay: 0.6s">
            <div class="flex items-center mb-6">
                <div class="bg-[#fb8c00] p-3 rounded-xl mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#e65100]">Asking About Age</h2>
            </div>
            
            <div class="space-y-6">
                <div class="bg-[#fff3e0] p-4 rounded-lg border border-[#ffcc80]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">How to ask:</h3>
                    <p class="text-[#ef6c00] font-medium text-xl">"How old are you?"</p>
                    <p class="text-[#fb8c00] text-sm mt-1">(¿Cuántos años tienes?)</p>
                </div>
                
                <div class="bg-[#fff3e0] p-4 rounded-lg border border-[#ffcc80]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">How to answer:</h3>
                    <p class="text-[#ef6c00] font-medium text-xl">"I am [number] years old."</p>
                    <p class="text-[#fb8c00] text-sm mt-1">(Tengo [número] años.)</p>
                </div>
                
                <div class="bg-[#ffcc80] p-4 rounded-lg border border-[#fb8c00]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">Practice:</h3>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button id="random-age" class="bg-[#e65100] hover:bg-[#bf360c] text-white font-medium py-2 px-4 rounded-lg transition-all">
                            Generate Random Age
                        </button>
                        <div class="flex-1 bg-white p-3 rounded-lg border border-[#fb8c00] text-center">
                            <p id="age-display" class="text-[#e65100] font-bold text-lg">Press the button</p>
                        </div>
                    </div>
                    <p id="age-answer" class="text-[#e65100] font-medium mt-3 text-center hidden"></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Elementos decorativos animados -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-[#fb8c00] rounded-full opacity-10 -translate-x-16 -translate-y-16 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#e65100] rounded-full opacity-10 translate-x-24 translate-y-24 animate-pulse" style="animation-delay: 0.3s"></div>
    <div class="absolute top-1/4 right-10 w-16 h-16 bg-white rounded-full opacity-20 animate-float"></div>
    <div class="absolute bottom-1/3 left-20 w-24 h-24 bg-[#ef6c00] rounded-full opacity-15 animate-float" style="animation-delay: 0.4s"></div>


    {{-- Enlace al archivo CSS específico del componente --}}
    <link rel="stylesheet" href="{{ asset('css/components/secction-a1/a1-2.css') }}">

    {{-- Enlace al archivo JavaScript específico del componente (si es necesario) --}}
    <script src="{{ asset('js/components/secction-a1/a1-2.js') }}"></script>



</section>

<div>
   <p>Componente de prueba</p>
   <script>alert('Este script debería ejecutarse');</script>


   <script>


document.addEventListener('DOMContentLoaded', function() {
        // Datos para el juego de memoria
        const numbersMemory = [
            { number: 7, word: "Seven" },
            { number: 12, word: "Twelve" },
            { number: 20, word: "Twenty" },
            { number: 35, word: "Thirty-five" },
            { number: 8, word: "Eight" },
            { number: 15, word: "Fifteen" },
            { number: 50, word: "Fifty" },
            { number: 100, word: "One hundred" }
        ];
        
        // Variables para el juego de memoria
        let memoryCards = [];
        let flippedCards = [];
        let matches = 0;
        
        // Inicializar el juego de memoria corregido
        function initMemoryGame() {
            const gameContainer = document.getElementById('number-memory-game');
            gameContainer.innerHTML = '';
            flippedCards = [];
            matches = 0;
            document.getElementById('memory-score').textContent = 'Matches: 0/8';
            
            // Duplicar y mezclar las tarjetas
            memoryCards = [];
            numbersMemory.forEach(item => {
                memoryCards.push({ type: 'number', content: item.number, pair: item.word });
                memoryCards.push({ type: 'word', content: item.word, pair: item.number });
            });
            
            // Mezclar las tarjetas
            memoryCards.sort(() => Math.random() - 0.5);
            
            // Crear las tarjetas en el DOM
            memoryCards.forEach((card, index) => {
                const cardElement = document.createElement('div');
                cardElement.className = 'memory-card';
                cardElement.dataset.index = index;
                cardElement.dataset.content = card.content;
                cardElement.dataset.pair = card.pair;
                
                cardElement.addEventListener('click', flipCard);
                gameContainer.appendChild(cardElement);
            });
        }
        
        // Voltear una tarjeta (versión corregida)
        function flipCard(event) {
            const card = event.currentTarget;
            
            // No hacer nada si la tarjeta ya está volteada o emparejada
            if (card.classList.contains('flipped') || flippedCards.length >= 2) {
                return;
            }
            
            // Voltear la tarjeta
            card.classList.add('flipped');
            flippedCards.push(card);
            
            // Comprobar si hay dos tarjetas volteadas
            if (flippedCards.length === 2) {
                const [firstCard, secondCard] = flippedCards;
                
                // Comprobar si son pareja
                if (firstCard.dataset.content === secondCard.dataset.pair || 
                    firstCard.dataset.pair === secondCard.dataset.content) {
                    // Pareja correcta
                    firstCard.classList.add('matched');
                    secondCard.classList.add('matched');
                    matches++;
                    document.getElementById('memory-score').textContent = `Matches: ${matches}/8`;
                    flippedCards = [];
                    
                    // Comprobar si se ha completado el juego
                    if (matches === 8) {
                        setTimeout(() => {
                            alert('🎉 Congratulations! You matched all numbers!');
                        }, 500);
                    }
                } else {
                    // Pareja incorrecta - voltear de nuevo después de un breve retraso
                    setTimeout(() => {
                        firstCard.classList.remove('flipped');
                        secondCard.classList.remove('flipped');
                        flippedCards = [];
                    }, 1000);
                }
            }
        }
        
        // Variables para el nuevo juego de edad
        let currentAge = 0;
        let correctAnswers = 0;
        let incorrectAnswers = 0;
        
        // Datos para el juego de edad
        const ageQuestions = [
            { age: 5, correct: "I am five years old.", incorrects: ["I have five years.", "I am five year old.", "Five years I have."] },
            { age: 12, correct: "I am twelve years old.", incorrects: ["I have twelve years old.", "I am twelve year old.", "Twelve years I am."] },
            { age: 20, correct: "I am twenty years old.", incorrects: ["I have twenty years.", "I am twenty year old.", "Twenty years I have."] },
            { age: 35, correct: "I am thirty-five years old.", incorrects: ["I have thirty-five years.", "I am thirty five years old.", "Thirty-five years I am."] },
            { age: 50, correct: "I am fifty years old.", incorrects: ["I have fifty years.", "I am fifty year old.", "Fifty years I have."] }
        ];
        
        // Inicializar el juego de edad
        function initAgeGame() {
            document.getElementById('age-feedback').textContent = '';
            document.getElementById('next-age').classList.add('hidden');
            updateAgeCounter();
            generateAgeQuestion();
        }
        
        // Generar nueva pregunta de edad
        function generateAgeQuestion() {
            const questionContainer = document.getElementById('age-question-container');
            const optionsContainer = document.getElementById('age-options');
            
            questionContainer.innerHTML = '';
            optionsContainer.innerHTML = '';
            
            // Seleccionar una pregunta aleatoria
            const randomQuestion = ageQuestions[Math.floor(Math.random() * ageQuestions.length)];
            currentAge = randomQuestion.age;
            
            // Mostrar la pregunta
            const questionElement = document.createElement('div');
            questionElement.className = 'age-question';
            questionElement.textContent = `How would you say you are ${currentAge} years old in English?`;
            questionContainer.appendChild(questionElement);
            
            // Generar opciones (1 correcta y 3 incorrectas)
            const options = [randomQuestion.correct, ...randomQuestion.incorrects];
            
            // Mezclar las opciones
            options.sort(() => Math.random() - 0.5);
            
            // Crear los botones de opción
            options.forEach(option => {
                const optionElement = document.createElement('div');
                optionElement.className = 'age-option';
                optionElement.textContent = option;
                
                optionElement.addEventListener('click', function() {
                    checkAgeAnswer(option, randomQuestion.correct);
                });
                
                optionsContainer.appendChild(optionElement);
            });
        }
        
        // Verificar la respuesta en el juego de edad
        function checkAgeAnswer(selectedOption, correctAnswer) {
            const options = document.querySelectorAll('.age-option');
            const feedback = document.getElementById('age-feedback');
            const nextButton = document.getElementById('next-age');
            
            options.forEach(option => {
                option.classList.remove('selected', 'correct', 'incorrect');
                
                if (option.textContent === correctAnswer) {
                    option.classList.add('correct');
                } else if (option.textContent === selectedOption && selectedOption !== correctAnswer) {
                    option.classList.add('incorrect');
                }
                
                // Deshabilitar clics adicionales
                option.style.pointerEvents = 'none';
            });
            
            if (selectedOption === correctAnswer) {
                feedback.textContent = '✅ Correct! Well done!';
                feedback.style.color = '#4caf50';
                correctAnswers++;
            } else {
                feedback.textContent = `❌ Incorrect! The correct answer is: "${correctAnswer}"`;
                feedback.style.color = '#f44336';
                incorrectAnswers++;
            }
            
            updateAgeCounter();
            nextButton.classList.remove('hidden');
        }
        
        // Actualizar el contador de aciertos/errores
        function updateAgeCounter() {
            document.getElementById('age-counter').textContent = 
                `Correct: ${correctAnswers} | Incorrect: ${incorrectAnswers}`;
        }
        
        // Configurar el botón "Next Question"
        document.getElementById('next-age').addEventListener('click', generateAgeQuestion);
        
        // Botón para reiniciar el juego de memoria
        document.getElementById('reset-memory').addEventListener('click', initMemoryGame);
        
        // Generar una edad aleatoria para practicar
        document.getElementById('random-age').addEventListener('click', function() {
            const randomAge = Math.floor(Math.random() * 100) + 1;
            const ageDisplay = document.getElementById('age-display');
            const ageAnswer = document.getElementById('age-answer');
            
            ageDisplay.textContent = randomAge;
            ageAnswer.textContent = `"I am ${randomAge} years old."`;
            ageAnswer.classList.remove('hidden');
        });
        
        // Inicializar los juegos
        initMemoryGame();
        initAgeGame();
    });



   </script>


   <script src="/js/mi-script-externo.js"></script>
</div>


