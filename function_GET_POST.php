
// Function: GET_POST

// Usage
<?php 

// Add a record
if (isset($_POST['author']) &&
    isset($_POST['title'])  &&
    isset($_POST['type'])   &&
    isset($_POST['year'])   &&
    isset($_POST['isbn']) ) {

  $author = get_post('author');
  $title  = get_post('title');
  $type   = get_post('type');
  $year   = get_post('year');
  $isbn   = get_post('isbn');

  $query = "INSERT INTO classics(author, title, type, year, isbn) VALUES
                        ('$author', '$title', '$type', '$year', '$isbn')";

  if (!mysql_query($query, $db_server))
    echo "INSERT failed: $query<br />" . mysql_error() . "<br /><br />";
}

// This function has one small but critical job: fetching the input from the browser.
// It also removes leading blanks
function get_post($var) {
  return mysql_real_escape_string($_POST[$var]);
}

?>
