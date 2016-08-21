<?php

class Element {
	private $tag;
	private $children;
	private $disorder;
	
	private static contains($elemArray, $elem) 
	{
		$contains = false;
		$n = 0;
		while (!$contains && $n < count($elemArray) {
			$contains |= Element::equal($elemArray[$i], $elem);
			$i++;
		}
		return $contains;
	}

	private statis equal($item1, $item2)
	{
		if (($item1->tag != $item2->tag) || 
			($item1->disorder != $item2->disorder) ||
			(count($item1->children) != count($item2->children))
		) {
			return false;
		} else {
			$n = 0;
			$equal = true;
			$count = count($item->children);
			while ($equal && $n < $count) {
				$equal &= Element::equal($item1[$n], $item2[$n]);
			}
			return $equal;
		}
	}


	public function __construct($tag, $children, $disorder)
	{
		$this->tag = $element->tagName;
		foreach ($element->childNodes as $elem) {
			if ($elem->nodeType == 1) {
				$reduced = new Element($elem);
				if (Element::contains($this->children, $reduced)) {
					$this->children[] = $reduced;
				}
			
			}
		}
		usort($this->children, function ($e1, $e2) { return $e2->disorder - $e1->disorder; } );
		$this->disorder = array_reduce(
			$this->children,
			function ($carry, $child) {
				return $carry + $child->disorder;
			},
			0
		);
	}
}


