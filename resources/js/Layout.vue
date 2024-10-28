<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';
const count = ref(3);
</script>

<template>
  <main>
    <header class="p-2 bg-red-200 flex justify-between">
      <div>
        <Link class="pr-4" href="/">Home</Link>
        <Link class="pr-4" href="/profile">Profile</Link>
      </div>
      <div>
        <span @click="count++">Counter</span> {{ count }}
      </div>
    </header>

    <article class="p-4 bg-gray-100">
      <slot></slot>
    </article>
  </main>
</template>
