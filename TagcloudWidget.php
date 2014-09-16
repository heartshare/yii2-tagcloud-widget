<?php

namespace zeitgeist13\tagcloud;

/**
 * Renders a tagcloud based on model input
 */
class TagcloudWidget extends \yii\base\Widget
{
    /**
     * @var array Array of tags
     * 
     * Example: 
     * $tags = [
     *      ['title' => 'cookies' , 'route' => ['food/cookies'], 'weight' => '40'],
     *      ['title' => 'fruit' , 'route' => ['food/fruit'], 'weight' => '12'],
     * ]
     */
    public $tags;

    
    public function run()
    {
        return $this->render('index');
    }
}
