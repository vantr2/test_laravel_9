<template>
  <div class="app-layout">
    <header>
        <h2>AppLayout.vue</h2>
        <p>Header</p>
    </header>
    <main>
      <slot></slot> <!-- Đây là phần Blade content sẽ nằm -->
    </main>
    <footer>
        <h2>Footer file layout</h2>
    </footer>
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
