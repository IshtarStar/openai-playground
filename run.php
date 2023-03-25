#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Playground\Openai\GptChatRunner;

$openai = new GptChatRunner();
$openai->run();
