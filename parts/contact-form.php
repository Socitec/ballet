<!-- templeteParts - contact_form -->

<form class="contact-form" id="contact_form" method="post" action="">
  <div class="type-area form-row">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          お問い合わせ項目
        </p>
        <p class="sub-text">
          ※必須
        </p>
      </div>
    </div>
    <div class="input-portion">
      <div class="checkbox-item">
        <input class="input-checkbox" type="checkbox" name="type" value="trial" />
        <label class="checkbox-label" for="type">体験レッスンのお申込み</label>
      </div>
      <div class="checkbox-item">
        <input class="input-checkbox" type="checkbox" name="type" value="other" />
        <label class="checkbox-label" for="type">その他のお問い合わせ</label>
      </div>
    </div>
  </div>
  <div class="name-area form-row">
    <div class="">
      <div class="top-item">
        <p class="key-text">
          お名前（漢字）
        </p>
        <p class="sub-text">
          ※必須
        </p>
      </div>
      <div class="bottom-item">
        <p class="sub-text">
          ※レッスンお申し込みの方は受講者のお名前
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-name" type="text" name="name-family" autocomplete="name">
      <input class="input-name" type="text" name="name-given" autocomplete="name">
    </div>
  </div>
  <div class="kana-area form-row">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          お名前（カタカナ）
        </p>
        <p class="sub-text">
          ※必須
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-name" type="text" name="name-family-kana" autocomplete="kana">
      <input class="input-name" type="text" name="name-given-kana" autocomplete="kana">
    </div>
  </div>
  <div class="mail-area form-row">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          メールアドレス
        </p>
        <p class="sub-text">
          ※必須
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-mail" type="text" name="mail" autocomplete="mail">
    </div>
  </div>
  <div class="age-area form-row">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          ご年齢
        </p>
      </div>
      <div class="bottom-item">
        <p class="sub-text">
          ※レッスンお申し込みの方は必須
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-year" type="text" name="age" autocomplete="age">
      <p class="input-subtext">
        歳
      </p>
    </div>
  </div>
  <div class="experience-area form-row">
    <div class="">
      <div class="top-item">
        <p class="key-text">
          バレエ経験の有無
        </p>
      </div>
      <div class="bottom-item">
        <p class="sub-text">
          ※レッスンお申し込みの方は必須
        </p>
      </div>
    </div>
    <div class="input-portion">
      <div class="checkbox-item">
        <input class="input-checkbox" type="checkbox" name="experience" value="true" />
        <label class="checkbox-label" for="type">有り</label>
      </div>
      <div class="checkbox-item">
        <input class="input-checkbox" type="checkbox" name="experience" value="false" />
        <label class="checkbox-label" for="type">無し</label>
      </div>
    </div>
  </div>
  <div class="experienceYear-area form-row">
    <div class="">
      <div class="top-item">
        <p class="key-text">
          バレエ経験年数
        </p>
      </div>
      <div class="bottom-item">
        <p class="sub-text">
          ※バレエ経験「有り」とご回答の方のみ
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-year" type="text" name="year" autocomplete="age">
      <p class="input-subtext">
        年
      </p>
    </div>
  </div>
  <div class="demand-area ">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          バレエスタジオに求めること
        </p>
      </div>
      <div class="bottom-item">
        <p class="sub-text">
          ※当てはまるもの全てにチェックしてください
        </p>
      </div>
    </div>
    <div class="input-area">
      <div class="top-row">
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="unexperience" />
          <label class="checkbox-label" for="demand">未経験</label>
        </div>
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="posture" />
          <label class="checkbox-label" for="demand">姿勢改善</label>
        </div>
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="posture" />
          <label class="checkbox-label" for="demand">柔軟性を高めたい</label>
        </div>
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="base" />
          <label class="checkbox-label" for="demand">基礎をきちんと習得したい</label>
        </div>
      </div>
      <div class="bottom-row">
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="professional" />
          <label class="checkbox-label" for="demand">プロを目指したい</label>
        </div>
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="recital" />
          <label class="checkbox-label" for="demand">発表会に出たい</label>
        </div>
        <div class="checkbox-item">
          <input class="input-checkbox" type="checkbox" name="demand" value="lesson" />
          <label class="checkbox-label" for="demand">他の習い事の補助としてバレエを習いたい</label>
        </div>
      </div>
    </div>
  </div>
  <div class="lesson-area form-row">
    <div class="key-portion">
      <div class="top-item">
        <p class="key-text">
          レッスン体験希望日
        </p>
      </div>
    </div>
    <div class="input-portion">
      <input class="input-date" type="date" name="lesson">
    </div>
  </div>
  <div class="content-area">
    <div class="top-item">
      <p class="key-text">
        お問い合わせ内容・その他ご意見
      </p>
    </div>
    <textarea type="text" class="input-textarea" id="" name="content"
      placeholder="" value=""></textarea>
  </div>
  <div class="button-area">
    <input type="submit" class="submit-button" value="送信">
  </div>

</form>