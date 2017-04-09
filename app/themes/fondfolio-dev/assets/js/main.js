/**
 * Setup webpack public path
 * to enable lazy-including of
 * js chunks
 *
 */
import Barba from 'barba.js'
import log from './utils/log'
import creatDOMEl from './utils/createDOMEl'
import './vendor/webpack.publicPath'
import Curtain from './scripts/Curtain'
import Scroll from './scripts/Scroll'
import Nav from './scripts/Nav'
import loadSprite from './vendor/loadSprite'
import RevealFx from './vendor/RevealFx'
class App {
  constructor() {
    this.init()
    loadSprite()
    document.body.classList.remove('js-is-loading')
    document.body.classList.add('js-is-initialized')
    Barba.Pjax.init()
    Barba.Prefetch.init()
    Barba.Pjax.getTransition = currentStatus => {
      const prevView = Barba.HistoryManager.prevStatus().namespace
      switch (prevView) {
        case 'single':
          return this.TransitionSingle
        default:
          return this.Transition
      }
    }
  }

  init = () => {
    this.curtain = new Curtain('js-curtain')
    this.nav = new Nav()
    this.scroll = new Scroll()
    this.initTransitions()
    this.initScrollLinks()
    this.nav.updateActiveItem()

    Barba.Dispatcher.on('initStateChange', () => {
      document.body.classList.add('js-is-loading')
      this.nav.hide()
    })
    Barba.Dispatcher.on('transitionCompleted', (currentStatus, prevStatus) => {
      this.initScrollLinks()
      this.nav.updateActiveItem(currentStatus, prevStatus)
      setTimeout(() => {
        document.body.classList.remove('js-is-loading')
      }, 200)
    })
    if (window.location.hash) {
      setTimeout(() => {
        this.scrollTo(window.location.hash)
      }, 0)
    }
  }

  scrollTo = str => {
    const targetEl = document.getElementById(str.substr(1))
    if (targetEl) {
      log(targetEl)
      this.scroll.scrollTo(targetEl)
    }
  }

  initScrollLinks = () => {
    const scrollLinks = document.querySelectorAll('.js-scroll-link')
    Array.prototype.forEach.call(scrollLinks, el => {
      el.addEventListener('click', e => {
        e.preventDefault()
        const target = el.getAttribute('href')
        this.scrollTo(target)
      })
    })
  }

  initTransitions = () => {
    const _hideCurtain = this.curtain.hide.bind(this)
    const _showCurtain = this.curtain.show.bind(this)
    const _scrollTop = this.scroll.scrollTop.bind(this)

    this.TransitionSingle = Barba.BaseTransition.extend({
      start() {
        Promise
        .all([
          this.newContainerLoading,
          _scrollTop().finished,
        ])
        .then(this.showNewPage.bind(this))
      },

      showNewPage() {
        this.done()
      },
    })

    this.Transition = Barba.BaseTransition.extend({
      start() {
        Promise
        .all([
          this.newContainerLoading,
          _scrollTop().finished,
          this.showCurtain(),
        ])
        .then(this.showNewPage.bind(this))
      },

      showCurtain() {
        const deferred = Barba.Utils.deferred()

        _showCurtain(() => {
          deferred.resolve()
        })

        return deferred.promise
      },

      showNewPage() {
        this.done()
        _hideCurtain(() => {
        })
      },
    })
  }
}

const app = new App()

window.app = app

