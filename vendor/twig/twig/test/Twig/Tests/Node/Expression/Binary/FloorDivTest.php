<?php


class Twig_Tests_Node_Expression_Binary_FloorDivTest extends Twig_Test_NodeTestCase
{
    /**
     * @covers Twig_Node_Expression_Binary_FloorDiv::__construct
     */
    public function testConstructor()
    {
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_FloorDiv($left, $right, 1);

        $this->assertEquals($left, $node->getNode('left'));
        $this->assertEquals($right, $node->getNode('right'));
    }

    /**
     * @covers Twig_Node_Expression_Binary_FloorDiv::compile
     * @covers Twig_Node_Expression_Binary_FloorDiv::operator
     * @dataProvider getTests
     */
    public function testCompile($node, $source, $environment = null)
    {
        parent::testCompile($node, $source, $environment);
    }

    public function getTests()
    {
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_FloorDiv($left, $right, 1);

        return array(
            array($node, 'intval(floor((1 / 2)))'),
        );
    }
}
