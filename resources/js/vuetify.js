import { light, dark } from './cutomTheme';
// Vuetify
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/styles';
//
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
//
export default createVuetify({
  theme: {
    defaultTheme: 'light',
    themes: {
      light,
      dark,
    },
  },
  components,
  directives,
});
