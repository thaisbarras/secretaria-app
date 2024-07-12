<template>
    <AppLayout title="Disciplina">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Disciplinas 📚
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Flash Messages -->
                <div  v-if="$page.props.flash.message" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            {{ $page.props.flash.message }}
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Link :href="route('disciplina.create')">
                    
                        <button class="middle none center mr-3 rounded-lg m-5
                            bg-pink-500 py-3 px-6 font-sans font-bold uppercase
                            text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg 
                            hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none 
                            active:opacity-[0.85] active:shadow-none disabled:pointer-events-none 
                            disabled:opacity-50 disabled:shadow-none flex" data-ripple-light="true"
                            >
                            ADD Disciplina 
                            <svg class="w-6 h-6 text-gray-800 dark:text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                            </svg>

                        </button>
                    </Link>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Código</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Disciplina</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Período</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Obrigatória</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Formação</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Créditos</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                                <tr v-for="disciplina in disciplinas" :key="disciplina.id" class="hover:bg-gray-50">
                                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    <div class="relative h-10 w-10">
                                        {{ disciplina.codigo }}
                                    </div>
                                </th>
                                <td class="px-6 py-4">{{ disciplina.disciplina }}</td>
                                <td class="px-6 py-4">{{ disciplina.periodo }}</td>
                                <td class="px-6 py-4">{{ disciplina.obrigatoria }}</td>
                                <td class="px-6 py-4">{{ disciplina.formacao }}</td>
                                <!-- <td class="px-6 py-4">{{ disciplina.id_departamento }}</td> -->
                                <td class="px-6 py-4">{{ disciplina.creditos }}
                                    <!--<div v-for="dpto, id in dptos" :key="id">
                                        <div v-if="disciplina.id_departamento == id">
                                            {{ dpto }}
                                        </div>
                                    </div>-->  
                                </td>
                                
                                
                                
                                <!-- Editar e Excluir -->

                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <Link 
                                            :href="route('disciplina.edit', disciplina.id)"
                                            class="flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </Link>

                                        <button 
                                            @click="destroy(disciplina.id)"
                                            type="button"
                                            class="flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>        
                                    </div>
                                </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'

</script>

<script>

import{ Link, Head, router } from '@inertiajs/vue3'

const destroy = (disciplinas) => {
        if(confirm('Tem certeza que deseja excluir?')) {
            router.delete(route('disciplina.destroy', disciplinas))
        }
    }   

    export default {
        name: 'PageCurso',

        components: {
            Link,
            Head
        },

        props: {
            disciplinas: Object,
            //dptos: Object,
        },
}

</script>