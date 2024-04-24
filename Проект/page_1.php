<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>Main</title>
</head>
<body id="body" style="background: url('img/1-2.jpeg') no-repeat;background-size: cover;
background-position: center;">
    <div class="logo">
        <img class="kem-logo" src="img/Логотип КГПИ КемГУ.png" alt="logo">
    </div>

    <div class="menu" onclick="openMenu()">
        <i class='bx bx-menu'></i>
    </div>

    <div class="menu_block" id="menu_block">
        <a href=""><i class='bx bxs-medal' ></i> Сохранить результат</a>
        <a href=""><i class='bx bxs-planet' ></i> Начать заново</a>
        <a href=""><i class='bx bx-exit'></i> Выйти</a>
    </div>



    <div class="scale">
        <p><i class='bx bxs-trophy'></i> Колличесчтво баллов: <span id="scale"></span></p>
    </div>


    <footer id="footer_1">
        <div class="text">
            <p><b>Доктор Кто</b> известный ученый-исследователь, специализирующийся на изучении загадочных случайных процессов.
            За годы своей работы он расследовал множество странных и непонятных явлений, но одно дело так и не давало ему
            покоя.<br><br>
            Этим делом было исчезновение его коллеги, <b>доктора Смита</b>. Он пропал некоторое время назад,
            не оставив никаких следов. Доктор Кто был уверен, что это связано с его исследованиями случайных процессов,
                и решил отправиться на поиски пропавшего друга.
                <br><br>
            Он обратился к своему другу и помощнику, <b>доктору Роуз</b>, и объяснил ей ситуацию.</p>
        </div>
        <div class="next">
            <img onclick="next(2, '1.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
        </div>
    </footer>

    <footer id="footer_2">
           <div class="text" id="text2">
            <p><b>Д.Кто:</b>  Роуз, мне нужна твоя помощь. Я уверен, что исчезновение Смита связано с нашими исследованиями
                 случайных процессов<br><br>
                <b>Роуз:</b> Я всегда готова помочь тебе, доктор. Что конкретно тебе нужно сделать? - ответила Роуз.
                <br><br>
                <b>Д.Кто:</b> Мы должны вернуться к последним экспериментам Смита и попробовать воссоздать их.
                 Возможно, это поможет нам понять, что произошло с ним</p>
        </div>

        <div class="prev">
            <img onclick="next(1, '1-2.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
        </div>
        <div class="next">
            <img onclick="next(3, '13.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
        </div>
    </footer>


    <footer id="footer_3">
        <div class="text" id="text2">
         <p>
            <b>Д.Кто: </b>Привет, рад, что ты согласилась помочь мне найти моего старого друга, <b>Доктора 
                Смита</b>. Одному мне будет не под силу это сделать. В последнюю нашу встречу, мы 
            вели разговор о теме его последнего исследования - <i><u>случайных процессов</u></i>.
            <br><br>
            <b>Д.Кто: </b>Думаю, ты не имеешь представления о том, что это? В таком случае проведу 
            краткий экскурс по данной теме.
             </p>
     </div>

     <div class="prev">
        <img onclick="next(2, '1.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
    </div>
     <div class="next">
         <img onclick="next(4, '14.gif')" class="next-but" id="next-but" src="img/next.png" alt="logo">
     </div>
 </footer>


 <footer id="footer_4">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Итак, для начала, что есть поток событий? Это последовательность однородных 
        событий, следующих одно за другим в случайные моменты времени. А среднее 
        число событий, приходящееся на единицу времени – интенсивность потока 
        событий λ. Она понадобится нам чуть позже.
            <br><br>
            Из-за нашего поверхностного исследования, мы не можем зайти дальше, чем 
            знаем. Поэтому ограничимся взаимодействием с простейшими потоками на 
            данный момент. <br> <b><u>Простейший поток</u></b> – это поток событий, обладающий всеми тремя 
            свойствами – стационарный, без последействия, ординарный (стационарный 
            пуассоновский поток). Интенсивность <i>λ=const</i>.
             </p>
 </div>

 <div class="prev">
    <img onclick="next(3, '13.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(5, '15.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_5">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Что-бы не попасть туда, куда не нужно, мы рассчитаем вероятность нашего попадания в 
        нужное место, за некоторый промежуток времени.
        <br>
        Среднее число нужных нам потоков, поступающий на консоль в одну минуту, равно трем. 
        Нам нужно найти вероятность того, что за 2 минуты поступит: четыре потока, менее трех 
        потоков, не менее четырех потоков.
        <br><br>
         Нам известно λ=3, используя формулу:
         
         <img class="formula_1" src="img/1_task/P_k(t).png">  
         </p>
 </div>

 <div class="prev">
    <img onclick="next(4, '14.gif')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(6, '15.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_6">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Что-бы не попасть туда, куда не нужно, мы рассчитаем вероятность нашего попадания в 
        нужное место, за некоторый промежуток времени.
        <br>
        Среднее число нужных нам потоков, поступающий на консоль в одну минуту, равно трем. 
        Нам нужно найти вероятность того, что за 2 минуты поступит: четыре потока, менее трех 
        потоков, не менее четырех потоков.
        <br><br>
         Нам известно λ=3, используя формулу:
         
         <img class="formula_1" src="img/1_task/P_k(t).png">  
         </p>
         <p id="next-form"> 
         
         Находим поступление четырех потоков:
         <img class="formula_1" src="img/1_task/P4(2).png">   
         <br><br>
         Вероятность того, что поступит менее четырех потоков,
          состоит из суммы вероятностей поступления одного потока, двух, трех и вероятности отсутствия потоков:
          <br>
          <img class="formula_2" src="img/1_task/p.png">
          <br><br>
                Вероятность того, что поступит не менее четырех потоков – это вероятность того, что поступит 4
                 и более потока. Эту вероятность можно найти, зная вероятность поступления менее 4 потоков:
                  <b><i>p = 1 - 0,151 = 0,849.</i></b>
            </p>    

 </div>

 <div class="prev">
    <img onclick="next(5, '15.png')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(7, '16.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_7">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Хм… Я надеялся, что нам хватит этих данных для нашего продвижения, но что-то пошло не 
        так.
        <br>
        В таком случае, эта отличная возможность попробовать тебе свои силы. Итак, приступим.
        <br><br>
        Для того что бы тебе было легче найти нужную нам информацию, я предоставлю тебе 
        первоначальные данные в более привычной для твоего понимания форме.
         </p>
        
 </div>

 <div class="prev">
    <img onclick="next(6, '15.png')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(8, '16.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_8">
    <div class="text" id="text2">
        <i>Ответы округлять до 4 знака после запятой (0,23457068 ≈ 0,2346)</i>
        <br><br>
     <p>
            <label for="1"><b>1. </b>Вероятность сбоя в работе телефонной станции при каждом вызове равна 0,004. 
                Поступило 500 вызовов. Определить вероятность того, что было 9 сбоев.</label><br>
            <input id="1.1" type="text" autocomplete="off">
                <br><br>
            <label for="2"> <b>2. </b>Учебник издан тиражом 10000 экземпляров. Вероятность того, что он сброшюрован 
                неправильно, равна 0,0007. Найти вероятность того, что тираж содержит: а - ровно 1 
                бракованную книгу; б - хотя бы одну бракованную книгу. (Напишите ответы через пробел)</label><br>
            <input id="1.2" type="text" autocomplete="off">
            <br><br>
            <label for="3"><b>3. </b>Вероятность наступления события A в каждом из 900 независимых испытаний равна 
                0,002. Найти вероятность того, что событие A произойдет не менее 3 раз.</label><br>
            <input id="1.3" type="text" autocomplete="off">
            <br><br>
            <label for="4"> <b>4. </b>Среди семян ржи 0,04% сорняков. Какова вероятность при случайном отборе 5000 семян 
                обнаружить 5 семян сорняков?</label><br>
            <input id="1.4" type="text" autocomplete="off">
            <br><br>
            <label for="5"><b>5. </b>Число атак истребителей, которым может подвергнуться бомбардировщик над 
                территорией противника, есть случайная величина, распределенная по закону Пуассона с 
                математическим ожиданием a = 3 . Каждая атака с вероятностью 0,4 заканчивается 
                поражением бомбардировщика. Определить вероятность поражения бомбардировщика в 
                результате трех атак.</label><br>
            <input id="1.5" type="text" autocomplete="off">
                <br><br>
            <button id="check" onclick="check1()" type="submit" class="check-btn">Подтвердить ответы</button>
        
         </p>
         
 </div>

 <div id="prevAfterCheck" class="prev">
    <img onclick="next(7, '16.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div id="nextAfterCheck" class="next" style="display: none;">
     <img onclick="next(9, '17.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>

 
<footer id="footer_9">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Я в тебе не сомневался. С этой информацией мы быстро доберемся туда куда 
        нужно. А пока расскажу тебе немного о числовых характеристиках простейшего 
        потока.
        <br><br>
        Существуют такие характеристики как <i><b>Математическое ожидание, Дисперсия и 
            Среднеквадратическое отклонение.</b></i>
    <br><br>
    <b><i><u>Математическое ожидание</u></i></b> — понятие в теории вероятностей, означающее среднее 
    (взвешенное по вероятностям возможных значений) значение случайной величины. 
    Дисперсия - это математическое ожидание квадрата отклонения случайной величины от ее 
    среднего. Среднеквадратичное отклонение – это мера разброса значений измерений при 
    многократном проведении одного и того же целевого измерения. 
    
         </p>
        
 </div>

 <!-- <div class="prev">
    <img onclick="next(8, '16.jpeg')" class="next-but" id="next-but" src="../img/prev.png" alt="logo">
</div> -->
 <div class="next">
     <img onclick="next(10, '18.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_10">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Как быстро летит время. Мы уже на месте. Похоже на заброшенный научно 
        исследовательский центр. Вот только…. 
        <br>
        Здесь похоже давно никто не появлялся.
        <br><br>
        Думаю, мы сможем найти подсказки внутри. Найдем кабинет нашего пропавшего 
        друга и посмотрим его последнюю документацию.
        
         </p>
        
 </div>

 <div class="prev">
    <img onclick="next(9, '17.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(11, '19.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_11">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Его кабинет выглядит довольно запущено. Хотя документы на столе выглядят 
        словно их только что сюда положили. Ну ка. Взглянем. 
        <br>
        Было наивно полагать что прочитать их будет так просто. К счастью, мне знаком 
        этот шифр. Я покажу тебе его. Нам предстоит много работы.
        <br><br>
        Этот шифр основан на объединении и разъединении потоков. При <b><i>объединении</i></b> двух простейших потоков
         образуется простейший поток с интенсивностью λ1+λ2. Тогда вероятность наступления n событий за время
          t вычисляется по формуле:
          <br>
          <img class="formula_1" src="img/2_task/1.png">
          <br><br>
          При <b><i>разъединении</i></b> поступающего простейшего потока с интенсивностью λ на n направлений так,
           что каждое из событий исходного потока с вероятностью pi
           
          <img class="formula_0" src="img/2_task/2.png">
          поступает на i-е направление, поток i-го направления также будет простейшим с интенсивностью

          <img class="formula_0" src="img/2_task/3.png">
         </p>
        
 </div>

 <div class="prev">
    <img onclick="next(10, '18.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(12, '20.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_12">
    <div class="text" id="text2">
     <p>
        <b>Д.Кто: </b>Немного теории поможет тебе в дальнейшем. А теперь покажу на практике.
        <br><br>
        Поток машин, идущих по шоссе в одном направлении, представляет собой простейший поток с интенсивностью 
        8 машин в минуту. Шоссе имеет развилку в три направления. Вероятность движения машин в первом направлении 
        равна 0,12, во втором – 0,68, в третьем – 0,20. Определить интенсивности движения автомобилей в каждом 
        направлении. 
        <br><br>
        <b><i><u>Решение:</u></i></b> при разъединении простейшего потока образуются три простейших потока, 
        интенсивности которых можно вычислить по формуле
          <br>
          <img class="formula_1" style="height: 90px;" src="img/2_task/4.png">
          <br><br>
          Надеюсь что тебе был понятен приведенный  мной пример. Теперь мы сможем ускорить наш поиск. 
          Возьми на столе пару документов и приступай к расшифровке.
          
         </p>
        
 </div>

 <div class="prev">
    <img onclick="next(11, '19.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(13, '21.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_13">
    <div class="text" id="text2">
        <i>Ответы округлять до 4 знака после запятой (0,23457068 ≈ 0,2346)</i>
        <br><br>
     <p>
            <label for="2.1"><b>1. </b>Известно, что интенсивность потока космических кораблей, проходящих через космическую станцие "Кафьляндия",
             составляет 10 космических кораблей в час. При этом вероятности перемещения космических кораблей в три разных терминала равны: 0.3, 0.5 и 0.2 соответственно.<br>
            Для определения интенсивностей перемещения космических кораблей в каждом терминале воспользуемся аналогией с предыдущей задачей о потоке машин на шоссе.
        <br>(Напишите ответы через пробел)</label><br>
            <input id="2.1" type="text" autocomplete="off">
                <br><br>
            
            <button id="check_2" onclick="check2()" type="submit" class="check-btn">Подтвердить ответы</button>
        
         </p>
         
 </div>

 <div id="prevAfterCheck_2" class="prev">
    <img onclick="next(12, '20.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div id="nextAfterCheck_2" class="next" style="display: none;">
     <img onclick="next(14, '22.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_14">
    <div class="text" id="text2">
    <p>
        <b>Д.Кто: </b>Ты уже закончил? Давай посмотрим, что мы нашли. Поток Эрланга и его числовые характеристики? Неожиданно. Думаю, тебе стоит взглянуть на это.
        <br><br>
        <i>*Доктор Кто протягивает документ</i>
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(13, '21.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(15, '22.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_15">
    <div class="text" id="text2">
    <p>
    <b>Потоки Эрланга</b> – потоки, которые образуются в результате «просеивания» простейших потоков. <br>
    Рассмотрим на оси Оt простейший поток событий (рис. 1.2) и сохраним в нем не все точки, а только каждую вторую, остальные выбросим. 
        <br>
    <img class="formula_1" src="img/3_task/1.png"> 
    <br>
    <i>Рисунок 1.2 – простейший поток событий</i>
    <br><br>
    В результате такой операции «прореживания» или «просеивания» снова образуется новый поток событий (рис. 1.3), который называется потоком Эрланга второго порядка. 
    <br>
    <img class="formula_1" src="img/3_task/2.png"> 
    <br>
    <i>Рисунок 1.3 – поток Эрланга второго порядка</i>
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(14, '22.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(16, '23.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_16">
    <div class="text" id="text2">
    <p>
    <b>Поток Эрланга k-го порядка</b> – поток, получающийся если в простейшем потоке сохранить каждую k-ю точку, а остальные выбросить. <br>
    Характеристики закона Эрланга можно найти по формулам 12, 13 и 14.
    Все характеристики выражены через интенсивность λ порождающего поток Эрланга простейшего потока. Обозначим λk – интенсивность потока Эрланга, которая связана с интенсивность λ порождающего поток Эрланга простейшего потока выражением (15). 
    По формулам 16-18 получим характеристики потока Эрланга, выраженные через интенсивность потока Эрланга.

        <br>
    <img class="formula_1" style="height: 450px;" src="img/3_task/3.png"> 
    <br>
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(15, '22.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(17, '23.jpeg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_17">
    <div class="text" id="text2">
    <p>
    Плотность вероятности для потока Эрланга:
        <br>
    <img class="formula_1" style="height:90px" src="img/3_task/4.png"> 
    <br><br>
    Интригующе, не правда ли? Думаю, на обратной стороне есть зашифрованные координаты места, где находится следующая подсказка.
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(16, '23.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(18, '24.jpg')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_18">
    <div class="text" id="text2">
    <i>В ответ запишите сначала интенсивность, потом порядок, через пробел.</i>
        <br><br>
    <p>
    <label for="3.1"><b>1. </b>В результате статистической обработки интервалов времени между событиями в некотором потоке получены следующие характеристики: 
        среднее значение интервала mt=2 мин, среднее квадратическое отклонение интервала σt=0,9 мин. Требуется подобрать поток Эрланга, обладающий 
        приблизительно теми же характеристиками, найти его интенсивность λk и порядок k</label><br>
            <input id="3.1" type="text" autocomplete="off">
                <br><br>
            
            <button id="check_3" onclick="check3()" type="submit" class="check-btn">Подтвердить ответы</button>
    </p>  
 </div>
 <div id="prevAfterCheck_3" class="prev">
    <img onclick="next(17, '23.jpeg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div id="nextAfterCheck_3" class="next" style="display: none;">
     <img onclick="next(19, '25.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_19">
    <div class="text" id="text2">
    <p>
    <b>Д.Кто: </b>О нет! Пространственный прыжок перекинул нас прям в эпицентор космической временной бури! Перемещение будки в этой буре это <b><i>случайный процесс</i></b>.
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(18, '24.jpg')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(20, '25.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>



<footer id="footer_20">
    <div class="text" id="text2">
    <p>
    <b>Случайный процесс</b> – это процесс изменения во времени x(t) состояния или характеристик некоторой системы под влиянием случайных факторов.
    При этом предполагается, что состояние процесса в текущий момент времени – случайная величина. <br>
    <b>Область определения процесса</b> – множество значений t, принадлежащих числовой оси Т.<br>
    <b>Фазовое пространство процесса</b> – пространство Х, где случайные величины принимают значения.<br><br>
    <b>Стационарный случайный процесс</b> – такой случайный процесс, вероятностные характеристики которого в пространстве не меняются со временем.<br>
    <b>Нестационарный случайный процесс</b> – такой случайный процесс, вероятностные характеристики которого меняются во времени<br><br>
    <b>Случайный процесс с дискретным временем</b> – такой случайный процесс, который может изменять свое состояние только в строго определенный момент времени<br>
    <b>Случайный процесс с непрерывным временем</b> – такой случайный процесс, при котором переход системы из состояния в состояние возможен в любой, заранее неизвестный, случайный момент времени t<br>
    <b>Случайный процесс с дискретным состоянием</b> – такой случайный процесс, который в любой момент времени представляет собой дискретную случайную величину<br>
    <b>Случайный процесс с непрерывным состоянием</b> – такой случайный процесс, состояние которого может меняться непрерывно, плавно и нельзя выделить два соседних состояния<br><br>
    </p>  
 </div>
 <div class="prev">
    <img onclick="next(19, '25.png')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(21, '25.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>


<footer id="footer_21">
    <div class="text" id="text2">
    <p>
    <b>Математическое ожидание: </b>M[x(t)]<br>
    <b>Дисперсия: </b>D[x(t)] <br>
    <b>Корреляционная функция: </b>K(t1, t2)<br>
    <img class="formula_0" src="img/4_task/1.png"><br><br>
    <b>Для стационарных случайных процессов: </b><br>
    <img class="formula_0" src="img/4_task/2.png"><br><br>
    Дисперсия стационарного случайного процесса связана с корреляционной функцией соотношением <br>
    <img class="formula_0" src="img/4_task/3.png"><br><br>


    </p>  
 </div>
 <div class="prev">
    <img onclick="next(20, '25.png')" class="next-but" id="next-but" src="img/prev.png" alt="logo">
</div>
 <div class="next">
     <img onclick="next(21, '25.png')" class="next-but" id="next-but" src="img/next.png" alt="logo">
 </div>
</footer>
    
    <script src="js/main.js"></script>
</body>
</html>