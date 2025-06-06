<template>
  <div class="app-layout">
    <header><h1>CRM Layout</h1></header>
    <main>
      <slot></slot> <!-- Đây là phần Blade content sẽ nằm -->
    </main>
  </div>
</template>

<script>
export default {
  name: 'AppLayout',
}
</script>

<style scoped>
.app-layout {
  padding: 20px;
  font-family: sans-serif;
}
</style>
