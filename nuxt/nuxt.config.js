// require('slick-carousel')
module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    title: 'qualitycutslawncare',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Nuxt.js project' }
    ],
    link: [
      {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'},
      {rel: 'stylesheet', href: '/fontawesome-all.min.css'},
      {rel: 'stylesheet', href: '/fontawesome.min.css'}
    ],
    script: [
      {src: '/app.js'},
      {src: '/global.js'}
    ]
  },
  /*
  ** Customize the progress bar color
  */
  loading: { color: '#3B8070' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, ctx) {
      if (ctx.dev && ctx.isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  },
  css: [
    {src: 'bulma/bulma.sass', lang: 'sass'},
    {src: 'slick-carousel/slick/slick.scss', lang: 'scss'},
    {src: 'slick-carousel/slick/slick-theme.scss', lang: 'scss'}
  ]
}
