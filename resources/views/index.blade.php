<!DOCTYPE HTML>
<html lang="ja">
<head>
    {{-- meta --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blog</title>


    {{-- css --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    {{-- js --}}
    <script src="/js/app.js" defer></script>
</head>
<body>

  <div class="wrapper pl-lg-4 pt-lg-3 pb-lg-1" style="background-color:#335258;">
    <header>
      <h1 style="color:#ffffff;font-family: 'Alegreya Sans', sans-serif;">Title</h1>
    </header>
  </div>
  <div class="wrapper" style="position:fixed;right:0;left:0;background-color:#448c9c;">
    <div class="content my-lg-4 mx-lg-5 p-lg-3" style="background-color:#ffffff;">
      <div class="container-fluid">
        <header>
          <h1 style="font-family: 'Alegreya Sans', sans-serif;">Works</h1>
        </header>
      </div>
      <section>
        <img src="{{ asset('/img/tmp.png') }}" style="width:400px;height:300px">
      </section>



          <div class="container py-4">
              Hello World
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-2 bg-info">col-xs-2</div>
              <div class="col-xs-6 bg-success">col-xs-6</div>
              <div class="col-xs-2 bg-warning">col-xs-2</div>
              <div class="col-xs-2 bg-danger">col-xs-2</div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-2 bg-info">col-xs-2</div>
              <div class="col-lg-6 bg-success">col-xs-6</div>
              <div class="col-lg-2 bg-warning">col-xs-2</div>
              <div class="col-lg-2 bg-danger">col-xs-2</div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-5 bg-info">col-xs-5</div>
              <div class="col-xs-offset-1 col-xs-6 bg-success">col-xs-6</div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-2 col-xs-push-4 bg-danger">1</div>
              <div class="col-xs-2 bg-info">2</div>
              <div class="col-xs-2 col-xs-pull-4 bg-success">3</div>
              <div class="col-xs-2 bg-warning">4</div>
            </div>
          </div>

          <table class="table table-striped">
            <tr>
              <th>Name</th><th>Age</th>
            </tr>
            <tr>
              <td>Yamada</td><td>16</td>
            </tr>
            <tr>
              <td>Suzuki</td><td>26</td>
            </tr>
            <tr>
              <td>Tanaka</td><td>36</td>
            </tr>
          </table>




    </div>
  </div>





</body>
</html>
