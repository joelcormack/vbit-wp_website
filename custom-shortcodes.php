<?php

// Slugify a string
function slugify($text)
{
    // Strip html tags
    $text=strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) { return 'n-a'; }
    // Return result
    return $text;
}

 function faq_function( $atts = array(), $content = null ) {
  
    // set up default parameters
    extract(shortcode_atts(array(
     'question' => 'Why am I here?'
    ), $atts));
    
    $slug = slugify($question);

    return '
    <div class="card">
        <div class="card-header" id="heading'. $slug .'">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#' . $slug . '" aria-expanded="true" aria-controls="' . $slug . '">
                ' . $question . '
                </button>
            </h2>
        </div>

        <div id="' . $slug . '" class="collapse" aria-labelledby="heading'. $slug .'" data-parent="#accordionExample">
            <div class="card-body">
              ' . $content . '
            </div>
        </div>
    </div>';
    
    
    
    //return '<a href="'. $link .'" target="blank" class="doti-button">' . $content . '</a>';
}
add_shortcode('faq', 'faq_function');
?>

                        