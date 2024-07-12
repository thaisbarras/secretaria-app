<template>
    <Head>
    <title>Edita Departamento</title>
  </Head>
    <AppLayout title="Departamento">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <h1>Editando o Departamento</h1>
            </h2>
        </template>

        <!-- component -->
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Início do Formulário de Edição-->
                        <form @submit.prevent="form.put(route('departamento.update', form.id))">
                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Título <span class="text-red-500">*</span></label><br>
                                <input v-model="form.nome" type="text" class="border-2 border-gray-300 p-2 w-full" name="nome" id="nome" value="" required>
                                <div v-if="errors.nome" class="text-red-600">
                                    {{ errors.nome }}
                                </div>
                            </div>


                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Descrição <span class="text-red-500">*</span></label><br>
                                <textarea v-model="form.sigla" id="sigla" class="border-2 border-gray-500 resize">
                                    
                                </textarea>
                                <div v-if="errors.sigla" class="text-red-600">
                                    {{ errors.sigla }}
                                </div>
                            </div>

                            <div class="flex p-1">
                                <button 
                                    type="submit" 
                                    class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                                >
                                    Editar
                                </button>
                                
                                <Link 
                                    :href="route('departamento')"
                                    type="reset" class="p-3 bg-red-500 text-white hover:bg-red-400"
                                >
                                        Cancelar
                                </Link>
                            </div>
                        </form>
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
    import{ Link, Head, useForm } from '@inertiajs/vue3'
    
    export default {
        props: {
            dpto: Object,
            errors: Object
        },
        
        components: {
            Link, Head,
        },

        data(props){
            const form = useForm(props.dpto)

            return {
                form
            }
        }

    }

</script>