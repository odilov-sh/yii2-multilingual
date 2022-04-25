<?php

use odilov\multilingual\widgets\LanguageSwitcher;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div>
    <?=
    LanguageSwitcher::widget([
        'view' => '@module/src/views/switcher/links',
        'languages' => [
            'en-US' => 'English',
            'es' => 'Español',
            'pt-BR' => 'Português',
        ],
        'languageRedirects' => [
            'pt-BR' => 'pt',
        ],
    ])
    ?>
</div>
