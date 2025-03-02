<?php

function runTest()
{
        // String representation test
        $s1 = new \App\Student("Иванов", "Иван", "ФМиИТ", "3", "303");
        $s2 = new \App\Student("Алексеев", "Алексей", "ФМиИТ", "1", "104");
        $correct = "Id: 1\nФамилия: Иванов\nИмя: Иван\nФакультет: ФМиИТ\nКурс: 3\nГруппа: 303";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->__toString() . PHP_EOL . PHP_EOL;

        if ($s1->__toString() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        // Setters test
        $s1->setLastname("Михайлов")->setName("Михаил")->setFaculty("ФМиИТ")->setCourse("4")->setGroup("405");
        $correct = "Id: 1\nФамилия: Михайлов\nИмя: Михаил\nФакультет: ФМиИТ\nКурс: 4\nГруппа: 405";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->__toString() . PHP_EOL . PHP_EOL;

        if ($s1->__toString() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        // Getters test
        $correct = "1";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getId() . PHP_EOL . PHP_EOL;

        if ($s1->getId() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        $correct = "Михайлов";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getLastname() . PHP_EOL . PHP_EOL;

        if ($s1->getLastname() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        $correct = "Михаил";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getName() . PHP_EOL . PHP_EOL;

        if ($s1->getName() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        $correct = "ФМиИТ";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getFaculty() . PHP_EOL . PHP_EOL;

        if ($s1->getFaculty() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        $correct = "4";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getCourse() . PHP_EOL . PHP_EOL;

        if ($s1->getCourse() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        $correct = "405";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $s1->getGroup() . PHP_EOL . PHP_EOL;

        if ($s1->getGroup() == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        // add and get test
        $list1 = new \App\StudentsList();
        $list1->add($s1);
        $list1->add($s2);
        $correct1 = "Id: 1\nФамилия: Михайлов\nИмя: Михаил\nФакультет: ФМиИТ\nКурс: 4\nГруппа: 405";
        $correct2 = "Id: 2\nФамилия: Алексеев\nИмя: Алексей\nФакультет: ФМиИТ\nКурс: 1\nГруппа: 104";
        echo "Ожидается:\n$correct1" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $list1->get(0)->__toString() . PHP_EOL . PHP_EOL;

        if ($list1->get(0)->__toString() == $correct1) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        echo "Ожидается:\n$correct2" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $list1->get(1)->__toString() . PHP_EOL . PHP_EOL;

        if ($list1->get(1)->__toString() == $correct2) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        // count test
        $correct = "2";
        echo "Ожидается:\n$correct" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $list1->count() . PHP_EOL . PHP_EOL;

        if (strval($list1->count()) == $correct) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        // store and load test
        $list1->store("StudentsList");
        $list2 = new \App\StudentsList();
        $list2->load("StudentsList");
        
        echo "Ожидается:\n$correct1" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $list2->get(0) . PHP_EOL . PHP_EOL;

        if ($list2->get(0)->__toString() == $correct1) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        echo "Ожидается:\n$correct2" . PHP_EOL . PHP_EOL;
        echo "Получено:\n" . $list2->get(1)->__toString() . PHP_EOL . PHP_EOL;

        if ($list2->get(1)->__toString() == $correct2) {
            echo "Тест пройден" . PHP_EOL . PHP_EOL . PHP_EOL;
        } else {
            echo "Тест НЕ ПРОЙДЕН" . PHP_EOL . PHP_EOL . PHP_EOL;
        }
}