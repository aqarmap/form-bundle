<?php
namespace Thrace\FormBundle\Tests\Form\Type;

use Thrace\FormBundle\Form\Type\ButtonsetType;

use Thrace\FormBundle\Tests\Form\Extension\TypeExtensionTest;

use Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase;

class ButtonseTypeTest extends TypeTestCase
{

    public function testConfig()
    {

        $configs = array();
        
        $form = $this->factory->create('thrace_buttonset_choice', null, array(
            'configs' => $configs,
        ));

        $view = $form->createView();

        $this->assertEquals(array(), $view->vars['configs']);
    }

    protected function getExtensions()
    {
    	return array(
			new TypeExtensionTest(
				array(new ButtonsetType('choice'))
			)
    	);
    }

}