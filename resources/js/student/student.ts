import 'flowbite';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import '../modules/mode';

import {changeAvatar} from './studentProfile';


changeAvatar()




