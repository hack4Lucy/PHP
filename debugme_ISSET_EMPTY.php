
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
  

   // (2). Usage of EMPTY function
   <?php 
     if (isset($_POST['add')) {
        
       if (!empty($author) &&
            !empty($title)  &&
            !empty($type)   &&
            !empty($year)   &&
            !empty($isbn) ) {
          
          // insert code here
       }
        
     }           
   ?>

   <input type="submit", id="add", name="add" value="ADD RECORD">

   // This doesn't work since no ID reference is used
   Author <input type="text", name="author" value="">
   Title  <input type="text", name="title"  value="">
   Type   <input type="text", name="type"   value="">
   Year   <input type="text", name="year"   value="">
   ISBN   <input type="text", name="isbn"   value="">

   // This worka since ID reference is used
   Author <input type="text", id="author", name="author" value="">
   Title  <input type="text", id="title",  name="title"  value="">
   Type   <input type="text", id="type",   name="type"   value="">
   Year   <input type="text", id="year",   name="year"   value="">
   ISBN   <input type="text", id="isbn",   name="isbn"   value="">

        
