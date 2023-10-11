import GroupFieldtype from './components/GroupFieldtype.vue';
import GroupIndexFieldtype from './components/GroupIndexFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('group-fieldtype', GroupFieldtype);
    Statamic.$components.register('group-fieldtype-index', GroupIndexFieldtype);
});
