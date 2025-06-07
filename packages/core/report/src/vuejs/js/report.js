import { createApp } from 'vue'
import Report from './components/Report.vue'

// Optional: import SCSS (nếu bạn dùng nội dung SCSS ở layout)
import '../sass/report.scss'

const app = createApp({
  // Root instance config (optional)
})

// Register layout component
app.component('Report', Report)

try {
    app.mount('#report-app');
} catch (error) {
    console.error('Failed to mount Vue Report app:', error);
}
