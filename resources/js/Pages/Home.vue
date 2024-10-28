<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<script>
import Layout from '../Layout.vue';
import NestedLayout from '../NestedLayout.vue';
export default {
  layout: [Layout, NestedLayout]
}
</script>

<template>
  <div>
    <p>This content is coming from Home</p>
    <p>Go to
      <Link href="/profile" :data="{ 'search': 'vuejs' }">Profile for Vuejs</Link>
      <br>
      <Link href="/profile" :data="{ 'search': 'inertiajs' }">Profile for Inertiajs</Link>
    </p>
  </div>
</template>
