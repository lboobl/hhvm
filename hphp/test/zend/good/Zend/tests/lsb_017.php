<?php
class A {
    public static function test($x=null) {
        if (!is_null($x)) {
            echo "$x\n";
        }
        return static::class;
    }
}

class B extends A {
}
class C extends A {
}
class D extends A {
}
<<__EntryPoint>> function main() {
echo A::test(B::test(C::test(D::test())))."\n";
echo "==DONE==";
}
