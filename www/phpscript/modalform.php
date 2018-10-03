<!-- Modal callback -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="req.php">
              <div class="form-row">
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="name" id="inputcall_1" placeholder="Ваше имя">
                          <label for="inputcall_1"><i class="fas fa-user"></i></label>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="phone" id="inputcall_2" placeholder="Ваш телефон для связи">
                          <label for="inputcall_2"><i class="fas fa-phone"></i></label>
                      </div>
                  </div>
              </div>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalClose">Отмена</button>-->
                  <input type="submit" class="btn btn-default" id="modalPhone" value="Связаться со мной">
              </form>
          </div>
        </div>
      </div>
    </div>
<!--@@-->


<!-- Modal phone-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заявка на обратный звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form method="post" action="req.php">
              <div class="form-row">
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="name" id="inputcall_1" placeholder="Введите ваше имя">
                          <label for="inputcall_1">Ваше имя</label>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="phone" id="inputcall_2" placeholder="Введите ваш номер телефона">
                          <label for="inputcall_2">Ваш телефон</label>
                      </div>
                  </div>
              </div>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalClose">Отмена</button>-->
              <input type="submit" class="btn btn-primary"   id="modalPhone" value="Связаться со мной">
              </form>
            </div>
        </div>
    </div>
</div>


<!--Modal consultation -->

<div class="modal fade" id="consultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalConsult">Заявка на консультацию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form method="post" action="consult.php">
              <div class="form-row">
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="name" id="consult_1" placeholder="Введите ваше имя">
                          <label for="consult_1">Ваше имя:</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="phone" id="consult_2" placeholder="Введите ваш номер телефона или email">
                          <label for="consult_2">Ваш телефон или e-mail:</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                        <textarea class="form-control md-textarea" name="question" id="consult_3" rows="3"></textarea>
                          <label for="consult_3">Ваш вопрос:</label>
                        </div>
                  </div>
              </div>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalClose">Отмена</button>-->
              <input type="submit" class="btn btn-primary"   id="modalConsult" value="Задать вопрос">
              </form>
            </div>
        </div>
    </div>
</div>



<!--Modal order -->

<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalOrder">Заявка на магнит</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form method="post" action="order.php">
              <div class="form-row">
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="name" id="order_1" placeholder="Введите ваше имя">
                          <label for="inputcall_1">Ваше имя:</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="phone" id="order_2" placeholder="Введите ваш номер телефона">
                          <label for="inputcall_2">Ваш телефон:</label>
                      </div>
                  </div>
                  <div class="col-md-10">
                      <div class="md-form form-group">
                          <input type="text" class="form-control" name="order" id="order_3" placeholder="Например: магнит 50х30">
                          <label for="inputcall_2">Наименование магнита:</label>
                      </div>
                  </div>
                  <div class="custom-control custom-radio">
                      <input name="deliver" type="radio" class="custom-control-input"  id="order_5" checked="checked" value="Самовывоз возле метро">
                      <label class="custom-control-label" for="order_5">Самовывоз возле метро</label>
                  </div>

                  <div class="custom-control custom-radio">
                      <input name="deliver" type="radio" class="custom-control-input"  id="order_6" value="Доставка по Москве до метро - 200руб">
                      <label class="custom-control-label" for="order_6">Доставка по Москве до метро - 200руб</label>
                  </div>

                  <div class="custom-control custom-radio">
                      <input name="deliver" type="radio" class="custom-control-input"  id="order_7" value="Доставка по Москве до адреса - 300руб">
                      <label class="custom-control-label" for="order_7">Доставка по Москве до адреса - 300руб</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input name="deliver" type="radio" class="custom-control-input"  id="order_8" value="Доставка по Московской области от - 500руб">
                      <label class="custom-control-label" for="order_8">Доставка по Московской области от - 500руб</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input name="deliver" type="radio" class="custom-control-input"  id="order_9" value="Доставка по России - примерно 350руб">
                      <label class="custom-control-label" for="order_9">Доставка по России - примерно 350руб</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" value="Клиенту нужна установка" name="check" id="order_10">
                      <label class="custom-control-label" for="order_10">Мне нужна установка</label>
                  </div>
                  <div class="col-md-10">
                    <div class="md-form">
                        <textarea class="form-control md-textarea" name="question" id="order_11" rows="5" placeholder="Здесь вы можете указать адрес доставки либо дополнительную информацию"></textarea>
                          <label for="order_11">Комментарии к заказу:</label>
                        </div>
                  </div>
              </div>
              <!--<button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalClose">Отмена</button>-->
              <input type="submit" class="btn btn-primary"   id="modalOrder" value="Подтвердить заказ">
              </form>
            </div>
        </div>
    </div>
</div>


<script>

/*--Callback--*/

$('#exampleModal').on('shown.bs.modal', function (e) {
     $('#modalPhone').click(function(e){
       var name = $('#inputcall_1').val();
       var phone = $('#inputcall_2').val();
       $('#exampleModal').modal('hide');
       $.ajax({
           type: "POST",
           url: "model/req.php",
           data: {name:name, phone:phone},
           success: function(){
               showAlert();
           }
       });
       e.preventDefault();

         function showAlert() {
           swal({
           title: "Спасибо за заявку!",
           text: "В течении 15 минут с вами свяжется менеджер и уточнит детали заказа.",
           icon: "success",
           button: "Обратно на сайт",
             });
           }
     });
   });




      /*--Order--*/

      $('#orderModal').on('shown.bs.modal', function (e) {
           $('#modalOrder').click(function(e){
             var name = $('#order_1').val();
             var phone = $('#order_2').val();
             var order = $('#order_3').val();
             var radio = $(".custom-control-input:checked").val();
             var check = $("#order_10:checked").val();
             var question = $('#order_11').val();
             $('#orderModal').modal('hide');
             $.ajax({
                 type: "POST",
                 url: "model/order.php",
                 data: {
                   name:name,
                   phone:phone,
                   order:order,
                   question:question,
                   radio:radio,
                   check:check
                 },
                 success: function(){
                     showAlert();
                 }
             });
             e.preventDefault();

               function showAlert() {
                 swal({
                 title: "Спасибо за заказ!",
                 text: "В течении 15 минут с вами свяжется менеджер и уточнит детали по вашему заказу.",
                 icon: "success",
                 button: "Обратно на сайт",
                   });
                 }
           });
         });


</script>
