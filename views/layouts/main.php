<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

LtAppAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
    <body>
<?php $this->beginBody() ?>
<header id="header">
    <div class="header-top" >
        <div class="container">
            <div class="rows ">
                <div class="col-sm-2 non-padding-left pull-left phone-text">
                    <p>8 800 200 06 00</p>
                </div>
                <div class="col-sm-2 email-text">
                    <p>sitaloandrei@mail.ru</p>
                </div>
                <div class="col-sm-4 ">
                </div>
                <div class="col-sm-2 user-box">
                    <a href="" ><p><span class="user-text"></span>Вход<!--<span class="user-pov"></span>--></p></a>
                  <!--  <div>
                        <ul id="user">
                            <li><a href=""> Регистрация</a></li>
                            <li><a href=""> Ввойти</a></li>
                        </ul>
                    </div>-->
                </div>

                <div class="col-sm-2 non-padding-right cart-box">
                    <a  href=""><p><span ></span>Корзина(1)</p></a>
                    <div id="cart">
                        <div class="my-cart">
                            <h5>Моя корзина</h5>
                        </div>
                        <div class="product-cart">
                            <div class="img-product">
                                <img src="images/products/min/image-1.png" alt="Laneige">
                            </div>
                            <div class="description-product">
                                <h4>Название</h4>
                                <h5>Цена: 1000р</h5>
                                <h5>Колличество: 1</h5>
                                <p><a href="">Удалить</a> | <a href="">Редактировать</a> </p>>
                            </div>
                        </div>
                        <div class="product-cart">
                            <div class="img-product">
                                <img src="images/products/min/image-1.png" alt="Laneige">
                            </div>
                            <div class="description-product">
                                <h4>Название</h4>
                                <h5>Цена: 1000р</h5>
                                <h5>Колличество: 1</h5>
                                <p><a href="">Удалить</a> | <a href="">Редактировать</a> </p>>
                            </div>
                        </div>
                        <div class="total-price">
                            <h5>Сумма: 150 р</h5>
                        </div>
                        <div class="button-box">
                            <input type="button" class="button" value="Оформить">
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom" >
        <div class="container">
            <div class="rows">
                <div class="col-sm-5 pull-left">
                    <img src="images/logo.png" alt="Laneige">
                </div>
                <div class="col-sm-7 non-padding-right pull-right">
                    <nav class="dws-menu pull-right">
                        <ul >
                            <li><a href="">Главная</a></li>
                            <li><a href="">Shop</a></li>
                            <li><a href="" >Blog</a></li>
                            <li><a href="">Категория</a>
                                <ul >
                                    <li><a href="">Для тела</a></li>
                                    <li><a href="">Для ног</a></li>
                                    <li><a href="">Archive</a></li>
                                    <li><a href="">Tags</a></li>
                                </ul>
                            </li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<?=$content;?>

<footer>
    <section>
        <div class="container">
            <div class="row">
                <div class="send-email">
                    <h1>Узнай о новостях первой!!</h1>
                    <p>Только для тебя, подпишись на рассыку новостей</p>
                    <p> и получи 10% скидки на следующий заказ</p>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Введите ваш email адрес">
                        </div>
                        <button type="submit" class="btn btn-primary">Подписаться</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="top-footer">
                    <div class="col-sm-3">
                        <h5>О магазине</h5>
                        <p><a href="#">1 ссылка</a> </p>
                        <p><a href="#">2 ссылка</a> </p>
                        <p><a href="#">3 ссылка</a> </p>
                        <p><a href="#">4 ссылка</a> </p>
                        <p><a href="#">5 ссылка</a> </p>
                        <p><a href="#">6 ссылка</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Клиентам</h5>
                        <p><a href="#">1 ссылка</a> </p>
                        <p><a href="#">2 ссылка</a> </p>
                        <p><a href="#">3 ссылка</a> </p>
                        <p><a href="#">4 ссылка</a> </p>
                        <p><a href="#">5 ссылка</a> </p>
                        <p><a href="#">6 ссылка</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Мы в сетях</h5>
                        <p><a href="#">1 ссылка</a> </p>
                        <p><a href="#">2 ссылка</a> </p>
                        <p><a href="#">3 ссылка</a> </p>
                        <p><a href="#">4 ссылка</a> </p>
                        <p><a href="#">5 ссылка</a> </p>
                        <p><a href="#">6 ссылка</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <h5>Контакты</h5>
                        <p><a href="#">1 ссылка</a> </p>
                        <p><a href="#">2 ссылка</a> </p>
                        <p><a href="#">3 ссылка</a> </p>
                        <p><a href="#">4 ссылка</a> </p>
                        <p><a href="#">5 ссылка</a> </p>
                        <p><a href="#">6 ссылка</a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>хуё моё все права защищены бла бла 2017</p>

        </div>
    </section>
</footer>
<?php $this->endBody() ?>
    </body>
<script>
    var slideNow = 1;
    var slideCount = $('#slidewrapper').children().length;
    var slideInterval = 3000;
    var navBtnId = 0;
    var translateWidth = 0;

    $(document).ready(function() {
        var switchInterval = setInterval(nextSlide, slideInterval);

        $('#viewport').hover(function() {
            clearInterval(switchInterval);
        }, function() {
            switchInterval = setInterval(nextSlide, slideInterval);
        });

        $('#next-btn').click(function() {
            nextSlide();
        });

        $('#prev-btn').click(function() {
            prevSlide();
        });

        $('.slide-nav-btn').click(function() {
            navBtnId = $(this).index();

            if (navBtnId + 1 != slideNow) {
                translateWidth = -$('#viewport').width() * (navBtnId);
                $('#slidewrapper').css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
                $('.slide-nav-btn').css({
                    'background-color': '#fff'
                });
                $(this).css({
                    'background-color': '#90d0f3'
                });
                slideNow = navBtnId + 1;
            }
        });
    });


    function nextSlide() {
        if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
            $('#slidewrapper').css('transform', 'translate(0, 0)');
            slideNow = 1;
        } else {
            translateWidth = -$('#viewport').width() * (slideNow);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow++;
        }
    }

    function prevSlide() {
        if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
            translateWidth = -$('#viewport').width() * (slideCount - 1);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = slideCount;
        } else {
            translateWidth = -$('#viewport').width() * (slideNow - 2);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow--;
        }
    }
</script>
</html>
<?php $this->endPage() ?>

