var flarum = require('flarum-gulp');

flarum({
  modules: {
    'anon/hello-world': [
      'src/**/*.js'
    ]
  }
});