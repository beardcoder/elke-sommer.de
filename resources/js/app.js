import { TwillImage } from '../../vendor/area17/twill-image'
import './components/testimonial'
import validate from '@colinaut/alpinejs-plugin-simple-validate'
import '@fontsource/pt-serif/400-italic.css'
import '@fontsource/pt-serif/400.css'
import '@fontsource/pt-serif/700-italic.css'
import '@fontsource/pt-serif/700.css'
import '@fontsource/satisfy'
import Tooltip from '@ryangjchandler/alpine-tooltip'
import Alpine from 'alpinejs'
import 'flowbite'
import 'tippy.js'
import 'tippy.js/dist/tippy.css'

Alpine.plugin(Tooltip)
Alpine.plugin(validate)

window.Alpine = Alpine

Alpine.start()

document.addEventListener('DOMContentLoaded', () => {
  window.lazyloading = new TwillImage()
})
