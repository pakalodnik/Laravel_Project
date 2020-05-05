<!DOCTYPE html>
<html>
<head>
    <title>Publications</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    @font-face {
      font-family: "DejaVu Sans";
      font-style: normal;
      font-weight: 400;
      src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
      /* IE9 Compat Modes */
      src: 
        local("DejaVu Sans"), 
        local("DejaVu Sans"), 
        url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
    }
    body { 
      font-family: "DejaVu Sans";
      font-size: 12px;
    }
  </style>
</head>
<body>
    <h4 style="width: 700px; text-align: center">Отчёт преподавателя кафедры (название) (ФИО) о выполнении индивидуального плана 
                за первое полугодие (год) учебный год</h4>
    <div style="width: 100%; max-width: 720px; margin: auto">
        <table width="100%">
            <tr>
                <td style="padding-bottom: 10px;">
                        <b>ФИО: </b><br>
                        <b>Должность: </b><br>
                        <b>Степень, звание: </b><br>
                        <b>Штатный, совместитель: </b>
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 10px;">
                    <div style="margin-left:30px">За первое полугодие (год) учебный год мною проделана работа: </div>
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 10px;">
                    <div style="margin-left:15px">2.	<b>Научная работа</b> (привести список публикаций по следующему образцу):</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <b>а) Публикации с ненулевым Импакт-фактором</b>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-bottom: 20px solid #FFF;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="1" margin-right="5px">
                        <thead>
                            <tr style="background-color: #FFFFFF">
                                <th style="text-align: center; ">№</th>
                                <th style="text-align: center; ">Ф.И.О.<br>автор(ы)</strong></th>
                                <th style="text-align: center; ">Название<br>публикации</th>
                                <th style="text-align: center; ">Выходные данные,<br>ссылка на статью</th>
                                <th style="text-align: center; ">ИФ</th>
                                <th style="text-align: center; ">Индекси<br>руемая база</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publications as $publication)
                                <tr>
                                    <td style="text-align: center; ">{{ $publication['id'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ Auth::user()->name }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['title'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['year'] }}. - P. {{ $publication['page'] }}
                                    <br>
                                    {{ $publication['url'] }}
                                    </td>
                                    <td style="text-align: center;">0,1</td>
                                    <td style="text-align: center;">Scopus</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <b>б) Публикации в журналах рекомендованных ККСОН</b>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom: 20px solid #FFF;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="1" margin-right="5px">
                        <thead>
                            <tr style="background-color: #FFFFFF">
                                <th style="text-align: center; ">№</th>
                                <th style="text-align: center; ">Ф.И.О.<br>автор(ы)</strong></th>
                                <th style="text-align: center; ">Название<br>публикации</th>
                                <th style="text-align: center; ">Выходные данные</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--@foreach ($publications as $publication)
                                <tr>
                                    <td style="text-align: center; ">{{ $publication['id'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ Auth::user()->name }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['title'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['year'] }}. - P. {{ $publication['page'] }}
                                    <br>
                                    {{ $publication['url'] }}
                                    </td>
                                    <td style="text-align: center;">0,1</td>
                                    <td style="text-align: center;">Scopus</td>
                                </tr>
                            @endforeach
                            -->
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4" >
                    <b>в) Публикации в журналах и конференциях</b>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border-bottom: 20px solid #FFF;">
                    <table width="100%" cellpadding="0" cellspacing="0" border="1" margin-right="5px">
                        <thead>
                            <tr style="background-color: #FFFFFF">
                                <th style="text-align: center; ">№</th>
                                <th style="text-align: center; ">Ф.И.О.<br>автор(ы)</strong></th>
                                <th style="text-align: center; ">Название<br>публикации</th>
                                <th style="text-align: center; ">Выходные данные</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--@foreach ($publications as $publication)
                                <tr>
                                    <td style="text-align: center; ">{{ $publication['id'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ Auth::user()->name }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['title'] }}</td>
                                    <td style="text-align: left; padding: 0px 0px 0px 5px">{{ $publication['year'] }}. - P. {{ $publication['page'] }}
                                    <br>
                                    {{ $publication['url'] }}
                                    </td>
                                    <td style="text-align: center;">0,1</td>
                                    <td style="text-align: center;">Scopus</td>
                                </tr>
                            @endforeach
                            -->
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="text-align:left">Дата</td>
                <td style="text-align:right margin-right:100px">Подпись</td>
            </tr>
        </table>
    </div>
</body>
</html>