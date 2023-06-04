import { TwillImage } from '../../vendor/area17/twill-image'
import validate from '@colinaut/alpinejs-plugin-simple-validate'
import '@fontsource/montserrat/400.css'
import '@fontsource/montserrat/700.css'
import '@fontsource/pt-serif/400-italic.css'
import '@fontsource/pt-serif/400.css'
import '@fontsource/pt-serif/700-italic.css'
import '@fontsource/pt-serif/700.css'
import Alpine from 'alpinejs'

Alpine.plugin(validate)

window.Alpine = Alpine

Alpine.start()

document.addEventListener('DOMContentLoaded', function () {
  window.lazyloading = new TwillImage()
})
