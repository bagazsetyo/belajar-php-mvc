<?php 

namespace Bagasfrzetyo\PhpMvc\App;

class View
{
    public static function render(string $view, array $data = []): void
    {
        extract($data);

        require __DIR__ . "/../View/$view.php";
    }
}