<?php

namespace App;

class Student
{
    public static $nextlId = 1;
    private $id;
    private $lastName;
    private $firstName;
    private $faculty;
    private $course;
    private $group;

    public function __construct(string $lastName, string $firstName, string $faculty, int $course, string $group)
    {
        $this->id = self::$nextlId++;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->faculty = $faculty;
        $this->course = $course;
        $this->group = $group;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getFaculty(): string
    {
        return $this->faculty;
    }
    public function getCourse(): int
    {
        return $this->course;
    }
    public function getGroup(): string
    {
        return $this->group;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    public function setFaculty(string $faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }
    public function setCourse(int $course)
    {
        $this->course = $course;
        return $this;
    }
    public function setGroup(string $group)
    {
        $this->group = $group;
        return $this;
    }

    public function __toString()
    {
        return "Id: {$this->id}\nФамилия: {$this->lastname}\nИмя: {$this->name}\nФакультет: {$this->faculty}\nКурс: {$this->course}\nГруппа: {$this->group}";
    }
}
