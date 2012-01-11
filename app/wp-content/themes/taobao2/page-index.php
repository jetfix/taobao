<?php get_header(); ?>

<section id="container">
    <div class="left">
        <div class="slider">
            <ul>
                <?php query_posts('post_type=baner_slider&order=ASC'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <li><a href="#">
                    <?php the_post_thumbnail(); ?>
                </a></li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
            <div class="pager"></div>
        </div>
        <div class="videos">
            <h2>Видеоинструкции <span> по работе с сервисом:</span></h2>
            <span class="prev">&nbsp;</span>
            <span class="next">&nbsp;</span>

            <div class="slaider-video">
                <ul>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif"
                                                           alt="" title=""/></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="boxen">
            <h2>Внутренний курс <span>Taobao.ru.com:</span></h2>
            <span class="calcul">5,3</span>

            <div class="calcul">
                <a href="<?php bloginfo('url'); ?>/?page_id=1693">Калькулятор</a>

                <p>Рассчитать стоимость товаров с учетом доставки.</p>
            </div>
            <div class="top-s"></div>
            <div class="body-s">
                <h2>Русский поиск <span>на Taobao.com:</span></h2>

                <form action="" method="post">
                    <div class="item">
                        <label>Введите слово или фразу на <br/> русском языке и нажмите <br/> кнопку “Перевести”
                        </label>
                        <input type="text" class="text"/>
                        <input type="submit" class="sub" value="Перевести"/>
                    </div>
                    <div class="item">
                        <label>Затем нажмите "Поиск на <br/> Taobao" и у вас откроется <br/> страница с результатами
                            поиска.</label>
                        <input type="text" class="text"/>
                        <input type="submit" class="sub" value="Поиск на Taobao.com"/>
                    </div>
                    <div class="item">
                        <a href="#">Видеоинструкция</a>
                    </div>
                </form>
            </div>
            <div class="bottom-s"></div>
        </div>
    </div>
</section>
<div id="bg-wraper">
    <div id="wraper">
        <div class="read">
            <h2>Полезно почитать</h2>
            <ul>
                <li><a href="#">Первые шаги на Таобао. Что такое Таобао? Справочная информация о компании, предлагаемых
                    услугах.</a></li>
                <li><a href="#">Первые шаги на таобао. Как искать вещи? Как правильно выбирать продавца? Все доступно и
                    с картинками.</a></li>
                <li><a href="#">Почему продавец долго отправляет вещи.</a></li>
                <li><a href="#">Как правильно выбрать фирменную одежду на китайском аукционе.</a></li>
            </ul>
        </div>
        <div class="report">
            <h2>Новые отзывы <a href="#">все отзывы</a></h2>
            <ul>
                <li>
                    <p><strong>Александр</strong><span>, Белгород, 01.11.2011</span></p>

                    <p><a href="#">Получил посылку ))) все запечатано все цело !) Очень оперативно работа и внимание к
                        клиенту! Теперь...</a></p>
                </li>
                <li>
                    <p><strong>Александр</strong><span>, Белгород, 01.11.2011</span></p>

                    <p><a href="#">Получил посылку ))) все запечатано все цело !) Очень оперативно работа и внимание к
                        клиенту! Теперь...</a></p>
                </li>
                <li>
                    <p><strong>Александр</strong><span>, Белгород, 01.11.2011</span></p>

                    <p><a href="#">Получил посылку ))) все запечатано все цело !) Очень оперативно работа и внимание к
                        клиенту! Теперь...</a></p>
                </li>
                <li>
                    <p><strong>Александр</strong><span>, Белгород, 01.11.2011</span></p>

                    <p><a href="#">Получил посылку ))) все запечатано все цело !) Очень оперативно работа и внимание к
                        клиенту! Теперь...</a></p>
                </li>
            </ul>
        </div>
    </div>
</div>
<section id="bg-main">
    <section id="main">
        <div class="block">
            <div class="news">
                <h5>Русский посредник Taobao.ru.com рад приветствовать вас на нашем сайте!</h5>

                <p>Если вы тут, значит вам интересно, что такое китайский аукцион Таобао. Как купить на taobao? Как
                    доставить вещи с таобао? Чем таобао лучше других аукционов и прочие вопросы? Как покупать вещи и
                    электронику напрямую в Китае, чтобы не переплачивать в несколько раз за то же самое в Вашем
                    городе?</p>

                <p>Условия работы с нами, в качестве посредника таобао, вы можете прочитать <a href="#">тут!</a></p>
            </div>
            <div class="news">
                <h5>Вам нужен надежный представитель в Китае (посредник Taobao)? Мы педлагаем:</h5>
                <ul>
                    <li>закупать вещи с китайского интернет-магазина таобао и других аукционов Китая</li>
                    <li> доставку из Китая (начиная от сборных грузов в 1 кг и заканчивая контейнерными перевозками в
                        любую точку мира – с нами возможно все)
                    </li>
                    <li>поиск поставщиков</li>
                    <li>помощь в заключении договоров с китайскими поставщиками и многое другое</li>
                </ul>
                <p>Китай и Taobao – это наш профиль «От и до».</p>
            </div>
            <div class="news">
                <h5>Вы хотите построить бизнес, связанный с Китаем и Тао Бао, но не знаете, с чего начать?</h5>

                <p>Наши специалисты имеют огромный опыт работы с Китаем: поиск товара и поставщика, проверка качества,
                    логистика, ведение сложных поставок проблемного товара и т.п. Задавайте любые интересующие Вас
                    вопросы – и мы ответим! Работать с нами просто.</p>
            </div>
            <div class="news">
                <h5>Вам интересно, кто мы? И почему стоит работать именно с нами на таобао?</h5>

                <p>Давайте познакомимся! Наша команда – это опытные, целеустремленные, креативные и позитивные люди.
                    Владеющие русским, китайским, английским языками и умеющие ценить свое и чужое время. Китай и Россия
                    для каждого из нас стали родным домом, так как в этих странах мы провели большую часть своей
                    жизни.</p>

                <p>В данный момент компания находится на границе России и Китая, что облегчает работу и не дает скучать
                    по родине. Каждому клиенту – индивидуальный подход и менеджер, с которым Вы можете работать в
                    дальнейшем.</p>
            </div>
            <div class="news">
                <h5>Мы стремимся стать лучшими и прилагаем для этого <a href="#">максимум усилий!</a></h5>
            </div>
        </div>
        <div class="blog">
            <h2>Новое в блоге</h2>
            <ul>
                <li>
                    <p><span class="data">02.11.2011</span> <span class="com">15</span></p>

                    <p><b>В чём встречать Новый 2012 год?</b></p>

                    <p>По восточному календарю покровителем наступающего года будет <a href="#">чёрный водяной
                        Дракон.</a></p>
                </li>
                <li>
                    <p><span class="data">02.11.2011</span> <span class="com">15</span></p>

                    <p><b>В чём встречать Новый 2012 год?</b></p>

                    <p>По восточному календарю покровителем наступающего года будет <a href="#">чёрный водяной
                        Дракон.</a></p>
                </li>
                <li>
                    <p><span class="data">02.11.2011</span> <span class="com">15</span></p>

                    <p><b>В чём встречать Новый 2012 год?</b></p>

                    <p>По восточному календарю покровителем наступающего года будет <a href="#">чёрный водяной
                        Дракон.</a></p>
                </li>
                <li>
                    <p><span class="data">02.11.2011</span> <span class="com">15</span></p>

                    <p><b>В чём встречать Новый 2012 год?</b></p>

                    <p>По восточному календарю покровителем наступающего года будет <a href="#">чёрный водяной
                        Дракон.</a></p>
                </li>
            </ul>
        </div>
    </section>
</section>
<div class="last">
    <div class="text">
        <div class="text-left">
            <p><strong>Решили покупать на китайском аукционе? </strong></p>

            <p>Все выгоды этого решения Вы поймете уже после первой покупки, которую доставят специалисты нашей компании
                «лично в руки». Что это будет: мобильник, электроника, одежда из Китая?</p>

            <p>Интернет-магазин предоставляет Вам огромное разнообразие. Тем не менее, выбирая и покупая, Вы всегда
                можете полагаться на нашу помощь, даже если дело касается больших оптовых заказов электроники,
                галантереи или одежды из Китая. </p>

            <p>Интернет-магазин тао бао – это удобство, низкие цены, огромнейший выбор, а наша компания – это легкость
                заказа и доставки купленных товаров в Россию.</p>
        </div>
        <div class="text-right">
            <div class="col-1">
                <p><strong>Существует ли сегодня таобао на русском?</strong></p>

                <p>К сожалению, нет. Сам сайт таобао, хотя и рассчитан на покупателей из разных стран, имеет интерфейс и
                    описания, выполненные на китайском языке. Однако, это не может стать преградой для того, кто
                    действительно решил приобретать на аукционе качественные товары.</p>

                <p>Услуги taobao на русском отныне возможны, мы станем вашим надежным «проводником» в далеком Китае и
                    сможем наладить бесперебойные поставки отменного товара.</p>
            </div>
            <div class="col-1 right">
                <p><strong>Аукцион – магазин таобао – это настоящий рай для покупателей.</strong></p>

                <p>Здесь можно найти все: от одежды, галантереи, аксессуаров до электроники, мебели, запчастей на
                    авто.</p>

                <p>Бренды из Китая представлены на аукционе в самом широком ассортименте. Поэтому, всегда есть
                    возможность выбирать и заказывать то, что нужно.</p>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
