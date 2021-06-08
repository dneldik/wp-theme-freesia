/**
 * Freesia - simple and light Wordpress theme.
 * Copyright (C) 2021 dneldik
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * Contact me: dneldik@gmail.com
 * 
 * ---
 * Javascript file for handling menu 
 */

const button = document.getElementById('hamburger');
const menu = document.getElementById('mobile-menu-wrapper');

button.addEventListener('click', () => {
  if (button.classList.contains('hamburger-active')) {
    button.classList.remove('hamburger-active')
    menu.classList.remove('expanded');
    menu.classList.remove('expanded');
    menu.classList.add('collapsed');
  } else {
    button.classList.add('hamburger-active');
    menu.classList.add('expanded');
    menu.classList.remove('collapsed');
  }
})
