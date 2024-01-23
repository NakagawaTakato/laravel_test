@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<body>
  <header class="header__inner">
      <a class="header__logo" href="/">
      FashionabyLate
      </a>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group__first">
          <div class="form__group-title__first">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text__half_one">
              <input type="text" name="name_one" class="form__input--text__half_one_during" placeholder="　　例: 山田" value="{{ old('name_one') }}"/>
            </div>
            <div class="form__input--text__half_two">
              <input type="text" name="name_two" class="form__input--text__half_one_during" placeholder="　　例: 太郎" value="{{ old('name_two') }}"/>
            </div>
            <div class="form__error">
              @error('name_one')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group_secound">
          <div class="form__group-title">
            <span class="form__label--item">性格</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <input type="radio" name="sex_one" value="1" value="{{ old('sex_one') }}" checked >
            <label class="form__input--radio--men">男性</label>
            <input type="radio" name="sex_two" value="2" value="{{ old('sex_two') }}">
            <label class="form__input--radio--woman">女性</label>
            <input type="radio" name="sex_three" value="3" value="{{ old('sex_three') }}">
            <label class="form__input--radio--others">その他</label>
            <div class="form__error">
              @error('sex_one')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" class="form__input--text_during" placeholder="　　例: test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text__triple">
              <input type="tel" name="tel_one" class="form__input--text__triple_during" placeholder="                080" value="{{ old('tel_one') }}"/>
              <label class="form__input--text__triple__one">-</label>
              <input type="tel" name="tel_two" class="form__input--text__triple_during" placeholder="                1234" value="{{ old('tel_two') }}"/>
              <label class="form__input--text__triple__two">-</label>
              <input type="tel" name="tel_three" class="form__input--text__triple_during" placeholder="                5678" value="{{ old('tel_three') }}"/>
              <label class="form__input--text__triple__three"></label>
            </div>
            <div class="form__error">
              @error('tel_one')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" class="form__input--text_during" placeholder="　　例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address_2" class="form__input--text_during" placeholder="　　例: 千駄ヶ谷マンション101" value="{{ old('address_2') }}"/>
            </div>
            <div class="form__error">
              @error('address_2')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text__seven">
              <select name="kids" class="form__input--text__seven__select">
                <option value="" disabled selected hidden>選択してください　　　　　　 ▼</option>
                <option value="商品" value="{{ old('kids') }}">商品の交換について</option>
              </select>
              
            </div>
            <div class="form__error">
              @error('kids')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" class="form__input--textarea__class" placeholder="    お問い合わせ内容をご記載ください" >{{ old('content') }}</textarea>
            </div>
          </div>
          <div class="form__error">
              @error('content')
              {{ $message }}
              @enderror
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
