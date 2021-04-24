<!DOCTYPE html>
<html lang="ru">   
<head>
    <title> ППП</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Дмитрий Казанский">
    <meta name="author" content="Дмитрий Казанский">
    <meta name="keywords" content="EAM, SCADA, BPMN, BPMS" />

    <link rel="shortcut icon" href="favicon.ico">  
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!--	<script type="text/javascript" src="js/main.js"></script> -->

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
                <h3 style="color:orange;">ИТ-платформы для развития бизнеса</h3>
				<hr>
                <h3 style="color:orange;">Несколько тезисов к обсуждению</h3>  
                <!-- <h4 style="color:yellow;">()</h4> -->
            </div><!--//profile-->
           	<a href="index.html" class="btn btn-cta-primary pull-right btn-xs" role="button" >На главную</a>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Введение и назначение текста</a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <!-- Содержимое 1 панели -->
      <div class="panel-body">
        <p>Подавляющее количество видов деятельности в настоящее время не может обходиться без ИТ-обеспечения в виде соответствующего ПО. 
        Это одинаково справедливо и для госучреждений и для бизнеса.
        Но данный текст сфокусирован на потребностях бизнеса. 
        Ниже мы тезисно расммотрим т.н. платформу поддержки предпринимательства (ППП). 
        Это понятие пока не имеет четкой дефиниции, хотя сам термин уже встречался неоднократно...
        Сам материал не направлен "на продажу". В данный момент это, скорее, приглашение к обсуждению функционала и путей реализации. 
        Но было бы, конечно, любопытно посмотреть, что из этого может получиться, если такой проект стартует... 
        </p>
      </div>
    </div>
  </div>
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. ИТ-набор для бизнеса. Почему его нет в явном виде ?</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Возможно, кому то вопрос покажется даже забавным, но почему у нас нет набора (может быть, даже сертифицированного) ПО для ведения предпринимательской деятельности ?
        Из-за многочисленных нюансов ведения конкретного бизнеса - таков возможный ответ. Но ERP-системы есть, несмотря на те же причины. 
        Но на определенном уровне абстракции бизнес-активность также поддается формализации, как и любая иная. 
        Просто эту формализацию надо предложить и утвердить. Или канонизировать.
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_3">3. Фаза поиска денег. </a>
      </h4>
    </div>
    <div id="collapse_3" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Продолжаем тему про набор ИТ-инструментов для бизнеса... Допустим, мы хотим производить уникально вкусные пирожки. 
        Бизнес (при наличии идеи пирожка) начинается с поиска денег. На нулевой фазе бизнеса понадобятся кредиты, займы или иные активы.
        Соответственно, резонно предположить, что платформа будет содержать список потенциальных инвесторов... 
        Но инвесторы потянутся на ППП в том случае, если там будет спрос на инвестиции. 
        Что первично - курица или яйцо ? То есть, в нашем случае: публичный спрос на инвестиции или публичное предложение инвестиций ? 
        Что должно быть пружиной роста ППП ? 
        Если бизнес не может найти денег на платформе, то она ему вряд-ли нужна... 
        Но и бегать по рынку с инвестициями - тоже никто не будет. 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4">4. Поиск поставщиков сырья.</a>
      </h4>
    </div>
    <div id="collapse_4" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Допустим, что деньги найдены. Теперь начинается выстраивание собственно структуры бизнеса. 
        Мы в наших рассуждениях идем по классической цепочке нарастания стоимости конечного продукта. Т.е. "Сырье-Производство-Реализация". 
        Логично предположить, что первой идет фаза (в традиционном процессе строительства бизнеса, который выдает на рынок что-то материальное) - поиск поставщиков сырья.
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_5">5. Поиск производственных мощностей и размещение заказа на производство.</a>
      </h4>
    </div>
    <div id="collapse_5" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Допустим, фаза поиска поставщиков сырья пройдена. Теперь, очевидно, надо найти соответствующие производственные мощности. 
        В большистве случае - арендовать. Иногда можно просто разместить свой заказ. В тяжелвх случаях - надо строить самостоятельно. 
        Этот поворот мы осознаем. 
        Но в целях сохранения компактности материала не будем сейчас рассматривать подробно. Это проекные изыскания, отведение земли, сервитуты...
        Потом - согласование документации, землеустроительные работы, поиск подрядчиков - отдельный процесс. 
        Мы его понимаем, но пока тут не будем обсуждать. 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_6">6. Построение системы хранения и сбыта </a>
      </h4>
    </div>
    <div id="collapse_6" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Произведенную продукцию надо сбывать. А часто - еще и хранить. И подвергать инвентаризации, конечно.
        Поэтому поиск сбытовых структур, формализация обязательств - это тоже необходимый шаг в построении бизнеса.
        Все это решаемо довольно легко - при наличии соответствующего поддерживающего сервиса, разумеется.
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_7">7. Выстраивание отношений со СМИ, подача рекламы</a>
      </h4>
    </div>
    <div id="collapse_7" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Здесь ничего непознанного нет. Просто надо уделить время и деньги на формирование имиджа продукции, дать рынку информацию.
        Для этого надо войти в коннект со СМИ, рекламными агенствами, всеми теми, чей труд помогает сформировать у конечного потребителя
        желание приобрести новинку... 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_8">8. Подбор персонала</a>
      </h4>
    </div>
    <div id="collapse_8" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Чтобы бизнес функционировал, необходимы люди. 
        Поэтому соответствующий сервис по подбору, обучению и мотивированию персонала представляется для платформы абсолютно необходимым.
        </p>
      </div>
    </div>
  </div>
  
  <!-- 2 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_9">9. Налаживание спонсорской деятельности</a>
      </h4>
    </div>
    <div id="collapse_9" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Серьезный бизнес несет социальную нагрузку. Чтобы это не приобретало кулуарный характер, разумно на платформе иметь
        нормальный сервис соответствующего направления. 
        </p>
      </div>
    </div>
  </div>
  
  <!-- 10 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_10">10. Сбор разрешений, сертификатов и прочего</a>
      </h4>
    </div>
    <div id="collapse_10" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p> Возможно, самая неприятная для бизнеса часть пути. Для того, чтобы не выходя из платформы, собрать все нужные разрешения, надо сделать так, чтобы на платформе присутствовали все разрешающие органы.
        Но что их может заинтересовать в платформе - не ясно. Это, возможно, самое узкое место всей концепции платформы. 
        Единственный способ обеспечить присутствие госорганов - это институировать платформу и сделать присутствие на ней всех нужных госструктур (всех уровней) обязателным. 
        Ммм...
        </p>
      </div>
    </div>
  </div>
  
  <!-- 11 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 2 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_11">11. Общий список подсистем ИТ-набора для бизнеса</a>
      </h4>
    </div>
    <div id="collapse_11" class="panel-collapse collapse">
      <!-- Содержимое 2 панели -->
      <div class="panel-body">
        <p>Если собрать перечисленные выше прикладные подсистемы, то получится следующий список:
        <ul>
        <li>доступ к кредитным организациях, площадкам крауд-фандинга, "живым" деньгам в любом виде;</li>
        <li>доступ к поставщикам сырья и соответствующим биржам;</li>
        <li>доступ к владельцам произвоственных мощностей;</li>
        <li>доступ к системам логистики;</li>
        <li>доступ к системам сбыта/розницы;</li>
        <li>доступ к системам подбора персонала;</li>
        <li>доступ к системам спонсорства;</li>
        <li>доступ в СМЭВ.</li>
        </ul>
        <br> Как-то так...
        </p>
      </div>
    </div>
  </div>
  
  
  
  <!-- 12 панель -->
  <div class="panel panel-default">
    <!-- Заголовок 3 панели -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">12. Итого...</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <!-- Содержимое 3 панели -->
      <div class="panel-body">
        <p>Понятно, что найдутся кросс-функциональные компоненты ПО, одинаково востребованные на всех фазах (универсальные). 
        <ul>
        <li>Авторизация,</li>
        <li>Хранение данных,</li>
        <li>Касса,</li>
        <li>Машина проводок (Бухучет в нескольких планах счетов),</li>
        <li>Регистраторы обязательств (ведение договоров),</li>
        <li>Движок для планирования сложноувязанных активностей ,</li>
        <li>Сбор данных и трансформация в отчетность (ETL),</li>
        <li>Электронная подпись,</li>
        <li>Коммуникативные инструменты (мессенджеры, электронная почта).</li>
        </ul>
           
        Возможно, что то еще...  
        Если вернуться к началу материала, то надо вспомнить, что выстроить из всех указанных универсальных функциональных компонент нечто единое, полезное бизнесу - бывает непросто.
        Надо приспособить универсальные функциональные компоненты для решения прикладных практических задач бизнеса.
        Но среди универсальных компонент нет априорной стыкуемости. Или это дорого. 
        Тут и может помочь платформа поддержки предпринимательства, ибо на ней присутствуе и необходимый базовый функционал и коллективы разработчиков, к которым можно обратиться... 
        Но здесь начинается область практических шагов, поэтому пишите, кому интересно...
        
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
                    <form id="feedbackForm" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
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