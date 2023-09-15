function tuesdayfriday(){
   
const d = new Date(); 
 
  if (d.getDay() == 5 || d.getDay() == 2  && d.getHours()>=16) 
    {

            if(d.getHours()<=17)
            {
                      if(d.getMinutes()>=0)
                      {
                        window.location.href = "dailycall.php";
                      } 

                      else {
                        window.alert("Live Session on Tue/fri at 9-10 am");
                      }
            }
        
            
    }
    else {
      window.alert("Live Session on Tue/fri at 9-10 am");
    }
     
}

function mondaysaturday1(){
  const d = new Date();
  console.log(d);
  console.log("Hello world!");
  if (d.getDay() == 1 || d.getDay() == 6  && d.getHours()>=9) 
    {

            if(d.getHours()<=24)
            {
                      if(d.getMinutes()>=0)
                      {
                        window.location.href = "dailycall.php";
                        
                      } 

                      else {
                        window.alert("Please check the Schedule");
                      }
            }
        
            
    }
    else {
      window.alert("Live Session on Mon/Sat at 9-10 am");
    }
     
}


function sundaywednesday(){
  const d = new Date(); 
  if (d.getDay() == 0 || d.getDay() == 3  && d.getHours()>=9) 
    {

            if(d.getHours()<=10)
            {
                      if(d.getMinutes()>=0)
                      {
                        window.location.href = "dailycall.php";
                      } 

                      else {
                        window.alert("Live Session on Sun/Wed at 9-10 am");
                      }
            }
        
            
    }
    else {
      window.alert("Live Session on Sun/Wed at 9-10 am");
    }
     
}

function thursday(){
  const d = new Date(); 
  if (d.getDay() == 4  && d.getHours()>=9) 
    {

            if(d.getHours()<=10)
            {
                      if(d.getMinutes()>=0)
                      {
                        window.location.href = "dailycall.php";
                      } 

                      else {
                        window.alert("Live Session on Thursday 9-10");
                      }
            }
        
            
    }
    else {
      window.alert("Live Session on Thursday 9-10");
    }
     
}





function mondaysaturday(){
  
                        window.location.href = "dailycall.php";
             
}

          
  
