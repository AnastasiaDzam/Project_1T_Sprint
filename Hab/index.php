<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Карта прогресса</title>

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../components/footer.css"/>
    <link rel="stylesheet" href="../components/footer.php"/>
    <link rel="stylesheet" href="../main.css"/>
    <link rel="stylesheet" href="../animation.css"/>
    <link rel="stylesheet" href="artefacts.css"/>
    <link rel="stylesheet" href="result.css"/>

    <link rel="stylesheet" href="./main.js">
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />

    <script src="main.js"></script>
</head>
<body style="z-index: 1;">
<!-- Хедер -->
<div class="hub_home">
    <header class="section_wrap">
        <div class="header_wrap">
            <div class="header_logo">
                <a href="#"
                ><img class="img_width" src="../img/logo.svg" alt="logo"
                /></a>
            </div>

            <div class="header_hub_group_btn">
                <button class="btn_tg btn_hover_gradient btn_hub_name">
                    Андрей Петров
                    <span>
                <svg
                        class="icon_logo_header"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                >
                  <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.0004 22C7.80525 22 4.22266 21.4753 4.22266 19.3742C4.22266 17.273 7.78252 15.3333 12.0004 15.3333C16.1956 15.3333 19.7782 17.2542 19.7782 19.3554C19.7782 21.4557 16.2183 22 12.0004 22Z"
                          stroke="#DCDCF0"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                  />
                  <path
                          d="M17.0004 7C17.0004 9.76142 14.7619 12 12.0004 12C9.23901 12 7.00043 9.76142 7.00043 7C7.00043 4.23858 9.23901 2 12.0004 2C14.7619 2 17.0004 4.23858 17.0004 7Z"
                          stroke="#DCDCF0"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                  />
                </svg>
              </span>
                </button>
                <a href="../playland/index.html" target="_blank"
                >
                    <button class="btn_exit btn_tg btn_hover_gradient">
                        Выход
                    </button>
                </a
                >
            </div>
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
                            <img
                                    class="img_width ita_hub_img_top"
                                    src="./img/ita_first_hub.svg"
                                    alt="ita"
                            />
                        </div>
                        <div class="dialog_cloud dialog_cloud_hub">
                            <div class="dialog_wrap_text">
                                <p class="dialog_wrap_text_top">
                                    Привет! это ХАБ, твоя основная страница, где ты сможешь
                                    опробовать на себе за каждую из 6 профессий и отследить
                                    путь своего КВЕСТА на карте прогресса.
                                </p>
                                <p class="dialog_wrap_text_bottom">
                                    Также сможешь увидеть свои результаты прохождения
                                    профориентации. Уверены, что ты полон решимости начать
                                    свой путь в IT сфере!
                                </p>
                            </div>
                            <img
                                    class="img_width ita_cloud_hub"
                                    src="../img/cloud.svg"
                                    alt="cloud"
                                    id="ita_cloud_hub"
                            />
                        </div>
                    </div>
                    <div class="hub_btn_start_quest">
                        <button class="btn_hover_gradient btn_tg btn_hover_transparent">
                            Начать квест
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <!--Карта прогресса-->
        <section class="hub_progress">
            <div class="Progress-main">
                <!--Модальное окно для карты прогресса-->
                <div class="modal_hub" id="modalHub">
              <span
                      class="material-symbols-outlined modal_close"
                      style="display: flex; justify-content: flex-end"
                      id="closeModalHub"
              >close</span
              >
                    <div class="modal_hub_wrap">
                        <div class="modal_left_column">
                            <div class="modal_left_column_double_check">
                                <div class="icon_modal_block">
                                    <img
                                            src="img/icon_success_2.svg"
                                            class="modal_icon"
                                            alt="check"
                                    />
                                </div>
                                <p class="modal_text text_progress">
                                    Квест пройден. Все тесты и практическое задание выполнены
                                </p>
                            </div>
                            <div class="modal_left_column_hourglass">
                                <div class="icon_modal_block">
                                    <img
                                            src="img/icon_wait.svg"
                                            class="modal_icon"
                                            alt="hourglass"
                                    />
                                </div>
                                <p class="modal_text text_progress">
                                    Квест в процессе прохождения
                                </p>
                            </div>
                        </div>

                        <div class="modal_right_column">
                            <div class="modal_right_column_check">
                                <div class="icon_modal_block">
                                    <img
                                            src="img/icon_process.svg"
                                            class="modal_icon"
                                            alt="check"
                                    />
                                </div>
                                <p class="modal_text text_progress">
                                    Квест и тесты пройдены, но практическое задание не
                                    отправлено
                                </p>
                            </div>
                            <div class="modal_right_column_elipse">
                                <div class="icon_modal_block">
                                    <img
                                            src="img/elipse_icon.svg"
                                            class="modal_icon"
                                            alt="Ellipse"
                                    />
                                </div>
                                <p class="modal_text text_progress">Квест не пройден</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Progress-card-name">Карта прогресса</div>
                <span
                        class="material-symbols-outlined click-name"
                        style="font-size: 28px !important"
                        id="openModalHub"
                >help</span
                >
            </div>
            <div class="Progress_card">
                <div class="Progress-block">
                    <div class="card" id="card1">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card1')"
                    >help</span
                    >
                                <img class="img_people" src="./img/oleg.svg" alt=""/>
                                <div class="profession">Менеджер</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card1')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Как менеджер, вы будете руководить командой и управлять
                                    проектами. Если вы организованный, можете работать в
                                    напряженных ситуациях и хорошо понимаете, как мотивировать
                                    своих коллег, то это может быть для вас.
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span class="material-symbols-outlined circle circle-after"
                  >circle</span
                  >
                        </div>
                    </div>

                    <div class="card" id="card2">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card2')"
                    >help</span
                    >
                                <img class="img_people" src="./img/jana.svg" alt=""/>
                                <div class="profession">Аналитик</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card2')"
                    >close
                    </span>
                                <div class="profession-text">
                                    Аналитик обычно специализируется на анализе данных. Если
                                    вы любите математику, умеете работать с таблицами и
                                    графиками, анализировать результаты и делать выводы, то
                                    этот выбор может быть для вас
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span class="material-symbols-outlined circle circle-after"
                  >circle</span
                  >
                        </div>
                    </div>

                    <div class="card" id="card3">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card3')"
                    >help</span
                    >
                                <img class="img_people" src="./img/vitia.svg" alt=""/>
                                <div class="profession">Маркетолог</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card3')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Маркетолог занимается продвижением продукции или услуг на
                                    рынке. Если вы легко общаетесь с людьми, умеете
                                    анализировать рынок и создавать рекламные кампании, то
                                    можете остановить свой выбор на этой профессии
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span
                          class="material-symbols-outlined circle circle-after circle-after-long"
                  >circle</span
                  >
                        </div>
                    </div>
                </div>

                <div class="Progress-block">
                    <div class="card" id="card4">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card4')"
                    >help</span
                    >
                                <img class="img_people" src="./img/dasha.svg"/>
                                <div class="profession">Дизайнер</div>
                                <span class="triangle-down"></span>
                            </div>

                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card4')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Дизайнер занимается созданием креативных и привлекательных
                                    визуальных образов. Если вы творческая натура с чувством
                                    стиля и умеете работать с графическими программами, то эта
                                    профессия может быть для вас
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span
                          class="material-symbols-outlined circle circle-after circle-before"
                  >circle</span
                  >
                        </div>
                    </div>

                    <div class="card" id="card5">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card5')"
                    >help</span
                    >
                                <img class="img_people" src="./img/anton.svg" alt=""/>
                                <div class="profession">Разработчик</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card5')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Разработчики создают программное обеспечение для
                                    компьютеров и мобильных устройств. Если у вас есть базовые
                                    знания в программировании, то сможете создать множество
                                    интересных проектов
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span class="material-symbols-outlined circle circle-after"
                  >circle</span
                  >
                        </div>
                    </div>

                    <div class="card" id="card6">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card6')"
                    >help</span
                    >
                                <img class="img_people" src="./img/lena.svg" alt=""/>
                                <div class="profession">Тестировщик</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card6')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Тестировщик занимается проверкой качества продукции. Если
                                    у вас есть высокая внимательность к деталям и умение
                                    анализировать, то этот выбор может быть для вас
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span
                          class="material-symbols-outlined circle circle-after circle-after-long"
                  >circle</span
                  >
                        </div>
                    </div>
                </div>
                <div class="last-cards">
                    <div class="card" id="card7">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card7')"
                    >help</span
                    >
                                <img class="img_people" id="Modal" src="./img/achivments.svg" alt=""/>
                                <div class="profession result_link">Результаты</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card7')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Чтобы получить результаты нужно пройти минимум 2 квеста
                                </div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                  <span
                          class="material-symbols-outlined circle circle-after circle-before"
                  >circle</span
                  >
                        </div>
                    </div>

                    <div class="card" id="card8">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card8')"
                    >help</span
                    >
                                <div class="profession-lock">
                                    <img class="lock" src="./img/lock.svg" alt=""/>
                                </div>
                                <div class="profession artefacts_link">Артефакты</div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 200% !important"
                            onclick="flipCard('card8')"
                    >close</span
                    >
                                <div class="profession-text">
                                    Что бы получить артефакт, нужно завержить все главы квеста
                                </div>
                                <span class="triangle-down"></span>
                                <div class="progress-circle"></div>
                            </div>
                        </div>
                        <div class="progress-circle">
                            <span class="material-symbols-outlined circle">circle</span>
                        </div>
                    </div>
                    <div class="card" id="card9" style="visibility: hidden">
                        <div class="card-inner">
                            <div class="card-front">
                    <span
                            class="material-symbols-outlined click"
                            style="font-size: 120% !important"
                            onclick="flipCard('card9')"
                    >help</span
                    >
                                <div class="profession-lock"></div>
                                <div class="profession"></div>
                                <span class="triangle-down"></span>
                            </div>
                            <div class="card-back">
                    <span
                            class="material-symbols-outlined click circle-back"
                            style="font-size: 200% !important"
                            onclick="flipCard('card9')"
                    >close</span
                    >
                                <div class="profession-text"></div>
                                <span class="triangle-down"></span>
                            </div>
                        </div>
                        <div class="progress-circle">
                            <span class="material-symbols-outlined circle">circle</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Всплывающие окна-->

        <section  class="artefacts-section" id="modalArtefacts">
            <div class="artefacts-section_wrap">
                <span class="material-symbols-outlined close">close</span>
                <div class="text">Здесь ты можешь ознакомиться с результатами прохождения профориентации. Надеемся, <br>что
                    ты сможешь определиться и с уверенностью начнешь свой путь в IT сфере!
                </div>
                <div class="text-artefact">артефакты</div>
                <div style="display: flex; justify-content: center;">
                    <div class="link-section">
                        <p>Это ссылка на твой сайт, который ты сделал в ходе прохождения комикса</p>
                        <p class="link" href="#">https://www.prof.1T.ru/user.....</p>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <button class="button1">Скопировать ссылку <img src="./img/Link copy.svg" alt=""></button>
                </div>
                <div class="question">
                    <p>Ты спрашиваешь, зачем она тебе нужна?</p>
                    <p>Отвечу! Затем что ты поучаствовал в реальной реализации проекта.</p>
                    <p>Ты научился делать продуктовый лендинг и можешь добавить его к себе в портфолио!</p>
                </div>
                <div style="display: flex; justify-content: center;">
                    <div class="text-artefact-bottom">Курсы от 1Т нацелены на получение профессиональных компетенций в
                        каждой профессии
                    </div>
                </div>
                <button class="button2">Записаться на курсы</button>
            </div>
        </section>

        <section class="results-section" id="result_modal">
            <div class="results-section_wrap">
                <span class="material-symbols-outlined close_result">close</span>
                <div class="text">Здесь ты можешь ознакомиться с результатами прохождения профориентации. Надеемся,<br>
                    что ты
                    сможешь определиться и с уверенностью начнешь свой путь в IT сфере!
                </div>
                <div class="text-result">результаты</div>
                <div class="results-wrap">
                    <div class="profession">Менеджер
                        <div class="percent">57 %</div>
                    </div>
                    <div class="profession">Аналитик
                        <div class="percent">40 %</div>
                    </div>
                    <div class="profession">Маркетолог
                        <div class="percent">100 %</div>
                    </div>
                    <div class="profession">Дизайнер
                        <div class="percent">50 %</div>
                    </div>
                    <div class="profession">Разработчик
                        <div class="percent">70 %</div>
                    </div>
                    <div class="profession">Тестировщик (не пройден)
                        <div class="percent">0 %</div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <button class="button">Поделиться<img src="./img/Share.svg" alt=""></button>
                </div>
                <div class="text-result-bottom">Курсы от 1Т нацелены на получение профессиональных<br>компетенций в
                    каждой
                    профессии
                </div>
            </div>
        </section>

        <!--Ита финальная-->

        <section class="section_wrap">
            <div class="contain dialog_ita">
                <div class="dialog_wrap ita_final_dialog">
                    <div>
                        <img
                                class="img_width ita_hub_img"
                                src="img/ita_second_hub.png"
                                alt="ita"
                        />
                    </div>
                    <div class="dialog_cloud">
                        <div class="dialog_wrap_text">
                            <p class="cloud_hub second_dialog_hub_top">
                                Поздравляю!! Раздел по профориентации полностью завершён.
                                Теперь вы можете посмотреть результаты своей работы.
                            </p>
                            <p class="cloud_hub second_dialog_hub_bottom">
                                Уверена, что вы определитесь с профессией и начнете свой
                                путь в IT сфере.
                            </p>
                            <img
                                    class="img_width"
                                    src="img/ita_second_hub_cloud.png"
                                    alt="cloud"
                            />
                        </div>
                        <div class="dialog_cloud_star">
                            <div class="dialog_cloud_star__wrap">
                                <img
                                        class="dialog_cloud_star__img"
                                        src="./img/result_hub_cloud.svg"
                                        alt="warning"
                                />
                                <div class="dialog_cloud_star__text">
                                    <a class="dialog_cloud_star__link result_link"
                                    >Посмотреть результат</a
                                    >
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="29"
                                            height="20"
                                            viewBox="0 0 29 20"
                                            fill="none"
                                    >
                                        <path
                                                d="M1.52344 1L8.82784 10.1771"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                        <path
                                                d="M9.61585 9.93463L1.87884 18.7269"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                        <path
                                                d="M10.3311 1L17.6354 10.1772"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                        <path
                                                d="M18.4235 9.93464L10.6865 18.727"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                        <path
                                                d="M19.1377 1L26.442 10.1772"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                        <path
                                                d="M27.2301 9.93464L19.4932 18.727"
                                                stroke="white"
                                                stroke-width="1.72164"
                                                stroke-linecap="round"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="check_hub">
                    <img
                            class="img_warning"
                            src="../manager/img/warning_triangle.svg"
                            alt="warning"
                    />
                    Если квест по профессии не пройден, результат по нему не
                    рассчитывается
                </div>
                <div class="hub_ita_final">
                    <p class="hub_ita_final_text">
                        Курсы от 1Т нацелены на получение профессиональных компетенций в
                        каждой профессии
                    </p>
                    <a
                            href="https://sprint.1t.ru/c/index.html"
                            target="blank"
                            class="btn_hover_gradient btn_tg btn_hover_transparent hub_ita_final_btn"
                    >
                        Записаться на курсы
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>

<footer>
    <?php
    include_once '../components/footer.php';
    ?>
</footer>
<script src="modalHub.js"></script>
</body>
</html>
