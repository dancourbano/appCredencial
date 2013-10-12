<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this esta definida (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this no esta definida.\n";
        }
    }
}

class B
{
    function bar()
    {
        // Nota: la siguiente línea arrojará un Warning si E_STRICT está habilitada.
        A::foo();
    }
}

$a = new A();
$a->foo();

// Nota: la siguiente línea arrojará un Warning si E_STRICT está habilitada.
A::foo();
$b = new B();
$b->bar();

// Nota: la siguiente línea arrojará un Warning si E_STRICT está habilitada.
B::bar();
?>