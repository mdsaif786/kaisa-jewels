$(document).ready(function(){
    console.log( "ready!" );
    query=$('#listing_query_value').val();
    console.log(query);
    $('input.category_unchecked').on('change', function() {
    $('input.category_unchecked').not(this).prop('checked', false);  
    var cat_id=$('input[name="category_checked"]:checked').val();
    if(query){
      window.location=window.location.href + '&cat=' +cat_id;
    }else {
       window.location=window.location.href + '?cat=' +cat_id;
    }
   });

   $('input.language_unchecked').on('change', function() {
    $('input.language_unchecked').not(this).prop('checked', false);  
    var language_id=$('input[name="language_checked"]:checked').val();
    if(query){
      window.location=window.location.href + '&language=' +language_id;
    }else {
       window.location=window.location.href + '?language=' +language_id;
    }
});


$('input.exam_unchecked').on('change', function() {
    $('input.exam_unchecked').not(this).prop('checked', false);  
    var exam_id=$('input[name="exam_checked"]:checked').val();
    if(query){
      window.location=window.location.href + '&exam=' +exam_id;
    }else {
       window.location=window.location.href + '?exam=' +exam_id;
    }
});

$('input.exam_subunchecked').on('change', function() {
    $('input.exam_subunchecked').not(this).prop('checked', false);  
    var sub_exam_id=$('input[name="exam_subchecked"]:checked').val();
    if(query){
      window.location=window.location.href + '&sub_exam=' +sub_exam_id;
    }else {
       window.location=window.location.href + '?sub_exam=' +sub_exam_id;
    }
});


//educator
 $('input.educator_unchecked').on('change', function() {
    $('input.educator_unchecked').not(this).prop('checked', false);  
    var edu_id=$('input[name="educator_checked"]:checked').val();
    if(query){
      window.location=window.location.href + '&edu=' +edu_id;
    }else {
       window.location=window.location.href + '?edu=' +edu_id;
    }
   });
  $('input.skill_unchecked').on('change', function() {
    $('input.skill_unchecked').not(this).prop('checked', false);  
    var skill_id=$('input[name="skill_checked"]:checked').val();
    if(query){
      window.location=window.location.href + '&skill=' +skill_id;
    }else {
       window.location=window.location.href + '?skill=' +skill_id;
    }
   });
});

