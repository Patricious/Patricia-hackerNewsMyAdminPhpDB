<?php


class Twig_Tests_CompilerTest extends PHPUnit_Framework_TestCase
{
    public function testReprNumericValueWithLocale()
    {
        $compiler = new Twig_Compiler(new Twig_Environment());

        $locale = setlocale(LC_NUMERIC, 0);
        if (false === $locale) {
            $this->markTestSkipped('Your platform does not support locales.');
        }

        $required_locales = array('fr_FR.UTF-8', 'fr_FR.UTF8', 'fr_FR.utf-8', 'fr_FR.utf8', 'French_France.1252');
        if (false === setlocale(LC_ALL, $required_locales)) {
            $this->markTestSkipped('Could not set any of required locales: ' . implode(", ", $required_locales));
        }

        $this->assertEquals('1.2', $compiler->repr(1.2)->getSource());
        $this->assertContains('fr', strtolower(setlocale(LC_NUMERIC, 0)));

        setlocale(LC_ALL, $locale);
    }
}
