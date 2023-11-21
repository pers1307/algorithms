<?php

/**
 * Класс стека в линейной памяти с циклическим заполнением
 * Сложность стека О(1): любая операция занимает одно арифметическое действие
 * Class CyclicalStack
 */
class CyclicalStack
{
    /**
     * Максимальное количество элементов в массиве
     */
    const maximumCount = 9;

    /**
     * @var int Количество элементов в стеке
     */
    private $count;

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
        $this->count  = 0;
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
        ++$this->count;
        $this->cursor = ($this->cursor + 1) % ($this::maximumCount + 1);
    }

    /**
     * Вытолкнуть элемент из стека
     *
     * @return mixed
     */
    public function get()
    {
        $buf = $this->array[($this->cursor - $this->count) % ($this::maximumCount + 1)];
        --$this->count;

        return $buf;
    }

    /**
     * Проверка стека на пустоту
     *
     * @return bool
     */
    public function isEmpty()
    {
        if ($this->count === 0) {
            return true;
        }

        return false;
    }
}
