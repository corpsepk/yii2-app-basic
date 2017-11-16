<?php

class UrlManagerCest
{
    public function routeWithTrailingHyphen(\FunctionalTester $I)
    {
        $I->amOnPage(['site-/contact']);
        $I->expectTo('Do not see `yii\base\ViewNotFoundException`');
    }
}
