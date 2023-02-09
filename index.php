<?php

$request = new \App\Request();

$session = $request->getSession();

if (!$session instanceof \App\FlashBagAwareSessionInterface) {
    return;
}

$session->getFlashBag();
