<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings & Farewells - Interactive Lesson</title>
    
    <style>
        .flip-card {
            perspective: 1000px;
        }
        .flip-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            backface-visibility: hidden;
        }
        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>
</head>
<body class="bg-blue-50 min-h-screen p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700 mb-2">🌍 Greetings & Farewells</h1>
            <p class="text-lg text-blue-600">Learn how to say hello and goodbye in English!</p>
        </header>

        <!-- Interactive Cards Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6 border-b-2 border-blue-200 pb-2">📌 Flash Cards</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">👋</span>
                            <h3 class="text-xl font-bold text-blue-700">Hello / Hi</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¡Hola!</p>
                            <p class="text-sm text-blue-600 mt-2">Informal greeting</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">🌞</span>
                            <h3 class="text-xl font-bold text-blue-700">Good morning</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¡Buenos días!</p>
                            <p class="text-sm text-blue-600 mt-2">Used until noon</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">🌙</span>
                            <h3 class="text-xl font-bold text-blue-700">Good evening</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¡Buenas noches!</p>
                            <p class="text-sm text-blue-600 mt-2">After 6 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">👋</span>
                            <h3 class="text-xl font-bold text-blue-700">Goodbye / Bye</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¡Adiós!</p>
                            <p class="text-sm text-blue-600 mt-2">Common farewell</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">🕒</span>
                            <h3 class="text-xl font-bold text-blue-700">See you later</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¡Hasta luego!</p>
                            <p class="text-sm text-blue-600 mt-2">When you'll meet again</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="flip-card h-40">
                    <div class="flip-card-inner h-full rounded-lg shadow-lg">
                        <div class="flip-card-front bg-white p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-300">
                            <span class="text-5xl mb-2">😊</span>
                            <h3 class="text-xl font-bold text-blue-700">How are you?</h3>
                        </div>
                        <div class="flip-card-back bg-blue-100 p-6 rounded-lg flex flex-col items-center justify-center border-2 border-blue-400">
                            <p class="text-lg font-medium text-blue-800">¿Cómo estás?</p>
                            <p class="text-sm text-blue-600 mt-2">Responses: I'm fine, thanks / Not bad</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Practice Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6 border-b-2 border-blue-200 pb-2">🎮 Practice Game</h2>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div id="game-container" class="text-center">
                    <h3 class="text-xl font-medium text-blue-700 mb-4">Match the greeting with the correct situation:</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-blue-100 p-4 rounded-lg cursor-pointer hover:bg-blue-200 transition game-option" data-answer="morning">
                            <p class="font-medium">It's 8:00 AM</p>
                        </div>
                        <div class="bg-blue-100 p-4 rounded-lg cursor-pointer hover:bg-blue-200 transition game-option" data-answer="afternoon">
                            <p class="font-medium">It's 3:00 PM</p>
                        </div>
                        <div class="bg-blue-100 p-4 rounded-lg cursor-pointer hover:bg-blue-200 transition game-option" data-answer="evening">
                            <p class="font-medium">It's 7:30 PM</p>
                        </div>
                        <div class="bg-blue-100 p-4 rounded-lg cursor-pointer hover:bg-blue-200 transition game-option" data-answer="hello">
                            <p class="font-medium">Meeting a friend at any time</p>
                        </div>
                    </div>
                    
                    <div id="feedback" class="hidden p-4 rounded-lg mb-4"></div>
                    
                    <button id="check-btn" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Check Answers
                    </button>
                </div>
            </div>
        </section>

        <!-- Dialogue Section -->
        <section>
            <h2 class="text-2xl font-semibold text-blue-800 mb-6 border-b-2 border-blue-200 pb-2">💬 Practice Dialogue</h2>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-3">
                            <span class="font-bold text-blue-700">A:</span>
                        </div>
                        <p class="bg-gray-100 p-3 rounded-lg flex-1">Good morning! How are you today?</p>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-lg mr-3">
                            <span class="font-bold text-green-700">B:</span>
                        </div>
                        <p class="bg-gray-100 p-3 rounded-lg flex-1">I'm fine, thanks! And you?</p>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-3">
                            <span class="font-bold text-blue-700">A:</span>
                        </div>
                        <p class="bg-gray-100 p-3 rounded-lg flex-1">Not bad! See you later!</p>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-lg mr-3">
                            <span class="font-bold text-green-700">B:</span>
                        </div>
                        <p class="bg-gray-100 p-3 rounded-lg flex-1">Goodbye!</p>
                    </div>
                </div>
                
                <div class="mt-6">
                    <h4 class="font-medium text-blue-700 mb-2">Try with a partner:</h4>
                    <ol class="list-decimal pl-5 space-y-2">
                        <li>Practice the dialogue above</li>
                        <li>Create your own using different greetings</li>
                        <li>Try different times of day</li>
                    </ol>
                </div>
            </div>
        </section>

      
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const options = document.querySelectorAll('.game-option');
            const checkBtn = document.getElementById('check-btn');
            const feedback = document.getElementById('feedback');
            
            let selected = null;
            
            options.forEach(option => {
                option.addEventListener('click', function() {
                    options.forEach(opt => opt.classList.remove('ring-2', 'ring-blue-500'));
                    this.classList.add('ring-2', 'ring-blue-500');
                    selected = this;
                });
            });
            
            checkBtn.addEventListener('click', function() {
                if (!selected) {
                    feedback.textContent = "Please select an option first!";
                    feedback.className = "bg-yellow-100 text-yellow-800 p-4 rounded-lg mb-4";
                    feedback.classList.remove('hidden');
                    return;
                }
                
                const correctAnswers = {
                    "morning": "Good morning",
                    "afternoon": "Good afternoon",
                    "evening": "Good evening",
                    "hello": "Hello/Hi"
                };
                
                const userAnswer = selected.dataset.answer;
                const correctGreeting = correctAnswers[userAnswer];
                
                feedback.innerHTML = `
                    <p class="font-medium">Correct! For <span class="text-blue-600">${selected.querySelector('p').textContent}</span>, 
                    you would say: <span class="font-bold text-green-600">${correctGreeting}</span></p>
                    <p class="mt-2">${getExplanation(userAnswer)}</p>
                `;
                feedback.className = "bg-green-100 text-green-800 p-4 rounded-lg mb-4";
                feedback.classList.remove('hidden');
                
                // Reset after 3 seconds
                setTimeout(() => {
                    selected.classList.remove('ring-2', 'ring-blue-500');
                    selected = null;
                    feedback.classList.add('hidden');
                }, 3000);
            });
            
            function getExplanation(answer) {
                const explanations = {
                    "morning": "We say 'Good morning' from sunrise until noon.",
                    "afternoon": "'Good afternoon' is used from noon until about 6 PM.",
                    "evening": "'Good evening' is appropriate after 6 PM.",
                    "hello": "'Hello' or 'Hi' can be used at any time of day."
                };
                return explanations[answer];
            }
        });
    </script>
</body>
</html>