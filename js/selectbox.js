$(document).ready(function()
{
 $(".country").change(function()
 {
  var id=$(this).val();
  var dataString = 'id='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "kota/selectbox",
   data: dataString,
   cache: false,
   success: function(html)
   {
      $(".provinsi").html(html);
   } 
   });
  });
 
 
 $(".provinsi").change(function()
 {
  var id=$(this).val();
  var dataString = 'id='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "kota/selectbox",
   data: dataString,
   cache: false,
   success: function(html)
   {
    $(".kota").html(html);
   } 
   });
  });
 
});