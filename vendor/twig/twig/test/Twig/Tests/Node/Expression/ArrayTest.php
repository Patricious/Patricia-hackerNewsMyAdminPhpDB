<?php




class Twig_Tests_Node_Expression_ArrayTest extends Twig_Test_NodeTestCase
{
    /**
     * @covers Twig_Node_Expression_Array::__construct
     */
    public function testConstructor()
    {
        $elements = array(new Twig_Node_Expression_Constant('foo', 1), $foo = new Twig_Node_Expression_Constant('bar', 1));
        $node = new Twig_Node_Expression_Array($elements, 1);

        $this->assertEquals($foo, $node->getNode(1));
    }

    /**
     * @covers Twig_Node_Expression_Array::compile
     * @dataProvider getTests
     */
    public function testCompile($node, $source, $environment = null)
    {
        parent::testCompile($node, $source, $environment);
    }

    public function getTests()
    {
        $elements = array(
            new Twig_Node_Expression_Constant('foo', 1),
            new Twig_Node_Expression_Constant('bar', 1),

            new Twig_Node_Expression_Constant('bar', 1),
            new Twig_Node_Expression_Constant('foo', 1),
        );
        $node = new Twig_Node_Expression_Array($elements, 1);

        return array(
            array($node, 'array("foo" => "bar", "bar" => "foo")'),
        );
    }
}
