<script setup lang="js">
import Body from "@/components/general/Body.vue";
</script>

<template>
  <main>
    <main class="flex-grow p-4">
      <h1 class="text-3xl font-bold text-center mb-6">Subastas de Hoteles</h1>
      <!-- Aquí iría el contenido de las subastas -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <Body title="Subastas" description="Subasta 1" />
        <!-- Más subastas -->
      </div>
    </main>
  </main>
</template>

<style scoped>

</style>
