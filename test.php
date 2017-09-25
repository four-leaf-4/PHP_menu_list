<?php
  //Enter your code here, enjoy!
  $arr = [
    0=>[
      'title'=>'N1',
      'children'=>[
        0 =>[
          'title'=>'N11',
          'children' =>[
            0 =>[
              'title'=>'N111',
              'children' => [],
            ],
          ],
        ],
      ],
    1 =>[
      'title'=> 'N2',
      'children' =>[
        0 =>[
          'title'=>'N21',
          'children' =>[
          ],
        ],
      ],
    ],
];

    function menu($arr) {
        echo "<ul>";
        foreach ($arr as $val) {

            if (!empty($val['children'])) {
                echo "<li>" . $val['title'];
                menu($val['children']);
                echo "</li>";
            } else {
                echo "<li>" . $val['title'] . "</li>";
            }
        }
        echo "</ul>";
    }
