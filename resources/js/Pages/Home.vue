<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.auth.user)
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
      <br>
      <Link href="/test" :data="{ 'search': 'inertiajs' }" method="POST">Send data</Link>
    </p>
    <div>
      <p>User: {{ user?.name || '' }}</p>
      <p>Email: {{ user?.email || '' }}</p>
    </div>
  </div>
</template>
