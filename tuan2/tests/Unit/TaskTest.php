<?php
namespace Tests\Unit;

use App\Models\Task;

use Tests\TestCase;

class TaskTest extends TestCase{
    public function testCreate(){
        $data = [
            "name"=>"test 1",
            "content"=>"test 1",
        ];
        $tasks = Task::create($data);
        $this->assertDatabaseHas('tasks',$data);
    }
}
