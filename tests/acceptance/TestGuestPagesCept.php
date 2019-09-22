<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home');
$I->amOnPage('/');
$I->see('Hello from render index');
$I->seeLink('Join', '/site/join');
$I->seeLink('Login', '/site/login');

$I->amOnPage('/site/join');
$I->see('Join us');

$I->amOnPage('/site/login');
$I->see('Log in');
