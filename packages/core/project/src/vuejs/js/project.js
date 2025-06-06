import { createApp } from 'vue'
import Project from './components/Project.vue'

// Optional: import SCSS (nếu bạn dùng nội dung SCSS ở layout)
import '../sass/project.scss'

const app = createApp({
  // Root instance config (optional)
})

// Register layout component
app.component('Project', Project)

try {
    app.mount('#project-app');
} catch (error) {
    console.error('Failed to mount Vue project app:', error);
}