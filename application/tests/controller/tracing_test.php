<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tracing_test
 *
 * @author aufarilham
 */
class tracing_test extends TestCase 
{
    public function test_get_tracing()
    {
        $output = $this->request('GET', ['manager', 'tracing']);
        $expected = '<h2>TEST</h2>';
        
        $this->assertContains($expected, $output);
    }
}
