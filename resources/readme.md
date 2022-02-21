Запросы:

1. SELECT id, link 
                FROM ads 
                WHERE status='active' 
                    AND site='" + project.Variables["site"].Value + "' 
                    AND ( unixtime_check + " + project.Variables["check_time"].Value + " ) < UNIX_TIMESTAMP() 
                ORDER BY RAND() 
                LIMIT 1;

    Как я понимаю, это запрос для обновления.

    Аналог для него:
    Адрес запроса: https://almejarosa.es/7ja983e2r5cc46e83jpbcds5psw39dkzh6fc/get-ads-for-update
    Формат json'а в запросе: 
    {
        "site": "",
        "check_time": ""
    }
    где site аналог project.Variables["site"].Value, а check_time аналог project.Variables["check_time"].Value

    Ответ такой же, как и в первом запросе с соответствующими данными, а данные придут в параметре data.
    Например: {"type":"ok","data":[{"id":84706,"link":"https:\/\/zaragoza.wanuncios.com\/mejor-masaje-erotico-duplex-cuerpo-deseado-y-mucho-mas-195-2389300.html"}]}

2. SELECT id, login, password, link 
        FROM ads 
        WHERE site='" + project.Variables["site"].Value + "' 
            AND status='active' AND post_id=" + project.Variables["post_id"].Value + "; 

    Это запрос для удаления.

    Аналог для него:
    Адрес запроса: https://almejarosa.es/7ja983e2r5cc46e83jpbcds5psw39dkzh6fc/get-ads-for-remove
    Формат json'а в запросе: 
    {
        "site": "Wanuncios.com",
        "post_id": 23
    }
    где site аналог project.Variables["site"].Value, а post_id аналог project.Variables["post_id"].Value

    Ответ такой же, как и предыдущем запросе с соответствующими данными.
    Например: {"type":"ok","data":[{"id":84797,"login":"aek74vnbxr@azra.net","password":null,"link":"https:\/\/madrid.wanuncios.com\/el-bombom-mas-disfraces-sabroso-de-madrid-tragona-caliente-195-2389354.html"}]}

3. SELECT id, login, password, link 
        FROM ads 
        WHERE site='" + project.Variables["site"].Value + "' 
            AND status='active' 
            AND (UNIX_TIMESTAMP() - unixtime_update) > " + project.Variables["timing"].Value + ";

    Это запрос для шаблонов автоподнятия.

    Аналог для него:
    Адрес запроса: https://almejarosa.es/7ja983e2r5cc46e83jpbcds5psw39dkzh6fc/get-ads-for-autoraising
    Формат json'а в запросе: 
    {
        "site": "",
        "timing": ""
    }
    где site аналог project.Variables["site"].Value, а post_id аналог project.Variables["timing"].Value

    Ответ такой же, как и предыдущем запросе с соответствующими данными.
    Например: {"type":"ok","data":[{"id":84592,"login":"yss8rpj03i@vipilitka.buzz","password":null,"link":"https:\/\/murcia.wanuncios.com\/complaciente-cachonda-depilada-trato-de-novios-trios-195-2389243.html"},{"id":84601,"login":"aogot04axe@hggpxzvxg.ml","password":null,"link":"https:\/\/sevilla.wanuncios.com\/hambrienta-para-darte-frances-ompleto-polla-mi-muy-cariosa-195-2389247.html"},{"id":84606,"login":"pvwdg4ijhw@razernv.com","password":null,"link":"https:\/\/las-palmas.wanuncios.com\/completo-sin-prisas-sin-tabus-y-tops-masaje-erotico-xxl-195-2389251.html"},{"id":84608,"login":"2kqntod5ep@iatarget.com","password":null,"link":"https:\/\/valencia.wanuncios.com\/masaje-prostatico-besos-con-lengua-mltiples-orgasmos-largos-195-2389252.html"}]}