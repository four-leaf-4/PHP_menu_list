<?php

function config($key = '')
{
    $config = [
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}

$arr = [
  0 => [
    'title'=>'Home',
    'children'=> [
      0 => [
        'title'=>'about us',
        'children' => [
        0 => [
          'title'    => 'contact',
          'children' => [
          ],
        ],
        1 => [
          'title'    => 'our policy',
          'children' => [
          ],
        ],
        2 => [
          'title'    => 'map',
          'children' => [
          ],
        ],
      ],
    ],
    1 => [
      'title'=>'history',
    ],
  ],
],

1 => [
  'title'=> 'service',
  'children' => [
      0 => [
        'title' => 'industory',
        'children' => [
        0 => [
          'title'    => 'car',
          'children' => [
          ],
        ],
        1 => [
          'title'    => 'steel',
          'children' => [
          ],
        ],
      ],
    ],
    1 => [
      'title'=>'IT',
      'children' => [
      ],
    ],
    2 => [
      'title'=>'consult',
      'children' => [
      ],
    ],
  ],
],
];
