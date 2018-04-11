<!-- 
// Grab icon HTML code from dashicons website and replace 'icon' with that code
// Now want user to be able to change icon if desired. Pull in the icon attribute, display it with the attributes array item. Use the correct esc function to clean up the user input. 
//using attr function since we are escaping a value that is not content. Here we are escaping an attribute of the span tag. 
// Now let's make this friendly for screen readers. Tell them what this thing is. Add aria attribute to span tag and add new span tag with screen-reader-text attribute (should be hidden in your css file) and an instruction to the screen reader device.
// now let's add in the schema.org microdata to the question div - go to schema.org/question since we are working with a Q&A content here. Grab the schema line from the example and add it to the initial element. 
//    Go grab the schema line for the answer and add it too. 
// The initial state of the answer is hidden. We need to address this. We are going to do this with jquery.
// dd inline style to start as hidden. 
--> 
<dl class="collapsible-content--container qa">
	<dt class="collapsible-content--visible" itemscope itemtype="http://schema.org/Question">
		<span class="collapsible-content--icon <?php echo $attributes['show_icon']; ?>" aria-hidden="true" data-show-icon="<?php echo $attributes['show_icon']; ?>" data-hide-icon="<?php esc_attr_e( $attributes['hide_icon'] ); ?>"><span class="screen-reader-text">Click to reveal the answer</span></span> <?php esc_html_e( $attributes['question'] ); ?>
	</dt>
	<dd class="collapsible-content--hidden" itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer" style="display: none;"><?php echo $hidden_content; ?></dd>
</dl>