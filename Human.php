<?php
interface HouseCleaning {
    public function cleanRoom();
    public function cleanKitchen();
}
abstract class Human implements HouseCleaning {
    public function cleanRoom() {}
    public function cleanKitchen() {}
    protected abstract function birthMessage();

    public function giveBirth() {
        $this->birthMessage();
    }    private $height;
    private $weight;
    private $age;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Student extends Human {

    public function cleanRoom() {
        echo "Студент прибирає кімнату<br>";
    }

    public function cleanKitchen() {
        echo "Студент прибирає кухню<br>";
    }
    protected function birthMessage() {
        echo "Студент: Вітаємо, в нас народилась дитина!<br>";
    }
    private $university;
    private $course;

    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function increaseCourse() {
        $this->course++;
    }
}

class Programmer extends Human {

    public function cleanRoom() {
        echo "Програміст прибирає кімнату<br>";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню<br>";
    }
    protected function birthMessage() {
        echo "Програміст: Ура! Наша дитина народилась!<br>";
    }
    private $programmingLanguages = [];
    private $experience;

    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function setProgrammingLanguages($programmingLanguages) {
        $this->programmingLanguages = $programmingLanguages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
    }
}

// Створення об'єкту класу Student
$student = new Student();
$student->cleanRoom();
$student->cleanKitchen();
$student->giveBirth();
$student->setHeight(170);
$student->setWeight(60);
$student->setAge(20);
$student->setUniversity("Harvard");
$student->setCourse(2);

echo "Student info: <br>";
echo "Height: " . $student->getHeight() . " cm<br>";
echo "Weight: " . $student->getWeight() . " kg<br>";
echo "Age: " . $student->getAge() . " years<br>";
echo "University: " . $student->getUniversity() . "<br>";
echo "Course: " . $student->getCourse() . "<br>";

$student->increaseCourse();
echo "After increasing course: " . $student->getCourse() . "<br>";

// Створення об'єкту класу Programmer
$programmer = new Programmer();
$programmer->cleanRoom();
$programmer->cleanKitchen();
$programmer->giveBirth();
$programmer->setHeight(180);
$programmer->setWeight(70);
$programmer->setAge(25);
$programmer->setProgrammingLanguages(["PHP", "JavaScript"]);
$programmer->setExperience("5 years");

echo "\nProgrammer info: <br>";
echo "Height: " . $programmer->getHeight() . " cm<br>";
echo "Weight: " . $programmer->getWeight() . " kg<br>";
echo "Age: " . $programmer->getAge() . " years<br>";
echo "Programming Languages: " . implode(", ", $programmer->getProgrammingLanguages()) . "<br>";
echo "Experience: " . $programmer->getExperience() . "<br>";

$programmer->addProgrammingLanguage("Python");
echo "After adding programming language: " . implode(", ", $programmer->getProgrammingLanguages()) . "<br>";
