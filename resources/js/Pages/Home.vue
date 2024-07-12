<template>
    <div>
      
      <!-- menu -->
      <menu-layout />
  
      <!-- component -->
      <h1>teste</h1>
      <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Título</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descrição</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr v-for="dpto in dptos" :key="dpto.id" class="hover:bg-gray-50">
              <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                <div class="relative h-10 w-10">
                  {{ dpto.id }}
                </div>
              </th>
              <td class="px-6 py-4">{{ dpto.nome }}</td>
              <td class="px-6 py-4">{{ dpto.sigla }}</td>
  
            </tr>
          </tbody>
        </table>
      </div>
  
  
    </div>
  </template>
  
  <script>
  
  import{ Link } from '@inertiajs/vue3'
  import MenuLayout from '../Layouts/LayoutMenu.vue'
      
    export default {
      name: 'PageHome',
  
      components: {
        Link,
        MenuLayout
      },
  
      props: {
          dptos: Object
      },
  
    }
          
      
  </script>