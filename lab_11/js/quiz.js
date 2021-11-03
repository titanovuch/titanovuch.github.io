var result;
    
function check(){
   var question;
   var value2;
   var value3;
   var value4;
   var value5;
   var k, s;
          
   question = 1;
   value2 = 0;
   value3 = 0;
   value4 = 9;
   value5 = "Канекі";
   ans1 = document.getElementById('ans1').value;
   ans2 = document.getElementById('ans2').value;
   k = 0;
   s = 0;
          
   result = 0;
    
   var choice;
          
   for (question = 1; question <= 4; question++) {
      var q = document.forms['quiz'].elements['q'+question];
    
      for (var i = 0; i < q.length; i++) {
         if (q[i].checked) {
            choice = q[i].value;
         }
      }
    
      if (choice == "value2") {
         value2++;
      }

      if (choice == "value3") {
         value3++;
      }
   }

   if (value4 == ans1) {
      k+=1;
   }

   if (value5 == ans2) {
      s+=1;
   }

   result = value2 + value3 + k + s;
   alert("Кількість правильних відповідей: " + result); 
}