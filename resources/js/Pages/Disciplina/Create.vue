

<template>
    <Head>
    <title>Add Disciplina</title>
  </Head>
    <AppLayout title="Disciplina">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <h1>Adicinar Disciplina</h1>
            </h2>
        </template>

        <!-- component -->
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form @submit.prevent="form.post(route('disciplina.store'))">
                        <div class="flex">
                            <div class="mb-4 w-full mr-2">
                                <label class="text-xl text-gray-600">Código da Disciplina <span class="text-red-500">*</span></label><br>
                                <input v-model="form.codigo" type="text" class="border-2 border-gray-300 p-2 w-full" name="codigo" id="codigo" value="" required>
                                    <div v-if="errors.codigo" class="text-red-600">
                                        {{ errors.codigo }}
                                    </div>
                            </div>
                            
                            <div class="mb-4 w-full mr-2">
                                <label class="text-xl text-gray-600">Disciplina <span class="text-red-500">*</span></label><br>
                                <input v-model="form.curso" type="text" class="border-2 border-gray-300 p-2 w-full" name="curso" id="curso" value="" required>
                                    <div v-if="errors.curso" class="text-red-600">
                                        {{ errors.curso }}
                                    </div>
                            </div>

                            
                            
                        </div>
                        
                        <div class="flex">
                            <div class="mb-4 w-full">
                                <label class="text-xl text-gray-600">Curso <span class="text-red-500">*</span></label><br>
                                <select v-model="form.id_curso" name="curso" id="id_curso" class="border-2 border-gray-300 p-2 w-full">
                                    <option v-for="curso, id in cursos" :value="id" :key="id">{{ curso }}</option>
                                </select>
                                    <div v-if="errors.curso" class="text-red-600">
                                        {{ errors.curso }}
                                    </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mb-4 mr-2 flex">
                                <label class="text-xl text-gray-600 mr-2">Obrigatória?</label>

                                    <input v-model="form.obrigatoria" type="checkbox" class="border-2 border-gray-300 p-3" name="obrigatoria" id="obrigatoria" value="">

                            </div>
                            <div class="mb-4 w-full mr-2">
                                <label class="text-xl text-gray-600">Duração do Disciplina <span class="text-red-500">*</span></label><br>
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
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Criar</button>
                            <Link 
                                :href="route('disciplina')"
                                type="reset" class="p-3 bg-red-500 text-white hover:bg-red-400">
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
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<script>

    import{ Link, Head, useForm } from '@inertiajs/vue3'
    const form = useForm({
            codigo: '',
            disciplina: '',
            curso:'',
            obrigatoria:'',
            formacao:'',
            creditos:'',
            chs:'',
            chp:'',
            periodo:'',
            unidade:'',
            tipo_aprovacao: '',
        })

    export default {
        name: 'PageCursoCreate',

        components: {
        Link, Head
        },

        props: {
            disciplinas: Object,
            errors: Object,
            cursos: Object,
        },

    }

</script>