<?php
/**
* Author: Kamil Bylinka
*/

class phoneKeyboardConverter
{
	private $phoneKeys = array(
			'0' => ' ',
			'2' => 'a',
			'22' => 'b',
			'222' => 'c',
			'3' => 'd',
			'33' => 'e',
			'333' => 'f',
			'4' => 'g',
			'44' => 'h',
			'444' => 'i',
			'5' => 'j',
			'55' => 'k',
			'555' => 'l',
			'6' => 'm',
			'66' => 'n',
			'666' => 'o',
			'7' => 'p',
			'77' => 'q',
			'777' => 'r',
			'7777' => 's',
			'8' => 't',
			'88' => 'u',
			'888' => 'v',
			'9' => 'w',
			'99' => 'x',
			'999' => 'y',
			'9999' => 'z'
			);
	
	/**
	* @param $text
	*/
	public function convertToNumeric($text)
	{
		$phoneKeys=array_flip($this->phoneKeys);
		foreach (str_split(strtolower($text)) as $letter)
		{
			$numbers[]=$phoneKeys[$letter];
		}
		
		return implode(',',$numbers);
	}
	
	/**
	* @param $numbers
	*/
	public function convertToString($numbers)
	{
		$numbers=explode(',',$numbers);
		foreach ($numbers as $number)
		{
			$text[]=$this->phoneKeys[$number];
		}
		
		return implode('',$text);
	}
}
?>