<?php

/* https://api.telegram.org/bot5067528974:AAFO5Mk_9JfXiUl32GUsfyr9wg-b_DCMK5U/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "5067528974:AAFO5Mk_9JfXiUl32GUsfyr9wg-b_DCMK5U";
$chat_id = "-518783846";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: thankYou.html');
} else {
  echo "Error";
}
?>

<!-- document.querySelector('.btn--telegtam').addEventListener('click', cartadd);

function cartadd() {
document.querySelector('.modal__inner--my').classList.remove('modal__inner--new');
document.querySelector('.wrapper-page').classList.add('wrapper-page--active');
}

document.querySelector('.modal__inner-close').addEventListener('click', cartremove);

function cartremove() {
document.querySelector('.modal__inner--my').classList.add('modal__inner--new');
document.querySelector('.wrapper-page').classList.remove('wrapper-page--active');
} -->

<!-- <div class="form-wrapper">
  <form class="modal__inner modal__inner--my modal__inner--center modal__inner--new" id="form" action="telegram.php" method="POST">
    <div class="modal__inner-wrapper">
      <svg class="modal__inner-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
        <path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z">
        </path>
      </svg>
      <div class="modal__info">
        <div class="modal__title modal__title--my"><span class="color-accent">Мы получили данные
            и уже считаем стоимость кровати
          </span></div>
        <p class="modal__description modal__description--my">Введите Ваш телефон
          и получите расчет стоимости
          в течение 15 минут
        </p>
      </div>
      <input type="text" name="user_name" class="input modal__input modal__input--user" placeholder="Введите ваше имя">
      <input type="text" name="user_phone" class="input modal__input modal__input--phone phone-mask" placeholder="+375 (__) ___ - __ - __">
      <button type="submit" class="btn modal__btn modal__btn--gmail">Получить Расчет + Подарки</button>
      <p class="modal__agreement modal__agreement--my">Подарок и скидку забронируем за Вашим номером телефона
      </p>
      <input type="hidden" name="type" value="Получить Расчет + Подарки">
    </div>
  </form>
</div> -->