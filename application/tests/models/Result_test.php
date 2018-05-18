<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Result_test extends TestCase
{
    public function test_get_message()
    {
        $output = $this->request('GET', ['manager', 'get_message']);
        $expected = "Sukses memuncul result dari model";
        
        $this->assertEquals($expected, $output);
    }
}
