<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 02.12.2017
 * Time: 13:33

/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<section>
    <div class="container">
        <div class="rows">
            <div class="breadcrumbs">
                <h5>Главная->Категория->Все продукты</h5>
            </div>
            <div class="col-sm-3">
                <div class="page-title">
                    <h1>Категории</h1>
                </div>
                <div class="category">
                    <ul class="catalog">
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>
                </div>
                <div class="page-title">
                    <h1>Бренды</h1>
                </div>
                <div class="category">
                    <ul class="catalog">
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>
                </div>


            </div>
            <div class="col-sm-9 non-padding-right" >
                <div class="allproduct-box">
                    <div class="row">
                        <?php foreach ($products as $product):?>
                            <div class="card-product" style="width: 216px">
                                <div class="img-card">
                                    <!--<img class="lazy" src="https://us.laneige.com/media/catalog/product/cache/3/small_image/160x178/9df78eab33525d08d6e5fb8d27136e95/6/4/643x643_bring_me_pore_care_trial_kit.jpg" alt="Pore Care Trial Kit">-->
                                    <?= Html::img("@web/images/products/min/{$product->image}.png",['alt'=>$product->name])?>
                                </div>
                                <div class="product-name">
                                    <p><a href=""><?=$product->name?></a></p>
                                </div>
                                <div class="product-action">
                                    <div class="ochiv"></div>
                                    <div class="price"><p><?=$product->price?> р.</p></div>
                                    <input type="button" class="button" value="В корзину">
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="param-page">
                <?php
                echo \yii\widgets\LinkPager::widget([
                    'pagination'=>$pages,
                    'options' => [
                        'class' => 'pagination pull-right',
                    ],
                ])
                ?>
            </div>
        </div>
    </div>
    </div>
</section>
