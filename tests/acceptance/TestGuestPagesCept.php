<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home');
$I->amOnPage('/');
$I->see('Hello from render index');
