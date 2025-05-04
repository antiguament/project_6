<div class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-xl shadow-2xl p-8 mb-10 border border-gold-500/30">
    <!-- Efectos de fondo decorativos -->
    <div class="absolute -right-20 -top-20 w-64 h-64 bg-gold-500/5 rounded-full blur-3xl"></div>
    <div class="absolute -left-10 -bottom-10 w-72 h-72 bg-gold-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative z-10 flex flex-col items-center text-center">
        <!-- Icono de bienvenida -->
        <div class="mb-6 p-4 bg-gradient-to-br from-gold-500 to-gold-600 rounded-full shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        
        <!-- Mensaje de bienvenida personalizado -->
        <h2 class="text-4xl font-bold text-white mb-3">
            ¡Bienvenido/a,  {{ Auth::user()->name }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-gold-600">[Nombre del Usuario]</span>!
        </h2>
        
        <p class="text-xl text-gray-300 mb-6 max-w-2xl">
            Estamos encantados de tenerte en la familia Blackelk. Ahora tienes acceso exclusivo a nuestros programas de adiestramiento profesional.
        </p>
        
        <!-- Indicadores de estado -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl mb-8">
            <div class="bg-gray-800/50 p-5 rounded-xl border border-gold-500/20">
                <div class="text-gold-400 font-semibold mb-2">Cuenta verificada</div>
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm text-gray-300">Estado: Activa</span>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-xl border border-gold-500/20">
                <div class="text-gold-400 font-semibold mb-2">Próximo paso</div>
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                    <span class="text-sm text-gray-300">Agendar evaluación</span>
                </div>
            </div>
            
            <div class="bg-gray-800/50 p-5 rounded-xl border border-gold-500/20">
                <div class="text-gold-400 font-semibold mb-2">Nivel de acceso</div>
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm text-gray-300">Premium</span>
                </div>
            </div>
        </div>
        
        <!-- Acciones rápidas -->
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#" class="px-6 py-3 bg-gold-600 hover:bg-gold-500 text-gray-900 font-medium rounded-lg transition-all duration-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
                Ver mi perfil
            </a>
            
            <a href="#" class="px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg transition-all duration-300 flex items-center border border-gold-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gold-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                Guía de inicio
            </a>
            
            <a href="#" class="px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg transition-all duration-300 flex items-center border border-gold-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gold-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                </svg>
                Agendar evaluación
            </a>
        </div>
    </div>
    
    <!-- Efecto decorativo inferior -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-gold-500/50 to-transparent"></div>
</div>