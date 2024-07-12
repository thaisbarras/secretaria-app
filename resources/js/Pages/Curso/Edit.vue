<template>
    <Head>
    <title>Edita Curso</title>
  </Head>
    <AppLayout title="Curso">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <h1>Editando o Curso</h1>
            </h2>
        </template>

        <!-- component -->
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Início do Formulário de Edição-->
                        <form @submit.prevent="form.put(route('curso.update', form.id))">
                            <div class="mb-4">
                            <label class="text-xl text-gray-600">Nome do Curso <span class="text-red-500">*</span></label><br>
                            <input v-model="form.nome" type="text" class="border-2 border-gray-300 p-2 w-full" name="nome" id="nome" value="" required>
                                <div v-if="errors.nome" class="text-red-600">
                                    {{ errors.nome }}
                                </div>
                        </div>
                        <div class="flex">
                            <div class="mb-4 w-full mr-2">
                                <label class="text-xl text-gray-600">Duração do Curso <span class="text-red-500">*</span></label><br>
                                <div class="flex">
                                    <input v-model="form.duracao" type="number" class="border-2 border-gray-300 p-2 w-full mr-1" name="duracao" id="duracao" value="" required>
                                    <span class="text-gray-600">semestre(s)</span>
                                </div>
                                <div v-if="errors.duracao" class="text-red-600">
                                    {{ errors.duracao }}
                                </div>
                            </div>

                            <div class="mb-4 w-full">
                                <label class="text-xl text-gray-600">Período do Dia <span class="text-red-500">*</span></label><br>
                                <select v-model="form.periodo_dia" name="periodo_dia" id="periodo_dia" class="border-2 border-gray-300 p-2 w-full">
                                    <option value="integral">Integral</option>
                                    <option value="manha">Manhã</option>
                                    <option value="tarde">Tarde</option>
                                    <option value="noite">Noite</option>
                                </select>
                                <div v-if="errors.periodo_dia" class="text-red-600">
                                    {{ errors.periodo_dia }}
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Tipo<span class="text-red-500">*</span></label><br>
                            <select v-model="form.tipo" name="tipo" id="tipo" class="border-2 border-gray-300 p-2 w-full">
                                <option value="graduacao">Graduação</option>
                                <option value="pos_graduacao">Pós Graduação (Lato Sensu)</option>
                                <option value="mestrado">Mestrado</option>
                                <option value="doutorado">Doutorado</option>
                                <option value="extensao">Extensão</option>
                                
                            </select>
                            <div v-if="errors.tipo" class="text-red-600">
                                {{ errors.tipo }}
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Departamento<span class="text-red-500">*</span></label><br>
                            <select v-model="form.id_departamento" name="departamento" id="id_departamento" class="border-2 border-gray-300 p-2 w-full">
                                <option v-for="dpto, id in dptos" :value="id" :key="id">{{ dpto }}</option>
                            </select>
                            <div v-if="errors.departamento" class="text-red-600">
                                {{ errors.departamento }}
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
                                    :href="route('curso')"
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
            curso: Object,
            errors: Object,
            dptos: Object,
        },
        
        components: {
            Link, Head,
        },

        data(props){
            const form = useForm(props.curso)

            return {
                form
            }
        }

    }

</script>