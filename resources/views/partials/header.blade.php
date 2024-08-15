   <nav class="bg-white shadow">
       <div class="container mx-auto px-4">
           <div class="flex justify-between">
               <div class="flex space-x-4">
                   <!-- Home Link -->
                   <a href="{{ route('home') }}"
                       class="{{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-700' }} py-5 px-3">
                       Home
                   </a>
                   <!-- About Link -->
                   <a href="{{ route('about') }}"
                       class="{{ request()->routeIs('about') ? 'text-blue-500' : 'text-gray-700' }} py-5 px-3">
                       About
                   </a>
               </div>
           </div>
       </div>
   </nav>
