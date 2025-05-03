
    document.addEventListener('DOMContentLoaded', function() {
        // Datos para el juego de emparejamiento
        const greetingsGame = [
            { english: "Good morning", spanish: "Buenos días" },
            { english: "Good afternoon", spanish: "Buenas tardes" },
            { english: "Good evening", spanish: "Buenas noches" },
            { english: "Good night", spanish: "Buenas noches" },
            { english: "Hello", spanish: "Hola" },
            { english: "How are you?", spanish: "¿Cómo estás?" }
        ];
        
        // Datos para el alfabeto
        const alphabetData = [
            { letter: "A", pronunciation: "ei", example: "Apple (manzana)" },
            { letter: "B", pronunciation: "bi", example: "Ball (pelota)" },
            { letter: "C", pronunciation: "si", example: "Cat (gato)" },
            { letter: "D", pronunciation: "di", example: "Dog (perro)" },
            { letter: "E", pronunciation: "i", example: "Elephant (elefante)" },
            { letter: "F", pronunciation: "ef", example: "Fish (pez)" },
            { letter: "G", pronunciation: "yi", example: "Girl (niña)" },
            { letter: "H", pronunciation: "eich", example: "House (casa)" },
            { letter: "I", pronunciation: "ai", example: "Ice (hielo)" },
            { letter: "J", pronunciation: "yei", example: "Juice (jugo)" },
            { letter: "K", pronunciation: "kei", example: "Kite (cometa)" },
            { letter: "L", pronunciation: "el", example: "Lion (león)" },
            { letter: "M", pronunciation: "em", example: "Monkey (mono)" },
            { letter: "N", pronunciation: "en", example: "Nose (nariz)" },
            { letter: "O", pronunciation: "ou", example: "Orange (naranja)" },
            { letter: "P", pronunciation: "pi", example: "Pencil (lápiz)" },
            { letter: "Q", pronunciation: "kiu", example: "Queen (reina)" },
            { letter: "R", pronunciation: "ar", example: "Rainbow (arcoíris)" },
            { letter: "S", pronunciation: "es", example: "Sun (sol)" },
            { letter: "T", pronunciation: "ti", example: "Tree (árbol)" },
            { letter: "U", pronunciation: "iu", example: "Umbrella (paraguas)" },
            { letter: "V", pronunciation: "vi", example: "Violin (violín)" },
            { letter: "W", pronunciation: "dobliu", example: "Water (agua)" },
            { letter: "X", pronunciation: "ex", example: "Xylophone (xilófono)" },
            { letter: "Y", pronunciation: "wai", example: "Yellow (amarillo)" },
            { letter: "Z", pronunciation: "zi", example: "Zebra (cebra)" }
        ];
        
        // Variables para el juego
        let selectedCards = [];
        let matchedPairs = 0;
        
        // Inicializar el juego de emparejamiento
        function initMatchingGame() {
            const gameContainer = document.getElementById('matching-game');
            gameContainer.innerHTML = '';
            document.getElementById('game-feedback').classList.add('hidden');
            matchedPairs = 0;
            
            // Duplicar y mezclar las tarjetas
            const gameCards = [];
            greetingsGame.forEach(item => {
                gameCards.push({ type: 'english', text: item.english });
                gameCards.push({ type: 'spanish', text: item.spanish });
            });
            
            // Mezclar las tarjetas
            gameCards.sort(() => Math.random() - 0.5);
            
            // Crear las tarjetas en el DOM
            gameCards.forEach((card, index) => {
                const cardElement = document.createElement('div');
                cardElement.className = 'matching-card';
                cardElement.textContent = card.text;
                cardElement.dataset.index = index;
                cardElement.dataset.type = card.type;
                cardElement.dataset.value = card.type === 'english' ? 
                    greetingsGame.find(g => g.english === card.text).spanish : 
                    greetingsGame.find(g => g.spanish === card.text).english;
                
                cardElement.addEventListener('click', handleCardClick);
                gameContainer.appendChild(cardElement);
            });
        }
        
        // Manejar clic en las tarjetas
        function handleCardClick(event) {
            const card = event.currentTarget;
            
            // No hacer nada si la tarjeta ya está seleccionada o emparejada
            if (card.classList.contains('selected') || card.classList.contains('correct')) {
                return;
            }
            
            // Seleccionar la tarjeta
            card.classList.add('selected');
            selectedCards.push(card);
            
            // Si hay dos tarjetas seleccionadas, comprobar si son pareja
            if (selectedCards.length === 2) {
                const [firstCard, secondCard] = selectedCards;
                
                if (firstCard.dataset.value === secondCard.textContent) {
                    // Pareja correcta
                    firstCard.classList.remove('selected');
                    secondCard.classList.remove('selected');
                    firstCard.classList.add('correct');
                    secondCard.classList.add('correct');
                    matchedPairs++;
                    
                    // Comprobar si se ha completado el juego
                    if (matchedPairs === greetingsGame.length) {
                        document.getElementById('game-feedback').textContent = '🎉 Congratulations! All matched!';
                        document.getElementById('game-feedback').classList.remove('hidden');
                    }
                    
                    selectedCards = [];
                } else {
                    // Pareja incorrecta
                    document.getElementById('game-feedback').textContent = 'Try again!';
                    document.getElementById('game-feedback').classList.remove('hidden');
                    
                    // Voltear las tarjetas después de un breve retraso
                    setTimeout(() => {
                        firstCard.classList.remove('selected');
                        secondCard.classList.remove('selected');
                        selectedCards = [];
                    }, 800);
                }
            }
        }
        
        // Inicializar el alfabeto
        function initAlphabet() {
            const alphabetContainer = document.getElementById('alphabet-container');
            alphabetContainer.innerHTML = '';
            
            alphabetData.forEach(item => {
                const letterElement = document.createElement('div');
                letterElement.className = 'alphabet-letter';
                letterElement.textContent = item.letter;
                letterElement.dataset.pronunciation = item.pronunciation;
                letterElement.dataset.example = item.example;
                
                letterElement.addEventListener('click', () => {
                    document.getElementById('modal-letter').textContent = item.letter;
                    document.getElementById('modal-pronunciation').textContent = `"${item.pronunciation}"`;
                    document.getElementById('modal-example').textContent = item.example;
                    document.getElementById('letter-modal').classList.remove('hidden');
                });
                
                alphabetContainer.appendChild(letterElement);
            });
        }
        
        // Botón para comprobar respuestas
        document.getElementById('check-answers').addEventListener('click', initMatchingGame);
        
        // Cerrar modal
        document.getElementById('close-modal').addEventListener('click', () => {
            document.getElementById('letter-modal').classList.add('hidden');
        });
        
        // Inicializar los juegos
        initMatchingGame();
        initAlphabet();
    });
