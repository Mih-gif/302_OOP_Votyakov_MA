<?php

namespace App;

class Student
{
    private static $nextId = 1;
    private $id;
    private $lastname;
    private $name;
    private $faculty;
    private $course;
    private $group;

    public function __construct($lastname, $name, $faculty, $course, $group)
    {
        $this->id = self::$nextId++;
        $this->lastname = $lastname;
        $this->name = $name;
        $this->faculty = $faculty;
        $this->course = $course;
        $this->group = $group;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFaculty()
    {
        return $this->faculty;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function __toString()
    {
        return "Id: {$this->id}\nФамилия: {$this->lastname}\nИмя: {$this->name}\nФакультет: {$this->faculty}\nКурс: {$this->course}\nГруппа: {$this->group}";
    }
}
