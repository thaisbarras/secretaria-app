

<template>
    <Head>
    <title>Novo Departamento</title>
  </Head>
    <AppLayout title="Departamento">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <h1>Novo Departamento</h1>
            </h2>
        </template>

        <!-- component -->
<div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form @submit.prevent="form.post(route('departamento.store'))">
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Nome do Departamento <span class="text-red-500">*</span></label><br>
                            <input v-model="form.nome" type="text" class="border-2 border-gray-300 p-2 w-full" name="nome" id="nome" value="" required>
                                <div v-if="errors.nome" class="text-red-600">
                                    {{ errors.nome }}
                                </div>
                        </div>


                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Sigla <span class="text-red-500">*</span></label>
                        <br>
                        <input v-model="form.sigla" type="text" class="border-2 border-gray-300 p-2 w-full" name="sigla" id="sigla" value="" required>
                                <div v-if="errors.sigla" class="text-red-600">
                                    {{ errors.sigla }}
                                </div>
                        </div>

                        <div class="flex p-1">
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Criar</button>
                            <Link 
                                :href="route('departamento')"
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
            nome: '',
            sigla: ''
        })

    export default {
        name: 'PageDeppartamento',

        components: {
        Link, Head
        },

        props: {
            dptos: Object,
            errors: Object
        },

    }

</script>