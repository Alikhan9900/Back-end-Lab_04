<?php
class FileManager {
    public static $dir = "text";

    public static function readFromFile($fileName) {
        $filePath = self::$dir . '/' . $fileName;
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return "File not found";
        }
    }

    public static function writeToFile($fileName, $content) {
        $filePath = self::$dir . '/' . $fileName;
        if (!file_exists($filePath)) {
            file_put_contents($filePath, $content);
        } else {
            file_put_contents($filePath, $content, FILE_APPEND);
        }
    }

    public static function clearFile($fileName) {
        $filePath = self::$dir . '/' . $fileName;
        if (file_exists($filePath)) {
            file_put_contents($filePath, "");
        }
    }
}

// Створення директорії і файлів
mkdir(FileManager::$dir);
file_put_contents(FileManager::$dir . '/file1.txt', "Text for file 1");
file_put_contents(FileManager::$dir . '/file2.txt', "Text for file 2");
file_put_contents(FileManager::$dir . '/file3.txt', "Text for file 3");
echo "Зміст до редагування: <br> 
file1.txt: " . FileManager::readFromFile('file1.txt') . " <br>
file1.txt: " . FileManager::readFromFile('file2.txt') . " <br>
file1.txt: " . FileManager::readFromFile('file3.txt') . " <br> ";

// Читання з файлу
echo "Зміст file1.txt: " . FileManager::readFromFile('file1.txt') . "<br>";

// Додавання до файлу
FileManager::writeToFile('file2.txt', "\nAdditional text for file 2");
echo "Зміст file2.txt після додавання: " . FileManager::readFromFile('file2.txt') . "<br>";

// Очистка файлу
FileManager::clearFile('file3.txt');
echo "Зміст file3.txt після очищення: " . FileManager::readFromFile('file3.txt') . "<br>";
