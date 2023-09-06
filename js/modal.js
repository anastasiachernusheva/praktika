$(document).ready(function(){

  $('#myModal').on('show.bs.modal', function (event) {
// кнопка, которая вызывает модаль
 var button = $(event.relatedTarget) 
// получим  data-id_user атрибут
  var id_numer = button.data('id_numer') 
  var price = button.data('price') 
// получим  data-fio атрибут
  var description = button.data('description');
   // Здесь изменяем содержимое модали
  var modal = $(this);
 modal.find('.modal-title').text('Забронировать '+description);
 modal.find('.modal-body #id_numer').val(id_numer);
 modal.find('.modal-body #price').val(price);
})

//расчет суммы
$(".databron").change(function(){
var data_sdachi =document.getElementById('data_sdachi').value;
var data_viezda =document.getElementById('data_viezda').value;
var d1 = new Date(data_sdachi);
var d2 = new Date(data_viezda);
var d = Math.floor((d2- d1) / (1000 * 60 * 60 * 24));
var price =document.getElementById('price').value;
var summa = d*price;
document.getElementById('summa').innerHTML="Итого к оплате: "+summa;

})

});