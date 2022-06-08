<template>
    <div class="relative w-screen h-16 z-20 -mt-20">
        <form class="flex justify-center">
            <input class="appearance-none border border-white bg-primary/90 border-4 rounded-full w-2/3 py-4 px-3 text-white text-center text-lg font-light leading-tight focus:outline-none focus:ring-0 focus:border-white focus:bg-primary focus:border-2 transition-all focus:scale-105 duration-200 ease-in-out"
                   type="text"
                   placeholder="Pesquise seu exame"
            >
        </form>
    </div>
</template>

<script>
export default {
    name: "SearchForm",
}
</script>

<style scoped>
width: 70%;
max-width: 1100px;
z-index: 20;
padding: 0 2em;
margin: -12.9vh auto 0 auto;
position: relative;

width: 100%;
max-width: 1100px;
height: 3em;
border-radius: 34px;
margin: 0 auto;
text-align: center;
font-size: 1.4em;
font-weight: 100;
color: #fff;
border: 3px solid var(--neutral-white);
background: linear-gradient(90deg, #214654 0%, #3d7b93 100%);
opacity: 0.9;

</style>
