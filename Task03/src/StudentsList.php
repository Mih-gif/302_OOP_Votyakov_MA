<?php

namespace App;

class StudentsList
{
    private $students = [];

    public function add(Student $student)
    {
        $this->students[] = $student;
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function get(int $n): Student
    {
        return $this->students[$n];
    }

    public function store(string $fileName)
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName)
    {
        $this->students = unserialize(file_get_contents($fileName));
    }
}
