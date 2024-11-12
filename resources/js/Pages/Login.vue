<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  email: null,
  password: null
})

function submit() {
  form.post('login')
}
</script>

<template>
  <div>
    <p>Login page</p>

    <pre>{{ form }}</pre>

    <form @submit.prevent="submit">
      <div class="mb-2">
        <label for="email">Email address</label>
        <input type="text" id="email" v-model="form.email" placeholder="Enter email">
        <div class="text-red-300 text-sm" v-if="form.errors.email">{{ form.errors.email }}</div>
      </div>

      <div class="mb-2">
        <label for="password">Password</label>
        <input type="password" id="password" v-model="form.password" placeholder="Enter password">
        <div class="text-red-300 text-sm" v-if="form.errors.password">{{ form.errors.password }}</div>
      </div>

      <div class="mb-2">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</template>
