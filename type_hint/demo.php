<?php

declare(strict_types=1);

require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

class Demo{
    public function typeAReturnA(): A {
        echo __FUNCTION__."<br>";
        return new A();
    }
    public function typeBReturnB(): B {
        echo __FUNCTION__."<br>";
        return new B();
    }
    public function typeCReturnC(): C {
        echo __FUNCTION__."<br>";
        return new C();
    }
    public function typeAReturnB(): A {
        echo __FUNCTION__."<br>";
        return new B();
    }
    public function typeCReturnB(): C {
        echo __FUNCTION__."<br>";
        return new B();
    }
    public function typeAReturnC(): A {
        echo __FUNCTION__."<br>";
        return new C();
    }
    public function typeCReturnA(): C {
        echo __FUNCTION__."<br>";
        return new A();
    }
    public function typeBReturnC(): B {
        echo __FUNCTION__."<br>";
        return new C();
    }
    public function typeBReturnA(): B {
        echo __FUNCTION__."<br>";
        return new A();
    }
    public function typeIReturnA(): I {
        echo __FUNCTION__."<br>";
        return new A();
    }
    public function typeIReturnB(): I {
        echo __FUNCTION__."<br>";
        return new B();
    }
    public function typeIReturnC(): I {
        echo __FUNCTION__."<br>";
        return new C();
    }
    public function typeAReturnI(): A {
        echo __FUNCTION__."<br>";
        return new I();
    }
    public function typeBReturnI(): B {
        echo __FUNCTION__."<br>";
        return new I();
    }
    public function typeCReturnI(): C {
        echo __FUNCTION__."<br>";
        return new I();
    }
    public function typeIReturnI(): I {
        echo __FUNCTION__."<br>";
        return new I();
    }
    public function typeNullReturnNull(): null {
        echo __FUNCTION__."<br>";
        return null;
    }
    public function typeAReturnNull(): A {
        echo __FUNCTION__."<br>";
        return null;
    }
    public function typeBReturnNull(): B {
        echo __FUNCTION__."<br>";
        return null;
    }
    public function typeCReturnNull(): C {
        echo __FUNCTION__."<br>";
        return null;
    }
    public function typeIReturnNull(): I {
        echo __FUNCTION__."<br>";
        return null;
    }
    public function typeNullReturnA(): null {
        echo __FUNCTION__."<br>";
        return new A();
    }
    public function typeNullReturnB(): null {
        echo __FUNCTION__."<br>";
        return new B();
    }
    public function typeNullReturnC(): null {
        echo __FUNCTION__."<br>";
        return new C();
    }
    public function typeNullReturnI(): null {
        echo __FUNCTION__."<br>";
        return new I();
    }
    

}

$a = new A();
$a->a1();
$a->f();

$b = new B();
$b->b1();

$c = new C();
$c->f();


$demo = new Demo();
$demo->typeAReturnA();
$demo->typeBReturnB();
$demo->typeCReturnC();
$demo->typeCReturnB();
$demo->typeBReturnC();
$demo->typeCReturnA();
$demo->typeAReturnC();
$demo->typeAReturnB();
$demo->typeBReturnA();
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeAReturnI();
$demo->typeBReturnI();
$demo->typeCReturnI();
$demo->typeIReturnI();
$demo->typeNullReturnNull();
$demo->typeAReturnNull();
$demo->typeBReturnNull();
$demo->typeCReturnNull();
$demo->typeIReturnNull();
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();

?>