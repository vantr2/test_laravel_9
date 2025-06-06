import { createApp } from 'vue'
import AppLayout from './components/AppLayout.vue'

// Optional: import SCSS (nếu bạn dùng nội dung SCSS ở layout)
import '../sass/app.scss'

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