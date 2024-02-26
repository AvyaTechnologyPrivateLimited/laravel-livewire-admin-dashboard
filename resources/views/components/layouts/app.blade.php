<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
        <title>Dashboard</title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Nucleo Icons -->
        <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Main Styling -->
        <link href="{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

        <!-- Scripts -->
    </head>
    <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
        <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
        <!-- sidenav  -->
        <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
          <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="/dashboard" target="_blank">
              <img src="./assets/img/logo-ct-dark.png" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
              <img src="./assets/img/logo-ct.png" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
              <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Livewire Dashboard</span>
            </a>
          </div>
    
          <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
    
          <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
              <li class="mt-0.5 w-full">
                <a 
                class="{{ request()->routeIs('dashboard') ? 'bg-blue-500/13 dark:text-white dark:opacity-80' : 'dark:text-white dark:opacity-80' }} py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                href="{{route('dashboard')}}"
                wire:navigate
                >
                  <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                  </div>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                </a>
              </li>

              <li class="mt-0.5 w-full">
                <a 
                class="{{ request()->routeIs('customer') ? 'bg-blue-500/13 dark:text-white dark:opacity-80' : 'dark:text-white dark:opacity-80' }} py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                href="{{route('customer')}}"
                wire:navigate
                >
                  <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal text-orange-500 fa fa-user"></i>
                  </div>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Customer</span>
                </a>
              </li>

              <li class="mt-0.5 w-full">
                <a 
                class="{{ request()->routeIs('order') ? 'bg-blue-500/13 dark:text-white dark:opacity-80' : 'dark:text-white dark:opacity-80' }} py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                href="{{route('order')}}"
                wire:navigate
                >
                  <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal text-orange-500 fa fa-user"></i>
                  </div>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Order</span>
                </a>
              </li>
    
              <li class="mt-0.5 w-full">
                <livewire:layout.navigation />
              </li>

            </ul>
          </div>
    
          
        </aside>
    
        <!-- end sidenav -->
    
        <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
          <!-- Navbar -->
          <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
              <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                  <li class="text-sm leading-normal">
                    <a class="text-white opacity-50" href="javascript:;">Home</a>
                  </li>
                  <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-0 font-bold text-white capitalize">Dashboard</h6>
              </nav>
    
              <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                  <!-- online builder btn  -->
                  
                  {{-- <li class="flex items-center px-4">
                    <livewire:layout.navigation />
                  </li> --}}
    
                  <!-- notifications -->
    
                </ul>
              </div>
            </div>
          </nav>
    
          <!-- end Navbar -->
    
          <!-- cards -->
          <div class="w-full px-6 py-6 mx-auto">
            <!-- row 1 -->
            <!-- cards row 2 -->
            {{ $slot }}

            
    
            <footer class="pt-4">
              <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                  <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                      © {{date('Y')}} made with <i class="fa fa-heart"></i> by
                      <a href="https://www.avyatech.com/" class="font-semibold text-slate-700 dark:text-white" target="_blank">AvyaTech</a>
                      for a better web.
                    </div>
                  </div>
                  
                </div>
              </div>
            </footer>
          </div>
          <!-- end cards -->
        </main>
        
      </body>

  <!-- plugin for scrollbar  -->
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script src="{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</html>
