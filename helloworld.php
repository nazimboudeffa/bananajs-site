<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/banana.css">
</head>
<body>
<div id="wrapper">
  <?php include("menu.php"); ?>
  <div class="main right">
    <h2>Basic Tutorials</h2>
    <p>This is how to display text.</p>
    <pre>
      <code>
        var page = {
          createComponents: function(){
            app.add.text("Hello World!");
          }
        };

        var config = {};
        config.target = 'app';
        config.page = page;

        var app = new Banana.Application(config);
        app.run(page);
      </code>
    </pre>
  </div>
</div>
</body>
