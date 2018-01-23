import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import { i18n } from '~/plugins'
import App from '~/components/App'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'


import '~/components'

Vue.config.productionTip = false

Vue.use(ElementUI)

new Vue({
  i18n,
  store,
  router,
  ...App
})
