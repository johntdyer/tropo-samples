<?php
// -----------
// repeating the question
// -----------


answer();

$result = ask( "For sales, press 1. For support, press 2.", 
				array( "choices" => "1, 2", "repeat" => 3, "timeout" => 5 ) );

if ($result->name=="choice")
{
	if ($result->value=="1") say( "sales is not available right now."); 
	if ($result->value=="2") say( "support is currently on the other line." ); 
}

hangup();
?>