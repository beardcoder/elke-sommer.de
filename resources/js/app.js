import { TwillImage } from '../../vendor/area17/twill-image'
import validate from '@colinaut/alpinejs-plugin-simple-validate'
import '@fontsource/montserrat/400.css'
import '@fontsource/montserrat/700.css'
import '@fontsource/pt-serif/400-italic.css'
import '@fontsource/pt-serif/400.css'
import '@fontsource/pt-serif/700-italic.css'
import '@fontsource/pt-serif/700.css'
import Tooltip from '@ryangjchandler/alpine-tooltip'
import * as ackeeTracker from 'ackee-tracker'
import Alpine from 'alpinejs'
import 'tippy.js'
import 'tippy.js/dist/tippy.css'

ackeeTracker
  .create('https://tracking.letsbenow.de')
  .record('6d8bf6f6-33f3-472a-b07a-cf3ad394e89b')

Alpine.plugin(Tooltip)
Alpine.plugin(validate)

window.Alpine = Alpine

Alpine.start()

document.addEventListener('DOMContentLoaded', function () {
  window.lazyloading = new TwillImage()
})
