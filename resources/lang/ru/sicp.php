<?php

return [
    'title'    => 'Структура и интерпретация компьютерных программ',
    'authors'  => 'Харольд Абельсон Джеральд Джей Сассман при участии Джули Сассман',
    'chapters' => [
        '1'       => 'Построение абстракций с помощью процедур',
        '1.1'     => 'Элементы программирования',
        '1.1.1'   => 'Выражения',
        '1.1.2'   => 'Имена и окружение',
        '1.1.3'   => 'Вычисление комбинаций',
        '1.1.4'   => 'Составные процедуры',
        '1.1.5'   => 'Подстановочная модель применения процедуры',
        '1.1.6'   => 'Условные выражения и предикаты',
        '1.1.7'   => 'Пример: вычисление квадратного корня методом Ньютона',
        '1.1.8'   => 'Процедуры как абстракции типа «черный ящик»',
        '1.2'     => 'Процедуры и порождаемые ими процессы',
        '1.2.1'   => 'Линейные рекурсия и итерация',
        '1.2.2'   => 'Древовидная рекурсия.',
        '1.2.3'   => 'Порядки роста',
        '1.2.4'   => 'Возведение в степень',
        '1.2.5'   => 'Нахождение наибольшего общего делителя',
        '1.2.6'   => 'Пример: проверка на простоту',
        '1.3'     => 'Формулирование абстракций с помощью процедур высших порядков',
        '1.3.1'   => 'Процедуры в качестве аргументов',
        '1.3.2'   => 'Построение процедур с помощью lambda',
        '1.3.3'   => 'Процедуры как обобщенные методы',
        '1.3.4'   => 'Процедуры как возвращаемые значения',
        '2'       => 'Построение абстракций с помощью данных.',
        '2.1'     => 'Введение в абстракцию данных',
        '2.1.1'   => 'Пример: арифметические операции над рациональными числами',
        '2.1.2'   => 'Барьеры абстракции',
        '2.1.3'   => 'Что значит слово «данные»?',
        '2.1.4'   => 'Расширенный пример: интервальная арифметика',
        '2.2'     => 'Иерархические данные и свойство замыкания',
        '2.2.1'   => 'Представление последовательностей',
        '2.2.2'   => 'Иерархические структуры',
        '2.2.3'   => 'Последовательности как стандартные интерфейсы',
        '2.2.4'   => 'Пример: язык описания изображений',
        '2.3'     => 'Символьные данные.',
        '2.3.1'   => 'Кавычки',
        '2.3.2'   => 'Пример: символьное дифференцирование',
        '2.3.3'   => 'Пример: представление множеств',
        '2.3.4'   => 'Пример: деревья кодирования по Хаффману',
        '2.4'     => 'Множественные представления для абстрактных данных',
        '2.4.1'   => 'Представления комплексных чисел',
        '2.4.2'   => 'Помеченные данные',
        '2.4.3'   => 'Программирование, управляемое данными, и аддитивность',
        '2.5'     => 'Системы с обобщенными операциями',
        '2.5.1'   => 'Обобщенные арифметические операции',
        '2.5.2'   => 'Сочетание данных различных типов',
        '2.5.3'   => 'Пример: символьная алгебра',
        '3'       => 'Модульность, объекты и состояние',
        '3.1'     => 'Присваивание и внутреннее состояние объектов',
        '3.1.1'   => 'Внутренние переменные состояния',
        '3.1.2'   => 'Преимущества присваивания.',
        '3.1.3'   => 'Издержки, связанные с введением присваивания',
        '3.2'     => 'Модель вычислений с окружениями',
        '3.2.1'   => 'Правила вычисления',
        '3.2.2'   => 'Применение простых процедур',
        '3.2.3'   => 'Кадры как хранилище внутреннего состояния.',
        '3.2.4'   => 'Внутренние определения.',
        '3.3'     => 'Моделирование при помощи изменяемых данных',
        '3.3.1'   => 'Изменяемая списковая структура.',
        '3.3.2'   => 'Представление очередей',
        '3.3.3'   => 'Представление таблиц',
        '3.3.4'   => 'Имитация цифровых схем',
        '3.3.5'   => 'Распространение ограничений',
        '3.4'     => 'Параллелизм: время имеет значение',
        '3.4.1'   => 'Природа времени в параллельных системах',
        '3.4.2'   => 'Механизмы управления параллелизмом',
        '3.5'     => 'Потоки',
        '3.5.1'   => 'Потоки как задержанные списки',
        '3.5.2'   => 'Бесконечные потоки',
        '3.5.3'   => 'Использование парадигмы потоков',
        '3.5.4'   => 'Потоки и задержанное вычисление',
        '3.5.5'   => 'Модульность функциональных программ и модульность объектов',
        '4'       => 'Метаязыковая абстракция',
        '4.1'     => 'Метациклический интерпретатор',
        '4.1.1'   => 'Ядро интерпретатора',
        '4.1.2'   => 'Представление выражений',
        '4.1.3'   => 'Структуры данных интерпретатора',
        '4.1.4'   => 'Выполнение интерпретатора как программы.',
        '4.1.5'   => 'Данные как программы',
        '4.1.6'   => 'Внутренние определения.',
        '4.1.7'   => 'Отделение синтаксического анализа от выполнения',
        '4.2'     => 'Scheme с вариациями: ленивый интерпретатор',
        '4.2.1'   => 'Нормальный порядок вычислений и аппликативный порядок вычислений',
        '4.2.2'   => 'Интерпретатор с ленивым вычислением',
        '4.2.3'   => 'Потоки как ленивые списки.',
        '4.3'     => 'Scheme с вариациями — недетерминистское вычисление',
        '4.3.1'   => 'Amb и search',
        '4.3.2'   => 'Примеры недетерминистских программ',
        '4.3.3'   => 'Реализация amb-интерпретатора',
        '4.4'     => 'Логическое программирование',
        '4.4.1'   => 'Дедуктивный поиск информации',
        '4.4.2'   => 'Как действует система обработки запросов',
        '4.4.3'   => 'Является ли логическое программирование математической логикой? 425',
        '4.4.4'   => 'Реализация запросной системы',
        '4.4.4.1' => 'Управляющий цикл и конкретизация',
        '4.4.4.2' => 'Вычислитель',
        '4.4.4.3' => 'Поиск утверждений с помощью сопоставления с образцом',
        '4.4.4.4' => 'Правила и унификация',
        '4.4.4.5' => 'Ведение базы данных',
        '4.4.4.6' => 'Операции над потоками',
        '4.4.4.7' => 'Процедуры, определяющие синтаксис запросов',
        '4.4.4.8' => 'Кадры и связывания',
        '5'       => 'Вычисления на регистровых машинах',
        '5.1'     => 'Проектирование регистровых машин',
        '5.1.1'   => 'Язык для описания регистровых машин',
        '5.1.2'   => 'Абстракция в проектировании машин',
        '5.1.3'   => 'Подпрограммы',
        '5.1.4'   => 'Реализация рекурсии с помощью стека',
        '5.1.5'   => 'Обзор системы команд',
        '5.2'     => 'Программа моделирования регистровых машин',
        '5.2.1'   => 'Модель машины',
        '5.2.2'   => 'Ассемблер',
        '5.2.3'   => 'Порождение исполнительных процедур для команд',
        '5.2.4'   => 'Отслеживание производительности машины',
        '5.3'     => 'Выделение памяти и сборка мусора',
        '5.3.1'   => 'Память как векторы',
        '5.3.2'   => 'Иллюзия бесконечной памяти',
        '5.4'     => 'Вычислитель с явным управлением',
        '5.4.1'   => 'Ядро вычислителя с явным управлением',
        '5.4.2'   => 'Вычисление последовательностей и хвостовая рекурсия',
        '5.4.3'   => 'Условные выражения, присваивания и определения',
        '5.4.4'   => 'Запуск вычислителя',
        '5.5'     => 'Компиляция',
        '5.5.1'   => 'Структура компилятора.',
        '5.5.2'   => 'Компиляция выражений',
        '5.5.3'   => 'Компиляция комбинаций',
        '5.5.4'   => 'Сочетание последовательностей команд',
        '5.5.5'   => 'Пример скомпилированного кода',
        '5.5.6'   => 'Лексическая адресация',
        '5.5.7'   => 'Связь скомпилированного кода с вычислителем',
    ],
    'exercises' => [
        '1.1' => 'Ниже приведена последовательность выражений. Какой результат напечатает интерпретатор в ответ на каждое из них? Предполагается, что выражения вводятся в том же порядке, в каком они написаны.'
    ]
];
