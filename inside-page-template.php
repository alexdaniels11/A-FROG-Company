


<!------------------------------------------------------


DO NOT CHANGE THIS FILE! <==========================================================
ONLY EDIT THIS CODE IF IT HAS BEEN COPIED TO A NEW FILE! <==========================


Follow These Instructions for creating a new inside page <==========================


1)

When creating a new inside page, copy all of the code
from this file (from the Header down) to your new file
and make sure to save that file in .php format with a
new file name, DO NOT CHANGE THIS FILE.

2)

UPON COPYING THE CODE TO THE NEW PAGE, ADD A NEW
TITLE TO REPLACE THE WORDS "page title goes here".

3)

UPON COPYING THE CODE TO THE NEW PAGE, ADD A NEW
META DESCRIPTION TO REPLACE THE WORDS "meta
description goes here".

4)

ONCE THE META DESCRIPTION AND TITLE HAVE BEEN CHANGED,
CREATE A NEW FILE IN inc/main-content AND REPLACE THE
_______MAIN________.php WITH YOUR NEW FILE WHERE IT
SAYS "Place php include main content here".

5)

ONCE THE MAIN CONTENT HAS BEEN INCLUDED ON THE PAGE,
CREATE A NEW FILE IN inc/sidebars (OR USE A PRE-EXISTING ONE)
AND REPLACE THE _______SIDE________.php WITH YOUR NEW
FILE WHERE IT SAYS "Place php include sidebar here".




To see an example of how all of this needs to look like
when fully completed, look at frog-standards.php <===================================

---------------------------------------------------->




<!-- Header -->

<?php  $page_title="page title goes here | A FROG Company";?> 
<?php $page_meta="meta description goes here";?>
<?php include 'inc/header.php';?>


<div class="photo-bar sec1arrow"></div>

<div class="container">



<!--================== LEFT MAIN CONTENT ==================-->


	<article class="two-third-left">
		
		<!-- Place php include main content here -->
		<?php include 'inc/main-content/_______MAIN________.php' ;?>

	</article>




<!--================== RIGHT SIDEBAR CONTENT ==================-->


	<aside class="one-third-right">
		
		<!-- Place php include sidebar here -->
		<?php include 'inc/sidebars/_______SIDE________.php' ;?>

	</aside>






</div>

<!-- Footer -->

<?php include 'inc/footer.php' ;?>















