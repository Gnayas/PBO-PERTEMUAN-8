<?php
declare(strict_types=1);
require_once __DIR__ . '/StudentPresenter.php';

$view = new StudentPresenter();
echo $view->showData('Ahmad') . PHP_EOL;
echo $view->showData('2026001', 'Ahmad') . PHP_EOL;

// ---- uji negatif ----
try { $view->showData(); }
catch (InvalidArgumentException $e) { echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL; }

try { $view->showData(123); }
catch (InvalidArgumentException $e) { echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL; }

try { $view->hapusData('x'); }
catch (BadMethodCallException $e) { echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL; }
