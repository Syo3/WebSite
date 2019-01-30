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
    {{-- calcがandroid 4.x以上でないと表示されない --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    {{-- js --}}
    <script src="/js/app.js" defer></script>
    <script src="/js/index.js" defer></script>
</head>
<body>
  {{-- 背景 --}}
  <div class="" style="background-color:#335258;position: fixed;z-index: -1;width: 100%;height: 100%;"></div>
  {{-- ヘッダー --}}
  <div class="wrapper pt-4" style="background-color:#335258;text-align:center;">
    <header style="padding:3em 0em">
      <h1 style="color:#ffffff;display:inline-block;font-size:3.5em">Title</h1>
    </header>
    {{-- トップ画像 --}}
    <img src="{{ asset('/img/tmp.png') }}" width="800" class="img-fluid">
  </div>

  <div class="wrapper" style="background-color:#448c9c;">
    <div class="content mx-lg-5 pt-lg-3" style="background-color:#ffffff;">
      <div class="container-fluid">
        <header>
          <h1>Image</h1>
        </header>
        <div class="row">
          <div class="col-lg-6 show_content">
            <img src="{{ asset('/img/tmp.png') }}" width="400" class="img-fluid">
            <div class="detail_text">hogehoge</div>
          </div>
          <div class="col-lg-6 show_content">
            <img src="{{ asset('/img/tmp.png') }}" width="400" class="img-fluid">
            <div class="detail_text">hogehoge</div>
          </div>
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
          <div class="col-lg-4" style="background-color: #000000;">
            <img src="{{ asset('/img/tmp.png') }}" class="rounded-circle img-fluid">
          </div>
          <div class="col-lg-8" style="background-color: #aaaaaa;">
            <span style="color:#ffffff">Profile</span>
          </div>
        </div>
      </div>

    </div>
  </div>
  {{-- フッター --}}
  <div class="wrapper" style="background-color:#335258;">
    <footer style="padding:3em 0em;">
      <h1 style="color:#ffffff;">Footer</h1>
    </footer>
  </div>

</body>
</html>
