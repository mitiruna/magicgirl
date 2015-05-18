$(function(){
    $('button[name=btn_send]').click(function(){
       $('#submit_form').attr('action', 'complete');
   });
   $('button[name=btn_revision]').click(function(){
       $('#submit_form').attr('action', '../infomation');
   });
    
});

