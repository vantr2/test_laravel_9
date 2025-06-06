import { createApp } from 'vue'
import AppLayout from './components/AppLayout.vue'

// Optional: import SCSS (nếu bạn dùng nội dung SCSS ở layout)
import '../sass/app.scss'

const app = createApp({
  // Root instance config (optional)
})

// Register layout component
app.component('AppLayout', AppLayout)

// Mount Vue vào phần `@yield('content')` đã được blade inject trong #app-vue
app.mount('#app-vue')
