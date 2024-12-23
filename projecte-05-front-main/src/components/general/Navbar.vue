<template>
  <nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div>
        <a href="#" class="text-2xl font-bold">Hotels Auction</a>
      </div>
      <ul class="flex space-x-4">
        <RouterLink to="/" class="hover:text-gray-300">Home</RouterLink>
        <RouterLink to="../../views/registrar.vue" class="hover:text-gray-300">Registrarse</RouterLink>
        <RouterLink to="/.iniciarsesion.vue" class="hover:text-gray-300">Iniciar Sesión</RouterLink>
        <RouterLink to="/.subasta.vue" class="hover:text-gray-300">Subastas</RouterLink>
        <RouterLink to="/.puja.vue" class="hover:text-gray-300">Pujas</RouterLink>
        <RouterLink to="/.contacto.vue" class="hover:text-gray-300">Contacto</RouterLink>

      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar'
}
</script>

<style scoped>
</style>
