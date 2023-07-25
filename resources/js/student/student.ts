import 'flowbite';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import '../modules/mode';

import {EducationFrom,socialModal,changeAvatar} from './studentProfile';

const edurow = document.getElementById('eduformBox');
if(edurow){
    changeAvatar()
    socialModal();
    (new EducationFrom(edurow)).render()
}


