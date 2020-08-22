/**
 * Setup webpack public path
 * to enable lazy-including of
 * js chunks
 *
 */
import "babel-polyfill";
import Barba from "barba.js";
import log from "./utils/log";
import "./vendor/webpack.publicPath";
import loadSprite from "./vendor/loadSprite";
import Instafeed from "instafeed.js";
import Scroll from "./scripts/Scroll";
import Slideshow from "./scripts/Slideshow";
import Fade from "./scripts/Fade";
import removeClasses from "./utils/removeClasses";
// import stickybits from 'stickybits'

import { ACTIVE_CLASS } from "./config";

class App {
  constructor() {
    this.init();
    loadSprite();
    document.body.classList.remove("js-is-loading");
    document.body.classList.add("js-is-initialized");
    Barba.Pjax.init();
    Barba.Prefetch.init();
    Barba.Pjax.getTransition = () => this.Transition;
  }

  init = () => {
    this.scroll = new Scroll();
    this.fade = new Fade();
    this.slideshow = new Slideshow();
    this.initTransitions();
    initInstagram();
    Barba.Dispatcher.on("initStateChange", () => {
      document.body.classList.add("js-is-loading");
      document.body.classList.remove("js-is-leaving");
    });
    Barba.Dispatcher.on("linkClicked", (el) => {
      const xs = document.getElementsByClassName(ACTIVE_CLASS);
      if (xs.length > 0) {
        removeClasses(xs, ACTIVE_CLASS);
      }
      el.classList.add(ACTIVE_CLASS);
    });
    Barba.Dispatcher.on("transitionCompleted", (currentStatus, prevStatus) => {
      document.body.classList.remove("js-is-loading");
      document.body.classList.remove("js-is-leaving");
    });
  };

  initTransitions = () => {
    const _scrollTop = this.scroll.scrollTop.bind(this);

    this.Transition = Barba.BaseTransition.extend({
      start() {
        Promise.all([this.newContainerLoading, _scrollTop().finished]).then(
          this.showNewPage.bind(this)
        );
      },

      showNewPage() {
        this.done();
      },
    });
  };
}

const initInstagram = () => {
  if (!document.querySelector("#instafeed")) {
    return null;
  }

//   const feed = new Instafeed({
//     limit: 6,
//     accessToken: InstagramToken,
//   });
//   feed.run();
// };

const app = new App();

window.app = app;
