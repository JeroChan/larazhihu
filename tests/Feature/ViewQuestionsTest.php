<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionsTest extends TestCase
{
    /** @test */
    public function user_can_view_questions()
    {
        //抛出异常
        $this->withoutExceptionHandling();

        //前提条件
        $test = $this->get('/questions');
        //行为动作
        $test->assertStatus(200);
    }

    /** @test */
    public function user()
    {
        $this->assertTrue(true);
    }
}