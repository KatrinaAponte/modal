<?php
/**
 * SVG Icons class
 * 
 * @package WordPress
 * @subpackage Modal
 * @since Modal 1.0
 */

/**
 * Class for displaying SVG icons on site.
 * 
 * Place each <svg> source on its own array key, without adding either the 'width' or 'height' attributes so they can be added dynamically before rendering the SVG code.
 * 
 * All icons should have equal width and height and will have a '$size' parameter in the svg methods.
 * 
 * @since Modal 1.0
 */
class Modal_Icons {

    /**
     * SVG Icon sources
     * 
     * @access protected 
     * @since Modal 1.0
     * @var array
     */

    protected static $icons = array(
        'close'         => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><rect id="topLeft" x="-34.71" y="83.79" width="310" height="73" rx="36.5" transform="translate(120.29 -49.83) rotate(45)"/><rect id="botRight" x="172.71" y="291.21" width="310" height="73" rx="36.5" transform="translate(327.71 -135.74) rotate(45)"/><rect id="topRight" x="172.71" y="83.79" width="310" height="73" rx="36.5" transform="translate(644.49 -26.37) rotate(135)"/><rect id="botLeft" x="-34.71" y="291.21" width="310" height="73" rx="36.5" transform="translate(437.08 474.37) rotate(135)"/></svg>',
        'hamburger'     => '<svg id="hamburger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><rect x="1" y="374" width="446" height="73" rx="36.5"/><rect x="1" y="250" width="446" height="73" rx="36.5"/><rect x="1" y="126" width="446" height="73" rx="36.5"/><rect x="1" y="2" width="446" height="73" rx="36.5"/></svg>',
      
    );

    /**
     * Social Icon Sources
     * 
     * @access protected
     * @since Modal 1.0
     * @var array
     */
    protected static $social_icons = array(
        'about'             => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="body" d="M338.7,268.24a22.66,22.66,0,0,0-21.54-.12,198.79,198.79,0,0,1-186.32,0,22.66,22.66,0,0,0-21.54.12C43.63,304.64-.37,371.35-.37,447.63c0,.7,448.74.23,448.74,0C448.37,371.35,404.37,304.64,338.7,268.24Z"/><circle id="head" cx="224" cy="126.13" r="126.13"/></svg>',
        'email'             => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="top" d="M430.36,97.87H17.5a3.14,3.14,0,0,0-1.7,5.78L208.23,228a27.86,27.86,0,0,0,30.18,0L432.06,103.65A3.14,3.14,0,0,0,430.36,97.87Z"/><path id="left" d="M173.88,223,23.31,125.86A14.57,14.57,0,0,0,.84,138.11V327.56A14.53,14.53,0,0,0,2.4,334.1Z"/><path id="right" d="M445.25,334.44a14.5,14.5,0,0,0,1.72-6.88V137.71a14.57,14.57,0,0,0-22.43-12.28L272.76,222.66Z"/><path id="bottom" d="M265.41,235.38,230.8,257.55a14.59,14.59,0,0,1-15.77,0l-33.82-21.82L7.89,348a14.49,14.49,0,0,0,7.52,2.11h417a14.5,14.5,0,0,0,7.17-1.89Z"/></svg>',
        'instagram'         => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><defs><style>.cls-1 {fill: none;   stroke: #000;stroke-miterlimit: 10;stroke-width: 40px;}</style></defs><rect id="square" class="cls-1" x="21.5" y="21.5" width="405" height="405" rx="97.01"/><circle id="lense" class="cls-1" cx="224" cy="224" r="95"/><circle id="flash" cx="341.5" cy="104" r="30"/></svg>',
        'linkedin'          => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><circle id="dot" cx="55.82" cy="74.87" r="53.82"/><rect id="i" x="13.21" y="148.87" width="89.7" height="278.06"/><path id="n" d="M154.48,426.93h96.43V254.26c13.45-29.15,69.51-47.09,91.94-2.24V426.93H446V243.05c-9-69.52-76.24-96.43-112.12-96.43s-71.76,20.19-85.21,38.13V148.87H154.48Z"/></svg>',
        'message'           => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="back" d="M447.19,219.8c0-37.42-34.73-70.08-86.29-87.49,10.58,12.8,16.52,27.17,16.52,42.35,0,53.64-74.08,97.12-165.46,97.12-10.85,9.81-26.21,19.1-44.57,26.47,29.51,14,67.06,22.4,108,22.4,27.48,24.87,82.85,46.51,143.35,43.75-25.31-9.67-59.71-33.62-68.41-54.34C425.44,288,447.19,253.54,447.19,219.8Z"/><path id="front" d="M178.09,83.36C80.18,83.36.81,123.37.81,172.71c0,29.9,22.44,60.39,100,80-9,18.36-44.47,39.58-70.58,48.14,62.42,2.45,119.54-16.72,147.9-38.76,97.9,0,177.27-40,177.27-89.35S276,83.36,178.09,83.36ZM103.61,190.93a22.29,22.29,0,1,1,22.28-22.28A22.28,22.28,0,0,1,103.61,190.93Zm76.12,0A22.29,22.29,0,1,1,202,168.65,22.27,22.27,0,0,1,179.73,190.93Zm71.9,0a22.29,22.29,0,1,1,22.28-22.28A22.28,22.28,0,0,1,251.63,190.93Z"/></svg>',
        'phone'             => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><defs><style>.cls-1, .cls-2 {fill: none;stroke: #000;stroke-miterlimit: 10;}.cls-1 {stroke-width: 2px;}.cls-2 {stroke-linecap: round;stroke-width: 4px;}</style></defs><path id="phone-2" data-name="phone" d="M308.57.88H139.43A34.11,34.11,0,0,0,105.32,35V413a34.11,34.11,0,0,0,34.11,34.11H308.57A34.11,34.11,0,0,0,342.68,413V35A34.11,34.11,0,0,0,308.57.88ZM184.44,23.42a4.75,4.75,0,0,1,4.75-4.75h69.62a4.75,4.75,0,0,1,4.75,4.75v2.37a4.75,4.75,0,0,1-4.75,4.75H189.19a4.75,4.75,0,0,1-4.75-4.75ZM224,437.64a13.45,13.45,0,1,1,13.45-13.45A13.45,13.45,0,0,1,224,437.64Zm93-35H131V45.38H317Z"/><circle id="circle" class="cls-1" cx="224" cy="224" r="78.14"/><path id="phone-3" data-name="phone" d="M182.63,186.1c-8.64,3.55-14.41,11.53-14.85,20s1.55,30.6,24.39,49.9,48.35,29.49,61.21,22,12.86-16.85,11.09-20.4c-.22-1.11-3.11-3.55-3.11-3.55s-25.94-5.54-27.05-5.54-4.44.66-5.32,1.77-3.55,7.76-3.55,7.76c-4.66-2-13.75-7.76-19.52-13.08s-13.75-16-14.64-18.85c2.22-1.33,8.65-4.44,9.1-6.43s-5.1-28.83-6.66-30.39S186,184.55,182.63,186.1Z"/><path id="ln1" class="cls-2" d="M223,203c3.77.45,10.86,3.55,15.08,8a31.28,31.28,0,0,1,6.65,12.86"/><path id="ln2" class="cls-2" d="M261.14,223.36c-.22-6.21-6.65-20.18-14.19-26.39s-17.08-9.76-24.62-10"/><path id="ln3" class="cls-2" d="M222.33,171.68c4.88,0,23.73,2.89,37.48,16.64S276.89,215.15,278,224"/></svg>',
        'portfolio'         => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="handle" d="M350.39,136.59c.55-5.51-7.72-22.06-24.26-21.51h-91s.55-15.44,0-15.44C234.58,89.16,222.45,72.07,204.8,71H146.35c-13.24,0-30.89,20.4-29.78,32v13.24H21.16c-14.34.55-20.4,17.64-19.85,23.16v187.5S75.2,178.5,75.2,178c6.62-11,25.92-25.37,41.37-26.47H350.39S350.94,137.14,350.39,136.59Zm-136.21-21H138.07v-11.3a12.41,12.41,0,0,1,12.41-12.41h51.29a12.41,12.41,0,0,1,12.41,12.41Z"/><path id="flap" d="M436.26,172.44H127.12a39.8,39.8,0,0,0-35.77,22.34L9.78,362a10.45,10.45,0,0,0,9.39,15H328.31a39.79,39.79,0,0,0,35.77-22.34l81.58-167.21A10.46,10.46,0,0,0,436.26,172.44ZM278.09,258.15c-9.55,34.44-45.73,33.28-58.75,31L203.13,352.5h-13s38.45-149.35,38.49-149.35C265.21,209.09,287.65,223.7,278.09,258.15Z"/><path id="p" d="M237.43,214.44s-16.5,65.12-16.21,64.54c23.59,4.06,42.82-4.59,48.19-25.61C276.07,227.32,252.91,216.61,237.43,214.44Z"/></svg>',
        'twitch'            => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="outline" d="M41.23.49,11.33,78.23,10.58,390h106.9v57.56h59.8l56.81-56.81h86.72L437.42,274.08V.49ZM396.31,253.9l-65.79,67.28H222.88L167.56,376.5V319.68H77.86S78.28,42,77.86,41.6H396.31Z"/><rect id="lEye" x="184.01" y="117.85" width="40.37" height="116.62"/><rect id="rEye" x="289.41" y="117.1" width="40.37" height="118.11"/></svg>',
        'twitter'           => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="bird" d="M306,35.47c46.19,0,76.21,34.65,76.21,34.65C389.12,65.5,435.31,47,435.31,47L398.36,97.83,446.86,84s-27.72,39.26-46.19,46.19c0,13.86-16.17,147.8-60,196.3S162.8,474.26,1.14,358.79C15,361.1,101.6,364.56,136.24,325.3c-41.57-6.92-71.59-30-85.45-64.66,11.55,2.31,30,0,30,0C55.41,239.86,25.39,212.14,11.53,166c9.24,4.61,30,9.23,41.57,6.92-18.47-16.16-39.26-55.42-25.4-124.7,23.09,23.09,145.49,127,182.44,97C217.07,133.62,217.07,38.94,306,35.47Z"/></svg>',
        'youtube'           => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448"><path id="play" d="M368.53,67.5H79.47A77.86,77.86,0,0,0,1.61,145.37V302.63A77.86,77.86,0,0,0,79.47,380.5H368.53a77.86,77.86,0,0,0,77.86-77.87V145.37A77.86,77.86,0,0,0,368.53,67.5ZM175.17,278.72V152.81L294,215.17Z"/></svg>',
    );

    /**
     * Social Icons domain mapping
     * 
     * Each icon ID is matched against a .com. To override, specify all the domains it covers.
     * 
     * @since Modal 1.0
     * @var array
     */

    protected static $social_icons_map = array(
        'amazon'        => array(
            'amazon.com.br',
            'amazon.ca',    
            'amazon.com.mx',    
            'amazon.com',    
            'amazon.cn',    
            'amazon.in',    
            'amazon.co.jp',    
            'amazon.sg',    
            'amazon.com.tr',    
            'amazon.ae',   
            'amazon.sa',   
            'amazon.fr',   
            'amazon.de',   
            'amazon.it',   
            'amazon.nl',   
            'amazon.pl',   
            'amazon.es',   
            'amazon.se',   
            'amazon.co.uk',   
            'amazon.co.au',   
        ),
        'behance'       => array(
            'behance.net',
        ),
        'email'         => array(
            'mailto:',
        ),
        'instagram'     => array(
            'instagram.com',
        ),
        'linkedin'      => array(
            'linkedin.com'
        ),
        'phone'         => array(
            'tel:',
        ),
        'twitch'        => array(
            'twitch.tv',
        ),
        'twitter'       => array(
            'twitter.com',
        ),
        'youtube'       => array(
            'youtube.com',
            'youtu.be',
        ),
    );

    /**
     * Gets teh SVG code for each icon.
     * 
     * @static
     * @access public
     * @since Modal 1.0
     * 
     * @param string $group the icon group.
     * @param string $icon the icon.
     * @param int    $size the icon-size in pixels.
     * 
     * @return string
     */
    public static function get_svg( $group, $icon, $size ) {
        if ( 'ui' === $group ) {
            $arr = self::$icons;
        } elseif ( 'social' === $group ) {
            $arr = self::$social_icons;
        } else {
            $arr = array();
        }

        /**
         * Filters Modal array of icons.
         * 
         * The dynamic portion of the hook name, '$group', refers to the name of the group of icons, either "ui" or "social".
         * 
         * @since Modal 1.0
         * @param array $arr Array of icons.
         */
        $arr = apply_filters( "modal_svg_icons_{$group}", $arr );

        $svg = '';
        if ( array_key_exists( $icon, $arr ) ) {
            $repl = sprintf( '<svg class="svg-icon" width="%d" height="%d" aria-hidden="true" role="img" focusable="false" ', $size, $size );

            $svg = preg_replace( '/^<svg /', $repl, trim( $arr[ $icon ] ) ); // Add extra attributes to SVG code.
        }

        // @phpstan-ignore-next-line.
        return $svg;
    }

    /**
     * Detects the social network from a URL and returns the SVG code for its icon.
     * 
     * @static
     * @access public
     * @since Modal 1.0
     * 
     * @param string $uri Social link.
     * @param int    $size The icon-size in pixels.
     * 
     * @return string|null
     */
    public static function get_social_link_svg( $uri, $size ) {
        static $regex_map; // Only compute regex map once.

        if ( ! isset( $regex_map ) ) {
            $regex_map = array();

            /**
             * Filters Modal's array of domain mappings for social icons.
             * 
             * Default matches icon id to a .com TLD.
             * 
             * @since Modal 1.0
             * 
             * @param array $social_icons Array of default social icons.
             */
            $map = apply_filters( 'modal_svg_icons_social', self::$social_icons_map );

            /**
             * Filters Modal's array of social icons.
             * 
             * @since Modal 1.0
             * 
             * @param array $social_icons Array of default social icons.
             */
            $social_icons = apply_filters( 'modal_svg_icons_social', self::$social_icons );

            foreach ( array_keys( $social_icons ) as $icon ) {
                $domains            = array_key_exists( $icon, $map ) ? $map[ $icon ] : array( sprintf( '%s.com', $icon ) );

                $domains            = array_map( 'trim', $domains ); //Remove leading/trailing spaces, to prevent regex from failing to match.

                $domains            = array_map( 'preg_quote', $domains );

                $regex_map[ $icon ] = sprintf( '/(%s)/i', implode( '|', $domains ) );
            }
        }

        foreach ( $regex_map as $icon => $regex ) {
            if ( preg_match( $regex, $uri ) ) {

                return self::get_svg( 'social', $icon, $size ) . '<span class="screen-reader-text">';
            }
        }
        return null;
    }
}