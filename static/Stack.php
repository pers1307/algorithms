<?php

/**
 * Класс стека в линейной памяти
 * Сложность стека О(1): любая операция занимает одно арифметическое действие
 * Class Stack
 */
class Stack
{
    /**
     * Максимальное количество элементов в массиве
     */
    const count = 10;

    /**
     * @var int Указатель на следующую позицию в стеке
     */
    private $cursor;

    /**
     * @var array Массив под стек
     */
    private $array;

    function __construct()
    {
        $this->cursor = 0;
        $this->array  = [];
    }

    /**
     * Втолкнуть элемент в стек
     *
     * новый элемент стека @param $newItem
     */
    public function put($newItem)
    {
        $this->array[$this->cursor] = $newItem;
        ++$this->cursor;
    }

    /**
     * Вытолкнуть элемент из стека
     *
     * @return mixed
     */
    public function get()
    {
        --$this->cursor;
        $buf = $this->array[$this->cursor];
        unset($this->array[$this->cursor]);

        return $buf;
    }

    /**
     * Проверка стека на пустоту
     *
     * @return bool
     */
    public function isEmpty()
    {
        if ($this->cursor === 0) {
            return true;
        }

        return false;
    }
}