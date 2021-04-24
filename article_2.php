<!DOCTYPE html>
<html lang="ru">   
<head>
    <title>Про ТОиР</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Дмитрий Казанский">
    <meta name="author" content="Дмитрий Казанский">

    <link rel="shortcut icon" href="favicon.ico">  
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script> 

     <script>
	function agreeForm(f) {
    if (f.agree.checked) f.submit.disabled = 0 
    else f.submit.disabled = 1
	}
	</script>
    
</head> 

<body>
    <!-- ******HEADER****** -->         
    <header class="header_art">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left " src="images/dlk_3.png" alt="Дмитрий Казанский" />  <!--  img-circle   -->
            <div class="profile-content pull-left">
                <h3 style="color:orange;">Философия ТОиР</h3>
				<hr>
                <h3 style="color:orange;">Несколько тезисов к обсуждению</h3>  
                <!-- <h4 style="color:yellow;">()</h4> -->
            </div><!--//profile-->
           	
			<!--  -->
			<!-- <a href="index.html" class="btn btn-cta-primary pull-right btn-xs" role="button" >На главную</a><br><br><br>
			 <div><a href="index.html" class="btn btn-cta-primary pull-right btn-xs" role="button" >Написать сообщение</a></div> -->
			
			<!-- <div class="btn-group">
  <button class="btn btn-default">Первая</button>
  <button class="btn btn-default">Вторая</button>
  <button class="btn btn-default">Третья</button>
			</div> -->
			
			<div class="btn-toolbar pull-right" role="toolbar">
  
			<div class="btn-group">
		<!-- <button class="btn btn-default">На главную</button> -->
		<!-- <a href="index.html" class="btn btn-default btn-xs" role="button" >На главную</a> -->
		<a href="index.html" class="btn btn-cta-primary pull-right btn-xs" role="button" >На главную</a>
			</div>
			<div class="btn-group">
		<!-- <button class="btn btn-default">Написать сообщение</button> -->
		<button type="button" class="btn btn-cta-primary pull-right btn-xs" data-toggle="modal" data-target="#feedbackFormModal">
				Написать Сообщение
			</button>
			</div>
			</div>



        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
		<!-- <div class="secondary col-md-4 col-sm-12 col-xs-12"> -->
		<div class="container-fluid">
            <div class="panel-group" id="accordion">
  <!-- 1 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 1 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Постановка задачи в стиле "Куда..., сколько..., когда... - чтобы..."</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <!-- Содержимое 1 панели -->
      <div class="panel-body">
        <p>Отчего-то я не вижу в свободном доступе простых текстов, где без специальной ИТ-терминологии объясняется суть ТОиР. 
        Есть умные бухгалтерские матералы на эту тему, есть от вендоров бодрящие маркетинговые статьи.
        Но не нашел исходной задачи нигде. Может быть, не там искал. В результате сам компактно написал, что считаю важным и нужным.
		Итак, задачу ТОиР я вижу следующим образом: 
        надо решить некое уравнение вида " куда, когда и сколько вложить денег, чтобы ... ". 
		Понимая, где причина, а где следствие - легче решить задачу.
        Порядок решения этой задачи и все комментарии, если кому интересно - приведены ниже.
         
        </p>
      </div>
    </div>
  </div>
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Начинать надо с конца</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>"Чтобы" (или "для чего")- этим предикатом описывается цель проведения ТОиР. 
		В самом простом варианте "чтобы выпускалась продукция и не было аварий и связанных с ними проблем". 
		То есть надо описать цель. Или точнее, параметры целевой ситуации (если это можно сделать). 
        Тут для менеджмента часто кроется серьезная засада. 
        Потому, что нужны внятные и измеряемые критерии. В мире есть разные целевые критерии: MTBF, SAIFI, SAIDI, CAIDI и многие другие (общие или специфические - это будет отдельной темой). 
        В основном, это оценки стоимости перерывов/простоев и, дополнительно, - возникающего экологического вреда...
		Формулировки при этом могут быть разными: "чтобы перерыв в функционировании не превышал 15 минут".
		Или "чтобы между авариями было не меньше 500 часов исправного функционирования".
		Или "чтобы суммарный ущерб был не больше 1 тысячи рублей".
		Или как-то еще... Формулировать задачу в стиле "чтобы все было хорошо" - это неправильно и безграмотно.
		 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_3">3. Куда... </a>
      </h4>
    </div>
    <div id="collapse_3" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>"Куда" - чтобы иметь возможность ответить на этот вопрос, надо предварительно иметь хорошо структурированное оборудование/активы. 
		Cледовательно, надо провести их структуризацию и паспортизацию. 
		И уложить полученную при структурировании разнообразную (технически и экономически значимую) информацию в БДО (Базу данных оборудования - так обычно называется). 
		Обычно в результате получается структура типа дерева (от крупного - к отдельным компонентам). 
		Лишь после этого можно приступать к реализации каких-либо идей в сфере ТОиР. Ибо для инвестиций появляется конкретный адресат.
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4">4. Когда...</a>
      </h4>
    </div>
    <div id="collapse_4" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Ответ на вопрос "когда" зависит от целеполагания и философии построения всей системы ТОиР. Его часто надо понимать "при возникновении каких условий".
		Возможные разные ответы: никогда (то есть когда сломается), при достижении определенного технического состояния, после истечения определенного промежутка времени или наработки,
		после осуществления специального прогнозного расчета, по результатам планирования загрузки в следующий интервал времени, после работы сугубо специального алгоритма.
		Поэтому чтобы осмысленно ответить на вопрос "когда", надо предварительно научиться понимать состояние своих активов. 
		И понимать, что означает это в практическом плане (то есть сколько осталось времени до аварии).
		Таким образом, на этом этапе мы налаживаем поставку информации о текущем состоянии активов. И определяем стратегию сбора этой информации для дальнейшего реагирования.
		И проводим расчет Индекса Технического Состояния (ИТС), если предполагаем опираться на него в ответе на вопрос "когда". 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_5">5. Сколько...</a>
      </h4>
    </div>
    <div id="collapse_5" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>А вот тут ситуация посложнее. Ответ на этот вопрос - это, в определенной степени, ответ на вопрос "что делать".
		Можно делать по максимуму можно делать по минимуму. 
		Сколько - это зависит от того, что мы хотим достичь своими инвестициями, куда перевести проблемный актив (в смысле его способности приносить отдачу и не приносить проблем). 
		А хотеть можно разного... Можно капитально обновить актив (провести капремонт или даже модернизацию), а можно провести минимальное техобслуживание (сменить масло, условно говоря).
		Плюс к тому, тут надо учитывать ограничения на бюджет. Часто бывает, что именно здесь находится "зона компромиссов". Но проблема тут есть серьезная.
		Ибо никто не знает, что лучше: сейчас вложить Х, или позже вложить 10Х. Недовложение vs избыточной надежности.
		Тут возникает тема анализа технологических и имиджевых рисков. 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6">6. Резюме </a>
      </h4>
    </div>
    <div id="collapse_6" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Итак, мы пристыковали друг другу понятия "куда, когда и сколько" и "зачем". Конечно, это все очень упрощенное изложение.
        Но иногда надо отстраниться от деталей и посмотреть на ситуацию в её рафинированном виде, слегка сверху.
		В принципе, тут есть место для довольно серьезной математики, но этому будет посвящен отдельный материал (математические модели есть и будут изложены при необходимости).
		Мы пока не анализировали массу практических локальных вопросов (например, доступность необходимых материальных/транспортных/трудовых ресурсов или скачкообразное изменение ИТС). 
        Все это решаемо довольно легко - при наличии соответствующего поддерживающего ПО, разумеется.
        И, следовательно возникает предпосылка уйти от "кошмара владельца/инвестора", который заключается в неприятной неопределенности - 
        что лучше: инвестировать немного, но часто или же много, но редко... Это похоже на известный анекдот от Жванецкого про раков... :-) 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7">7. ПО для ТОиР</a>
      </h4>
    </div>
    <div id="collapse_7" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Можно ли иметь хорошую методологию ТОиР и не иметь ПО ? Да, можно.
        Ответственно заявляю, можно всё делать в Excel. Но все же лучше это делать с помощью тематической ТОиР-платформы, которая содержит определенное количество функциональных заготовок.
        Например, которая может опрашивать активы и фиксировать возникающие дефекты. И ставить им в соответствие необходимые технологические карты... 
		Еще очень полезна функциональность прогнозирования ИТС. 
		Плюс к тому, никто не отменяет учетные задачи и отчетность, поэтому интеграция с бухгалтерской системой (а лучше - не с одной) - это тоже базовое свойство ТОиР-платформы. 
		Впрочем, это уже отдельная тема...
        </p>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_8">8. ТОиР как вид хозяйствования</a>
      </h4>
    </div>
    <div id="collapse_8" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>ТОиР можно и нужно считать частью процесса эксплуатации актива.
        И точно так же планировать, обеспечивать, реализовывать и отчитываться. 
        Другой вопрос, что используемые алгоритмы существенно более изощренны, чем классические MRP и MRP II.
        Хотя бы потому, что ТоиР двулик в плане задач. Одна ветвь - это реагирование на оперативное изменение ИТС. 
		Другая ветвь - это подведение ИТС актива к нужному значению, исходя из плана загрузки актива в рамках предстоящей ему эксплуатации. 
		И автоматически получать план подготовки актива к предстоящей ему эксплуатации (в деньгах и сроках) - серьезная задача, под силу не всякому ПО...
        </p>
      </div>
    </div>
  </div>
  
  
  
  
  
</div>
</div>    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">3rd Wave Media</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 

<!-- Форма обратной связи в модальном окне -->
<div class="modal fade" id="feedbackFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" align='center'>Для отправки сообщения заполните поля этой формы</h4>
            </div>

            <div class="modal-body">

                    <!-- Форма обратной связи -->
                    <form id="feedbackForm" action="" enctype="multipart/form-data" novalidate>
                        <div class="row">
                            <div class="col-sm-6">

                                <!-- Имя пользователя -->
                                <div class="form-group has-feedback">
                                    <label for="name" class="control-label">Имя</label>
                                    <input id="name" type="text" name="name" class="form-control"
                                           value="" placeholder="Имя" minlength="2" required="required">
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <!-- Фамилия пользователя -->
                                <div class="form-group has-feedback">
                                    <label for="fname" class="control-label">Фамилия</label>
                                    <input id="fname" type="text" name="fname" class="form-control"
                                           value="" placeholder="Фамилия" minlength="2" required="required">
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>

                            </div>
                        </div>

						<div class="row">
							<div class="col-sm-6">

                                <!-- Компания пользователя -->
                                <div class="form-group has-feedback">
                                    <label for="cname" class="control-label">Компания</label>
                                    <input id="cname" type="text" name="cname" class="form-control"
                                           value="" placeholder="Компания" minlength="2" required="required">
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>

                            </div>
							<div class="col-sm-6">

                                <!-- Email пользователя -->
                                <div class="form-group has-feedback">
                                    <label for="email" class="control-label">Email-адрес</label>
                                    <input id="email" type="email" name="email" required="required"
                                           class="form-control"
                                           value="" placeholder="Email-адрес">
                                    <span class="glyphicon form-control-feedback"></span>
                                </div>

                            </div>
						</div>
                        <!-- Сообщение пользователя -->
                        <div class="form-group has-feedback">
                            <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
                            <textarea id="message" name="message" class="form-control"
                                      rows="3" placeholder="Сообщение (не менее 20 символов)" minlength="20"
                                      maxlength="500" required="required"></textarea>
                        </div>

                        
                        <!-- Пользовательское солашение -->
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" onclick="agreeForm(this.form)"> Я даю своё согласие на обработку моих
                                персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О
                                персональных
                                данных».
                            </label>
                        </div>  

                        <!-- Кнопка для отправки формы -->
                        <button type="submit" name="submit" class="btn btn-success btn-sm pull-right" disabled="disabled">Отправить</button>
                        
                        <!-- Индикация загрузки данных формы на сервер -->
                        <div class="clearfix"></div>
                        <div class="progress" style="display:none; margin-top: 20px;">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </form>

                    <!-- Сообщение об успешной отправки формы -->
                    <div class="alert alert-warning success-message hidden">
                        Сообщение успешно отправлено. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить ещё одно сообщение.
                    </div>

            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button> -->
            </div>
        </div>
    </div>
</div>

</body>
</html> 