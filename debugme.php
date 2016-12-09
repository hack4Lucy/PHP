
// [Fri, 20161209]. How to use ISSET and EMPTY function in PHP during INSERTING/DELETING/DISPLAYING 
//                  records from MySQL database. ;
   
   // (1). Usage of ISSET function
   <?php 
     if (isset($_POST['add')) {
       // insert code here 
     }           
   ?>

   <input type="submit", name="add" value="ADD RECORD">    // The ISSET function doesn't work in this case since only NAME parameter is used.
   <input type="submit", id="add" name="add" value="ADD RECORD">              // The ISSET function works in this case because ID is used.
   
