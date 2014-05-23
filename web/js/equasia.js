$( document ).ready(function() {
  $('button[type="submit"]').addClass('btn').addClass('btn-primary').addClass('btn-lg');
  $('input.date').datepicker({"dateFormat" : "yy-mm-dd"});
  // $('body').css('padding-top', '0');
  // $( document ).tooltip();
});