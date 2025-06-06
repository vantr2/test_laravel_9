import axios from 'axios';

// Cấu hình Axios
axios.defaults.baseURL = import.meta.env && import.meta.env.VITE_API_URL || 'http://localhost/_api';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Nếu có CSRF Token từ Laravel
const token = document.head.querySelector('meta[name="_token"]');
if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.warn('CSRF token not found.');
}

window.axios = axios;

// Xuất Axios để dùng ở nơi khác
export { axios };


