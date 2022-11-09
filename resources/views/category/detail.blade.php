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
      <h2>エンジニア学習帳</h2>
    </div>
  </header>

<section>
    <h2>PHP Post detail</h2>

    <div class="post-list">
      <ul>
        <li>
          <div>
            <p>{{ $post->title }}</p>
            <p>{{ $post->content }}</p>
            <p>{{ $post->category->name }}</p>
            <p>{{ $post->created_at }}</p>
          </div>
        </li>
      </ul>
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