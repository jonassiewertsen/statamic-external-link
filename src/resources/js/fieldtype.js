import Fieldtype from './components/link-fieldtype';

Statamic.booting(() => {
    Statamic.$components.register('link-fieldtype', Fieldtype);
});