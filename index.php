<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вступительная</title>
    <link rel="stylesheet" href="./animation.css" />
    <link rel="stylesheet" href="./css/style-faq.css" />
    <link rel="stylesheet" href="./components/footer.css" />
    <link rel="stylesheet" href="./css/flipster.min.css" />
    <link rel="stylesheet" href="./main.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.flipster.min.js"></script>
  </head>

  <body>
    <div class="home">
      <!-- Хедер -->
      <header class="section_wrap">
        <div class="header_wrap">
          <a href="#"
            ><img class="img_width" src="img/logo.svg" alt="logo"
          /></a>
          <button class="btn_tg btn_hover_gradient">Войти с Telegram</button>
        </div>
      </header>

      <main>
        <!-- Найди себя в айти -->
        <section class="section_wrap">
          <h1 class="title_search">НАЙДИ СЕБЯ В АЙТИ</h1>
          <div class="people_wrap"></div>
          <p class="wrap_people_text">
            Самый недушный курс профориентации для тех, кто вместо того, чтобы
            читать про IT-проффессии, готов попробовать их все на практике
          </p>
        </section>

        <!-- Диалоговое Ита -->
        <div class="bg-top-center">
          <section class="section_wrap">
            <div class="contain">
              <div class="dialog_wrap">
                <div>
                  <img class="img_width" src="img/ita_main.png" alt="ita" />
                </div>
                <div class="dialog_cloud">
                  <div class="dialog_wrap_text">
                    <p class="dialog_wrap_text_top">
                      Привет! Я - 1Т Adviser, сокращенно Ита. Расскажу тебе про
                      профессии в IT сфере. Каждый человек обладает уникальным
                      набором навыков и интересов, и все они могут быть
                      реализованы в рамках различных профессий.
                    </p>
                    <p class="dialog_wrap_text_bottom">
                      Чтобы помочь вам определиться с выбором, мы представляем
                      профессии, которые могут подойти вам!
                    </p>
                  </div>
                  <img class="img_width" src="img/cloud.svg" alt="cloud" />
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- Слайдер с профессиями  -->
        <section class="promo">
          <div class="container promo__container">
            <div class="my-flipster">
              <ul>
                <li>
                  <section class="promo__item promo__item_manage">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title">
                          <span>Менеджер</span> IT-проектов
                        </section>
                        <section class="promo__info">
                          Как менеджер, вы будете руководить командой и
                          управлять проектами. Если вы организованный, можете
                          работать в напряженных ситуациях и хорошо понимаете,
                          как мотивировать своих коллег, то это может быть для
                          вас.
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/manager.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/c/manage.html" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>

                <li>
                  <section class="promo__item promo__item_design">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title">
                          UX / UI<span>Дизайнер</span>
                        </section>
                        <section class="promo__info">
                          Дизайнер занимается созданием креативных и
                          привлекательных визуальных образов. Если вы творческая
                          натура с чувством стиля и умеете работать с
                          графическими программами, то эта профессия может быть
                          для вас.
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/designer.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/design" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>
                <li>
                  <section class="promo__item promo__item_analyze">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title">
                          Системный <span>аналитик</span>
                        </section>
                        <section class="promo__info">
                          Аналитик обычно специализируется на анализе данных.
                          Если вы любите математику, умеете работать с таблицами
                          и графиками, анализировать результаты и делать выводы,
                          то этот выбор может быть для вас.
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/analyst.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/analyze" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>
                <li>
                  <section class="promo__item promo__item_code">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title promo__title_web">
                          Web <span>разработчик</span>
                        </section>
                        <section class="promo__info">
                          Разработчики создают программное обеспечение для
                          компьютеров и мобильных устройств. Пишет код,
                          тестирует его и оценивает результаты.Если у вас есть
                          базовые знания в программировании, то сможете создать
                          множество своих интересных проектов или поддержать уже
                          существующие.
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/developer.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/code" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>
                <li>
                  <section class="promo__item promo__item_market">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title">
                          Digital <span>маркетолог</span>
                        </section>
                        <section class="promo__info">
                          Маркетолог занимается продвижением цифровых платформ,
                          работает с социальными сетями, рекламой и услугами
                          рынка. Если вы легко общаетесь с людьми, умеете
                          анализировать рынок и создавать рекламные кампании, то
                          можете остановить свой выбор на этой профессии.
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/marketologist.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/market" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>
                <li>
                  <section class="promo__item promo__item_aks">
                    <section class="promo__info">
                      <section class="promo__text">
                        <section class="promo__title promo__title_it">
                          <span>Тестировщик</span>
                          информационных систем
                        </section>
                        <section class="promo__info">
                          <p>
                            Тестировщик занимается проверкой качества продукции,
                            работает с кейсами и проводит финальные
                            тестирования. Если у вас есть высокая внимательность
                            к деталям, умение анализировать и находить ошибки,
                            то этот выбор может быть для вас.
                          </p>
                        </section>
                      </section>
                    </section>
                    <img
                      src="img/slider/promo/mobile/tester.svg"
                      alt=""
                      class="promo__img_mobile"
                    />
                    <section class="promo__button">
                      <!-- <a href="/test" class="button">Подробнее</a> -->
                    </section>
                  </section>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- Ита: уже видели..? -->
        <section class="background_city">
          <div class="section_wrap">
            <div class="contain">
              <div class="question_ita_wrap margin_t_b">
                <div>
                  <img class="img_width" src="img/circle_ita.svg" alt="ita" />
                </div>
                <div class="question_ita_text">
                  <p class="question_ita_text_top">
                    <b>Уже видели такие слайды про профессии где-то еще?</b>
                  </p>
                  <p>
                    Понимаем вас. И поэтому приготовили рассказ об ИТ-профессиях
                    в формате манги. Смотрите дальше...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Комикс -->
        <section class="section_wrap">
          <div class="contain">
            <div>
              <img class="img_width" src="img/Block_1.svg" alt="comics" />
            </div>
            <div>
              <img class="img_width" src="img/Block_2.svg" alt="comics" />
            </div>
            <div>
              <img class="img_width" src="img/Block_3.svg" alt="comics" />
            </div>
            <div>
              <img class="img_width" src="img/Block_4.svg" alt="comics" />
            </div>
            <div>
              <img class="img_width" src="img/Block_5.svg" alt="comics" />
            </div>
            <div class="margin_b">
              <img class="img_width" src="img/Block_6.svg" alt="comics" />
            </div>
          </div>
        </section>

        <!-- Зарегистрируйся, чтобы начать игру -->
        <section class="background_city">
          <div class="section_wrap">
            <div class="contain">
              <div class="registration_index_wrap">
                <div class="registration_index">
                  Зарегистрируйся, чтобы
                  <span class="start_game">начать игру!</span>
                </div>
                <button class="btn_tg btn_hover_gradient margin_b">
                  Войти c Telegram
                </button>
              </div>
            </div>
          </div>
        </section>

        <!-- Вопросы и ответы -->
        <section class="faq">
          <div class="container">
            <h1 class="title">Вопросы и <span>ответы</span></h1>
            <div class="faq__wrapper questions-answers">
              <div class="questions-answers__topic topic">
                <ul class="topic__list"></ul>
              </div>
              <div class="questions-answers__questions questions">
                <div class="questions__row"></div>
                <div class="questions__answers answers"></div>
              </div>
            </div>
          </div>
        </section>

        <!-- Партнеры -->
        <section class="section_partners">
          <div class="section_wrap">
            <div class="contain">
              <div class="partners_title">
                Наши
                <span class="partners_subtitle">Партнеры</span>
              </div>
            </div>

            <div class="partners__image">
              <div class="part_rso">
                <img
                  src="./img/part_rso.png"
                  alt="logo RSO"
                  srcset=""
                  class="part__image_item"
                />
              </div>

              <div class="part_rao">
                <img
                  src="./img/part_rao.png"
                  alt="logo RSO"
                  srcset=""
                  class="part__image_item"
                />
              </div>

              <div class="part_rosnoy">
                <img
                  src="./img/part_rosnoy.png"
                  alt="logo RSO"
                  srcset=""
                  class="part__image_item"
                />
              </div>

              <div class="part_obrsoyz">
                <img
                  src="./img/part_obrsoyz.png"
                  alt="logo RSO"
                  srcset=""
                  class="part__image_item"
                />
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Футер -->
    <footer>
      <?php
  include_once 'components/footer.php';
  ?>
    </footer>
    <script type="text/javascript" src="js/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/faq.js"></script>
    <script type="text/javascript" src="js/script-faq.js"></script>
  </body>
</html>
