import { createApp } from 'vue'
import AppLayout from './components/AppLayout.vue'

import './bootstrap.js'; // Load cấu hình chung trước
import '../sass/app.scss'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

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