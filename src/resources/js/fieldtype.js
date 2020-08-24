import Fieldtype from './components/external-link';

Statamic.booting(() => {
    Statamic.$components.register('external-link', Fieldtype);
});
