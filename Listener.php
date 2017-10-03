<?php

namespace XenForge\ReplyAlerter;

class Listener
{
	public static function postPreSave(\XF\Mvc\Entity\Entity $entity)
	{
		/*$m = fopen("test.html", "w");
		fwrite($m, \XF::dumpSimple($entity));
		fclose($m);*/
	}
}