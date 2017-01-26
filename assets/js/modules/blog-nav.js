import { toggleClass } from '../helpers/elementUtils';

const archiveNavList = document.querySelector('.blog__nav__list');
const archiveNavTrigger = document.querySelector('.blog__nav__search-hamburger');

function openCloseNavList(event) {
    event.preventDefault();
    toggleClass(archiveNavList, 'blog__nav__list--open');
}

export default {
    init: function() {
        if (archiveNavTrigger) {
            archiveNavTrigger.addEventListener('click', openCloseNavList);
        }
    }
}
