
<section class="english-learning-module font-sans max-w-6xl mx-auto p-6 rounded-2xl bg-gradient-to-br from-indigo-50 to-blue-50 shadow-xl">
  <!-- Module Header -->
  <header class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-indigo-800">English Adventure</h1>
    <div class="level-indicator flex items-center">
      <span class="mr-2 text-sm font-medium text-gray-600">Level 1</span>
      <div class="w-24 h-3 bg-gray-200 rounded-full overflow-hidden">
        <div class="h-full bg-green-500 progress-bar" style="width: 0%"></div>
      </div>
    </div>
  </header>

  <!-- Main Content Area -->
  <div class="module-container grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Topic Navigation -->
    <aside class="topic-nav md:col-span-1 bg-white p-5 rounded-xl shadow-md">
      <h2 class="text-xl font-semibold text-indigo-700 mb-4 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
        </svg>
        Topics
      </h2>
      <ul class="space-y-2">
        <li><button class="topic-btn w-full text-left px-4 py-2 rounded-lg transition-all hover:bg-indigo-50 hover:text-indigo-600 active:scale-95" data-topic="greetings">1. Greetings & Farewells</button></li>
        <li><button class="topic-btn w-full text-left px-4 py-2 rounded-lg transition-all hover:bg-indigo-50 hover:text-indigo-600 active:scale-95" data-topic="introductions">2. Personal Introductions</button></li>
        <li><button class="topic-btn w-full text-left px-4 py-2 rounded-lg transition-all hover:bg-indigo-50 hover:text-indigo-600 active:scale-95" data-topic="information">3. Personal Information</button></li>
        <li><button class="topic-btn w-full text-left px-4 py-2 rounded-lg transition-all hover:bg-indigo-50 hover:text-indigo-600 active:scale-95" data-topic="alphabet">4. Alphabet & Numbers</button></li>
        <li><button class="topic-btn w-full text-left px-4 py-2 rounded-lg transition-all hover:bg-indigo-50 hover:text-indigo-600 active:scale-95" data-topic="grammar">5. Basic Grammar</button></li>
      </ul>
    </aside>

    <!-- Active Learning Area -->
    <main class="learning-area md:col-span-2 bg-white p-6 rounded-xl shadow-md relative overflow-hidden">
      <!-- Default state before topic selection -->
      <div class="welcome-screen text-center py-12">
        <div class="animate-bounce mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
          </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-3">Welcome to English Adventure!</h2>
        <p class="text-gray-600 mb-6">Select a topic to begin your learning journey. Earn points as you progress!</p>
        <button class="start-tour-btn px-6 py-2 bg-indigo-600 text-white rounded-full font-medium hover:bg-indigo-700 transition-all transform hover:scale-105 active:scale-95 shadow-md">
          Take Quick Tour
        </button>
      </div>

      <!-- Dynamic content will be loaded here -->
      <div class="topic-content hidden">
        <div class="topic-header flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-indigo-700 topic-title"></h2>
          <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium topic-badge"></span>
        </div>
        
        <div class="lesson-content mb-6"></div>
        
        <div class="interactive-section">
          <div class="practice-area p-4 bg-gray-50 rounded-lg mb-4"></div>
          <div class="feedback-area hidden p-4 rounded-lg mb-4"></div>
          <button class="check-answer-btn px-4 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-all mr-3 hidden">
            Check Answer
          </button>
          <button class="next-btn px-4 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-all hidden">
            Continue
          </button>
        </div>
      </div>
    </main>
  </div>

  <!-- Progress & Achievements -->
  <footer class="mt-8 flex flex-wrap justify-between items-center">
    <div class="score-card bg-white p-4 rounded-xl shadow-md mb-4 md:mb-0 flex items-center">
      <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div>
        <p class="text-sm text-gray-500">Your Score</p>
        <p class="text-xl font-bold text-indigo-700"><span class="current-score">0</span> points</p>
      </div>
    </div>
    
    <div class="achievements flex space-x-2">
      <div class="achievement-badge w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center tooltip" data-tooltip="Complete first lesson">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="achievement-badge w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center tooltip" data-tooltip="Score 50 points">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="achievement-badge w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center tooltip" data-tooltip="Complete all topics">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
      </div>
    </div>
  </footer>
</section>

<style>
  /* Custom animations and styles */
  .english-learning-module {
    animation: fadeIn 0.6s ease-out;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  .topic-btn.active {
    background-color: #6366f1;
    color: white;
  }
  
  .progress-bar {
    transition: width 0.5s ease;
  }
  
  .tooltip {
    position: relative;
  }
  
  .tooltip:hover::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #333;
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    white-space: nowrap;
    margin-bottom: 5px;
    z-index: 10;
  }
  
  .correct-feedback {
    animation: correctAnswer 0.6s ease;
  }
  
  @keyframes correctAnswer {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  .incorrect-feedback {
    animation: shake 0.5s ease;
  }
  
  @keyframes shake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-5px); }
    40%, 80% { transform: translateX(5px); }
  }
  
  .achievement-unlocked {
    animation: bounce 0.8s ease, glow 1.5s ease infinite alternate;
  }
  
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
  }
  
  @keyframes glow {
    from { box-shadow: 0 0 5px -5px #fbbf24; }
    to { box-shadow: 0 0 10px 5px #fbbf24; }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Module state
    const state = {
      currentTopic: null,
      score: 0,
      progress: 0,
      completedTopics: []
    };
    
    // Topic data
    const topics = {
      greetings: {
        title: "Greetings & Farewells",
        content: `
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Common Greetings</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">👋</span>
                <div>
                  <p class="font-medium">Hello / Hi</p>
                  <p class="text-sm text-gray-600">¡Hola!</p>
                </div>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">🌞</span>
                <div>
                  <p class="font-medium">Good morning</p>
                  <p class="text-sm text-gray-600">Buenos días</p>
                </div>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">🌆</span>
                <div>
                  <p class="font-medium">Good afternoon</p>
                  <p class="text-sm text-gray-600">Buenas tardes</p>
                </div>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">🌙</span>
                <div>
                  <p class="font-medium">Good evening</p>
                  <p class="text-sm text-gray-600">Buenas noches</p>
                </div>
              </div>
            </div>
            
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Farewells</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">👋</span>
                <div>
                  <p class="font-medium">Goodbye / Bye</p>
                  <p class="text-sm text-gray-600">Adiós</p>
                </div>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg flex items-center">
                <span class="text-lg mr-3">🔄</span>
                <div>
                  <p class="font-medium">See you later</p>
                  <p class="text-sm text-gray-600">Hasta luego</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dialogue-example bg-white p-5 rounded-xl border border-gray-200 mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Example Conversation</h3>
            <div class="space-y-3">
              <div class="flex items-start">
                <div class="bg-indigo-100 p-2 rounded-lg mr-3">A:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">Good morning! How are you?</div>
              </div>
              <div class="flex items-start">
                <div class="bg-green-100 p-2 rounded-lg mr-3">B:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">I'm fine, thanks! And you?</div>
              </div>
              <div class="flex items-start">
                <div class="bg-indigo-100 p-2 rounded-lg mr-3">A:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">I'm good. See you later!</div>
              </div>
              <div class="flex items-start">
                <div class="bg-green-100 p-2 rounded-lg mr-3">B:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">Bye!</div>
              </div>
            </div>
          </div>
        `,
        practice: {
          type: "matching",
          question: "Match the English phrases with their Spanish equivalents",
          pairs: [
            ["Good morning", "Buenos días"],
            ["Goodbye", "Adiós"],
            ["How are you?", "¿Cómo estás?"],
            ["See you later", "Hasta luego"],
            ["I'm fine", "Estoy bien"]
          ]
        }
      },
      introductions: {
        title: "Personal Introductions",
        content: `
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Basic Introduction Phrases</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">What's your name?</p>
                <p class="text-sm text-gray-600">¿Cómo te llamas?</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">My name is [name]</p>
                <p class="text-sm text-gray-600">Me llamo [nombre]</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">Nice to meet you!</p>
                <p class="text-sm text-gray-600">¡Mucho gusto!</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">How old are you?</p>
                <p class="text-sm text-gray-600">¿Cuántos años tienes?</p>
              </div>
            </div>
          </div>
          
          <div class="dialogue-example bg-white p-5 rounded-xl border border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Example Conversation</h3>
            <div class="space-y-3">
              <div class="flex items-start">
                <div class="bg-indigo-100 p-2 rounded-lg mr-3">A:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">Hello! What's your name?</div>
              </div>
              <div class="flex items-start">
                <div class="bg-green-100 p-2 rounded-lg mr-3">B:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">My name is Carlos. Nice to meet you!</div>
              </div>
              <div class="flex items-start">
                <div class="bg-indigo-100 p-2 rounded-lg mr-3">A:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">Nice to meet you too! How old are you?</div>
              </div>
              <div class="flex items-start">
                <div class="bg-green-100 p-2 rounded-lg mr-3">B:</div>
                <div class="flex-1 bg-gray-50 p-2 rounded-lg">I'm 25 years old.</div>
              </div>
            </div>
          </div>
        `,
        practice: {
          type: "fill-blank",
          question: "Complete the conversation with the correct phrases",
          dialogue: [
            {
              speaker: "A",
              text: "Hello! _____?",
              answer: "What's your name"
            },
            {
              speaker: "B",
              text: "_____ Maria. _____!",
              answer: "My name is,Nice to meet you"
            },
            {
              speaker: "A",
              text: "_____ too! _____?",
              answer: "Nice to meet you,How old are you"
            },
            {
              speaker: "B",
              text: "_____ 20 _____.",
              answer: "I'm,years old"
            }
          ]
        }
      },
      information: {
        title: "Personal Information",
        content: `
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Countries & Nationalities</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇪🇸</span>
                <div>
                  <p class="font-medium">Spain</p>
                  <p class="text-sm text-gray-600">Spanish</p>
                </div>
              </div>
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇫🇷</span>
                <div>
                  <p class="font-medium">France</p>
                  <p class="text-sm text-gray-600">French</p>
                </div>
              </div>
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇩🇪</span>
                <div>
                  <p class="font-medium">Germany</p>
                  <p class="text-sm text-gray-600">German</p>
                </div>
              </div>
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇮🇹</span>
                <div>
                  <p class="font-medium">Italy</p>
                  <p class="text-sm text-gray-600">Italian</p>
                </div>
              </div>
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇺🇸</span>
                <div>
                  <p class="font-medium">United States</p>
                  <p class="text-sm text-gray-600">American</p>
                </div>
              </div>
              <div class="country-card p-4 bg-white rounded-lg border border-gray-200 flex items-center">
                <span class="flag-icon mr-3 text-xl">🇬🇧</span>
                <div>
                  <p class="font-medium">United Kingdom</p>
                  <p class="text-sm text-gray-600">British</p>
                </div>
              </div>
            </div>
            
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Common Questions</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">Where are you from?</p>
                <p class="text-sm text-gray-600">¿De dónde eres?</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">I'm from [country]</p>
                <p class="text-sm text-gray-600">Soy de [país]</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">What's your phone number?</p>
                <p class="text-sm text-gray-600">¿Cuál es tu número de teléfono?</p>
              </div>
              <div class="phrase-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">My number is [number]</p>
                <p class="text-sm text-gray-600">Mi número es [número]</p>
              </div>
            </div>
          </div>
        `,
        practice: {
          type: "multiple-choice",
          question: "What's the correct way to answer these questions?",
          questions: [
            {
              question: "Where are you from?",
              options: [
                "I'm 25 years old",
                "I'm from Spain",
                "My name is Ana",
                "I'm fine, thanks"
              ],
              answer: 1
            },
            {
              question: "What's your nationality?",
              options: [
                "I live in Madrid",
                "I'm Spanish",
                "My phone is 555-1234",
                "Nice to meet you"
              ],
              answer: 1
            },
            {
              question: "What's your phone number?",
              options: [
                "I'm from Mexico",
                "It's 612-345-6789",
                "I'm 30 years old",
                "I'm a student"
              ],
              answer: 1
            }
          ]
        }
      },
      alphabet: {
        title: "Alphabet & Numbers",
        content: `
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">The English Alphabet</h3>
            <div class="alphabet-grid grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 gap-3 mb-6">
              ${'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('').map(letter => `
                <div class="letter-card p-3 bg-indigo-50 rounded-lg text-center font-mono font-bold text-indigo-700 cursor-pointer hover:bg-indigo-100 transition-colors">
                  ${letter}
                </div>
              `).join('')}
            </div>
            
            <div class="spelling-demo bg-white p-4 rounded-xl border border-gray-200 mb-6">
              <h4 class="text-md font-medium text-gray-700 mb-2">Spell your name:</h4>
              <div class="flex items-center">
                <input type="text" class="flex-1 px-3 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Enter your name">
                <button class="spell-btn px-4 py-2 bg-indigo-600 text-white rounded-r-lg hover:bg-indigo-700 transition-colors">
                  Spell
                </button>
              </div>
              <div class="spelling-result mt-3 p-3 bg-gray-50 rounded-lg hidden"></div>
            </div>
            
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Numbers 0-100</h3>
            <div class="numbers-grid grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-3 mb-4">
              ${Array.from({length: 21}, (_, i) => i).map(num => `
                <div class="number-card p-3 bg-white rounded-lg border border-gray-200 text-center">
                  <div class="font-mono font-bold text-indigo-700">${num}</div>
                  <div class="text-xs text-gray-500 mt-1">${numberToWords(num)}</div>
                </div>
              `).join('')}
            </div>
            
            <div class="text-center">
              <button class="show-more-numbers px-4 py-2 text-indigo-600 font-medium hover:text-indigo-800 transition-colors">
                Show more numbers (21-100)
              </button>
              <div class="more-numbers hidden grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-3 mt-3">
                ${Array.from({length: 80}, (_, i) => i + 21).map(num => `
                  <div class="number-card p-3 bg-white rounded-lg border border-gray-200 text-center">
                    <div class="font-mono font-bold text-indigo-700">${num}</div>
                    <div class="text-xs text-gray-500 mt-1">${numberToWords(num)}</div>
                  </div>
                `).join('')}
              </div>
            </div>
          </div>
        `,
        practice: {
          type: "typing",
          question: "Write the following numbers in words:",
          exercises: [
            { number: 7, answer: "seven" },
            { number: 15, answer: "fifteen" },
            { number: 23, answer: "twenty-three" },
            { number: 42, answer: "forty-two" },
            { number: 68, answer: "sixty-eight" }
          ]
        }
      },
      grammar: {
        title: "Basic Grammar",
        content: `
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Personal Pronouns</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-6">
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">I</p>
                <p class="text-sm text-gray-600">Yo</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">You</p>
                <p class="text-sm text-gray-600">Tú/Usted</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">He</p>
                <p class="text-sm text-gray-600">Él</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">She</p>
                <p class="text-sm text-gray-600">Ella</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">It</p>
                <p class="text-sm text-gray-600">Eso/Esto</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">We</p>
                <p class="text-sm text-gray-600">Nosotros</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg col-span-2 sm:col-span-3">
                <p class="font-medium mb-1">They</p>
                <p class="text-sm text-gray-600">Ellos/Ellas</p>
              </div>
            </div>
            
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Verb "To Be"</h3>
            <div class="overflow-x-auto mb-6">
              <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Pronoun</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Verb</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Example</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <tr>
                    <td class="px-4 py-2">I</td>
                    <td class="px-4 py-2">am</td>
                    <td class="px-4 py-2">I am a student</td>
                  </tr>
                  <tr class="bg-gray-50">
                    <td class="px-4 py-2">You</td>
                    <td class="px-4 py-2">are</td>
                    <td class="px-4 py-2">You are friendly</td>
                  </tr>
                  <tr>
                    <td class="px-4 py-2">He/She/It</td>
                    <td class="px-4 py-2">is</td>
                    <td class="px-4 py-2">She is a doctor</td>
                  </tr>
                  <tr class="bg-gray-50">
                    <td class="px-4 py-2">We</td>
                    <td class="px-4 py-2">are</td>
                    <td class="px-4 py-2">We are happy</td>
                  </tr>
                  <tr>
                    <td class="px-4 py-2">They</td>
                    <td class="px-4 py-2">are</td>
                    <td class="px-4 py-2">They are teachers</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Articles</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">a / an</p>
                <p class="text-sm text-gray-600">Indefinite articles (un/una)</p>
                <p class="text-sm mt-2">Use 'a' before consonant sounds, 'an' before vowel sounds</p>
                <p class="text-xs italic mt-1">a book, an apple</p>
              </div>
              <div class="grammar-card p-4 bg-indigo-50 rounded-lg">
                <p class="font-medium mb-1">the</p>
                <p class="text-sm text-gray-600">Definite article (el/la)</p>
                <p class="text-sm mt-2">Use when referring to specific things</p>
                <p class="text-xs italic mt-1">the book, the United States</p>
              </div>
            </div>
          </div>
        `,
        practice: {
          type: "drag-drop",
          question: "Complete the sentences with the correct form of 'to be'",
          sentences: [
            {
              text: "I ___ a student.",
              answer: "am"
            },
            {
              text: "She ___ from Spain.",
              answer: "is"
            },
            {
              text: "We ___ happy to be here.",
              answer: "are"
            },
            {
              text: "They ___ my friends.",
              answer: "are"
            },
            {
              text: "It ___ a beautiful day.",
              answer: "is"
            }
          ]
        }
      }
    };
    
    // Helper functions
    function numberToWords(num) {
      const units = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 
                    'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 
                    'seventeen', 'eighteen', 'nineteen'];
      const tens = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
      
      if (num < 20) return units[num];
      const digit = num % 10;
      return tens[Math.floor(num / 10) - 2] + (digit ? '-' + units[digit] : '');
    }
    
    function shuffleArray(array) {
      const newArray = [...array];
      for (let i = newArray.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [newArray[i], newArray[j]] = [newArray[j], newArray[i]];
      }
      return newArray;
    }
    
    function animateValue(element, start, end, duration) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.textContent = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }
    
    // DOM elements
    const welcomeScreen = document.querySelector('.welcome-screen');
    const topicContent = document.querySelector('.topic-content');
    const topicTitle = document.querySelector('.topic-title');
    const topicBadge = document.querySelector('.topic-badge');
    const lessonContent = document.querySelector('.lesson-content');
    const practiceArea = document.querySelector('.practice-area');
    const feedbackArea = document.querySelector('.feedback-area');
    const checkAnswerBtn = document.querySelector('.check-answer-btn');
    const nextBtn = document.querySelector('.next-btn');
    const currentScoreEl = document.querySelector('.current-score');
    const progressBar = document.querySelector('.progress-bar');
    const topicBtns = document.querySelectorAll('.topic-btn');
    const startTourBtn = document.querySelector('.start-tour-btn');
    const achievementBadges = document.querySelectorAll('.achievement-badge');
    
    // Event listeners
    topicBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const topic = btn.dataset.topic;
        loadTopic(topic);
        
        // Update active state
        topicBtns.forEach(b => b.classList.remove('active', 'bg-indigo-600', 'text-white'));
        btn.classList.add('active', 'bg-indigo-600', 'text-white');
      });
    });
    
    checkAnswerBtn.addEventListener('click', checkAnswer);
    nextBtn.addEventListener('click', nextStep);
    startTourBtn.addEventListener('click', startTour);
    
    // Load topic content
    function loadTopic(topic) {
      state.currentTopic = topic;
      const topicData = topics[topic];
      
      // Update UI
      welcomeScreen.classList.add('hidden');
      topicContent.classList.remove('hidden');
      topicTitle.textContent = topicData.title;
      topicBadge.textContent = `Topic ${Object.keys(topics).indexOf(topic) + 1}`;
      lessonContent.innerHTML = topicData.content;
      
      // Load practice section
      loadPractice(topicData.practice);
      
      // Add interactivity for specific topics
      if (topic === 'alphabet') {
        setupAlphabetInteractivity();
      }
    }
    
    function loadPractice(practiceData) {
      practiceArea.innerHTML = '';
      feedbackArea.classList.add('hidden');
      checkAnswerBtn.classList.add('hidden');
      nextBtn.classList.add('hidden');
      
      const practiceTitle = document.createElement('h3');
      practiceTitle.className = 'text-lg font-semibold text-gray-800 mb-3';
      practiceTitle.textContent = practiceData.question;
      practiceArea.appendChild(practiceTitle);
      
      switch(practiceData.type) {
        case 'matching':
          setupMatchingExercise(practiceData.pairs);
          break;
        case 'fill-blank':
          setupFillBlankExercise(practiceData.dialogue);
          break;
        case 'multiple-choice':
          setupMultipleChoiceExercise(practiceData.questions);
          break;
        case 'typing':
          setupTypingExercise(practiceData.exercises);
          break;
        case 'drag-drop':
          setupDragDropExercise(practiceData.sentences);
          break;
      }
    }
    
    function setupMatchingExercise(pairs) {
      const shuffledPairs = shuffleArray([...pairs]);
      const container = document.createElement('div');
      container.className = 'matching-game grid grid-cols-1 md:grid-cols-2 gap-4';
      
      const englishColumn = document.createElement('div');
      englishColumn.className = 'english-column';
      const spanishColumn = document.createElement('div');
      spanishColumn.className = 'spanish-column';
      
      shuffledPairs.forEach((pair, index) => {
        const englishItem = document.createElement('div');
        englishItem.className = 'p-3 bg-indigo-100 rounded-lg mb-2 cursor-move english-item';
        englishItem.textContent = pair[0];
        englishItem.dataset.index = index;
        englishColumn.appendChild(englishItem);
        
        const spanishItem = document.createElement('div');
        spanishItem.className = 'p-3 bg-green-100 rounded-lg mb-2 cursor-move spanish-item';
        spanishItem.textContent = pair[1];
        spanishItem.dataset.index = index;
        spanishColumn.appendChild(spanishItem);
      });
      
      container.appendChild(englishColumn);
      container.appendChild(spanishColumn);
      practiceArea.appendChild(container);
      
      checkAnswerBtn.classList.remove('hidden');
      
      // Make items draggable
      const items = container.querySelectorAll('.english-item, .spanish-item');
      items.forEach(item => {
        item.draggable = true;
        item.addEventListener('dragstart', dragStart);
      });
      
      // Set drop zones
      const columns = container.querySelectorAll('.english-column, .spanish-column');
      columns.forEach(col => {
        col.addEventListener('dragover', dragOver);
        col.addEventListener('drop', drop);
      });
    }
    
    function setupFillBlankExercise(dialogue) {
      const container = document.createElement('div');
      container.className = 'dialogue-practice bg-gray-50 p-4 rounded-lg';
      
      dialogue.forEach((line, index) => {
        const lineDiv = document.createElement('div');
        lineDiv.className = 'flex items-start mb-3 last:mb-0';
        
        const speakerDiv = document.createElement('div');
        speakerDiv.className = `p-2 rounded-lg mr-3 ${line.speaker === 'A' ? 'bg-indigo-100' : 'bg-green-100'}`;
        speakerDiv.textContent = `${line.speaker}:`;
        lineDiv.appendChild(speakerDiv);
        
        const textDiv = document.createElement('div');
        textDiv.className = 'flex-1 bg-white p-2 rounded-lg';
        
        const parts = line.text.split('_____');
        parts.forEach((part, i) => {
          textDiv.appendChild(document.createTextNode(part));
          if (i < parts.length - 1) {
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'blank-input mx-1 px-2 py-1 border-b-2 border-gray-300 focus:outline-none focus:border-indigo-500';
            input.dataset.answer = line.answer.split(',')[i];
            textDiv.appendChild(input);
          }
        });
        
        lineDiv.appendChild(textDiv);
        container.appendChild(lineDiv);
      });
      
      practiceArea.appendChild(container);
      checkAnswerBtn.classList.remove('hidden');
    }
    
    function setupMultipleChoiceExercise(questions) {
      const container = document.createElement('div');
      container.className = 'mcq-practice space-y-4';
      
      questions.forEach((q, qIndex) => {
        const questionDiv = document.createElement('div');
        questionDiv.className = 'question bg-white p-4 rounded-lg shadow-sm';
        
        const questionText = document.createElement('p');
        questionText.className = 'font-medium mb-3';
        questionText.textContent = q.question;
        questionDiv.appendChild(questionText);
        
        const optionsDiv = document.createElement('div');
        optionsDiv.className = 'options space-y-2';
        
        q.options.forEach((option, oIndex) => {
          const optionDiv = document.createElement('label');
          optionDiv.className = 'flex items-center p-2 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100';
          
          const radio = document.createElement('input');
          radio.type = 'radio';
          radio.name = `question-${qIndex}`;
          radio.value = oIndex;
          radio.className = 'mr-2';
          optionDiv.appendChild(radio);
          
          optionDiv.appendChild(document.createTextNode(option));
          optionsDiv.appendChild(optionDiv);
        });
        
        questionDiv.appendChild(optionsDiv);
        container.appendChild(questionDiv);
      });
      
      practiceArea.appendChild(container);
      checkAnswerBtn.classList.remove('hidden');
    }
    
    function setupTypingExercise(exercises) {
      const container = document.createElement('div');
      container.className = 'typing-practice space-y-4';
      
      exercises.forEach((ex, index) => {
        const exerciseDiv = document.createElement('div');
        exerciseDiv.className = 'exercise bg-white p-4 rounded-lg shadow-sm';
        
        const prompt = document.createElement('p');
        prompt.className = 'font-mono text-lg mb-2';
        prompt.textContent = `${ex.number} =`;
        exerciseDiv.appendChild(prompt);
        
        const input = document.createElement('input');
        input.type = 'text';
        input.className = 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent';
        input.dataset.answer = ex.answer;
        exerciseDiv.appendChild(input);
        
        container.appendChild(exerciseDiv);
      });
      
      practiceArea.appendChild(container);
      checkAnswerBtn.classList.remove('hidden');
    }
    
    function setupDragDropExercise(sentences) {
      const container = document.createElement('div');
      container.className = 'drag-drop-practice space-y-4';
      
      const optionsDiv = document.createElement('div');
      optionsDiv.className = 'options flex flex-wrap gap-2 mb-4 p-3 bg-gray-100 rounded-lg';
      
      const options = ['am', 'is', 'are'];
      options.forEach(option => {
        const optionEl = document.createElement('div');
        optionEl.className = 'option px-3 py-2 bg-indigo-600 text-white rounded-lg cursor-move';
        optionEl.textContent = option;
        optionEl.draggable = true;
        optionEl.addEventListener('dragstart', dragStart);
        optionsDiv.appendChild(optionEl);
      });
      
      container.appendChild(optionsDiv);
      
      sentences.forEach((sentence, index) => {
        const sentenceDiv = document.createElement('div');
        sentenceDiv.className = 'sentence bg-white p-4 rounded-lg shadow-sm flex items-center flex-wrap';
        
        const parts = sentence.text.split('___');
        parts.forEach((part, i) => {
          sentenceDiv.appendChild(document.createTextNode(part));
          if (i < parts.length - 1) {
            const dropZone = document.createElement('div');
            dropZone.className = 'drop-zone inline-block mx-1 w-16 h-8 border-2 border-dashed border-gray-300 rounded';
            dropZone.dataset.answer = sentence.answer;
            dropZone.addEventListener('dragover', dragOver);
            dropZone.addEventListener('drop', drop);
            sentenceDiv.appendChild(dropZone);
          }
        });
        
        container.appendChild(sentenceDiv);
      });
      
      practiceArea.appendChild(container);
      checkAnswerBtn.classList.remove('hidden');
    }
    
    function setupAlphabetInteractivity() {
      const letterCards = document.querySelectorAll('.letter-card');
      const spellBtn = document.querySelector('.spell-btn');
      const spellingResult = document.querySelector('.spelling-result');
      const showMoreNumbers = document.querySelector('.show-more-numbers');
      const moreNumbers = document.querySelector('.more-numbers');
      
      letterCards.forEach(card => {
        card.addEventListener('click', () => {
          card.classList.toggle('bg-indigo-100');
          card.classList.toggle('text-indigo-700');
          card.classList.toggle('bg-indigo-600');
          card.classList.toggle('text-white');
        });
      });
      
      spellBtn.addEventListener('click', () => {
        const nameInput = document.querySelector('.spelling-demo input');
        const name = nameInput.value.trim();
        
        if (name) {
          spellingResult.innerHTML = '';
          spellingResult.classList.remove('hidden');
          
          const nameHeader = document.createElement('h5');
          nameHeader.className = 'font-medium text-gray-800 mb-2';
          nameHeader.textContent = `Spelling of "${name}":`;
          spellingResult.appendChild(nameHeader);
          
          const lettersDiv = document.createElement('div');
          lettersDiv.className = 'flex flex-wrap gap-2';
          
          name.toUpperCase().split('').forEach(letter => {
            const letterSpan = document.createElement('span');
            letterSpan.className = 'inline-block px-2 py-1 bg-indigo-100 text-indigo-800 rounded-md font-mono';
            letterSpan.textContent = letter;
            lettersDiv.appendChild(letterSpan);
          });
          
          spellingResult.appendChild(lettersDiv);
          
          // Add to score for interaction
          addScore(5);
        }
      });
      
      showMoreNumbers.addEventListener('click', () => {
        moreNumbers.classList.toggle('hidden');
        showMoreNumbers.textContent = moreNumbers.classList.contains('hidden') ? 
          'Show more numbers (21-100)' : 'Hide numbers';
      });
    }
    
    // Drag and drop functions
    let draggedItem = null;
    
    function dragStart(e) {
      draggedItem = this;
      e.dataTransfer.effectAllowed = 'move';
      e.dataTransfer.setData('text/html', this.innerHTML);
      setTimeout(() => this.classList.add('opacity-0'), 0);
    }
    
    function dragOver(e) {
      e.preventDefault();
      e.dataTransfer.dropEffect = 'move';
    }
    
    function drop(e) {
      e.preventDefault();
      if (draggedItem) {
        // If dropping on another item, swap them
        if (this.classList.contains('english-item') || this.classList.contains('spanish-item') || 
            this.classList.contains('option')) {
          const parent = this.parentNode;
          const draggedIndex = [...parent.children].indexOf(draggedItem);
          const dropIndex = [...parent.children].indexOf(this);
          
          if (draggedIndex < dropIndex) {
            parent.insertBefore(this, draggedItem);
            parent.insertBefore(draggedItem, this.nextSibling);
          } else {
            parent.insertBefore(draggedItem, this);
            parent.insertBefore(this, draggedItem.nextSibling);
          }
        } 
        // If dropping on a drop zone
        else if (this.classList.contains('drop-zone')) {
          this.textContent = draggedItem.textContent;
          this.style.borderStyle = 'solid';
          this.style.backgroundColor = '#e0e7ff';
          this.style.borderColor = '#6366f1';
        }
        // For matching game columns
        else {
          this.appendChild(draggedItem);
        }
        
        draggedItem.classList.remove('opacity-0');
        draggedItem = null;
      }
    }
    
    // Check answer logic
    function checkAnswer() {
      const topicData = topics[state.currentTopic];
      let allCorrect = true;
      
      switch(topicData.practice.type) {
        case 'matching':
          const englishItems = document.querySelectorAll('.english-column .english-item');
          englishItems.forEach(item => {
            const index = item.dataset.index;
            const correctPair = topicData.practice.pairs[index][0];
            if (item.textContent !== correctPair) {
              item.classList.add('bg-red-100', 'text-red-800');
              allCorrect = false;
            } else {
              item.classList.add('bg-green-100', 'text-green-800');
            }
          });
          
          const spanishItems = document.querySelectorAll('.spanish-column .spanish-item');
          spanishItems.forEach(item => {
            const index = item.dataset.index;
            const correctPair = topicData.practice.pairs[index][1];
            if (item.textContent !== correctPair) {
              item.classList.add('bg-red-100', 'text-red-800');
              allCorrect = false;
            } else {
              item.classList.add('bg-green-100', 'text-green-800');
            }
          });
          break;
          
        case 'fill-blank':
          const blankInputs = document.querySelectorAll('.blank-input');
          blankInputs.forEach(input => {
            if (input.value.toLowerCase() === input.dataset.answer.toLowerCase()) {
              input.classList.remove('border-gray-300');
              input.classList.add('border-green-500', 'bg-green-50');
            } else {
              input.classList.remove('border-gray-300');
              input.classList.add('border-red-500', 'bg-red-50');
              input.insertAdjacentHTML('afterend', 
                `<span class="text-sm text-green-600 ml-1">${input.dataset.answer}</span>`);
              allCorrect = false;
            }
          });
          break;
          
        case 'multiple-choice':
          const questions = document.querySelectorAll('.question');
          questions.forEach((question, qIndex) => {
            const selectedOption = question.querySelector('input:checked');
            const correctIndex = topicData.practice.questions[qIndex].answer;
            
            if (selectedOption) {
              const optionDiv = selectedOption.parentNode;
              if (selectedOption.value == correctIndex) {
                optionDiv.classList.add('bg-green-100', 'text-green-800');
              } else {
                optionDiv.classList.add('bg-red-100', 'text-red-800');
                // Highlight correct answer
                const correctOption = question.querySelector(`input[value="${correctIndex}"]`).parentNode;
                correctOption.classList.add('bg-green-100', 'text-green-800');
                allCorrect = false;
              }
            } else {
              // No option selected - highlight correct one
              const correctOption = question.querySelector(`input[value="${correctIndex}"]`).parentNode;
              correctOption.classList.add('bg-green-100', 'text-green-800');
              allCorrect = false;
            }
          });
          break;
          
        case 'typing':
          const exerciseInputs = document.querySelectorAll('.exercise input');
          exerciseInputs.forEach(input => {
            if (input.value.toLowerCase() === input.dataset.answer.toLowerCase()) {
              input.classList.remove('border-gray-300');
              input.classList.add('border-green-500', 'bg-green-50');
            } else {
              input.classList.remove('border-gray-300');
              input.classList.add('border-red-500', 'bg-red-50');
              input.insertAdjacentHTML('afterend', 
                `<span class="text-sm text-green-600 ml-1">${input.dataset.answer}</span>`);
              allCorrect = false;
            }
          });
          break;
          
        case 'drag-drop':
          const dropZones = document.querySelectorAll('.drop-zone');
          dropZones.forEach(zone => {
            if (zone.textContent === zone.dataset.answer) {
              zone.classList.add('bg-green-100', 'border-green-500');
            } else {
              zone.classList.add('bg-red-100', 'border-red-500');
              if (zone.textContent) {
                zone.insertAdjacentHTML('afterend', 
                  `<span class="text-sm text-green-600 ml-1">Correct: ${zone.dataset.answer}</span>`);
              } else {
                zone.insertAdjacentHTML('afterend', 
                  `<span class="text-sm text-green-600 ml-1">${zone.dataset.answer}</span>`);
              }
              allCorrect = false;
            }
          });
          break;
      }
      
      // Show feedback
      feedbackArea.classList.remove('hidden');
      feedbackArea.innerHTML = '';
      feedbackArea.className = 'feedback-area p-4 rounded-lg mb-4';
      
      if (allCorrect) {
        feedbackArea.classList.add('bg-green-100', 'text-green-800', 'correct-feedback');
        feedbackArea.innerHTML = `
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span class="font-medium">Perfect! All answers are correct!</span>
          </div>
        `;
        addScore(20);
      } else {
        feedbackArea.classList.add('bg-yellow-100', 'text-yellow-800');
        feedbackArea.innerHTML = `
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="font-medium">Good try! Check the corrections and try again.</span>
          </div>
        `;
        addScore(5);
      }
      
      checkAnswerBtn.classList.add('hidden');
      nextBtn.classList.remove('hidden');
    }
    
    function nextStep() {
      // Mark topic as completed if not already
      if (!state.completedTopics.includes(state.currentTopic)) {
        state.completedTopics.push(state.currentTopic);
        updateProgress();
      }
      
      // Reload the topic to reset practice
      loadTopic(state.currentTopic);
    }
    
    function addScore(points) {
      const newScore = state.score + points;
      animateValue(currentScoreEl, state.score, newScore, 500);
      state.score = newScore;
      
      // Check for achievements
      checkAchievements();
    }
    
    function updateProgress() {
      const progress = (state.completedTopics.length / Object.keys(topics).length) * 100;
      progressBar.style.width = `${progress}%`;
      
      // Change color based on progress
      if (progress >= 75) {
        progressBar.classList.remove('bg-green-500', 'bg-yellow-500');
        progressBar.classList.add('bg-blue-500');
      } else if (progress >= 50) {
        progressBar.classList.remove('bg-green-500', 'bg-blue-500');
        progressBar.classList.add('bg-yellow-500');
      } else {
        progressBar.classList.remove('bg-yellow-500', 'bg-blue-500');
        progressBar.classList.add('bg-green-500');
      }
    }
    
    function checkAchievements() {
      if (state.score >= 50 && !achievementBadges[1].classList.contains('achievement-unlocked')) {
        achievementBadges[1].classList.remove('bg-gray-200', 'text-gray-400');
        achievementBadges[1].classList.add('bg-yellow-100', 'text-yellow-600', 'achievement-unlocked');
        achievementBadges[1].innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
        `;
      }
    }
    
    function startTour() {
      // Simulate clicking through the first topic
      const firstTopicBtn = document.querySelector('.topic-btn[data-topic="greetings"]');
      firstTopicBtn.click();
      
      // Create a guided tour
      const tourSteps = [
        {
          element: '.topic-nav',
          content: 'Here you can select different topics to learn. Let\'s start with Greetings!',
          position: 'right'
        },
        {
          element: '.learning-area',
          content: 'This is where the lesson content appears. Read through the examples carefully.',
          position: 'left'
        },
        {
          element: '.practice-area',
          content: 'After learning, you can practice here. Try matching the phrases!',
          position: 'top'
        },
        {
          element: '.check-answer-btn',
          content: 'When you\'re ready, check your answers to see how you did!',
          position: 'top'
        },
        {
          element: '.level-indicator',
          content: 'Your progress is tracked here. Complete topics to fill the bar!',
          position: 'bottom'
        },
        {
          element: '.score-card',
          content: 'Earn points for completing exercises and challenges. Try to get as many as you can!',
          position: 'bottom'
        }
      ];
      
      let currentStep = 0;
      const tourOverlay = document.createElement('div');
      tourOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center';
      tourOverlay.innerHTML = `
        <div class="bg-white p-6 rounded-xl max-w-md mx-4 relative">
          <div class="tour-content mb-4"></div>
          <div class="flex justify-between">
            <button class="tour-prev px-4 py-2 bg-gray-200 rounded-lg ${currentStep === 0 ? 'opacity-50 cursor-not-allowed' : ''}">Previous</button>
            <button class="tour-next px-4 py-2 bg-indigo-600 text-white rounded-lg">${currentStep === tourSteps.length - 1 ? 'Finish' : 'Next'}</button>
          </div>
        </div>
      `;
      
      document.body.appendChild(tourOverlay);
      updateTourContent();
      
      function updateTourContent() {
        const step = tourSteps[currentStep];
        const contentDiv = tourOverlay.querySelector('.tour-content');
        const prevBtn = tourOverlay.querySelector('.tour-prev');
        const nextBtn = tourOverlay.querySelector('.tour-next');
        
        contentDiv.innerHTML = `
          <h3 class="text-lg font-bold mb-2">Step ${currentStep + 1}/${tourSteps.length}</h3>
          <p>${step.content}</p>
        `;
        
        prevBtn.classList.toggle('opacity-50', currentStep === 0);
        prevBtn.classList.toggle('cursor-not-allowed', currentStep === 0);
        nextBtn.textContent = currentStep === tourSteps.length - 1 ? 'Finish' : 'Next';
        
        // Highlight the element
        const targetElement = document.querySelector(step.element);
        if (targetElement) {
          targetElement.classList.add('ring-4', 'ring-yellow-400', 'relative', 'z-40');
        }
      }
      
      tourOverlay.querySelector('.tour-prev').addEventListener('click', () => {
        if (currentStep > 0) {
          // Remove highlight from current element
          document.querySelector(tourSteps[currentStep].element)?.classList.remove('ring-4', 'ring-yellow-400');
          
          currentStep--;
          updateTourContent();
        }
      });
      
      tourOverlay.querySelector('.tour-next').addEventListener('click', () => {
        // Remove highlight from current element
        document.querySelector(tourSteps[currentStep].element)?.classList.remove('ring-4', 'ring-yellow-400');
        
        if (currentStep < tourSteps.length - 1) {
          currentStep++;
          updateTourContent();
        } else {
          tourOverlay.remove();
          // Unlock first achievement
          achievementBadges[0].classList.remove('bg-gray-200', 'text-gray-400');
          achievementBadges[0].classList.add('bg-yellow-100', 'text-yellow-600', 'achievement-unlocked');
          achievementBadges[0].innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
          `;
          addScore(10);
        }
      });
    }
  });
</script>














































<section id="improved-english-lesson" class="bg-gradient-to-br from-[#4361ee] to-[#3a0ca3] py-12 md:py-20 lg:py-28 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Encabezado -->
        <div class="text-center mb-12 animate-fadeInUp">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                <span class="block">¡Hello World!</span>
                <span class="text-xl md:text-2xl font-medium text-[#f72585] bg-white/90 px-4 py-1 rounded-full inline-block mt-3 shadow-md">Your English Adventure</span>
            </h1>
            <div class="w-32 h-1.5 bg-[#f72585] rounded-full mx-auto mt-4 animate-wave"></div>
        </div>

        <!-- Tarjeta de Saludos con Juego -->
        <div class="bg-white rounded-xl shadow-xl p-6 mb-12 animate-fadeInUp" style="animation-delay: 0.2s">
            <div class="flex flex-col md:flex-row items-start">
                <div class="md:w-1/2 mb-6 md:mb-0 md:pr-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#f72585] p-2 rounded-lg mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-[#3a0ca3]">Essential Greetings</h2>/
                        <h3 class="text-xl font-bold text-[#3a0ca3]">Un Saludo Esencial</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="bg-[#4cc9f0]/20 p-3 rounded-lg border-2 border-[#4361ee]">
                            <p class="font-medium text-[#3a0ca3]">Hello / Hi <span class="text-[#f72585] font-semibold">(Hola)</span></p>
                        </div>
                        
                      
                        <div class="grid grid-cols-2 gap-2">
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Good morning</p>
        <p class="text-[10px] text-[#f72585]">(Buenos días)</p>
    </div>
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Good afternoon</p>
        <p class="text-[10px] text-[#f72585]">(Buenas tardes)</p>
    </div>
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Good evening</p>
        <p class="text-[10px] text-[#f72585]">(Buenas noches)</p>
    </div>
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Good night</p>
        <p class="text-[10px] text-[#f72585]">(Al despedirse)</p>
    </div>
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Hello there</p>
        <p class="text-[10px] text-[#f72585]">(Hola)</p>
    </div>
    <div class="bg-[#4cc9f0]/10 p-2 rounded border border-[#4361ee]">
        <p class="text-xs font-medium text-[#3a0ca3]">Hi everyone</p>
        <p class="text-[10px] text-[#f72585]">(Hola a todos)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">Goodbye</p>
        <p class="text-[10px] text-[#3a0ca3]">(Adiós)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">Bye</p>
        <p class="text-[10px] text-[#3a0ca3]">(Chao)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">See you later</p>
        <p class="text-[10px] text-[#3a0ca3]">(Te veo luego)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">See you soon</p>
        <p class="text-[10px] text-[#3a0ca3]">(Te veo pronto)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">Have a good day</p>
        <p class="text-[10px] text-[#3a0ca3]">(Que tengas un buen día)</p>
    </div>
    <div class="bg-[#f72585]/10 p-2 rounded border border-[#f72585]">
        <p class="text-xs font-medium text-[#4361ee]">Have a nice evening</p>
        <p class="text-[10px] text-[#3a0ca3]">(Que tengas una buena noche)</p>
    </div>
</div>


                    </div>
                </div>
                
                <!-- Juego de Emparejamiento -->
                <div class="md:w-1/2 bg-[#3a0ca3]/5 p-4 rounded-lg border-2 border-[#4361ee]">
                    <h3 class="text-lg font-bold text-[#3a0ca3] mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-[#f72585]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Matching Game
                    </h3>
                    
                    <div class="space-y-2" id="matching-game">
                        <!-- Las parejas se generarán con JavaScript -->
                    </div>
                    
                    <div class="mt-4 text-center">
                        <button id="check-answers" class="bg-[#f72585] hover:bg-[#3a0ca3] text-white font-semibold py-1.5 px-4 rounded-full text-sm transition-all transform hover:scale-105 shadow-sm">
                            Check Answers
                        </button>
                        <p id="game-feedback" class="mt-1 text-xs font-medium text-[#f72585] hidden"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alfabeto -->
        <div class="bg-white rounded-xl shadow-xl p-6 animate-fadeInUp" style="animation-delay: 0.4s">
            <div class="flex items-center mb-6">
                <div class="bg-[#4361ee] p-2 rounded-lg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-[#3a0ca3]">English Alphabet</h2>
            </div>
            
            <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 gap-2 text-center" id="alphabet-container">
                <!-- Las letras se generarán con JavaScript -->
            </div>
        </div>
    </div>
    
    <!-- Modal para Pronunciación -->
    <div id="letter-modal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl p-6 max-w-xs w-full mx-4 relative">
            <button id="close-modal" class="absolute top-2 right-2 text-[#3a0ca3] hover:text-[#f72585]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <div class="text-center">
                <div class="text-6xl font-bold text-[#3a0ca3] mb-3" id="modal-letter"></div>
                <p class="text-sm text-[#f72585] font-medium mb-1">Pronunciation:</p>
                <p class="text-sm text-gray-700 mb-4" id="modal-pronunciation"></p>
                <p class="text-sm text-[#4361ee] font-medium" id="modal-example"></p>
            </div>
        </div>
    </div>
    
    <!-- Elementos decorativos animados -->
    <div class="absolute top-0 left-0 w-24 h-24 bg-[#f72585] rounded-full opacity-10 -translate-x-12 -translate-y-12 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-36 h-36 bg-[#4cc9f0] rounded-full opacity-10 translate-x-18 translate-y-18 animate-pulse" style="animation-delay: 0.3s"></div>


    {{-- Enlace al archivo CSS específico del componente --}}
    <link rel="stylesheet" href="{{ asset('css/components/secction-a1/a1-1.css') }}">

    {{-- Enlace al archivo JavaScript específico del componente (si es necesario) --}}
    <script src="{{ asset('js/components/secction-a1/a1-1.js') }}"></script>


</section>













