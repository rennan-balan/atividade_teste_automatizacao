<?php
use PHPUnit\Framework\TestCase;
use TestesAutomatizados\FreightCalculation\Entities\User;

class UserTest extends TestCase {

    /** 
     * @covers new User()
    */
    public function testUserCreate(): void
    {
        $name = 'John';
        $cep = '12345048';

        $user = new User();
        $user->setName($name);
        $user->setCep($cep);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($name, $user->getName());
        $this->assertEquals($cep, $user->getCep());
    }
}
