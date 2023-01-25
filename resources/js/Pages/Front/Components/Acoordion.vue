<template>
    <div class="w-full h-auto bg-primary">
        <span @click="active = !active" class=" text-white font-normal hover:cursor-pointer flex p-6" :class="{ 'border-b': active }"> Posso me alimentar antes de fazer uma ressonância?</span>
    </div>
    
    <div v-if="!active" class="w-full h-auto bg-primary" :class="{ 'border-b': !active }">
        <p class="text-white font-light text-sm px-6 pb-4" > Para Pessoa Física, o processo de abertura de conta na XP Investimentos é online. Acesse aqui para se cadastrar.

Inicialmente, não há a necessidade de envio de documentos comprovatórios. No entanto, documentos complementares podem ser solicitados de acordo com as particularidades de cada cliente.

Ao final do processo de cadastro, você será informado que os seus dados foram enviados para análise. Caso seja necessário o envio de algum documento, entraremos em contato no endereço de e-mail cadastrado.

Se os seus dados forem totalmente validados de forma eletrônica, você receberá por e-mail, em algumas horas, as informações de acesso à sua conta XP.

Já para Pessoa Jurídica, o processo deve ocorrer por intermédio de um Assessor de Investimentos.

Caso tenha interesse, acesse o site da XP Empresas, selecione “Quero abrir uma conta” e preencha o questionário para que um de nossos assessores entre em contato com você e possa apresentar soluções especializadas de acordo com a particularidade do seu negócio.</p>
    </div>
        
</template>

<script>
import {defineComponent} from "vue";
export default defineComponent({
    name: "Acoordion",
    props: {
        description: String,
        category: String,
        deadline: String,
    },
    data () {
        return {
            active: true,
        }
    }
})
</script>

<style scoped>

.slide-fade-enter {
    opacity: 0;
}

.slide-fade-enter-active {
    transition: opacite .2s;
}

.slide-fade-to {
    opacity: 1;
}

.slide-fade-leave {
    opacity: 1;
}

.slide-fade-leave-active {
    transition: opacity .2s;
}

.slide-fade-leave-to {
    opacity: 0;
}

</style>
