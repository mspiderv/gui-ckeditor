<?php

namespace Vitlabs\GUICKEditor\Providers;

use Vitlabs\GUICore\Providers\ImplementationServiceProvider;

class GUICKEditorServiceProvider extends ImplementationServiceProvider
{
    protected $contractsNamespace = 'Vitlabs\GUICKEditor\Contracts\FormElements\\';

    protected $implementationsNamespace = 'Vitlabs\GUICKEditor\FormElements\\';

    protected $bindElements = [
        'CKEditor',
    ];

    protected function getPackageName()
    {
        return 'gui-ckeditor';
    }

    protected function assetDirs()
    {
        return [
            __DIR__ . '/../Assets/'
        ];
    }

    protected function configFiles()
    {
        return [
            __DIR__ . '/../Config/' . $this->getPackageName() . '.php'
        ];
    }

}
