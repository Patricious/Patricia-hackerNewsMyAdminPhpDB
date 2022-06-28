<?php



class Twig_Tests_NativeExtensionTest extends PHPUnit_Framework_TestCase
{
    public function testGetProperties()
    {
        $twig = new Twig_Environment(new Twig_Loader_String(), array(
            'debug'      => true,
            'cache'      => false,
            'autoescape' => false
        ));

        $d1 = new DateTime();
        $d2 = new DateTime();
        $output = $twig->render('{{ d1.date }}{{ d2.date }}', compact('d1', 'd2'));

        // If it fails, PHP will crash.
        $this->assertEquals($output, $d1->date . $d2->date);
    }
}
