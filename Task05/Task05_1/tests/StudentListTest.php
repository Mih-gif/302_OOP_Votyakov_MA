<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Student;
use App\StudentList;

class StudentListTest extends TestCase
{
    public function createStudentList()
    {
        $student1 = new Student('Пушкин', 'Александр', 'ИЭС', 4, '405');
        $student2 = new Student('Андреев', 'Даниил', 'ФМИТ', 1, '103');
        $student3 = new Student('Толстой', 'Лев', 'ИНТНМ', 2, '204');
        $student4 = new Student('Дмитриев', 'Дмитрий', 'ИЭС', 3, '301');
        $student5 = new Student('Матвеев', 'Юрий', 'ФМИТ', 4, '403');

        $students = new StudentList();
        $students->add($student1);
        $students->add($student2);
        $students->add($student3);
        $students->add($student4);
        $students->add($student5);

        return $students;
    }

    //current() test
    public function testCurrent()
    {
        $students = $this->createStudentList();

        $this->assertSame($students->get(0), $students->current());
        $students->next();
        $this->assertSame($students->get(1), $students->current());
    }

    //next() test
    public function testNext()
    {
        $students = $this->createStudentList();

        $this->assertSame($students->get(0), $students->current());
        $students->next();
        $this->assertSame($students->get(1), $students->current());
        $students->next();
        $students->next();
        $this->assertSame($students->get(3), $students->current());
    }

    //key() test
    public function testKey()
    {
        $students = $this->createStudentList();

        $this->assertSame($students->get(0)->getId(), $students->key());
        $students->next();
        $this->assertSame($students->get(1)->getId(), $students->key());
    }

    //rewind() test
    public function testRewind()
    {
        $students = $this->createStudentList();

        $this->assertSame($students->get(0), $students->current());
        $students->next();
        $students->next();
        $students->next();
        $this->assertSame($students->get(3), $students->current());
        $students->rewind();
        $this->assertSame($students->get(0), $students->current());
    }

    //valid() test
    public function testValid()
    {
        $students = $this->createStudentList();

        $this->assertTrue($students->valid());
        $students->next();
        $students->next();
        $students->next();
        $students->next();
        $students->next();
        $students->next();
        $this->assertFalse($students->valid());
    }

    //foreach test
    public function testForeach()
    {
        $students = $this->createStudentList();
        $i = 0;

        foreach ($students as $index => $student) {
            $this->assertSame($students->get($i), $students->current());
            $i++;
        }
    }

    //get() test
    public function testGetInvalidIndex()
    {
        $students = $this->createStudentList();

        $this->assertNull($students->get(10));
    }

    //empty list test
    public function testEmptyStudentList()
    {
        $students = new StudentList();

        $this->assertSame(0, $students->count());
        $this->assertFalse($students->valid());
    }
}
