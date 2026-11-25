<?php
declare(strict_types=1);

class StudentPresenter {
    public function __call(string $name, array $args): string {
        if ($name !== 'showData') {
            throw new BadMethodCallException('Unknown method: ' . $name);
        }
        $n = count($args);
        $semuaString = count(array_filter($args, 'is_string')) === $n;

        if ($n === 1 && $semuaString) {
            return 'Name: ' . $args[0];
        }
        if ($n === 2 && $semuaString) {
            return 'ID: ' . $args[0] . ', Name: ' . $args[1];
        }
        if ($n === 3 && $semuaString) {
            return 'ID: ' . $args[0] . ', Name: ' . $args[1] . ', Major: ' . $args[2];
        }
        throw new InvalidArgumentException('Expected 1, 2, or 3 strings');
    }
}

$view = new StudentPresenter();
echo $view->showData('2530521067', 'Gnayas', 'Teknik Informatika') . PHP_EOL;

try { $view->showData('1', 'Gnayas', 123); }          // 3 argumen, salah satu bukan string
catch (InvalidArgumentException $e) { echo 'InvalidArgumentException: ' . $e->getMessage() . PHP_EOL; }

try { $view->showData('1', 'a', 'b', 'c'); }          // 4 argumen
catch (InvalidArgumentException $e) { echo 'InvalidArgumentException: ' . $e->getMessage() . PHP_EOL; }
