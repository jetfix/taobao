<?php
require_once "type-video-slider.php";
require_once "meta-video-slider.php";
require_once "taxonomy-video-slider.php";

require_once "type-transport-com.php";
require_once "meta-transport-com.php";
require_once "taxonomy-transport-com.php";

add_shortcode( 'howItWorks', 'shortcode_howItWorks' );

function shortcode_howItWorks(){
    return '<div class="alamo">
						<ul class="border">
							<li>
								<h2>Как это работает:</h2>
								<p>Для тех, кто первый раз работает с нами, мелким оптом считаем заказ от 6 500 юаней. В дальнейшем от 11 000 юаней.</p>
							</li>
							<li>
								<p><b>Размер комиссии при заказе составляет:</b></p>
								<table cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td>
											<span>10%</span>
											<strong>от 6500 юаней</strong>
											<em>при первом заказе</em>
										</td>
										<td>
											<span>10%</span>
											<strong>от 6500 юаней</strong>
										</td>
										<td>
											<span>10%</span>
											<strong>от 27 000 юаней</strong>
										</td>
									</tr>
								</tbody></table>
							</li>
							<li>
								<h3>Доставка в Россию - от 300 р./кг.</h3>
								<p>г. Благовещенск, Амурская обл.</p>
							</li>
							<li>
								<h3>Оплата происходит в несколько этапов:</h3>
								<ol>
									<li>
										<span class="col-1">Оплата <i>вашего заказа</i></span>
										<span class="plus">+</span>
										<span class="commission">Наша комиссия</span>
										<span class="plus">+</span>
										<span class="col-1">Доставка <i>по Китаю</i></span>
									</li>
									<li><p><b>Оплата за перевозку из Китая в РФ</b> (г.Благовещенск, Амурская область).</p></li>
									<li><p><b>Оплата транспортных расходов до Вашего города</b> (если способ доставки не предусматривает оплату при получении, как, например, когда товар отправляется службой курьерской доставки EMS, в остальных случаях транспортные расходы оплачиваете самостоятельно при получении груза в Вашем городе).</p></li>
								</ol>
							</li>
						</ul>
					</div>';
}

add_shortcode( 'spiral', 'shortcode_spiral' );

function shortcode_spiral(){
    global $post;
    wp_reset_query();
    rewind_posts();
    if (have_posts()) : while (have_posts()) : the_post();
    return '<div class="steps step-next">
                <div class="num-1">
                    <span class="num">2</span>
                    <p>'.get_post_meta($post->ID, "num-2", true).'</p>
                </div>
                <div class="num-2">
                    <span class="num">1</span>
                    <p>'.get_post_meta($post->ID, "num-1", true).'</p>
                </div>

                <div class="num-4">
                    <span class="num">3</span>
                    <p>'.get_post_meta($post->ID, "num-3", true).'</p>
                </div>
                <div class="num-5">
                    <span class="num">4</span>
                    <p>'.get_post_meta($post->ID, "num-4", true).'</p>
                </div>
                <div class="num-6">
                    <span class="num">5</span>
                    <p>'.get_post_meta($post->ID, "num-5", true).'</p>
                </div>
            </div>
            <div class="color-text">
                <p>'.get_post_meta($post->ID, "Текст под схемой", true).'</p>
            </div>'; ?>
<?php endwhile; endif; wp_reset_query(); }