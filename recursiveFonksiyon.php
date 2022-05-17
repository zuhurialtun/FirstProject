<?php
$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Meyveler'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Sebzeler'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Diğer'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'Elma'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'Üzüm'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Kırmızı Elma'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Yeşil Elma'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Havuç'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'Kırmızı Havuç'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'Turuncu Havuç'
    ],
    [
        'id' => 11,
        'parent' => 5,
        'name' => 'Sirkelik Üzüm'
    ],
    [
        'id' => 12,
        'parent' => 5,
        'name' => 'Çekirdeksiz Üzüm'
    ]
];


function categoryList(array $categories, int $parent = 0) : string
{
    $html = '<ul>';
    foreach ($categories as $category)
        if ($category['parent'] == $parent):
            $html .= '<li>' . $category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
        endif;
    $html .= '</ul>';
    return $html;
}

echo categoryList($categories);

?>