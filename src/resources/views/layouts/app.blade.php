<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
         <img src="{{ asset('logo.svg') }}" alt="coachtech" width="370" height="36">
        </a>
      </div>
      <div class="header__search">
        @if (Auth::check())
          <form class="create-form" action="#" method="get">
            <input class="create-form__item-input" type="text" name="content" placeholder="何をお探しですか？" value="{{ old('content') }}">
          </form>
        @endif
      </div>
      <nav>
        <ul class="header-nav">
          @if (Auth::check())
          <li class="header-nav__item">
              <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">マイページ</a>
            </li>
            <li class="header-nav__item">
              <button class="sell-button" onclick="location.href='/sell'">出品</button>
            </li>
          @endif
        </ul>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>
