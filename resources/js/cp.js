/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

/** Example Fieldtype

import ExampleFieldtype from './components/fieldtypes/ExampleFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('example-fieldtype', ExampleFieldtype);
});

*/

import Lead from "./components/bard/Lead";

Statamic.$bard.extend(({ mark }) => mark(new Lead()));
Statamic.$bard.buttons(() => [
    { name: 'lead', text: __('Lead'), command: 'lead', icon: 'paint-brush' },
]);
