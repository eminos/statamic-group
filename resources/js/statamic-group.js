import GroupFieldtype from './compontents/GroupFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('group-fieldtype', GroupFieldtype);
});
