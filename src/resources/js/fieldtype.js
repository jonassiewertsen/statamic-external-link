import Fieldtype from './components/external-link';

Statamic.booting(() => {
    Statamic.$components.register('external_link-fieldtype', Fieldtype);
});
