/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import './styles/app.scss';
import './styles/header.scss';
import './styles/home-content.scss';
import './styles/declaration.scss';
import './styles/registration.scss';
import './styles/contact.scss';
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');
// start the Stimulus application
import './bootstrap';

import { Tooltip, Toast, Popover } from 'bootstrap';

global.$ = global.jQuery = $;