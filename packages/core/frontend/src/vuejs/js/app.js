import { createApp } from 'vue'
import AppLayout from './components/AppLayout.vue'

import './bootstrap.js'; // Load cấu hình chung trước
import '../sass/app.scss'
import * as bootstrap from 'bootstrap'; // Nhập JS
window.bootstrap = bootstrap; // Gán vào window để sử dụng toàn cục

const app = createApp({
  // Root instance config (optional)
})

// Register layout component
app.component('AppLayout', AppLayout)

try {
    app.mount('#app-vue');
    document.getElementById("app-loading")?.classList.add("hidden");
} catch (error) {
    console.error('Failed to mount Vue app:', error);
    document.getElementById("app-loading")?.classList.add("hidden");
}