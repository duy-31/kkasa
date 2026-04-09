<?php
/**
 * HSLColor compatible PHP 8.2
 */

class HSLColor
{
	/**
	 * Déclaration explicite des propriétés pour PHP 8.2+
	 */
	protected $hue = 0;
	protected $saturation = 0;
	protected $lightness = 0;

	/**
	 * Constructeur moderne
	 */
	public function __construct( $hue = 0, $saturation = 0, $lightness = 0 )
	{
		$this->hue = $hue;
		$this->saturation = $saturation;
		$this->lightness = $lightness;
	}

	public function getHue() { return $this->hue; }
	public function getSaturation() { return $this->saturation; }
	public function getLightness() { return $this->lightness; }

	public function setHue( $hue ) { $this->hue = $hue; }
	public function setSaturation( $saturation ) { $this->saturation = $saturation; }
	public function setLightness( $lightness ) { $this->lightness = $lightness; }

	/**
	 * Retourne la couleur au format hexadécimal (#RRGGBB)
	 */
	public function getRGBString()
	{
		return self::convertHSLToRGBString( $this->hue, $this->saturation, $this->lightness );
	}

	/**
	 * Définit la couleur à partir d'un format HEX (#RRGGBB)
	 */
	public function setRGBString( $rgbString )
	{
		$rgb = self::convertRGBStringToRGB( $rgbString );
		$hsl = self::convertRGBToHSL( $rgb['r'], $rgb['g'], $rgb['b'] );
		$this->hue = $hsl['h'];
		$this->saturation = $hsl['s'];
		$this->lightness = $hsl['l'];
	}

	public static function convertRGBStringToRGB( $color )
	{
		if ( $color[0] == '#' ) {
			$color = substr( $color, 1 );
		}
		if ( strlen( $color ) == 6 ) {
			list( $r, $g, $b ) = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			list( $r, $g, $b ) = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return array( 'r' => 0, 'g' => 0, 'b' => 0 );
		}
		return array( 'r' => hexdec( $r ), 'g' => hexdec( $g ), 'b' => hexdec( $b ) );
	}

	public static function convertRGBToHSL( $r, $g, $b )
	{
		$r /= 255; $g /= 255; $b /= 255;
		$max = max( $r, $g, $b ); $min = min( $r, $g, $b );
		$h = 0; $s = 0; $l = ( $max + $min ) / 2;

		if ( $max != $min ) {
			$d = $max - $min;
			$s = $l > 0.5 ? $d / ( 2 - $max - $min ) : $d / ( $max + $min );
			switch ( $max ) {
				case $r: $h = ( $g - $b ) / $d + ( $g < $b ? 6 : 0 ); break;
				case $g: $h = ( $b - $r ) / $d + 2; break;
				case $b: $h = ( $r - $g ) / $d + 4; break;
			}
			$h /= 6;
		}
		return array( 'h' => $h, 's' => $s, 'l' => $l );
	}

	public static function convertHSLToRGB( $h, $s, $l )
	{
		if ( $s == 0 ) {
			$r = $g = $b = $l;
		} else {
			$q = $l < 0.5 ? $l * ( 1 + $s ) : $l + $s - $l * $s;
			$p = 2 * $l - $q;
			$r = self::Hue_2_RGB( $p, $q, $h + 1 / 3 );
			$g = self::Hue_2_RGB( $p, $q, $h );
			$b = self::Hue_2_RGB( $p, $q, $h - 1 / 3 );
		}
		return array( 'r' => round( $r * 255 ), 'g' => round( $g * 255 ), 'b' => round( $b * 255 ) );
	}

	public static function convertHSLToRGBString( $h, $s, $l )
	{
		$rgb = self::convertHSLToRGB( $h, $s, $l );
		return sprintf( '#%02X%02X%02X', $rgb['r'], $rgb['g'], $rgb['b'] );
	}

	private static function Hue_2_RGB( $v1, $v2, $vH )
	{
		if ( $vH < 0 ) $vH += 1;
		if ( $vH > 1 ) $vH -= 1;
		if ( ( 6 * $vH ) < 1 ) return ( $v1 + ( $v2 - $v1 ) * 6 * $vH );
		if ( ( 2 * $vH ) < 1 ) return $v2;
		if ( ( 3 * $vH ) < 2 ) return ( $v1 + ( $v2 - $v1 ) * ( ( 2 / 3 ) - $vH ) * 6 );
		return $v1;
	}
}
