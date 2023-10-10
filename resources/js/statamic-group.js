import GroupFieldtype from './components/GroupFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('group-fieldtype', GroupFieldtype);
});
