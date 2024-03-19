require('./bootstrap');
const { createApp } = require('vue');

const app = createApp({});

const ExampleComponent = require('./components/ExampleComponent.vue').default;
app.component('example-component', ExampleComponent);

app.mount('#app');
