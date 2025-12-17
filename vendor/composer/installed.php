<?php return array(
    'root' => array(
        'name' => 'anora/pizza-app',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'anora/lib' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '6aeb0dbb80156120da929da444fa1708e58ceac4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../anora/lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'anora/pizza-app' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
