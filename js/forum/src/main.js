import Post from 'flarum/components/Post';

app.initializers.add('anon-hello-world', function() {
  Post.prototype.view = function() {
    return (
      <div className="Post">
        Tutaj moj wlasny tekst
      </div>
    );
  };
});