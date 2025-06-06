import { createApp } from 'vue'
import Project from './components/Project.vue'

// Optional: import SCSS (nếu bạn dùng nội dung SCSS ở layout)
import '../sass/project.scss'

const app = createApp({
  // Root instance config (optional)
})

// Register layout component
app.component('Project', Project)

// Mount Vue vào phần `@yield('content')` đã được blade inject trong #project-app
app.mount('#project-app')
