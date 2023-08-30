<?php if( have_rows('content_blocks') ): while ( have_rows('content_blocks') ) : the_row();

    if( get_row_layout() == 'hero' ):

    	get_template_part('builder/hero');

    elseif( get_row_layout() == 'drawer' ):
   
        get_template_part('builder/drawer');

    elseif( get_row_layout() == 'awards' ):
   
        get_template_part('builder/awards');

    elseif( get_row_layout() == 'client_quote' ):
   
        get_template_part('builder/client-quote');   

    elseif( get_row_layout() == 'testimonials' ):
   
        get_template_part('builder/testimonials');

    elseif( get_row_layout() == 'industries' ):
   
        get_template_part('builder/industries');
   
    elseif( get_row_layout() == 'image_callout' ):
   
        get_template_part('builder/image-callout');
   
    elseif( get_row_layout() == 'cta' ):
   
        get_template_part('builder/cta');

    elseif( get_row_layout() == 'columns' ):
   
        get_template_part('builder/columns');
   
    elseif( get_row_layout() == 'standard_content' ):
   
        get_template_part('builder/standard-content');
   
    elseif( get_row_layout() == 'form_callout' ):
   
        get_template_part('builder/form-callout');
   
    
    endif;

endwhile; endif; ?>