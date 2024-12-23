<template>
  <div class="min-h-screen flex flex-col">
    <Navbar />
    <Body />
    <Footer />
    <registrar />
  </div>
</template>

<script>
import Navbar from "@/components/general/Navbar.vue";
import Body from "@/components/general/Body.vue";
import Footer from "@/components/general/Footer.vue";
import registrar from "@/views/registrar.vue";



export default {
  name: 'App',
  components: {

    Navbar,
    Body,
    Footer,
    registrar,
  }
}
</script>

<style scoped>
</style>
