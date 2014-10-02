<div class="col-xs-10 col-xs-offset-1">
    <?=
        yii\grid\GridView::widget([
            'dataProvider'  => $dataProvider,
            'columns'       => [
                'id',
                'fname',
                'lname',
                'create_time',
                'update_time',
                [
                    'class' => 'yii\grid\ActionColumn',
                ]
            ] 
        ]);
    ?>
</div>