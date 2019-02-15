//Login Form JavaScript**********************************************

$('.form').find('input, textarea').on('keyup blur focus', function (e) {

  var $this = $(this),
  label = $this.prev('label');

  if (e.type === 'keyup') {
    if ($this.val() === '') {
      label.removeClass('active highlight');
    } else {
      label.addClass('active highlight');
    }
  } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight');
      } else {
        label.removeClass('highlight');
      }
  } else if (e.type === 'focus') {
      if( $this.val() === '' ) {
      label.removeClass('highlight');
      }
      else if( $this.val() !== '' ) {
      label.addClass('highlight');
      }
  }
});

$('.tab a').on('click', function (e) {

  e.preventDefault();

  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');

  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();

  $(target).fadeIn(600);

});

//End of Login JavaScript****************************************/


//Itempage Counter JavaScript***********************************

//QUANTITY COUNTER JAVASCRIPT
 var count = 1;
 var countEl = document.getElementById("count");
 function plus(){
     count++;
     countEl.value = count;
 }
 function minus(){
   if (count > 1) {
     count--;
     countEl.value = count;
   }
 }

//End of Itempage Counter JavaScript***********************************
