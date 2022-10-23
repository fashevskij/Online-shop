import './bootstrap';
import {createApp} from 'vue';
import Test from "./components/Test.vue";

createApp({}).component('Test', Test).mount('#test');
