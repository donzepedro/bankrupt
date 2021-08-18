
$( "#display" ).click(function() {
    let newpagefield = document.getElementById('newpagesarea');
        while(newpagefield.firstChild){
            newpagefield.removeChild(newpagefield.firstChild);
        }
    for (let i=0; i < $('#amount_of_add').val(); i++){
        $('#newpagesarea').append("<?= '$current_pages->field($interLayer, 'news_title')->dropDownList(ArrayHelper::map(\app\models\News::find()->all(), 'id', 'title'))->label('')?>")
    }
  console.log($('#amount_of_add').val());
});

