 <div class="antialiased">
   <div
     class="bg-dots-lighter dark:bg-dots-lighter relative min-h-screen bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
     <div class="mx-auto max-w-7xl p-6 lg:p-8">
       <div class="flex justify-center">
         <img class="h-20 w-auto"
           src="{{ Vite::asset('resources/images/laracamp-logo.png') }}">
       </div>

       <div class="mt-12">
         <div class="max-w-lg">
           <div
             class="duration-250 flex scale-100 place-content-center rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
             <div>
               <div
                 class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                   viewBox="0 0 24 24" stroke-width="1.5"
                   class="h-7 w-7 stroke-red-500">
                   <path stroke-linecap="round" stroke-linejoin="round"
                     d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                 </svg>
               </div>

               <h2
                 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                 Contact us</h2>

               <form class="mt-5" action="#">
                 <div class="space-y-3">
                   <label for="about"
                     class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                   <div
                     class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                     <span
                       class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Your
                       name please/</span>
                     <input type="text" name="username" id="username"
                       autocomplete="username"
                       class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                       placeholder="janesmith">
                   </div>

                   <label for="about"
                     class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                   <div
                     class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                     <span
                       class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Your
                       email please/</span>
                     <input type="text" name="email"
                       autocomplete="username"
                       class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                       placeholder="janesmith@lara.camp">
                   </div>
                   <label for="about"
                     class="block text-sm font-medium leading-6 text-gray-900">About</label>
                   <div class="mt-2">
                     <textarea id="about" name="about" rows="3"
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                   </div>
                   <button type="button"
                     class="rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>

       <div
         class="mt-16 flex justify-center px-0 sm:items-center sm:justify-between">
         <div
           class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
           <div class="flex items-center gap-4">
             <a href="https://barlote.com"
               class="group inline-flex items-center hover:text-gray-700 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:hover:text-white">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke-width="1.5"
                 class="-mt-px mr-1 h-5 w-5 stroke-gray-400 group-hover:stroke-gray-600 dark:stroke-gray-600 dark:group-hover:stroke-gray-400">
                 <path stroke-linecap="round" stroke-linejoin="round"
                   d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
               </svg>
               Barlote
             </a>
           </div>
         </div>

         <div
           class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:ml-0 sm:text-right">
           Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
           v{{ PHP_VERSION }})
         </div>
       </div>
     </div>
   </div>
 </div>
