<li>
    <a href="<?= \yii\helpers\Url::to(['catigory/view','id'=>$category['id']])?>">
        <?= $category['name']?>
        <?php if(isset($category['childs'])): ?>
            <span class="pull-right"><i class="fa fa-plus">+</i></span>
        <?php endif; ?>
    </a>
    <?php if(isset($category['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php endif; ?>
</li>