<?php 
// code php
$menus = [
    [
        'name' => 'Trang chủ123',
        'link' => 'https://example.com'
    ],
    [
        'name' => 'Trang danh sách sản phẩm',
        'link' => '#'
    ],
    [
        'name' => 'Trang giới thiệu',
        'link' => '#'
    ],
    [
        'name' => 'Trang liên hệ',
        'link' => '#'
    ],
];

?>

<ul>
    <?php foreach($menus as $menu): ?>
        <li>
            <a href="<?= $menu['link']; ?>">
                <?= $menu['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>