<?php
trait Base1
{
    public function hello1($name)
    {
        return "Hello1 {$name}";
    }
}
 
trait Base2
{
    public function hello1($name)
    {
        return "Hello2 {$name}";
    }
}
 
class ClassName
{
    use Base1, Base2 {
        Base1::hello1 insteadof Base2;
    }
}
 
$class = new ClassName();
echo $class->hello1("Gonzalo");