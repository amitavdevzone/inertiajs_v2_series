<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ user: Object, search: String })
</script>

<script>
import Layout from '../Layout.vue';
export default {
  layout: Layout
}
</script>

<template>
  <div>
    <p>This content is coming from Profile page for {{ user.name }} from {{ user.country }}.</p>
    <p>Go to
      <Link href="/">home</Link>
    </p>
    <p v-if="search">The user searched for "{{ search }}"</p>
  </div>
</template>
