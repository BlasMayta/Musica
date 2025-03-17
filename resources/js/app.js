import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
// import './audio';



window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

window.Swal = require('sweetalert2')

