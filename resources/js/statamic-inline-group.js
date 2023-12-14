import InlineGroupFieldtype from './components/InlineGroupFieldtype.vue';
import InlineGroupIndexFieldtype from './components/InlineGroupIndexFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('inline_group-fieldtype', InlineGroupFieldtype);
    Statamic.$components.register('inline_group-fieldtype-index', InlineGroupIndexFieldtype);
});
