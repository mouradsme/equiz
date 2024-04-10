<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="start-btn-container">
      <h2>اختبر معلوماتك</h2>
      <p>أجب عن هذا الاختبار المكون من 100 سؤال لمعرفة مستواك</p>
      <p>أدخل رمز الوصول الخاص بك للبدء</p>
      <input id="code" type="text" />
      <button class="start-btn">ابدأ الاختبار</button>
    </div>

    <div class="quiz-container">
      <h1>اختبر معلوماتك</h1>
      <div class="timer">الوقت المتبقي: 30 ثا</div>
      <h2 class="question"></h2>
      <div class="options"></div>
      <button class="next-btn">التالي</button>
    </div>

    <div class="quiz-result"></div> 

  <script type="text/javascript">
    var quizData = JSON.parse('<?= json_encode($quizData); ?>');

    
    const MAX_QUESTIONS = quizData.length;
  </script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
