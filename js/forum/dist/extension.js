'use strict';

System.register('anon/hello-world/main', ['flarum/components/Post'], function (_export, _context) {
  "use strict";

  var Post;
  return {
    setters: [function (_flarumComponentsPost) {
      Post = _flarumComponentsPost.default;
    }],
    execute: function () {

      app.initializers.add('anon-hello-world', function () {
        Post.prototype.view = function () {
          return m(
            'div',
            { className: 'Post' },
            'Tutaj moj wlasny tekst'
          );
        };
      });
    }
  };
});