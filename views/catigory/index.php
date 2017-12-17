<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 02.12.2017
 * Time: 13:33

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<div id="block-for-slider">
    <div id="viewport">
        <ul id="slidewrapper">
            <li class="slide"><img src="https://hsto.org/files/8d4/b19/80d/8d4b1980d48c418090e2c4466d8c06e1.jpg" alt="1" class="slide-img"></li>
            <li class="slide"><img src="https://hsto.org/files/ef1/3d7/97e/ef13d797e4c642c7a1d4b2b91f7ad7b3.jpg" alt="2" class="slide-img"></li>
            <li class="slide"><img src="https://hsto.org/files/ec5/592/f1e/ec5592f1e814401eb38305682a8e88d4.jpg" alt="3" class="slide-img"></li>
            <li class="slide"><img src="https://hsto.org/files/eda/61a/3c5/eda61a3c53db408d820643998d9acd81.jpg" alt="4" class="slide-img"></li>
        </ul>

        <div id="prev-next-btns">
            <div id="prev-btn"></div>
            <div id="next-btn"></div>
        </div>

        <ul id="nav-btns">
            <li class="slide-nav-btn"></li>
            <li class="slide-nav-btn"></li>
            <li class="slide-nav-btn"></li>
            <li class="slide-nav-btn"></li>
        </ul>
    </div>
</div>

<section>
    <div class="container">
        <?php if(!empty($hits)): ?>
        <div class="rows">
            <div class="page-title">
                <h1>Хиты</h1>
            </div>
            <div class="col-sm-12 non-padding-right non-padding-left" >
                <div class="allproduct-box">

                    <div class="row">
                        <?php foreach ($hits as $hit):?>
                            <div class="card-product">
                                <div class="img-card">
                                    <!--<img class="lazy" src="https://us.laneige.com/media/catalog/product/cache/3/small_image/160x178/9df78eab33525d08d6e5fb8d27136e95/6/4/643x643_bring_me_pore_care_trial_kit.jpg" alt="Pore Care Trial Kit">-->
                                    <?= Html::img("@web/images/products/min/{$hit->image}.png",['alt'=>$hit->name])?>
                                </div>
                                <div class="product-name">
                                    <p><a href=""><?=$hit->name?></a></p>
                                </div>
                                <div class="product-action">
                                    <div class="ochiv"></div>
                                    <div class="price"><p><?=$hit->price?> р.</p></div>
                                    <input type="button" class="button" value="В корзину">
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <?php else:?>
            <h1>Пока хитов нет, но скоро будут:)</h1>
        <?php endif;?>
    </div>
</section>