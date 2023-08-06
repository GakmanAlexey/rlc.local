
<body>
    <div class="container">
        <div class="work_1">
            <div class="work_1_box">
                <div class="work_box_title">Кассир</div>
                <div class="work_box_text">
                <p class="work_box_text_1">Что вы получаете от нас:</p>
                    <p class="work_box_text_2"> Место работы возле дома;<br>
                                            Полную занятость или подработку;<br>
                                            Официальное оформление;<br>
                                            Стабильный доход + бонусы;<br>
                    </p>
                    <p class="work_box_text_1"> В обязанности входит:</p>
                    <p class="work_box_text_2"> Прием заказов от клиентов;<br>
                                            Работа с кассовым аппаратом;<br>
                    </p>
                </div>
                <a class="work_box_button_link" href="?position=kassir#form_link"><div class="work_box_button">стать кассиром</div></a>
            </div>
        </div>
        <div class="work_2_3_box">
            <div class="work_2">
                <div class="work_2_box">
                    <div class="work_box_title">Повар</div>
                    <div class="work_box_text  m_auto">
                    <p class="work_box_text_1">Что вы получаете от нас:</p>
                    <p class="work_box_text_2">Выбор ресторана возле дома;<br>
                                            График на выбор ( полная занятость / подработка);<br>
                                            Официальное трудоустройство;<br>
                                            Стабильный доход + бонусы;<br>
                    </p>
                    <p class="work_box_text_1"> В обязанности входит:</p>
                    <p class="work_box_text_2"> Приготовление блюд по меню;<br>
                                                Соблюдение чистоты на рабочем месте;<br>
                    </p>

                    </div>
                    <a class="work_box_button_link m_auto" href="?position=povar#form_link"><div class="work_box_button  m_auto">стать поваром</div></a>
                </div>
            </div>

            <div class="work_3">
                <div class="work_3_box">
                    <div class="work_box_title">Клининг</div>
                    <div class="work_box_text">
                    <p class="work_box_text_1">Что вы получаете от нас:</p>
                    <p class="work_box_text_2"> Смена НОЧЬ по 10 часов;<br>
                                            Трудоустройство в день обращения;<br>
                                            Оплата труда 2 раза в месяц;<br>
                                            Работа в удобной для Вас локации;<br>
                    </p>
                    <p class="work_box_text_1"> В обязанности входит:</p>
                    <p class="work_box_text_2"> Поддерживать чистоту всего оборудования;<br>
                                            Наводить порядок в помещениях;<br>
                    </p>
                    </div>
                    <a class="work_box_button_link" href="?position=cleaner#form_link"><div class="work_box_button">стать клинером</div></a>
                </div>
            </div>
        </div>
    </div>  
    <a name="form_link"></a>    
            <div class="form_box">
                    <form action="/zayavka/" class="form" method="post" >
                        <input class="input" type="text" name="name" placeholder="Имя">
                        <input class="input" type="text" name="gorod"  placeholder="Город">
                        <input class="input" type="text" name="phone"  placeholder="Телефон">
                        <input class="input" type="text" name="age" placeholder="Возраст">
                        <input type="hidden" id="hid" name="possitions" value="<?php echo $h["index"]["position"];?>" />
                        <button class="button">отправить</button>
                    </form>
                </div>
            </div>  
    
    
</body>
</html>