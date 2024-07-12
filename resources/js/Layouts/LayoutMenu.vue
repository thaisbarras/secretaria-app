<template>
  <Head>
    <title>APP Curso</title>
  </Head>
  <div class="flex flex-wrap place-items-center mt-6">
      <section class="relative mx-auto">
          <!-- navbar -->
        <nav class="flex justify-between bg-gray-900 text-white w-screen">
          <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <Link class="text-3xl font-bold font-heading" href="#">
              <!-- <img class="h-9" src="logo.png" alt="logo"> -->
              Logo Here.
          </Link>
            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
              <li><Link :href="route('home')" :class="{ 'text-orange-300': $page.url === '/home'}" >Home</Link></li>
              <li><Link :href="route('about')" :class="{ 'text-orange-300': $page.url === '/about'}">Sobre</Link></li>
              <li><Link :href="route('')" :class="{ 'text-orange-300': $page.url === '/'}">Departamento</Link></li>
            </ul>
            <!-- Header Icons -->
            <div class="hidden xl:flex items-center space-x-5">
              <!-- Sign In / Register      -->
              <Link class="flex items-center hover:text-gray-200" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
              </Link>
              
            </div>
          </div>
          <!-- Responsive navbar -->
          <Link class="navbar-burger self-center mr-12 xl:hidden" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </Link>
        </nav>
        
      </section>
    </div>
</template>

<script>
  import{ Link, Head } from '@inertiajs/vue3'
  export default {
      name:'LayoutMenu',

      components: {
        Link,
        Head
      },
    }
</script>
