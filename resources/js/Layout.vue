<script setup>
import Nav from './Components/Nav.vue'
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';
const count = ref(3);


</script>

<template>
  <main>
    <Nav />
    <section class="px-6 py-4">
      <slot></slot>
    </section>
  </main>
</template>
