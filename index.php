<!doctype html>
<html lang="fa">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>روز جهانی دختر — SMS.ir</title>
  <style>
    /* Reset و تنظیمات پایه */
    :root{
      --bg:#fff7fb;
      --card:#ffffff;
      --accent:#e8aee6;
      --accent-2:#f6c6e9;
      --text:#222;
      --muted:#666;
      --success:#2e7d32;
      --danger:#c62828;
      --glass: rgba(255,255,255,0.85);
      --radius:14px;
    }
    html,body{height:100%}
    body{
      margin:0;
      font-family: "Vazirmatn", "Tahoma", sans-serif;
      background: linear-gradient(180deg,#fff7fb 0%, #fff 100%);
      color:var(--text);
      -webkit-font-smoothing:antialiased;
      direction:rtl;
    }
    .wrap{
      max-width:980px;
      margin:28px auto;
      padding:20px;
    }

    header{
      display:flex;
      gap:16px;
      align-items:center;
      margin-bottom:18px;
    }
    .logo{
      width:68px;height:68px;border-radius:12px;
      background:linear-gradient(135deg,var(--accent),var(--accent-2));
      display:flex;align-items:center;justify-content:center;
      font-weight:700;color:#fff;font-size:20px;
      box-shadow:0 6px 18px rgba(0,0,0,0.06);
    }
    h1{margin:0;font-size:20px}
    p.lead{margin:4px 0 0;color:var(--muted)}

    .grid{
      display:grid;
      grid-template-columns: 1fr 420px;
      gap:18px;
      align-items:start;
      margin-top:18px;
    }

    /* کارت اصلی */
    .card{
      background:var(--card);
      border-radius:var(--radius);
      padding:18px;
      box-shadow:0 8px 30px rgba(0,0,0,0.06);
    }
    .hero{
      display:flex;gap:18px;align-items:center;
    }
    .hero-visual{
      width:160px;height:160px;border-radius:12px;
      background:linear-gradient(180deg,#ffeef9,#fff8fc);
      display:flex;align-items:center;justify-content:center;
      font-size:34px;
      box-shadow:inset 0 -6px 18px rgba(0,0,0,0.02);
    }
    .hero-text h2{margin:0 0 6px;font-size:18px}
    .hero-text p{margin:0;color:var(--muted)}

    form{margin-top:14px;display:flex;flex-direction:column;gap:10px}
    label{font-size:13px;color:var(--muted)}
    input[type="tel"], input[type="text"], textarea, select{
      padding:12px 14px;border-radius:10px;border:1px solid #eee;
      font-size:15px;outline:none;
      box-shadow:0 2px 8px rgba(0,0,0,0.02);
      background:transparent;
    }
    .btn{
      display:inline-block;padding:11px 14px;border-radius:10px;border:0;
      background:linear-gradient(90deg,#ff78b6,#ff9fd6);color:#fff;font-weight:700;
      cursor:pointer;font-size:15px;
      box-shadow:0 8px 22px rgba(255,125,180,0.14);
    }
    .muted-small{font-size:13px;color:var(--muted)}

    /* راست‌چین و موارد جانبی */
    .side{
      position:sticky;top:26px;
    }
    .gift{
      display:flex;align-items:center;gap:12px;padding:12px;border-radius:10px;
      background:linear-gradient(90deg,#fff,#fff8fb);
      border:1px dashed rgba(0,0,0,0.04);
    }
    .gift .tag{font-weight:700}
    .result{
      margin-top:14px;padding:12px;border-radius:10px;background:var(--glass);
      border:1px solid rgba(0,0,0,0.04);
    }
    .hidden{display:none}
    .center{display:flex;align-items:center;justify-content:center}
    footer{margin-top:18px;color:var(--muted);font-size:13px;text-align:center}

    /* responsive */
    @media (max-width:920px){
      .grid{grid-template-columns:1fr; padding-bottom:30px}
      .hero-visual{width:120px;height:120px}
    }

    /* small badges */
    .badge{
      font-size:12px;padding:6px 8px;border-radius:999px;background:#fff6fb;color:#b72f6b;
      border:1px solid rgba(183,47,107,0.08);
    }

    .ok{color:var(--success);font-weight:700}
    .err{color:var(--danger);font-weight:700}
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <div class="logo">SMS</div>
      <div>
        <h1>کمپین روز جهانی دختر — SMS.ir</h1>
        <p class="lead">#یه_پیام_ساده_می‌تونه_خوشحالت_کنه — با تم احساسی #به_یاد_الهه</p>
      </div>
    </header>

    <div class="grid">
      <!-- سمت چپ: فرم اصلی -->
      <div class="card">
        <div class="hero">
          <div class="hero-visual">🌸</div>
          <div class="hero-text">
            <h2>یه پیام ساده بفرست، لبخند بساز</h2>
            <p>شماره‌تو وارد کن تا اگه تو دیتابیسِ دختران شرکت بودی، پیام تبریک شخصی‌سازی‌شده با اسمِ خودت ببینی و یه هدیه دریافت کنی.</p>
          </div>
        </div>

        <!-- فرم شماره تلفن -->
        <form id="phone-form" autocomplete="off">
          <div>
            <label for="phone">شماره همراه</label>
            <input id="phone" name="phone" type="tel" placeholder="مثال: 09121234567" required inputmode="tel" pattern="09[0-9]{9}">
            <div class="muted-small">ما فقط برای تأیید و شخصی‌سازی از شماره استفاده می‌کنیم.</div>
          </div>
          <div class="center" style="margin-top:6px;">
            <button class="btn" type="submit">بررسی و ادامه</button>
          </div>
        </form>

        <!-- بخش کد تایید -->
        <div id="verify-section" class="hidden result">
          <div id="verify-message" class="muted-small">کد تایید برای شماره شما ارسال شد.</div>
          <form id="code-form" autocomplete="off" style="margin-top:8px;display:flex;gap:8px;align-items:center">
            <input id="code" name="code" type="text" placeholder="کد ۴ رقمی" maxlength="6" style="flex:1">
            <button class="btn" type="submit">تایید کد</button>
          </form>
          <div id="resend" class="muted-small" style="margin-top:8px">کد دریافت نکردی؟ <a href="#" id="resend-link">ارسال مجدد</a></div>
        </div>

        <!-- پیام شخصی‌سازی‌شده -->
        <div id="personal-section" class="hidden result">
          <div id="personal-message" style="font-size:16px;font-weight:700;margin-bottom:8px"></div>
          <div class="muted-small" id="personal-sub">کد تأیید برای شما ارسال شد. با کد وارد شوید تا هدیه نمایش داده شود.</div>
        </div>

        <!-- نمایش هدیه -->
        <div id="gift-section" class="hidden result">
          <div style="display:flex;gap:10px;align-items:center">
            <div class="gift" style="flex:1">
              <div style="font-size:28px">🎁</div>
              <div>
                <div class="tag" id="gift-title">هدیه ویژه</div>
                <div class="muted-small" id="gift-desc">لطفاً کدتان را تایید کنید تا هدیه نمایش داده شود.</div>
              </div>
            </div>
          </div>
          <div style="margin-top:12px;display:flex;gap:8px;flex-direction:column">
            <button id="claim-btn" class="btn">دریافت هدیه</button>
            <div class="muted-small">هدایا به‌صورت تصادفی انتخاب می‌شود و می‌تواند اعتبار کافه، کوپن تخفیف و ... باشد.</div>
          </div>
        </div>

        <!-- ارسال تبریک به دوست -->
        <div id="send-to-friend" class="hidden result" style="margin-top:12px">
          <h4 style="margin:0 0 8px">ارسال پیام تبریک به دوست/همکار</h4>
          <form id="send-friend-form" autocomplete="off" style="display:flex;flex-direction:column;gap:8px">
            <input id="friend-name" type="text" placeholder="اسم گیرنده (اختیاری)" />
            <input id="friend-phone" type="tel" placeholder="شماره گیرنده (مثال: 0912...)" pattern="09[0-9]{9}" />
            <textarea id="friend-msg" rows="3" placeholder="متن پیام تبریک (قابل ویرایش)"></textarea>
            <div style="display:flex;gap:8px">
              <button class="btn" type="submit">ارسال پیامک</button>
              <button id="friend-anon" type="button" class="btn" style="background:linear-gradient(90deg,#7bd6ff,#a9e8ff)">ارسال ناشناس</button>
            </div>
            <div class="muted-small">ارسال از طریق سیستم پیامکی داخلی خواهد بود (نیاز به پیاده‌سازی بک‌اند).</div>
          </form>
          <div id="friend-result" class="muted-small" style="margin-top:8px"></div>
        </div>

      </div>

      <!-- سمت راست: اطلاعات و پیش‌نمایش -->
      <aside class="side">
        <div class="card">
          <div style="display:flex;justify-content:space-between;align-items:center">
            <div>
              <div class="badge">#به_یاد_الهه</div>
              <h3 style="margin:8px 0 0">شیوهٔ کار</h3>
            </div>
          </div>

          <ol style="margin-top:12px;padding-left:18px;color:var(--muted)">
            <li>اسکن/ورود شماره</li>
            <li>دریافت کد تایید</li>
            <li>مشخص شدن اگر در دیتابیس دختران شرکت هستی</li>
            <li>دریافت هدیهٔ تصادفی و امکان ارسال تبریک</li>
          </ol>

          <div style="margin-top:12px">
            <div class="muted-small">نمونهٔ هدایای ممکن:</div>
            <ul style="margin:8px 0 0;color:var(--muted)">
              <li>اعتبار ۳۰۰,۰۰۰ تومان کافه</li>
              <li>کد تخفیف ۱۰۰٪ سرویس‌های منتخب</li>
              <li>کارت هدیه فروشگاهی</li>
              <li>تخفیف اشتراک‌های ویژه</li>
            </ul>
          </div>
        </div>

        <div style="height:12px"></div>

        <div class="card">
          <h4 style="margin:0 0 6px">نکات پیاده‌سازی</h4>
          <ul style="color:var(--muted);margin:0;padding-left:18px">
            <li>بک‌اند: endpoint برای بررسی شماره و ارسال کد نیاز است.</li>
            <li>حفظ حریم خصوصی: شماره‌ها رمزنگاری شوند و فقط برای تایید و شخصی‌سازی استفاده شوند.</li>
            <li>ایمن‌سازی: rate limit روی ارسال کد و ارسال پیامک اعمال شود.</li>
          </ul>
        </div>
      </aside>
    </div>

    <footer>
      طراحی کمپین — SMS.ir — همهٔ حقوق محفوظ است.
    </footer>
  </div>

  <script>
    /***********************
     * نسخهٔ نمونه (فرانت‌اند)
     * نکته: این فایل به‌صورت محلی "شبیه‌سازی" می‌کند.
     * برای تولید واقعی باید این نقاط را به بک‌اند متصل کنید:
     *  - POST /api/check-phone  { phone } -> { found: bool, name?: string }
     *  - POST /api/send-code   { phone } -> { success: true }
     *  - POST /api/verify-code { phone, code } -> { ok: true }
     *  - POST /api/redeem-gift { phone } -> { gift: { title, desc, code? } }
     *  - POST /api/send-sms    { to, message, from?, anonymous? } -> { ok: true }
     ************************/

    // دادهٔ نمونه برای شبیه‌سازی دیتابیس
    const MOCK_DB = {
      "09121234567": { name: "الهه" },
      "09129876543": { name: "سارا" },
      "09121112222": { name: "مریم" }
    };

    // هدایای نمونه
    const GIFTS = [
      { title: "اعتبار کافه — ۳۰۰٬۰۰۰ تومان", desc: "قابل استفاده در کافه‌های همکار" },
      { title: "کد تخفیف ۱۰۰٪ قهوه (یک سفارش)", desc: "یک بار قابل استفاده" },
      { title: "کارت هدیه ۱۵۰٬۰۰۰ تومان", desc: "قابل استفاده در فروشگاه منتخب" },
      { title: "اشتراک ۱ ماهه پرمیوم", desc: "دسترسی ویژه به سرویس‌ها" }
    ];

    // بخش‌های صفحه
    const phoneForm = document.getElementById('phone-form');
    const phoneInput = document.getElementById('phone');
    const verifySection = document.getElementById('verify-section');
    const verifyMessage = document.getElementById('verify-message');
    const codeForm = document.getElementById('code-form');
    const codeInput = document.getElementById('code');
    const personalSection = document.getElementById('personal-section');
    const personalMessage = document.getElementById('personal-message');
    const giftSection = document.getElementById('gift-section');
    const giftTitle = document.getElementById('gift-title');
    const giftDesc = document.getElementById('gift-desc');
    const claimBtn = document.getElementById('claim-btn');
    const sendToFriend = document.getElementById('send-to-friend');
    const sendFriendForm = document.getElementById('send-friend-form');
    const friendResult = document.getElementById('friend-result');
    const resendLink = document.getElementById('resend-link');

    // برای شبیه‌سازی: نگه داشتن کدهای تولیدی
    const generatedCodes = {};

    // فرم شماره: بررسی و ارسال کد (شبیه‌سازی)
    phoneForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const phone = phoneInput.value.trim();
      if(!/^09\d{9}$/.test(phone)){
        alert('شماره را به فرمت صحیح وارد کنید (مثال: 0912...)');
        return;
      }

      // شبیه‌سازی فراخوانی به بک‌اند: POST /api/check-phone
      const found = !!MOCK_DB[phone];
      // نمایش پیام و ارسال کد
      showVerifySection(phone);
      if(found){
        personalMessage.textContent = `سلام ${MOCK_DB[phone].name} عزیز — روز جهانی دختر مبارک! 🌸`;
        personalSection.classList.remove('hidden');
      } else {
        personalMessage.textContent = `روز جهانی دختر مبارک! اگر دوست داری اسم خودت رو اضافه کنیم، لطفاً با HR تماس بگیر.`;
        personalSection.classList.remove('hidden');
      }
      // تولید کد 4 رقمی و "ارسال" (شبیه‌سازی)
      const code = String(Math.floor(1000 + Math.random()*9000));
      generatedCodes[phone] = code;
      console.log('[SIM] sent code', code, 'to', phone);
      verifyMessage.textContent = `کد تایید برای شماره ${phone} ارسال شد (در نسخهٔ آزمایشی کد در کنسول نمایش داده می‌شود).`;
    });

    function showVerifySection(phone){
      verifySection.classList.remove('hidden');
      giftSection.classList.add('hidden');
      sendToFriend.classList.add('hidden');
      personalSection.classList.add('hidden');
      friendResult.textContent = '';
    }

    // ارسال مجدد کد (شبیه‌سازی با محدودیت ساده)
    resendLink.addEventListener('click', (e)=> {
      e.preventDefault();
      const phone = phoneInput.value.trim();
      if(!/^09\d{9}$/.test(phone)){ alert('ابتدا شماره را وارد کنید.'); return; }
      const code = String(Math.floor(1000 + Math.random()*9000));
      generatedCodes[phone] = code;
      verifyMessage.textContent = `کد تأیید مجدداً ارسال شد (کد در کنسول نمایش داده می‌شود).`;
      console.log('[SIM] resend code', code, 'to', phone);
    });

    // تایید کد
    codeForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const phone = phoneInput.value.trim();
      const code = codeInput.value.trim();
      if(!generatedCodes[phone]){
        alert('ابتدا درخواست کد بدهید.');
        return;
      }
      if(code !== generatedCodes[phone]){
        alert('کد نادرست است.');
        return;
      }
      // موفقیت آمیز: نمایش هدیه
      verifySection.classList.add('hidden');
      personalSection.classList.remove('hidden');
      giftSection.classList.remove('hidden');
      sendToFriend.classList.remove('hidden');

      // نمایش هدیهٔ تصادفی ولی واقعی شدنش نیاز به بک‌اند دارد
      const gift = GIFTS[Math.floor(Math.random()*GIFTS.length)];
      giftTitle.textContent = gift.title;
      giftDesc.textContent = gift.desc;
      claimBtn.textContent = 'دریافت هدیه و مشاهدهٔ جزئیات';
    });

    // دکمه دریافت هدیه (شبیه‌سازی کد هدیه یا لینک)
    claimBtn.addEventListener('click', () => {
      const phone = phoneInput.value.trim();
      // شبیه‌سازی فراخوانی به بک‌اند: POST /api/redeem-gift
      const gift = GIFTS[Math.floor(Math.random()*GIFTS.length)];
      giftTitle.textContent = gift.title;
      giftDesc.textContent = gift.desc + ' — کد اختصاصی: ' + randomCode(8);
      claimBtn.classList.add('hidden');
      // در نسخهٔ واقعی: سرور باید کد/اعتبار را ایجاد و در دیتابیس ذخیره کند و پیامک/ایمیل ارسال کند.
      alert('هدیه برای شما ثبت شد. اطلاعات هدیه در همین صفحه نمایش داده می‌شود.');
    });

    function randomCode(len=6){
      const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      let s='';
      for(let i=0;i<len;i++) s+=chars[Math.floor(Math.random()*chars.length)];
      return s;
    }

    // ارسال پیام به دوست/همکار (شبیه‌سازی ارسال پیامک)
    sendFriendForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const to = document.getElementById('friend-phone').value.trim();
      const name = document.getElementById('friend-name').value.trim();
      const msg = document.getElementById('friend-msg').value.trim();

      if(!/^09\d{9}$/.test(to)){
        friendResult.innerHTML = '<span class="err">شماره گیرنده را به درستی وارد کنید.</span>';
        return;
      }
      if(!msg){
        friendResult.innerHTML = '<span class="err">متن پیام را وارد کنید.</span>';
        return;
      }

      // در نسخهٔ واقعی: اینجا باید POST /api/send-sms با payload مناسب فراخوانی شود.
      // شبیه‌سازی موفقیت:
      friendResult.innerHTML = '<span class="ok">پیام با موفقیت ارسال شد ✅</span>';
      console.log('[SIM] send sms to', to, 'message:', msg, 'from:', document.getElementById('phone').value);
    });

    // دکمه ارسال ناشناس
    document.getElementById('friend-anon').addEventListener('click', () => {
      const to = document.getElementById('friend-phone').value.trim();
      const msg = document.getElementById('friend-msg').value.trim();
      if(!/^09\d{9}$/.test(to)){ friendResult.innerHTML = '<span class="err">شماره گیرنده را درست وارد کنید.</span>'; return; }
      if(!msg){ friendResult.innerHTML = '<span class="err">متن پیام را وارد کنید.</span>'; return; }
      friendResult.innerHTML = '<span class="ok">پیام ناشناس ارسال شد 🎉</span>';
      console.log('[SIM] anonymous send to', to, 'msg:', msg);
    });

    // مقدار پیش‌فرض متن پیام (قابل ویرایش)
    document.getElementById('friend-msg').value = 'روز جهانی دختر مبارک! امیدوارم همیشه شاد و موفق باشی 🌸 — از طرف یک همکار';
  </script>
</body>
</html>
