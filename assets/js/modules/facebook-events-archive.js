'use strict';

import { addClass } from '../helpers/elementUtils';

const postsPerPage = 4;

class FacebookEventsArchive {

    constructor(el) {

        this.el = el;
        this.events = window._facebookEvents;
        this.eventsLength = this.events.length;
        this.moreButtonEl = document.querySelector('.js-facebook-events-archive-load-more');
        this.index = 0;

        this.attachPosts(this.index);

        this.loadMore = (event) => {
            event.preventDefault();
            this.attachPosts(this.index);
        };

        this.moreButtonEl.addEventListener('click', this.loadMore);

    }

    attachPosts(from) {

        const to = from + postsPerPage;

        for (let i = from; i < to && i < this.eventsLength; i++) {
            this.attachPost(this.events[i]);
        }

        this.index = this.index + postsPerPage;

        if (this.eventsLength >= to) {
            this.showMoreButton();
        } else {
            this.hideMoreButton();
        }

    }

    attachPost(post) {

        const postEl = document.createElement('a');
        postEl.href = post.permalink;
        addClass(postEl, 'facebook-events-archive__item');

        postEl.innerHTML = `
            <div class="facebook-events-archive__item__image">
                <div class="facebook-events-archive__item__image__inner"
                    style="background-image:url(${post.image});"></div>
            </div>
            <div class="facebook-events-archive__item__text">
                <div class="facebook-events-archive__item__date">${post.date}</div>
                <div class="facebook-events-archive__item__title">${post.title}</div>
            </div>`;

        this.el.appendChild(postEl);

    }

    showMoreButton() {
        this.moreButtonEl.style.display = '';
    }

    hideMoreButton() {
        this.moreButtonEl.style.display = 'none';
    }

}

export default FacebookEventsArchive;
