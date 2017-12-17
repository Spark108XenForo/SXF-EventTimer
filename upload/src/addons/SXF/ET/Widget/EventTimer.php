<?php

namespace SXF\ET\Widget;

use \XF\Widget\AbstractWidget;

class EventTimer extends AbstractWidget
{
	public function render()
	{
		$opt = $this->options;
	
		$timeEnd = strtotime($opt['end']) - time();
		
		if ($opt['hide'] && $timeEnd < 0 && ($timeEnd + $opt['hide_time']) < 0)
		{
			return;
		}
		
		$viewParams = [
			'description' => $opt['description'],
			'end_time' => $timeEnd,
			'background_image' => $opt['background_image'],
			'background_color' => $opt['background_color'],
			'timer_color' => $opt['timer_color'],
			'end_message' => $opt['end_message']
		];
		
		return $this->renderer('widget_sxf_et_eventTimer', $viewParams);
	}
}