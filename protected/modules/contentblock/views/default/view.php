<?php
$this->breadcrumbs = array(
    $this->getModule('contentblock')->getCategory() => array(''),
    Yii::t('contentblock', 'Блоки контента') => array('/contentblock/default/index'),
    $model->name,
);

$this->menu = array(
    array('icon' => 'plus-sign', 'label' => Yii::t('contentblock', 'Добавить блок контента'), 'url' => array('/contentblock/default/create')),
    array('icon' => 'list-alt', 'label' => Yii::t('contentblock', 'Управление блоками контента'), 'url' => array('/contentblock/default/index')),
    array('icon' => 'pencil', 'label' => Yii::t('contentblock', 'Редактирование блока контента'), 'url' => array('/contentblock/default/update', 'id' => $model->id)),
    array('icon' => 'eye-open', 'label' => Yii::t('contentblock', 'Просмотреть блок контента'), 'url' => array('/contentblock/default/view', 'id' => $model->id)),
    array('icon' => 'trash', 'label' => Yii::t('contentblock', 'Удалить этот блок контента'), 'url' => '#', 'linkOptions' => array(
        'submit'  => array('/contentblock/default/delete', 'id' => $model->id),
        'confirm' => Yii::t('contentblock', 'Удалить этот элемент ?'),
    )),
);
?>

<h1><?php echo Yii::t('contentblock', 'Просмотр блока контента'); ?> "<?php echo $model->name; ?>"</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'id',
        'name',
        'code',
        array(
            'name'  => 'type',
            'value' => $model->getType(),
        ),
        'content',
        'description',
    ),
)); ?>
<br/>
<div>
    <?php echo Yii::t('contentblock', 'Код для использования этого блока в шаблоне:'); ?>
    <br/><br/>
    <?php echo $example; ?>
</div>