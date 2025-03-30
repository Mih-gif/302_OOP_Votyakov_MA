<?php

namespace App;

use Iterator;

class StudentList implements Iterator
{
    private $students = [];

    public function add(Student $student)
    {
        array_push($this->students, $student);
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function get(int $n): ?Student
    {
        return $this->students[$n] ?? null;
    }

    public function store(string $fileName)
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName)
    {
        $this->students = unserialize(file_get_contents($fileName));
    }

    public function current(): mixed
    {
        return current($this->students);
    }

    public function key(): int
    {
        return current($this->students)->getId();
    }

    public function next(): void
    {
        next($this->students);
    }
    public function rewind(): void
    {
        reset($this->students);
    }
    public function valid(): bool
    {
        return key($this->students) !== null;
    }
}
