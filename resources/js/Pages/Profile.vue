<script setup>
import { Link, useForm } from '@inertiajs/vue3'
defineProps({ user: Object, search: String })

const form = useForm({
  pic: null
})

function submit() {
  form.post('file-upload')
}
</script>

<script>
import Layout from '../Layout.vue';
export default {
  layout: Layout
}
</script>

<template>
  <div>
    <div>
      <p>This content is coming from Profile page for {{ user.name }} from {{ user.country }}.</p>
      <p>Go to
        <Link href="/">home</Link>
      </p>
      <p v-if="search">The user searched for "{{ search }}"</p>
    </div>

    <div>
      <pre>{{ form }}</pre>
      <form @submit.prevent="submit">
        <input type="file" @input="form.pic = $event.target.files[0]" />
        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
          {{ form.progress.percentage }}%
        </progress>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</template>
