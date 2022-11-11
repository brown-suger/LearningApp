<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="title-block">
      <h2><a href="/">エンジニア学習帳</a></h2>
    </div>
  </header>
<section>
  <h2>Category</h2>
  <div class="php-box contents">
    <a href="/category/php">
      <img src="/images/PHP-logo.svg.png">
      <!-- <div class="description">
        <h3>PHPのナレッジ</h3>
        <ul>
          <li>phpの関数</li>
          <li>データベース</li>
          <li>if文の注意点</li>
        </ul>
      </div> -->
    </a>
  </div>
  <div class="laravel-box contents">
    <a href="/category/laravel">
      <img src="/images/laravel6-icon.png">
      <!-- <div class="description">
        <h3>Laravel</h3>
        <ul>
          <li>laravelインストール</li>
          <li>MVC</li>
          <li>adminLTE</li>
        </ul>
      </div> -->
    </a>
  </div>
  <div class="sql-box contents">
    <a href="/category/sql">
      <img src="/images/mysql-icon.png">
      <!-- <div class="description">
        <h3>SQL</h3>
        <ul>
          <li>sample</li>
          <li>sample</li>
          <li>sample</li>
        </ul>
      </div> -->
    </a>
  </div>
  <div class="linux-box contents">
    <a href="/category/linux">
      <img src="/images/linux_icon.png">
      <!-- <div class="description">
        <h3>Linux</h3>
        <ul>
          <li>sample</li>
          <li>sample</li>
          <li>sample</li>
        </ul>
      </div> -->
    </a>
  </div>
  <div class="nw-box contents">
    <a href="/category/network">
      <img src="/images/network-icon.png">
      <!-- <div class="description">
        <h3>NetWork</h3>
        <ul>
          <li>sample</li>
          <li>sample</li>
          <li>sample</li>
        </ul>
      </div> -->
    </a>
  </div>
</section>

<section>
    <h2>New Posts</h2>

    <div class="post-list">
      <ul>
        @foreach($posts as $post)
        <li>
          <a href="/category/{{ $post->category->name }}/{{ $post->id }}">
            <div class="post-content">
              <div class="thumb">
                <img src="/images/noname_cut.png" class="thumb_img">
              </div>
              <div class="summary">
                <p>{{ $post->title }}</p>
                <p>{{ $post->created_at }}</p>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
</section>

<section>
  <div class="profile">
    <h3><span>Profile</span></h3>
    <div class="profile-content">
      <div class="profile-top">
        <img src="/images/noname_cut.png">
        <p>no name</p>
      </div>
      <div class="profile-body">
        <p>趣味:ペットのワンコを愛でる、推し事、麻雀、読書、プログラミング学習</p>
        <p>３０代からエンジニアとしてスタート。日々プログラミングの勉強中。早く一人前になりたい。</p>
        <ul>
          <li class="btn">portfolio ></li>
          <li class="btn">Garally ></li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <footer>
    <ul>
      <li>CONTACT</li>
      <li>SNS</li>
    </ul>
  </footer>
</body>
</html>